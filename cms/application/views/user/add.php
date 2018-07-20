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
      <form id="user_form" name="user_form" method="post">
      <!-- Search box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">New Data</h3>
        </div>
        <div class="box-body">
                
          <div class="row">

        <!-- Input MSISDN-->
            <div class="form-group col-md-4">
              <label>Username:</label>
              <div class="input-group col-md-6">
                <input type="text" class="form-control pull-left" id="username" name="username">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group col-md-4">
              <label>Email:</label>
              <div class="input-group col-md-6">
                <input type="text" class="form-control pull-left" id="email" name="email">
              </div>
              <!-- /.input group -->
            </div>            
            <div class="form-group col-md-4">
              <label>User Type:</label>
              <div class="input-group col-md-6">
              <?php 
              $options = array(
                      '1'=>'Admin',
                      '2'=>'User',
              );
              echo form_dropdown('user_type', $options, '','class="form-control pull-left" id="user_type"');
              ?>
              </div>
              <!-- /.input group -->
            </div>            
          </div>
          <div class="row">
            <div class="form-group col-md-4">
              <label>Password:</label>
              <div class="input-group col-md-6">
                <input type="password" class="form-control pull-left" id="password" name="password">
              </div>
              <!-- /.input group -->
            </div>

            <div class="form-group col-md-4">
              <label>Re-Password:</label>
              <div class="input-group col-md-6">
                <input type="password" class="form-control pull-left" id="re_password" name="re_password">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group col-md-4">
              <label>Status</label>
              <div class="input-group col-md-6">
              <?php 
              $options = array(
                      '1'=>'Active',
                      '2'=>'Inactive',
              );
              echo form_dropdown('status', $options, '','class="form-control pull-left" id="status"');
              ?>
              </div>
              <!-- /.input group -->
            </div>          


          </div>
           
            <!-- /.form group -->

          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button id='btn_save' type="button" class="btn btn-primary btn-flat">Save</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </form>
    <!-- Data Result box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  $(document).ready(function () {
    var saveURL = "";
    $("#btn_save").click(function (e){
      saveURL = "<?php echo base_url()?>user/user_save";

      $("#user_form").submit();
    });

    $("#user_form").submit(function(e)
    {
       // alert (saveURL);
        var postData = $(this).serializeArray();
        $("#loading_page").show();
        e.preventDefault(); //STOP default action
        //e.unbind();        
        $.ajax(
        {
          url : saveURL,
          type: "POST",
          data : postData,
          success:function(data, textStatus, jqXHR)
          {
            alert("Saved");

            window.location.replace("<?php echo base_url()?>user/list");
            $("#loading_page").hide();
          },
          error: function(jqXHR, textStatus, errorThrown)
          {
            alert("Save fail");
            $("#loading_page").hide();
          }
        });        
      });        
    // 
  })
  </script>

