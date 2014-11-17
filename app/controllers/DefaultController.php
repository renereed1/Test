<?php

namespace Salestream\Controller;

use Salestream\Framework\Controller\Controller;
use Salestream\Model\CommentRepositoryImpl;

class DefaultController extends Controller
{
    private $commentRepository;
    
    public function __construct()
    {
        parent::__construct();
        $this->commentRepository = new CommentRepositoryImpl();
    }
    
    public function indexAction()
    {
        $comments = $this->commentRepository->findAll();
        $this->addAttribute('comments', $comments);
        return 'index';
    }
}