<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('jics');

		$Auth_model = $this->load->model('Main_model');
			// $this->jics->alert('success','Roosri','This is a testing');
	}

	public function index()
	{








		$this->data['country'] = $this->jics->get_companies();
		$this->data['companies'] = $this->Main_model->get_companies();
		$this->page_construct('dash_board',$this->data);
	}

	public function testing(){
		$token = $this->jics->api_loging();

		$abn_data = $this->jics->api_abn($token);
		var_dump($abn_data);exit();
		$ccs_data = $this->jics->api_credit_score($token);

		$abrData = array(
			'name' => $abn_data->abrData->name,
			'abn'=> $abn_data->abrData->abn, 
			'status'=> $abn_data->abrData->status, 
			'effectiveFrom'=> $abn_data->abrData->gst[0]->effectiveFrom, 
			'organization_extract_description'=> $abn_data->abrData->description, 
			'gst_effictiveFrom'=> $abn_data->abrData->gst[0]->effectiveFrom, 
			'postcode_state'=> $abn_data->abrData->addresses[0]->postcode.' '.$abn_data->abrData->addresses[0]->stateCode, 
			'updated_date'=> $abn_data->abrData->updatedDate, 
		);

		$asicData = array(
			'name' => $abn_data->asicData->organisation->name , 
			'acn' => $abn_data->abrData->acn, 
			'type' => $abn_data->asicData->organisation->type, 
			'status' => $abn_data->asicData->organisation->status, 
			'registrationDate' => $abn_data->abrData->registeredDate, 
			'reviewDate' => $abn_data->asicData->organisation->reviewDate, 
			'class' => $abn_data->asicData->organisation->class, 
			'subclass' => $abn_data->asicData->organisation->subclass, 
			'address' => $abn_data->asicData->organisation->address->suburb.' '. $abn_data->asicData->organisation->address->state .' '. $abn_data->asicData->organisation->address->postcode, 
		);

		$ccs = $ccs_data->creditScore->scores->currentCreditScore ;
		$cs_history = $ccs_data->creditScore->scores->creditScoreHistory;
		// $currentCreditScore

		$this->Main_model->creditScoreHistory($cs_history);
	}

	public function delet_com(){
		if($this->Main_model->del_com($this->input->post('id')) == true){
			echo '1';
			// $this->jics->alert('success','Approved','Report Status');
		}else{
			echo "0";
		};
	}	

	public function approvd(){
		if($this->Main_model->approved($this->input->post('id')) == true){
			echo '1';
			$this->jics->alert('success','Approved','Report Status');
		}else{
			echo "0";
		};
	}

	public function reject(){
		if($this->Main_model->reject($this->input->post('id')) == true){
			echo '1';
			$this->jics->alert('warning','Rejected','Report Status');
		}else{
			echo "0";
		};
	}

	public function report_list(){

		$this->data['temp'] = '';

		$this->data['table'] = $this->Main_model->get_repots_list();

		$this->page_construct('reportlist',$this->data);


	}

	public function view_report(){
		if(isset($_GET['id'])){
			$id = $this->input->get('id');
			$this->data['qun_1'] = $this->Main_model->get_data_for_report(intval($id));
			$this->data['qun_2'] = $this->Main_model->get_data_for_report(intval($id) - 1);
			$this->data['qun_3'] = $this->Main_model->get_data_for_report(intval($id) - 2);
			$this->data['cal_1'] = $this->Main_model->get_data_cal(intval($id));
			$this->data['cal_2'] = $this->Main_model->get_data_cal(intval($id) - 1);
			$this->data['cal_3'] = $this->Main_model->get_data_cal(intval($id) - 2);


// var_dump($this->data['cal_1']);exit();
			$this->load->view('report',$this->data);

		}else{
			$this->jics->alert('error','Report error','Data Grab is not complete');
			redirect(base_url('main/companieslist'),'refresh');
		}
	}

	public function newreport(){
		
		if (isset($_GET['com']) and $_GET['com'] == '') {
			$company = $this->Main_model->companies_get_by_id($this->input->get('com'));
			$this->data['company_name'] = $company[0]->entity_name;
			$this->data['abn'] = $company[0]->abn;
			$this->data['acn'] = $company[0]->acn;
		}

		$cuntry  = $this->jics->get_companies();
		if (isset($_GET['cun'])) {
			$this->data['cun'] = $cuntry[$this->input->get('cun')];
		}

		$this->data['country'] = $this->jics->get_companies();
		$this->data['companies'] = $this->Main_model->get_companies();
		
		if (isset($_GET['id'])) {
			$this->data['data_list'] = $this->Main_model->get_data_for_report($_GET['id']);
			
		}


		$this->jics->auth();
		$this->form_validation->set_rules('abn[]', 'Entity Name', 'required');
		$this->form_validation->set_rules('type', 'Entity Name', 'required');

		if ($this->form_validation->run() == TRUE) {

			$i = isset($_POST['row_no']) ? sizeof($_POST['row_no']) : 0;
			for ($r = 0; $r < $i; $r++) { 

				$data = array(
					// 'status'							=> (isset($_POST['is_app'] != 'on' or $_POST['is_app'] != null))? 1;
					'status'							=> (isset($_POST['is_app']))? '0' : '1',
					'type'								=> $this->input->post('report_type'),
					'user_id'			 				=> $_SESSION['user']['user_id'],
					'abn'			 					=> intval($_POST['abn'][$r]),
					'acn'								=> intval($_POST['acn'][$r]),
					'company_name'						=> $_POST['name'][$r],
					'rounding'							=> $_POST['rounding'][$r],
					'base_currency'						=> $_POST['base_currency'][$r],
					'quality'							=> $_POST['quality'][$r],
					'reporting_period_months'			=> $_POST['reporting_period_months'][$r],
					'scope'								=> $_POST['scope'][$r],
					'confidentiality_record'			=> $_POST['confidentiality_record'][$r],
					'financial_year'					=> $_POST['financial_year'][$r],
					'month'								=> $_POST['month'][$r],
					'sales'								=> $_POST['sales'][$r],
					'cost_of_sales'						=> $_POST['cost_of_sales'][$r],
					'gross_profit'						=> $_POST['gross_profit'][$r],
					'other_income'						=> $_POST['other_income'][$r],
					'depreciation'						=> $_POST['depreciation'][$r],
					'amortisation'						=> $_POST['amortisation'][$r],
					'impairment'						=> $_POST['impairment'][$r],
					'interest_expense_gross'			=> $_POST['interest_expense_gross'][$r],
					'operating_lease_expense'			=> $_POST['operating_lease_expense'][$r],
					'finance_lease_hire_purchase_charges'=> $_POST['finance_lease_hire_purchase_charges'][$r],
					'non_recurring_gains_losses'		=> $_POST['non_recurring_gains_losses'][$r],
					'other_gains_losses'				=> $_POST['other_gains_losses'][$r],
					'other_expenses'					=> $_POST['other_expenses'][$r],
					'ebit'								=> $_POST['ebit'][$r],
					'ebitda'							=> $_POST['ebitda'][$r],
					'normalised_ebitda'					=> $_POST['normalised_ebitda'][$r],
					'profit_before_tax'					=> $_POST['profit_before_tax'][$r],
					'profit_before_tax_after_abnormals' => $_POST['profit_before_tax_after_abnormals'][$r],
					'tax_benefit_expense'				=> $_POST['tax_benefit_expense'][$r],
					'profit_after_tax'					=> $_POST['profit_after_tax'][$r],
					'distribution_ordividends'			=> $_POST['distribution_ordividends'][$r],
					'other_post_tax_items_gains_losses'	=> $_POST['other_post_tax_items_gains_losses'][$r],
					'profit_after_tax_distribution'		=> $_POST['profit_after_tax_distribution'][$r],
					'cash'								=> $_POST['cash'][$r],
					'trade_debtors'						=> $_POST['trade_debtors'][$r],
					'total_inventories'					=> $_POST['total_inventories'][$r],
					'loans_to_related_parties_1'		=> $_POST['loans_to_related_parties_1'][$r],
					'other_current_assets'				=> $_POST['other_current_assets'][$r],
					'total_current_assets'				=> $_POST['total_current_assets'][$r],
					'fixed_assets'						=> $_POST['fixed_assets'][$r],
					'net_intangibles'					=> $_POST['net_intangibles'][$r],
					'loan_to_related_parties_2'			=> $_POST['loan_to_related_parties_2'][$r],
					'other_non_current_assets'			=> $_POST['other_non_current_assets'][$r],
					'total_non_curent_assets'			=> $_POST['total_non_curent_assets'][$r],
					'total_assets'						=> $_POST['total_assets'][$r],
					'trade_creditors'					=> $_POST['trade_creditors'][$r],
					'interest_bearing_debt_1'			=> $_POST['interest_bearing_debt_1'][$r],
					'lone_from_related_parties'			=> $_POST['lone_from_related_parties'][$r],
					'other_current_liabilities'			=> $_POST['other_current_liabilities'][$r],
					'total_current_liabilities'			=> $_POST['total_current_liabilities'][$r],
					/*Interest Bearing Debt*/'total_current_liabilities_2'	=> $_POST['total_current_liabilities_2'][$r],
					'loans_from_related_parites'		=> $_POST['loans_from_related_parites'][$r],
					'other_non_current_liabilities'		=> $_POST['other_non_current_liabilities'][$r],
					'total_non_current_liabilities'		=> $_POST['total_non_current_liabilities'][$r],
					'total_liabilities'					=> $_POST['total_liabilities'][$r],
					'share_capital'						=> $_POST['share_capital'][$r],
					'prefence_shares'					=> $_POST['prefence_shares'][$r],
					'treasury_shares'					=> $_POST['treasury_shares'][$r],
					'equity_owner_ships'				=> $_POST['equity_owner_ships'][$r],
					'total_reserves'					=> $_POST['total_reserves'][$r],
					'ratained_earning'					=> $_POST['ratained_earning'][$r],
					'minorty_interest'					=> $_POST['minorty_interest'][$r],
					'total_equity'						=> $_POST['total_equity'][$r],
					'balance'							=> $_POST['balance'][$r],
					'operating_cash_flow'				=> $_POST['operating_cash_flow'][$r],
					'contingent_liabilities'			=> $_POST['contingent_liabilities'][$r],
					'other_commitmentes'				=> $_POST['other_commitmentes'][$r],
					'operating_lease_outstanding'		=> $_POST['operating_lease_outstanding'][$r],
					'financial_perfomance'				=> ($_POST['financial_perfomance']),
				);

// Annualized data calculation engine

$x109 = (intval($_POST['profit_after_tax_distribution'][$r]) / 12) * intval($_POST['reporting_period_months'][$r]); 
$x110 = ((intval($_POST['profit_before_tax_after_abnormals'][$r]) + intval($_POST['interest_expense_gross'][$r])) / 12) * intval($_POST['reporting_period_months'][$r]); 
$x111 = (intval($_POST['profit_after_tax'][$r]) / 12) * intval($_POST['reporting_period_months'][$r]);
$x112 = (intval($_POST['sales'][$r]) / 12) * intval($_POST['reporting_period_months'][$r]);
$x113 = (intval($_POST['operating_cash_flow'][$r]) / 12) * intval($_POST['reporting_period_months'][$r]);
$x114 = (intval($_POST['profit_before_tax_after_abnormals'][$r]) / 12) * intval($_POST['reporting_period_months'][$r]);
$x115 = (intval($_POST['ebitda'][$r]) / 12) * intval($_POST['reporting_period_months'][$r]);
$x116 = (intval($_POST['cost_of_sales'][$r]) / 12) * intval($_POST['reporting_period_months'][$r]);
$x117 = ((intval($_POST['depreciation'][$r]) + intval($_POST['amortisation'][$r]) + intval($_POST['impairment'][$r]) + intval($_POST['interest_expense_gross'][$r]) + intval($_POST['operating_lease_expense'][$r]) + intval($_POST['finance_lease_hire_purchase_charges'][$r]) + intval($_POST['non_recurring_gains_losses'][$r]) + intval($_POST['non_recurring_gains_losses'][$r]) + intval($_POST['other_gains_losses'][$r]) + intval($_POST['other_expenses'][$r])) / 12) * intval($_POST['reporting_period_months'][$r]);


$resent_year = $this->Main_model->resent_two_years();

$sub_0 = ((intval($resent_year[0]->profit_before_tax_after_abnormals) + intval($resent_year[0]->interest_expense_gross)) / 12) * intval($resent_year[0]->reporting_period_months); 
$sub_1 = ((intval($resent_year[1]->profit_before_tax_after_abnormals) + intval($resent_year[1]->interest_expense_gross)) / 12) * intval($resent_year[1]->reporting_period_months); 
$sub_2 = (intval($resent_year[0]->sales) / 12) * intval($resent_year[0]->reporting_period_months);
$sub_3 = (intval($resent_year[1]->sales) / 12) * intval($resent_year[1]->reporting_period_months);



if($sub_1 != 0 or $sub_0 != 0){$x118 = (($sub_1 - $sub_0) / $sub_0) * 100 ;}else{ $x118 = 0; }
($sub_2 != 0 or $sub_3 != 0)? $x119 = (($sub_3 - $sub_2) / $sub_2) * 100 : $x119 = 0;

// Financial Indicators calculation engine
$x82 = intval($_POST['total_assets'][$r]) - intval($_POST['total_liabilities'][$r]) - intval($_POST['net_intangibles'][$r]);
($x116 != 0)? $x93 = (intval($_POST['trade_creditors'][$r]) / $x116) * 365 : $x93 = 0 ;
($x116 != 0)? $x94 = (intval($_POST['total_inventories'][$r]) / $x116) * 365 : $x94 = 0 ;
($x112 != 0)? $x95 = (intval($_POST['trade_debtors'][$r]) / $x112) * 365 : $x95 = 0 ;
$x74 = intval($_POST['total_current_assets'][$r]) - intval($_POST['total_current_liabilities'][$r]);

(intval($_POST['total_assets'][$r]) != 0)? $x126 = $x112 / intval($_POST['total_assets'][$r]) : $x126 = 0 ;  
(intval($_POST['total_equity'][$r]) != 0)? $x125 = intval($_POST['total_equity'][$r]) / intval($_POST['total_equity'][$r]) : $x125 = 0 ; 
(intval($_POST['total_assets'][$r]) != 0)? $x124 = $x110 / intval($_POST['total_assets'][$r]) : $x124 = 0 ; 
(intval($_POST['total_assets'][$r]) != 0)? $x123 = intval($_POST['ratained_earning'][$r]) / intval($_POST['total_assets'][$r]) : $x123 = 0 ; 
(intval($_POST['total_assets'][$r]) != 0)? $x122 = $x74 / intval($_POST['total_assets'][$r]) : $x122 = 0 ;
$x127 = number_format((float)(1.2 * $x112)+(1.4 * $x123)+(3.3 * $x124)+(0.6 * $x125)+(1 * $x126), 2, '.', '');

// var_dump($x127);
// // $this->jics->alert('warning','Report part calculation not compleded yet','OOPS....!!!!');
// // redirect(base_url('main/companieslist'),'refresh');
// exit();

$cal = array(
	'gross_profit_margin'				=> (intval($_POST['gross_profit'][$r]) / intval($_POST['sales'][$r])) * 100 ,
	'ebitda'							=> intval( $_POST['ebitda'][$r]),
	'normalised_ebitda'					=> intval($_POST['normalised_ebitda'][$r]),
	'ebit'								=> intval($_POST['ebit'][$r]),
	'net_profit_margin'					=> (intval($_POST['profit_before_tax_after_abnormals'][$r]) / intval($_POST['sales'][$r])) * 100,
	'profitability'						=> ($x109 / intval($_POST['total_assets'][$r]) * 100),
	'reinvestment'						=> (intval($_POST['ratained_earning'][$r]) / intval($_POST['total_assets'][$r])) * 100,
	'return_on_assets'					=> ($x110 / intval($_POST['total_assets'][$r]))* 100,
	'return_on_equity'					=> ($x111 / intval($_POST['total_equity'][$r])) * 100,
	'working_capital'					=> $x74,
	'working_capital_to_sales'			=> ($x74 / $x112) * 100,
	'cash_flow_coverage'				=> ($x113 / intval($_POST['total_current_liabilities'][$r]) * 100),
	'cash_ratio'						=> intval($_POST['cash'][$r]) /intval($_POST['total_current_liabilities'][$r]),
	'current_ratio'						=> intval($_POST['total_current_assets'][$r]) / intval($_POST['total_current_liabilities'][$r]),
	'quick_ratio'						=> (intval($_POST['cash'][$r]) - intval($_POST['total_inventories'][$r])) / intval($_POST['total_current_liabilities'][$r]),
	'capital_adequacy'					=> (intval($_POST['total_assets'][$r]) - intval($_POST['total_liabilities'][$r]) - intval($_POST['net_intangibles'][$r]) - intval($_POST['loans_to_related_parties_1'][$r]) - intval($_POST['loan_to_related_parties_2'][$r]) / $x112),
	'net_tangible_worth'				=> $x82,
	'net_asset_backing'					=> ($x82 / $x112) * 100,
	'gearing'							=> (intval($_POST['total_liabilities'][$r]) / intval($_POST['total_assets'][$r])) * 100,
	'debt_to_equity'					=> (intval($_POST['interest_bearing_debt_1'][$r]) + intval($_POST['lone_from_related_parties'][$r]) + intval($_POST['trade_debtors'][$r])) / intval($_POST['total_equity'][$r]),
	'interest_coverage'					=> (intval($_POST['profit_before_tax_after_abnormals'][$r]) + intval( $_POST['interest_expense_gross'][$r])) / intval($_POST['interest_expense_gross'][$r]),
	'repayment_capability'				=> ($x110 /  intval($_POST['total_liabilities'][$r])) * 100,
	'financial_leverage'				=> (intval($_POST['interest_bearing_debt_1'][$r]) + intval($_POST['lone_from_related_parties'][$r]) + intval($_POST['trade_debtors'][$r])) / $x115,
	'short_ratio'						=> (intval($_POST['interest_bearing_debt_1'][$r]) + intval($_POST['lone_from_related_parties'][$r])) / ((intval($_POST['interest_bearing_debt_1'][$r]) + intval($_POST['lone_from_related_parties'][$r]) + intval($_POST['trade_debtors'][$r])) * 100),
	'operating_leverage'				=> ($x119 != 0 )? $x118 / $x119 : 0 ,
	'creditor_exposure'					=> (intval($_POST['trade_creditors'][$r]) / intval($_POST['total_assets'][$r])) * 100,
	'creditor_days'						=> intval($_POST['trade_creditors'][$r]) / $x116 * 365,
	'inventory_days'					=> intval($_POST['total_inventories'][$r]) / $x116 * 365,
	'debtor_days'						=> intval($_POST['trade_debtors'][$r]) / $x112 * 365,
	'cash_conversion_cycle'				=> (intval($_POST['trade_debtors'][$r]) / $x112 * 365) + (intval($_POST['total_inventories'][$r]) / $x116 * 365) - (intval($_POST['trade_creditors'][$r]) / $x116 * 365),
	'sales_annualised'					=> $x112,
	'activity'							=> $x112 / intval($_POST['total_assets'][$r]),
	'sales_growth'						=> ($sub_3 != 0)? ($sub_2 - $sub_3 / $sub_3) * 100 : 0 , /*12345678912345678912345678912345678*/
	'related_party_loans_receivable'	=> (intval($_POST['loans_to_related_parties_1'][$r]) + intval($_POST['loan_to_related_parties_2'][$r])) / intval($_POST['total_assets'][$r]) * 100,
	'related_party_loans_payable'		=> (intval($_POST['lone_from_related_parties'][$r]) + intval($_POST['loans_from_related_parites'][$r])) / intval($_POST['total_liabilities'][$r]) * 100,
	'related_party_loans_dependency'	=> ((intval($_POST['lone_from_related_parties'][$r]) + intval($_POST['loans_from_related_parites'][$r])) / $x74) * 100,
	'quick_asset_composition'			=> (intval($_POST['total_current_assets'][$r]) - intval($_POST['total_inventories'][$r])) / intval($_POST['total_assets'][$r]) * 100,
	'current_asset_composition'			=> (intval($_POST['total_current_assets'][$r]) - intval($_POST['total_assets'][$r])) * 100,
	'current_liability_composition'		=> (intval($_POST['total_current_liabilities'][$r]) - intval($_POST['total_liabilities'][$r])) * 100,
	'zscore_risk_measure'				=> $x127,
);


$data_tbl[] = array(
	'data' => $data,
	'cal' => $cal
);
}

krsort($data_tbl);

if($this->Main_model->report_save($data_tbl) == true){
	// var_dump($data_tbl);
	$this->jics->alert('success','Recode Updated Successfull','Save');
	redirect(base_url('newreport'),'refresh');
}
// var_dump('*****************************************');	var_dump($data_tbl);exit();

}


$this->data['row'] = $this->Main_model->report_row();
$this->data['col'] = $this->Main_model->report_col();



$this->page_construct('new_report',$this->data);
}

