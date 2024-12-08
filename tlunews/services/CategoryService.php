<?php
require_once APP_ROOT.'/tlunews/models/Category.php';
    class CategoryService{
        public function loadCategories() {
            try {
                //Ket noi data
                require_once 'config/config.php';
                require_once APP_ROOT.'/tlunews/data/Data.php';
                $data = new Data();
                $conn = $data->getConnection();
                //
                $sql = 'Select * from categories';
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                //fill data
                $categories = [];
                while ($row = $stmt->fetch()) {
                    $category = new Category($row['id'], $row['name']);
                    $categories[] = $category;
                }

                return $categories;
            }catch (Exception $e) {
                return $categories = [];
            }
        }
    }