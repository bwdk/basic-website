<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function getWelcome() {

        return view ('welcome');
    }

    public function getPage() {

        return view ('page');
    }

    public function getAbout() {

        return view ('about');
    }

    public function getContact() {

        return view ('contact');
    }


}
