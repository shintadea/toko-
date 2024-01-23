<?php

class hakakses_model {
    private $namaakses = 'Admin';

    public function gethakakses()
    {
        return $this->namaakses;
    }

    private $table = 'hakakses'; // tabel yang digunakan
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllHakAkses()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function detail($IdAkses)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE IdAkses =:IdAkses');
        $this->db->bind('IdAkses', $IdAkses);
        return $this->db->single();
    }

    public function tambahHakAkses($data)
    {
        $query = "INSERT INTO hakakses VALUES (0, :NamaAkses, :Keterangan) ";

        $this->db->query($query);

        $this->db->bind('NamaAkses', $data['NamaAkses']);
        $this->db->bind('Keterangan', $data['Keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateHakAkses($data)
    {
        $query = "UPDATE hakakses SET 
        NamaAkses = :NamaAkses,
        Keterangan = :Keterangan
        WHERE IdAkses = :IdAkses";

        $this->db->query($query);

        $this->db->bind('NamaAkses', $data['NamaAkses']);
        $this->db->bind('Keterangan', $data['Keterangan']);
        $this->db->bind('IdAkses', $data['IdAkses']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusHakAkses($IdAkses)
    {
        $query = "DELETE FROM hakakses WHERE IdAkses = :IdAkses";
        $this->db->query($query);
        $this->db->bind('IdAkses', $IdAkses);

        $this->db->execute();

        return $this->db->rowCount();
    }
}