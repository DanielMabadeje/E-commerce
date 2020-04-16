<?php

// namespace App\app\controllers;

// use App\app\libraries\Controller;

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Products extends Controller
{
    public function __construct()
    {
        $this->productModel = $this->model('Product');
        header("access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Content-Type: application/json; charset=UTF-8");
    }
    public function index($limit = null)
    {
        $products = $this->productModel->getProducts();
        $data = $products;
        // $this->view('posts/index', $data);
        // print_r(json_encode([$data]));
        // print($this->returnjson($products));
        die($this->returnjson($products));
        // 'ff';
    }
    public function show($id)
    {
        $post = $this->productModel->show($id);
        // var_dump($post->user_id);
        // die();
        // $user = $this->userModel->getUserbyId($post->user_id);
        $data = [
            'product' => $post,
            // 'user' => $user
        ];
        $this->view('posts/show', $data);
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'user_id' => $_SESSION['user_id'],
                'title_err' => '',
                'body_err' => '',
            ];

            //validate title
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }
            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body text';
            }

            if (empty($data['title_err']) && empty($data['body_err'])) {
                // die('success');
                if ($this->productModel->addProduct($data)) {
                    flash('post_message', 'Post Added');
                    redirect('posts');
                } else {
                    die('somethin went wrong');
                }
            } else {
                // $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];
            $this->view('posts/add', $data);
        }
    }
    public function returnjson($data, $errorStatusCode = 200)
    {
        //Send response code via Header.
        if (is_numeric($errorStatusCode))
            http_response_code($errorStatusCode);
        return  json_encode(['success' => ['code' => $errorStatusCode, 'message' => $data]]);
    }
    public function queryproduct($var = null)
    {
        # code...
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $result=$this->productModel->search($_POST['value']);
            die($this->returnjson($result));
        }
    }
}
