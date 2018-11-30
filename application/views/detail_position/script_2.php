<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo site_url('recruitment/save_employee');?>" method="post">
  <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Add New
          </h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="detail_id" name="detail_id" value="<?php echo $test; ?>">
            <label>Nama Calon Employee
            </label>
            <input type="text" name="name_e" class="form-control" placeholder="Masukan Nama Recruitment Employee" required>
          </div>
          <div class="form-group">
            <label>Status
            </label>
            <input type="text" name="st" class="form-control" placeholder="Masukan Nama Recruitment Employee" required>                     
          </div>
          <div class="form-group">
            <!-- <input type="text" id = "status" name="status" class="form-control" placeholder="Masukan Status Sekarang" required> -->
            <label>Status Keterangan
            </label>
            <textarea class="textarea" name="status" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
            </textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close
          </button>
          <button type="submit" class="btn btn-success">Save
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- Modal Update Product-->
<form id="add-row-form" action="<?php echo site_url('recruitment/update');?>" method="post">
  <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Add New
          </h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="id_d" class="form-control" placeholder="id_d" readonly>
            <input type="text" name="client" class="form-control" placeholder="Client" required>
          </div>
          <div class="form-group">
            <input type="text" id="date_priod2" name="project_priod" class="form-control" placeholder="Project Priod" required>
          </div>
          <div class="form-group">
            <input type="text" name="pic_market" class="form-control" placeholder="PIC Marketing" required>
          </div>
          <div class="form-group">
            <input type="text" name="pic_medsite" class="form-control" placeholder="PIC Medsite" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close
          </button>
          <button type="submit" class="btn btn-success">Save
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- Modal delete Product-->
<form id="add-row-form" action="<?php echo site_url('recruitment/delete_employee');?>" method="post">
  <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Delete Product
          </h4>
        </div>
        <div class="modal-body">
          <input type="hidden" name="product_code" class="form-control" required>
          <input type="hidden" id="detail_id" name="detail_id" value="<?php echo $test; ?>">
          <strong>Are you sure to delete this record?
          </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No
          </button>
          <button type="submit" class="btn btn-success">Yes
          </button>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="modal fade" id="ModalComent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="row">
    <div class="col-md-6">
      <!-- The time line -->
      <ul class="timeline" id="test">
        <!-- /.timeline-label -->
        <!-- timeline item -->
        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <input type="text" id="detail_id" name="detail_id" value="<?php echo $test; ?>">
  <script>
    $(document).ready(function(){
      // Setup datatables
      $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
        return {
          "iStart": oSettings._iDisplayStart,
          "iEnd": oSettings.fnDisplayEnd(),
          "iLength": oSettings._iDisplayLength,
          "iTotal": oSettings.fnRecordsTotal(),
          "iFilteredTotal": oSettings.fnRecordsDisplay(),
          "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
          "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
        };
      };
      var detail_id = $('#detail_id').val();
      //   alert(detail_id);
      var table = $("#mytable").dataTable({
        initComplete: function() {
          var api = this.api();
          $('#mytable_filter input')
            .off('.DT')
            .on('input.DT', function() {
            api.search(this.value).draw();
          }
               );
        }
        ,
        oLanguage: {
          sProcessing: "loading..."
        }
        ,
        processing: true,
        serverSide: true,
        ajax: {
          "url": "<?php echo base_url().'index.php/Recruitment/get_product_employee_json/'?>"+ detail_id, "type": "POST"}
        ,
        columns: [
          {
            "data": "client_v","className": "text-center","searchable": false}
          ,
          // {"data": "e_name"},
          //render number format for price
          // {"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
          {
            "data": "e_status","className": "text-center"}
          ,
          {
            "data": "view","className": "text-center"}
          ,
        ],
        order: [[1, 'asc']],
        rowCallback: function(row, data, iDisplayIndex) {
          var info = this.fnPagingInfo();
          var page = info.iPage;
          var length = info.iLength;
          $('td:eq(0)', row).html();
        }
      }
                                         );
      // end setup datatables
      // get Edit Records
      $('#mytable').on('click','.edit_record',function(){
        var code=$(this).data('code');
        var client=$(this).data('client');
        var priod=$(this).data('priod');
        var market=$(this).data('market');
        var medsit=$(this).data('medsit');
        date = priod.split("-").reverse().join("/");
        // alert(date);
        $('#ModalUpdate').modal('show');
        $('[name="id_d"]').val(code);
        $('[name="client"]').val(client);
        $('[name="project_priod"]').val(date);
        $('[name="pic_market"]').val(market);
        $('[name="pic_medsite"]').val(medsit);
      }
                      );
      // End Edit Records
      // get delete Records
      $('#mytable').on('click','.delete_record',function(){
        var code=$(this).data('code');
        $('#ModalDelete').modal('show');
        $('[name="product_code"]').val(code);
      }
                      );
      $('#mytable').on('click','.comment',function(){
        var code=$(this).data('code');
        $('#ModalComent').modal('show');
        $.ajax({
          url: '<?php echo base_url()?>index.php/recruitment/komentar/' + code,
          success: function (data) {
            $.each(data, function(index) {
              // alert(data[index].status_e);
              var coba = '<div class="box-tools pull-right"><button type="button" class="btn btn-box-tool" data-widget="remove" data-dismiss="modal"><i class="fa fa-times"></i></button></div><!-- timeline time label --><li class="time-label"><span class="bg-red">10 Feb. 2014</span></li><li><div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> 12:05</span> <!-- timeline item --> <li> <i class="fa fa-comments bg-yellow"></i><div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span><h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3><div class="timeline-body">'+data[index].status_e+'</div> <div class="timeline-footer"> <a class="btn btn-warning btn-flat btn-xs">View comment</a> </div> </div> </li> <!-- END timeline item --></li></li></ul>'
              $('#test').append(coba);
            }
                  );
          }
        }
              );
      }
                      );
      // End delete Records
      $('#date_priod').datepicker({
        autoclose: true
      }
                                 )
      $('#date_priod2').datepicker({
        autoclose: true
      }
                                  )
    }
                     );
    function downloadsap(){
      $.ajax ({
        url: '<?php echo base_url().'index.php/Client_d/getClientSyncSAP'?>',
        data : '',
        type : 'post',
        success : function(response){
        alert(response);
      }
              }
             )
    }
  </script>
  <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    }
     )
  </script>
