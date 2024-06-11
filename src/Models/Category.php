<?php

namespace Vanch\FpolyBase\Models;

use Vanch\FpolyBase\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';
    public function findById($id)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id = ?')
            ->setParameter('0', $id)
            ->fetchAssociative();
    }

    public function all()
    {
        $queryBuilder = $this->conn->createQueryBuilder();

        return $queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->fetchAllAssociative();
    }

}