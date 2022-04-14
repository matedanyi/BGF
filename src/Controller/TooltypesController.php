<?php
// src/Controller/ArticlesController.php

namespace App\Controller;

class TooltypesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $boardgames = $this->Paginator->paginate($this->Boardgames->find());
        $this->set(compact('boardgames'));
    }
}
