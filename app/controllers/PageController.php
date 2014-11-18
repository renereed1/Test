<?php

namespace Salestream\Controller;

use Salestream\Framework\Controller\Controller;

class PageController extends Controller
{
    public function contactAction()
    {
        return 'contact';
    }
    
    public function aboutAction()
    {
        return 'about';
    }
}