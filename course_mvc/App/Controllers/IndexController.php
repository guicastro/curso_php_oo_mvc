<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 23/12/2017
 * Time: 12:09
 */

namespace App\Controllers;

use SON\Controller\Action;
use SON\DI\Container;

class IndexController extends Action
{

    public function index() {

        $client = Container::getModel("Client");
        $this->view->clients = $client->fetchAll();

        $this->render("index");
    }

    public function contact() {

        $client = Container::getModel("Client");
        $this->view->contacts = $client->find(2);

        $this->render("contact", false);
    }
}