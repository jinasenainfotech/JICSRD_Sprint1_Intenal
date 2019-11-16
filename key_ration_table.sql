ALTER TABLE `jinasena_test`.`key_ratio_calculations` 
CHANGE COLUMN `gross_profit_margin` `gross_profit_margin` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `ebitda` `ebitda` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `normalised_ebitda` `normalised_ebitda` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `ebit` `ebit` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `net_profit_margin` `net_profit_margin` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `profitability` `profitability` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `reinvestment` `reinvestment` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `return_on_assets` `return_on_assets` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `return_on_equity` `return_on_equity` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `working_capital` `working_capital` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `working_capital_to_sales` `working_capital_to_sales` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `cash_flow_coverage` `cash_flow_coverage` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `cash_ratio` `cash_ratio` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `current_ratio` `current_ratio` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `quick_ratio` `quick_ratio` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `capital_adequacy` `capital_adequacy` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `net_tangible_worth` `net_tangible_worth` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `net_asset_backing` `net_asset_backing` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `gearing` `gearing` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `debt_to_equity` `debt_to_equity` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `interest_coverage` `interest_coverage` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `repayment_capability` `repayment_capability` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `financial_leverage` `financial_leverage` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `short_ratio` `short_ratio` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `operating_leverage` `operating_leverage` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `creditor_exposure` `creditor_exposure` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `creditor_days` `creditor_days` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `inventory_days` `inventory_days` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `debtor_days` `debtor_days` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `cash_conversion_cycle` `cash_conversion_cycle` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `sales_annualised` `sales_annualised` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `activity` `activity` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `sales_growth` `sales_growth` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `related_party_loans_receivable` `related_party_loans_receivable` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `related_party_loans_payable` `related_party_loans_payable` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `related_party_loans_dependency` `related_party_loans_dependency` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `quick_asset_composition` `quick_asset_composition` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `current_asset_composition` `current_asset_composition` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `current_liability_composition` `current_liability_composition` DECIMAL(10,2) NULL DEFAULT NULL ,
CHANGE COLUMN `zscore_risk_measure` `zscore_risk_measure` DECIMAL(10,2) NULL DEFAULT NULL ;