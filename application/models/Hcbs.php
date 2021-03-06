<?php
class Hcbs extends CI_Model{



  function TampilData($table,$id)
  {
      // $this->db->join('spesialist', 'spesialist.id_sp = db_dokter.spesialist');
    $this->datatables->where('idt_rec_main', $id);
     return $this->db->get($table)->result();
  }


  //get all categories method
  function get_category(){
      $result=$this->db->get('categories');
      return $result;
  }
  //generate dataTable serverside method
  function get_all_product() {
      $this->datatables->select('a.idt_rec_main,a.client,a.project_priod,a.project_priod_end,a.pic_market,a.pic_medsite,a.created_by,b.username');
      $this->datatables->from('t_rec_main a');
      $this->datatables->join('users b', 'a.created_by=b.id','left');
      $this->datatables->edit_column('client_v', '<a href="recruitment/detail_perclient/$1">$2</a>', 'idt_rec_main, client');
      $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-code="$1" data-client="$2" data-priod="$3" data-market="$4" data-medsit="$5" data-priod_end="$6"><i class="fa fa-pencil"></i></a>  <a href="javascript:void(0);" class="delete_record btn btn-danger btn-xs" data-code="$1"><i class="fa fa-trash"></i></a>','idt_rec_main,client,project_priod,pic_market,pic_medsite,project_priod_end');
      return $this->datatables->generate();
  }
  //insert data method
  function insert_product(){
        date_default_timezone_set('Asia/Jakarta');
        $now = date('y-m-d H:i:s');
        $cdate_start = date('Y-m-d', strtotime($this->input->post('project_priod_start')));
        $cdate_end = date('Y-m-d', strtotime($this->input->post('project_priod_end')));

      $data=array(
        'client'        => $this->input->post('client'),
        'project_priod'        => $cdate_start,
        'project_priod_end'        => $cdate_end,
        'pic_market'       => $this->input->post('pic_market'),
        'pic_medsite' => $this->input->post('pic_medsite'),
        'created_by' => $this->ion_auth->user()->row()->id,
        'created_date' => $now,

      );
      $result=$this->db->insert('t_rec_main', $data);
      return $result;
  }


  //update data method
  function update_product(){
            $cdate = date('Y-m-d', strtotime($this->input->post('project_priod_start')));
            $cdate_end = date('Y-m-d', strtotime($this->input->post('project_priod_end')));

      $product_code=$this->input->post('id_d');
      $data=array(
        'client'        => $this->input->post('client'),
        'project_priod'        => $cdate,
        'project_priod_end'        => $cdate_end,
        'pic_market'       => $this->input->post('pic_market'),
        'pic_medsite' => $this->input->post('pic_medsite'),
        'modify_by' => $this->ion_auth->user()->row()->id,
        'modify_date' => $now,
      );
      $this->db->where('idt_rec_main',$product_code);
      $result=$this->db->update('t_rec_main', $data);
      return $result;
  }

  //delete data method
  function delete_product(){
      $product_code=$this->input->post('product_code');
      $this->db->where('idt_rec_main',$product_code);
      $result=$this->db->delete('t_rec_main');
      return $result;
  }

