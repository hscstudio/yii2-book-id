// SELECT * FROM `customer` WHERE `id` = 123
$customer = Customer::findOne(123);
// SELECT * FROM `orders` WHERE `customer_id` = (SELECT id FROM `customer` WHERE `id` = 123)
$orders = $customer->orders;
