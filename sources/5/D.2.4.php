// SELECT * FROM `order` WHERE `id` = 123
$order = Order::findOne(123);
// SELECT * FROM `customer` WHERE `id` = (SELECT customer_id FROM `order` WHERE `id` = 123)
$customer = $order->customer;
