
    <div class="container mt-5">
		<div class="mx-auto">
			<h1>Log In</h1>
			<hr>
			<form action="<?php echo site_url(); ?>/login/validation" method="post">
                <center>
				<div class="form-group col-lg-7">

					<input type="text" class="form-control form-control-lg" placeholder="Username" name="username" value="<?php echo set_value('email'); ?> required>
				</div>
				<div class="form-group col-lg-7">

					<input type="password" class="form-control form-control-lg" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>"  required>
				</div>
            
                <br>
				<button type="submit" class="btn btn-block btn-primary submit-button">Log In</button>
                </center>
			</form>
	    </div>
    </div>	  

