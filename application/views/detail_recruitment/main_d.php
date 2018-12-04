<style>
    #link { color: #FF0000; } /* CSS link color */
  </style>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Position
        <small>Detail Position Yang di Butuhkan</small>
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
              <center><h3><b>Data Permintaan Posisi Untuk Client <?php echo $row->client; ?></b></h3></center>              
            </div>
            <b>
                    <div class="col-xs-4">
                    <div class="callout callout-success">
                    PROJECT CLIENT :  <?php echo $row->client;?>              

              </div>      
                    </div>
                    <div class="col-xs-4">      
                    <div class="callout callout-info">

                    Person in Common Marketing:  <?php echo $row->pic_market;?>
                    </div>
              </div>
              <div class="col-xs-4">     
              <div class="callout callout-danger">
 
                    Person In Common Mesite:  <?php echo $row->pic_medsite;?>
                    </div>
              
              </div>
              </b>
                                     <?php
}
?>
                      <div class = "row"></div>
            <div class="box-header">
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModalAdd">Add New</button>
                <button class="btn btn-danger btn-sm" onclick="location.href='<?php echo site_url('/Upload_excel/form/'.$row->idt_rec_main);?>'">Upload </button>


                <!-- <button class="btn btn-danger btn-sm" onclick="downloadsap()">Add New</button> -->
          </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="mytable" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Position</th>
                  <th>Position</th>
                  <th>Person</th>
                  <th>Qualification</th>
                  <th>Location</th>
                  <th>Point of Hire</th>
                  <th>Duration</th>
                  <th>Work Schedule</th>
                  <th>Rate Fee & Benefit</th>
                  <th>Purpose</th>
                  <th>To Site Date</th>
                  <th>On Duty date</th>

                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
               
                </tbody>
                <tfoot>
                <tr>
                <th>Position</th>
                <th>Position</th>
                  <th>Person</th>
                  <th>Qualification</th>
                  <th>Location</th>
                  <th>Point of Hire</th>
                  <th>Duration</th>
                  <th>Work Schedule</th>
                  <th>Rate Fee & Benefit</th>
                  <th>Purpose</th>
                  <th>To Site Date</th>
                  <th>On Duty date</th>

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



