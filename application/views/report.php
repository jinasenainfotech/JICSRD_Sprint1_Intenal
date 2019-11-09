<?php $this->load->library('jics'); ?>

<html>

<head>
    <title>CW | Report</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/print-report.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style-report.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/print-report.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/print-report.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/report-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/report/jquery-3.4.1.min.js')?>">
    <link rel="stylesheet" href="<?= base_url('assets/report/highcharts.js')?>">
    <link rel="stylesheet" href="<?= base_url('assets/report/modules_data.js')?>">
    <link rel="stylesheet" href="<?= base_url('assets/report/modules_exporting.js')?>">
    <!-- <script src="https://code.highcharts.com/highcharts.src.js"></script> -->
        <!--   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
            <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        </head>
<?php 
// var_dump();die;
?>
        <div class="footer">
            <hr>
            <p class="float-right">Report Ref: <b><?php echo $input_data['current_year']->id ?></b></p>
            <p class="float-left">Report Date: <b><?php echo $input_data['current_year']->created_at ?></b>
                <br>ASIC Extract Date: <b>30-08-2019
                    <!-- API --> 11:14:12
                    <!-- API --></b></p>
                </div> 

                <div class="report-body">
                    <page size="A4">
                        <div class="header"></div>
                        <div class="content">
                            <div class="report-head cover-page" >
                                <img src="<?= base_url('assets/img/logo-report.png')?>" alt="" class="main-logo">
                                <p>Phone 1300 50 13 12 | Email admin@creditorwatch.com.au</p>
                                <h1>Financial Analysis Enriched Credit Report</h1>
                            <div class="d-flex flex-wrap justify-content-center pt-2 ">
                                <button class="btn btn-primary mt-5 " onclick="window.print();" style="font-size:30px">Print this page</button></div>
                            </div>
                        </div>

                    </page>

                    <page size="A4">

                        <div class="header"></div>
                        <div class="content">
                            <h2>Organisation Summary</h2>
                            <div class="cardview">
                                <h4 class="text-center">ABR Summary</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Main Name</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->main_name ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Main Trading Name</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->main_name ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ABN</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->abn ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Entity Status</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->entity_status ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Entity Status Effective from</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->entity_status_effective_from ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ABN is Current</th>
                                            <!-- API -->
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Entity Type</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->entity_type ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">GST</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->gst ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Locality</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->locality ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Record Last Updated</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->record_last_updated ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="cardview">
                                <h4 class="text-center">ASIC Summary</h4>

                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->name ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ACN</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->acn ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->type ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->staus ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Controlling Jurisdiction</th>
                                            <!-- API -->
                                            <td>ASIC</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Registration Date</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->registration_date ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Review Date</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->review_date ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Class</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->calss ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Subclass</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->subclass ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Locality</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->asic_locality ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Next Review Date</th>
                                            <!-- API -->
                                            <td><?php echo $api_data->review_date ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </page>


                    <page size="A4">
                        <div class="header"></div>
                        <div class="content">
                            <h2 >Non – Financial Based Credit Score</h2>
                            <p class="mt-5">The score is a statistically based score indicating an entity's credit worthiness. The score
                                ultimately ranks entities based on their riskiness and is designed to assist you in making more
                            informed and consistent credit decisions.</p>
                            <p>The score is based between 0 and 850 index points with a higher score considered lower risk while
                                lower scores are deemed to be riskier entities. It should be used in partnership with your
                                internal credit procedures and policies.
                            </p>
                            <p>Entity has acceptable creditworthiness. Extend terms within consideration. Entity has a 0.89%
                            chance of failure within the next 12 months.</p>
                        </div>

                        <h2 class="mt-5">Historical Credit Scores</h2>

                        <!-- API -->
                        <div class="container" id="credit-chart">
                        </div>
                            

<h2 class="mt-5">Recommendations</h2>
<table class="table cardview">
    <thead class="thead-light">
        <tr>
            <th width="20%">Range Risk</th>
            <th width="20%">level</th>
            <th width="60%">Recommendation</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>Critical</td>
            <td>ACN deregistered or ABN cancelled.</td>
        </tr>
        <tr>
            <td>1-125</td>
            <td>Critical</td>
            <td>Entity has a critical status and significant adverse information present.
            Trading eligibility must be considered.</td>
        </tr>
        <tr>
            <td>126-250</td>
            <td>Very High</td>
            <td>Entity has multiple pieces of adverse information present. COD trading highly
            recommended.</td>
        </tr>
        <tr>
            <td>251-450</td>
            <td>High</td>
            <td>Entity has a below average creditworthiness score and some adverse information
                may be present. Trade with caution, monitor closely and consider your payment
            terms.</td>
        </tr>
        <tr>
            <td>451-550</td>
            <td>Moderate</td>
            <td>Entity has moderate creditworthiness with or without adverse information.
            Monitor ongoing payment behaviour.</td>
        </tr>
        <tr>
            <td>551-850</td>
            <td>Low</td>
            <td>Entity has acceptable creditworthiness. Extend terms within consideration.</td>
        </tr>
    </tbody>
