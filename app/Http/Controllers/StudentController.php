<?php

namespace App\Http\Controllers;

class StudentController extends Controller {

    protected $studentiDb;

    public function __construct() {
        $this->studentiDb = config('db-studenti');
    }

    public function index() {

        $studenti = $this->studentiDb;

        return view('studenti', compact('studenti'));
    }

    public function show($id) {

        $studente = $this->studentiDb[$id];

        return view('show', compact('studente'));

    }
}
