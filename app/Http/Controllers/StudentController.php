<?php

namespace App\Http\Controllers;

class StudentController extends Controller {
    public function index() {

        $studenti = config('db-studenti');

        /* dd($data); */
        return view('studenti', compact('studenti'));
    }
}
