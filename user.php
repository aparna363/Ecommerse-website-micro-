<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Cart - Online Shopping</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            padding-top: 80px;
        }
        header .user-options button{  
            background-color: white;
            border: 0.125em solid #1A1A1A;
            border-radius: 4px;
            color: black;
            cursor: pointer;
            display: inline-block;
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            padding: 8px 15px;
            text-align: center;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            margin-right:5px;
        }
        .login:hover {
            color: #fff;
            background-color: #1A1A1A;
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        }

        header .user-options button:hover{
        box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
        }


        /* Header */
        header {
            
        background-color: #0064a1;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed; /* Make the header fixed */
        top: 0;           /* Stick to the top of the page */
        width: 100%;      /* Ensure the header spans the full width */
        z-index: 1000;    /* Ensure the header stays on top of other content */


        }
        header p{
            color:yellow;
        }

        header .logo {
            font-size: 28px;
            font-weight: 700;
            display:flex;
            width:100px;
            height:90px;
            align:center;
        }

        header .search-bar {
            display: flex;
            align-items: center;
            max-width: 600px;
            width: 100%;
        }

        header .search-bar input {
            padding: 8px;
            width: 100%;
            border: none;
            border-radius: 4px;
            margin-right: 10px;
        }

        header .search-bar button {
            padding: 8px 15px;
            background-color: #f5a623;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }

        header .search-bar button:hover {
            background-color: #f08d0f;
        }

        header .user-options {
            display: flex;
            gap: 15px;
           
        }
        /* Category Section */
        .category-section {
            display: flex;
            gap: 20px;
            padding: 30px 20px;
            background-color: #fff;
            justify-content: center;
            flex-wrap: wrap;
        }

        .category-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 200px;
            text-align: center;
            padding: 15px;
            cursor: pointer;
        }

        .category-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .category-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        /* Featured Products Section */
        .featured-products {
            padding: 40px 20px;
            text-align: center;
            background-color: #fff;
        }

        .featured-products h2 {
            font-size: 30px;
            color: #333;
            margin-bottom: 30px;
        }

        .product-list {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .product-card {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: 225px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product-card h4 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .product-card p {
            font-size: 16px;
            color: #f08d0f;
            margin-bottom: 15px;
        }

        .product-card button {
            background-color: #0064a1;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }

        .product-card button:hover {
            background-color: #004b74;
        }

        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .ses {
            font-size: 45px;
            font-weight: 700;
            display:flex;
            background-color:white;
            margin-left:10px;
            font-family: Lucida Console;

        }

        #icon1{
            margin-top:20px;
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="logo"><span id="icon1">
            <svg width="60" height="60" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg"><defs><radialGradient id="bgGradient" cx="50%" cy="50%" r="50%"><stop offset="0%" style="stop-color: #d0f7d0; stop-opacity: 1" /><stop offset="100%" style="stop-color: #b4f2b4; stop-opacity: 1" /></radialGradient><filter id="shadow" x="-20%" y="-20%" width="140%" height="140%"><feDropShadow dx="4" dy="8" stdDeviation="6" flood-color="#000" flood-opacity="0.3"/></filter></defs><circle cx="512" cy="400" r="300" fill="url(#bgGradient)" filter="url(#shadow)"/><path d="M700 320H450l-25-100H180v50h130l20 80H250l-50 180h500v-50H350l15-50h400l50-150h-70z" fill="#1a475d"/><circle cx="400" cy="700" r="40" fill="#1a475d"/><circle cx="720" cy="700" r="40" fill="#1a475d"/><path d="M500 280c40 0 80 20 110 50l-40 40a120 120 0 0 0-70-30c-40 0-80 20-110 50l-40-40a180 180 0 0 1 150-70z" fill="#6ae06a"/><text x="512" y="850" text-anchor="middle" font-family="Arial, sans-serif" font-size="70" fill="#1a475d" font-weight="bold">FLASH CART</text><text x="512" y="900" text-anchor="middle" font-family="Arial, sans-serif" font-size="30" fill="#1a475d">YOUR STYLE, YOUR WAY</text></svg>
        </span><p>FlashCart</p></div>
        <div class="search-bar">
            <input type="text" placeholder="Search for products...">
            <button>Search</button>
        </div>
        <?php if (!isset($_SESSION['user'])):?>
        <div class="user-options">
        <button class="login" onclick="location.href='login.php'">Login</button></a>
        <button>
            <img src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/header_cart-eed150.svg">       
    </button>
    <?php else:?>
    <div class="user-options">
        <p><?php echo $_SESSION['user'];?>
        <button class="login" onclick="location.href='logout.php'">Logout</button></a>
        
</div><?php endif;?>
    </header>
    <?php if (isset($_SESSION['user'])):?>
        <span class=ses><br>Welcome <?php echo htmlspecialchars($_SESSION['user']);?>!</span>
        <?php endif; ?>
    <!-- Category Section -->
    <div class="category-section">
        <div class="category-card">
            <img src="https://thumbs.dreamstime.com/b/many-used-modern-electronic-gadgets-use-white-floor-reuse-recycle-concept-top-view-153892434.jpg" alt="Category Image">
            <h3>Electronics</h3>
        </div>
        <div class="category-card">
            <img src="https://thumbs.dreamstime.com/b/fashion-pretty-cool-youngwith-shopping-bags-wearing-black-hat-white-pants-over-colorful-orange-background-79063329.jpg" alt="Category Image">
            <h3>Fashion</h3>
        </div>
        <div class="category-card">
            <img src="https://www.kent.co.in/images/kitchen-appliances/Kitchen-Appliances-Category-Page-Banner.png" alt="Category Image">
            <h3>Home Appliances</h3>
        </div>
        <div class="category-card">
            <img src="https://prh.imgix.net/articles/top10-fiction-1600x800.jpg" alt="Category Image">
            <h3>Books</h3>
        </div>
    </div>

    <!-- Featured Products Section -->
    <div class="featured-products">
        <h2>Best Deals on Smartphones</h2>
        <div class="product-list">
            <div class="product-card">
                <img src="https://i03.appmifile.com/389_item_in/04/07/2024/70248ae51501f163f46932afee0d8b45.png?thumb=1&w=500&q=85" alt="Product Image">
                <h4>Redmi 13C</h4>
                <p>₹15,999</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://5.imimg.com/data5/SELLER/Default/2022/9/VQ/EZ/LW/46278852/realme-9-5g-500x500.png" alt="Product Image">
                <h4>Realme 9 5G</h4>
                <p>₹17,499</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/41hmUyFtwdL._SR290,290_.jpg" alt="Product Image">
                <h4>iQOO Z9 Lite</h4>
                <p>₹13,799</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://www.gizmochina.com/wp-content/uploads/2022/06/Nothing-phone-1.jpg" alt="Product Image">
                <h4>Nothing 1</h4>
                <p>₹30,999</p>
                <button>Buy Now</button>
            </div>
        </div>
    </div>

    <div class="featured-products">
        <h2>Only 499/-</h2>
        <div class="product-list">
            <div class="product-card">
                <img src="https://thehaelli.com/cdn/shop/files/THC019-1-BarkhaBlushOrganzaKurtaSet.jpg?v=1721057221" alt="Product Image">
                <h4>Kurta Sets</h4>
                <p>Under ₹499</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://www.sonatawatches.in/dw/image/v2/BKDD_PRD/on/demandware.static/-/Sites-titan-master-catalog/default/dw956a5593/images/Sonata/Catalog/7924NM01_1.jpg?sw=800&sh=800" alt="Product Image">
                <h4>Sonata, Killer & more</h4>
                <p>Under ₹499</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://cdn.rt.emap.com/wp-content/uploads/sites/2/2018/01/23135253/scampanddude2-1-1024x959.jpg" alt="Product Image">
                <h4>Kids Wear</h4>
                <p>70% off</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://contents.mediadecathlon.com/p2567760/06cf21e3f5a8a75af7ac0659729255e7/p2567760.jpg?format=auto&quality=70&f=2520x0" alt="Product Image">
                <h4>T-Shirts</h4>
                <p>Under ₹499</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://contents.mediadecathlon.com/p1985522/2e55fd5a52b5304b959738d33fd1f053/p1985522.jpg?format=auto&quality=70&f=2520x0" alt="Product Image">
                <h4>Shoes</h4>
                <p>Under ₹399</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://localnation.co.in/cdn/shop/products/t729hRxZQS.jpg?v=1695819518" alt="Product Image">
                <h4>Saree</h4>
                <p>60% off</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://www.boat-lifestyle.com/cdn/shop/products/1grn_66029af4-f3d3-4a56-89ab-acf9de85d776.png?v=1613743044" alt="Product Image">
                <h4>Boat Earphones</h4>
                <p>Just ₹299</p>
                <button>Buy Now</button>
            </div>
            <div class="product-card">
                <img src="https://media.istockphoto.com/id/687165852/photo/toys.jpg?s=612x612&w=0&k=20&c=_BdsQLnut3pVc3RYgodD3Xiy7gCCM3K8HX3GdODLRt0=" alt="Product Image">
                <h4>Toys</h4>
                <p>50% off</p>
                <button>Buy Now</button>
            </div>
        </div>
    </div>
    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 eCart. All Rights Reserved.</p>
        <p>
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms of Service</a> |
            <a href="#">Help</a>
        </p>
    </footer>

</body>
</html>
