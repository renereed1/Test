<?php

namespace Salestream\Controller;

use Salestream\Framework\Controller\Controller;
use Salestream\Framework\View\View;

class HomeController extends Controller
{
    public function indexAction()
    {
        return new View('home/index', array(
            'name' => 'Ricky',
            'age'  => '31'
        ));
    }
}