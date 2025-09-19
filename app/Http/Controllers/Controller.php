<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function About()
    {
        $adress = "Улица Мира, дом 15";
        $data = ['name' => 'Оля', 'phone' => '89900000000', 'age' => 25];
        return view('about', compact('adress', 'data'));
    }

    public function Contacts()
    {
        return view('contacts');
    }
}
