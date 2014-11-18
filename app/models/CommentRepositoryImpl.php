<?php

namespace Salestream\Model;

use Salestream\Framework\DataSource\Database;

class CommentRepositoryImpl extends Database implements CommentRepository
{
    public function __construct()
    {
        parent::__construct(require __DIR__ . '/../config/application.config.php');
    }
    
    public function save(Comment $comment)
    {
        $sql = "INSERT INTO comments (name, comment) VALUES (:name, :comment)";
        $query = $this->getHandler()->prepare($sql);
        $query->execute(array(
            ':name'    => $comment->getName(),
            ':comment' => $comment->getComment()
        ));
        
        return $this->getHandler()->lastInsertId();;
    }
    
    public function findAll()
    {
        $sql = "SELECT * FROM comments ORDER BY id DESC";
        $query = $this->getHandler()->prepare($sql);
        $query->execute();
        $results = $query->fetchAll();
        
        $comments = [];
        foreach ($results as $result)
        {
            $comment = new Comment($result['name'], $result['comment'], $result['id']);
            array_push($comments, $comment);
        }
        return $comments;
    }
    
    public function find($id)
    {
        $sql = "SELECT * FROM comments WHERE id = :id";
        $query = $this->getHandler()->prepare($sql);
        $query->execute(array(
            ':id' => $id
        ));
        
        $result = $query->fetch();
        
        if (is_array($result))
        {
            return new Comment($result['name'], $result['comment'], $result['id']);
        }
        return null;
    }
    
    public function delete($id)
    {
        $sql = "DELETE FROM comments WHERE id = :id";
        $query = $this->getHandler()->prepare($sql);
        $query->execute(array(
            ':id' => $id
        ));
        
    }
}