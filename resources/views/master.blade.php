<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<title>SU8</title>
</head>
<style>
    .product-card {
        border: 1px solid #eee;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        background: #fff;
        position: relative;
        width: 100%;
        margin: 20px auto;
    }

    .product-card img {
        width: 100%;
        height: 350px;
        object-fit: cover;
    }

    .product-card .discount-tag {
        position: absolute;
        top: 10px;
        left: 10px;
        background: #e64c3c;
        color: #fff;
        font-size: 0.95rem;
        font-weight: 500;
        border-radius: 6px;
        padding: 2px 10px;
    }

    .product-card .wishlist {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #d1d1d1;
        font-size: 1.4rem;
        cursor: pointer;
    }

    .product-card .card-body {
        padding: 16px 18px 12px 18px;
    }

    .product-card .product-title {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 8px;
    }

    .product-card .price {
        color: #e64c3c;
        font-weight: bold;
        font-size: 1.2rem;
    }

    .product-card .old-price {
        color: #888;
        text-decoration: line-through;
        margin-left: 8px;
        font-size: 1rem;
        font-weight: normal;
    }

    .product-card .add-cart-btn {
        margin-top: 10px;
        width: 100%;
    }
</style>
<body>
{{--navbar--}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">E-Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fa fa-home mr-1"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-bag mr-1"></i>Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-phone mr-1"></i>Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart mr-1"></i>
                    Cart(<span class="text-light">0</span>)
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-user-circle mr-1"></i>Account</a>
            </li>
        </ul>
    </div>
</nav>

{{--product card--}}
<div class="container">
    <div class="row">
        @foreach(range(1,8) as $item)
            <div class="col-md-3">
                <div class="product-card">
                    <span class="discount-tag">-50%</span>
                    <span class="wishlist">
                  <svg width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 14s6-4.435 6-8.182C14 2.842 11.985 1 8 1S2 2.842 2 5.818C2 9.565 8 14 8 14z"/>
                  </svg>
                </span>
                    <img
                        src="https://zandokh.com/image/catalog/products/2024-12/2122411943/IMG_0151.jpg"
                        alt="Refined Serpent Jacket">
                    <div class="card-body">
                        <div class="product-title">Regular Track Jacket</div>
                        <div>
                            <span class="price">US $13.97</span>
                            <span class="old-price">US $27.95</span>
                        </div>
                        <button class="btn btn-dark add-cart-btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{--footer--}}
<footer class="bg-dark text-white mt-5 pt-4 pb-2">
    <div class="container">
        <div class="row">

            <!-- About -->
            <div class="col-md-4 mb-4">
                <h5 class="text-uppercase">E-Shop</h5>
                <p>
                    Your one-stop online shop for the best products at unbeatable prices.
                </p>
            </div>

            <!-- Links -->
            <div class="col-md-2 mb-4">
                <h6 class="text-uppercase">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white-50">Home</a></li>
                    <li><a href="#" class="text-white-50">Shop</a></li>
                    <li><a href="#" class="text-white-50">Cart</a></li>
                    <li><a href="#" class="text-white-50">Contact Us</a></li>
                </ul>
            </div>

            <!-- Customer Service -->
            <div class="col-md-3 mb-4">
                <h6 class="text-uppercase">Customer Service</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white-50">FAQ</a></li>
                    <li><a href="#" class="text-white-50">Shipping & Returns</a></li>
                    <li><a href="#" class="text-white-50">Privacy Policy</a></li>
                    <li><a href="#" class="text-white-50">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Contact Info & Socials -->
            <div class="col-md-3 mb-4">
                <h6 class="text-uppercase">Contact Us</h6>
                <p class="mb-1"><i class="fa fa-envelope mr-2"></i> support@eshop.com</p>
                <p class="mb-1"><i class="fa fa-phone mr-2"></i> +123 456 7890</p>
                <div>
                    <a href="#" class="text-white-50 mr-3"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="text-white-50 mr-3"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="text-white-50"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr class="border-top border-secondary">
        <div class="text-center text-white-50">
            &copy; 2025 E-Shop. All rights reserved.
        </div>
    </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</html>
