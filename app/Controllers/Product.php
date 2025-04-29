<?php
class Product extends Controller
{
    public function index()
    {
        echo 'Product index';
    }

    public function list_product()
    {
        $product = $this->model(('ProductModel'));
        $data = $product->getProductLists();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
