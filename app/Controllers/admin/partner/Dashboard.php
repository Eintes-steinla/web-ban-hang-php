<?php
class Dashboard
{
    public function index()
    {
        echo "Dashboard admin";
    }
    public function detail($id)
    {
        echo "Dashboard detail admin" . $id;
    }
}
