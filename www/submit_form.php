<?php
	#load monolog via composer
	require __DIR__ . '/vendor/autoload.php';
	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	
	#variable assignments
	$email=$_POST["email"];
	$uname=$_POST["uname"];
	$pw=$_POST["pw"];
	$gender=$_POST["gender"];

	#email validation
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailvalidated=false;
	}else{
		$emailvalidated=true;		
	}
	
	#uname validation
	#Check if alphanumeric
	if(ctype_alnum($uname)){
		#Check character length
		if (strlen($uname) < 6 || strlen($uname) > 10){
			$unamevalidated=false;
		}else{
			$unamevalidated=true;
		}
	}else{
		$unamevalidated=false;
	}
	
	#Validate Password
	$uppercase = preg_match('@[A-Z]@', $pw);
	$lowercase = preg_match('@[a-z]@', $pw);
	$number    = preg_match('@[0-9]@', $pw);
	
	if(!$uppercase || !$lowercase || !$number) {
		$pwvalidated=false;
	}else{
		$pwvalidated=true;
}
	
	#If the information was validated write to log and inform user of success
	#If not, go to resubmit form
	if($emailvalidated && $unamevalidated && $pwvalidated){
	$logger = new Logger('submit_form');
	$logger->pushHandler(new StreamHandler(__DIR__ . '/dev2_homework.log', Logger::DEBUG));
	$logger->info('Email - '.$email);
	$logger->info('Username - '.$uname);
	$logger->info('Password - '.$pw);
	$logger->info('Gender - '.$gender);
	echo "Your information has been validated and written to the log file named dev2_homework.log";
	}else{	 
	$url = "<script>
			window.location.href = '/resubmit.php?email=".$email."&uname=".$uname."&gender=".$gender."&em=".$emailvalidated."&un=".$unamevalidated."&pw=".$pwvalidated."';
		 </script>";
	echo $url;
	}
?>


