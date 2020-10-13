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

        if (!isset($this->studentiDb[$id])) {

            abort(404);

        } else {

            $studenti = $this->studentiDb;
            $studente = $this->studentiDb[$id];

            return view('show', compact('studenti', 'studente'));
        }

    }
}
