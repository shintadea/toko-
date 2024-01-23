<?php

class barang_model {
    private $table = 'barang';
    private $db; 

    public function __construct()
    {
        $this->db = new Database;
    }
        
        public function getAllBarang()
        {
         $this->db->query('SELECT * FROM ' .$this->table);
         return $this->db->resultSet();
        }

        public function getBarangById($IdBarang)
        {
            $this->db->query('SELECT * FROM Barang JOIN Pengguna on Pengguna.IdPengguna = Barang.IdPengguna WHERE IdBarang =:IdBarang');
            $this->db->bind('IdBarang', $IdBarang);
            return $this->db->single();
        }

public function tambahBarang($data)
{
    $query = "INSERT INTO barang
    VALUES
    ('', :NamaBarang, :Keterangan, :Satuan, :IdPengguna)";

    $this->db->query($query);
    $this->db->bind('NamaBarang', $data['NamaBarang']);
    $this->db->bind('Keterangan', $data['Keterangan']);
    $this->db->bind('Satuan', $data['Satuan']);
    $this->db->bind('IdPengguna', $data['IdPengguna']);

    $this->db->execute();

    return $this->db->rowCount();
}

public function hapusBarang($IdBarang)
{
    $query = "DELETE FROM barang WHERE IdBarang = :IdBarang";
    
    $this->db->query($query);
    $this->db->bind('IdBarang', $IdBarang);

    $this->db->execute();

    return $this->db->rowCount();
}

public function ubahBarang($data)
{
    $query = "UPDATE barang SET 
    NamaBarang = :NamaBarang,
    Keterangan = :Keterangan,
    Satuan = :Satuan,
    IdPengguna = :IdPengguna
    WHERE IdBarang = :IdBarang";

    $this->db->query($query);

    $this->db->bind('NamaBarang', $data['NamaBarang']);
    $this->db->bind('Keterangan', $data['Keterangan']);
    $this->db->bind('Satuan', $data['Satuan']);
    $this->db->bind('IdPengguna', $data['IdPengguna']);
    $this->db->bind('IdBarang', $data['IdBarang']);

    $this->db->execute();

    return $this->db->rowCount();
}
    }
