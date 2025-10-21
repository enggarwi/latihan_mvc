<?php
require_once "model/Buku.php";
require_once "view/BukuView.php";

class BukuController {
    public function index() {
        $model = new Buku();
        $bukuList = $model->getAllBuku();
        $view = new BukuView();
        $view->tampilkan($bukuList);
    }
}
