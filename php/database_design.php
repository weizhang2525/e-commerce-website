<?php
    $usr = "CREATE TABLE customers(
        cid INT(5) AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        phone VARCHAR(10) NOT NULL,
        street_address VARCHAR(50) NOT NULL,
        city VARCHAR(30) NOT NULL,
        zip VARCHAR(30) NOT NULL
    )";

    $cc = "CREATE TABLE creditcards(
        cid INT(5) NOT NULL FOREIGN KEY REFERENCES customers(cid),
        ccnum INT(16) NOT NULL PRIMARY KEY,
        ccv INT(4) NOT NULL,
        expiration_month INT(2) NOT NULL,
        expiration_year INT(2) NOT NULL
    )";

    $order = "CREATE TABLE orders(
        orderid INT(5) AUTO_INCREMENT PRIMARY KEY,
        cid INT(5) FOREIGN KEY REFERENCES customers(cid),
        ccnum INT(16) NOT NULL FOREIGN KEY REFERENCES creditcards(ccnum),
        pid INT(5) FOREIGN KEY REFERENCES products(pid),
        quantity INT(2) NOT NULL
    )"
?>