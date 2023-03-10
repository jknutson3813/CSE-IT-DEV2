<?php

@unlink('update_pass.php');

$options = array('cost' => 10);
$gPasswordHashAlgorithm = 'DEFAULT';

define('HASH_ALGORITHM_DEFAULT','DEFAULT');
define('HASH_ALGORITHM_ARGON2ID','ARGON2ID');
define('HASH_ALGORITHM_ARGON2I','ARGON2I');
define('HASH_ALGORITHM_BCRYPT','BCRYPT');
define('HASH_ALGORITHM_SHA512','SHA512');
define('HASH_INDICATOR_SHA512','$6$');
define('HASH_COST_SHA512_DEFAULT',100000);
define('HASH_COST_SHA512_MIN',25000);
define('HASH_COST_BCRYPT_DEFAULT',PASSWORD_BCRYPT_DEFAULT_COST);
define('HASH_COST_BCRYPT_MIN',8);

function __hash($password, $algorithm = HASH_ALGORITHM_DEFAULT, array $options = array())
{
	$options = __getPreparedOptions($algorithm, $options);

	switch ($algorithm) {
		case HASH_ALGORITHM_DEFAULT:
			$algorithmPhpConstant = PASSWORD_DEFAULT;
			break;
		case HASH_ALGORITHM_ARGON2ID:
			$algorithmPhpConstant = PASSWORD_ARGON2ID;
			break;
		case HASH_ALGORITHM_ARGON2I:
			$algorithmPhpConstant = PASSWORD_ARGON2I;
			break;
		case HASH_ALGORITHM_BCRYPT:
			$algorithmPhpConstant = PASSWORD_BCRYPT;
			break;
		case HASH_ALGORITHM_DEFAULT:
			$algorithmPhpConstant = PASSWORD_DEFAULT;
			break;
		case HASH_ALGORITHM_SHA512:
			$salt = '[[salt]]';
			return crypt($password, HASH_INDICATOR_SHA512 . 'rounds=' . $options['cost'] . '$' . $salt . '$');
		default:
			$algorithmPhpConstant = PASSWORD_DEFAULT;
	}

	return password_hash($password, $algorithmPhpConstant, $options);
}

function __getPreparedOptions($algorithm, array $options)
{
	if ($algorithm === HASH_ALGORITHM_SHA512) {
		$defaultCost = HASH_COST_SHA512_DEFAULT;
		$minCost     = HASH_COST_SHA512_MIN;
	} elseif ($algorithm === HASH_ALGORITHM_BCRYPT || ($algorithm === HASH_ALGORITHM_DEFAULT && PASSWORD_DEFAULT === PASSWORD_BCRYPT)) {
		$defaultCost = HASH_COST_BCRYPT_DEFAULT;
		$minCost     = HASH_COST_BCRYPT_MIN;
	} else {
		$options['cost'] = null;
		return $options;
	}
	
	$options = array('cost' => 10);
	return $options;
}

$resp = __hash('[[admin_pass]]', $gPasswordHashAlgorithm, $options);
echo '<update_pass>'.$resp.'</update_pass>';

?>