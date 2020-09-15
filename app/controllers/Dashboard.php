<?php

// namespace App\app\controllers;

// use App\app\libraries\Controller;

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Dashboard extends Controller
{
    public function __construct()
    {
        if (!isadmin()) {
            redirect('/');
        }
        $this->productModel = $this->model('Product');
    }
    public function about($id)
    {
        echo 'hello' . $id;
        # code...
    }
    public function Index()
    {

        $data = [
            'title' => "Mabadeje's Framework",
        ];
        $this->view('pages/dashindex', $data);
    }
    public function products($category="all")
    {
        $data = [
            'title' => "Mabadeje's Framework",
        ];
        switch ($category) {
            case "all":
                $this->view('dashboard/products', $data);
                break;
            case "groceries":
                $this->view('dashboard/products/groceries', $data);
                break;
            case "fruits":
                $this->view('dashboard/products/fruits', $data);
                break;
            case "bread":
                $this->view('dashboard/products/bread', $data);
                    break;
            case "tech":
                $this->view('dashboard/products/tech', $data);
                    break;
            default:
            $this->view('dashboard/products', $data);
        }
        
        
    }
}
