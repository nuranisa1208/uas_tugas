<?php namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{ 
    public function getmahasiswa()
    {
        $query =" SELECT tb_mahasiswa.jk, Count(*) as jumlah, tb_matkul.matkul FROM tb_mahasiswa LEFT JOIN tb_matkul on tb_matkul.id_matkul = tb_mahasiswa.id_matkul GROUP BY tb_mahasiswa.jk, tb_matkul.matkul ORDER BY tb_mahasiswa.jk asc, tb_matkul.matkul desc";
    
    $query=$this->db->query($query);

    return $query->getResultArray();
    }
    

}

?>