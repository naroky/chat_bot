
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      
  <!-- Data Result box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Users</h3>
        </div>
        <div class="box-body">
          <table id="query_result" class="display" style="width:100%">
         <thead>
              <tr>
                <th>ID</th>
                <th>Question</th>
                <th>tag</th>
                <th>Lastupdate</th>
              </tr>
          </thead>
          

          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         &nbsp;
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

// Handle click on "View" button
    $('#query_result').on('click', '#btn-edit', function (e) {
        var data = table.row( $(this).parents('tr') ).data();
        id= data[0];
        window.location.replace("<?php echo base_url()?>question/edit/" + id);
    } );
    // Handle click on "Delete" button
    $('#query_result').on('click', '#btn-delete', function (e) {
      var data = table.row( $(this).parents('tr') ).data();
      id= data[0];

      var result = confirm("Confirm to delete?");
      if (result) {
          $.get("<?php echo base_url()?>question/del/" + id);
          window.location.replace("<?php echo base_url()?>question/lists");
      }
    });  

    //Load Datatable  
    var table = $('#query_result').DataTable({
        dom: 'Bfrtip',
        buttons: [
            {
                text: 'Add New',
                action: function ( e, dt, node, config ) {
                    $( location ).attr("href", '<?php echo base_url()?>question/add');
                }
            }
        ],      
    "columnDefs": [ {
          "targets": -1,
          "data": null,
          "defaultContent": 
             '<button class="btn-delete" id="btn-delete"  type="button">Delete</button>&nbsp;&nbsp;'
             + '<button class="btn-edit" id="btn-edit"  type="button">Edit</button>'
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
        "ajax": "<?php echo base_url()?>question/api_lists/"

    });      
        
    // 
  })
  </script>