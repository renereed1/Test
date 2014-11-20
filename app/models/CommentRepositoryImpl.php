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
        
        return $this->getHandler()->lastInsertId();
    }
    
    public function findAll()
    {
        $sql = "SELECT * FROM comments ORDER BY id DESC";
        $query = $this->getHandler()->prepare($sql);
        $query->execute();
        
        $query->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Salestream\\Model\\Comment');
        $comments = $query->fetchAll();
        
        return $comments;
    }
    
    public function find($id)
    {
        $sql = "SELECT * FROM comments WHERE id = :id";
        $query = $this->getHandler()->prepare($sql);
        $query->execute(array(
            ':id' => $id
        ));
        
        $query->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, 'Salestream\\Model\\Comment');
        $comment = $query->fetch();
        
        return $comment;
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