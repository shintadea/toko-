<?php

class supplier_model
{
    private $table = 'supplier'; // tabel yang digunakan
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllSupplier()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function detail($IdSupplier)
    {
        $this->db->query('SELECT * FROM supplier JOIN barang on barang.IdBarang = supplier.IdBarang WHERE IdSupplier =:IdSupplier');
        $this->db->bind('IdSupplier', $IdSupplier);
        return $this->db->single();
    }

    public function tambahSupplier($data)
    {
        $query = "INSERT INTO supplier VALUES (0, :NamaSupplier, :Alamat, :NoSupplier, :IdPengguna, :IdBarang) ";

        $this->db->query($query);

        $this->db->bind('NamaSupplier', $data['NamaSupplier']);
        $this->db->bind('Alamat', $data['Alamat']);
        $this->db->bind('NoSupplier', $data['NoSupplier']);
        $this->db->bind('IdPengguna', $data['IdPengguna']);
        $this->db->bind('IdBarang', $data['IdBarang']);
        

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateSupplier($data)
    {
        $query = "UPDATE supplier SET 
        NamaSupplier = :NamaSupplier,
        Alamat = :Alamat,
        NoSupplier = :NoSupplier,
        IdPengguna = :IdPengguna,
        IdBarang = :IdBarang
        WHERE IdSupplier = :IdSupplier";

        $this->db->query($query);

        $this->db->bind('NamaSupplier', $data['NamaSupplier']);
        $this->db->bind('Alamat', $data['Alamat']);
        $this->db->bind('NoSupplier', $data['NoSupplier']);
        $this->db->bind('IdPengguna', $data['IdPengguna']);
        $this->db->bind('IdBarang', $data['IdBarang']);
        $this->db->bind('IdSupplier', $data['IdSupplier']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusSupplier($IdSupplier)
    {
        $query = "DELETE FROM supplier WHERE IdSupplier = :IdSupplier";
        $this->db->query($query);
        $this->db->bind('IdSupplier', $IdSupplier);

        $this->db->execute();

        return $this->db->rowCount();
    }
}