public function companieslist(){
	$this->jics->auth('1');
	$this->data['country_list'] = $this->jics->get_companies();
	$this->data['table'] = $this->Main_model->get_companies_tbl();
	$this->page_construct('companies_list',$this->data);
}

public function companies(){
	$this->jics->auth();
	$this->form_validation->set_rules('name', 'Entity Name', 'required');
	$this->form_validation->set_rules('acn', 'ACN', 'required');
	$this->form_validation->set_rules('abn', 'ABN', 'required');
	$this->form_validation->set_rules('dateestablished', 'Date Established', 'required');

	if ($this->form_validation->run() == TRUE) {
		$data = array(
			'country' => $this->input->post('country'), 
			'entity_name' => $this->input->post('name'), 
			'entity_type' => $this->input->post('entity_type'), 
			'abn' => $this->input->post('abn'), 
			'acn' => $this->input->post('can'), 
			'rbn' => $this->input->post('rbn'), 
			'equity' => $this->input->post('equity'), 
			'date_established' => $this->input->post('dateestablished'), 
			'confidentiality' => $this->input->post('confidentiality'), 
			'portfolio' => $this->input->post('portfolioanalysisstatus'), 
			'unit_no' => $this->input->post('unit_no'), 
			'street_no' => $this->input->post('street_no'), 
			'street_name' => $this->input->post('street_name'), 
			'suburb' => $this->input->post('suburb'), 
			'state' => $this->input->post('state'), 
			'pose_code' => $this->input->post('posecode'), 
			'contact_type_1' => $this->input->post('contact_type_1'), 
			'contact_type_2' => $this->input->post('contact_type_2'), 
			'anzic_division' => $this->input->post('anzic_division'), 
			'anzic_sub_division' => $this->input->post('anzic_sub_division'), 
			'anzic_group' => $this->input->post('anzic_group'), 
			'anzic_class' => $this->input->post('anzic_class'), 
			'primary_division' => $this->input->post('primary_division'), 
			'primary_sub_division' => $this->input->post('primary_sub_division'), 
			'primary_group' => $this->input->post('primary_group'), 
			'primary_class' => $this->input->post('primary_class'), 
			'secondary_division' => $this->input->post('secondry_division'), 
			'secondary_sub_division' => $this->input->post('secondry_sub_division'), 
			'secondary_group' => $this->input->post('secondry_group'), 
			'secondary_class' => $this->input->post('secondary_class'), 
		);
		if ($this->input->post('hid') !== '0' and $this->Main_model->update_company($this->input->post('hid'),$data) == True) {
			$this->jics->alert('success','Recode Updated Successfull','Save');
			redirect(base_url('main/companieslist'),'refresh');
		}

		if($this->Main_model->add_company($data) == True){
			$this->jics->alert('success','Recode Added Successfull','Save');
			redirect(base_url('main/companieslist'),'refresh');
		}
	}

	if(isset($_GET['id'])){
		$data = $this->Main_model->companies_get_by_id($this->input->get('id'));
		$this->data['input'] =  array(
			'hid' => $this->input->get('id'),
			'country' =>  $data[0]->country,
			'name' => $data[0]->entity_name,
			'entity_type' => $data[0]->entity_type,
			'abn' => $data[0]->abn,
			'acn' => $data[0]->acn,
			'rbn' => $data[0]->rbn,
			'equity' => $data[0]->equity,
			'dateestablished' => $data[0]->date_established,
			'confidentiality' => $data[0]->confidentiality,
			'portfolioanalysisstatus' => $data[0]->portfolio, 
			'unit_no' => $data[0]->unit_no,
			'street_no' =>  $data[0]->street_no,
			'street_name' =>  $data[0]->street_name,
			'suburb' =>  $data[0]->suburb,
			'state' =>  $data[0]->state,
			'posecode' =>  $data[0]->pose_code,
			'contact_type_1' =>  $data[0]->contact_type_1,
			'contact_type_2' =>  $data[0]->contact_type_2,
			'anzic_division' =>  $data[0]->anzic_division,
			'anzic_sub_division' =>  $data[0]->anzic_sub_division,
			'anzic_group' =>  $data[0]->anzic_group,
			'anzic_class' =>  $data[0]->anzic_class,
			'primary_division' =>  $data[0]->primary_division,
			'primary_sub_division' =>  $data[0]->primary_sub_division,
			'primary_group' =>  $data[0]->primary_group,
			'primary_class' =>  $data[0]->primary_class,
			'secondry_division' =>  $data[0]->secondary_division,
			'secondry_sub_division' =>  $data[0]->secondary_sub_division,
			'secondry_group' =>  $data[0]->secondary_group,
			'secondary_class' =>  $data[0]->secondary_class,
		);
		$classification = $this->Main_model->classification();
		foreach($classification as $row){
			$option[$row->id ] = $row->name;
		}
		$this->data['classification'] = $option;

	}else {
		$this->data['input'] =  array(
			'country' => ($this->input->post('country') != '')? $this->input->post('country'): '',
			'name' => ($this->input->post('name') != '')? $this->input->post('name'): '',
			'entity_type' => ($this->input->post('entity_type') != '')? $this->input->post('entity_type'): '',
			'abn' => ($this->input->post('abn') != '')? $this->input->post('abn'): '',
			'acn' => ($this->input->post('can') != '')? $this->input->post('can'): '',
			'rbn' => ($this->input->post('rbn') != '')? $this->input->post('rbn'): '',
			'equity' => ($this->input->post('equity') != '')? $this->input->post('equity'): '',
			'dateestablished' => ($this->input->post('dateestablished') != '')? $this->input->post('dateestablished'): '',
			'confidentiality' => ($this->input->post('confidentiality') != '')? $this->input->post('confidentiality'): '',
			'portfolioanalysisstatus' => ($this->input->post('portfolioanalysisstatus') != '')? $this->input->post('portfolioanalysisstatus'): '',
			'unit_no' => ($this->input->post('unit_no') != '')? $this->input->post('unit_no'): '',
			'street_no' => ($this->input->post('street_no') != '')? $this->input->post('street_no'): '',
			'street_name' => ($this->input->post('street_name') != '')? $this->input->post('street_name'): '',
			'suburb' => ($this->input->post('suburb') != '')? $this->input->post('suburb'): '',
			'state' => ($this->input->post('state') != '')? $this->input->post('state'): '',
			'posecode' => ($this->input->post('posecode') != '')? $this->input->post('posecode'): '',
			'contact_type_1' => ($this->input->post('contact_type_1') != '')? $this->input->post('contact_type_1'): '',
			'contact_type_2' => ($this->input->post('contact_type_2') != '')? $this->input->post('contact_type_2'): '',
			'anzic_division' =>  '',
			'anzic_sub_division' =>  '',
			'anzic_group' =>  '',
			'anzic_class' =>  '',
			'primary_division' =>  '',
			'primary_sub_division' =>  '',
			'primary_group' =>  '',
			'primary_class' =>  '',
			'secondry_division' =>  '',
			'secondry_sub_division' =>  '',
			'secondry_group' =>  '',
			'secondary_class' =>  '',
		);
	}
	$this->data['confidentiality'] =  $this->jics->get_confidentiality();
	$this->data['entity_type'] = $this->jics->get_entity_type();
	$this->data['companies'] = $this->jics->get_companies();
	$this->page_construct('companies',$this->data);

	if(!isset($_post)){
		return validation_errors();
	}
}

