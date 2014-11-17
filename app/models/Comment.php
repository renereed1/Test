<?php

namespace Salestream\Model;

class Comment
{
    private $id;
    
    private $name;
    
    private $comment;
    
    public function __construct($name = 'default name', $comment = 'default comment', $id = -1)
    {
        $this->name = $name;
        $this->comment = $comment;
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getComment()
    {
        return $this->comment;
    }
    
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}