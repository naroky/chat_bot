 <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li >
            <a href="<?php echo base_url()?>question/lists"><i class="fa fa-dashboard"></i><span>Question</span></a>
        </li>
        <li >
            <a href="<?php echo base_url()?>answer/lists"><i class="fa fa-dashboard"></i><span>Answer</span></a>
        </li>
        <li >
            <a href="<?php echo base_url()?>question/lists"><i class="fa fa-dashboard"></i><span>Mapping</span></a>
        </li>
 
        <?php if ($session["level"] == 1) 
        {
          ?>
        <li >
            <a href="<?php echo base_url()?>user/list"><i class="fa fa-dashboard"></i><span>User Management</span></a>
        </li>               

          <?php

        }
        ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
