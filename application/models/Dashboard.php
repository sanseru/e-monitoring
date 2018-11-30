<?php
class Dashboard extends CI_Model{



    function Tampil(){
        $this->db->select('id_employee,e_name,e_status,description,position,location,poh,client,count(es_id_employee) as jumlah');
        $this->db->join('t_rec_main_detail','t_rec_main_detail.detail_id = t_rec_employee.id_position');
        $this->db->join('t_rec_main','t_rec_main.idt_rec_main = t_rec_main_detail.id_main');
        $this->db->join('employee_status','employee_status.es_id_employee = t_rec_employee.id_employee');
        $this->db->group_by('id_employee'); 
        $this->db->order_by('id_employee'); 
        return $this->db->get('t_rec_employee')->result();
      
      }



}