<?php

include_once ROOT.'/models/News.php';

class NewsController{
    public function actionIndex(){
        $newsList = array();
        $newsList = News::getNewsList();

        echo '<pre>';
        print_r($newsList);
        echo '</pre>';

        return true;
    }
    public function actionView($category, $id){
        $newsItem = array();
        $newsItem = News::getNewsItemDyId($id);

        echo '<pre>';
        print_r($newsItem);
        echo '</pre>';

        echo $category, $id;
        return true;
    }
}