<?php

class HomeModel
{
    protected $table = 'products';

    public function getList()
    {
        $data = [
            'item 1',
            'item 2',
            'item 3',
        ];

        return $data;
    }

    public function getDetail($id)
    {
        $data = [
            'item 1',
            'item 2',
            'item 3',
        ];

        return $data[$id];
    }
}
