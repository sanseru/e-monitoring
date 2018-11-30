<?php
class MClient_d extends CI_Model{

  function __construct(){
    $this->SQLserver = $this->load->database('SQLserver', TRUE);
  }
     public function getBusinessPartner() {
       $sql = "select [CardCode],[CardName],[CardType],[GroupCode]
               ,(select [GroupName] from OCRG where [GroupCode] = OCRD.[GroupCode]) as [GroupName]
               ,[CmpPrivate],[Address],[ZipCode],[MailAddres],[MailZipCod],[Phone1]
               ,[Phone2],[Fax],[CntctPrsn] from OCRD
                         where CardType='C' and CardName is not null AND CardCode != '0'  ORDER BY [CardName] ASC";
       //var_dump($sql);
       $query = $this->SQLserver->query($sql);
       if ($query) {
           // $query = $query->result_array();
           return "ok";
       }
   }
   
   public function getSAPBusinessPartner() {
       $sql = "SELECT [CardCode],[CardName],(SELECT [GroupName] FROM OCRG WHERE [GroupCode] = OCRD.[GroupCode]) as [GroupName] FROM OCRD
                         WHERE CardType='C' AND CardName is not null ORDER BY [CardName] ASC";
       //var_dump($sql);
       $query = $this->SQLserver->query($sql);
       if ($query) {
           $query = $query->result_array();
           return $query;
       }
   }
}