</table>

<p>Please note that the score and recommendation should be used in partnership with your
    company's internal credit procedures and policies. The score should not be used as the sole
reason in making a decision about the entity.</p>
</div>
</page>
<div class="clearfix "></div>  

<page size="A4">
    <div class="header"></div>
    <div class="content">
        <!-- Financial Summary  -->
       <div class="container">
       <h2 class="mt-5">Financial Summary </h2>
        <table class="table cardview summary-table table-bordered">
            <tbody>
            <tr>
                    <th width='300px' style="text-align:left">Financial Year</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><strong><?= $previous->financial_year?>(previous)</strong></td>
                    <?php } ?>
                    
                    <td width="14%" style="text-align:right"><strong><?= $input_data['current_year']->financial_year?>(Current)</strong></td>
                   
                </tr>
                <tr>
                    <th width='300px' style="text-align:left">Rounding</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= ucfirst($previous->rounding)?></td>
                    <?php } ?>
                    
                    <td width="14%" style="text-align:right"><?= ucfirst($input_data['current_year']->rounding)?></td>
                   
                </tr>
                <tr>
                    <th style="width:40%">Base Currency</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= strtoupper($previous->base_currency)?></td>
                    <?php } ?>
                  
                    <td style="text-align:right"><?= strtoupper($input_data['current_year']->base_currency) ?></td>
                    

                </tr>
                <tr>
                    <th style="width:40%">Quality</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= ucfirst($previous->quality)?></td>
                    <?php } ?>
                    
                    <td style="text-align:right"><?= ucfirst($input_data['current_year']->quality) ?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Reporting Period - Months</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->reporting_period_months?></td>
                    <?php } ?>
                   
                    <td style="text-align:right"><?= $input_data['current_year']->reporting_period_months?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Financial Year</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->financial_year?></td>
                    <?php } ?>
                    
                    <td style="text-align:right">FY <?= $input_data['current_year']->financial_year?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Month</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->month?></td>
                    <?php } ?>
                  
                    <td style="text-align:right"><?= $input_data['current_year']->month?></td>
                    
                </tr>
            </tbody>
        </table>
       </div>
        <div class="clearfix"></div>
        <!-- Income Statement -->
        <h4 class="mt-3">Income Statement</h4>
        <table class="table table-bordered">
            <tbody>
            <tr>
                    <td colspan="<?php echo count($input_data['previous_year']);?>" width='300px' style="text-align:left">Financial Year</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><strong><?=($previous->financial_year)?>(Previous)</strong></td>
                    <?php }
                   
                   
                    ?>
                   
                    <td colspan="<?php echo (count($input_data['previous_year']>0))? 2 : "" ?>" width="" style="text-align:center"><strong><?= $input_data['current_year']->financial_year?>(Current)</strong></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Sales</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->sales)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->sales - $input_data['previous_year'][$key-1]->sales)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->sales)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->sales - $input_data['previous_year'][$key]->sales)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Gross Profit</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->gross_profit)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->gross_profit - $input_data['previous_year'][$key-1]->gross_profit)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->gross_profit)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->gross_profit - $input_data['previous_year'][$key]->gross_profit)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Income</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_income)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->other_income - $input_data['previous_year'][$key-1]->other_income)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_income)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->other_income - $input_data['previous_year'][$key]->other_income)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
               
                <tr>
                    <td width='300px' style="text-align:left">EBIT</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->ebit)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->ebit - $input_data['previous_year'][$key-1]->ebit)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->ebit)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->ebit - $input_data['previous_year'][$key]->ebit)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
            
                <tr>
                    <td width='300px' style="text-align:left">EBITDA</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->ebitda)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->ebitda - $input_data['previous_year'][$key-1]->ebitda)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->ebitda)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->ebitda - $input_data['previous_year'][$key]->ebitda)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Profit Before Tax</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->profit_before_tax)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->profit_before_tax - $input_data['previous_year'][$key-1]->profit_before_tax)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->profit_before_tax)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->profit_before_tax - $input_data['previous_year'][$key]->profit_before_tax)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Profit After Tax</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->profit_after_tax)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->profit_after_tax - $input_data['previous_year'][$key-1]->profit_after_tax)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->profit_after_tax)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->profit_after_tax - $input_data['previous_year'][$key]->profit_after_tax)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>

            </tbody>
        </table>
        <!-- Income Statement -->
        <div class="clearfix"></div>
        <!-- Balance Sheet -->
        <h4 class="mt-3">Balance Sheet</h4>
        <table class="table table-bordered">
            <tbody>
            <tr>
                    <td colspan="<?php echo count($input_data['previous_year']);?>" width='300px' style="text-align:left">Financial Year</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><strong><?=($previous->financial_year)?>(Previous)</strong></td>
                    <?php }
                   
                   
                    ?>
                   
                    <td colspan="<?php echo (count($input_data['previous_year']>0))? 2 : "" ?>" width="" style="text-align:center"><strong><?= $input_data['current_year']->financial_year?>(Current)</strong></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Current Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_current_assets)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->total_current_assets - $input_data['previous_year'][$key-1]->total_current_assets)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_current_assets)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->total_current_assets - $input_data['previous_year'][$key]->total_current_assets)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Non-Current Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_non_curent_assets)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->total_non_curent_assets - $input_data['previous_year'][$key-1]->total_non_curent_assets)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_non_curent_assets)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->total_non_curent_assets - $input_data['previous_year'][$key]->total_non_curent_assets)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_assets)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->total_assets - $input_data['previous_year'][$key-1]->total_assets)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_assets)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->total_assets - $input_data['previous_year'][$key]->total_assets)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Current Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_current_liabilities)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->other_current_liabilities - $input_data['previous_year'][$key-1]->other_current_liabilities)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_current_liabilities)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->other_current_liabilities - $input_data['previous_year'][$key]->other_current_liabilities)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Non-Current Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_non_current_liabilities)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->total_non_current_liabilities - $input_data['previous_year'][$key-1]->total_non_current_liabilities)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_non_current_liabilities)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->total_non_current_liabilities - $input_data['previous_year'][$key]->total_non_current_liabilities)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_liabilities)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->total_liabilities - $input_data['previous_year'][$key-1]->total_liabilities)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_liabilities)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->total_liabilities - $input_data['previous_year'][$key]->total_liabilities)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Share Capital</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->share_capital)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->share_capital - $input_data['previous_year'][$key-1]->share_capital)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->share_capital)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->share_capital - $input_data['previous_year'][$key]->share_capital)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Equity</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_equity)?></td>
                    <?php }
                    if(count($input_data['previous_year']) > 1){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['previous_year'][$key]->total_equity - $input_data['previous_year'][$key-1]->total_equity)?></td>
                    <?php }
                   
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_equity)?></td>
                    <?php 
                    if(count($input_data['previous_year']) > 0){ ?>
                    <td style="text-align:right"><?= $this->jics->indicators($input_data['current_year']->total_equity - $input_data['previous_year'][$key]->total_equity)?></td>
                    <?php }
                   
                    ?>
                   
                </tr>
            
        
            </tbody>
        </table>
        <!-- Balance Sheet -->
    </div>
    <div class="clearfix"></div>
    <!-- Financial Summary  -->
