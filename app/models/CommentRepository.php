<?php

namespace Salestream\Model;

interface CommentRepository 
{
    public function save(Comment $comment);
    public function findAll();
    public function find($id);
    public function delete($id);
}
