<?php

// namespace App\app\controllers;

// use App\app\libraries\Controller;

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Pages extends Controller
{
    public function __construct()
    {
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
        $this->view('pages/index', $data);
    }
    public function shop()
    {

        $data = [
            'title' => "Reagan Mart",
        ];
        $this->view('pages/shop', $data);
    }
    public function cart($var = null)
    {
        // $data = [];
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);
        $total = 0;
        $i = 1;
        // var_dump(
        //     $cartitems
        // );
        foreach ($cartitems as $id) {
            $datas = $this->productModel->show($id);
            $total = $total + $datas->price;
            $i++;
            $result[] = $datas;
        }
        $data = [
            'product' => $result,
            'total' => $total
        ];
        // print(json_encode([$data, $total]/));
        // die;
        $this->view('pages/cart', $data);
    }
    public function checkout()
    {

        $data = [
            'title' => "Reagan Mart",
        ];
        $this->view('pages/checkout', $data);
    }
    public function viewproduct($id)
    {

        $result = $this->productModel->show($id);
        // var_dump($result);
        // die;
        $data = [
            'title' => "Reagan Mart",
            'product' => $result
        ];
        $this->view('pages/viewproduct', $data);
    }
}
