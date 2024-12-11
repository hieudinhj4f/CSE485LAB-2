<?php
    require_once APP_ROOT.'/tlunews/services/CategoryService.php';
    require_once APP_ROOT.'/tlunews/services/NewsService.php';
    class HomeController{
        public function index(){
            $categoryService = new CategoryService();
            $category = $categoryService->loadCategories();

            $newsService = new NewsService();
            $news = $newsService->loadNewsTile();

            // Truyền biến sang view
            include APP_ROOT.'/tlunews/views/home/index.php';

        }

    }