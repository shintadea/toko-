<?php

class pembelian_model
{
    private $table = 'pembelian'; // tabel yang digunakan
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPembelian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function detail($IdPembelian)
    {
        $this->db->query('SELECT * FROM pembelian JOIN Pengguna on Pengguna.IdPengguna = Pembelian.IdPengguna WHERE IdPembelian =:IdPembelian');
        $this->db->bind('IdPembelian', $IdPembelian);
        return $this->db->single();
    }

    public function tambahPembelian($data)
    {
        $query = "INSERT INTO pembelian VALUES (0, :JumlahPembelian, :HargaBeli, :IdPengguna) ";

        $this->db->query($query);

        $this->db->bind('JumlahPembelian', $data['JumlahPembelian']);
        $this->db->bind('HargaBeli', $data['HargaBeli']);
        $this->db->bind('IdPengguna', $data['IdPengguna']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updatePembelian($data)
    {
        $query = "UPDATE pembelian SET 
        JumlahPembelian = :JumlahPembelian,
        HargaBeli = :HargaBeli,
        IdPengguna = :IdPengguna
        WHERE IdPembelian = :IdPembelian";

        $this->db->query($query);

        $this->db->bind('JumlahPembelian', $data['JumlahPembelian']);
        $this->db->bind('HargaBeli', $data['HargaBeli']);
        $this->db->bind('IdPengguna', $data['IdPengguna']);
        $this->db->bind('IdPembelian', $data['IdPembelian']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusPembelian($IdPembelian)
    {
        $query = "DELETE FROM pembelian WHERE IdPembelian = :IdPembelian";
        $this->db->query($query);
        $this->db->bind('IdPembelian', $IdPembelian);

        $this->db->execute();

        return $this->db->rowCount();
    }
}