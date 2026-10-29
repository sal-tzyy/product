<?php
$products = [
    [
        "id" => 1,
        "name" => "IPHONE 15 PRO MAX",
        "price" => 980.00,
        "image" => "https://buy.gazelle.com/cdn/shop/files/iPhone_15_Pro_Max_-_Black_Titanium_-_Overlap_Trans-cropped_a4bdc8d9-0a75-4f1e-b69c-2b7d9c0d27ab.jpg?v=1757425924&width=1946",
        "category" => "Electronics",
        "description" =>"Memory 256GB"
    ],
    [
        "id" => 2,
        "name" => "IPHONE 15PRO",
        "price" => 880.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVi8jVqggIc_jniY9hKkmSD53U0yM4Js_a4Guq_yHKvtSSi_iBtC6rWas&s=10",
        "category" => "Accessories",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 3,
        "name" => "IPHONE 15 PLUS",
        "price" => 760.00,
        "image" => "https://www.machines.com.my/cdn/shop/products/iPhone_15_Plus_Pink_PDP_Image_Position-1__GBEN_c9b8bd54-93bb-45cf-b69e-796363df8cbc.jpg?v=1705481016",
        "category" => "Electronics",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 4,
        "name" => "IPHONE 16 PRO MAX",
        "price" => 1280.00,
        "image" => "https://www.apple.com/newsroom/images/2024/09/apple-debuts-iphone-16-pro-and-iphone-16-pro-max/article/Apple-iPhone-16-Pro-hero-geo-240909_inline.jpg.large.jpg",
        "category" => "Electronics",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 5,
        "name" => "IPHONE 16 PRO ",
        "price" => 1150.00,
        "image" => "https://thedevicedepot.com/cdn/shop/files/apple-iphone-16-pro-max-256gb-natural-titanium-unlocked.png?v=1730136573&width=1214",
        "category" => "Electronics",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 6,
        "name" => "IPHONE 16 PLUS ",
        "price" => 1000.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxEsSfP4UgzTibvFsQf7WzB-xyRJjIamvKGIJKoO6XSw&s=10",
        "category" => "Electronics",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 7,
        "name" => "IPHONE 17 PRO MAX ",
        "price" => 1480.00,
        "image" => "https://idestiny.in/wp-content/uploads/2026/07/IDESTINY-2-1.jpg",
        "category" => "Accessories",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 8,
        "name" => "IPHONE 17 PRO  ",
        "price" => 1280.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyfxyfmGJrcjOT2PnFhLMg1m049G7l3Cdx2KA1QBSzEg&s=10",
        "category" => "Accessories",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 9,
        "name" => "IPHONE 17 E  ",
        "price" => 7100.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMb29AGn1oIA9q0wBGLbYQ1cQz7nIm73Wqch3u7rN5upJ9vV0y34xyxO4&s=10",
        "category" => "Accessories",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 10,
        "name" => "IPHONE 18 PRO MAX  ",
        "price" => 1989.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSedL-CZxRwieJ9LsEOpD8zzwJRMIZu6ROOrHluOYtbOA&s=10",
        "category" =>"Accessories",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 11,
        "name" => "IPHONE 18 PRO   ",
        "price" => 1699.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpmcs958zNb3S1Kk_Bj90FRH--tcF1mBISC6tBrLXbAA&s",
        "category" => "Accessories",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 12,
        "name" => "IPHONE 18 PRO MAX   ",
        "price" => 1989.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT7TuhDbnUR1Z7tcrynDEfP4PR7ogla7pGBWLKXCHLAQ&s=10",
        "category" => "Accessories",
        "description" => "Memory 256GB"
    ],
    [
        "id" => 13,
        "name" => "IPHONE 18 PRO MAX   ",
        "price" => 1989.00,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDWrFAJQ10vPGTF1NAvDYhQMfomOWFS5FTKKUkUfibZQ&s",
        "category" => "Accessories",
        "description" => "Memory 256GB"
    ],
];
?>

<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Product List</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Kantumruy Pro', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            padding: 30px 15px;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

       
        .page-title {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    color: #0b0707;         
    width: 100%;
    padding: 15px 0;
}

        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 25px;
            margin-top:20px;
        }

        
        .product-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

       
        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-fit: contain;
            object-position:center;
            background-color: #eee;
        }

        
        .product-info {
            padding: 18px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-category {
            font-size: 12px;
            text-transform: uppercase;
            color: #888;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
        }

        .product-name {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .product-description {
            font-size: 13px;
            color: #666;
            line-height: 1.5;
            margin-bottom: 15px;
            flex-grow: 1;
        }

        .product-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .product-price {
            font-size: 20px;
            font-weight: bold;
            color: #27ae60;
        }

        .btn-add-cart {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.2s ease;
        }

        .btn-add-cart:hover {
            background-color: #2980b9;
        }
        .navbar {
    position: absolute;
    top: 20px;
    left: 40px;
    z-index: 1000;
}

.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    gap: 25px; 
}
.navbar ul li a {
    text-decoration: none;
    color: #f54358; 
    font-size: 16px;
    font-weight: 500;
    font-family: sans-serif;
    transition: color 0.3s ease;
}

.navbar ul li a:hover {
    color: #069341; 
}
    </style>
</head>
<body>
    <nav class="navbar">
    <ul>
        <li><a href="#"><h1>Home</h1></a></li>
        <li><a href="ProductList.php"><h1>Products</h1></a></li>
        <li><a href="index.php"><h1>Contact Us</h1></a></li>
    </ul>
</nav>

    <div class="container">
        <h1 class="page-title">Our Products</h1>

       
        <div class="product-grid">
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="product-image">
                        <div class="product-info">
                            <span class="product-category"><?php echo htmlspecialchars($product['category']); ?></span>
                            <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                            <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                            <div class="product-bottom">
                                <span class="product-price">$<?php echo number_format($product['price'], 2); ?></span>
                                <button class="btn-add-cart">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>មិនទាន់មានផលិតផលនៅឡើយទេ។</p>
            <?php endif; ?>
        </div>
    </div>

</body>
</html>
