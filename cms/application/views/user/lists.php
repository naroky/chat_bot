  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Management

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

	    	<!-- Input MSISDN-->
	          <div class="form-group col-md-4">
	            <label>Username:</label>
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
					<th>ID</th>
					<th>USERNAME</th>
	                <th>Type</th>
	                <th>Lastupdate</th>					
	                <th>ACTION</th>					
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
   
	// Handle click on "View" button
    $('#query_result').on('click', '#btn-edit', function (e) {
        var data = table.row( $(this).parents('tr') ).data();
        id= data[0];
        window.location.replace("<?php echo base_url()?>user/edit/" + id);
    } );


    // Handle click on "Delete" button
    $('#query_result').on('click', '#btn-delete', function (e) {
        var data = table.row( $(this).parents('tr') ).data();
        id= data[0];

		var result = confirm("Confirm to delete?");
		if (result) {
		    $.get("<?php echo base_url()?>user/delete/" + id);
	        window.location.replace("<?php echo base_url()?>user/list");
		}

    } );	
	
    // Handle click on "Delete" button
    $('#query_result').on('click', '#btn-reset', function (e) {
        var data = table.row( $(this).parents('tr') ).data();
        id= data[0];
        window.location.replace("<?php echo base_url()?>user/reset/" + id);
    } );


    //Load Datatable	
	var table = $('#query_result').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                text: 'Add New',
                action: function ( e, dt, node, config ) {
                    $( location ).attr("href", '<?php echo base_url()?>user/add');
                }
            }
        ],
 		"columnDefs": [ {
          "targets": -1,
          "data": null,
          "defaultContent": 
             '<button class="btn-edit" id="btn-edit" type="button">Edit</button>&nbsp;&nbsp;'
             + '<button class="btn-delete" id="btn-delete"  type="button">Delete</button>&nbsp;&nbsp;'
             + '<button class="btn-reset" id="btn-reset"  type="button">Change Password</button>'
        }],        		
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
        "ajax": "<?php echo base_url()?>user/user_list"

    });	 

        
    // 
  })
  </script>

