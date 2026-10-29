<!DOCTYPE html>
<html lang="km">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
    <ul>
        <li><a href="#"><h1>Home</h1></a></li>
        <li><a href="ProductList.php"><h1>Products</h1></a></li>
        <li><a href="index.php"><h1>Contact Us</h1></a></li>
    </ul>
</nav>

<div class="form-box">
    <h2>Add Product</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <label>Product :</label>
            <input type="text" name="product">
        </div>
        <div class="row">
            <label>Price :</label>
            <input type="text" name="price">
        </div>
        <div class="row">
            <label>Memory :</label>
            <input type="text" name="memory">
        </div>
        <div class="row">
            <label>Category :</label>
            <select name="category">
                <option value="khmer">Accessories</option>
                <option value="khmer">Electronics</option>

            </select>
        </div>
        <div class="row">
            <label>Picture :</label>
            <input type="file" name="picture">
        </div>
        <button type="submit" class="btn-submit">Submit</button>
    </form>
</div>

</body>
</html>