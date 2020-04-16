<?php

// namespace App\app\controllers;

// use App\app\libraries\Controller;

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Cart extends Controller
{
    public function __construct()
    {
    }
    public function add($ai, $id)
    {
        // var_dump($id);
        // die;
        if (isset($_SESSION['cart']) & !empty($_SESSION['cart'])) {
            $items = $_SESSION['cart'];
            $cartitems = explode(",", $items);
            $items .= "," . $id;
            $_SESSION['cart'] = $items;
            // header('location: index.php?status=success');
        } else {
            $items = $id;
            $_SESSION['cart'] = $items;
            // header('location: index.php?status=success');
        }
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);
        if (in_array($id, $cartitems)) {
            return true;
            // header('location: index.php?status=incart');
        } else {
            $items .= "," . $id;
            $_SESSION['cart'] = $items;
            return true;
            // header('location: index.php?status=success');
        }
    }
    public function index()
    {
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);
        $total = '';
        $i = 1;
    }
    public function delete($id)
    {
        $items = $_SESSION['cart'];
        $cartitems = explode(",", $items);
        if (isset($id) & !empty($id)) {
            $delitem = $id;
            unset($cartitems[$delitem]);
            $itemids = implode(",", $cartitems);
            $_SESSION['cart'] = $itemids;
            return true;
        }
    }
    public function deletecart()
    {
        unset($_SESSION['cart']);
        echo 'delete successful ';
    }
}
