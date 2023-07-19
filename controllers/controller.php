<?php
require_once('models/model.php');
require_once 'vendor/autoload.php';



class Controller
{
    public Model $model;
    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates/');
        $this->twig = new \Twig\Environment($loader);
        $this->model = new Model();
    }

    public function displayAll()
    {
        $list = $this->model->getAll();
        echo $this->twig->render('view.html.twig', [
            'list' => $list
        ]);
    }

    public function deleteOne()
    {

    }
}


?>