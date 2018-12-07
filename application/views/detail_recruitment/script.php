
  <!-- Modal Add Product-->
    <form id="add-row-form" action="<?php echo site_url('recruitment/save_detail');?>" method="post">
       <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Add New Position</h4>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                          <input type="hidden" id="test" name="id_main" value="<?php echo $test; ?>">
                        <label>Masukan Nama Posisi</label>
                         <input type="text" name="position" class="form-control" placeholder="Position" required>
                     </div>
                     <div class="form-group">
                        <label>Masukan Jumlah Personil Yang Di Minta</label>
                         <input type="text" id = "jml_person" name="jml_person" class="form-control" placeholder="Jumlah Personel" required>
                     </div>
                     <div class="form-group">
                        <label>Masukan Exprience Yang Dibutuhkan</label>
                         <input type="text" id = "exp" name="exp" class="form-control" placeholder="Masukan Pengalaman" required>
                     </div>
                     <div class="form-group">
                        <label>Masukan Qualification Yang Di Butuhkan</label>
                         <!-- <input type="text" name="qualification" class="form-control" placeholder="Qualification" required> -->
                         <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ATLS" value="ATLS">
                      ATLS &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="HIPERKES" value="HIPERKES">
                      HIPERKES &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="HUET" value="HUET">
                      HUET &nbsp;
                    </label>
                    <label>
                      <input type="checkbox"name="BSS" value="BSS">
                      BSS &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="T-BOSIET" value="T-BOSIET">
                      T-BOSIET&nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="BTCLS" value="BTCLS">
                      BTCLS&nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="BACKGROUNDCHECK" value="BACKGROUND CHECK">
                      BACKGROUND CHECK&nbsp;
                    </label>
                    <br>
                    <br>
                    <label>
                      <input type="checkbox" name="H2S" value="H2S">
                      H2S&nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="HSE" value="HSE Fundamental">
                      HSE Fundamental&nbsp; 
                    </label>
                    <label>
                      <input type="checkbox" name="English" value="English Proficiency">
                      English Proficiency&nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="Driving" value="Driving LCS">
                      Driving LCS&nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="Defensive" value="Defensive Driving">
                      Defensive Driving&nbsp;
                    </label>
                  </div>
                     </div>
                    <div class="form-group">
                        <label>Masuka Lokasi Site</label>
                         <input type="text" name="location" class="form-control" placeholder="Location" required>
                     </div>
                    <div class="form-group">
                        <label>Masukan Point Of Hire</label>
                         <input type="text" name="poh" class="form-control" placeholder="Point Of Hire" required>
                     </div>
                    <div class="form-group">
                        <label>Masukan Durasi Project</label>
                         <input type="text" name="duration" class="form-control" placeholder="Duration" required>
                     </div>
                    <div class="form-group">
                        <label>Masukan Work Schedule</label>
                         <input type="text" name="work_schedule" class="form-control" placeholder="Work Schedule" required>
                     </div>
                     <div class="form-group">
                         <label>Masukan Rate Benefit</label>
                         <input type="text" name="rt_bef" class="form-control" placeholder="Rate Fee And Benefit" required>
                     </div>
                    <div class="form-group">
                        <label>Masukan Tujuannya</label>
                         <input type="text" name="purpose" class="form-control" placeholder="Purpose" required>
                     </div>
                      <div class="form-group">
                          <label>Kapan akan dikirim ke Site</label>
                         <input type="text" id="to_site_date" name="to_site_date" class="form-control" placeholder="To Site Date" required>
                     </div>
                      <div class="form-group">
                          <label>Kapan akan Mulai Kerja</label>
                         <input type="text" id="on_duty_date" name="on_duty_date" class="form-control" placeholder="On Duty Date" required>
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
     <form id="add-row-form" action="<?php echo site_url('recruitment/update_detail');?>" method="post">
       <div class="modal fade" id="ModalUpdate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Add New Position</h4>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                          <input type="hidden" name="id_main">
                          <input type="hidden" name="detail">
                          <label>Masukan Nama Posisi</label>
                         <input type="text" name="position" class="form-control" placeholder="Position" required>
                     </div>
                     <div class="form-group">
                     <label>Masukan Jumlah Personil Yang Di Minta</label>
                         <input type="text" id = "jml_person" name="jml_person" class="form-control" placeholder="Jumlah Personel" required>
                     </div>
                     <div class="form-group">
                        <label>Masukan Exprience Yang Dibutuhkan</label>
                         <input type="text" id = "exp" name="exp" class="form-control" placeholder="Masukan Pengalaman" required>
                     </div>
                    <div class="form-group">
                        <label>Masukan Qualification Yang Di Butuhkan</label>
                         <!-- <input type="text" name="qualification" class="form-control" placeholder="Qualification" required> -->
                         <div class="checkbox">
                    <label>
                      <input type="checkbox" name="ATLS" id="cek_0" value="ATLS">
                      ATLS &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="HIPERKES" id="cek_1" value="HIPERKES">
                      HIPERKES &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="HUET" id="cek_2" value="HUET">
                      HUET &nbsp;
                    </label>
                    <label>
                      <input type="checkbox"name="BSS" id="cek_3" value="BSS">
                      BSS &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="T-BOSIET" id="cek_4" value="T-BOSIET">
                      T-BOSIET &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="BTCLS" id="cek_5" value="BTCLS">
                      BTCLS &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="BACKGROUND CHECK" id="cek_6" value="BACKGROUND CHECK">
                      BACKGROUND CHECK &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="H2S" id="cek_7" value="H2S">
                      H2S&nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="HSE" id="cek_8" value="HSE Fundamental">
                      HSE Fundamental &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="English" id="cek_9" value="English Proficiency">
                      English Proficiency &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="Driving" id="cek_10" value="Driving LCS">
                      Driving LCS &nbsp;
                    </label>
                    <label>
                      <input type="checkbox" name="Defensive" id="cek_11" value="Defensive Driving">
                      Defensive Driving &nbsp;
                    </label>
                  </div>
                     </div>
                    <div class="form-group">
                    <label>Masuka Lokasi Site</label>
                         <input type="text" name="location" class="form-control" placeholder="Location" required>
                     </div>
                    <div class="form-group">
                    <label>Masukan Point Of Hire</label>
                         <input type="text" name="poh" class="form-control" placeholder="Point Of Hire" required>
                     </div>
                    <div class="form-group">
                    <label>Masukan Durasi Project</label>
                         <input type="text" name="duration" class="form-control" placeholder="Duration" required>
                     </div>
                    <div class="form-group">
                    <label>Masukan Work Schedule</label>
                         <input type="text" name="work_schedule" class="form-control" placeholder="Work Schedule" required>
                     </div>
                     <div class="form-group">
                     <label>Masukan Rate Benefit</label>
                         <input type="text" name="rt_bef" class="form-control" placeholder="Rate Fee And Benefit" required>
                     </div>
                    <div class="form-group">
                    <label>Masukan Tujuannya</label>
                         <input type="text" name="purpose" class="form-control" placeholder="Purpose" required>
                     </div>
                      <div class="form-group">
                      <label>Kapan akan dikirim ke Site</label>
                         <input type="text" id="to_site_date1" name="to_site_date" class="form-control" placeholder="To Site Date" required>
                     </div>
                      <div class="form-group">
                      <label>Kapan akan Mulai Kerja</label>
                         <input type="text" id="on_duty_date2" name="on_duty_date" class="form-control" placeholder="On Duty Date" required>
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
    <form id="add-row-form" action="<?php echo site_url('recruitment/delete_detail');?>" method="post">
       <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
                 </div>
                 <div class="modal-body">
                         <input type="hidden" name="id_main" class="form-control" required>
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
   <input type="text" id="test" value="<?php echo $test; ?>">
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
 
      var test = $('#test').val();
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
              ajax: {"url": "<?php echo base_url().'index.php/Recruitment/get_product_detail_json/'?>" + test, "type": "POST"},
                    columns: [
                                                {"data": "client_v","searchable": false},
                                                {"data": "position","visible": false},

                                                {"data": "jml_person"},
                                                //render number format for price
                                                // {"data": "product_price", render: $.fn.dataTable.render.number(',', '.', '')},
                                                {"data": "exprience"},
                                                {"data": "qualification"},
                                                {"data": "location"},
                                                {"data": "poh"},
                                                {"data": "duration"},
                                                {"data": "work_schedule"},
                                                {"data": "ratefee_benef"},
                                                {"data": "purpose"},
                                                {"data": "to_site_date"},
                                                {"data": "on_duty_date"},

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
            $('#mytable').on('click','.edit_record',function(e){
                $('#ModalUpdate').modal('show');

            code=$(this).data('code');

            $.ajax({
                url: '<?php echo base_url()?>index.php/recruitment/edit_detail/' + code,
                success: function (data) {
                    date1 = data.to_site_date.split("-").reverse().join("/");
                    date2 = data.on_duty_date.split("-").reverse().join("/");
                    data3 = data.qualification.split(",");
                    // alert(data.qualification);
                    // alert(data3.length);
                    for (var j = 0; j < data3.length; j++) {
                        // alert(j);    
                    // $('input[name=cek^[value=' + data3[j] + ']').attr('checked','checked');
                    if( $('#cek_'+j).val() == (data3[j]) ) {
                        $('#cek_'+j).attr("checked", true);
                    } else {
                        $('#cek_'+j).attr("checked", false);
                    }
                    // alert( $('#cek_'+j).val() );
                    // alert(data3[j]);
                    }
                    $("input[name='detail']").val(data.detail_id);
                    $("input[name='id_main']").val(data.id_main);
                    $("input[name='position']").val(data.position);
                    $("input[name='jml_person']").val(data.jml_person);
                    // $("input[name='qualification']").val(data.qualification);
                    $("input[name='location']").val(data.location);
                    $("input[name='poh']").val(data.poh);
                    $("input[name='duration']").val(data.duration);
                    $("input[name='work_schedule']").val(data.work_schedule);
                    $("input[name='rt_bef']").val(data.ratefee_benef);
                    $("input[name='purpose']").val(data.purpose);
                    $("input[name='to_site_date']").val(data.to_site_date);
                    $("input[name='on_duty_date']").val( data.on_duty_date);
                    $("input[name='exp']").val( data.exprience);


                    // $("textarea[name='alamat']").val(data.alamat);
                }
            });

            // var id_main=$(this).data('id_main');
            

                    //     var position=$(this).data('position');
                    //     var jml_person=$(this).data('jml_person');
                    //     var qualification=$(this).data('qualification');
                    //     var location=$(this).data('location');
                    //     var poh=$(this).data('poh');
                    //     var duration=$(this).data('duration');
                    //     var work_schedule=$(this).data('schedule');
                    //     var rt_bef=$(this).data('rate');
                    //     var purpose=$(this).data('purpose');
                    //     var site=$(this).data('to_site');
                    //     var duty=$(this).data('duty_date');
                    // alert(purpose);

                        // date1 = site.split("-").reverse().join("/");
                        // date2 = duty.split("-").reverse().join("/");

// alert(date);
            // $('[name="id_main"]').val(code);
            // $('[name="detail"]').val(id_main);

            //             $('[name="position"]').val(position);
            //             $('[name="jml_person"]').val(jml_person);
            //             $('[name="qualification"]').val(qualification);
            //             $('[name="location"]').val(location);
            //             $('[name="poh"]').val(poh);
            //             $('[name="duration"]').val(duration);
            //             $('[name="work_schedule"]').val(work_schedule);
            //             $('[name="rt_bef"]').val(rt_bef);
            //             $('[name="purpose"]').val(purpose);
            //             $('[name="to_site_date"]').val(date1);
            //             $('[name="on_duty_date"]').val(date2);



      });
            // End Edit Records
            // get delete Records
            $('#mytable').on('click','.delete_record',function(){
            var code=$(this).data('code');
            var id_main=$(this).data('position');
            $('#ModalDelete').modal('show');
            $('[name="product_code"]').val(code);
            $('[name="id_main"]').val(test);

            
      });
            // End delete Records


            $('#to_site_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
                })

            $('#on_duty_date').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
                })

            $('#to_site_date1').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
                })

            $('#on_duty_date2').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
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