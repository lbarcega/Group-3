
		<div class="container mt-5">
			<div class="mx-auto">
				<h1>Employee Information</h1>
				<hr>
				<form action="registrationPost.php" method="post">
					<div class="form-row">
						<div class="col-7">
							<input type="text" class="form-control form-control-lg" placeholder="Name" name="name" id="name" required>
						</div>
							<div class="col-5">
								<input class="form-control form-control-lg" type="text" placeholder="Birth date" onfocus="(this.type='date')" name="birth_date" id="birth_date">
							</div>
						</div>
						<br>
						<div class="form-row">
							<div class="col-7">
								<input class="form-control form-control-lg" type="text" placeholder="Position" name="position" id="position" required>
							</div>
							<div class="col-5">
								<input class="form-control form-control-lg" type="email" placeholder="Email" name="email" id="email" required>
							</div>
						</div>
						<br>
						<div class="form-row>
							<div class="col-7">
								<input class="form-control form-control-lg" type="text" placeholder="Department" name="department" id="department">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
