<?php

require_once APP_ROOT . '/tlunews/models/News.php';

class NewsService{
    public function loadNewsTile()
    {
        try{
            //Ket noi data
            require_once 'config/config.php';
            require_once APP_ROOT . '/tlunews/data/Data.php';
            $data = new Data();
            $conn = $data->getConnection();
            //
            $sql = 'Select * from news';
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            //fill data
            $newss = [];
            while ($row = $stmt->fetch()) {
                $news = new News($row['id'], $row['title'], $row['content'],$row['image'],$row['created_at'],);
                $newss[] = $news;
            }

            return $newss;
        } catch (Exception $e) {
            return $newss = [];
        }
    }
}