<?php
    require_once '../models/News.php';

    class HomeController{
        private $newsModel;
        private $newsPerPage = 4;

        public function __construct($db){
            $this->newsModel = new News($db);
        }

        public function index($page = 1){
            $totalNews = $this->newsModel->getTotalNews();
            $totalPages = ceil($totalNews / $this->newsPerPage);
            $offset = ($page - 1) * $this->newsPerPage;
            $lastNews = $this->newsModel->getLastNews();

            $data = [
                'title' => 'Новости',
                'newsForPage' => $this->newsModel->getAllNews($this->newsPerPage, $offset),
                'currentPage' => $page,
                'totalPages' => $totalPages,
                'lastNews' => $lastNews
            ];

            require '../views/components/header.php';
            require '../views/home.php';
            require '../views/components/footer.php';
        }
    }
?>