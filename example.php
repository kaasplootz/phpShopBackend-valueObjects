<?php

declare(strict_types=1);

namespace kaasplootz\phpShopBackend;

require_once __DIR__ . '/vendor/autoload.php';

$product = new Product(
    "123456",
    "Test",
    "Description",
    new Image(
        "123456",
        "/img/test.png",
        "123456"
    ),
    1.1,
    new Tax(
        "123456",
        16
    ),
    0,
    999,
    12.1,
    new DeliveryTime(
        0,
        14
    )
);

echo $json = $product->toJSON();

var_dump(Product::fromJSON($json));
