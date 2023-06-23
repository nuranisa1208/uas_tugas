<?php namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa1 extends Model
{ 
    public function getmahasiswa1()
    {
        $query =" SELECT sks,matkul from tb_matkul ORDER BY sks ASC";
    
    $query=$this->db->query($query);

    return $query->getResultArray();
    }
    

}

?>