<?php
session_start(); // Start the session at the beginning

include 'Connection.php'; // Include the database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profit</title>
    <link rel="stylesheet" href="Profit.css">
</head>
<body>
    <nav>
        <div class="navdiv">
            <div class="logo"><a>Profit Page</a> </div>
        </div>
    </nav>
    <form action="" method="POST">
        <label for="Land">Choose an Option:</label>
        <select id="Land" name="Land">
            <option value="Year-1" data-products="Product A, Product B, Product C">2005-2010</option>
            <option value="Year-2" data-products="Product X, Product Y, Product Z">2010-2015</option>
            <option value="Year-3" data-products="Product M, Product N, Product O">2015-2020</option>
            <option value="Year-4" data-products="Product P, Product Q, Product R">2021-2023</option>
        </select>
    </form>
    <div id="profitDisplay">
        <h3>Profit</h3>
        <div class="bar-chart">
            <div class="bar" id="bar1"></div>
            <div class="bar" id="bar2"></div>
            <div class="bar" id="bar3"></div>
        </div>
    </div>
    <div id="productsDisplay">
        <ul>
            <li>Product A</li>
            <li>Product B</li>
            <li>Product C</li>
        </ul>
    </div>
     <!-- Added productsDisplay element -->
    <script src="Profit.js"></script>
</body>
</html>
