  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Transaction Report
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
					echo form_dropdown('customer', $options, $customer);
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
					echo form_dropdown('channel', $channel_data, $channel);
					?>
	              </div>
	              <!-- /.input group -->
	            </div>
	            <!-- /.form group -->            
          	</div>                  	
	        <div class="row">
	    	<!-- Date range -->
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

	    	<!-- Input MSISDN-->
	          <div class="form-group col-md-4">
	            <label>Phone Number:</label>
	            <div class="input-group">
	              <div class="input-group-addon">
	                <i class="fa fa-phone"></i>
	              </div>
	              <input type="text" class="form-control pull-left" id="mobile_no" name="mobile_no">
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
          <table id="query_result" class="display" style="width:100%">
	       <thead>
	            <tr>
					<?php
					switch ($customer) {
					case "KTB":
					?>
						<th>SMID</th>
		                <th>Channel</th>
		                <th>Service ID</th>
		                <th>Phone Number</th>
		                <th>Status</th>	                
		                <th>Sent Detail</th>
		                <th>Sent Time</th>
		                <th>DR Detail</th>
		                <th>DR Time</th>
					<?php
					break;
					case "SCB":
					if ($channel == 'online')
					{
					?>
						<th>Message ID</th>
		                <th>Transaction ID</th>
		                <th>Mobile No.</th>
		                <th>Recieved Time</th>	                
		                <th>Status</th>
		                <th>Error Code</th>
		                <th>RSS Type</th>
					<?php
					} else
					{
					?>
						<th>Message ID</th>
		                <th>Transaction ID</th>
		                <th>Mobile No.</th>
		                <th>Recieved Time</th>	                
		                <th>Delivered Time</th>	                
		                <th>Credit</th>
		                <th>Status</th>
		                <th>Error Code</th>
					<?php
					}
					break;
					case "BBL":
					if ($channel == 'online')
					{					
					?>
						<th>Message ID</th>
		                <th>Transaction ID</th>
		                <th>Mobile No.</th>
		                <th>Recieved Time</th>	                
		                <th>Status</th>
		                <th>Error Code</th>
		                <th>RSS Type</th>
					<?php
					}else
					{
					?>
						<th>Message ID</th>
		                <th>Transaction ID</th>
		                <th>Sender Name</th>
		                <th>Mobile No.</th>
		                <th>Recieved Time</th>	                
		                <th>Delivered Time</th>	                
		                <th>Text</th>	                
		                <th>Credit</th>	                
		                <th>Status</th>
		                <th>Error Code</th>
	<?php
					}



					break;
					case "BAY":
					?>
						<th>Message ID</th>
		                <th>Transaction ID</th>
		                <th>Mobile No.</th>
		                <th>Recieved Time</th>	                
		                <th>Status</th>
					<?php
					break;
					default:
					?>
						<th>SMID</th>
		                <th>Channel</th>
		                <th>Service ID</th>
		                <th>Phone Number</th>
		                <th>Status</th>	                
		                <th>Sent Detail</th>
		                <th>Sent Time</th>
		                <th>DR Detail</th>
		                <th>DR Time</th>
					<?php					
					break;
					}
					?>

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
    $('#reservation').daterangepicker(
		{format: 'yyyy-mm-dd'}
   
    );
    //Load Datatable	
	$('#query_result').DataTable({
		"pagingType": "full_numbers",
		"pageLength": 100,		
		"searching": false,
        "serverSide": false,
		"language": {
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtered from _MAX_ total records)"
        },
        "ajax": "<?php echo base_url().$coreQuery?>/transaction_query?start_date=<?php echo urlencode($start_date)?>&end_date=<?php echo urlencode($end_date)?>&mobile_no=<?php echo $mobile_no?>&channel=<?php echo $channel?>"
    });	 

        
    // 
  })
  </script>

