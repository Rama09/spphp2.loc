<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 30.12.16
 * Time: 13:01
 */

namespace App\Controllers;


use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;

        return $this->$methodName();
    }

    protected function actionIndex()
    {
        $this->view->title = 'Новости';
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionOne()
    {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
    }
}