<?php
class CatgeoriaController {
    public function index() {
        // Guardamos todos los posts en una variable
        $cats = Categoria::all();
        require_once('views/categoria/index.php');
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
}