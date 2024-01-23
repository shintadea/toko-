<?php

class penjualan_model
{
    private $table = 'penjualan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenjualan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function detail($IdPenjualan)
    {
        $this->db->query('SELECT * FROM Penjualan JOIN Pengguna on Pengguna.IdPengguna = Penjualan.IdPengguna WHERE IdPenjualan =:IdPenjualan');
        $this->db->bind('IdPenjualan', $IdPenjualan);
        return $this->db->single();
    }

    public function tambahPenjualan($data)
    {
        $query = "INSERT INTO Penjualan VALUES (0, :JumlahPenjualan, :HargaJual, :IdPengguna) ";

        $this->db->query($query);

        $this->db->bind('JumlahPenjualan', $data['JumlahPenjualan']);
        $this->db->bind('HargaJual', $data['HargaJual']);
        $this->db->bind('IdPengguna', $data['IdPengguna']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusPenjualan($IdPenjualan)
{
    $query = "DELETE FROM penjualan WHERE IdPenjualan = :IdPenjualan";
    
    $this->db->query($query);
    $this->db->bind('IdPenjualan', $IdPenjualan);

    $this->db->execute();

    return $this->db->rowCount();
}

    public function updatePenjualan($data)
    {
        $query = "UPDATE Penjualan SET 
        JumlahPenjualan = :JumlahPenjualan,
        HargaJual = :HargaJual,
        IdPengguna = :IdPengguna
        WHERE IdPenjualan = :IdPenjualan";

        $this->db->query($query);

        $this->db->bind('JumlahPenjualan', $data['JumlahPenjualan']);
        $this->db->bind('HargaJual', $data['HargaJual']);
        $this->db->bind('IdPengguna', $data['IdPengguna']);
        $this->db->bind('IdPenjualan', $data['IdPenjualan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}