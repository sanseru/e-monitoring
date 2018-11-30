<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client_d extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */


    function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if(!$this->ion_auth->logged_in()){
            $url=base_url();
            redirect($url);
        }
         // $this->load->library('datatables'); //load library ignited-dataTable
      $this->load->model('MClient_d'); //load model crud_model
  }

public function getClientSyncSAP(){
        $client = $this->MClient_d->getBusinessPartner();
        return $client;
    }


}
