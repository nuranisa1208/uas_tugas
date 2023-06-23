<?php namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa2 extends Model
{ 
    public function getmahasiswa2()
    {
        $query =" SELECT tb_mahasiswa.jk, count(*) as jumlah, tb_matkul.matkul,tb_mahasiswa.status FROM tb_mahasiswa LEFT JOIN tb_matkul ON Tb_mahasiswa.id_matkul = tb_matkul.id_matkul GROUP BY tb_mahasiswa.jk,tb_matkul.matkul,tb_mahasiswa.status ORDER BY tb_mahasiswa.jk ASC,Tb_mahasiswa.status ASC,tb_matkul.matkul DESC;";
    
    $query=$this->db->query($query);

    return $query->getResultArray();
    }
    

}

?>