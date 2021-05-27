		<div class="container mt-5">
			<div class="mx-auto">
				<h1>Employee Information</h1>
				<hr>
				<form action="registrationPost.php" method="post">
					<div class="form-row">
						<div class="col">
							<input type="text" class="form-control form-control-lg" placeholder="Name" name="name" id="name" required>
						</div>
							<div class="col">
								<input class="form-control form-control-lg" type="text" placeholder="Birth date" onfocus="(this.type='date')" name="birth_date" id="birth_date">
							</div>
						</div>
						<br>
						<div class="form-row">
							<div class="col">
								<input class="form-control form-control-lg" type="text" placeholder="Position" name="position" id="position" required>
							</div>
							<div class="col">
								<input class="form-control form-control-lg" type="text" placeholder="Department" name="department" id="department">
							</div>
						</div>
						<br><br><br>
						<div class="form-row">
							<div class="col">
								<input class="form-control form-control-lg" type="email" placeholder="Email" name="email" id="email" required>
							</div>
							<div class="col">
								<input class="form-control form-control-lg" type="password" placeholder="Password" name="password" id="password">
							</div>
						</div>
						 <br><br>
							<button class="btn btn-primary btn-lg submit-button" type="submit">Submit</button>
				</form>
			</div>
		</div>
