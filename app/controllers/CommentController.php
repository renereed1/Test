<?php

namespace Salestream\Controller;

use Salestream\Framework\Controller\Controller;
use Salestream\Model\Comment;
use Salestream\Model\CommentRepositoryImpl;

class CommentController extends Controller
{
    private $commentRepository;
    
    public function __construct()
    {
        parent::__construct();
        $this->commentRepository = new CommentRepositoryImpl();
    }
    
    public function createAction()
    {
        if ($this->isPost())
        {
            $commentArray = $this->getPostData();
        
            if (is_array($commentArray))
            {
                $comment = new Comment($commentArray['name'], $commentArray['comment']);
                $id = $this->commentRepository->save($comment);
                
                $newComment = $this->commentRepository->find($id);
                
                if ($newComment instanceof Comment)
                {
                    echo json_encode(array('id' => $id, 'name' => $newComment->getName(), 'comment' => $newComment->getComment()));
                }
            }
        }
    }
    
    public function deleteAction($id)
    {
        $this->commentRepository->delete($id);
    }
}