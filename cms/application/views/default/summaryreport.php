  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Summary Report
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
                <select class="form-control">
                  <option value="KTB">KTB</option>
                  <option value="SCB">SCB</option>
                  <option value="BBL">BBL</option>
                  <option value="BAY">BAY</option>
                </select>
              </div>
              <!-- /.input group -->
            </div>
            <!-- /.form group -->
            <!-- Type -->
            <div class="form-group col-md-4">
              <label>Type:</label>
              <div class="input-group col-md-4">
                <select class="form-control">
                  <option value="sftp">SFTP</option>
                  <option value="online">Online</option>
                </select>
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
          <table class="table table-bordered" style="width: 100%">
            <thead>
              <tr>
                <th colspan="3">PROJECT</th>
                <th>JANUARY</th>
                <th>FEBRUARY</th>
                <th>MARCH</th>
                <th>APRIL</th>
                <th>MAY</th>
                <th>JUNE</th>
                <th>JULY</th>
                <th>AUGUST</th>
                <th>SEPTEMBER</th>
                <th>OCTOBER</th>
                <th>NOVEMBER</th>
                <th>DECEMBER</th>
                <th>TOTAL</th>
              </tr>
            </thead>
            <tbody>


            <?php if(count($result) > 0) {
            ?>
              <tr>
                <td rowspan="2">KTB</td>
                <td rowspan="2">online</td>
                <td>INPUT</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Jan"])) ? $result["KTB"]["sftp"]["INPUT"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Feb"])) ? $result["KTB"]["sftp"]["INPUT"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Mar"])) ? $result["KTB"]["sftp"]["INPUT"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Apr"])) ? $result["KTB"]["sftp"]["INPUT"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["May"])) ? $result["KTB"]["sftp"]["INPUT"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Jun"])) ? $result["KTB"]["sftp"]["INPUT"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Jul"])) ? $result["KTB"]["sftp"]["INPUT"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Aug"])) ? $result["KTB"]["sftp"]["INPUT"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Sep"])) ? $result["KTB"]["sftp"]["INPUT"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Oct"])) ? $result["KTB"]["sftp"]["INPUT"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Nov"])) ? $result["KTB"]["sftp"]["INPUT"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["INPUT"]["Dec"])) ? $result["KTB"]["sftp"]["INPUT"]["Dev"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>
                <td>PHONE</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Jan"])) ? $result["KTB"]["sftp"]["PHONE"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Feb"])) ? $result["KTB"]["sftp"]["PHONE"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Mar"])) ? $result["KTB"]["sftp"]["PHONE"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Apr"])) ? $result["KTB"]["sftp"]["PHONE"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["May"])) ? $result["KTB"]["sftp"]["PHONE"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Jun"])) ? $result["KTB"]["sftp"]["PHONE"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Jul"])) ? $result["KTB"]["sftp"]["PHONE"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Aug"])) ? $result["KTB"]["sftp"]["PHONE"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Sep"])) ? $result["KTB"]["sftp"]["PHONE"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Oct"])) ? $result["KTB"]["sftp"]["PHONE"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Nov"])) ? $result["KTB"]["sftp"]["PHONE"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["KTB"]["sftp"]["PHONE"]["Dec"])) ? $result["KTB"]["sftp"]["PHONE"]["Dev"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>              
              <tr>
                <td rowspan="3">SCB</td>
                <td >ONLINE</td>
                <td>INPUT</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Jan"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Feb"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Mar"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Apr"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["May"])) ? $result["SCB"]["ONLINE"]["INPUT"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Jun"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Jul"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Aug"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Sep"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Oct"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Nov"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["ONLINE"]["INPUT"]["Dec"])) ? $result["SCB"]["ONLINE"]["INPUT"]["Dev"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>
              <tr>
                <td rowspan="2">SFTP</td>
                <td>INPUT</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Jan"])) ? $result["SCB"]["sftp"]["INPUT"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Feb"])) ? $result["SCB"]["sftp"]["INPUT"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Mar"])) ? $result["SCB"]["sftp"]["INPUT"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Apr"])) ? $result["SCB"]["sftp"]["INPUT"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["May"])) ? $result["SCB"]["sftp"]["INPUT"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Jun"])) ? $result["SCB"]["sftp"]["INPUT"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Jul"])) ? $result["SCB"]["sftp"]["INPUT"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Aug"])) ? $result["SCB"]["sftp"]["INPUT"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Sep"])) ? $result["SCB"]["sftp"]["INPUT"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Oct"])) ? $result["SCB"]["sftp"]["INPUT"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Nov"])) ? $result["SCB"]["sftp"]["INPUT"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["INPUT"]["Dec"])) ? $result["SCB"]["sftp"]["INPUT"]["Dec"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>
              <tr>

                <td>PHONE</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Jan"])) ? $result["SCB"]["sftp"]["PHONE"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Feb"])) ? $result["SCB"]["sftp"]["PHONE"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Mar"])) ? $result["SCB"]["sftp"]["PHONE"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Apr"])) ? $result["SCB"]["sftp"]["PHONE"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["May"])) ? $result["SCB"]["sftp"]["PHONE"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Jun"])) ? $result["SCB"]["sftp"]["PHONE"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Jul"])) ? $result["SCB"]["sftp"]["PHONE"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Aug"])) ? $result["SCB"]["sftp"]["PHONE"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Sep"])) ? $result["SCB"]["sftp"]["PHONE"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Oct"])) ? $result["SCB"]["sftp"]["PHONE"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Nov"])) ? $result["SCB"]["sftp"]["PHONE"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["SCB"]["sftp"]["PHONE"]["Dec"])) ? $result["SCB"]["sftp"]["PHONE"]["Dec"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>
              <tr>
                <td >BAY</td>
                <td >ONLINE</td>
                <td>INPUT</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Jan"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Feb"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Mar"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Apr"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["May"])) ? $result["BAY"]["ONLINE"]["INPUT"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Jun"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Jul"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Aug"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Sep"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Oct"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Nov"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BAY"]["ONLINE"]["INPUT"]["Dec"])) ? $result["BAY"]["ONLINE"]["INPUT"]["Dev"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr> 
              <tr>
                <td rowspan="3">BBL</td>
                <td >ONLINE</td>
                <td>INPUT</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Jan"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Feb"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Mar"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Apr"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["May"])) ? $result["BBL"]["ONLINE"]["INPUT"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Jun"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Jul"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Aug"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Sep"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Oct"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Nov"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["ONLINE"]["INPUT"]["Dec"])) ? $result["BBL"]["ONLINE"]["INPUT"]["Dev"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>
              <tr>
                <td rowspan="2">SFTP</td>
                <td>INPUT</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Jan"])) ? $result["BBL"]["sftp"]["INPUT"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Feb"])) ? $result["BBL"]["sftp"]["INPUT"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Mar"])) ? $result["BBL"]["sftp"]["INPUT"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Apr"])) ? $result["BBL"]["sftp"]["INPUT"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["May"])) ? $result["BBL"]["sftp"]["INPUT"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Jun"])) ? $result["BBL"]["sftp"]["INPUT"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Jul"])) ? $result["BBL"]["sftp"]["INPUT"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Aug"])) ? $result["BBL"]["sftp"]["INPUT"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Sep"])) ? $result["BBL"]["sftp"]["INPUT"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Oct"])) ? $result["BBL"]["sftp"]["INPUT"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Nov"])) ? $result["BBL"]["sftp"]["INPUT"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["INPUT"]["Dec"])) ? $result["BBL"]["sftp"]["INPUT"]["Dec"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>
              <tr>

                <td>PHONE</td>
                  <?php 
                  $total = 0;
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Jan"])) ? $result["BBL"]["sftp"]["PHONE"]["Jan"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Feb"])) ? $result["BBL"]["sftp"]["PHONE"]["Feb"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Mar"])) ? $result["BBL"]["sftp"]["PHONE"]["Mar"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Apr"])) ? $result["BBL"]["sftp"]["PHONE"]["Apr"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["May"])) ? $result["BBL"]["sftp"]["PHONE"]["May"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Jun"])) ? $result["BBL"]["sftp"]["PHONE"]["Jun"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Jul"])) ? $result["BBL"]["sftp"]["PHONE"]["Jul"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Aug"])) ? $result["BBL"]["sftp"]["PHONE"]["Aug"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Sep"])) ? $result["BBL"]["sftp"]["PHONE"]["Sep"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                              
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Oct"])) ? $result["BBL"]["sftp"]["PHONE"]["Oct"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Nov"])) ? $result["BBL"]["sftp"]["PHONE"]["Nov"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  $value =(isset($result["BBL"]["sftp"]["PHONE"]["Dec"])) ? $result["BBL"]["sftp"]["PHONE"]["Dec"] : 0;
                  $total = $total + $value;
                  echo "<td>".$value."</td>";                
                  echo "<td>".$total."</td>";                
                 ?>
              </tr>                           
            <?php }?>
                            
            </tbody>

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
	

        
    // 
  })
  </script>

