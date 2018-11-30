  <!-- Modal Add Product-->
    <form id="add-row-form" action="<?php echo site_url('recruitment/save');?>" method="post">
       <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Add New</h4>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <input type="text" name="client" class="form-control" placeholder="Client" required>
                     </div>
                     <div class="form-group">
                         <input type="text" id = "date_priod" name="project_priod" class="form-control" placeholder="Project Priod" required>
                     </div>

                     <div class="form-group">
                         <input type="text" name="pic_market" class="form-control" placeholder="PIC Marketing" required>
                     </div>
                    <div class="form-group">
                         <input type="text" name="pic_medsite" class="form-control" placeholder="PIC Medsite" required>
                     </div>

                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save</button>
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
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Add New</h4>
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
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save</button>
                 </div>
              </div>
          </div>
       </div>
   </form>


   <!-- Modal delete Product-->
    <form id="add-row-form" action="<?php echo site_url('recruitment/delete');?>" method="post">
       <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                 </div>
                 <div class="modal-body">
                         <input type="hidden" name="product_code" class="form-control" required>
                         <strong>Are you sure to delete this record?</strong>
                 </div>
                 <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                      <button type="submit" class="btn btn-success">Yes</button>
                 </div>
              </div>
          </div>
       </div>
   </form>

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
 
      var table = $("#mytable").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'index.php/Recruitment/get_product_json'?>", "type": "POST"},
                    columns: [
                                                {"data": "client_v","searchable": false},
                                                {"data": "client","visible":false},
                                                {"data": "project_priod"},
                                                //render number format for price
                                                // {"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
                                                {"data": "pic_market"},
                                                {"data": "pic_medsite"},
                                                {"data": "username"},
                                                {"data": "view"}
                  ],
                order: [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }
 
      });
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

      });
            // End Edit Records
            // get delete Records
            $('#mytable').on('click','.delete_record',function(){
            var code=$(this).data('code');
            $('#ModalDelete').modal('show');
            $('[name="product_code"]').val(code);
      });
            // End delete Records


            $('#date_priod').datepicker({
                autoclose: true
                })

            $('#date_priod2').datepicker({
                autoclose: true
                })


    });
function downloadsap(){
  $.ajax ({

    url: '<?php echo base_url().'index.php/Client_d/getClientSyncSAP'?>',
    data : '',
    type : 'post',
    success : function(response){
      alert(response);
    }
  })
}    
</script>