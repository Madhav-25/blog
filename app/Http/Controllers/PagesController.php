<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex() {

    }

    public function getAbout() {

        $data = [];
        $data['first'] = 'first';
        $data['last'] = 'last';
        $data['fullname'] = $data['first']." ".$data['last'];
        $data['email'] = 'firstlast@gmail.com';
        return view('pages.about')->withData($data);
    }

    public function getContact() {

    }

    public function postContact() {

    }
}