<?php
// namespace App\Models;
class Product
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
    public function getProducts()
    {
        $this->db->query('SELECT *
                        --   product.id as productId,
                        --   category.id as categoryId
                          FROM product
                        --   INNER JOIN category
                        --   ON product.category_id = category.id
                          ORDER BY product.timestamp DESC
                          ');
        $results = $this->db->resultSet();
        // $results = $this->db->fetch();
        foreach ($results as $result) {
            // var_dump($result);
            $result->file = $this->productphoto($result->id);
            // $result['file'] = $this->productphoto($result['id']);
            $resules[] = $result;
        }
        // print_r($results);
        // die;

        return $resules;
    }
    public function show($id)
    {
        $this->db->query("SELECT *
                          FROM product      
                          WHERE id=:id
                          ");
        $this->db->bind(':id', $id);
        $results = $this->db->single();
        $results->file = $this->productphoto($results->id);
        return $results;
    }
    public function add($var = null)
    {
        # code...
    }
    public function productphoto($id)
    {
        // var_dump($id);
        // die;
        $this->db->query("SELECT file
                          FROM product_photos      
                          WHERE product_id=:id
                          ");

        $this->db->bind(':id', $id);
        $results = $this->db->resultSet();
        //  $this->db->execute();
        // $results = $this->db->fetch();
        // var_dump($results[0]->file);
        // die;
        // return $results[0]->file;
        $resultfile = [];
        foreach ($results as $result) {
            $resultfile[] = $result->file;
        }
        return $resultfile;
    }
    public function getproductssearch(Array $category, $price )
    {
        $this->db->query("SELECT *
                          FROM product      
                          WHERE category_name = $category[0]
                          OR category_name = $category[1]
                          OR category_name = $category[2]
                          OR category_name = $category[3]
                          OR category_name = $category[4]
                          OR category_name = $category[5]
                          OR category_name = $category[6]
                          AND price BETWEEN $price[0] AND $price[1]
                          ");
        // $this->db->bind(':val', $val);
        $results = $this->db->resultSet();;
        $resultfile = [];
        foreach ($results as $result) {
            $resultfile[] = $result->file;
        }
        return $resultfile;
        // return $results;
    }
    public function search($val)
    {
        $this->db->query("SELECT *
                          FROM product      
                          WHERE name LIKE '%:id%'
                          ");
        $this->db->bind(':val', $val);
        $results = $this->db->resultSet();
        $resultfile = [];
        foreach ($results as $result) {
            $resultfile[] = $result->file;
        }
        return $resultfile;
        // return $results;
    }
}
