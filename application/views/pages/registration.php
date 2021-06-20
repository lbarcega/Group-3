		<div class="container mt-5">
			<div class="mx-auto">
				<h1>Employee Information</h1>
				<hr>

				<form action="<?php echo site_url(); ?>/register/validation" method="post">
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control form-control-lg" placeholder="Name" name="name" value="<?php echo set_value('name'); ?>" required>
							<span class="text-danger"><?php echo form_error('name'); ?></span>

						</div>
							<div class="col">
								<input class="form-control form-control-lg" type="text" placeholder="Birth date" onfocus="(this.type='date')" name="birth_date" value="<?php echo set_value('birth_date'); ?>">
								<span class="text-danger"><?php echo form_error('birth_date'); ?></span>
							</div>
						</div>
						<br>
						<div class="form-row">
							<div class="col">
								<input class="form-control form-control-lg" type="text" placeholder="Position" name="position"value="<?php echo set_value('position'); ?>" required>
								<span class="text-danger"><?php echo form_error('position'); ?></span>

							</div>
							<div class="col">
								<input class="form-control form-control-lg" type="text" placeholder="Department" name="department" value="<?php echo set_value('department'); ?>">
								<span class="text-danger"><?php echo form_error('department'); ?></span>
							</div>
						</div>
						<br><br><br>
						<div class="form-row">
							<div class="col">
								<input class="form-control form-control-lg" type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" required>
								<span class="text-danger"><?php echo form_error('email'); ?></span>
							</div>
							<div class="col">
								<input class="form-control form-control-lg" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>">
								<span class="text-danger"><?php echo form_error('password'); ?></span>

							</div>
						</div>
						 <br><br>
							<center><button class="btn btn-primary btn-lg submit-button" type="submit">Submit</button></center>
				</form>
			</div>
		</div>
