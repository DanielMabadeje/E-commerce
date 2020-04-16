<?php
// namespace App\Models;
class Review
{
    private $db;

    /**
     * User constructor.
     * @param null $data
     */
    public function __construct()
    {
        $this->db = new Database;
    }
public function getreview()
{
    $this->db->query("SELECT *
    FROM reviews
    ");
     $results = $this->db->resultSet();
     return $results;
}
public function getproductreview($id)
{
    $this->db->query("SELECT *
    FROM reviews      
    WHERE product_id=:id
    ");
$this->db->bind(':id', $id);
$results = $this->db->resultSet();
     return $results;
}
public function addreview(Type $var = null)
{
    # code...
}
}