$(document).ready(function ($) {
	$('#add_btn').click(function (event) {
		clone();
	});

	localStorage.setItem('col_0', '1');
	localStorage.setItem('col_1', '1');
	localStorage.setItem('col_2', '1');
	clone();
});

$(document).on('click', '#save', function () {
	var sts = 0;
	$('input[type="text"]').each(function () {
		if ($(this).val() == '' || isNaN(parseFloat($(this).val())) || typeof $(this).val() == 'undefined') {
			sts = 1;
			$(this).addClass('is-invalid');
		} else {
			$(this).removeClass('is-invalid');
		}
	});

	// 	$('select').each(function(){
	// 		if($(this).val() == ''){
	// 			$(this).addClass('is-invalid');
	// 		}else{
	// 			$(this).removeClass('is-invalid');
	// 		}

	// 		console.log($(this).val());
	// 	});

	// 	if ($(".is-invalid").length > 0) {
	//     $(".is-invalid").each(function() {
	//     	sts = 1;
	//     }); 
	// }

	// if(sts == 0){
	// 	// alert();
	// 	$('#submit').click();
	// }

	if ($("#report").valid() == false) {
		toastr.error('pleace check the fields', 'Form Validation Error');
	} else {
		$('#submit').click();
		// $('#report').submit();
	}

});

$(document).on('change', 'select', function () {

	$(this).removeClass('is-invalid');
});

$(document).on('focus', 'input', function () {
	$(this).select();
});


$(document).on("keyup", ".form-control", function () {
	row = $(this).attr('data-id');
	calculation(row);

	$('input[type="text"]').each(function () {
		if ($(this).val() <= -1) {
			$(this).addClass('is-invalid');
		} else {
			$(this).removeClass('is-invalid');
		}

		if (isNaN(parseFloat($(this).val()))) {
			// $(this).val(0);
		}



	});

	// if (e.which === 13) {
	// 	$(this).next('.form-control').focus();
	// }


});
$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
$(document).on("keyup", ".ebit", function () {
	row = $(this).attr('data-id');
});

function calculation(row) {
	// row = 	$(this).attr('data-id');
	// ebit
	$("#ebit_" + row).val((parseInt($("#profit_before_tax_" + row).val()) + parseInt($("#interest_expense_gross_" + row).val())) - parseInt($("#tax_benefit_expense_" + row).val()));

	// Gross Profit
	$("#gross_profit_" + row).val(parseFloat($("#sales_" + row).val()) - parseFloat($("#cost_of_sales_" + row).val()));

	var x1 = parseInt($("#sales_" + row).val());
	var x2 = parseInt($("#cost_of_sales_" + row).val());
	var x3 = parseInt($("#gross_profit_" + row).val());
	var x4 = parseInt($("#other_income_" + row).val());
	var x5 = parseInt($("#depreciation_" + row).val());
	var x6 = parseInt($("#amortisation_" + row).val());
	var x7 = parseInt($("#impairment_" + row).val());
	var x8 = parseInt($("#interest_expense_gross_" + row).val());
	var x9 = parseInt($("#operating_lease_expense_" + row).val());
	var x10 = parseInt($("#finance_lease_hire_purchase_charges_" + row).val());
	var x11 = parseInt($("#non_recurring_gains_losses_" + row).val());
	var x12 = parseInt($("#other_gains_losses_" + row).val());
	var x13 = parseInt($('#other_expenses_' + row).val());
	var x14 = parseInt($('#ebit_' + row).val());
	var x15 = parseInt($('#ebitda_' + row).val());
	var x16 = parseInt($('#normalised_ebitda_' + row).val());
	var x17 = parseInt($('#profit_before_tax_' + row).val());
	var x18 = parseInt($("#profit_before_tax_after_abnormals_" + row).val());
	var x19 = parseInt($('#tax_benefit_expense_' + row).val());
	var x20 = parseInt($('#profit_after_tax_' + row).val());
	var x21 = parseInt($('#distribution_ordividends_' + row).val());
	var x22 = parseInt($('#other_post_tax_items_gains_losses_' + row).val());
	var x23 = parseInt($('#profit_after_tax_distribution_' + row).val());
	var x25 = parseInt($('#cash_' + row).val());
	var x26 = parseInt($('#trade_debtors_' + row).val());
	var x27 = parseInt($('#total_inventories_' + row).val());
	var x28 = parseInt($('#loans_to_related_parties_1_' + row).val());
	var x29 = parseInt($('#other_current_assets_' + row).val());
	var x30 = parseInt($('#total_current_assets_' + row).val());
	var x31 = parseInt($('#fixed_assets_' + row).val());
	var x32 = parseInt($('#net_intangibles_' + row).val());
	var x33 = parseInt($('#loan_to_related_parties_2_' + row).val());
	var x34 = parseInt($('#other_non_current_assets_' + row).val());
	var x35 = parseInt($('#total_non_curent_assets_' + row).val());
	var x36 = parseInt($('#total_assets_' + row).val());
	var x38 = parseInt($('#trade_creditors_' + row).val());
	var x39 = parseInt($('#interest_bearing_debt_1_' + row).val());
	var x40 = parseInt($('#lone_from_related_parties_' + row).val());
	var x41 = parseInt($('#other_current_liabilities_' + row).val());
	var x42 = parseInt($('#total_current_liabilities_' + row).val());
	var x43 = parseInt($('#total_current_liabilities_2_' + row).val());
	var x44 = parseInt($('#loans_from_related_parites_' + row).val());
	var x45 = parseInt($('#other_non_current_liabilities_' + row).val());
	var x46 = parseInt($('#total_non_current_liabilities_' + row).val());
	var x47 = parseInt($('#total_liabilities_' + row).val());
	var x49 = parseInt($('#share_capital_' + row).val());
	var x50 = parseInt($('#prefence_shares_' + row).val());
	var x51 = parseInt($('#treasury_shares_' + row).val());
	var x52 = parseInt($('#equity_owner_ships_' + row).val());
	var x53 = parseInt($('#total_reserves_' + row).val());
	var x54 = parseInt($('#ratained_earning_' + row).val());
	var x55 = parseInt($('#minorty_interest_' + row).val());
	var x56 = parseInt($('#total_equity_' + row).val());
	var x57 = parseInt($('#balance_' + row).val());

	// EBITDA
	
	$("#ebitda_" + row).val(x9 + x6 + x7 + x8 + x5 + x10 + x18);

	// Normalised EBITDA
	$("#normalised_ebitda_" + row).val(x5 + x6 + x7 + x8 + x9 + x10 + x18 + x11 + x12);

	// Profit Before Tax
	$("#profit_before_tax_" + row).val((x3 + x4) - x5 - x6 - x7 - x8 - x9 - x10 - x13);

	// Profit Before Tax (after abnormal)
	$("#profit_before_tax_after_abnormals_" + row).val((x3 + x4) - x5 - x6 - x7 - x8 - x9 - x10 - x13 + (x11 + x12));

	// Profit After Tax
	$("#profit_after_tax_" + row).val(x18 + x19);

	// Profit After Tax & Distribution
	$('#profit_after_tax_distribution_' + row).val((x20 - x21) + x22);

	// Total Current Assets
	$('#total_current_assets_' + row).val(x25 + x26 + x27 + x28 + x29);

	// Total Non-Current Assets
	$('#total_non_curent_assets_' + row).val(x31 + x32 + x33 + x34);

	// Total Assets
	$('#total_assets_' + row).val(x30 + x35);

	// Total Current Liabilities
	$('#total_current_liabilities_' + row).val(x38 + x39 + x40 + x41);

	// Total Non-Current Liabilities
	$('#total_non_current_liabilities_' + row).val(x43 + x44 + x45);

	// Total Liabilities
	$('#total_liabilities_' + row).val(x42 + x46);

	// Equity Ownerships
	$("#equity_owner_ships_" + row).val(x49 + x50 + x51);

	// Total Equity
	$('#total_equity_' + row).val(x52 + x53 + x54 + x55);

	// Balance
	$('#balance_' + row).val(x36 - (x47 + x56));

}