</page>
<div class="clearfix "></div>  

<page size="A4">
    <div class="header"></div>
    <div class="content">
        <h2>Key Performance Indicator Analysis</h2>
        <table class="table cardview table-striped ">
            <thead class="thead-light">
                <tr>
                    <th width='20%'><b> Ratio</b></th>
                    <th width='80%'>Entity Performance Explanation </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b> Gross Profit Margin</b></td>
                    <td><?= $this->jics->gross_profit_margin($key_ratio['current_year']->gross_profit_margin) ?></td>
                </tr>
                <tr>
                    <td><b> Net Profit Margin </b></td>
                    <td><?= $this->jics->net_profit_margin($key_ratio['current_year']->net_profit_margin) ?></td>
                </tr>

                <tr>
                    <td><b> Return on Assets</b></td>
                    <td><?= $this->jics->return_on_assets($key_ratio['current_year']->return_on_assets) ?></td>
                </tr>
                <tr>
                    <td><b> Current Ratio</b> </td>
                    <td><?= $this->jics->current_ratio($key_ratio['current_year']->current_ratio) ?></td>
                </tr>
                <tr>
                    <td><b> Quick Ratio</b> </td>
                    <td><?= $this->jics->quick_ratio($key_ratio['current_year']->quick_ratio) ?></td>
                </tr>

                <tr>
                    <td><b> Gearing</b></td>
                    <td><?= $this->jics->gearing($key_ratio['current_year']->gearing) ?></td>
                </tr>
                <tr>
                    <td><b> Interest Coverage </b></td>
                    <td><?= $this->jics->interest_coverage($key_ratio['current_year']->interest_coverage) ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</page>



