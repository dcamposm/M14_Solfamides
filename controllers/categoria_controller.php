<?php
class CategeoriaController {
    public function index() {
        // Guardamos todos los posts en una variable
        $cats = Categoria::all();
        require_once('views/categoria/index.php');
    }
    
    public function show() {
        if (!isset($_GET['id'])) {
            return call('pages', 'error');
        }

        $cat = Categoria::find($_GET['id']);
        //$categoria = $post->id_categoria;
        require_once('views/categoria/show.php');
    }
    
    public function formCreate() {
        $sub_cat = Categoria::findSub();
        
        require_once('views/categoria/formInsert.php');
    }

    public function create() {
        if (!isset($_POST['author'])){
            return call('pages', 'error');
        }

        $image=!empty($_FILES["image"]["author"])
            ? sha1_file($_FILES['image']['tmp_author']) . "-" . basename($_FILES["image"]["author"]) : "";

        Post::insert($_POST['author'], $_POST['content'], $_POST['titol'], $image);

        require_once('views/posts/formInsert.php');
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
}