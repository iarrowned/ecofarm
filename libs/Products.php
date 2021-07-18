<?php


class Products
{
    protected string $host = 'localhost';
    protected string $dbname = 'test';
    protected string $login = 'mysql';
    protected string $pass = 'root';

    private function connection(): PDO
    {
        try {
            return new PDO(
                'mysql:host='.$this->host.';dbname='.$this->dbname,
                $this->login,
                $this->pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }
    public function getMilkProd(): array
    {
        $query = $this->connection()->prepare('SELECT * FROM `milk`');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMeatProd(): array
    {
        $query = $this->connection()->prepare(
            'SELECT m.ProductID `id`, m.ProductName `name`, m.ProductPrice `price`,m.ProductWeight `weight`, mc.CategoryName `category`,
       mc.CategoryID `cat_id`, m.Preview `preview`
FROM `meat` m
INNER JOIN `meatcategory` mc ON mc.CategoryID = m.Category');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getMeatCategories(): array
    {
        $query = $this->connection()->prepare('SELECT * FROM `meatcategory`');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}