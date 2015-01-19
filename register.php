<?php include_once 'inc/templates/inc/head.php'; ?>

	<div class="col-xs-12 col-sm-4 col-sm-offset-4 well well-md">
		<h1 class="text-center">Please Log In</h1>
		<?php if($msg) : ?>
			<p><?php echo $msg['Error']; ?></p>
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