<page size="A4">
    <div class="header"></div>
    <div class="content">
        <h2 class="mt-5">Financial Trend Graphs</h2>
        <div class="col-md-12 row chart">

           
            <div class="col-md-6" id="revenue_chart"></div>
            <div class="col-md-6" id="gp_np_margin"></div>
            <div class="col-md-6" id="gp_np"></div>
            <div class="col-md-6" id="ebitda"></div>
            <div class="col-md-6" id="ratio"></div>
            <div class="col-md-6" id="capital"></div>
            <div class="col-md-6" id="equity"></div>
            <div class="col-md-6" id="interest_cover"></div>
            
        </div>
                            
                            <!-- Financial Performance  -->

                        </div>
                    </div>
                </div>
            </page>

            <page size="A4">
                <div class="header"></div>
                <div class="content">
                 <!-- Financial Performance  -->

                 <div class="row">
                 <div class="container">
       <h2 class="mt-5">Financial Performance </h2>
        <table class="table cardview summary-table table-bordered">
            <tbody>
            <tr>
                    <th width='300px' style="text-align:left">Financial Year</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><strong><?= $previous->financial_year?>(previous)</strong></td>
                    <?php } ?>
                    
                    <td width="14%" style="text-align:right"><strong><?= $input_data['current_year']->financial_year?>(Current)</strong></td>
                   
                </tr>
                <tr>
                    <th width='300px' style="text-align:left">Rounding</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= ucfirst($previous->rounding)?></td>
                    <?php } ?>
                    
                    <td width="14%" style="text-align:right"><?= ucfirst($input_data['current_year']->rounding)?></td>
                   
                </tr>
                <tr>
                    <th style="width:40%">Base Currency</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= strtoupper($previous->base_currency)?></td>
                    <?php } ?>
                  
                    <td style="text-align:right"><?= strtoupper($input_data['current_year']->base_currency) ?></td>
                    

                </tr>
                <tr>
                    <th style="width:40%">Quality</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= ucfirst($previous->quality)?></td>
                    <?php } ?>
                    
                    <td style="text-align:right"><?= ucfirst($input_data['current_year']->quality) ?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Reporting Period - Months</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->reporting_period_months?></td>
                    <?php } ?>
                   
                    <td style="text-align:right"><?= $input_data['current_year']->reporting_period_months?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Scope</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->scope?></td>
                    <?php } ?>
                   
                    <td style="text-align:right"><?= $input_data['current_year']->scope?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Confidentiality Record</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->confidentiality_record?></td>
                    <?php } ?>
                   
                    <td style="text-align:right"><?= $input_data['current_year']->confidentiality_record?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Financial Year</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->financial_year?></td>
                    <?php } ?>
                    
                    <td style="text-align:right">FY <?= $input_data['current_year']->financial_year?></td>
                    
                </tr>
                <tr>
                    <th style="width:40%">Month</th>
                    <?php foreach($input_data['previous_year'] as $previous) { ?>
                    <td width="14%" style="text-align:right"><?= $previous->month?></td>
                    <?php } ?>
                  
                    <td style="text-align:right"><?= $input_data['current_year']->month?></td>
                    
                </tr>
            </tbody>
        </table>
       </div>
                 </div>
                 <div class="col-md-12">

                    <!-- Income Statement -->
                    <h4>Income Statement</h4>
                    <table class="table table-bordered">
                        <tbody>
                    <tr>
                    <td colspan="" width='300px' style="text-align:left">Financial Year</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><strong><?=($previous->financial_year)?>(Previous)</strong></td>
                    <?php }
                   
                   
                    ?>
                   
                    <td colspan="" width="" style="text-align:center"><strong><?= $input_data['current_year']->financial_year?>(Current)</strong></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Sales</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->sales)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->sales)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Cost of Sales</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->cost_of_sales)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->cost_of_sales)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Gross Profit </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->gross_profit)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->gross_profit)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Depreciation </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->depreciation)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->depreciation)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Amortisation </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->amortisation)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->amortisation)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Impairment </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->impairment)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->impairment)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Interest Expense (Gross) </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->interest_expense_gross)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->interest_expense_gross)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Operating Lease Expense </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->operating_lease_expense)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->operating_lease_expense)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Finance Lease and hire purchase charges </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->finance_lease_hire_purchase_charges)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->finance_lease_hire_purchase_charges)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Non- Recurring Gains/ (Losses) </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->non_recurring_gains_losses)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->non_recurring_gains_losses)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Gains / (Losses)  </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_gains_losses)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_gains_losses)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Gains / (Losses)  </td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_gains_losses)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_gains_losses)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Expenses</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_expenses)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_expenses)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">EBIT</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->ebit)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->ebit)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">EBITDA</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->ebitda)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->ebitda)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Normalised EBITDA</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->normalised_ebitda)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->normalised_ebitda)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Profit Before Tax</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->profit_before_tax)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->profit_before_tax)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Profit Before Tax (After Abnormals)</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->profit_before_tax_after_abnormals)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->profit_before_tax_after_abnormals)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Tax benefit/ (expense)</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->tax_benefit_expense)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->tax_benefit_expense)?></td>
                    
                   
                </tr>

                <tr>
                    <td width='300px' style="text-align:left">Profit After Tax</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->profit_after_tax)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->profit_after_tax)?></td>
                    
                   
                </tr> 
                <tr>
                    <td width='300px' style="text-align:left">Distribution or Dividends</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->distribution_ordividends)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->distribution_ordividends)?></td>
                    
                   
                </tr> 
                <tr>
                    <td width='300px' style="text-align:left">Distribution or Dividends</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->distribution_ordividends)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->distribution_ordividends)?></td>
                    
                   
                </tr> 
                <tr>
                    <td width='300px' style="text-align:left">Other Post Tax Items - Gains/ (Losses)</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_post_tax_items_gains_losses)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_post_tax_items_gains_losses)?></td>
                    
                   
                </tr> 
                <tr>
                    <td width='300px' style="text-align:left">Profit After Tax & Distribution</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->profit_after_tax_distribution)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->profit_after_tax_distribution)?></td>
                    
                   
                </tr> 
                  

                </tbody>
            </table>
            <!-- Income Statement -->


        </div>
        <!-- Financial Performance  -->


    </div>
