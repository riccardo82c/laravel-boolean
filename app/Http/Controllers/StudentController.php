<?php

namespace App\Http\Controllers;

class StudentController extends Controller {

    /* variabile inizializzata qui per poi essere richiamata all'interno dei metodi */
    protected $studentiDb;

    /* qui la variabile viene impostata all'array in db-studenti per poi essere usata all'interno degli altri metodi senza essere nuovamente ricreata*/
    public function __construct() {
        $this->studentiDb = config('db-studenti');
    }

    /* vista di tutti gli studenti */
    public function index() {
        $studenti = $this->studentiDb;
        return view('studenti', compact('studenti'));
    }

    /* vista di un singolo studente ricercato tramite {id}*/
    public function show($id) {
        if (!isset($this->studentiDb[$id])) {
            abort(404);
        } else {
            $studenti = $this->studentiDb;
            $studente = $this->studentiDb[$id];

            /* aggiunta alla vista della variabili studenti per creare il dropdown studenti */
            return view('show', compact('studenti', 'studente'));
        }
    }

    /* vista di un singolo studente ricercato tramite {slug}*/
    public function slug($str) {
        $studenti = $this->studentiDb;
        foreach ($studenti as $elemento) {
            if ($elemento['slug'] == $str) {
                $studente = $elemento;
            }
        }
        if (isset($studente)) {
            /* aggiunta alla vista della variabili studenti per creare il dropdown studenti */
            return view('show', compact('studenti', 'studente'));
        } else {
            abort(404);
        }

    }
}
