<head>
    <title>Risk D | Dashboard</title>
</head>
<main role="main" class="container" style="min-height: calc(100vh - 180px);">
    <section class="my-5 container" >
        <div class="row justify-content-center">
            <div class="col-md-4">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select the company</label>
                <select class="custom-select mr-sm-2" name="company" id="coaskd">
                    <option disabled selected value="">Select the Company</option>
                    <?php
                       
                    if((isset($companies)) && ($companies!=false)){
                            // echo '<option selected>Choose...</option>';
                        foreach($companies as $row)
                        {
                        echo '<option value="'.$row->id.'">'.$row->entity_name.'-'.$row->country.'</option>';
                        }
                    }else{
                        echo '<option selected>No Companies in Database</option>';
                    }
                    ?>
                </select>
            </div>
           
            <div class="col-md-4 pt-4">
                <div class="btn btn-primary btn-md mt-2 active" id="find">Find</div>
                <button class="btn btn-danger mt-2" id="newreport">Create New Report</button>
            </div>
        </div>

    </section>
    
    <!-- Data table -->
    <section>
        <div class="d-flex col-md-12 justify-content-end my-4">
            <!-- <a class="btn btn-primary" href="<?= base_url('newreport')?>?">Create New Report</a> -->
            
        </div>
        <script type="text/javascript">

            $(document).on('click', '#newreport', function(event) {
                event.preventDefault();
                /* Act on the event */
                var company = $('#coaskd').val();
                var country = $('#country').val();


                if(company!=null){
                   location.href = '<?= base_url('newreport')?>?com='+ company + '&cun=' + country;
                }else {
                    alert('select the company');
                }


            });
            $(document).on('click', '#find', function(event) {
                var company = $('#coaskd').val();
                var country = $('#country').val();

                if(company ==null){
                    alert('Please select Company');
                }else{
                    $.post("<?= base_url('main/get_d_tbl') ?>",{
                    id:$('#coaskd').val(),
                },function(D){
                    $('#tablellll').html(D);
                },"text");
                }
                
            });
        </script>
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header">
                    <h4>Recent reports</h4>
                </div>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Report Name</th>
                            <th>Date</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody  id="tablellll">

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>