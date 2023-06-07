<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController extends BaseController{
    public $product; // tạo thuộc tính product

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $product = $this->product->getProduct(); // đón giá trị từ model trở về
        return $this->render('product.index', compact('product') ); //['product' => $product]
    }

}