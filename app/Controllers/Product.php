<?php
class Product
{
    public function index()
    {
        echo 'Product index';
    }

    public function detail($id = '', $slug = '')
    {
        echo "id: $id, slug: $slug";
    }

    public function search()
    {
        $keyword = $_GET['keyword'] ?? 'default_keyword';
        echo "keyword: $keyword";
    }
}
