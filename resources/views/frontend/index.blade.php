<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casino Whizz</title>

    <!-- Favicon Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"
        integrity="sha512-0OCvzZyRsIJ9Rg7O1S+Wf9ucukmVhyOg3h5eBG05aeH4NjG78fCEaEX3ofvndmukzENiX24fK5X/jPr6Y8yIdg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/plugins/wow/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/js/mixitup.min.js">
    <link rel="stylesheet" href="{{ asset('frontendAssets') }}/css/style.css">
</head>

<body data-spy="scroll">

    <!-- Navbar start -->
    <header style="background: {{ $setting->header_bg }};">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/images') }}/{{ $setting->logo }}" alt="{{ $setting->logo }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Casinos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Crypto</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Games</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Slots</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bonuses</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Casino Software</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">News & Tips</a>
                            </li>
                        </ul>
                        <div id="loginBlock">
                            <form class="d-flex">
                                <input type="search" name="search" placeholder="Search here" id="inputSearch">
                                <img id="searchBtn" height="30px" class="searchImg"
                                    src="{{ asset('frontendAssets') }}/images/Search.png" alt="search-icon">
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Navbar end -->


    <!-- Banner Start -->
    <section id="banner"
        style="background: url('{{ asset('assets/images') }}/{{ $setting->banner_bg }}');  background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>{{ $setting->banner_heading }}</h1>
                    <p>{{ $setting->banner_description }}</p>

                    <div class="banner-btn">
                        <a href="{{ $setting->banner_play_now_link }}" class="btn-bg">Play Now</a>
                        <a href="{{ $setting->banner_read_more_link }}" class="btn-tr">Read more about the casino <i
                                class="fa fa-thin fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img-part">
                        <img src="{{ asset('assets/images') }}/{{ $setting->banner_photo }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Ends -->



    <!-- Best casino start -->
    <section id="best_casino" style="background: {{ $setting->best_casino_bg_color }};">
        <div class="casino_option" style="background: {{ $setting->other_casino_bg }};">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9">
                        <ul>
                            <li>
                                <a href="{{ $setting->other_casino_one_link }}">USA Online Casinos</a>
                            </li>
                            <li>
                                <a href="{{ $setting->other_casino_two_link }}">Online Casinos Australia</a>
                            </li>
                            <li>
                                <a href="{{ $setting->other_casino_three_link }}">Online Slots</a>
                            </li>
                            <li>
                                <a href="{{ $setting->other_casino_four_link }}">Online Casinos Canada</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <ul class="arrows">
                            <li><i class="fa-solid fa-arrow-left left-arrow"></i></li>
                            <li><i class="fa-solid fa-arrow-right right-arrow"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2>Best casinos in US</h2>
            <div class="row casino-slider">
                @foreach ($best_casino as $best)
                <div class="casino">
                    <div class="img">
                        <img src="{{ asset('assets/images') }}/{{ $best->photo }}" alt="casino1">
                    </div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-lg-6 col-6">
                                <h4>{{ $best->title }}</h4>
                                <span>{{ $best->percent }}% Rating</span>
                            </div>
                            <div class="col-lg-6 col-6 btn">
                                <a href="{{ $best->button_link }}">Play Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Best casino ends -->


    <!-- partner Start -->
    <section id="partners" style="background: {{ $setting->partner_bg }};">
        <div class="container">
            <div class="partner-slider">
                @foreach ($partners as $partner)
                <div class="partner">
                    <img src="{{ asset('assets/images') }}/{{ $partner->partner_logo }}"
                        alt="{{ $partner->partner_logo }}">
                </div>
                @endforeach
            </div>
        </div>

    </section>
    <!-- partner Ends -->


    <!-- Trusted Casino start -->
    <section id="trusted_casino" style="background: {{ $setting->trusted_casino_bg }};">
        <div class="container">
            <h1>{{ $setting->trusted_casino_heading }}</h1>
            <p>{{ $setting->trusted_casino_description }}<span>{{ $setting->trusted_casino_color_description }}</span></p>
            <h1>{{ $setting->trusted_casino_title }}</h1>
            @foreach ($online_casino as $online)
            <div class="best_casino">
                <div class="tag">#{{ $loop->index+1 }}</div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="casino_card">
                            <div class="img">
                                <img src="{{ asset('assets/images') }}/{{ $online->photo }}"
                                    alt="best_casino-{{ $online->photo }}">
                            </div>
                            <div class="details">
                                <h4>{{ $online->name }}</h4>
                                <span>{{ $online->rating }}% Rating</span>
                                <br>
                                <a href="{{ $online->read_more_link }}">Read review <i
                                        class="fa fa-thin fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="casino_bonus">
                            <span class="welcome">WELCOME BONUS</span>
                            <br>
                            <span class="welcome_bonus">{{ $online->welcome_bonus }}</span>
                            <p class="promo_code">Promo code: <span class="code">{{ $online->promo_code }}</span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="casino_updates">
                            <h6><span>WHIZZ</span> HOT?</h6>
                            <ul>
                                <li><i class="fa fa-thin fa-check"></i> Sublime bonus package of up to $5,000</li>
                                <li><i class="fa fa-thin fa-check"></i> Bonus wagering is fair</li>
                                <li><i class="fa fa-thin fa-check"></i> Withdrawals are cleared fast</li>
                                <li><i class="fa fa-thin fa-check"></i> Live Casino</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="casino_play">
                            <a href="{{ $online->play_now_link }}" class="btn-bg">Play Now</a>
                            <div class="flug">
                                <img src="{{ asset('assets/images') }}/{{ $online->flug }}"
                                    alt="flug1-{{ $online->flug }}">
                                <span>{{ $online->play_form_text }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="best_casino">
                <div class="tag">#2</div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="casino_card">
                            <div class="img">
                                <img src="{{ asset('frontendAssets') }}/images/best_casinos/2.png" alt="best_casino">
        </div>
        <div class="details">
            <h4>Omni Slots</h4>
            <span>98% Rating</span>
            <br>
            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
        </div>
        </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="casino_bonus">
                <span class="welcome">WELCOME BONUS</span>
                <br>
                <span class="welcome_bonus">100% Welcome Bonus To €$500</span>
                <p class="promo_code">Promo code: <span class="code">Not Needed</span></p>
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="casino_updates">
                <h6><span>WHIZZ</span> HOT?</h6>
                <ul>
                    <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                    <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                    <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                    <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-3">
            <div class="casino_play">
                <a href="#" class="btn-bg">Play Now</a>
                <div class="flug">
                    <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                    <span>Players from US accepted</span>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="best_casino">
            <div class="tag">#3</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/10.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>Bitstarz</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">Welcome Bonus Of $/€500 Or 5BTC 10kAUD</span>
                        <p class="promo_code">Promo code: <span class="code">Not Needed</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_casino">
            <div class="tag">#4</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/3.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>SlotV</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">100% Bonus Up Top €1000</span>
                        <p class="promo_code">Promo code: <span class="code">Not Needed</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_casino">
            <div class="tag">#5</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/4.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>MYB Casino</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">300% Bonus To $2000 + 20 Freespins</span>
                        <p class="promo_code">Promo code: <span class="code">Not Needed</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_casino">
            <div class="tag">#6</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/5.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>BUSR</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">150% Bonus $750 + 50% Cash Back</span>
                        <p class="promo_code">Promo code: <span class="code">Not Needed</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_casino">
            <div class="tag">#7</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/6.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>SlotsNinja</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">410% Exclusive VIP Bonus</span>
                        <p class="promo_code">Promo code: <span class="code">Not Needed</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_casino">
            <div class="tag">#8</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/7.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>Ignition Casino</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">100% Up to $2,000 or 200% To $3000
                            For Bitcoin Deposits</span>
                        <p class="promo_code">Promo code: <span class="code">Not Needed</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_casino">
            <div class="tag">#9</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/8.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>Big Spin Casino</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">500% to $3000 + 25 Free spins</span>
                        <p class="promo_code">Promo code: <span class="code">BSCWHIZZ</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="best_casino">
            <div class="tag">#10</div>
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="casino_card">
                        <div class="img">
                            <img src="{{ asset('frontendAssets') }}/images/best_casinos/9.png" alt="best_casino">
                        </div>
                        <div class="details">
                            <h4>Super Slots</h4>
                            <span>98% Rating</span>
                            <br>
                            <a href="#">Read review <i class="fa fa-thin fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_bonus">
                        <span class="welcome">WELCOME BONUS</span>
                        <br>
                        <span class="welcome_bonus">250% Up To $6000</span>
                        <p class="promo_code">Promo code: <span class="code">WHIZZ250</span></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_updates">
                        <h6><span>WHIZZ</span> HOT?</h6>
                        <ul>
                            <li><i class="fa fa-thin fa-check"></i> Instant play games by Top Brands</li>
                            <li><i class="fa fa-thin fa-check"></i> Chat And Email 24/7</li>
                            <li><i class="fa fa-thin fa-check"></i> SSL encryption software</li>
                            <li><i class="fa fa-thin fa-check"></i> Sign on bonuses have low play-through</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="casino_play">
                        <a href="#" class="btn-bg">Play Now</a>
                        <div class="flug">
                            <img src="{{ asset('frontendAssets') }}/images/flugs/US flag.png" alt="flug1">
                            <span>Players from US accepted</span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>

    </section>
    <!-- Trusted Casino ends -->


    <!-- Related Others Games Start -->
    <section id="other_games" style="background: {{ $setting->related_game_bg }};">
        <div class="container">
            <h1>{{ $setting->related_game_heading }}</h1>
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="buttons text-center">
                        <button data-filter="all">ALL</button>
                        <button data-filter=".slots">SLOTS</button>
                        <button data-filter=".roulette">ROULETTE</button>
                        <button data-filter=".jack">BLACK JACK</button>
                        <button data-filter=".poker">POKER GAMES</button>
                    </div>
                </div>
                <div class="row filter">
                    <div class="col-lg-6 col-12 mb-5 mix slots poker">
                        <div class="game_card">
                            <img src="{{ asset('frontendAssets') }}/images/other_games/1.png" alt="other_games_card">
                            <div class="details">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <h5>FREE POKER GAMES</h5>
                                        <p>Catagory: Roulette</p>
                                        <span>62% Rated</span>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="text-end play_now">
                                            <a href="#" class="btn-bg">Play Now <i
                                                    class="fa-solid fa-circle-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-5 mix  roulette ">
                        <div class="game_card">
                            <img src="{{ asset('frontendAssets') }}/images/other_games/2.png" alt="other_games_card">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 col-6 mb-5 mix slots jack ">
                        <div class="game_card">
                            <img src="{{ asset('frontendAssets') }}/images/other_games/3.png" alt="other_games_card">
                            <div class="details">
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <h5>FREE POKER GAMES</h5>
                                        <p>Catagory: Roulette</p>
                                        <span>62% Rated</span>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="text-end play_now">
                                            <a href="#" class="btn-bg">Play Now <i
                                                    class="fa-solid fa-circle-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-5 mix poker">
                        <div class="game_card">
                            <img src="{{ asset('frontendAssets') }}/images/other_games/4.png" alt="other_games_card">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn-bg browse_all">BROWSE ALL MATCHES <i
                            class="fa-solid fa-circle-chevron-right"></i></a>
                </div>
                <div class="col-lg-8 m-auto text-center">
                    <p class="paragraph"><span>{{ $setting->related_game_bottom_color_text }}</span> {{ $setting->related_game_bottom_text }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Others Games Ends -->



    <!-- Casino Location Start -->
    <section id="casino_location" style="background: {{ $setting->exclusive_bg }};">
        <div class="container">
            <div class="location">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="exclusive_bonus" style="background: url('{{ asset('frontendAssets') }}/images/exclusive_bg.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="double">{{ $setting->exclusive_heading }}</p>
                                    <div class="claim_card">
                                        <img src="{{ asset('assets/images') }}/{{ $setting->exclusive_photo }}"
                                            alt="claim_bonus">
                                        <div class="detail">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p>${{ $setting->exclusive_prev_price }}</p>
                                                    <span>${{ $setting->exclusive_current_price }}</span>
                                                </div>
                                                <div class="col-6 mt-2">
                                                    <a href="{{ $setting->exclusive_button_link }}">Claim Bonus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h2 class="bonus_heading"><span>{{ $setting->exclusive_bonus_to }}</span><br> Exclusive Bonus</h2>
                                </div>
                                <div class="col-lg-4">
                                    <div class="down-part">
                                        <p class="promo_code">PROMO CODE</p>
                                        <a href="#" class="btn-bg">{{ $setting->exclusive_promo_code }}</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="locations">
                            <h1>{{ $setting->casino_location_heading }}</h1>
                            <ul>
                                @foreach ($locations as $location)
                                <li><a href="{{ $location->link }}">{{ $location->location }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Casino Location Ends -->


    <!-- Latest Post Start -->
    <!-- <section id="latest_posts" style="background: #181942;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="blogs">
            <h1>Latest Posts</h1>
            <div class="row">
              <div class="col-lg-6">
                <div class="blog">
                  <img src="{{ asset('frontendAssets') }}/images/blogs/blog1.png" alt="blog-photo">
                  <a href="#" class="title">How To Play Winning Baccarat</a>
                  <br>
                  <span>October 7, 2022</span>
                  <p>How to play winning baccarat is not difficult at all. Besides, baccarat has a low house edge, and
                    it’s an easy casino game to play. In this article, I’m going to giv...</p>
                  <a href="#" class="read_more">Read more <i class="fa fa-thin fa-chevron-right"></i></a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="blog">
                  <img src="{{ asset('frontendAssets') }}/images/blogs/blog2.png" alt="blog-photo">
                  <a href="#" class="title">5 Loosest NetEnt Online Slots</a>
                  <br>
                  <span>October 7, 2022</span>
                  <p>How to play winning baccarat is not difficult at all. Besides, baccarat has a low house edge, and
                    it’s an easy casino game to play. In this article, I’m going to giv...</p>
                  <a href="#" class="read_more">Read more <i class="fa fa-thin fa-chevron-right"></i></a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="blog">
                  <img src="{{ asset('frontendAssets') }}/images/blogs/blog3.png" alt="blog-photo">
                  <a href="#" class="title">How To Play Sic Bo</a>
                  <br>
                  <span>October 7, 2022</span>
                  <p>How to play winning baccarat is not difficult at all. Besides, baccarat has a low house edge, and
                    it’s an easy casino game to play. In this article, I’m going to giv...</p>
                  <a href="#" class="read_more">Read more <i class="fa fa-thin fa-chevron-right"></i></a>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="blog">
                  <img src="{{ asset('frontendAssets') }}/images/blogs/blog4.png" alt="blog-photo">
                  <a href="#" class="title">10 Tips To Become A Better Gambler</a>
                  <br>
                  <span>October 7, 2022</span>
                  <p>How to play winning baccarat is not difficult at all. Besides, baccarat has a low house edge, and
                    it’s an easy casino game to play. In this article, I’m going to giv...</p>
                  <a href="#" class="read_more">Read more <i class="fa fa-thin fa-chevron-right"></i></a>
                </div>
              </div>
              <div class="col-lg-8 text-center">
                <a href="#" class="btn-bg read_more">READ MORE</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="blog_category">
            <h1>Top lists</h1>
            <ul>
              <li>
                <a href="#">Top 10 online casinos</a>
              </li>
              <li>
                <a href="#">Live casinos</a>
              </li>
              <li>
                <a href="#">Best bitcoin casinos</a>
              </li>
              <li>
                <a href="#">Real money Slots</a>
              </li>
              <li>
                <a href="#">Fast Payout Casinos</a>
              </li>
            </ul>
          </div>
          <div class="pay-now">
            <div class="text-content">
              <div class="ads_card">
                <div class="img-box">
                  <img src="{{ asset('frontendAssets') }}/images/casinos/casino1.png" alt="">
                </div>
                <p>Exclusive to <span>lazybet</span></p>
              </div>
              <h3><span>250% Welcome Bonus To</span> $5000 No welcome bonus</h3>
              <a href="#" class="btn-bg">Play Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <!-- Latest Post Ends -->



    <!-- Footer Part Start -->
    <footer style="background: #181942;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer_company">
                        <img src="{{ asset('assets/images') }}/{{ $setting->logo }}" alt="{{ $setting->logo }}">
                        <p>{{ $setting->footer_text }}</p>
                        <ul>
                            @foreach ($socials as $social)
                            <li>
                                <a href="{{ $social->link }}"><i class="{{ $social->icon }}"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-2"></div> -->
                <div class="col-lg-2 col-6 col-sm-4">
                    <p class="footer_head">TOP JACKPOT GAMES</p>
                    <ul>
                        <li><a href="#">FREE POKER GAMES</a></li>
                        <li><a href="#"><i class="fa fa-thin fa-face-smile"></i> 62% Rated</a></li>
                        <li><a href="#">CLUB POKER GAME</a></li>
                        <li><a href="#"><i class="fa fa-thin fa-face-smile"></i> 62% Rated</a></li>
                        <li><a href="#">ROYAL POKER GAME</a></li>
                        <li><a href="#"><i class="fa fa-thin fa-face-smile"></i> 62% Rated</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4">
                    <p class="footer_head">MOST POPULAR</p>
                    <ul>
                        @foreach ($most_populer as $populer)
                        <li><a href="{{ $populer->link }}">{{ $populer->text }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- <div class="col-lg-2 col-12 col-sm-4">
          <div class="last-part">
            <p class="footer_head">ABOUT</p>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Privacy policy</a></li>
              <li><a href="#">Terms of use</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>
          </div>
        </div> -->
                <div class="col-lg-12">
                    <p class="copy_right">Betsson Copyright © 2022 All Rights Reserved. Developed By <a
                            href="https://futureinltd.com/" target="_blank">Future Innovation</a> </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Part Ends -->


    <!-- All Scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js"
        integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"
        integrity="sha512-An4a3FEMyR5BbO9CRQQqgsBscxjM7uNNmccUSESNVtWn53EWx5B9oO7RVnPvPG6EcYcYPp0Gv3i/QQ4KUzB5WA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('frontendAssets') }}/plugins/wow/js/wow.min.js" defer></script>
    <script src="{{ asset('frontendAssets') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('frontendAssets') }}/js/script.js"></script>


    <script type="text/javascript">
        var searchBtn = document.getElementById("searchBtn")
        var inputSearch = document.getElementById("inputSearch")
        var loginBlock = document.getElementById("loginBlock")
        searchBtn.onclick = function () {
            if (inputSearch.style.right == "50px") {
                inputSearch.style.right = "0px";
                inputSearch.style.visibility = "hidden";
            } else {
                inputSearch.style.right = "50px";
                inputSearch.style.display = "block";
                inputSearch.style.visibility = "visible";
                inputSearch.style.zIndex = 0;
                loginBlock.style.display = "block";
            }
        }
    </script>
</body>

</html>