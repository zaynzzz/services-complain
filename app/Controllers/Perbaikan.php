<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Perbaikan extends BaseController
{
    public function index()
    {
        $data['conf'] = $this->listing;
        $data['contents'] = "perbaikan/index";
        $data['keluhan'] = $this->keluhan->getData();
        return view('Layout/template', $data);
    }
}
