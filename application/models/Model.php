<?php

class Model extends CI_model

{
    public function __construct() {
        parent::__construct();
    }


    function vloz_data($data)  
    {  
         $this->db->insert("filmy", $data);  
    }  
    public function vypis_filmy()  
    {  
         $query = $this->db->query("SELECT * FROM filmy ORDER BY id_filmu ASC");  
         return $query->result();  
    }  
    function vymaz_data($id){  
         $this->db->where("id_filmu", $id);  
         $this->db->delete("filmy");   
    }  
    function vypis_jeden_film($id)  
    {  
         $this->db->where("id_filmu", $id);  
         $query = $this->db->get("filmy");  
         return $query;   
    }  
    function uprav_data($data, $id)  
    {  
         $this->db->where("id_filmu", $id);  
         $this->db->update("filmy", $data);  
    }  


    function uprav_data_sal($data, $id)  
    {  
         $this->db->where("id_sal", $id);  
         $this->db->update("sal", $data);  
    }  
    public function vypis_sal()  
    {   
         $query = $this->db->query("SELECT * FROM sal ORDER BY id_sal ASC");  
         return $query->result();  
    }  
    function vloz_data_sal($data)  
    {  
         $this->db->insert("sal", $data);  
    }  
    function vypis_jeden_sal($id)  
    {  
         $this->db->where("id_sal", $id);  
         $query = $this->db->get("sal");   
         return $query; 
    }  

     function vymaz_data_sal($id)
     {  
          $this->db->where("id_sal", $id);  
          $this->db->delete("sal");  
     }  





}

