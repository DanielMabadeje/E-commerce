<?php

// namespace App\app\controllers;

// use App\app\libraries\Controller;

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Reviews extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
        header("access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Content-Type: application/json; charset=UTF-8");
    }
    public function add($var = null)
    {
        # code...
    }
    public function index()
    {
        $results=$this->productModel->getreview();
        die($this->returnjson($results));
    }
    public function productreview($var,$id)
    {
        $results=$this->productModel->getproductreview($id);
        die($this->returnjson($results));

    }
    public function returnjson($data, $errorStatusCode = 200)
    {
        //Send response code via Header.
        if (is_numeric($errorStatusCode))
            http_response_code($errorStatusCode);
        return  json_encode(['success' => ['code' => $errorStatusCode, 'message' => $data]]);
    }
}
