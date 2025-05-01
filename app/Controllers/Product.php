<?php
class Product extends Controller
{
    public $data = [];

    public function index()
    {
        echo 'Product index';
    }

    public function list_product()
    {
        $product = $this->model(('ProductModel'));
        $dataProduct = $product->getProductLists();

        $title = "danh sach san pham";

        $this->data['sub_content']['product_list'] = $dataProduct;
        $this->data['sub_content']['page_title'] = $title;
        $this->data['page_title'] = $title;
        $this->data['content'] = 'products/list';

        // render view
        $this->render('products/list', $this->data);
    }

    public function detail($id = 0)
    {
        $product = $this->model(('ProductModel'));
        $this->data['sub_content']['info'] = $product->getDetail($id);
        $this->data['sub_content']['title'] = "chi tiet san pham";
        $this->data['page_title'] = "chi tiet san pham";
        $this->data['content'] = "products/detail";
        $this->render('layouts/client_layout', $this->data);
    }
}
