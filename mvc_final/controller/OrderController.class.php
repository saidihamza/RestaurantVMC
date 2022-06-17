<?php


class OrderController
{
    public function httpGetMethod()
    {

        $orderModel = new OrderModel();
        $orders = $orderModel->listOrder();
 return ['orders' => $orders];
    }
}
