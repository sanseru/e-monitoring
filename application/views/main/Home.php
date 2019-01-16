  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Employee
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"></a></li>
        <li class="active">Data Employee</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Calon Kandidat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th >Nama</th>
                  <th>Untuk Client</th>
                  <th>Posisi</th>
                  <th>Lokasi</th>
                  <th>Status</th>
                  <th>Lihat CV</th>
                </tr>
                </thead>
                <tbody>
                <?php
                          $no = 1;                        
                          foreach($ambil_info as $row){
                            if($row->is_accept == '1'){
                              $background = 'bgcolor="#00FF00"';
                            }else{
                              $background = '';
                            }
                      ?>

                          <tr>
                            <td <?php echo $background?>><?php echo $row->e_name ?> </td>
                            <td <?php echo $background?>><?php echo $row->client ?> </td>
                            <td <?php echo $background?>><?php echo $row->position ?> </td>
                            <td <?php echo $background?>><?php echo $row->location ?> </td>
                            <td <?php echo $background?>><?php echo $row->e_status ?> </td>
                            <td <?php echo $background?>>
                            <a class="btn btn-info btn-xs" href="<?php echo base_url('upload/'.$row->cv_file);?>"  target="_blank"><i class="fa fa-eye"></i> CV</a>
                            <a class="btn btn-info btn-xs" href="<?php echo base_url().'index.php/recruitment/komentar_tl/'.$row->id_employee?>"><i class="fa fa-comments"></i>Komentar</a>
                            </td>


                          </tr>

                       <?php 
                      }
                      ?>
                </tbody>
                <tfoot>
                <tr>
                <th>Nama</th>
                  <th>Untuk Client</th>
                  <th>Posisi</th>
                  <th>Lokasi</th>
                  <th>Status</th>                  
                  <th>Lihat CV</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-4">
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <div class="box box-default">
            <div class="box-header with-border">
              <i class="fa fa-bullhorn"></i>

              <h3 class="box-title">CATATAN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="callout callout-success">
                <h4>KETERANGAN JIKA SUDAH TERPILIH</h4>

                <p>Jika Baris sudah menjadi Hijau pada Kandidat maka kandidat sudah diterima</p>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



    </section>
    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->