$(document).on("click", ".ibtnDel", function () {

	var data_id = $(this).attr('data-id');

	if (data_id == 0) {
		localStorage.setItem('col_0', '1');

	}
	if (data_id == 1) {
		localStorage.setItem('col_1', '1');
	}
	if (data_id == 2) {
		localStorage.setItem('col_2', '1');
	}
	// var old_count = $("#no_of_col").val();
	// $("#no_of_col").val(old_count-1);
	$(this).closest("div").remove();
});

var coloumnCount = -1;
function clone() {
	coloumnCount++;
	// var data_abn = localStorage.getItem("abn");
	var data_company_name = localStorage.getItem("company_name");
	var data_cun = localStorage.getItem("cun");

	var data0 = localStorage.getItem("col_0");
	var data1 = localStorage.getItem('col_1');
	var data2 = localStorage.getItem('col_2');
	var temp = 0;

	if (data0 == 1 || data1 == 1 || data2 == 1) {
		if (data0 == 1 && temp == 0) {
			var count = 0;
			temp = 1;
			localStorage.setItem('col_0', '0');
		}
		if (data1 == 1 && temp == 0) {
			var count = 1;
			temp = 1;
			localStorage.setItem('col_1', '0');
		}
		if (data2 == 1 && temp == 0) {
			var count = 2;
			temp = 1;
			localStorage.setItem('col_2', '0');
		}
	}



	



	// if(typeof(localStorage.getItem("acn")) != "undefined" && localStorage.getItem("acacnn") !== null) { var data_acn = localStorage.getItem("acn"); }acn { var data_acn = ''; }
	if (typeof (localStorage.getItem('abn')) != 'undefined' && localStorage.getItem('abn') !== null) {
		var abn = localStorage.getItem('abn');
	} else {
		var abn = '';
	}
	if (typeof (localStorage.getItem('acn')) != 'undefined' && localStorage.getItem('acn') !== null) {
		var acn = localStorage.getItem('acn');
	} else {
		var acn = '';
	}
	if (typeof (localStorage.getItem('company_name')) != 'undefined' && localStorage.getItem('company_name') !== null) {
		var company_name = localStorage.getItem('company_name');
	} else {
		var company_name = '';
	}
	if (typeof (localStorage.getItem('rounding')) != 'undefined' && localStorage.getItem('rounding') !== null) {
		var rounding = localStorage.getItem('rounding');
	} else {
		var rounding = null;
	}
	if (typeof (localStorage.getItem('base_currency')) != 'undefined' && localStorage.getItem('base_currency') !== null) {
		var base_currency = localStorage.getItem('base_currency');
	} else {
		var base_currency = null;
	}
	if (typeof (localStorage.getItem('quality')) != 'undefined' && localStorage.getItem('quality') !== null) {
		var quality = localStorage.getItem('quality');
	} else {
		var quality = null;
	}
	if (typeof (localStorage.getItem('reporting_period_months')) != 'undefined' && localStorage.getItem('reporting_period_months') !== null) {
		var reporting_period_months = localStorage.getItem('reporting_period_months');
	} else {
		var reporting_period_months = '1';
	}
	if (typeof (localStorage.getItem('scope')) != 'undefined' && localStorage.getItem('scope') !== null) {
		var scope = localStorage.getItem('scope');
	} else {
		var scope = '0';
	}
	if (typeof (localStorage.getItem('confidentiality_record')) != 'undefined' && localStorage.getItem('confidentiality_record') !== null) {
		var confidentiality_record = localStorage.getItem('confidentiality_record');
	} else {
		var confidentiality_record = '0';
	}
	if (typeof (localStorage.getItem('financial_year')) != 'undefined' && localStorage.getItem('financial_year') !== null) {
		var financial_year = localStorage.getItem('financial_year');
	} else {
		var financial_year = '0';
	}
	if (typeof (localStorage.getItem('month')) != 'undefined' && localStorage.getItem('month') !== null) {
		var month = localStorage.getItem('month');
	} else {
		var month = '0';
	}
	if (typeof (localStorage.getItem('sales')) != 'undefined' && localStorage.getItem('sales') !== null) {
		var sales = localStorage.getItem('sales');
	} else {
		var sales = '';
	}
	if (typeof (localStorage.getItem('cost_of_sales')) != 'undefined' && localStorage.getItem('cost_of_sales') !== null) {
		var cost_of_sales = localStorage.getItem('cost_of_sales');
	} else {
		var cost_of_sales = '';
	}
	if (typeof (localStorage.getItem('gross_profit')) != 'undefined' && localStorage.getItem('gross_profit') !== null) {
		var gross_profit = localStorage.getItem('gross_profit');
	} else {
		var gross_profit = '';
	}
	if (typeof (localStorage.getItem('other_income')) != 'undefined' && localStorage.getItem('other_income') !== null) {
		var other_income = localStorage.getItem('other_income');
	} else {
		var other_income = 0;
	}
	if (typeof (localStorage.getItem('depreciation')) != 'undefined' && localStorage.getItem('depreciation') !== null) {
		var depreciation = localStorage.getItem('depreciation');
	} else {
		var depreciation = 0;
	}
	if (typeof (localStorage.getItem('amortisation')) != 'undefined' && localStorage.getItem('amortisation') !== null) {
		var amortisation = localStorage.getItem('amortisation');
	} else {
		var amortisation = 0;
	}
	if (typeof (localStorage.getItem('impairment')) != 'undefined' && localStorage.getItem('impairment') !== null) {
		var impairment = localStorage.getItem('impairment');
	} else {
		var impairment = 0;
	}
	if (typeof (localStorage.getItem('interest_expense_gross')) != 'undefined' && localStorage.getItem('interest_expense_gross') !== null) {
		var interest_expense_gross = localStorage.getItem('interest_expense_gross');
	} else {
		var interest_expense_gross = 0;
	}
	if (typeof (localStorage.getItem('operating_lease_expense')) != 'undefined' && localStorage.getItem('operating_lease_expense') !== null) {
		var operating_lease_expense = localStorage.getItem('operating_lease_expense');
	} else {
		var operating_lease_expense = 0;
	}
	if (typeof (localStorage.getItem('finance_lease_hire_purchase_charges')) != 'undefined' && localStorage.getItem('finance_lease_hire_purchase_charges') !== null) {
		var finance_lease_hire_purchase_charges = localStorage.getItem('finance_lease_hire_purchase_charges');
	} else {
		var finance_lease_hire_purchase_charges = 0;
	}
	if (typeof (localStorage.getItem('non_recurring_gains_losses')) != 'undefined' && localStorage.getItem('non_recurring_gains_losses') !== null) {
		var non_recurring_gains_losses = localStorage.getItem('non_recurring_gains_losses');
	} else {
		var non_recurring_gains_losses = 0;
	}
	if (typeof (localStorage.getItem('other_gains_losses')) != 'undefined' && localStorage.getItem('other_gains_losses') !== null) {
		var other_gains_losses = localStorage.getItem('other_gains_losses');
	} else {
		var other_gains_losses = 0;
	}
	if (typeof (localStorage.getItem('other_expenses')) != 'undefined' && localStorage.getItem('other_expenses') !== null) {
		var other_expenses = localStorage.getItem('other_expenses');
	} else {
		var other_expenses = 0;
	}
	if (typeof (localStorage.getItem('ebit')) != 'undefined' && localStorage.getItem('ebit') !== null) {
		var ebit = localStorage.getItem('ebit');
	} else {
		var ebit = '';
	}
	if (typeof (localStorage.getItem('ebitda')) != 'undefined' && localStorage.getItem('ebitda') !== null) {
		var ebitda = localStorage.getItem('ebitda');
	} else {
		var ebitda = '';
	}
	if (typeof (localStorage.getItem('normalised_ebitda')) != 'undefined' && localStorage.getItem('normalised_ebitda') !== null) {
		var normalised_ebitda = localStorage.getItem('normalised_ebitda');
	} else {
		var normalised_ebitda = '';
	}
	if (typeof (localStorage.getItem('profit_before_tax')) != 'undefined' && localStorage.getItem('profit_before_tax') !== null) {
		var profit_before_tax = localStorage.getItem('profit_before_tax');
	} else {
		var profit_before_tax = '';
	}
	if (typeof (localStorage.getItem('profit_before_tax_after_abnormals')) != 'undefined' && localStorage.getItem('profit_before_tax_after_abnormals') !== null) {
		var profit_before_tax_after_abnormals = localStorage.getItem('profit_before_tax_after_abnormals');
	} else {
		var profit_before_tax_after_abnormals = '';
	}
	if (typeof (localStorage.getItem('tax_benefit_expense')) != 'undefined' && localStorage.getItem('tax_benefit_expense') !== null) {
		var tax_benefit_expense = localStorage.getItem('tax_benefit_expense');
	} else {
		var tax_benefit_expense = '';
	}
	if (typeof (localStorage.getItem('profit_after_tax')) != 'undefined' && localStorage.getItem('profit_after_tax') !== null) {
		var profit_after_tax = localStorage.getItem('profit_after_tax');
	} else {
		var profit_after_tax = '';
	}
	if (typeof (localStorage.getItem('distribution_ordividends')) != 'undefined' && localStorage.getItem('distribution_ordividends') !== null) {
		var distribution_ordividends = localStorage.getItem('distribution_ordividends');
	} else {
		var distribution_ordividends = 0;
	}
	if (typeof (localStorage.getItem('other_post_tax_items_gains_losses')) != 'undefined' && localStorage.getItem('other_post_tax_items_gains_losses') !== null) {
		var other_post_tax_items_gains_losses = localStorage.getItem('other_post_tax_items_gains_losses');
	} else {
		var other_post_tax_items_gains_losses = '';
	}
	if (typeof (localStorage.getItem('profit_after_tax_distribution')) != 'undefined' && localStorage.getItem('profit_after_tax_distribution') !== null) {
		var profit_after_tax_distribution = localStorage.getItem('profit_after_tax_distribution');
	} else {
		var profit_after_tax_distribution = '';
	}
	if (typeof (localStorage.getItem('cash')) != 'undefined' && localStorage.getItem('cash') !== null) {
		var cash = localStorage.getItem('cash');
	} else {
		var cash = '';
	}
	if (typeof (localStorage.getItem('trade_debtors')) != 'undefined' && localStorage.getItem('trade_debtors') !== null) {
		var trade_debtors = localStorage.getItem('trade_debtors');
	} else {
		var trade_debtors = '';
	}
	if (typeof (localStorage.getItem('total_inventories')) != 'undefined' && localStorage.getItem('total_inventories') !== null) {
		var total_inventories = localStorage.getItem('total_inventories');
	} else {
		var total_inventories = '';
	}
	if (typeof (localStorage.getItem('loans_to_related_parties_1')) != 'undefined' && localStorage.getItem('loans_to_related_parties_1') !== null) {
		var loans_to_related_parties_1 = localStorage.getItem('loans_to_related_parties_1');
	} else {
		var loans_to_related_parties_1 = '';
	}
	if (typeof (localStorage.getItem('other_current_assets')) != 'undefined' && localStorage.getItem('other_current_assets') !== null) {
		var other_current_assets = localStorage.getItem('other_current_assets');
	} else {
		var other_current_assets = '';
	}
	if (typeof (localStorage.getItem('total_current_assets')) != 'undefined' && localStorage.getItem('total_current_assets') !== null) {
		var total_current_assets = localStorage.getItem('total_current_assets');
	} else {
		var total_current_assets = '';
	}
	if (typeof (localStorage.getItem('fixed_assets')) != 'undefined' && localStorage.getItem('fixed_assets') !== null) {
		var fixed_assets = localStorage.getItem('fixed_assets');
	} else {
		var fixed_assets = '';
	}
	if (typeof (localStorage.getItem('net_intangibles')) != 'undefined' && localStorage.getItem('net_intangibles') !== null) {
		var net_intangibles = localStorage.getItem('net_intangibles');
	} else {
		var net_intangibles = '';
	}
	if (typeof (localStorage.getItem('loan_to_related_parties_2')) != 'undefined' && localStorage.getItem('loan_to_related_parties_2') !== null) {
		var loan_to_related_parties_2 = localStorage.getItem('loan_to_related_parties_2');
	} else {
		var loan_to_related_parties_2 = '';
	}
	if (typeof (localStorage.getItem('other_non_current_assets')) != 'undefined' && localStorage.getItem('other_non_current_assets') !== null) {
		var other_non_current_assets = localStorage.getItem('other_non_current_assets');
	} else {
		var other_non_current_assets = '';
	}
	if (typeof (localStorage.getItem('total_non_curent_assets')) != 'undefined' && localStorage.getItem('total_non_curent_assets') !== null) {
		var total_non_curent_assets = localStorage.getItem('total_non_curent_assets');
	} else {
		var total_non_curent_assets = '';
	}
	if (typeof (localStorage.getItem('total_assets')) != 'undefined' && localStorage.getItem('total_assets') !== null) {
		var total_assets = localStorage.getItem('total_assets');
	} else {
		var total_assets = '';
	}
	if (typeof (localStorage.getItem('trade_creditors')) != 'undefined' && localStorage.getItem('trade_creditors') !== null) {
		var trade_creditors = localStorage.getItem('trade_creditors');
	} else {
		var trade_creditors = '';
	}
	if (typeof (localStorage.getItem('interest_bearing_debt_1')) != 'undefined' && localStorage.getItem('interest_bearing_debt_1') !== null) {
		var interest_bearing_debt_1 = localStorage.getItem('interest_bearing_debt_1');
	} else {
		var interest_bearing_debt_1 = '';
	}
	if (typeof (localStorage.getItem('lone_from_related_parties')) != 'undefined' && localStorage.getItem('lone_from_related_parties') !== null) {
		var lone_from_related_parties = localStorage.getItem('lone_from_related_parties');
	} else {
		var lone_from_related_parties = '';
	}
	if (typeof (localStorage.getItem('other_current_liabilities')) != 'undefined' && localStorage.getItem('other_current_liabilities') !== null) {
		var other_current_liabilities = localStorage.getItem('other_current_liabilities');
	} else {
		var other_current_liabilities = '';
	}
	if (typeof (localStorage.getItem('total_current_liabilities')) != 'undefined' && localStorage.getItem('total_current_liabilities') !== null) {
		var total_current_liabilities = localStorage.getItem('total_current_liabilities');
	} else {
		var total_current_liabilities = '';
	}
	if (typeof (localStorage.getItem('total_current_liabilities_2')) != 'undefined' && localStorage.getItem('total_current_liabilities_2') !== null) {
		var total_current_liabilities_2 = localStorage.getItem('total_current_liabilities_2');
	} else {
		var total_current_liabilities_2 = '';
	}
	if (typeof (localStorage.getItem('loans_from_related_parites')) != 'undefined' && localStorage.getItem('loans_from_related_parites') !== null) {
		var loans_from_related_parites = localStorage.getItem('loans_from_related_parites');
	} else {
		var loans_from_related_parites = '';
	}
	if (typeof (localStorage.getItem('other_non_current_liabilities')) != 'undefined' && localStorage.getItem('other_non_current_liabilities') !== null) {
		var other_non_current_liabilities = localStorage.getItem('other_non_current_liabilities');
	} else {
		var other_non_current_liabilities = '';
	}
	if (typeof (localStorage.getItem('total_non_current_liabilities')) != 'undefined' && localStorage.getItem('total_non_current_liabilities') !== null) {
		var total_non_current_liabilities = localStorage.getItem('total_non_current_liabilities');
	} else {
		var total_non_current_liabilities = '';
	}
	if (typeof (localStorage.getItem('total_liabilities')) != 'undefined' && localStorage.getItem('total_liabilities') !== null) {
		var total_liabilities = localStorage.getItem('total_liabilities');
	} else {
		var total_liabilities = '';
	}
	if (typeof (localStorage.getItem('share_capital')) != 'undefined' && localStorage.getItem('share_capital') !== null) {
		var share_capital = localStorage.getItem('share_capital');
	} else {
		var share_capital = '';
	}
	if (typeof (localStorage.getItem('prefence_shares')) != 'undefined' && localStorage.getItem('prefence_shares') !== null) {
		var prefence_shares = localStorage.getItem('prefence_shares');
	} else {
		var prefence_shares = '';
	}
	if (typeof (localStorage.getItem('treasury_shares')) != 'undefined' && localStorage.getItem('treasury_shares') !== null) {
		var treasury_shares = localStorage.getItem('treasury_shares');
	} else {
		var treasury_shares = '';
	}
	if (typeof (localStorage.getItem('equity_owner_ships')) != 'undefined' && localStorage.getItem('equity_owner_ships') !== null) {
		var equity_owner_ships = localStorage.getItem('equity_owner_ships');
	} else {
		var equity_owner_ships = '';
	}
	if (typeof (localStorage.getItem('total_reserves')) != 'undefined' && localStorage.getItem('total_reserves') !== null) {
		var total_reserves = localStorage.getItem('total_reserves');
	} else {
		var total_reserves = '';
	}
	if (typeof (localStorage.getItem('ratained_earning')) != 'undefined' && localStorage.getItem('ratained_earning') !== null) {
		var ratained_earning = localStorage.getItem('ratained_earning');
	} else {
		var ratained_earning = '';
	}
	if (typeof (localStorage.getItem('minorty_interest')) != 'undefined' && localStorage.getItem('minorty_interest') !== null) {
		var minorty_interest = localStorage.getItem('minorty_interest');
	} else {
		var minorty_interest = '';
	}
	if (typeof (localStorage.getItem('total_equity')) != 'undefined' && localStorage.getItem('total_equity') !== null) {
		var total_equity = localStorage.getItem('total_equity');
	} else {
		var total_equity = '';
	}
	if (typeof (localStorage.getItem('balance')) != 'undefined' && localStorage.getItem('balance') !== null) {
		var balance = localStorage.getItem('balance');
	} else {
		var balance = '';
	}
	if (typeof (localStorage.getItem('operating_cash_flow')) != 'undefined' && localStorage.getItem('operating_cash_flow') !== null) {
		var operating_cash_flow = localStorage.getItem('operating_cash_flow');
	} else {
		var operating_cash_flow = '';
	}
	if (typeof (localStorage.getItem('contingent_liabilities')) != 'undefined' && localStorage.getItem('contingent_liabilities') !== null) {
		var contingent_liabilities = localStorage.getItem('contingent_liabilities');
	} else {
		var contingent_liabilities = '';
	}
	if (typeof (localStorage.getItem('other_commitmentes')) != 'undefined' && localStorage.getItem('other_commitmentes') !== null) {
		var other_commitmentes = localStorage.getItem('other_commitmentes');
	} else {
		var other_commitmentes = '';
	}
	if (typeof (localStorage.getItem('operating_lease_outstanding')) != 'undefined' && localStorage.getItem('operating_lease_outstanding') !== null) {
		var operating_lease_outstanding = localStorage.getItem('operating_lease_outstanding');
	} else {
		var operating_lease_outstanding = '';
	}

	var com = localStorage.getItem('html_company');


	if (typeof (count) != "undefined" && count !== null) {

		var html = '';
		html += '<div class="col-md"> <button class="ibtnDel btn btn-secondary col" data-id="' + count + '"><i class="fas fa-trash-alt" aria-hidden="true"></i> Delete</button>';
		html += '			<input  data-id="' + count + '" id="row_no_' + count + '" name="row_no[]" type="text" style="display:none;" value="' + todecimal('0.00') + '" placeholder="row_no">';
		html += '<div class="quantitative-form">';
		html += '		<div class="form-group">';
		html += '			<input data-id="' + count + '" readonly value="' + abn + '" id="abn_' + count + '" name="abn[]" type="text" class="form-control"  placeholder="ABN">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input data-id="' + count + '" readonly value="' + acn + '" id="acn_' + count + '" name="acn[]" type="text" class="form-control"  placeholder="ACN">';
		html += '		</div>';
		html += '		<div class="form-group">';
		// html += '			<input data-id="'+ count +'" value="'+ company_name +'" id="name_'+ count +'" name="name[]" type="text" class="form-control" placeholder="Name">';[]
		html += '			<select data-id="' + count + '" readonly id="name_' + count + '" name="name[]" type="text" class="form-control company" placeholder="Name">';
		html += com;
		html += '			</select>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<select data-id="' + count + '" id="rounding_' + count + '" name="rounding[]" class="browser-default custom-select" required="required">';
		html += '				<option value="null">Rounding</option>';
		html += '				<option value="no">None</option>';
		html += '				<option value="thousands">Thousands</option>';
		html += '				<option value="millions">Millions</option>';
		html += '			</select>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<select data-id="' + count + '" id="base_currency_' + count + '" name="base_currency[]" class="browser-default custom-select" required="required">';
		html += '				<option value="null">Base Currency</option>';
		html += '				<option value="aud">AUD</option>';
		html += '				<option value="nzd">NZD</option>';
		html += '				<option value="usd">USD</option>';
		html += '				<option value="cad">CAD</option>';
		html += '				<option value="euro">EURO</option>';
		html += '				<option value="lkr">LKR</option>';
		html += '				<option value="gbp">GBP</option>';
		html += '				<option value="cny">CNY</option>';
		html += '			</select>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<select data-id="' + count + '" id="quality_' + count + '" name="quality[]" class="browser-default custom-select"  required="required">';
		html += '				<option value="null">Quality</option>';
		html += '				<option value="management">Management</option>';
		html += '				<option value="audited">Audited</option>';
		html += '				<option value="statutory">Statutory</option>';
		html += '				<option value="forcast">Forcast</option>';
		html += '				<option value="anualised">Anualised</option>';
		html += '			</select>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<select name="reporting_period_months[]" type="text" class="browser-default custom-select" data-id="' + count + '" id="reporting_period_months_' + count + '"  required="required">';
		html += '				<option value="1">1</option>';
		html += '				<option value="2">2</option>';
		html += '				<option value="3">3</option>';
		html += '				<option value="4">4</option>';
		html += '				<option value="5">5</option>';
		html += '				<option value="6">6</option>';
		html += '				<option value="7">7</option>';
		html += '				<option value="8">8</option>';
		html += '				<option value="9">9</option>';
		html += '				<option value="10">10</option>';
		html += '				<option value="10">10</option>';
		html += '				<option value="11">11</option>';
		html += '				<option value="12">12</option>';
		html += '				<option value="13">13</option>';
		html += '				<option value="14">14</option>';
		html += '				<option value="15">15</option>';
		html += '				<option value="16">16</option>';
		html += '				<option value="17">17</option>';
		html += '				<option value="18">18</option>';
		html += '				<option value="19">19</option>';
		html += '				<option value="20">20</option>';
		html += '				<option value="21">21</option>';
		html += '				<option value="22">22</option>';
		html += '				<option value="23">23</option>';
		html += '				<option value="24">24</option>';
		html += '			</select>';
		html += '			<!--add 1 to 24 numebers as loop-->';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<select name="scope[]" data-id="' + count + '" id="scope_' + count + '" class="browser-default custom-select"  required="required">';
		html += '				<option value="0">Scope</option>';
		html += '				<option value="asic">ASIC</option>';
		html += '				<option value="Consolidated">consolidated</option>';
		html += '				<option value="Parents">parents</option>';
		html += '				<option value="Aggregated">aggregated</option>';
		html += '			</select>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<select name="confidentiality_record[]" data-id="' + count + '" id="confidentiality_record_' + count + '" class="browser-default custom-select"  required="required">';
		html += '				<option value="0">Confidentiality Record</option>';
		html += '				<option value="Public">Public</option>';
		html += '				<option value="Asic">ASIC</option>';
		html += '				<option value="Published">Published</option>';
		html += '				<option value="Confidential">Confidential</option>';
		html += '			</select>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<select type="text" class="browser-default custom-select" name="financial_year[]" data-id="' + count + '" id="financial_year_' + count + '"  required="required">';
		html += '				<option value="0">Financial Year</option>';
		html += '				<option value="2000">FY2000</option>';
		html += '				<option value="2001">FY2001</option>';
		html += '				<option value="2003">FY2003</option>';
		html += '				<option value="2004">FY2004</option>';
		html += '				<option value="2005">FY2005</option>';
		html += '				<option value="2006">FY2006</option>';
		html += '				<option value="2007">FY2007</option>';
		html += '				<option value="2008">FY2008</option>';
		html += '				<option value="2009">FY2009</option>';
		html += '				<option value="2010">FY2010</option>';
		html += '				<option value="2011">FY2011</option>';
		html += '				<option value="2012">FY2012</option>';
		html += '				<option value="2013">FY2013</option>';
		html += '				<option value="2014">FY2014</option>';
		html += '				<option value="2015">FY2015</option>';
		html += '				<option value="2016">FY2016</option>';
		html += '				<option value="2017">FY2017</option>';
		html += '				<option value="2018">FY2018</option>';
		html += '				<option value="2019">FY2019</option>';
		html += '				<option value="2020">FY2020</option>';
		html += '				<option value="2021">FY2021</option>';
		html += '				<option value="2022">FY2022</option>';
		html += '				<option value="2023">FY2023</option>';
		html += '				<option value="2024">FY2024</option>';
		html += '				<option value="2025">FY2025</option>';
		html += '				<option value="2026">FY2026</option>';
		html += '				<option value="2027">FY2027</option>';
		html += '				<option value="2028">FY2028</option>';
		html += '				<option value="2029">FY2029</option>';
		html += '				<option value="2030">FY2030</option>';
		html += '				<option value="2031">FY2031</option>';
		html += '				<option value="2032">FY2032</option>';
		html += '				<option value="2033">FY2033</option>';
		html += '				<option value="2034">FY2034</option>';
		html += '				<option value="2035">FY2035</option>';
		html += '				<option value="2036">FY2036</option>';
		html += '				<option value="2037">FY2037</option>';
		html += '				<option value="2038">FY2038</option>';
		html += '				<option value="2039">FY2039</option>';
		html += '				<option value="2040">FY2040</option>';
		html += '				<option value="2041">FY2041</option>';
		html += '				<option value="2042">FY2042</option>';
		html += '				<option value="2043">FY2043</option>';
		html += '				<option value="2044">FY2044</option>';
		html += '				<option value="2045">FY2045</option>';
		html += '				<option value="2046">FY2046</option>';
		html += '				<option value="2047">FY2047</option>';
		html += '				<option value="2048">FY2048</option>';
		html += '				<option value="2049">FY2049</option>';
		html += '				<option value="2050">FY2050</option>';
		html += '			</select>';
		html += '			<!--add FY2000 to FY2050 as loop-->';
		html += '		</div>';
		html += '		<div class="form-group">';
		// html += '			<input type="month" class="form-control" name="month[]" data-id="'+ count +'" id="month_'+ count +'" placeholder="Month"  required="required">';
		html += '<select class="form-control" name="month[]" data-id="' + count + '" id="month_' + count + '" placeholder="Month"  required="required">';
		html += "		<option value='0'>--Select Month--</option>";
		html += "		<option value='1'>Janaury</option>";
		html += "		<option value='2'>February</option>";
		html += "		<option value='3'>March</option>";
		html += "		<option value='4'>April</option>";
		html += "		<option value='5'>May</option>";
		html += "		<option value='6'>June</option>";
		html += "		<option value='7'>July</option>";
		html += "		<option value='8'>August</option>";
		html += "		<option value='9'>September</option>";
		html += "		<option value='10'>October</option>";
		html += "		<option value='11'>November</option>";
		html += "		<option value='12'>December</option>";
		html += "		</select> ";
		html += '		</div>';
		html += '		<h6>Income Statement</h6>';
		html += '		<div class="form-group">';
		html += '			<input value="' + sales + '" type="text" class="form-control gross_profit" name="sales[]" data-id="' + count + '" id="sales_' + count + '" value="0" placeholder="Sales">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + cost_of_sales + '" type="text" class="form-control gross_profit" name="cost_of_sales[]" data-id="' + count + '" id="cost_of_sales_' + count + '" value="0" placeholder="Cost Of Sales">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + gross_profit + '" type="text" class="form-control" name="gross_profit[]" data-id="' + count + '" id="gross_profit_' + count + '" value="0" placeholder="Gross Profit" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_income + '" type="text" class="form-control" name="other_income[]" data-id="' + count + '" id="other_income_' + count + '" value="0" placeholder="Other Income">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + depreciation + '" type="text" class="form-control" name="depreciation[]" data-id="' + count + '" id="depreciation_' + count + '" value="0" placeholder="Depreciation">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + amortisation + '" type="text" class="form-control" name="amortisation[]" data-id="' + count + '" id="amortisation_' + count + '" value="0" placeholder="Amortisation">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + impairment + '" type="text" class="form-control" name="impairment[]" data-id="' + count + '" id="impairment_' + count + '" value="0" placeholder="Impairement">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + interest_expense_gross + '" type="text" class="form-control ebit" name="interest_expense_gross[]" data-id="' + count + '" id="interest_expense_gross_' + count + '" value="0" placeholder="Interst Expense">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + operating_lease_expense + '" type="text" class="form-control" name="operating_lease_expense[]" data-id="' + count + '" id="operating_lease_expense_' + count + '"';
		html += '		 value="0"	placeholder="Operating Lease Expense">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + finance_lease_hire_purchase_charges + '" type="text" class="form-control" name="finance_lease_hire_purchase_charges[]" data-id="' + count + '" id="finance_lease_hire_purchase_charges_' + count + '"';
		html += '		 value="0"	placeholder="Finance Lease And Hire Purchase Charges">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + non_recurring_gains_losses + '" type="text" class="form-control" other_expenses name="non_recurring_gains_losses[]" data-id="' + count + '" id="non_recurring_gains_losses_' + count + '" value="0" placeholder="Non-Recurring Ganes">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_gains_losses + '" type="text" class="form-control" name="other_gains_losses[]" data-id="' + count + '" id="other_gains_losses_' + count + '" value="0" placeholder="Other Ganes">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_expenses + '" type="text" class="form-control" name="other_expenses[]" data-id="' + count + '" id="other_expenses_' + count + '" value="0" placeholder="Other Expenses">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + ebit + '" type="text" class="form-control" name="ebit[]" data-id="' + count + '" id="ebit_' + count + '" value="0" placeholder="EBIT" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + ebitda + '" type="text" class="form-control" name="ebitda[]" data-id="' + count + '" id="ebitda_' + count + '" value="0" placeholder="EBITDA" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + normalised_ebitda + '" type="text" class="form-control"  name="normalised_ebitda[]" data-id="' + count + '" id="normalised_ebitda_' + count + '" value="0" placeholder="Normalise EBITDA" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + profit_before_tax + '" type="text" class="form-control ebit" name="profit_before_tax[]" data-id="' + count + '" id="profit_before_tax_' + count + '" value="0" placeholder="Profit Before Tax" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + profit_before_tax_after_abnormals + '" type="text" class="form-control" name="profit_before_tax_after_abnormals[]" data-id="' + count + '" id="profit_before_tax_after_abnormals_' + count + '"';
		html += '		 value="0"	placeholder="Profit Before Tax After Abnormal" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + tax_benefit_expense + '" type="text" class="form-control ebit" name="tax_benefit_expense[]" data-id="' + count + '" id="tax_benefit_expense_' + count + '" value="0" placeholder="Tax Benifits">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + profit_after_tax + '" type="text" class="form-control" name="profit_after_tax[]" data-id="' + count + '" id="profit_after_tax_' + count + '" value="0" placeholder="Profit After Tax" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + distribution_ordividends + '" type="text" class="form-control" name="distribution_ordividends[]" data-id="' + count + '" id="distribution_ordividends_' + count + '"';
		html += '		 value="0"	placeholder="Distribution Or Divided">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_post_tax_items_gains_losses + '" type="text" class="form-control" name="other_post_tax_items_gains_losses[]" data-id="' + count + '" id="other_post_tax_items_gains_losses_' + count + '" value="0" placeholder="Other Post Tax Items">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + profit_after_tax_distribution + '" type="text" class="form-control" name="profit_after_tax_distribution[]" data-id="' + count + '" id="profit_after_tax_distribution_' + count + '"';
		html += '		 value="0"	placeholder="Profit After Tax And Distribution" readonly>';
		html += '		</div>';
		html += '		<h6>Balance Sheet</h6>';
		html += '		<h6>Assets</h6>';
		html += '		<div class="form-group">';
		html += '			<input value="' + cash + '" type="text" class="form-control" name="cash[]" data-id="' + count + '" id="cash_' + count + '" value="0" placeholder="Cash">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + trade_debtors + '" type="text" class="form-control" name="trade_debtors[]" data-id="' + count + '" id="trade_debtors_' + count + '" value="0" placeholder="Trade Deptors">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_inventories + '" type="text" class="form-control" name="total_inventories[]" data-id="' + count + '" id="total_inventories_' + count + '" value="0" placeholder="Total Inventories">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + loans_to_related_parties_1 + '" type="text" class="form-control" name="loans_to_related_parties_1[]" data-id="' + count + '" id="loans_to_related_parties_1_' + count + '"';
		html += '		 value="0"	placeholder="Loans To Related Parties">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_current_assets + '" type="text" class="form-control" name="other_current_assets[]" data-id="' + count + '" id="other_current_assets_' + count + '" value="0" placeholder="Other Current Assets">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_current_assets + '" type="text" class="form-control" name="total_current_assets[]" data-id="' + count + '" id="total_current_assets_' + count + '" value="0" placeholder="Total Current Assets"';
		html += '			readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + fixed_assets + '" type="text" class="form-control" name="fixed_assets[]" data-id="' + count + '" id="fixed_assets_' + count + '" value="0" placeholder="Fixed Assets">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + net_intangibles + '" type="text" class="form-control" name="net_intangibles[]" data-id="' + count + '" id="net_intangibles_' + count + '" value="0" placeholder="Net Intangibles">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + loan_to_related_parties_2 + '" type="text" class="form-control" name="loan_to_related_parties_2[]" data-id="' + count + '" id="loan_to_related_parties_2_' + count + '"';
		html += '		 value="0"	placeholder="Loans To Related Parties">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_non_current_assets + '" type="text" class="form-control" name="other_non_current_assets[]" data-id="' + count + '" id="other_non_current_assets_' + count + '"';
		html += '		 value="0"	placeholder="Other Non-Current Assets">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_non_curent_assets + '" type="text" class="form-control"  data-id="' + count + '" name="total_non_curent_assets[]" id="total_non_curent_assets_' + count + '"';
		html += '		 value="0"	placeholder="Total Non-Current Assets" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_assets + '" type="text" class="form-control" name="total_assets[]" data-id="' + count + '" id="total_assets_' + count + '" value="0" placeholder="Total Assets" readonly>';
		html += '		</div>';
		html += '		<h6>Liabilities</h6>'; /******************************/
		html += '		<div class="form-group">';
		html += '			<input value="' + trade_creditors + '" type="text" class="form-control" name="trade_creditors[]" data-id="' + count + '" id="trade_creditors_' + count + '" value="0" placeholder="Trade Creaditors">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + interest_bearing_debt_1 + '" type="text" class="form-control" name="interest_bearing_debt_1[]" data-id="' + count + '" id="interest_bearing_debt_1_' + count + '" value="0" placeholder="Intereset Bearing Debt">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + lone_from_related_parties + '" type="text" class="form-control" name="lone_from_related_parties[]" data-id="' + count + '" id="lone_from_related_parties_' + count + '"';
		html += '		 value="0"	placeholder="Loan From Related Parties">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_current_liabilities + '" type="text" class="form-control" name="other_current_liabilities[]" data-id="' + count + '" id="other_current_liabilities_' + count + '"';
		html += '		 value="0"	placeholder="Other Current Liabilities">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_current_liabilities + '" type="text" class="form-control" name="total_current_liabilities[]" data-id="' + count + '" id="total_current_liabilities_' + count + '"';
		html += '		 value="0"	placeholder="Total Current Liabilities" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_current_liabilities_2 + '" type="text" class="form-control" name="total_current_liabilities_2[]" data-id="' + count + '" id="total_current_liabilities_2_' + count + '" value="0" placeholder="Interest Bearing Debt">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + loans_from_related_parites + '" type="text" class="form-control" name="loans_from_related_parites[]" data-id="' + count + '" id="loans_from_related_parites_' + count + '"';
		html += '		 value="0"	placeholder="loans From Related Parties">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_non_current_liabilities + '" type="text" class="form-control" name="other_non_current_liabilities[]" data-id="' + count + '" id="other_non_current_liabilities_' + count + '"';
		html += '		 value="0"	placeholder="Other Non-Current Liabilities">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_non_current_liabilities + '" type="text" class="form-control" name="total_non_current_liabilities[]" data-id="' + count + '" id="total_non_current_liabilities_' + count + '"';
		html += '		 value="0"	placeholder="Total Non-Current Liablities" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_liabilities + '" type="text" class="form-control" name="total_liabilities[]" data-id="' + count + '" id="total_liabilities_' + count + '" value="0" placeholder="Total Liabilities" readonly>';
		html += '		</div>';
		html += '		<h6>Equity</h6>';
		html += '		<div class="form-group">';
		html += '			<input value="' + share_capital + '" type="text" class="form-control" name="share_capital[]" data-id="' + count + '" id="share_capital_' + count + '" value="0" placeholder="Share Capital">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + prefence_shares + '" type="text" class="form-control" name="prefence_shares[]" data-id="' + count + '" id="prefence_shares_' + count + '" value="0" placeholder="Prefence Shares">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + treasury_shares + '" type="text" class="form-control" name="treasury_shares[]" data-id="' + count + '" id="treasury_shares_' + count + '" value="0" placeholder="Treasury Shares">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + equity_owner_ships + '" type="text" class="form-control" name="equity_owner_ships[]" data-id="' + count + '" id="equity_owner_ships_' + count + '" value="0" placeholder="Equity Ownerships" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_reserves + '" type="text" class="form-control" name="total_reserves[]" data-id="' + count + '" id="total_reserves_' + count + '" value="0" placeholder="Total Reserves">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + ratained_earning + '" type="text" class="form-control" name="ratained_earning[]" data-id="' + count + '" id="ratained_earning_' + count + '" value="0" placeholder="Retained Earning">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + minorty_interest + '" type="text" class="form-control" name="minorty_interest[]" data-id="' + count + '" id="minorty_interest_' + count + '" value="0" placeholder="Minority Interest">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + total_equity + '" type="text" class="form-control" name="total_equity[]" data-id="' + count + '" id="total_equity_' + count + '" value="0" placeholder="Total Equity" readonly>';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + balance + '" type="text" class="form-control" name="balance[]" data-id="' + count + '" id="balance_' + count + '" value="0" placeholder="Balance" readonly>';
		html += '		</div>';
		html += '		<h6>Additional Information</h6>';
		html += '		<div class="form-group">';
		html += '			<input value="' + operating_cash_flow + '" type="text" class="form-control" name="operating_cash_flow[]" data-id="' + count + '" id="operating_cash_flow_' + count + '" value="0" placeholder="Operating Cash Flow">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + contingent_liabilities + '" type="text" class="form-control" name="contingent_liabilities[]" data-id="' + count + '" id="contingent_liabilities_' + count + '"';
		html += '		 value="0"	placeholder="Contingent Liabilities">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input value="' + other_commitmentes + '" type="text" class="form-control" name="other_commitmentes[]" data-id="' + count + '" id="other_commitmentes_' + count + '" value="0" placeholder="Other Commitments">';
		html += '		</div>';
		html += '		<div class="form-group">';
		html += '			<input type="text" class="form-control" name="operating_lease_outstanding[]" data-id="' + count + '" id="operating_lease_outstanding_' + count + '"';
		html += '		 value="'+operating_lease_outstanding+'"	placeholder="Total Operating Lease Outstaning">';
		html += '		</div>';
		html += ' </div>';
		html += '</div>';

		// if(count == 3 ){
		// }else {
		// 	count++;
		$('#div_clone').append(html);
		// 	$("#no_of_col").val(count);
		// }

		console.log(data0);
		console.log(data1);
		console.log(data2);

		document.querySelector('#name_'+coloumnCount).value = company_name;
		document.querySelector('#rounding_0').value = rounding;
		document.querySelector('#base_currency_0').value = base_currency;
		document.querySelector('#quality_0').value = quality;
		document.querySelector('#reporting_period_months_0').value = reporting_period_months;
		document.querySelector('#scope_0').value = scope;
		document.querySelector('#confidentiality_record_0').value = confidentiality_record;
		document.querySelector('#financial_year_0').value = financial_year;
		document.querySelector('#month_0').value = month;

		// $('.custom-select').removeClass('is-invalid');

// $('#rounding_' + count + '').val(rounding);

}
}
