<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller
{
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    
    
    function __construct()
    {
        parent::__construct();
        //validasi jika user belum login
        if (!$this->ion_auth->logged_in()) {
            $url = base_url();
            redirect($url);
        }
        $this->load->library('datatables'); //load library ignited-dataTable
        $this->load->model('Hcbs'); //load model crud_model
    }
    
    
    public function index()
    {
        $data = array(
            
            'user' => $this->ion_auth->user()->row()
            
            
        );
        $this->load->view('elements/header', $data);
        $this->load->view('elements/sidebar');
        $this->load->view('hcbs/main');
        $this->load->view('elements/footer');
        $this->load->view('hcbs/script');
        
    }
    
    function get_product_json() //get product data and encode to be JSON object
    {
        header('Content-Type: application/json');
        echo $this->Hcbs->get_all_product();
    }
    
    function save() //insert record method
    {
        $this->Hcbs->insert_product();
        redirect('Recruitment');
    }
    
    function update() //update record method
    {
        $this->Hcbs->update_product();
        redirect('Recruitment');
    }
    
    function delete() //delete record method
    {
        $this->Hcbs->delete_product();
        redirect('Recruitment');
    }
    
    public function detail_perclient()
    {
        $id['test'] = $this->uri->segment(3);

        $data       = array(
            
            'user' => $this->ion_auth->user()->row(),
            'ambil_data'=>$this->Hcbs->TampilData('t_rec_main', $id['test']),

            
        );
        $id['test'] = $this->uri->segment(3);

        $this->load->view('elements/header', $data);
        $this->load->view('elements/sidebar');
        $this->load->view('detail_recruitment/main_d');
        $this->load->view('elements/footer');
        $this->load->view('detail_recruitment/script', $id);
        
    }
    
    function get_product_detail_json($id) //get product data and encode to be JSON object
    {
        header('Content-Type: application/json');
        echo $this->Hcbs->get_all_product_detail($id);
    }
    
    function save_detail() //insert record method
    {
        $id_back = $this->input->post('id_main');
        $atls = (isset($_POST['ATLS'])) ? $_POST['ATLS'] : "";
        $hiperkes = (isset($_POST['HIPERKES'])) ? $_POST['HIPERKES'] : "";
        $huet = (isset($_POST['HUET'])) ? $_POST['HUET'] : "";
        $bss = (isset($_POST['BSS'])) ? $_POST['BSS'] : "";
        $bosiet = (isset($_POST['T-BOSIET'])) ? $_POST['T-BOSIET'] : "";
        $btcls = (isset($_POST['BTCLS'])) ? $_POST['BTCLS'] : "";
        $back = (isset($_POST['BACKGROUNDCHECK'])) ? $_POST['BACKGROUNDCHECK'] : "";
        $h2s = (isset($_POST['H2S'])) ? $_POST['H2S'] : "";
        $hse = (isset($_POST['HSE'])) ? $_POST['HSE'] : "";
        $english = (isset($_POST['English'])) ? $_POST['English'] : "";
        $drive = (isset($_POST['Driving'])) ? $_POST['Driving'] : "";
        $defen = (isset($_POST['Defensive'])) ? $_POST['Defensive'] : "";



$hasil = array($atls,$hiperkes,$huet,$bss,$bosiet,$btcls,$back,$h2s,$hse,$english,$drive,$defen);
$josn = json_encode($hasil);
$this->Hcbs->insert_product_detail($josn);
        redirect('Recruitment/detail_perclient/' . $id_back);
    }
    
    function edit_detail()
    {
        $id = $this->uri->segment(3);
        $e = $this->db->where('detail_id', $id)->get('t_rec_main_detail')->row();
        $kirim['detail_id'] = $e->detail_id;
        $kirim['id_main'] = $e->id_main;
        $kirim['position'] = $e->position;
        $kirim['jml_person'] = $e->jml_person;
        $kirim['qualification'] = $e->qualification;
        $kirim['location'] = $e->location;
        $kirim['poh'] = $e->poh;
        $kirim['duration'] = $e->duration;
        $kirim['work_schedule'] = $e->work_schedule;
        $kirim['ratefee_benef'] = $e->ratefee_benef;
        $kirim['purpose'] = $e->purpose;
        $kirim['to_site_date'] = $e->to_site_date;
        $kirim['on_duty_date'] = $e->on_duty_date;
        $kirim['exprience'] = $e->exprience;
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($kirim));


    }

    function update_detail() //update record method
    {
        $id_back = $this->input->post('id_main');

        $atls = (isset($_POST['ATLS'])) ? $_POST['ATLS'] : "";
        $hiperkes = (isset($_POST['HIPERKES'])) ? $_POST['HIPERKES'] : "";
        $huet = (isset($_POST['HUET'])) ? $_POST['HUET'] : "";
        $bss = (isset($_POST['BSS'])) ? $_POST['BSS'] : "";
        $bosiet = (isset($_POST['T-BOSIET'])) ? $_POST['T-BOSIET'] : "";
        $btcls = (isset($_POST['BTCLS'])) ? $_POST['BTCLS'] : "";
        $back = (isset($_POST['BACKGROUNDCHECK'])) ? $_POST['BACKGROUNDCHECK'] : "";
        $h2s = (isset($_POST['H2S'])) ? $_POST['H2S'] : "";
        $hse = (isset($_POST['HSE'])) ? $_POST['HSE'] : "";
        $english = (isset($_POST['English'])) ? $_POST['English'] : "";
        $drive = (isset($_POST['Driving'])) ? $_POST['Driving'] : "";
        $defen = (isset($_POST['Defensive'])) ? $_POST['Defensive'] : "";
        $hasil = array($atls,$hiperkes,$huet,$bss,$bosiet,$btcls,$back,$h2s,$hse,$english,$drive,$defen);
        $josn = json_encode($hasil);

        $this->Hcbs->update_product_detail($josn);
        redirect('Recruitment/detail_perclient/' . $id_back);
    }

    function delete_detail() //delete record method
    {
        $id_back = $this->input->post('id_main');

        $this->Hcbs->delete_product_detail();
        redirect('Recruitment/detail_perclient/'.$id_back);
    }

    function detail_position()
    {
        $id['test'] = $this->uri->segment(3);

        $data = array(
            
            'user' => $this->ion_auth->user()->row(),            
            'ambil_data'=>$this->Hcbs->TampilData_Position('t_rec_main_detail', $id['test']),

        );
        $id['test'] = $this->uri->segment(3);

        $this->load->view('elements/header', $data);
        $this->load->view('elements/sidebar');
        $this->load->view('detail_position/main_p');
        $this->load->view('elements/footer');
        $this->load->view('detail_position/script', $id);
    }
    function get_product_employee_json($id) //get product data and encode to be JSON object
    {
        header('Content-Type: application/json');
        echo $this->Hcbs->get_all_employee_position($id);
    }

    function save_employee() //insert record method
    {
        $id_back = $this->input->post('detail_id');
        
       $insert_e = $this->Hcbs->insert_employee();
        
        $this->Hcbs->insert_employee_status($insert_e);
        redirect('Recruitment/detail_position/' . $id_back);
    }

    function update_employe() //update record method
    {
        $id_back = $this->input->post('detail_id');

        $this->Hcbs->update_product_employe();
        redirect('Recruitment/detail_position/' . $id_back);
    }

    function update_employe_diterima() //update record method
    {
        $id_back = $this->input->post('detail_id');

        $this->Hcbs->update_product_employe_status();
        redirect('Recruitment/detail_position/' . $id_back);
    }

    function delete_employee() //delete record method
    {
        $id_back = $this->input->post('detail_id');

        $this->Hcbs->delete_product_employee();
        redirect('Recruitment/detail_position/'.$id_back);
    }

    function komentar()
    {
        $id = $this->uri->segment(3);

        $coba =  $this->Hcbs->komentar($id);
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($coba));



    }

    function komentar_tl()
    {
        $id= $this->uri->segment(3);
        $result = $this->Hcbs->back_from_komentar($id); 
        $data = array(
            
            'user' => $this->ion_auth->user()->row(),            
            'ambil_data'=>$this->Hcbs->komentar($id),
            'back'=>$result[0]->id_position,
            
        );
        $id_coba['test'] = $this->uri->segment(3);
        $this->load->view('elements/header', $data);
        $this->load->view('elements/sidebar');
        $this->load->view('detail_position/timeline');
        $this->load->view('elements/footer');
        $this->load->view('detail_position/script',$id_coba);
    }

    function save_komentar() //insert record method
    {
        $id_back = $this->input->post('detail_id');
                
        $this->Hcbs->save_komentar_db();
        redirect('Recruitment/komentar_tl/' . $id_back);
    }
}
