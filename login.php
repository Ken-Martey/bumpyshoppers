<?php
session_start();

include('devless.php');
$devless = new SDK("http://admin.bumpyshoppersclub.com", "2d490ab1264453d3cb2718d699cdfd0a");
$failed = null;
if(isset($_POST['email'])) {
	 
	$response = $devless->call('devless','login',['email'=>$_POST['email'],'password'=>$_POST['password']]);
	var_dump($response);
	if(isset($response['payload']['result']['token']) && $response['payload']['result']['profile']['role'] == 1) {
		$devless->setUserToken($response['payload']['result']['token']);
		$_SESSION['admin_login'] = $response['payload']['result']['token'];
		$failed = false;
		header('Location:/index.php');

	} else {
		$failed = true;
	}
	
	
}

if(isset($_POST['logout'])) {
		unset($_SESSION['admin_login']);
}


?>
<?php if($failed){?>
<div> Sorry you can't be logged in </div>
<?php } ?>
<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
	<input type="email" name="email" placeholder="Please enter your email here">
	<input type="password" name="password" placeholder="Please enter password">
	<button type="submit">Login</button>
</form>

<form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
	<input type="hidden" name="logout">
	<button type="submit">Logout</button>
</form>