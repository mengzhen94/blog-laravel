<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        return view('pages.welcome');
    }

    public function getAbout() {
        $first = "Mengzhen";
        $last  = "Gao";
        $full = $first . " " . $last;
        $data = [];
        $data["fullname"] = $full;
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');
    }


}