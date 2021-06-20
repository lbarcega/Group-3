
		<div class="container">
			<div class="mx-auto">
				<h1>Employee Information</h1>
				<hr>
					<div class="container my-5">
						<div class="row">
							<div class="col-sm-7">
								<label class="label">Name</label>
								<div class="col form-control form-control-lg"><?php echo $this->session->userdata('name');  ?></div>
							</div>
							<div class="col-sm">
								<label class="label">Birth Date</label>
								<div class="col form-control form-control-lg"><?php echo $this->session->userdata('birth_date');  ?></div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-7">
								<label class="label">Department</label>
								<div class="col form-control form-control-lg"><?php echo $this->session->userdata('department');  ?></div>
							</div>
							<div class="col-sm">
								<label class="label">Position</label>
								<div class="col form-control form-control-lg"><?php echo $this->session->userdata('position');  ?></div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-7">
								<label class="label">Email</label>
								<div class="col form-control form-control-lg"><?php echo $this->session->userdata('email');  ?></div>
							</div>
						</div>
					</div>
			</div>
		</div>
