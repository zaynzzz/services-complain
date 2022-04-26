<?php

namespace App\Models;

use CodeIgniter\Model;

class Perbaikan extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'perbaikans';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getEdit($id)
    {
        return $this->query("SELECT * FROM perbaikan Where idperbaikan='$id'")->getResult();
    }

    public function getData()
    {
        $query = $this->query('SELECT perbaikan.finished,perbaikan,perbaikan.idkeluhan,nama_pelanggan,keluhan,penyebab,tindakan,tgl_keluhan,perbaikan.tgl_perbaikan,nama_teknisi FROM keluhan
        JOIN `pelanggan` ON keluhan.idpelanggan=`pelanggan`.idpelanggan 
        JOIN teknisi ON keluhan.idteknisi=teknisi.idteknisi 
        JOIN perbaikan ON keluhan.idkeluhan = perbaikan.idkeluhan WHERE perbaikan.finished = 1');

        return $query->getResult();
    }

    public function count()
    {
        $query = $this->query('SELECT * FROM keluhan');

        return $query->getNumRows();
    }
}
