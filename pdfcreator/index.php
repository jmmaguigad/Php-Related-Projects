<form action="print_pdf.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">

	<fieldset>
		<legend>Information Needed</legend>

		<div class="row">
			<div class="col-lg-3">
				<h3 class="title">Basic Info</h3>
			</div>

			<div class="col-lg-9">

				<div class="form-group">
					<label for="full_name" class="col-md-2 control-label">
						Full Name<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="full_name" class="form-control" id="full_name" required>
					</div>
				</div>

				<div class="form-group">
					<label for="date_of_birth" class="col-md-2 control-label">
						Date of Birth<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="date_of_birth" class="form-control" id="date_of_birth" required>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-md-2 control-label">
						Email<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="email" name="email" class="form-control" id="email" required>
					</div>
				</div>

				<div class="form-group">
					<label for="phone" class="col-md-2 control-label">
						Phone<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="phone" name="phone" class="form-control" id="phone" required>
					</div>
				</div>
					  
			</div>
		</div>

		<div class="space"></div>

		<div class="row">
			<div class="col-lg-3">
				<h3 class="title">Your Address</h3>
			</div>

			<div class="col-lg-9">

				<div class="form-group">
					<label for="address_1" class="col-md-2 control-label">
						Address 1<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="address_1" class="form-control" id="address_1" required>
					</div>
				</div>

				<div class="form-group">
					<label for="address_2" class="col-md-2 control-label">Address 2</label>
					<div class="col-md-10">
						<input type="text" name="address_2" class="form-control" id="address_2">
					</div>
				</div>

				<div class="form-group">
					<label for="country" class="col-md-2 control-label">
						Country<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="country" class="form-control" id="country" required>
					</div>
				</div>

				<div class="form-group">
					<label for="state" class="col-md-2 control-label">
						State<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="state" class="form-control" id="state" required>
					</div>
				</div>

				<div class="form-group">
					<label for="city" class="col-md-2 control-label">
						City<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="city" class="form-control" id="city" required>
					</div>
				</div>

				<div class="form-group">
					<label for="zip_code" class="col-md-2 control-label">
						Zip Code<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="zip_code" class="form-control" id="zip_code" required>
					</div>
				</div>

			</div>
		</div>

		<div class="space"></div>

		<div class="row">
			<div class="col-lg-3">
				<h3 class="title">Other Info</h3>
			</div>

			<div class="col-lg-9">

				<div class="form-group">
					<label for="insurance_number" class="col-md-2 control-label">
						State License Number<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="insurance_number" class="form-control" id="insurance_number" required>
					</div>
				</div>

				<div class="form-group">
					<label for="national_producer_number" class="col-md-2 control-label">
						National Producer Number (NPN)<small class="text-default">*</small>
					</label>
					<div class="col-md-10">
						<input type="text" name="national_producer_number" class="form-control" id="national_producer_number" required>
					</div>
				</div>

			</div>
		</div>

		<div class="separator-2"></div>

		<h4>Below are list of contracts available for request:</h4>

		<div class="row">
			<div class="col-md-4">
				<strong>Medicare Advantage</strong>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="contracts[]" value="Medicare Aetna">
						Aetna
					</label>
				</div>
					
				<div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]"  value="United Health Care">
	                    United Health Care
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]"  value="Cigna Health-Spring">
	                    Cigna Health-Spring
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]"  value="WellCare">
	                    WellCare
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]"  value="Amerigroup">
	                    Amerigroup
	                </label>
	            </div>

	            <div class="checkbox">
					<label>
						<input type="checkbox" name="contracts[]"  value="Texan Plus">
						Texan Plus
					</label>
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="contracts[]"  value="Humana Medicare Advantage">
						Humana
					</label>
				</div>

			</div>

			<div class="col-md-4">
				<strong>Medicare Supplement</strong>

				<div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="Standard Life">
	                    Standard Life
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="LCBA">
	                    LCBA
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="Humana Medicate Supplement">
	                    Humana
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="Aetna Medicare Supplement">
	                    Aetna
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="GPM">
	                    GPM
	                </label>
	            </div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="Cigna">
	                    Cigna
	                </label>
	            </div>
	            
	            <div class="checkbox">
					<label>
						<input type="checkbox" name="contracts[]" value="Mutual of Omaha Medicare Supplement">
						Mutual of Omaha
					</label>
				</div>

			</div>

			<div class="col-md-4">
				<strong>Final Expense</strong>

				<div class="checkbox">
					<label>
						<input type="checkbox" name="contracts[]" value="Sentinel Life">
						Sentinel Life
					</label>
				</div>

	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="Equitable">
	                    Equitable
	                </label>
	            </div>
	            
	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="National Farm Life">
	                    National Farm Life
	                </label>
	            </div>
	            
	            <div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="Great Western">
	                    Great Western
	                </label>
	            </div>
	            
				<div class="checkbox">
	                <label>
	                    <input type="checkbox" name="contracts[]" value="Mutual of Omaha Final Expense">
	                    Mutual of Omaha
	                </label>
	            </div>

	            <div class="checkbox">
					<label>
						<input type="checkbox" name="contracts[]" value="Security National Life">
						Security National Life
					</label>
				</div>

			</div>                                          
		</div>

		<br>

		<div class="separator-2"></div>
		
		<div class="ocol-md-12">
			<label>Upload Electronic Signature: </label>
			<input type="file" name="signature_file" required>
		</div>
		
		<br>

		<div class="separator-2"></div>

		<div class="col-md-12 ">
			<button type="submit" name="submitForm" value="submit" class="btn btn-animated btn-lg btn-default pull-right">
				Submit
				<i class="fa fa-check"></i>
			</button>
		</div>

	</fieldset>

</form>
