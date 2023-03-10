<?php
define('STDIN',fopen("php://stdin","r"));
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;

require_once "../system/autoload.php";
\Aurora\System\Api::Init(true);

try {
	$container = \Aurora\Api::GetContainer();
	$container['console']->setAutoExit(false);

	$output = new BufferedOutput();

	$container['console']->find('migrate')
		->run(new ArrayInput([
			'--no-interaction'=>true
		]), $output);

	$content = array_filter(explode(PHP_EOL, $output->fetch()));
	dd($content);
} catch (\Exception $oEx) {
	dd($oEx);
	\Aurora\System\Api::LogException($oEx);
}
