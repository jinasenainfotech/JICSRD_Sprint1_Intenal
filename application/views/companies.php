<title>Risk D | Company Creation</title>

<!-- <?php $CI =& get_instance(); $CI->load->library('jics'); /*echo $CI->jics->html_input();*/?> -->

<h4 class="my-3 text-center">Company Creation</h4>
<div class="Company-creation-form m-3">
	<div class="bg-white shadow border border-primary rounded p-3 my-3">
		<?= form_open(base_url("companies"), '', '');  ?>
		<?= form_input('hid', (isset($input['hid']))?$input['hid'] :'0', 'style="display:none;"'); ?>

		<div class="col-md-3">
			<h4 class="mb-3">Entity Details</h4>
		</div>
		<div class="d-flex flex-wrap">
			<div class="col-md-3">
				<div class="form-group is-invalid">
					<label for="country">Country</label>
					<?= form_dropdown('country', $companies, $input['country'],'class="browser-default custom-select text-capitalize" id="country"');?>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "name"; $view_name = 'Entity Name'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>
					<!-- <input id="inputEntityName" type="text" class="form-control" placeholder="Entity Name" required> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<!-- <label for="entity_type">Entity Type</label> -->
					<!-- <?= form_dropdown('entity_type', $entity_type, '','class="browser-default custom-select" id="entity_type"');?> -->

					<?php $field_name = "entity_type"; $view_name = 'Entity Type'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, $entity_type, $input[$field_name], 'class="browser-default '.(form_error($field_name) !=  ""? "is-invalid" : "") .' custom-select" id="entity_type"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "abn"; $view_name = 'ABN'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="abn">ABN</label> -->
					<!-- <?= form_input('abn', '', 'id="abn" class="form-control" placeholder="ABN"'); ?> -->
					<!-- <input id="inputABN" type="text" > -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "acn"; $view_name = 'ACN'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="can">CAN</label> -->
					<!-- <?= form_input('can', '', 'id="can" class="form-control" placeholder="CAN"'); ?> -->
					<!-- <input id="inputCAN" type="text" > -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "rbn"; $view_name = 'RBN'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="rbn">RBN</label> -->
					<!-- <?= form_input('rbn', '', 'id="rbn" class="form-control" placeholder="RBN"'); ?> -->
					<!-- <input id="inputRBN" type="text" class="form-control" placeholder="RBN"> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "equity"; $view_name = 'Equity'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="equity">Equity</label> -->
					<!-- <?= form_input('equity', '', 'id="equity" class="form-control" placeholder="Equity"'); ?> -->
					<!-- <input id="inputEquity" type="text" class="form-control" placeholder="Equity"> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					
					<?php $field_name = "dateestablished"; $view_name = 'Date Established'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<input id="<?= $field_name?>" name="<?= $field_name?>" type="date" value="<?= $input[$field_name]?>" class="form-control" placeholder="<?= $view_name?>">
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="dateestablished">Date Established</label> -->
					<!-- <?= form_input('dateestablished', '', 'id="dateestablished" class="form-control" placeholder="Date Established"'); ?> -->
					<!-- <input id="inputDateEstablished" type="date" class="form-control" placeholder="Date Established"> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "confidentiality"; $view_name = 'Confidentiality'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, $confidentiality, $input[$field_name],'class="browser-default custom-select " id="'.$field_name.'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="confidentiality">Confidentiality</label> -->
					<!-- <?= form_dropdown('confidentiality', $confidentiality, '','class="browser-default custom-select" id="confidentiality"');?> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "portfolioanalysisstatus";$view_name = 'Portfolio Analysis Status';	$options = array(''=> 'Select the Portfolio analysis status', '1'=> 'Include','0'=>'Not include',);?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, $options, $input[$field_name] ,'class="browser-default custom-select " id="'.$field_name.'"');?>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white shadow border border-primary rounded p-3 my-3">
		<div class="col-md-3">
			<h4 class="mb-3">Entity Address</h4>
		</div>
		<div class="d-flex flex-wrap">
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "unit_no"; $view_name = 'Unit Number'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="unit_no">Unit Number</label> -->
					<!-- <?= form_input('unit_no', '', 'id="unit_no" class="form-control" placeholder="Unit Number"'); ?> -->
					<!-- <input id="inputUnitNumber" type="text" class="form-control" placeholder="Unit Number"> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "street_no"; $view_name = 'Street Number'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="street_no">Street Number</label> -->
					<!-- <?= form_input('street_no', '', 'id="street_no" class="form-control" placeholder="Street Number"'); ?> -->
					<!-- <input id="inputStreetNumber" type="text" class="form-control" placeholder="Street Number"> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "street_name"; $view_name = 'Street Name'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="street_name">Street Name</label> -->
					<!-- <?= form_input('street_name', '', 'id="street_name" class="form-control" placeholder="Street Name"'); ?> -->
					<!-- <input id="inputStreetName" type="text" class="form-control" placeholder="Street Name"> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "suburb"; $view_name = 'Suburb'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>					


					<!-- <label for="suburb">Suburb</label> -->
					<!-- <?= form_input('suburb', '', 'id="suburb" class="form-control" placeholder="suburb"'); ?> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "state"; $view_name = 'State'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="state">State</label> -->
					<!-- <?= form_input('state', '', 'id="state" class="form-control" placeholder="State"'); ?> -->
					<!-- <input id="inputState" type="text" class="form-control" placeholder="State"> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">

					<?php $field_name = "posecode"; $view_name = 'Post Code'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_input($field_name, $input[$field_name], 'class="form-control '.(form_error($field_name) !=  ""? "is-invalid" : "") .' "id='.$field_name.' placeholder="'.$view_name.'"'); ?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>




					<!-- <label for="posecode">Pose Code</label> -->
					<!-- <?= form_input('posecode', '', 'id="posecode" class="form-control" placeholder="Post Code"'); ?> -->
					<!-- <input id="inputPoseCode" type="text" class="form-control" placeholder="Pose Code"> -->
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white shadow border border-primary rounded p-3 my-3">
		<div class="col-md-3">
			<h4 class="mb-3">Contact Telephone</h4>
		</div>
		<div class="d-flex flex-wrap">
			<div class="col-md-3">
				<div class="form-group">
					<label for="contact_type">Contact Type</label>
					<?php  $tel_type = array(''=>'Select the Type', 'land_line' => 'Land Line' , 'mobile' => 'Mobile' );?>
					<?= form_dropdown('contact_type_1', $tel_type, $input['contact_type_1'],'class="browser-default custom-select" id="contact_type_1"');?>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white shadow border border-primary rounded p-3 my-3">
		<div class="col-md-3">
			<h4 class="mb-3">Business Telephone</h4>
		</div>
		<div class="d-flex flex-wrap">
			<div class="col-md-3">
				<div class="form-group">
					<label for="contact_type_2">Business Type</label>
					<?= form_dropdown('contact_type_2', $tel_type, $input['contact_type_2'],'class="browser-default custom-select" id="contact_type_2"');?>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white shadow border border-primary rounded p-3 my-3">
		<div class="col-md-3">
			<h4 class="mb-3">ANZIC Classification</h4>
		</div>
		<div class="d-flex flex-wrap">
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "anzic_division"; $view_name = 'Division'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="anzic_sub_division" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>



					<!-- <label for="anzic_division">Division</label> -->
					
					<!-- <select id="anzic_division" name="anzic_division" target-opt="anzic_sub_division" class="selecter browser-default <?= (form_error('anzic_division') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Division</option>
					</select> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "anzic_sub_division"; $view_name = 'Sub Division'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="anzic_group" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="anzic_sub_division">Sub Division</label>
					<select id="anzic_sub_division" name="anzic_sub_division" id="anzic_sub_division" target-opt="anzic_group" class="selecter browser-default <?= (form_error('anzic_sub_division') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Sub Division</option>
					</select>
					<div id="error_anzic_sub_division" style="color: red;font-size: smaller;"><?= form_error('anzic_sub_division') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "anzic_group"; $view_name = 'Group'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="anzic_class" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