</div>
</div>
</page>

<page size="A4">
    <div class="header"></div>
    <div class="content">

        <!-- Balance Sheet  -->
        <h4 class="mt-5">Balance Sheet </h4>
        
        <table class="table table-bordered">
            <thead>
                
            </thead>
            <tr>
                    <th colspan="<?php echo count($input_data['previous_year'])+2  ?>" class="theading">Assets</th>
                </tr>
            <tr>
                    <td colspan="" width='300px' style="text-align:left">Financial Year</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><strong><?=($previous->financial_year)?>(Previous)</strong></td>
                    <?php }
                   
                   
                    ?>
                   
                    <td colspan="" width="" style="text-align:center"><strong><?= $input_data['current_year']->financial_year?>(Current)</strong></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Cash</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->cash)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->cash)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Trade Debtors</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->trade_debtors)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->trade_debtors)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Inventories</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_inventories)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_inventories)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Loans to Related Parties</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->loans_to_related_parties_1)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->loans_to_related_parties_1)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Current Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_current_assets)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_current_assets)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Current Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_current_assets)?></td>
                    <?php }
                    ?>
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_current_assets)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Fixed Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_inventories)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_inventories)?></td>
                    
                   
                </tr>
            
                <tr>
                    <td width='300px' style="text-align:left">Net Intangibles</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->net_intangibles)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->net_intangibles)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Loans to Related Parties</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->loan_to_related_parties_2)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->loan_to_related_parties_2)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Non-Current Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_non_current_assets)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_non_current_assets)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Non-Current Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_non_curent_assets)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_non_curent_assets)?></td>
                    
                   
                </tr>
           
                <tr>
                    <td width='300px' style="text-align:left">Total Assets</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_assets)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_assets)?></td>
                    
                   
                </tr>
           
            
            <thead>
                <tr>
                    <th colspan="<?php echo count($input_data['previous_year'])+2  ?>" class="theading">Liabilities</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td width='300px' style="text-align:left">Trade Creditors</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->trade_creditors)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->trade_creditors)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Interest Bearing Debt</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->interest_bearing_debt_1)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->interest_bearing_debt_1)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Loan from Related Parties</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->lone_from_related_parties)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->lone_from_related_parties)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Current Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_current_liabilities)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_current_liabilities)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Current Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_current_liabilities)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_current_liabilities)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Interest Bearing Debt</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_current_liabilities_2)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_current_liabilities_2)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Loan from Related Parties</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->loans_from_related_parites)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->loans_from_related_parites)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Non-Current Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_non_current_liabilities)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_non_current_liabilities)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Non-Current Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_non_current_liabilities)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_non_current_liabilities)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Liabilities</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_liabilities)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_liabilities)?></td>
                    
                   
                </tr>
                
                
            </tbody>

        </table>


    </div>
</div>
</page>

<page size="A4">
    <div class="header"></div>
    <div class="content">
        <table class="table table-bordered">
        <thead>
                <tr>
                    <th colspan="<?php echo count($input_data['previous_year'])+2  ?>" class="theading">Equity</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <td width='300px' style="text-align:left">Share Capital</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->share_capital)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->share_capital)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Preference Shares</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->prefence_shares)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->prefence_shares)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Treasury Shares</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->treasury_shares)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->treasury_shares)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Equity Ownerships</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->equity_owner_ships)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->equity_owner_ships)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Reserves</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_reserves)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_reserves)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Retained Earnings</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->ratained_earning)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->ratained_earning)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Minority Interest</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->minorty_interest)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->minorty_interest)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Equity</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->total_equity)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->total_equity)?></td>
                    
                   
                </tr>
               
            </tbody>
        </table>
        <!-- Balance Sheet  -->

        <table class="table table-bordered">
        <thead>
                
            </thead>
            <tbody>
            <tr>
                    <td width='300px' style="text-align:left">Net Operating Cash Flow</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->operating_cash_flow)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->operating_cash_flow)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Other Commitments</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->other_commitmentes)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->other_commitmentes)?></td>
                    
                   
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Total Operating Lease Outstanding</td>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->operating_lease_outstanding)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($input_data['current_year']->operating_lease_outstanding)?></td>
                    
                   
                </tr>
                
               
            </tbody>
        </table>
        
    </div>
</div>
</page>