    function get_all_product_detail($test) {

          // $id = $this->uri->segment(3);

      $this->datatables->select('a.detail_id,a.id_main,a.exprience,a.position,a.jml_person,a.location,a.created_by,b.username,a.qualification,a.poh,a.duration,a.work_schedule,a.work_schedule_2,a.ratefee_benef,a.ratefee_benef_2,a.purpose,a.to_site_date,a.on_duty_date,a.other');
      $this->datatables->from('t_rec_main_detail a');
      $this->datatables->join('users b', 'a.created_by=b.id','left');
      $this->datatables->where('id_main', $test);
      $this->datatables->edit_column('client_v', '<button type="button" class="btn btn-block btn-info"><a id="link" href="../detail_position/$1"><b>$2</b></a></button>', 'detail_id, position');
      $this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-code="$1" data-id_main="$2" data-position="$3" data-jml_person="$4" data-location="$5" data-qualification="$6" data-poh="$7" data-duration="$8" data-schedule="$9" data-rate="$10" data-purpose="$11" data-site="$12" data-date="$13"><i class="fa fa-pencil"></i></a>  <a href="javascript:void(0);" class="delete_record btn btn-danger btn-xs" data-code="$1"><i class="fa fa-trash"></i></a>','detail_id,id_main,position,jml_person,location,qualification,poh,duration,work_schedule,ratefee_benef,purpose,to_site_date,on_duty_date,exprience');
      return $this->datatables->generate();
  }
    //insert data method
    function insert_product_detail($cekaja){
      date_default_timezone_set('Asia/Jakarta');
      $now = date('y-m-d H:i:s');
      $cdate1 = date('Y-m-d', strtotime($this->input->post('to_site_date')));
      $cdate2 = date('Y-m-d', strtotime($this->input->post('on_duty_date')));
      $check = $this->input->post('cek');
    $hasil = str_replace(array('[',']','"'),array('','',''),$cekaja);
    $data=array(
      'id_main'        => $this->input->post('id_main'),
      'position'        => $this->input->post('position'),
      'jml_person'       => $this->input->post('jml_person'),
      'exprience' => $this->input->post('exp'),
      'qualification'=>$hasil,
      'other' => $this->input->post('other'),
      'location' => $this->input->post('location'),
      'poh' => $this->input->post('poh'),
      'duration' => $this->input->post('duration'),
      'work_schedule' => $this->input->post('work_schedule'),
      'work_schedule_2' => $this->input->post('work_schedule_2'),
      'ratefee_benef' => $this->input->post('rt_bef'),
      'ratefee_benef_2' => $this->input->post('rt_bef_2'),
      'purpose' => $this->input->post('purpose'),
      'to_site_date' => $cdate1,
      'on_duty_date' => $cdate2,
      'created_by' => $this->ion_auth->user()->row()->id,
      'created_date' => $now,

    );
    $result=$this->db->insert('t_rec_main_detail', $data);
    return $result;
}
    //update data method
    function update_product_detail($hasil_update){
      date_default_timezone_set('Asia/Jakarta');
      $now = date('y-m-d H:i:s');
      $cdate1 = date('Y-m-d', strtotime($this->input->post('to_site_date')));
      $cdate2 = date('Y-m-d', strtotime($this->input->post('on_duty_date')));
      $id_main = $this->input->post('detail');
      $hasil = str_replace(array('[',']','"'),array('','',''),$hasil_update);

      $data=array(
  'position'        => $this->input->post('position'),
  'jml_person'       => $this->input->post('jml_person'),
  'exprience' => $this->input->post('exp'),
  'qualification'=>$hasil,
  'location' => $this->input->post('location'),
  'other' => $this->input->post('other'),
  'poh' => $this->input->post('poh'),
  'duration' => $this->input->post('duration'),
  'work_schedule' => $this->input->post('work_schedule'),
  'work_schedule_2' => $this->input->post('work_schedule_2'),
  'ratefee_benef' => $this->input->post('rt_bef'),
  'ratefee_benef_2' => $this->input->post('rt_bef_2'),
  'purpose' => $this->input->post('purpose'),
  'to_site_date' => $cdate1,
  'on_duty_date' => $cdate2,
  'modify_by' => $this->ion_auth->user()->row()->id,
  'modify_date' => $now,
);
$this->db->where('detail_id',$id_main);
$result=$this->db->update('t_rec_main_detail', $data);
return $result;
}
  //delete data method
  function delete_product_detail(){
      $product_code=$this->input->post('product_code');
      $this->db->where('detail_id',$product_code);
      $result=$this->db->delete('t_rec_main_detail');
      return $result;
  }

  function TampilData_Position($table,$id)
  {
    $this->db->join('t_rec_main','t_rec_main.idt_rec_main = t_rec_main_detail.id_main');
    $this->datatables->where('detail_id', $id);
     return $this->db->get($table)->result();
  }

  function get_all_employee_position($id) {

    // $id = $this->uri->segment(3);

$this->datatables->select('a.id_employee,a.id_position,a.e_name,a.is_accept,a.e_status,a.description,a.created_by,a.cv_file,b.username');
$this->datatables->from('t_rec_employee a');
$this->datatables->join('users b', 'a.created_by=b.id','left');
$this->datatables->where('a.id_position', $id);
$this->datatables->edit_column('client_v', '<a href="../komentar_tl/$1" class="comment btn btn-info" data-code="$1" data-id_main="$2" >$2</a>', 'id_employee,e_name');
$this->datatables->add_column('view', '<a href="javascript:void(0);" class="edit_record btn btn-info btn-xs" data-code="$1" data-name="$2" data-status="$3" data-position="$4" ><i class="fa fa-pencil"></i></a> <a href="../komentar_tl/$1" class="komentar btn btn-info btn-xs" data-code="$1" data-id_main="$2" ><i class="fa fa-comment"></i></a>  <a href="javascript:void(0);" class="delete_record btn btn-danger btn-xs" data-code="$1"><i class="fa fa-trash"></i></a> <a href="javascript:void(0);" class="diterima_record btn btn-success btn-xs" data-code="$1" data-name="$2" data-status="$3" data-position="$4" ><i class="fa fa-check"></i></a>','id_employee,e_name,e_status,id_position');
return $this->datatables->generate();
}

