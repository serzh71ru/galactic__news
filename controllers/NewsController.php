<?php
require_once '../models/News.php';

class NewsController{
    private $newsModel;

    public function __construct($db){
        $this->newsModel = new News($db);
    }

    public function show($id){
        $news = $this->newsModel->getNews($id);
        $backUrl = $_SERVER['HTTP_REFERER'] ?? '/public/';
        $breadcrumbs = [
            $news['title'] => false
        ];

        require '../views/components/header.php';
        require '../views/news_view.php';
        require '../views/components/footer.php';
    }
}

?>