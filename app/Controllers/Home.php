<?php
class Home
{
    public function index()
    {
        echo 'Home index';
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
