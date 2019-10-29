<link rel="stylesheet" href="<?= base_url('assets/css/report-creation.css')?>">
<script src="<?= base_url('assets/js/jquery.validate.min.js')?>"></script>
<script src="<?= base_url('assets/js/additional-methods.min.js')?>"></script>


<!-- report creation ui -->
<div class="report-create">
	<div class="d-flex justify-content-end flex-wrap m-3">
		
		<?php if(!isset($_GET['id'])){?> 
			<div>
				<button id="add_btn" class="btn btn-primary mt-2 mt-md-0">Add Year</button>
			</div>
		<?php }else{ if($data_list[0]->status == '1'){	?>
			<div>
				<a class="btn btn-primary mt-2 mt-md-0" href="<?= base_url('main/view_report')?>?id=<?= $_GET['id']?>">Report</a>
			</div>
		<?php	} ?>
	<?php } ?> 
</div>
</div>
<div class="quantitave">
	<header class="create-report-header d-flex justify-content-center align-items-center rounded-top p-3">
		<h4 class="mb-0">Create A New Form</h4>
		
	</header>
	<div class="quantitave-table-wrapper d-flex flex-wrap rounded-bottom py-3 mb-3 shadow bg-white">
		<!-- table -->
		<div class="col-md-12 row">
			<div class="col-md-6 mr-3 pr-0 pr-md-3 mr-md-0 overflow-auto">
				<table class=" table overflow-auto" style="margin-top:90px">
					<tbody>
						<?php
						foreach ($col as $co) {
							echo '<tr>';
							echo '<th scope="row">'. ucfirst(str_replace("_"," ",$co->Field)) .'</th>';
							$x = $co->Field;
							foreach (array_reverse($row) as $ro) {
								echo	'<td class="aaa">'. $ro->$x .'</td>';
							}
							echo '</tr>';
							if($co->Field == "month"){
								echo '<tr class="table-primary">';
								echo '<th scope="row">Income Statement</th>';
								echo '<td></td><td></td><td></td>';
								echo '</tr>';
							}	
							if($co->Field == "total_assets"){
								echo '<tr class="table-primary">';
								echo '<th scope="row">Liabilities</th>';
								echo '<td></td><td></td><td></td>';
								echo '</tr>';
							}
							if($co->Field == "balance"){
								echo '<tr class="table-primary">';
								echo '<th scope="row">Additional Information</th>';
								echo '<td></td><td></td><td></td>';
								echo '</tr>';
							}			
							if($co->Field == "total_liabilities"){
								echo '<tr class="table-primary">';
								echo '<th scope="row">Equity</th>';
								echo '<td></td><td></td><td></td>';
								echo '</tr>';
							}
							if($co->Field == 'profit_after_tax_distribution'){
								echo '<tr class="table-primary">';
								echo '<th scope="row">Balance Sheet Assets</th>';
								echo '<td></td><td></td><td></td>';
								echo '</tr>';
								echo '<tr class="table-primary">';
								echo '<th scope="row">Assets</th>';
								echo '<td></td><td></td><td></td>';
								echo '</tr>';
							}
						}
						?>
					</tbody>
				</table>
			</div>
			<!-- form -->
			<div class="col-md-6">
				<?= form_open(base_url('newreport'), 'id="report"'); ?>
				<div class="form-group mb-0">
					<select id="report_type" name="report_type" class="browser-default custom-select">
						<option selected disabled>Select The Report Type</option>
						<option value="1">Finacial Analyst Enriched Credit Report</option>
						<option value="0">Advance Finacial Diagnostic Report</option>
					</select>
				</div>
				<div id="div_clone" class="row"></div>
			</div>
		</div>

	</div>
	<div class="discription mb-5" id='hide'>
		<div>
			<label for="financial_perfomance mt-3">Financial Performance - Executive Summary</label>
			<textarea class="form-control" name="financial_perfomance" id="financial_perfomance"></textarea>
		</div>
	</div>
	<div class="d-flex flex-wrap justify-content-end pt-2">
		<?php if(isset($_GET['id'])){?> 
			<div>
				<button class="btn btn-success mb-3" id="approvd">Approved</button>
				<button class="btn btn-danger ml-1 mb-3" id="reject" >Reject</button>
			</div>

			<script type="text/javascript">

				$('#approvd').click(function(event) {
					/* Act on the event */
					$.post("<?= base_url('main/approvd') ?>",{
						id:'<?= $_GET['id']?>',
					},function(D){
						location.href = '<?= base_url('main/report_list')?>';
						// alert(D);
					},"text");

				});
				$('#reject').click(function(event) {
					/* Act on the event */
					$.post("<?= base_url('main/reject') ?>",{
						id:'<?= $_GET['id']?>',
					},function(D){
						location.href = '<?= base_url('main/report_list')?>';
						// location.reload();
						// alert(D);
					},"text");

				});


			</script>



		<?php } ?> 
		<!-- <div>
			<button id="save_and_approve" name="save_and_approve" class="btn btn-primary ml-md-3 mr-3 mb-3">Save & Send to Approve</button>
			<button id="save" name="save" class="btn btn-primary ml-md-3 mr-3 mb-3">Save</button>
			<button class="btn btn-primary ml-md-3 mb-3">Generate Report</button>
		</div> -->


		<div class="d-flex justify-content-end flex-wrap m-3">
			<div class="custom-control custom-checkbox">

				<input type="checkbox" class="custom-control-input" id="1111">
				<label class="custom-control-label" for="1111"> Send to approval </label>
			</div>
			<div name="save" id="save" class="btn btn-primary ml-md-3 mr-3 mb-3">  Save & Send to Approve  &nbsp;<i class="fa fa-chevron-circle-right"></i></div>
			<!-- <button class="btn btn-primary ml-md-3 mb-3">Generate Report</button> -->
		</div>

	</div>
	<div class="d-none">
		<input type="submit" id="submit" name="submit" value="save">

		<?=form_input('status', '0' , 'id="status" class=""'); ?>
		<?=form_input('com', ($this->input->get('com'))? $this->input->get('com') : '0' , 'id="com" class=""'); ?>
		<?=form_input('cun', ($this->input->get('cun'))? $this->input->get('cun') : '0' , 'id="cun" class=""'); ?>
		<?= form_close(); ?>
	</div>
