<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Irsyadulibad\DataTables\DataTables;

class Keluhan extends BaseController
{

    public function json()
    {
        return  DataTables::use('keluhan')
            ->make(true);
    }
    public function getdata()
    {
        $sql =    $this->keluhan->query('SELECT * FROM keluhan')->getRow();
        return json_encode($sql);
    }
    public function edit($id)
    {
        $sql =    $this->keluhan->query("SELECT idperbaikan,perbaikan,nama_pelanggan,keluhan,penyebab,tindakan,tgl_keluhan,keluhan.tgl_perbaikan,nama_teknisi FROM keluhan
        JOIN `pelanggan` ON keluhan.idpelanggan=`pelanggan`.idpelanggan 
        JOIN teknisi ON keluhan.idteknisi=teknisi.idteknisi
        JOIN perbaikan ON keluhan.idkeluhan=perbaikan.idkeluhan where perbaikan.idperbaikan='$id'")->getRow();
        $data['contents'] = "Keluhan/edit";
        dd($sql);
        $data['edit'] = $sql;
        $data['conf'] = $this->listing;
        return view('Layout/template', $data);
    }
    public function add()
    {
        $data = [
            'idpelanggan' => $this->request->getVar('idpelanggan'),
            'keluhan' =>  $this->request->getVar('keluhan'),
            'penyebab' =>  $this->request->getVar('penyebab'),
            'tindakan' =>  $this->request->getVar('tindakan'),
            'tgl_keluhan' =>  $this->request->getVar('tgl_keluhan'),
            'tgl_perbaikan' =>  $this->request->getVar('tgl_perbaikan'),
            'idteknisi' =>  $this->request->getVar('idteknisi'),
        ];
        $this->keluhan->insert($data);
        return redirect()->back();
    }
    public function index()
    {
        $data['conf'] = $this->listing;
        $data['contents'] = "Keluhan/index";
        $data['keluhan'] = $this->keluhan->getData();
        return view('Layout/template', $data);
    }
}
