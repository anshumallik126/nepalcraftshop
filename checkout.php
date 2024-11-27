<?php
$pageTitle = "Checkout";
?>
<?php include 'includes/header.php'?>
<section class="breadcrumb-area">
    <div class="banner-bg-img" style="left: -1.04539%; top: -1.99353%;"></div>
    <div class="banner-shape-1"><img src="img/shape-1.png" alt="img"></div>
    <div class="banner-shape-2"><img src="img/shape-2.png" alt="img"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 align-self-center">
                <div class="banner-inner text-center">
                    <h3>Checkout
                    </h3>
                    <h1>Delivery & Payment Info
                    </h1>
                    <nav>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white"><a href="">Home</a></li>
                            <li class="breadcrumb-item active text-yellow" aria-current="page"><?php echo $pageTitle; ?>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="checkout-area section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bill-payment-wrap">
                    <h5>Billing details
                    </h5>
                    <form class="default-form-wrap style-2">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Country</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Type Your Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Street address</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Permanent address</label>
                                <div class="single-input-wrap">
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="order-area">
                    <h5 class="title">Your order</h5>
                    <div class="order-product">
                        <div class="thumb">
                            <img src="img/single-1.png" alt="img">
                        </div>
                        <div class="details">
                            <h6>All Season Gulliver Pizza</h6>
                            <ul>
                                <li><span>Select Size: </span>Large</li>
                                <li><span>Select Crust: </span>Double Crust</li>
                            </ul>
                        </div>
                    </div>
                    <ul class="amount">
                        <li>Subtotal<span>$50.00</span></li>
                        <li class="total">Total<span>$50.00</span></li>
                    </ul>
                    <div class="payment-method">
                        <h6>Check payments</h6>
                        <ul class="card-area">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    </label>
                                </div>
                                <div class="details">
                                    <h6>Credit Cart <img src="img/peyment-card.png" alt="img"></h6>
                                    <p>Pay with visa, Anex, MasterCard, Maestro,Discover and many other credit and debit
                                        credit vai paypal</p>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    </label>
                                </div>
                                <div class="details">
                                    <h6>PayPal <img src="img/paypal-card.png" alt="img"></h6>
                                    <p>Pay easily, fast and secure with PayPal.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a class="btn btn-secondary w-100" href="#"> PLACE ORDER</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
include 'includes/script.php'

?>