<!-- 					<label for="anzic_group">Group</label>
					<select id="anzic_group" name="anzic_group" target-opt="anzic_class" class="selecter <?= (form_error('anzic_group') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Group</option>
					</select>
					<div id="error_anzic_group" style="color: red;font-size: smaller;"><?= form_error('anzic_group') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "anzic_class"; $view_name = 'Class'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"class="browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>



					<!-- <label for="anzic_class">Class</label>
					<select id="anzic_class" name="anzic_class" class="browser-default <?= (form_error('anzic_class') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Class</option>
					</select>
					<div id="error_anzic_class" style="color: red;font-size: smaller;"><?= form_error('anzic_class') ?></div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white shadow border border-primary rounded p-3 my-3">
		<div class="col-md-3">
			<h4 class="mb-3">Primary Classification</h4>
		</div>
		<div class="d-flex flex-wrap">
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "primary_division"; $view_name = 'Division'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="primary_sub_division" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="primary_division">Division</label>
					<select id="primary_division" name="primary_division" target-opt="primary_sub_division" class="selecter <?= (form_error('primary_division') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Division</option>
					</select>
					<div id="error_primary_division" style="color: red;font-size: smaller;"><?= form_error('primary_division') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "primary_sub_division"; $view_name = 'Sub Division'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="primary_group" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="primary_sub_division">Sub Division</label>
					<select id="primary_sub_division" name="primary_sub_division" target-opt="primary_group" class="selecter <?= (form_error('primary_sub_division') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Sub Division</option>
					</select> -->
					<!-- <div id="error_primary_sub_division" style="color: red;font-size: smaller;"><?= form_error('primary_sub_division') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "primary_group"; $view_name = 'Group'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="primary_class" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="primary_group">Group</label>
					<select id="primary_group" name="primary_group" target-opt="primary_class" class="selecter <?= (form_error('primary_group') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Group</option>
					</select> -->
					<!-- <div id="error_primary_group" style="color: red;font-size: smaller;"><?= form_error('primary_group') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "primary_class"; $view_name = 'Class'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"class="browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>


					<!-- <label for="primary_class">Class</label>
					<select id="primary_class" name="primary_class" class="browser-default <?= (form_error('primary_class') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Class</option>
					</select>
					<div id="error_primary_class" style="color: red;font-size: smaller;"><?= form_error('primary_class') ?></div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="bg-white shadow border border-primary rounded p-3 my-3">
		<div class="col-md-3">
			<h4 class="mb-3">Secondary Classification</h4>
		</div>
		<div class="d-flex flex-wrap">
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "secondry_division"; $view_name = 'Division'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="secondry_sub_division" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="secondry_division">Division</label>
					<select id="secondry_division" name="secondry_division" target-opt="secondry_sub_division" class="selecter <?= (form_error('secondry_division') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Division</option>
					</select>
					<div id="error_secondry_division" style="color: red;font-size: smaller;"><?= form_error('secondry_division') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "secondry_sub_division"; $view_name = 'Sub Division'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="secondry_group" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="secondry_sub_division">Sub Division</label>
					<select id="secondry_sub_division" name="secondry_sub_division" target-opt="secondry_group" class="selecter <?= (form_error('secondry_sub_division') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Sub Division</option>
					</select>
					<div id="error_secondry_sub_division" style="color: red;font-size: smaller;"><?= form_error('secondry_sub_division') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "secondry_group"; $view_name = 'Group'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"target-opt="secondary_class" class="selecter browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="secondry_group">Group</label>
					<select id="secondry_group" name="secondry_group" target-opt="secondary_class" class="selecter <?= (form_error('secondry_group') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Group</option>
					</select>
					<div id="error_secondry_group" style="color: red;font-size: smaller;"><?= form_error('secondry_group') ?></div> -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<?php $field_name = "secondary_class"; $view_name = 'Class'; ?>
					<label for="<?= $field_name?>"><?= $view_name?></label>
					<?= form_dropdown($field_name, (isset($classification))? $classification :'' , $input[$field_name],' id="'. $field_name .'"class="browser-default custom-select '. (form_error($field_name) !=  ""? "is-invalid" : "") .'"');?>
					<div id="<?= "error_".$field_name ?>" style="color: red;font-size: smaller;"><?= form_error($field_name) ?></div>

					<!-- <label for="secondary_class">Class</label>
					<select id="secondary_class" name="secondary_class" class="browser-default <?= (form_error('secondary_class') !=  ""? "is-invalid" : "")?> custom-select">
						<option selected disabled>Class</option>
					</select>
					<div id="error_secondary_class" style="color: red;font-size: smaller;"><?= form_error('secondary_class') ?></div>
				-->
			</div>
		</div>
	</div>
</div>
<div class="d-flex justify-content-end">
	<div>
		<?= form_submit('submit', 'Save','class="btn btn-primary"'); ?>
		<!-- <submit ">Create</submit> -->
	</div>
</div>
<?= form_close(); ?>
</div>



<script src="<?= base_url('assets/js/companies.js')?>" crossorigin="anonymous"></script>

<script type="text/javascript">
				// $('.select2').select2({});

				$(document).ready(function($) {


					<?php if($input['anzic_division'] == ''){?> classification('anzic_division','<?= base_url('main/classification')?>','0');<?php }?>
					<?php if($input['primary_division'] == ''){?> classification('primary_division','<?= base_url('main/classification')?>','0'); <?php }?>
					<?php if($input['secondry_division'] == ''){?> classification('secondry_division','<?= base_url('main/classification')?>','0'); <?php }?>
				});


				$(document).on('change', '.selecter', function(event) {
					event.preventDefault();
					classification($(this).attr('target-opt'),'<?= base_url('main/classification')?>',$(this).val());
				});


			</script>