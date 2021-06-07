<body>
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
							<div class="col-7">
								<input class="form-control form-control-lg" type="text" placeholder="Department" name="department" id="department">
							</div>
				</form>
			</div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
