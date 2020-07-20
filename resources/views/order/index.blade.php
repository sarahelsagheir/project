<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOOKIE</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    <link rel="stylesheet" href="{{asset('fashi/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fashi/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('book-store/css/styles.css')}}">
</head>

<body>

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header>

        <div class="main-menu">
            <div class="container">
                @include('layouts.navbar')

            </div>
        </div>
    </header>

    <section class="shopping-cart spad p-0 m-0">
        <div class="container">
            <div class="row justify-content-center">
                @if($carts)
                @foreach($carts as $cart)
                <div class="cart-table p-3 col-md-12" style="border: none; box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.2);">
                    <table class="table-striped " style="border: none">
                        <thead style="background: #074985">
                            <tr>
                                <th class="p-name" style="color: white">Product Name</th>
                                <th style="color: white">Price</th>
                                <th style="color: white">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart->items as $item)
                            <tr>
                                <td class="cart-title first-row">
                                    <h5 class="pl-1" style="font-size:16px"> {{$item['title'] }}</h5>
                                </td>
                                <td class="p-price first-row" style="font-size:16px">{{$item['price'] }} L.E</td>

                                <td class="qua-col first-row" style="font-size:16px">
                                    <div class="quantity">
                                        {{$item['qty'] }}
                                    </div>
                                </td>
                                <td class="qua-col first-row" style="font-size:16px">

                                <a href="{{'invoice/'.$item['id'].'/'.$item['qty']}}" class="btn ">Save as PDF</a>
</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-sart">

                        <div class="col-lg-12">
                            <div class="proceed-checkout" style="border: none; box-shadow: 4px 4px 8px 4px rgba(0, 0, 0, 0.2);">
                                <ul>
                                    <li class="cart-total">Total Price :<span>{{$cart->totalPrice}}L.E</span></li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <p>There are no items in the cart</p>
        @endif
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="address">
                        <h4>Our Address</h4>
                        <h6>The BookStore Theme, 4th Store
                            Beside that building, USA</h6>
                        <h6>Call : 800 1234 5678</h6>
                        <h6>Email : info@bookstore.com</h6>
                    </div>
                    <div class="timing">
                        <h4>Timing</h4>
                        <h6>Mon - Fri: 7am - 10pm</h6>
                        <h6>​​Saturday: 8am - 10pm</h6>
                        <h6>​Sunday: 8am - 11pm</h6>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="navigation">
                        <h4>Navigation</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-conditions.html">Terms</a></li>
                            <li><a href="products.html">Products</a></li>
                        </ul>
                    </div>
                    <div class="navigation">
                        <h4>Help</h4>
                        <ul>
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="privacy-policy.html">Privacy</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form">
                        <h3>Quick Contact us</h3>
                        <h6>We are now offering some good discount
                            on selected books go and shop them</h6>
                        <form method="POST" action="{{url('/contact_us')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input placeholder="Name" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="col-md-12">
                                    <textarea placeholder="Messege" name="msg"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn black">Alright, Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>(C) 2017. All Rights Reserved. BookStore Wordpress Theme</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="share align-middle">
                            <span class="fb"><i class="fa fa-facebook-official"></i></span>
                            <span class="instagram"><i class="fa fa-instagram"></i></span>
                            <span class="twitter"><i class="fa fa-twitter"></i></span>
                            <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                            <span class="google"><i class="fa fa-google-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- modals -->
    @include('layouts.share')
    @include('layouts.changePic')
    @include('layouts.changePas')

    </div>



    <script src="../fashi/js/jquery-3.3.1.min.js"></script>
    <script src="../fashi/js/bootstrap.min.js"></script>
    <script src="../fashi/js/jquery-ui.min.js"></script>
    <script src="../fashi/js/jquery.countdown.min.js"></script>
    <script src="../fashi/js/jquery.nice-select.min.js"></script>
    <script src="../fashi/js/jquery.zoom.min.js"></script>
    <script src="../fashi/js/jquery.dd.min.js"></script>
    <script src="../fashi/js/jquery.slicknav.js"></script>
    <script src="../fashi/js/owl.carousel.min.js"></script>
    <script src="../fashi/js/main.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    @include('sweetalert::alert')

</body>

</html>
