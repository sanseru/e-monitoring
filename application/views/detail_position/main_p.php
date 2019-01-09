<style>
    #link { color: #FF0000; } /* CSS link color */
  </style>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kandidat
        <small>Data Data Kandidat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">      
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <?php
foreach ($ambil_data as $row) {
?>
              <center><h3><b>Data Permintaan Posisi <font color='red'><?php echo $row->position; ?></font> Untuk Client <?php echo $row->client; ?></b></h3></center>              
            </div>
            <b>
                    <div class="col-xs-4">
                    <div class="callout callout-success">
                    <p>Posisi :  <?php echo $row->position;?></p>
                    <p>Point Of Hire :  <?php echo $row->poh;?></p> 
                    <p>Location :  <?php echo $row->location;?></p>              



              </div>      
                    </div>
                    <div class="col-xs-4">      
                    <div class="callout callout-info">
                    <p>Duration:  <?php echo $row->duration;?></p>
                    <p>Work Schedule:  <?php echo $row->duration;?></p>
                    <p>Rate Fee and Benefit:  <?php echo $row->ratefee_benef;?> / <?php echo $row->ratefee_benef_2;?></p>
                    </div>
              </div>
              <div class="col-xs-4">     
              <div class="callout callout-danger">
            <p>Purpose:  <?php echo $row->purpose;?></p>
            <p>Qualification:  <?php
            $explode = preg_split('@,@', $row->qualification, NULL, PREG_SPLIT_NO_EMPTY);
            foreach ($explode as $value) {
              echo $value . "\n";
           }
            ?>
            
            </p>
            <p>Pic Marketing And Medsite:  <?php echo $row->pic_market;?> & <?php echo $row->pic_medsite;?></p>

                    </div>
              
              </div>
              </b>
                                     <?php
}
?>
                      <div class = "row"></div>
            <div class="box-header">
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModalAdd">Add New</button>
                <!-- <button class="btn btn-danger btn-sm" onclick="downloadsap()">Add New</button> -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Nama</th>
                  <th>Nama</th>
                  <th>Status Terakhir</th>
                  <th>Description</th>
                  <th>Lihat CV</th>
                  <th>Diterima</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
               
                </tbody>
                <tfoot>
                <tr>
                <th>Nama</th>
                <th>Nama</th>
                  <th>Status Terakhir</th>
                  <th>Description</th>
                  <th>Lihat CV</th>
                  <th>Diterima</th>
                  <th>Action</th>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