<page size="A4">
    <div class="header"></div>
    <div class="content">
        <h2>Key Ratios</h2>

        <?php
            if(empty($input_data['previous_year'])){
                $previousStatus = false;
                $colspan = 3;
            }else{
                $colspan = count($input_data['previous_year'])+4;
            }
            ?>
        <!-- table -->
        <table class="table table-bordered">
            
            <thead>
                <tr>
                    <th></th>
                    <th>Denomination</th>
                    <?php foreach($input_data['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?=$previous->financial_year?></td>
                    <?php }
                    ?> 
                    
                    <td width="" style="text-align:right"><?= $input_data['current_year']->financial_year ?></td>
                    
                    <?php if($previousStatus!=false) {?>
                    <th class="text-right">FY<?= $input_data['current_year']->financial_year ?> Vs FY <?= $input_data['previous_year'][$key]->financial_year ?></th>
                    <?php } ?>
                </tr>
                <tr>
                    <th colspan="<?php echo $colspan;  ?>" class="theading">Profitability</th>
                </tr>
            </thead>
            <tbody>

            <tr>
                    <td width='300px' style="text-align:left">Gross Profit Margin</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->gross_profit_margin)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->gross_profit_margin)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->gross_profit_margin - $key_ratio['previous_year'][$key]->gross_profit_margin) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">EBIDTA</td>
                    <td>Thousands</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->ebitda)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->ebitda)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->ebitda - $key_ratio['previous_year'][$key]->ebitda) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Net Profit Margin</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->net_profit_margin)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->net_profit_margin)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->net_profit_margin - $key_ratio['previous_year'][$key]->net_profit_margin) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Profitability</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->profitability)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->profitability)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->profitability - $key_ratio['previous_year'][$key]->profitability) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Reinvestment</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->reinvestment)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->reinvestment)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->reinvestment - $key_ratio['previous_year'][$key]->reinvestment) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Return on Assets</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->return_on_assets)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->return_on_assets)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->return_on_assets - $key_ratio['previous_year'][$key]->return_on_assets) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Return on Equity</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->return_on_equity)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->return_on_equity)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->return_on_equity - $key_ratio['previous_year'][$key]->return_on_equity) ?></td>
                    <?php } ?>
                </tr>
                
            </tr>
        </tbody>
        <thead>
            <tr>
            <th colspan="<?php echo $colspan; ?>" class="theading">Liquidity</th>
               
            </tr>

        </thead>
        <tbody>
        <tr>
                    <td width='300px' style="text-align:left">Working Capital</td>
                    <td>Thousands</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->working_capital)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->working_capital)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->working_capital - $key_ratio['previous_year'][$key]->working_capital) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Working Capital to Sales</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->working_capital_to_sales)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->working_capital_to_sales)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->working_capital_to_sales - $key_ratio['previous_year'][$key]->working_capital_to_sales) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Cash Flow Coverage</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->cash_flow_coverage)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->cash_flow_coverage)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->cash_flow_coverage - $key_ratio['previous_year'][$key]->cash_flow_coverage) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Cash Ratio</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->cash_ratio)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->cash_ratio)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->cash_ratio - $key_ratio['previous_year'][$key]->cash_ratio) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Current Ratio</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->current_ratio)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->current_ratio)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->current_ratio - $key_ratio['previous_year'][$key]->current_ratio) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Quick Ratio</td>
                    <td>x</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->quick_ratio)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->quick_ratio)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->quick_ratio - $key_ratio['previous_year'][$key]->quick_ratio) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Capital Adequacy</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->capital_adequacy)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->capital_adequacy)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->capital_adequacy - $key_ratio['previous_year'][$key]->capital_adequacy) ?></td>
                    <?php }?>
                </tr>
            
            
        </tbody>

        <thead>
            <tr>
            <th colspan="<?php echo $colspan;  ?>" class="theading">Gearing</th>
            </tr>

        </thead>
        <tbody>
        <tr>
                    <td width='300px' style="text-align:left">Net Tangible Worth</td>
                    <td>Thousands</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->net_tangible_worth)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->net_tangible_worth)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->net_tangible_worth - $key_ratio['previous_year'][$key]->net_tangible_worth) ?></td>
                    <?php }?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Net Asset Backing</td>
                    <td>Thousands</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->net_asset_backing)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->net_asset_backing)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->net_asset_backing - $key_ratio['previous_year'][$key]->net_asset_backing) ?></td>
                    <?php } ?>
                </tr>
               
           
                <tr>
                    <td width='300px' style="text-align:left">Gearing</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->gearing)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->gearing)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->gearing - $key_ratio['previous_year'][$key]->gearing) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Debt to Equity</td>
                    <td>X</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->debt_to_equity)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->debt_to_equity)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->debt_to_equity - $key_ratio['previous_year'][$key]->debt_to_equity) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Interest Coverage</td>
                    <td>X</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->interest_coverage)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->interest_coverage)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->interest_coverage - $key_ratio['previous_year'][$key]->interest_coverage) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Repayment Capability</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->repayment_capability)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->repayment_capability)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->repayment_capability - $key_ratio['previous_year'][$key]->repayment_capability) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Financial Leverage</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->financial_leverage)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->financial_leverage)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->financial_leverage - $key_ratio['previous_year'][$key]->financial_leverage) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Short Ratio</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->short_ratio)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->short_ratio)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->short_ratio - $key_ratio['previous_year'][$key]->short_ratio) ?></td>
                    <?php } ?>
                </tr>
            
        </tbody>

    </table>
    <!-- table -->
