<?php
    require_once APP_ROOT.'/tlunews/services/CategoryService.php';
    class HomeController{
        public function index(){
            $categoryService = new CategoryService();
            $category = $categoryService->loadCategories();

            // Truyền biến sang view
            include APP_ROOT.'/tlunews/views/home/index.php';

        }
    }