public function classification(){
	$data = $this->Main_model->classification($this->input->post('id'));
	echo json_encode($data);
}

public function users(){
	$this->jics->auth('1');

	$this->form_validation->set_rules('user_name', 'Use Name', 'required|trim|min_length[4]|max_length[10]');
	$this->form_validation->set_rules('first_name', 'First Name', 'required');
	$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[8]');
	$this->form_validation->set_rules('confirm_password', 'Password', 'trim|required|min_length[6]|max_length[8]');
	// $this->form_validation->set_rules('designation', 'Designation', 'required');
	$this->form_validation->set_rules('user_role', 'User Role', 'required');

	if (($this->input->post('hid')) == '0' and $this->Main_model->user_name_sug($this->input->post('user_name')) == true ) {
		$this->jics->alert('error','Please try another user name.','User name is alrady used');
		redirect(base_url('users'),'refresh');
	}

	if($this->input->post('password') !== $this->input->post('confirm_password')){
		$this->jics->alert('error','Passwords are Different.','Password Error');
		redirect(base_url('users'),'refresh');
	}

	if ($this->form_validation->run() == TRUE) {

		$data = array(
			'user_name' => $this->input->post('user_name'), 
			'firstname' => $this->input->post('first_name'), 
			'lastname' => $this->input->post('last_name'), 
			'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT), 
			'permission_id' => $this->input->post('user_role'), 
			'designation' => $this->input->post('designation'), 
			'address' => $this->input->post('address'), 
			'telephone' => $this->input->post('telephone'), 
			'email' => $this->input->post('email'), 
			'first_loging' => '1', 
		);

		if (($this->input->post('hid')) == '0' and $this->Main_model->add_user($data)) {
			$this->jics->alert('Success!','The record has been added successfully','Save');

		}elseif($this->input->post('hid') != '0' and $this->Main_model->update_user($data,$this->input->post('hid'))){
			$this->jics->alert('Success!','Record has been updated successfully','Update');
		}
	}else{  
		$this->data['input'] =  array(
			'user_name' => ($this->input->post('user_name') != '')? $this->input->post('user_name'): '',
			'first_name' => ($this->input->post('first_name') != '')? $this->input->post('first_name'): '',
			'last_name' => ($this->input->post('last_name') != '')? $this->input->post('last_name'): '',
			'address' => ($this->input->post('address') != '')? $this->input->post('address'): '',
			'telephone' => ($this->input->post('telephone') != '')? $this->input->post('telephone'): '',
			'email' => ($this->input->post('email') != '')? $this->input->post('email'): '',
		);

	}

	$this->data['table'] = $this->Main_model->get_user_tbl();
	$this->page_construct('users',$this->data);
}