</div>
</div>
</page>
<page size="A4">
    <div class="header"></div>
    <div class="content">
        <table class="table table-bordered">

            <thead>
                <tr>
                <th colspan="<?php echo $colspan;  ?>" class="theading">Operating</th>
                </tr>

            </thead>
            <tbody>
            <tr>
                    <td width='300px' style="text-align:left">Operating Leverage</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->operating_leverage)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->operating_leverage)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->operating_leverage - $key_ratio['previous_year'][$key]->operating_leverage) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Creditor Exposure</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->creditor_exposure)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->creditor_exposure)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->creditor_exposure - $key_ratio['previous_year'][$key]->creditor_exposure) ?></td>
                    <?php  } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Creditor Days</td>
                    <td>Days</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->creditor_days)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->creditor_days)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->creditor_days - $key_ratio['previous_year'][$key]->creditor_days) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Inventory Days</td>
                    <td>Days</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->inventory_days)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->inventory_days)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->inventory_days - $key_ratio['previous_year'][$key]->inventory_days) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Debtor Days</td>
                    <td>Days</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->debtor_days)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->debtor_days)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->debtor_days - $key_ratio['previous_year'][$key]->debtor_days) ?></td>
                    <?php } ?>
                </tr>
                <tr>
                    <td width='300px' style="text-align:left">Cash Conversion Cycle</td>
                    <td>Days</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->cash_conversion_cycle)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->cash_conversion_cycle)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->cash_conversion_cycle - $key_ratio['previous_year'][$key]->cash_conversion_cycle) ?></td>
                    <?php } ?>
                </tr>
                
                
            </tbody>

            <thead>
            <tr>
                <th colspan="<?php echo $colspan;  ?>" class="theading">Other Indicators</th>
                </tr>
               

            </thead>
            <tbody>
            <tr>
                    <td width='300px' style="text-align:left">Sales (Annualised)</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->sales_annualised)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->sales_annualised)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->sales_annualised - $key_ratio['previous_year'][$key]->sales_annualised) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Activity</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->activity)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->activity)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->activity - $key_ratio['previous_year'][$key]->activity) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Sales Growth</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->sales_growth)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->sales_growth)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->sales_growth - $key_ratio['previous_year'][$key]->sales_growth) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Related Party Loans Receivable</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->related_party_loans_receivable)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->related_party_loans_receivable)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->related_party_loans_receivable - $key_ratio['previous_year'][$key]->related_party_loans_receivable) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Related Party Loans Payable</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->related_party_loans_payable)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->related_party_loans_payable)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->related_party_loans_payable - $key_ratio['previous_year'][$key]->related_party_loans_payable) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Related Party Loans Dependency</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->related_party_loans_dependency)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->related_party_loans_dependency)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->related_party_loans_dependency - $key_ratio['previous_year'][$key]->related_party_loans_dependency) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Quick Asset Composition</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->quick_asset_composition)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->quick_asset_composition)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->quick_asset_composition - $key_ratio['previous_year'][$key]->quick_asset_composition) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Current Asset Composition</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->current_asset_composition)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->current_asset_composition)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->current_asset_composition - $key_ratio['previous_year'][$key]->current_asset_composition) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Current Liability Composition</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->current_liability_composition)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->current_liability_composition)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->current_liability_composition - $key_ratio['previous_year'][$key]->current_liability_composition) ?></td>
                    <?php } ?>
                </tr>
            <tr>
                    <td width='300px' style="text-align:left">Z-Score Risk Measure</td>
                    <td>%</td>
                    <?php foreach($key_ratio['previous_year'] as $key => $previous) { ?>
                    <td width="" style="text-align:right"><?= number_format($previous->zscore_risk_measure)?></td>
                    <?php }
                    ?> 
                   
                    <td width="" style="text-align:right"><?= number_format($key_ratio['current_year']->zscore_risk_measure)?></td>
                    <?php if($previousStatus!=false) {?>
                    <td width="" style="text-align:right"><?= $this->jics->indicators($key_ratio['current_year']->zscore_risk_measure - $key_ratio['previous_year'][$key]->zscore_risk_measure) ?></td>
                    <?php } ?>
                </tr>
             
            </tbody>
        </table>
    </div>
</div>
</page>


