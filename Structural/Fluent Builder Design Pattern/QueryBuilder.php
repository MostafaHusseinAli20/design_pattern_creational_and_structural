<?php

class QueryBuilder implements QueryBuilderInterface
{
    private array $filed;
    private string $table;
    private string $alias;
    private array $conditions;

    public function select(array $filed)
    {
        return $this->filed = $filed;
    }

    public function from(string $table, string $alias)
    {
        $this->table = $table;
        $this->alias = $alias;
        return $this;
    }

    public function where(array $conditions)
    {
        return $this->conditions = $conditions;
    }

    public function getSQL()
    {
        return sprintf(
            'SELECT %s FROM %s AS %s WHERE %s',
            implode(', ', $this->filed) . "<br>",
            $this->table . "<br>",
            $this->alias . "<br>",
            implode('AND', $this->conditions)
        );
    }
}

// $queryBuilder = new QueryBuilder();
// $queryBuilder->select(['name', 'email']);
// $queryBuilder->from('users', 'user1');
// $conditions = [
//     'user1.id = 1 <br>',
//     'user1.status = \'active\' <br>',
//     'user1.created_at > \'2022-01-01\' ',
// ];
// $queryBuilder->where($conditions);
// echo $queryBuilder->getSQL();
