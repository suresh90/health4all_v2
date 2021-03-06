  <div class="container">

      <?php echo form_open('user_panel/op_layout',array('role'=>'form')); ?>
			<div class="row">
				<div class="col-md-10">
				<h4>Form</h4>
				</div>
		<div class="col-sm-3 col-md-2 sidebar">
		<strong>Patient Information</strong>
          <ul class="nav nav-sidebar">
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="patient_name" class="checklist" />Patient name</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="age" class="checklist" />Age</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="gender" class="checklist" />Gender</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="address" class="checklist" />Address</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="place" class="checklist" />Place</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="district" class="checklist" />District</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="phone" class="checklist" />Phone</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="father_name" class="checklist" />Father's Name</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="mother_name" class="checklist" />Mother's Name</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="spouse_name" class="checklist" />Spouse Name</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="id_proof" class="checklist" />ID Proof</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="occupation" class="checklist" />Occupation</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="education_level" class="checklist" />Education Level</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="education_qualification" class="checklist" />Education Qualification</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="blood_group" class="checklist" />Blood Group</label>
				</div>
			</li>
		</ul>
		<strong>Birth Information</strong>
          <ul class="nav nav-sidebar">
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="gestation" class="checklist" />Gestation</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="gestation_type" class="checklist" />Gestation Type</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="delivery_mode" class="checklist" />Delivery Mode</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="delivery_place" class="checklist" />Delivery Place</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="delivery_location" class="checklist" />Delivery Location</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="hospital_type" class="checklist" />Hospital Type</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="delivery_location_type" class="checklist" />Delivery Location Type</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="delivery_plan" class="checklist" />Delivery Plan</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="birth_weight" class="checklist" />Birth Weight</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="congenial_anomalies" class="checklist" />Congenial Anomalies</label>
				</div>
			</li>     
          </ul>
		<strong>Visit Information</strong>
          <ul class="nav nav-sidebar">
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="hospital" class="checklist" />Hospital</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="department" class="checklist" />Department</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="unit" class="checklist" />Unit</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="area" class="checklist" />Area</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="doctor" class="checklist" />Doctor</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="nurse" class="checklist" />Nurse</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="insurance" class="checklist" />Insurance</label>
				</div>
			</li>
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="presenting_complaints" class="checklist" />Presenting Complaints</label>
				</div>
			</li>  
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="past_history" class="checklist" />Past History</label>
				</div>
			</li>  
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="admit_weight" class="checklist" />Admit Weight</label>
				</div>
			</li>  
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="pulse_rate" class="checklist" />Pulse Rate</label>
				</div>
			</li>  
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="respiratory_rate" class="checklist" />Respiratory Rate</label>
				</div>
			</li>  
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="temperature" class="checklist" />Temperature</label>
				</div>
			</li> 
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="blood_pressure" class="checklist" />Blood Pressure</label>
				</div>
			</li> 
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="provisional_diagnosis" class="checklist" />Provisional Diagnosis</label>
				</div>
			</li> 
            <li>  
				<div class="checkbox">
					<label><input type="checkbox" value="1" id="final_diagnosis" class="checklist" />Final Diagnosis</label>
				</div>
			</li> 
        </div>
		</div>
      </form>

    </div>