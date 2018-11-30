  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Timeline
        <small>example</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">Timeline</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- row -->
      <div class="row">
        <div class="col-md-12">

          <div class="box-header">
          <?php
    if($this->ion_auth->in_group('HCBS'))
    {
    ?><button class="btn btn-danger btn-sm" onclick="location.href='<?php echo site_url('recruitment/detail_position/'.$back);?>'">BACK</button><?php }?>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModalAddKomentar">TAMBAH KOMENTAR</button>

          </div>
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-red">
                    10 Feb. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <?php
                          $no = 1;                        
                          foreach($ambil_data as $row){
                      ?>
            <li>
              <i class="fa fa-comments bg-yellow"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                <h3 class="timeline-header"><a href="#"><?php echo $row->username; ?></a> commented on your post</h3>

                <div class="timeline-body">
                  <?php echo $row->status_e; ?>
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <?php 
                      }
                      ?>


            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->