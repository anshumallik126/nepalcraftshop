<?php
$pageTitle = "Product Detail";
?>
<?php include 'includes/header.php'?>
<div class="shop-details-area pt-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="product-imgs sticy-product">
                    <div class="product-thumbnail-wrapper">
                        <div class="img-display">
                            <div class="img-showcase">
                                <img src="img/01.png" alt="product image">
                                <img src="img/single-2.png" alt="product image">
                                <img src="img/chillichicken.jpg" alt="product image">
                                <img src="img/drymeat.jpg" alt="product image">
                            </div>
                        </div>

                        <div class="img-select">
                            <div class="img-item">
                                <a href="#" data-id="1">
                                    <img src="img/01.png" alt="product image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="2">
                                    <img src="img/single-2.png" alt="product image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="3">
                                    <img src="img/chillichicken.jpg" alt="product image">
                                </a>
                            </div>
                            <div class="img-item">
                                <a href="#" data-id="4">
                                    <img src="img/drymeat.jpg" alt="product image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shop-item-details">
                    <nav>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop.html">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Details</li>
                        </ul>
                    </nav>
                    <h2 class="entry-title">Maxican Pizza Test Better</h2>
                    <div class="row">
                        <div class="col-lg-6 order-lg-last align-self-center">
                            <div class="rating text-lg-end">
                                4.9
                                <span class="rating-inner">
                                    <i class="fa fa-star checked ps-0"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star pe-0"></i>
                                </span>
                                (200)
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <h4 class="price">$27.00</h4>
                        </div>
                    </div>
                    <p class="mt-4">Pizza is a savory dish of Italian origin consisting of a usually round, flattened
                        base of leavened wheat-based dough topped with tomatoes, cheese, and often various other
                        ingredients, which is then baked at a high temperature, traditionally in a wood-fired oven. A
                        small pizza is sometimes called a pizzetta.</p>
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="variation">
                                <h6>Select Size</h6>
                                <ul class="size">
                                    <li><a href="#">10"</a></li>
                                    <li><a href="#">12"</a></li>
                                    <li><a href="#">14"</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="variation">
                                <h6>Select Crust</h6>
                                <div class="nice-select single-select" tabindex="0"><span class="current">--Choose youe
                                        Size--</span>
                                    <ul class="list">
                                        <li data-value="--Choose youe Size--" class="option selected">--Choose youe
                                            Size--</li>
                                        <li data-value="asc" class="option">Pizza</li>
                                        <li data-value="desc" class="option">Burger</li>
                                        <li data-value="pop" class="option">Ramen</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="quantity buttons_added">
                            <input type="button" value="-" class="minus" onclick="decrease()">
                            <input type="number" class="input-text qty-input text" value="1">
                            <input type="button" value="+" class="plus" onclick="increase()">
                        </div>

                        <button type="submit" class="btn theme-btn py-3 px-4">ADD TO CART</button>
                    </form>
                    <ul class="cat">
                        <li> SKU: PZ2866</li>
                        <li>Categories: <a href="#">Pizza</a> </li>
                        <li>Tags: <a href="#">Boscaiola,</a><a href="#">Pizza</a></li>
                    </ul>
                    <div class="shop-tabs">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Additional information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">Reviews (1) </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p class="mb-4">Pizza, dish of Italian origin consisting of a flattened disk of bread
                                    dough topped with some combination of olive oil, oregano, tomato, olives, mozzarella
                                    or other cheese, and many other ingredients, baked quickly—usually, in a commercial
                                    setting, using a wood-fired oven heated to a very high temperature—and served hot
                                </p>
                                <div class="row">
                                    <div class="col-6">
                                        <img class="w-100" src="img/single-2.png" alt="img">
                                    </div>
                                    <div class="col-6">
                                        <img class="w-100" src="img/single-3.png" alt="img">
                                    </div>
                                </div>
                                <p class="mt-4">One of the simplest and most traditional pizzas is the Margherita, which
                                    is topped with tomatoes or tomato sauce, mozzarella, and basil. Popular legend
                                    relates that it was named for Queen Margherita, wife of Umberto I, who was said to
                                    have liked its mild fresh flavour and to have also noted that its topping
                                    colours—green, white, and red—were those of the Italian flag.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <h6 class="title">About Product</h6>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                    specimen book. It has survived not only five centu but also the leap into electronic
                                    typesetting, remaining essentially unchanged.</p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                    Ipsum passages, and more recently with desktop publishing software like Aldus
                                    PageMaker including versions of lorem Ipsum.</p>

                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="comment-area">
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="img/comment.png" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <h6>Haslida heris</h6>
                                            <span>20 Feb 2020 at 4:00 pm</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Quis ipsum
                                                suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                                                lacus vel facilisis.</p>
                                        </div>
                                    </div>
                                </div>
                                <form class="default-form-wrap style-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input-wrap">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input-wrap">
                                                <input type="text" class="form-control" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-textarea-wrap">
                                                <textarea rows="4" placeholder="Review..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn theme-btn py-2 px-4 mt-3">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="related-products section-gap special-item">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="heading-part pb-5">
                    <h1 class="fw-bold">Related Products
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="owl-carousel owl-theme product_s">
                    <div class="card">
                        <div class="card-body">
                            <div class="menu-img text-center">
                                <a href="#"><img src="img/01.png" alt="menu" class="menu-image"></a>
                                <a class="fav-btn" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <a href="#" class="menu-title text-capitalize">margherita pizza</a>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="fa fa-star checked ps-0"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star pe-0"></i>
                                    </span>
                                    (200)
                                </div>
                            </div>
                            <div class="mt-4 bottom-area">
                                <h6 class="menu-price mb-0">$20.50</h6>
                                <a href="" class="btn theme-btn font-sm ms-1">Add to cart<i
                                        class="fas fa-plus ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="menu-img text-center">
                                <a href="#"><img src="img/01.png" alt="menu" class="menu-image"></a>
                                <a class="fav-btn" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <a href="#" class="menu-title text-capitalize">margherita pizza</a>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="fa fa-star checked ps-0"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star pe-0"></i>
                                    </span>
                                    (200)
                                </div>
                            </div>
                            <div class="mt-4 bottom-area">
                                <h6 class="menu-price mb-0">$20.50</h6>
                                <a href="" class="btn theme-btn font-sm ms-1">Add to cart<i
                                        class="fas fa-plus ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="menu-img text-center">
                                <a href="#"><img src="img/01.png" alt="menu" class="menu-image"></a>
                                <a class="fav-btn" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <a href="#" class="menu-title text-capitalize">margherita pizza</a>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="fa fa-star checked ps-0"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star pe-0"></i>
                                    </span>
                                    (200)
                                </div>
                            </div>
                            <div class="mt-4 bottom-area">
                                <h6 class="menu-price mb-0">$20.50</h6>
                                <a href="" class="btn theme-btn font-sm ms-1">Add to cart<i
                                        class="fas fa-plus ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="menu-img text-center">
                                <a href="#"><img src="img/01.png" alt="menu" class="menu-image"></a>
                                <a class="fav-btn" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <a href="#" class="menu-title text-capitalize">margherita pizza</a>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="fa fa-star checked ps-0"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star pe-0"></i>
                                    </span>
                                    (200)
                                </div>
                            </div>
                            <div class="mt-4 bottom-area">
                                <h6 class="menu-price mb-0">$20.50</h6>
                                <a href="" class="btn theme-btn font-sm ms-1">Add to cart<i
                                        class="fas fa-plus ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="menu-img text-center">
                                <a href="#"><img src="img/01.png" alt="menu" class="menu-image"></a>
                                <a class="fav-btn" href="#"><i class="fas fa-heart"></i></a>
                            </div>
                            <a href="#" class="menu-title text-capitalize">margherita pizza</a>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="fa fa-star checked ps-0"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star pe-0"></i>
                                    </span>
                                    (200)
                                </div>
                            </div>
                            <div class="mt-4 bottom-area">
                                <h6 class="menu-price mb-0">$20.50</h6>
                                <a href="" class="btn theme-btn font-sm ms-1">Add to cart<i
                                        class="fas fa-plus ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'includes/footer.php';
include 'includes/script.php'

?>