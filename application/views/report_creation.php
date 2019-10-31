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
			<!-- <div class="col-md-2"><img style="height:20%" src="<?= base_url('assets/img/loader.gif')?>"/></div> -->
			<div>
			
				<button class="btn btn-primary mt-2 mt-md-0" onclick="viewReport(<?= $_GET['id']?>)">Report</button>
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
						<tr>
							<th scope="row">ABN</th>
							<td class="aaa"><?= (isset($year_1->abn))? $year_1->abn : 'N/A' ?></td>
							<td class="aaa"><?= (isset($year_2->abn))? $year_2->abn : 'N/A' ?></td>
							<td class="aaa"><?= (isset($year_3->abn))? $year_3->abn : 'N/A' ?></td>
							<!-- <td class="aaa"><?= (isset($year_1->abn))? $year_1->abn : "N/A"  ?></td> -->
							<!-- <td class="aaa"><?= $year_2->abn ?></td> -->
							<!-- <td class="aaa"><?= $year_3->abn ?></td> -->

						</tr>
						<tr>
							<th scope="row">ACN</th>
							<td class="aaa"><?= (isset($year_1->acn))? $year_1->acn : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->acn))? $year_2->acn : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->acn))? $year_3->acn : "N/A"  ?></td>

						</tr>
						<tr>
							<th scope="row">Company name</th>
							<td class="aaa"><?= (isset($year_1->entity_name))? $year_1->entity_name : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->entity_name))? $year_2->entity_name : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->entity_name))? $year_3->entity_name : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Rounding</th>
							<td class="aaa"><?= (isset($year_1->rounding))? $year_1->rounding : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->rounding))? $year_2->rounding : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->rounding))? $year_3->rounding : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Base currency</th>
							<td class="aaa"><?= (isset($year_1->base_currency))? $year_1->base_currency : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->base_currency))? $year_2->base_currency : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->base_currency))? $year_3->base_currency : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Quality</th>
							<td class="aaa"><?= (isset($year_1->quality))? $year_1->quality : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->quality))? $year_2->quality : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->quality))? $year_3->quality : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Reporting period months</th>
							<td class="aaa"><?= (isset($year_1->reporting_period_months))? $year_1->reporting_period_months : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->reporting_period_months))? $year_2->reporting_period_months : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->reporting_period_months))? $year_3->reporting_period_months : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Scope</th>
							<td class="aaa"><?= (isset($year_1->scope))? $year_1->scope : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->scope))? $year_2->scope : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->scope))? $year_3->scope : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Confidentiality record</th>
							<td class="aaa"><?= (isset($year_1->confidentiality_record))? $year_1->confidentiality_record : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->confidentiality_record))? $year_2->confidentiality_record : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->confidentiality_record))? $year_3->confidentiality_record : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Financial year</th>
							<td class="aaa"><?= (isset($year_1->financial_year))? $year_1->financial_year : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->financial_year))? $year_2->financial_year : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->financial_year))? $year_3->financial_year : "N/A"  ?></td>
						</tr>
						<tr>
							<th scope="row">Month</th>
							<td class="aaa"><?= (isset($year_1->month))? $year_1->month : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_2->month))? $year_2->month : "N/A"  ?></td>
							<td class="aaa"><?= (isset($year_3->month))? $year_3->month : "N/A"  ?></td>
						</tr>
						<tr class
						="table-primary"><th scope="row">Income Statement</th>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<th scope="row">Sales</th>
						<td class="aaa"><?= (isset($year_1->sales))? $year_1->sales : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->sales))? $year_2->sales : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->sales))? $year_3->sales : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Cost of sales</th>
						<td class="aaa"><?= (isset($year_1->cost_of_sales))? $year_1->cost_of_sales : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->cost_of_sales))? $year_2->cost_of_sales : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->cost_of_sales))? $year_3->cost_of_sales : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Gross profit</th>
						<td class="aaa"><?= (isset($year_1->gross_profit))? $year_1->gross_profit : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->gross_profit))? $year_2->gross_profit : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->gross_profit))? $year_3->gross_profit : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Other income</th>
						<td class="aaa"><?= (isset($year_1->other_income))? $year_1->other_income : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->other_income))? $year_2->other_income : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->other_income))? $year_3->other_income : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Depreciation</th>
						<td class="aaa"><?= (isset($year_1->depreciation))? $year_1->depreciation : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->depreciation))? $year_2->depreciation : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->depreciation))? $year_3->depreciation : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Amortisation</th>
						<td class="aaa"><?= (isset($year_1->amortisation))? $year_1->amortisation : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->amortisation))? $year_2->amortisation : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->amortisation))? $year_3->amortisation : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Impairment</th>
						<td class="aaa"><?= (isset($year_1->impairment))? $year_1->impairment : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->impairment))? $year_2->impairment : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->impairment))? $year_3->impairment : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Interest expense gross</th>
						<td class="aaa"><?= (isset($year_1->interest_expense_gross))? $year_1->interest_expense_gross : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->interest_expense_gross))? $year_2->interest_expense_gross : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->interest_expense_gross))? $year_3->interest_expense_gross : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Operating lease expense</th>
						<td class="aaa"><?= (isset($year_1->operating_lease_expense))? $year_1->operating_lease_expense : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->operating_lease_expense))? $year_2->operating_lease_expense : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->operating_lease_expense))? $year_3->operating_lease_expense : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Finance lease hire purchase charges</th>
						<td class="aaa"><?= (isset($year_1->finance_lease_hire_purchase_charges))? $year_1->finance_lease_hire_purchase_charges : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->finance_lease_hire_purchase_charges))? $year_2->finance_lease_hire_purchase_charges : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->finance_lease_hire_purchase_charges))? $year_3->finance_lease_hire_purchase_charges : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Non recurring gains losses</th>
						<td class="aaa"><?= (isset($year_1->non_recurring_gains_losses))? $year_1->non_recurring_gains_losses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->non_recurring_gains_losses))? $year_2->non_recurring_gains_losses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->non_recurring_gains_losses))? $year_3->non_recurring_gains_losses : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Other gains losses</th>
						<td class="aaa"><?= (isset($year_1->other_gains_losses))? $year_1->other_gains_losses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->other_gains_losses))? $year_2->other_gains_losses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->other_gains_losses))? $year_3->other_gains_losses : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Other expenses</th>
						<td class="aaa"><?= (isset($year_1->other_expenses))? $year_1->other_expenses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->other_expenses))? $year_2->other_expenses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->other_expenses))? $year_3->other_expenses : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Ebit</th>
						<td class="aaa"><?= (isset($year_1->ebit))? $year_1->ebit : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->ebit))? $year_2->ebit : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->ebit))? $year_3->ebit : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Ebitda</th>
						<td class="aaa"><?= (isset($year_1->ebitda))? $year_1->ebitda : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->ebitda))? $year_2->ebitda : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->ebitda))? $year_3->ebitda : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Normalised ebitda</th>
						<td class="aaa"><?= (isset($year_1->normalised_ebitda))? $year_1->normalised_ebitda : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->normalised_ebitda))? $year_2->normalised_ebitda : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->normalised_ebitda))? $year_3->normalised_ebitda : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Profit before tax</th>
						<td class="aaa"><?= (isset($year_1->profit_before_tax))? $year_1->profit_before_tax : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->profit_before_tax))? $year_2->profit_before_tax : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->profit_before_tax))? $year_3->profit_before_tax : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Profit before tax after abnormals</th>
						<td class="aaa"><?= (isset($year_1->profit_before_tax_after_abnormals))? $year_1->profit_before_tax_after_abnormals : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->profit_before_tax_after_abnormals))? $year_2->profit_before_tax_after_abnormals : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->profit_before_tax_after_abnormals))? $year_3->profit_before_tax_after_abnormals : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Tax benefit expense</th>
						<td class="aaa"><?= (isset($year_1->tax_benefit_expense))? $year_1->tax_benefit_expense : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->tax_benefit_expense))? $year_2->tax_benefit_expense : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->tax_benefit_expense))? $year_3->tax_benefit_expense : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Profit after tax</th>
						<td class="aaa"><?= (isset($year_1->profit_after_tax))? $year_1->profit_after_tax : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->profit_after_tax))? $year_2->profit_after_tax : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->profit_after_tax))? $year_3->profit_after_tax : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Distribution ordividends</th>
						<td class="aaa"><?= (isset($year_1->distribution_ordividends))? $year_1->distribution_ordividends : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->distribution_ordividends))? $year_2->distribution_ordividends : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->distribution_ordividends))? $year_3->distribution_ordividends : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Other post tax items gains losses</th>
						<td class="aaa"><?= (isset($year_1->other_post_tax_items_gains_losses))? $year_1->other_post_tax_items_gains_losses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->other_post_tax_items_gains_losses))? $year_2->other_post_tax_items_gains_losses : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->other_post_tax_items_gains_losses))? $year_3->other_post_tax_items_gains_losses : "N/A"  ?></td>
					</tr>
					<tr>
						<th scope="row">Profit after tax distribution</th>
						<td class="aaa"><?= (isset($year_1->profit_after_tax_distribution))? $year_1->profit_after_tax_distribution : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_2->profit_after_tax_distribution))? $year_2->profit_after_tax_distribution : "N/A"  ?></td>
						<td class="aaa"><?= (isset($year_3->profit_after_tax_distribution))? $year_3->profit_after_tax_distribution : "N/A"  ?></td>
					</tr>
					<tr class
					="table-primary"><th scope="row">Balance Sheet Assets</th>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class
				="table-primary"><th scope="row">Assets</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th scope="row">Cash</th>
				<td class="aaa"><?= (isset($year_1->cash))? $year_1->cash : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->cash))? $year_2->cash : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->cash))? $year_3->cash : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Trade debtors</th>
				<td class="aaa"><?= (isset($year_1->trade_debtors))? $year_1->trade_debtors : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->trade_debtors))? $year_2->trade_debtors : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->trade_debtors))? $year_3->trade_debtors : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Total inventories</th>
				<td class="aaa"><?= (isset($year_1->total_inventories))? $year_1->total_inventories : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_inventories))? $year_2->total_inventories : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_inventories))? $year_3->total_inventories : "N/A" ?></td>
			</tr>
			<tr>
				<th scope="row">Loans to related parties 1</th>
				<td class="aaa"><?= (isset($year_1->loans_to_related_parties_1))? $year_1->loans_to_related_parties_1 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->loans_to_related_parties_1))? $year_2->loans_to_related_parties_1 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->loans_to_related_parties_1))? $year_3->loans_to_related_parties_1 : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Other current assets</th>
				<td class="aaa"><?= (isset($year_1->other_current_assets))? $year_1->other_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->other_current_assets))? $year_2->other_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->other_current_assets))? $year_3->other_current_assets : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Total current assets</th>
				<td class="aaa"><?= (isset($year_1->total_current_assets))? $year_1->total_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_current_assets))? $year_2->total_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_current_assets))? $year_3->total_current_assets : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Fixed assets</th>
				<td class="aaa"><?= (isset($year_1->fixed_assets))? $year_1->fixed_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->fixed_assets))? $year_2->fixed_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->fixed_assets))? $year_3->fixed_assets : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Net intangibles</th>
				<td class="aaa"><?= (isset($year_1->total_current_assets))? $year_1->total_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_current_assets))? $year_2->total_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_current_assets))? $year_3->total_current_assets : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Loan to related parties 2</th>
				<td class="aaa"><?= (isset($year_1->net_intangibles))? $year_1->net_intangibles : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->net_intangibles))? $year_2->net_intangibles : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->net_intangibles))? $year_3->net_intangibles : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Other non current assets</th>
				<td class="aaa"><?= (isset($year_1->loan_to_related_parties_2))? $year_1->loan_to_related_parties_2 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->loan_to_related_parties_2))? $year_2->loan_to_related_parties_2 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->loan_to_related_parties_2))? $year_3->loan_to_related_parties_2 : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Total non curent assets</th>
				<td class="aaa"><?= (isset($year_1->other_non_current_assets))? $year_1->other_non_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->other_non_current_assets))? $year_2->other_non_current_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->other_non_current_assets))? $year_3->other_non_current_assets : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Total assets</th>
				<td class="aaa"><?= (isset($year_1->total_assets))? $year_1->total_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_assets))? $year_2->total_assets : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_assets))? $year_3->total_assets : "N/A"  ?></td>
			</tr>
			<tr class="table-primary">
				<th scope="row">Liabilities</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th scope="row">Trade creditors</th>
				<td class="aaa"><?= (isset($year_1->trade_creditors))? $year_1->trade_creditors : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->trade_creditors))? $year_2->trade_creditors : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->trade_creditors))? $year_3->trade_creditors : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Interest bearing debt 1</th>
				<td class="aaa"><?= (isset($year_1->interest_bearing_debt_1))? $year_1->interest_bearing_debt_1 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->interest_bearing_debt_1))? $year_2->interest_bearing_debt_1 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->interest_bearing_debt_1))? $year_3->interest_bearing_debt_1 : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Lone from related parties</th>
				<td class="aaa"><?= (isset($year_1->lone_from_related_parties))? $year_1->lone_from_related_parties : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->lone_from_related_parties))? $year_2->lone_from_related_parties : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->lone_from_related_parties))? $year_3->lone_from_related_parties : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Other current liabilities</th>
				<td class="aaa"><?= (isset($year_1->other_current_liabilities))? $year_1->other_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->other_current_liabilities))? $year_2->other_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->other_current_liabilities))? $year_3->other_current_liabilities : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Total current liabilities</th>
				<td class="aaa"><?= (isset($year_1->total_current_liabilities))? $year_1->total_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_current_liabilities))? $year_2->total_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_current_liabilities))? $year_3->total_current_liabilities : "N/A" ?></td>
			</tr>
			<tr>
				<th scope="row">Interset Bearing Debt</th>
				<td class="aaa"><?= (isset($year_1->total_current_liabilities_2))? $year_1->total_current_liabilities_2 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_current_liabilities_2))? $year_2->total_current_liabilities_2 : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_current_liabilities_2))? $year_3->total_current_liabilities_2 : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Loans from related parites</th>
				<td class="aaa"><?= (isset($year_1->loans_from_related_parites))? $year_1->loans_from_related_parites : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->loans_from_related_parites))? $year_2->loans_from_related_parites : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->loans_from_related_parites))? $year_3->loans_from_related_parites : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Other non current liabilities</th>
				<td class="aaa"><?= (isset($year_1->other_non_current_liabilities))? $year_1->other_non_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->other_non_current_liabilities))? $year_2->other_non_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->other_non_current_liabilities))? $year_3->other_non_current_liabilities : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Total non current liabilities</th>
				<td class="aaa"><?= (isset($year_1->total_non_current_liabilities))? $year_1->total_non_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_non_current_liabilities))? $year_2->total_non_current_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_non_current_liabilities))? $year_3->total_non_current_liabilities : "N/A"  ?></td>
			</tr>
			<tr>
				<th scope="row">Total liabilities</th>
				<td class="aaa"><?= (isset($year_1->total_liabilities))? $year_1->total_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_2->total_liabilities))? $year_2->total_liabilities : "N/A"  ?></td>
				<td class="aaa"><?= (isset($year_3->total_liabilities))? $year_3->total_liabilities : "N/A"  ?></td>
			</tr>
			<tr class
			="table-primary"><th scope="row">Equity</th>
			<td></td>

			<td>
			</td>


			<td>
			</td>

		</tr>
		<tr>
			<th scope="row">Share capital</th>
			<td class="aaa"><?= (isset($year_1->share_capital))? $year_1->share_capital : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->share_capital))? $year_2->share_capital : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->share_capital))? $year_3->share_capital : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Prefence shares</th>
			<td class="aaa"><?= (isset($year_1->prefence_shares))? $year_1->prefence_shares : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->prefence_shares))? $year_2->prefence_shares : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->prefence_shares))? $year_3->prefence_shares : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Treasury shares</th>
			<td class="aaa"><?= (isset($year_1->treasury_shares))? $year_1->treasury_shares : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->treasury_shares))? $year_2->treasury_shares : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->treasury_shares))? $year_3->treasury_shares : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Equity owner ships</th>
			<td class="aaa"><?= (isset($year_1->equity_owner_ships))? $year_1->equity_owner_ships : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->equity_owner_ships))? $year_2->equity_owner_ships : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->equity_owner_ships))? $year_3->equity_owner_ships : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Total reserves</th>
			<td class="aaa"><?= (isset($year_1->total_reserves))? $year_1->total_reserves : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->total_reserves))? $year_2->total_reserves : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->total_reserves))? $year_3->total_reserves : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Ratained earning</th>
			<td class="aaa"><?= (isset($year_1->ratained_earning))? $year_1->ratained_earning : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->ratained_earning))? $year_2->ratained_earning : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->ratained_earning))? $year_3->ratained_earning : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Minorty interest</th>
			<td class="aaa"><?= (isset($year_1->minorty_interest))? $year_1->minorty_interest : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->minorty_interest))? $year_2->minorty_interest : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->minorty_interest))? $year_3->minorty_interest : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Total equity</th>
			<td class="aaa"><?= (isset($year_1->total_equity))? $year_1->total_equity : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->total_equity))? $year_2->total_equity : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->total_equity))? $year_3->total_equity : "N/A"  ?></td>
		</tr>
		<tr>
			<th scope="row">Balance</th>
			<td class="aaa"><?= (isset($year_1->balance))? $year_1->balance : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_2->balance))? $year_2->balance : "N/A"  ?></td>
			<td class="aaa"><?= (isset($year_3->balance))? $year_3->balance : "N/A"  ?></td>
		</tr>
		<tr class
		="table-primary"><th scope="row">Additional Information</th>
		<td></td>

		<td>
		</td>


		<td>
		</td>

	</tr>
	<tr>
		<th scope="row">Operating cash flow</th>
		<td class="aaa"><?= (isset($year_1->operating_cash_flow))? $year_1->operating_cash_flow : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_2->operating_cash_flow))? $year_2->operating_cash_flow : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_3->operating_cash_flow))? $year_3->operating_cash_flow : "N/A"  ?></td>
	</tr>
	<tr>
		<th scope="row">Contingent liabilities</th>
		<td class="aaa"><?= (isset($year_1->contingent_liabilities))? $year_1->contingent_liabilities : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_2->contingent_liabilities))? $year_2->contingent_liabilities : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_3->contingent_liabilities))? $year_3->contingent_liabilities : "N/A"  ?></td>
	</tr>
	<tr>
		<th scope="row">Other commitmentes</th>
		<td class="aaa"><?= (isset($year_1->other_commitmentes))? $year_1->other_commitmentes : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_2->other_commitmentes))? $year_2->other_commitmentes : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_3->other_commitmentes))? $year_3->other_commitmentes : "N/A"  ?></td>
	</tr>
	<tr>
		<th scope="row">Operating lease outstanding</th>
		<td class="aaa"><?= (isset($year_1->operating_lease_outstanding))? $year_1->operating_lease_outstanding : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_2->operating_lease_outstanding))? $year_2->operating_lease_outstanding : "N/A"  ?></td>
		<td class="aaa"><?= (isset($year_3->operating_lease_outstanding))? $year_3->operating_lease_outstanding : "N/A"  ?></td>
	</tr>
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






		<!-- Modal -->
			<div class="modal fade" id="bootstrap-modal" role="dialog">

        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <button type="button" class="close" data-dismiss="modal">×</button> -->
                    <h4 class="modal-title text-center">Generating Report.....</h4>
                </div>
                <div id="demo-modal">
                   <p class="text-center">
                       <img id="loader-img" style="hieght:80%" src="<?= base_url('assets/img/loader.gif')?>"/>
                   </p>
                    <div id="result" class="col-md-12">

                        <div class="success-msg">
                            <p class="alert alert-success text-center" >Report has been Generated</p>

                            
                        </div>


					</div>
					<div id="result-error" class="col-md-12">

                        <div class="">
                            <p id="error-msg" class="alert alert-danger text-center" ></p>

                            
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close</button> -->
                </div>
            </div>
        </div>
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
			// alert('<?= $data_list[0]->scope?>');
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
			localStorage.setItem('trade_creditors','<?= $data_list[0]->trade_creditors?>');
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
 


 				/**
		 * Save Api Data and Generate
		 */
		function viewReport(id){

			$('#result').hide();
			$("#result-error").hide();
        	$('#loader-img').show();
			$('#bootstrap-modal').modal({
                    show : true
                });

			var abn = localStorage.getItem('abn');
			var acn = localStorage.getItem('acn');
			

			var reportUrl = '<?= base_url('main/view_report')?>?id=<?= $_GET['id']?>';
			
			$.ajax({
				method:'POST',
				url : '<?= base_url('main/saveApiData?report_id=')?>'+id+'&abn='+abn+'&acn='+acn,
				dataType:'JSON',
				success : function(res){
					if(res.status==true){

						$('#result').show();
        				$('#loader-img').hide();

						setTimeout(function(){
							location.href = reportUrl;
						},2000);
					
					}else{
						$("#error-msg").html(res.msg);
						$("#result-error").show();
						$('#loader-img').hide();

						setTimeout(function(){
							location.reload();
						},3000);

					}
				}


			});
			
		}

<?php  }else { 
	?>
	localStorage.clear();
	localStorage.setItem('abn','');
	localStorage.setItem('acn','');
	localStorage.setItem('company_name','<?= $company_name?>');
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