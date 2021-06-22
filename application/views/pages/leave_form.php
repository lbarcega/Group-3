		<div class="container mt-5">
			<div class="mx-auto">
				<h1>Leave Form</h1>
				<hr>
						<div class="row">
							<div class="col">
								<label>Name</label>
								<div class="col form-control"><?php echo $this->session->userdata('name');  ?></div>
							</div>
							<div class="col">
								<label >Department</label>
								<div class="col form-control"><?php echo $this->session->userdata('department');  ?></div>
                
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-6">
								<label>Position</label>
								<div class="col form-control"><?php echo $this->session->userdata('position');  ?></div>
							</div>
						</div>
							<br>
				<form action="<?php echo site_url(); ?>/leave_application/submitform" method="post">
					<div class="form-row justify-content-md-center">
						<div class="col-3">
								<input class="form-control form-control-sm" type="text" placeholder="Start Date" onfocus="(this.type='date')" name="start_date" value="<?php echo set_value('start_date'); ?> " required>
						</div>
							<div class="col-3">
								<input class="form-control form-control-sm" type="text" placeholder="End Date" onfocus="(this.type='date')" name="end_date" value="<?php echo set_value('end_date'); ?> " required>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<div class ="row">
									<select class="form-control" name="leave_type" value="<?php echo set_value('leave_type'); ?> ">
										<option>Available Paid Leave Absences</option>
										<option>Sick Leave: 12 days</option>
										<option>Vacation Leave: 12 days</option>
										<option>Emergency Leave: 3 days</option>
									</select>							
								</div>
								<br>
								<div class="row">
									<textarea class="form-control form-control-sm" name="reasons"rows="3" value="<?php echo set_value('reasons'); ?> ">Reasons:</textarea>
								</div>
							</div>
							<div class="col">
									<textarea class="form-control form-control-sm" name="workload" rows="6" value="<?php echo set_value('workload'); ?> ">Workload assigned on the following dates of absence:</textarea>							
							</div>
						</div>
						 <br>
							<center><button class="btn btn-primary btn-lg submit-button" type="submit">Submit</button></center>
				</form>
			</div>
		</div>
