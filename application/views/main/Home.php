  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <!-- <?php echo $judul ?> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
<br>
      <div class="row">
      <?php
                          $no = 1;                        
                          foreach($ambil_info as $row){
                      ?>

          <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><b><?php echo $row->e_name ?></b></h3>
              <h5 class="widget-user-desc"><?php echo $row->position ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url();?>assets/dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">LOCATION</h5>
                    <span class="description-text"><?php echo $row->location ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Point Of Hire</h5>
                    <span class="description-text"><?php echo $row->poh ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">CLIENT</h5>
                    <span class="description-text"><?php echo $row->client ?></span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
           
            </div>
              <!-- /.row -->
              <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <br>
                <center><label>Status</label></center>
                <li><center><span class="pull-center badge bg-blue"><?php echo $row->e_status ?>1</span></center></li>
                <li><a href="<?php echo base_url().'index.php/recruitment/komentar_tl/'.$row->id_employee?>">Tambah Komentar <span class="pull-right badge bg-blue"><?php echo $row->jumlah ?></span></a></li>

              </ul>
            </div>   
            </div>
            
          </div>
          <!-- /.widget-user -->
        </div>

                       <?php 
                      }
                      ?>

      
        </div>
<!-- End Of Row -->




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