public function edit_user(){
	$this->jics->auth();

	if($data = $this->Main_model->get_user_by_id($this->input->post('id'))){
		$data_return = array(
			'user_id' => $data[0]->user_id, 
			'user_name' => $data[0]->user_name, 
			'firstname' => $data[0]->firstname, 
			'lastname' => $data[0]->lastname, 
			'address' => $data[0]->address, 
			'telephone' => $data[0]->telephone, 
			'email_id' => $data[0]->email_id, 
			'user_role' => $data[0]->permission_id, 
			'designation' => $data[0]->designation, 
		);
		echo json_encode($data_return);
	}else{
		echo '0';

	}
}

public function delete_user(){
	$this->jics->auth();

	if($this->Main_model->delete_user_by_id($this->input->post('id')) == true){
		echo '1';
	}else{
		echo "0";
	}
}

public function profile(){
	$this->jics->auth();

	$this->form_validation->set_rules('current', 'Current password', 'required');
	$this->form_validation->set_rules('password_1', 'Password', 'trim|required|min_length[6]');
	$this->form_validation->set_rules('password_2', 'Password confermation', 'trim|required|min_length[6]');

	if ($this->form_validation->run() == TRUE) {
		$this->load->helper('string');
		$recovery_key = random_string('md5' , 16);
		$session_user_data = $this->session->userdata('user');
		$user_data = $this->Main_model->get_user_by_id($session_user_data['user_id']);
		$psw = password_hash($this->input->post('password_1'), PASSWORD_DEFAULT);

		if (password_verify($this->input->post('current'), $user_data[0]->password) == FALSE) {
			$this->jics->alert('error','Current Password is Worng.','Password Error');
			redirect(base_url('profile'),'refresh');
		}

		if($this->input->post('password_1') !== $this->input->post('password_2')){
			$this->jics->alert('error','Passwords are Different.','Password Error');
			redirect(base_url('profile'),'refresh');
		}

		if($this->Main_model->password_update($session_user_data['user_id'],$psw,$recovery_key) == True){
			redirect(base_url('logout'),'refresh');
		}
	}

	$this->page_construct('profile',$data['temp'] = '');
}

public function get_d_tbl(){


	$table = $this->Main_model->recent_reports($this->input->post('id'));
	$html = '';
	$count = 1;
	if (isset($table) and $table != false) {
		foreach ($table as $row) {
			$html .= '<tr>';
			$html .= '<td>'. $count .'</td>';
			$html .= '<td>'. $row->status .'</td>';
			$html .= '<td>'. $row->company_name .'</td>';
			$html .= '<td>'. $row->created_at .'</td>';
			$html .= '<td><td class="text-center"><div class="btn-group" role="group" aria-label="Basic example"><a class="btn btn-primary" href="'. base_url("newreport").'?id='.$row->id.'">Edit</a></div></td>';
			$html .= '</tr>';

			$count++;
		// var_dump($row);
		}
	}else{
		$html .= '<tr><td colspan="5">No Data</td></tr>';

	}

	echo $html;
}

}