</div></div>
<script type="text/javascript">

	$('#report_type').change(function(event) {
		/* Act on the event */
		if($(this).val() == 0){
			$('#hide').show();
		}else{
			$('#hide').hide();
		}
	});

	// document.getElementById('base_currency_0').value('lkr');

	<?php
	if(isset($cun)){?> 
		$(document).ready(function($) {localStorage.setItem('cun', '<?= $cun?>');});
	<?php } if(isset($com)){ ?>
		$(document).ready(function($) {localStorage.setItem('com', '<?= $com?>');});
	<?php } if(isset($company_name)){ ?>
		$(document).ready(function($) {localStorage.setItem('company_name', '<?= $company_name?>');});
	<?php } if(isset($abn)){ ?>
		$(document).ready(function($) {localStorage.setItem('abn', '<?= $abn?>');});
	<?php } if(isset($acn)){ ?>
		$(document).ready(function($) {localStorage.setItem('acn', '<?= $acn?>');});
	<?php } ?>
	
	<?php if(isset($_GET['id'])){?> 
		$(document).ready(function($) {
			localStorage.setItem('abn','<?= $data_list[0]->abn?>');
			localStorage.setItem('acn','<?= $data_list[0]->acn?>');
			localStorage.setItem('company_name','<?= $data_list[0]->company_name?>');
			localStorage.setItem('rounding','<?= $data_list[0]->rounding?>');
			localStorage.setItem('base_currency','<?= $data_list[0]->base_currency?>');
			localStorage.setItem('quality','<?= $data_list[0]->quality?>');
			localStorage.setItem('reporting_period_months','<?= $data_list[0]->reporting_period_months?>');
			localStorage.setItem('scope','<?= $data_list[0]->scope?>');
			localStorage.setItem('confidentiality_record','<?= $data_list[0]->confidentiality_record?>');
			localStorage.setItem('financial_year','<?= $data_list[0]->financial_year?>');
			localStorage.setItem('month','<?= $data_list[0]->month?>');
			localStorage.setItem('sales','<?= $data_list[0]->sales?>');
			localStorage.setItem('cost_of_sales','<?= $data_list[0]->cost_of_sales?>');
			localStorage.setItem('gross_profit','<?= $data_list[0]->gross_profit?>');
			localStorage.setItem('other_income','<?= $data_list[0]->other_income?>');
			localStorage.setItem('depreciation','<?= $data_list[0]->depreciation?>');
			localStorage.setItem('amortisation','<?= $data_list[0]->amortisation?>');
			localStorage.setItem('impairment','<?= $data_list[0]->impairment?>');
			localStorage.setItem('interest_expense_gross','<?= $data_list[0]->interest_expense_gross?>');
			localStorage.setItem('operating_lease_expense','<?= $data_list[0]->operating_lease_expense?>');
			localStorage.setItem('finance_lease_hire_purchase_charges','<?= $data_list[0]->finance_lease_hire_purchase_charges?>');
			localStorage.setItem('non_recurring_gains_losses','<?= $data_list[0]->non_recurring_gains_losses?>');
			localStorage.setItem('other_gains_losses','<?= $data_list[0]->other_gains_losses?>');
			localStorage.setItem('other_expenses','<?= $data_list[0]->other_expenses?>');
			localStorage.setItem('ebit','<?= $data_list[0]->ebit?>');
			localStorage.setItem('ebitda','<?= $data_list[0]->ebitda?>');
			localStorage.setItem('normalised_ebitda','<?= $data_list[0]->normalised_ebitda?>');
			localStorage.setItem('profit_before_tax','<?= $data_list[0]->profit_before_tax?>');
			localStorage.setItem('profit_before_tax_after_abnormals','<?= $data_list[0]->profit_before_tax_after_abnormals?>');
			localStorage.setItem('tax_benefit_expense','<?= $data_list[0]->tax_benefit_expense?>');
			localStorage.setItem('profit_after_tax','<?= $data_list[0]->profit_after_tax?>');
			localStorage.setItem('distribution_ordividends','<?= $data_list[0]->distribution_ordividends?>');
			localStorage.setItem('other_post_tax_items_gains_losses','<?= $data_list[0]->other_post_tax_items_gains_losses?>');
			localStorage.setItem('profit_after_tax_distribution','<?= $data_list[0]->profit_after_tax_distribution?>');
			localStorage.setItem('cash','<?= $data_list[0]->cash?>');
			localStorage.setItem('trade_debtors','<?= $data_list[0]->trade_debtors?>');
			localStorage.setItem('total_inventories','<?= $data_list[0]->total_inventories?>');
			localStorage.setItem('loans_to_related_parties_1','<?= $data_list[0]->loans_to_related_parties_1?>');
			localStorage.setItem('other_current_assets','<?= $data_list[0]->other_current_assets?>');
			localStorage.setItem('total_current_assets','<?= $data_list[0]->total_current_assets?>');
			localStorage.setItem('fixed_assets','<?= $data_list[0]->fixed_assets?>');
			localStorage.setItem('net_intangibles','<?= $data_list[0]->net_intangibles?>');
			localStorage.setItem('loan_to_related_parties_2','<?= $data_list[0]->loan_to_related_parties_2?>');
			localStorage.setItem('other_non_current_assets','<?= $data_list[0]->other_non_current_assets?>');
			localStorage.setItem('total_non_curent_assets','<?= $data_list[0]->total_non_curent_assets?>');
			localStorage.setItem('total_assets','<?= $data_list[0]->total_assets?>');
			localStorage.setItem('trade_creditors','<?= $data_list[0]->trade_creditors?>');
			localStorage.setItem('interest_bearing_debt_1','<?= $data_list[0]->interest_bearing_debt_1?>');
			localStorage.setItem('lone_from_related_parties','<?= $data_list[0]->lone_from_related_parties?>');
			localStorage.setItem('other_current_liabilities','<?= $data_list[0]->other_current_liabilities?>');
			localStorage.setItem('total_current_liabilities','<?= $data_list[0]->total_current_liabilities?>');
			localStorage.setItem('total_current_liabilities_2','<?= $data_list[0]->total_current_liabilities_2?>');
			localStorage.setItem('loans_from_related_parites','<?= $data_list[0]->loans_from_related_parites?>');
			localStorage.setItem('other_non_current_liabilities','<?= $data_list[0]->other_non_current_liabilities?>');
			localStorage.setItem('total_non_current_liabilities','<?= $data_list[0]->total_non_current_liabilities?>');
			localStorage.setItem('total_liabilities','<?= $data_list[0]->total_liabilities?>');
			localStorage.setItem('share_capital','<?= $data_list[0]->share_capital?>');
			localStorage.setItem('prefence_shares','<?= $data_list[0]->prefence_shares?>');
			localStorage.setItem('treasury_shares','<?= $data_list[0]->treasury_shares?>');
			localStorage.setItem('equity_owner_ships','<?= $data_list[0]->equity_owner_ships?>');
			localStorage.setItem('total_reserves','<?= $data_list[0]->total_reserves?>');
			localStorage.setItem('ratained_earning','<?= $data_list[0]->ratained_earning?>');
			localStorage.setItem('minorty_interest','<?= $data_list[0]->minorty_interest?>');
			localStorage.setItem('total_equity','<?= $data_list[0]->total_equity?>');
			localStorage.setItem('balance','<?= $data_list[0]->balance?>');
			localStorage.setItem('operating_cash_flow','<?= $data_list[0]->operating_cash_flow?>');
			localStorage.setItem('contingent_liabilities','<?= $data_list[0]->contingent_liabilities?>');
			localStorage.setItem('other_commitmentes','<?= $data_list[0]->other_commitmentes?>');
			localStorage.setItem('operating_lease_outstanding','<?= $data_list[0]->operating_lease_outstanding?>');
		}); 

<?php  }else {

	?>
	localStorage.clear();
	<?php


} ?>

var html_dropdwon ='';
html_dropdwon +='   <option disabled selected value>Select the Company</option>';
<?php
if(isset($companies)){
	foreach($companies as $row){?>
		html_dropdwon +='<option value="<?= $row->id?>"><?= $row->entity_name?></option>';
		<?php   		
	}
}else{ ?>
	html_dropdwon +='<option selected>No Companies in Database</option>';
<?php } ?>
// html_dropdwon +='  </select>';

localStorage.setItem('html_company',html_dropdwon);
// $('.company').html(html_dropdwon);

</script>
<script src="<?= base_url('assets/js/reportcreation.js')?>" crossorigin="anonymous"></script>