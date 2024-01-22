<?php

namespace App\Controllers;
use CodeIgniter\Session\Session;

class Home extends BaseController
{
    protected $session;

    public function __construct()
    {

        $session = session();
        

    }
    
    public function index()
    {
        $header_data = [
            'title' => 'E-tours | Acasa',
            'description' => 'E-tours Luxury Estate Tours Romania',
            'keywords' => 'Apartamente de Vanzare, Case de Vanzare, Inchirieri, Tururi virtuale, Agentii Imobiliare, Apartamente Timisoara, Photo/video 360, AR, Virtual Reality Timisoara',
            // ... Other dynamic data
        ];
        echo view('frontwebsite/partials/header', $header_data);
        return view('frontwebsite/home');
    }
    public function services()
    {
        return view('frontwebsite/services');

    }
    public function order_tours()
    {
        return view('frontwebsite/order_tours');

    }
    public function ar_vr()
    {
        return view('frontwebsite/ar_vr');

    }
    public function for_agencies()
    {
        return view('frontwebsite/for_agencies');

    }
    public function for_hotels()
    {
        return view('frontwebsite/for_hotels');

    }
    public function for_airbnb()
    {
        return view('frontwebsite/for_airbnb');

    }
    public function tour_price_calculator()
    {
        return view('frontwebsite/tour_price_calculator');

    }
    public function contact_sales()
    {
        return view('frontwebsite/contact_sales');

    }
}
