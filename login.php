<?php

	include_once 'inc/authcheck.php';

	$msg = array();

	if(isset($_POST['act_login'])){
		$user=$_POST['login'];
		$pass=$_POST['pass'];
		if($user == "" || $pass == ""){
			$msg = array("Error" => "Username / Password Wrong !");
		}else{
			$login = $LS->login($user, $pass);
			if($login === false){
				$msg = array("Error" => "Username / Password Wrong !");
			}else if(is_array($login) && $login['status'] == "blocked"){
				$msg = array("Error" => "Too many login attempts. You can attempt login after ". $login['minutes'] ." minutes (". $login['seconds'] ." seconds)");
			}
		}
	}	
?>

<?php include_once 'inc/templates/inc/head.php'; ?>

	<div class="col-xs-12 col-sm-4 col-sm-offset-4 well well-md" id="login-form">
		<?php if($msg) : ?>
			<div class="alert alert-danger">
				<p><?php echo $msg['Error']; ?></p>
			</div>
		<?php endif; ?>
		<form method="post">
		  <div class="form-group">
		    <label for="login">Email address</label>
		    <input type="email" class="form-control" name="login" id="login" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    <label for="pass">Password</label>
		    <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
		  </div>
		  <button type="submit" name="act_login" class="btn btn-primary">Log In</button>
		</form>
	</div>
	
<?php include_once 'inc/templates/inc/footer.php'; ?>