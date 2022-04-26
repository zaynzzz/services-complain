<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Perbaikan extends BaseController
{
    public function index()
    {
        $data['conf'] = $this->listing;
        $data['contents'] = "perbaikan/index";
        $data['perbaikan'] = $this->perbaikan->getData();
        return view('Layout/template', $data);
    }
}
