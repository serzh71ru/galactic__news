<?php

class News {
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getNews($id){
        $query = "SELECT * FROM news WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function getAllNews($limit = 4, $offset = 0){
        $query = "SELECT * FROM news ORDER BY date DESC LIMIT :limit OFFSET :offset";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getLastNews(){
        $query = "SELECT * FROM news ORDER BY date DESC LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getTotalNews(){
        $query = "SELECT COUNT(*) FROM news";
        $stmt = $this->db->query($query);
        return $stmt->fetchColumn();
    }
}