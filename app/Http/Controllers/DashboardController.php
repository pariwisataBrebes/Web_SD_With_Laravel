<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $views      = 'admin/dashboard/';
    private $url        = 'admin/dashboard/';
    private $title      = 'Dashboard';

    public function index(Request $request) {
        $data = [
            'title'  => $this->title,
            'url'    => $this->url,
            'page'   => $this->title,
        ];

        return view($this->views . 'index', $data);
    }
}