  //insert data method
  function insert_employee(){
    date_default_timezone_set('Asia/Jakarta');
    $now = date('y-m-d H:i:s');
    $cdate = date('Y-m-d H:i:s', strtotime($this->input->post('project_priod')));
  $data=array(
    'id_position'        => $this->input->post('detail_id'),
    'e_name'        => $this->input->post('name_e'),
    'e_status'       => $this->input->post('st'),
    'description'       => $this->input->post('description'),
    'cv_file'              =>$this->_uploadFile(),
    // 'photo'              =>$this->_uploadPhoto(),
    'created_by' => $this->ion_auth->user()->row()->id,
    'created_date' => $now,

  );
  $result=$this->db->insert('t_rec_employee', $data);
  return $this->db->insert_id();
}
// function _uploadPhoto()
// {
//     $config['upload_path']          = FCPATH . '/upload/photo/';
//     $config['allowed_types']        = 'gif|jpg|png';
//     $config['file_name']            = uniqid();
//     $config['overwrite']			= true;
//     $config['max_size']             = 7024; // 1MB
//     // $config['max_width']            = 1024;
//     // $config['max_height']           = 768;

//     $this->load->library('upload', $config);

//     if ($this->upload->do_upload('poto')) {
//         return $this->upload->data("file_name");
//     }
    
//     return "";
// }
private function _uploadFile()
{
    $config['upload_path']          = FCPATH . '/upload/';
    $config['allowed_types']        = 'pdf';
    $config['file_name']            = uniqid();
    $config['overwrite']			= true;
    $config['max_size']             = 7024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('cv_file')) {
        return $this->upload->data("file_name");
    }
    
    return "";
}

    //update data method
    function update_product_employe(){
      date_default_timezone_set('Asia/Jakarta');
      $now = date('y-m-d H:i:s');
      $id_main = $this->input->post('id_employee');
      $data=array(
  'e_name'        => $this->input->post('name_e'),
  'e_status'       => $this->input->post('st'),
  'modify_by' => $this->ion_auth->user()->row()->id,
  'modify_date' => $now,
);
$this->db->where('id_employee',$id_main);
$result=$this->db->update('t_rec_employee', $data);
return $result;
}


    //update employee data method
    function update_product_employe_status(){
      date_default_timezone_set('Asia/Jakarta');
      $now = date('y-m-d H:i:s');
      $id_main = $this->input->post('id_employee');
      $product_code=$this->input->post('product_code');
      $data=array(
  'is_accept'        => 1,
);
$this->db->where('id_employee',$product_code);
$result=$this->db->update('t_rec_employee', $data);
return $result;
}

  //delete data method
  function delete_product_employee(){
    $product_code=$this->input->post('product_code');
    $this->db->where('id_employee',$product_code);
    $result=$this->db->delete('t_rec_employee');
    return $result;
}

function insert_employee_status($id){
  date_default_timezone_set('Asia/Jakarta');
  $now = date('y-m-d H:i:s');
  $cdate = date('Y-m-d H:i:s', strtotime($this->input->post('project_priod')));
  $data=array(
  'es_id_employee'        => $id,
  'status_e'       => $this->input->post('status'),
  'created_by' => $this->ion_auth->user()->row()->id,
  'created_date' => $now,

);
$result=$this->db->insert('employee_status', $data);
return $result;
}

function komentar($id){
  $this->db->join('users','users.id = employee_status.created_by');
  $this->db->where('es_id_employee',$id);
  return $this->db->get('employee_status')->result();

}

function back_from_komentar($id){
  $this->db->select('id_position');
  $this->db->where('id_employee',$id);
  return $this->db->get('t_rec_employee')->result();
}

function save_komentar_db(){
  date_default_timezone_set('Asia/Jakarta');
  $now = date('y-m-d H:i:s');
  $data=array(
    'es_id_employee'        => $this->input->post('detail_id'),
    'status_e'       => $this->input->post('komentar'),
    'created_by' => $this->ion_auth->user()->row()->id,
    'created_date' => $now,
  
  );
  $result=$this->db->insert('employee_status', $data);
  return $result;
}


}