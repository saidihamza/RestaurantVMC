<?php


class OrderModel
{
    public function listOrder()
    {
        $database = new Database(
            'mysql:host=localhost;dbname=resto;charset=UTF8',
            'root',
            ''
        );
        $sql = 'SELECT * FROM `order`';

        $orders = $database->query($sql);
        return $orders;
    }
}
