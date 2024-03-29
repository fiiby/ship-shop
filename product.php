<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: sans-serif;
            background-color: lightseagreen;
        }

        header {
            background-color: #555;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin: 0 auto;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 5px;
            margin-left: 5px;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            width: 300px;
            /* Set width to 100% to take full space of the grid cell */
            margin-top: 60px;
        }

        .product-image {
            width: 100%;
            height: 200px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-image img {
            max-width: 100%;
            max-height: 100%;
            background-color: #fff;
        }

        .product-title {
            font-size: 20px;
            margin: 0;
            text-align: center;
        }

        .product-price {
            font-size: 16px;
            margin: 0;
            text-align: center;
            color: lightseagreen;
        }

        .add-to-cart-btn {
            background-color: cornflowerblue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 3px;
            transition: all 0.25s ease;
        }

        .add-to-cart-btn:hover {
            background-color: red;
        }

        .nav ul li {
            display: inline;
            padding: 10px;
            background-color: lightseagreen;
            margin: 10px;
            border-radius: 3px;
            font-size: larger;
            text-decoration-line: none;
            color: white;
        }

        a {
            text-decoration-line: none;
            color: #fff;
        }

        ul {
            padding-left: 80%
        }
    </style>

</head>

<body>
    <header>
        <h1>Welcome to My Shop</h1>
        <nav>
            <div class="nav">
                <ul>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Signup</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <!-- Navigation -->

        <div class="flex-container">
            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                    <img src="./images/7.jpeg" alt="Product Image" />
                </div>
                <div class="product-details">
                    <h2 class="product-title">Water Bottle</h2>
                    <h4 class="product-price">300 /-</h4>
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <!-- Add your image here -->
                <img src="./images/3.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Headphones</h2>
                <h4 class="product-price">2000 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>  
        </div>
        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/2.png" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Laptop </h2>
                <h4 class="product-price">30000 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/4.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Digital Camera</h2>
                <h4 class="product-price">45000 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/5.jpg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Denim Jacket</h2>
                <h4 class="product-price">3000 -/</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/6.webp" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Hat</h2>
                <h4 class="product-price">500 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/7.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Water Bottle</h2>
                <h4 class="product-price">300 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/1.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                    <h2 class="product-title">I-phon10</h2>
                    <h4 class="product-price">40000 /-</h4>
                    <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
                </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/7.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Water Bottle</h2>
                <h4 class="product-price">300 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/7.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Water Bottle</h2>
                <h4 class="product-price">300 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/7.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Water Bottle</h2>
                <h4 class="product-price">300 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <!-- Add your image here -->
                <img src="./images/7.jpeg" alt="Product Image" />
            </div>
            <div class="product-details">
                <h2 class="product-title">Water Bottle</h2>
                <h4 class="product-price">300 /-</h4>
                <button class="add-to-cart-btn"><a href="login.php">Add to Cart</a></button>
            </div>
        </div>
    </div>
    </div>



    <?php
    include_once 'db-connect.php';

    // SQL query to select all products from the database
    $sql = "SELECT * FROM products";

    // Execute the query
    $result = $database_connection->query($sql);

    // Check if there are any products
    if ($result->num_rows > 0) {
        echo '<div id="root"><div class="product-list">';

        // Loop through each row in the result set
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product">';
            echo '<img src="' . $row['image'] . '" alt="' . $row['item'] . '" class="product-image">';
            echo '<h2 class="product-name">' . $row['item'] . '</h2>';
            echo '<p class="product-price">' . $row['price'] . ' /-</p>';
            echo '<button class="product-btn">click</button>';
            echo '</div>';
        }

        echo '</div></div>';
    } else {
        echo "No products found";
    }
    ?>
</body>

</html>


<!-- // ?> -->

<!-- // if (isset($_GET['product'])) {
    //     // session_start();
    //     $item = $_GET['item'];
    //     $description = $_GET['description'];
    //     $price = $_GET['price'];


    //     // connect to db:
    //     include_once 'db-connect.php';

    //     //sql query:
    //     $sql = "INSERT INTO product (item,description, price) VALUES('$item', '$price', '$description')";
    // }

    // ?> -->