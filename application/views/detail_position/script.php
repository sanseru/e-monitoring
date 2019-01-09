<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo site_url('recruitment/save_employee');?>" method="post" enctype="multipart/form-data">
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
            <input type="text" name="st" class="form-control" placeholder="Masukan Status Recruitment Employee" required>                     
          </div>
          <div class="form-group">
            <!-- <input type="text" id = "status" name="status" class="form-control" placeholder="Masukan Status Sekarang" required> -->
            <label>Masukan description
            </label>
            <textarea class="textarea" name="description" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
            </textarea>
          </div>

          <div class="form-group">
            <!-- <input type="text" id = "status" name="status" class="form-control" placeholder="Masukan Status Sekarang" required> -->
            <label>Masukan Komentar Pertama Anda
            </label>
            <textarea class="textarea" name="status" placeholder="Place some text here"
                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
            </textarea>
          </div>
          <!-- <div class="form-group">
                  <label for="poto">Masukan gambar</label>
                  <input type="file" id="poto" name="poto">
                </div> -->

          <div class="form-group">
                  <label for="cv_file">File input</label>
                  <input type="file" id="cv_file" name="cv_file">
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
<form id="add-row-form" action="<?php echo site_url('recruitment/update_employe');?>" method="post">
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
              <input type="hidden" id="id_employee" name="id_employee">
              <input type="hidden" id="detail_id" name="detail_id" value="<?php echo $test; ?>">

              <label>Nama Calon Employee
              </label>
              <input type="text" name="name_e" class="form-control" placeholder="Masukan Nama Recruitment Employee" required>
            </div>
            <div class="form-group">
              <label>Status
              </label>
              <input type="text" name="st" class="form-control" placeholder="Masukan status Recruitment Employee" required>                     
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

<!-- Modal update status Product-->
<form id="add-row-form" action="<?php echo site_url('recruitment/update_employe_diterima');?>" method="post">
  <div class="modal fade" id="Modalterima" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
          <strong>Apakah anda yakin ingin menerima karyawan ini?
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

<!-- Modal Add Product-->
<form id="add-row-form" action="<?php echo site_url('recruitment/save_komentar');?>" method="post">
  <div class="modal fade" id="myModalAddKomentar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <label>Status Keterangan
            </label>
            <textarea class="textarea" name="komentar" placeholder="Place some text here"
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

  <input type="hidden" id="detail_id" name="detail_id" value="<?php echo $test; ?>">
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
          {"data": "client_v","className": "text-center","searchable": false},
          {"data": "e_name","visible": false},

          // {"data": "e_name"},
          //render number format for price
          // {"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
            {"data": "e_status","className": "text-center"},
            {"data": "description","className": "text-center"},
            // {"data": null,
            //     "render" : function ( data, type, full ) { 
            //       return '<a href="user_project_edit.php?project='+data.projects.projectid+'" target="_blank">User Project Edit Page</a>'},
            {"data": "cv_file",
                                                "render" : function ( data, type, full, meta ) { 
                                                return '<a href="<?php echo base_url();?>/upload/'+data+'">Download</a>';}},
            {"data": "is_accept","visible": false,"targets": 3},
            {"data": "view","className": "text-center"},
        ],
        order: [[1, 'asc']],
        rowCallback: function(row, data, iDisplayIndex) {
          var info = this.fnPagingInfo();
          var page = info.iPage;
          var length = info.iLength;
          $('td:eq(0)', row).html();
          if (data.is_accept == "1") {
            $('td', row).css('background-color', '#e6ffcc');

          }
        }
      }
                                         );
      // end setup datatables
      // get Edit Records
      $('#mytable').on('click','.edit_record',function(){
        var code=$(this).data('code');
        var name_e=$(this).data('name');
        var status_e=$(this).data('status');
        var position=$(this).data('position');
        // var medsit=$(this).data('medsit');
        // date = priod.split("-").reverse().join("/");
        // alert(date);
 
        $('#ModalUpdate').modal('show');
        $('[name="id_employee"]').val(code);
        $('[name="name_e"]').val(name_e);
        $('[name="st"]').val(status_e);
        $('[name="back"]').val(position);
        // $('[name="pic_medsite"]').val(medsit);
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

            // get delete Records
            $('#mytable').on('click','.diterima_record',function(){
        var code=$(this).data('code');
        $('#Modalterima').modal('show');
        $('[name="product_code"]').val(code);
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