</div>
<!--CSS -->
<style type="text/css">
    page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;

    }

    page[size="A4"] {
        width: 65vw !important;
        min-height: 100vh;
        padding: 20px 20px;
    }
    .table td, .table th {
        padding: .60rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    @media print {
        body,
        page {
            margin: 0;
            box-shadow: 0;
        }
        .content {
            width: 100%;
        }
        page {
          border: none;

      }
      .printbtn{
display:none
      }
  }

  .report-ref {
    page-break-after: always;
}

.footer {
    position: fixed;
    bottom: 0px;
}
page[size="A4"] {
    width: 100vw !important;
    min-height: 100vh;
}
.report-body {
    background: none;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    //Api Data Entry No
    var entryNo = '<?php echo $api_data->entry_no; ?>';
    var report_id = '<?php echo $input_data['current_year']->id; ?>';
    $.ajax({
        method:"GET",
        url:"/main/getCreditScoreHistory/"+entryNo,
        dataType:"JSON",
        success:function(res){
            var chart = Highcharts.chart('credit-chart', {
    xAxis: {
        categories: res.date
    },
    plotOptions: {
        series: {
            allowPointSelect: true
        }
    },
    series: [{
        
        name: 'Credit Score',
        data: res.value
    }]
});
        }
    });
   



//Revenue Chart

// main/getRevenueChartData/37

$.ajax({
        method:"GET",
        url:"/main/getRevenueChartData/"+report_id,
        dataType:"JSON",
        success:function(res){
            Highcharts.chart('revenue_chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Revenue Chart'
            },
            xAxis: {
                categories: res.year
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Revenue',
                data: res.value
            }]
        });
        }
    });


//GP NP margin chart

$.ajax({
        method:"GET",
        url:"/main/getNpAndGPMarginChartData/"+report_id,
        dataType:"JSON",
        success:function(res){
            Highcharts.chart('gp_np_margin', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'GP & NP Margin'
            },
            
            xAxis: {
                categories: res.year
            },
            yAxis: {
                title: {
                    text: 'Amount'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Gross Profit Margin',
                data: res.gp
            }, {
                name: 'Net Profit Margin',
                data: res.np
            }]
        });
       
        }
    });



// GP and NP

// getGrossNetProfitChartData

$.ajax({
        method:"GET",
        url:"/main/getGrossNetProfitChartData/"+report_id,
        dataType:"JSON",
        success:function(res){
            Highcharts.chart('gp_np', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Gross Profit & Net Profit'
            },
            xAxis: {
                categories: res.year
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Gross profit',
                data: res.gp
            }, {
                name: 'Net Profit',
                data: res.np
            }]
        });
        }
       
        
    });


// Normalized EbitDA and Ebit

$.ajax({
        method:"GET",
        url:"/main/getNormalizedEbitChartData/"+report_id,
        dataType:"JSON",
        success:function(res){
            Highcharts.chart('ebitda', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Normalized EBITDA and EBIT'
            },
            xAxis: {
                categories: res.year
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Normalised EBITDA',
                data: res.normalized_ebit
            }, {
                name: 'EBIT',
                data: res.ebit
            }]
});
        }
       
        
    });



// Liquidity Ratios

$.ajax({
        method:"GET",
        url:"/main/getRatioChartData/"+report_id,
        dataType:"JSON",
        success:function(res){
            Highcharts.chart('ratio', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Liquidity Ratios'
            },
            xAxis: {
                categories: res.year
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Current Ratio',
                data: res.current_ratio
            }, {
                name: 'Quick Ratio',
                data: res.quick_ratio
            }, {
                name: 'Cash Ratio',
                data: res.cash_ratio
            }]
        });
        }
       
        
    });


// Working Capital

$.ajax({
        method:"GET",
        url:"/main/getWorkingCapitalData/"+report_id,
        dataType:"JSON",
        success:function(res){
            Highcharts.chart('capital', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Working Capital'
            },
            xAxis: {
                categories: res.year
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Current Assets',
                data: res.current_assets
            }, {
                name: 'Current Liabilities',
                data: res.current_liabilities
            }, {
                name: 'Working Capital',
                data: res.working_capital
            }]
        }); 
        }
       
        
    });


// equity

Highcharts.chart('equity', {
    title: {
        text: 'Equity'
    },
    xAxis: {
        categories: ["2018","2019"]
    },
    labels: {
       
    },
    series: [{
        type: 'column',
        name: 'Total Assets',
        data: [3, 2]
    }, {
        type: 'column',
        name: 'Total Debt',
        data: [2, 3]
    }, {
        type: 'spline',
        name: 'Equity',
        data: [3, 2.67],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    }]
});

//Interest Cover

$.ajax({
        method:"GET",
        url:"/main/getInterestCoverChartData/"+report_id,
        dataType:"JSON",
        success:function(res){
            Highcharts.chart('interest_cover', {
            title: {
                text: 'Debt to Equity and Interest Cover'
            },
            xAxis: {
                categories: res.year
            },
            labels: {
            
            },
            series: [{
                type: 'column',
                name: 'Debt/Equity',
                data: res.debt
            },{
                type: 'spline',
                name: 'Interest Cover',
                data: res.interest,
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }]
});  
        }
       
        
    });


});




</script>
</html>