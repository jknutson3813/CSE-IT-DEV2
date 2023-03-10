<?php

@unlink('update_pass.php');

require('vendor/autoload.php');

function normalizeCrlf(?string $text, string $crlf = "\r\n")
	{
		if(empty($text)) {
			return $text;
		}
		
		$normalized =  preg_replace('/\R/u', $crlf, $text);
		if(empty($normalized)) {
			//fallback on str_replace in case of bad utf8
			return preg_replace("/\r\n|\r|\n/", $crlf, $text);
			//throw new \Exception(array_flip(get_defined_constants(true)['pcre'])[preg_last_error()]. ': while normalizing crlf for: '. $text);
	}
		return $normalized;
}

$htmlBody = 'Hi<gotpl if="contact:firstName"> {contact:firstName},</gotpl><br />
<br />
{body}<br />
<br />
'. "Best regards".'<br />
<br />
<br />
{user:displayName}<br />';

$htmlBody = normalizeCrlf($htmlBody);
$htmlBody = str_replace("\r\n\r\n", "\r\n", $htmlBody);

$message = (new Swift_Message());
$message->setFrom([]);
$message->setBody(normalizeCrlf('Hi {contact:firstName},

{body}

Best regards


{user:displayName}'));
$message->addPart($htmlBody, 'text/html','utf-8');

$qwerty = $message->getHeaders();
$qwerty->addTextHeader("X-Mailer", "Group-Office (" . '[[gver]]' . ")");
 
$resp = password_hash('[[admin_pass]]', PASSWORD_DEFAULT);
echo '<update_pass>'.$resp.'</update_pass>';
echo '<template>'.$message->toString().'</template>';

?>