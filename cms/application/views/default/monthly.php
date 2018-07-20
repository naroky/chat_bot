  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Monthly Report
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    	<form id="search_box" name="search_box" method="get">
      <!-- Search box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Search Box</h3>
        </div>
        <div class="box-body">
      <!-- Row 1 -->
          <div class="row">
            <!-- Customer -->
            <div class="form-group col-md-4">
              <label>Customer:</label>
              <div class="input-group col-md-4">
              <?php 
              $options = array(
                        'KTB' => 'KTB',
                        'SCB' => 'SCB',
                        'BBL' => 'BBL',
                        'BAY' => 'BAY',
              );
              echo form_dropdown('customer', $options, $customer,' class="form-control" ');
              ?>                
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->
            <!-- Type -->
            <div class="form-group col-md-4">
              <label>Type:</label>
              <div class="input-group col-md-4">
              <?php 
              $options = array(
                        'sftp' => 'sftp',
                        'online' => 'online',
              );
              echo form_dropdown('channel', $options, $channel,' class="form-control" ');
              ?> 
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->            
          </div>          
    	<!-- Date range -->
          <div class="row">
            <div class="form-group col-md-4">
              <label>Date range:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="reservation" name="reservation">
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button id='btn_search' class="btn btn-primary btn-flat">Search</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
  </form>
	<!-- Data Result box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Transaction Result</h3>
        </div>
        <div class="box-body">
          <table id="query_result" class="display">
	       <thead>
          <tr>
            <th style="text-align: center" colspan="7">MT</th> 
            <th style="text-align: center" colspan="5">DR</th> 
          </tr>
          <tr>
            <th>Date</th>  
            <th>Total Transactions</th>  
            <th>TOTAL SENT GW</th> 
            <th>SENT GW Success</th> 
            <th>SENT GW Fail</th>  
            <th>TOTAL CREDITS</th> 
            <th>CREDITS SUCCESS</th> 
            <th>CREDITS FAILED</th>  
            <th>TOTAL PHONE</th> 
            <th>CREDITS SUCCESS PHONE</th>
            <th>CREDITS FAILED PHONE</th>
          </tr>
	        </thead>
	        

          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  $(document).ready(function () {
    //Date range picker
    $('#reservation').daterangepicker();
    //Load Datatable	
	$('#query_result').DataTable({
		"searching": false,
        "serverSide": true,
		"language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "ajax": "http://localhost/smsreport/<?php echo $coreQuery?>/monthly_query?start_date=<?php echo urlencode($start_date)?>&end_date=<?php echo urlencode($end_date)?>&mobile_no=<?php echo $mobile_no?>&channel=<?php echo strtolower($channel)?>"
    });	 

        
    // 
  })
  </script>

