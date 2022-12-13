<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Vadodara Startup Festival 2.0</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="http://www.paruluniversity.ac.in/pu-web/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('programs/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('programs/assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('programs/assets/vendor/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('programs/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('programs/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('programs/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('programs/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('programs/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center">

            <!--h1 class="logo mr-auto"><a href="index.html">Rapid</a></h1-->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{route('programs.hackathon')}}" class="logo mr-auto"><img src="{{asset('programs/assets/img/logo.png')}}" alt="" class="img-fluid"></a>

            <nav class="main-nav d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#hero">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Hackathon 1.0</a></li>
                    <li><a href="#faq">Tracks</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                    <li><a href="{{route('hackathon.logins')}}" class="login-btn">Login / Register</a></li>
                </ul>
            </nav><!-- .main-nav-->
        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="clearfix">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center" data-aos="fade-up">
                <div class="col-md-6 intro-info order-md-first order-last" data-aos="zoom-in" data-aos-delay="100">
                    <h2>Vadodara<br><span>Hackathon <span style="font-size: 64px;">2.0</span></span></h2>
                    <h3>11-13th Feb 2021</h3>
                    <div>
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                    </div>
                </div>
                <div class="col-md-6 intro-img order-md-last order-first" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{asset('programs/assets/img/intro.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-lg-5 col-md-6 video">
                        <video poster="{{asset('programs/assets/img/logo.png')}}" id="video" crossorigin controls>
                            <source src="{{asset('programs/assets/img/hackathonvideo.mp4')}}" type="video/mp4">
                        </video>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <div class="about-content" data-aos="fade-left" data-aos-delay="100">
                            <h2>About Event</h2>
                            <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>

                        </div>
                    </div>


                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Vadodara Hackathon 1.0</h3>
                    <h4>Over <span data-toggle="counter-up">500</span><span>+</span> Registration</h4>
                </header>
                <div class="row">
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <span class="count" data-toggle="counter-up">36</span><span class="count"></span>
                            <h4 class="title">Hours</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <span class="count" data-toggle="counter-up">10</span><span class="count">+</span>
                            <h4 class="title">Partners</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <span class="count" data-toggle="counter-up">450</span><span class="count">+</span>
                            <h4 class="title">Ideas</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <span class="count" data-toggle="counter-up">25</span><span class="count">+</span>
                            <h4 class="title">Institue Participated</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <span class="count" data-toggle="counter-up">40</span><span class="count">+</span>
                            <h4 class="title">Mentors</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow bounceInUp" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <span class="count" data-toggle="counter-up">150</span><span class="count">+</span>
                            <h4 class="title">Problem Statement</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>Tracks for Hackathon 2.0</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </header>
                <ul id="faq-list" data-aos="fade-up" data-aos-delay="100">
                    <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">Education & Empowerment (NEP-2020)<i class="ion-android-remove"></i></a>
                        <div id="faq1" class="collapse" data-parent="#faq-list">
                            <!-- order table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="default_order" class="table table-bordered" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Problem Id</th>
                                                            <th>Problem Category</th>
                                                            <th>Problem Title</th>
                                                            <th>#</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($statement as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->Problem_Category }}</td>
                                                            <td>{{ $item->Problem_Title}}</td>
                                                            <td>
                                                                <button class="btn viewID" data-toggle="modal" data-target="#model2" data-id={{$item->id}}>view</button>
                                                                <a href="{{ route('hackathon.apply',$item->id) }}">
                                                                    <button class="btn " data-id={{$item->id}}>Apply</button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Problem Id</th>
                                                            <th>Problem Category</th>
                                                            <th>Problem Title</th>
                                                            <th>#</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">Work & Economy(Covid-19 Impact) AI for Local<i class="ion-android-remove"></i></a>
                        <div id="faq2" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Bio & Healthcare Tech(Remote Health Solution)<i class="ion-android-remove"></i></a>
                        <div id="faq3" class="collapse" data-parent="#faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">Entertainment(New Models of Engagements)<i class="ion-android-remove"></i></a>
                        <div id="faq4" class="collapse" data-parent="#faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Envirnoment & Sustainability<i class="ion-android-remove"></i></a>
                        <div id="faq5" class="collapse" data-parent="#faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Mad About Craft<i class="ion-android-remove"></i></a>
                        <div id="faq6" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq7" class="collapsed">Urban Innovations<i class="ion-android-remove"></i></a>
                        <div id="faq7" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq8" class="collapsed">Medicine & Remedies Track(Ayush & Pharma)<i class="ion-android-remove"></i></a>
                        <div id="faq8" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq9" class="collapsed">FinTech<i class="ion-android-remove"></i></a>
                        <div id="faq9" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq10" class="collapsed">Defense Tech<i class="ion-android-remove"></i></a>
                        <div id="faq10" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq11" class="collapsed">Indian App Game Challenge<i class="ion-android-remove"></i></a>
                        <div id="faq11" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq12" class="collapsed">Manufactoring & Automation<i class="ion-android-remove"></i></a>
                        <div id="faq12" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq13" class="collapsed">Cyber Crime<i class="ion-android-remove"></i></a>
                        <div id="faq13" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq14" class="collapsed">Social Innovations<i class="ion-android-remove"></i></a>
                        <div id="faq14" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq15" class="collapsed">Home Robots - Smart Home Solutions<i class="ion-android-remove"></i></a>
                        <div id="faq15" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq16" class="collapsed">Hyperlocal for Atmanirbhar<i class="ion-android-remove"></i></a>
                        <div id="faq16" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq17" class="collapsed">Techtile<i class="ion-android-remove"></i></a>
                        <div id="faq17" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq18" class="collapsed">Farming,Dairy and Animal Husbandry<i class="ion-android-remove"></i></a>
                        <div id="faq18" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq19" class="collapsed">Tech for Divyangs<i class="ion-android-remove"></i></a>
                        <div id="faq19" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq20" class="collapsed">Energy Sector<i class="ion-android-remove"></i></a>
                        <div id="faq20" class="collapse" data-parent="#faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section><!-- End F.A.Q Section -->

        <!--  Modal content for the above example -->
        <div class="modal fade" id="model1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>Are you Register with us?</h4>
                        <a href="#" class="LoginId"><button class="btn btn-success">Yes</button></a>

                        <a href="#" class="RegId"><button class="btn btn-info">No</button></a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="modal fade" id="model2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="fullWidthModalLabel">Problem Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Problem Id</th>
                                    <td id="data1">xxxxxxxxx</td>
                                </tr>
                                <tr>
                                    <th>Problem Title</th>
                                    <td id="data2">xxxxxxxx</td>
                                </tr>
                                <tr>
                                    <th>Problem Tracks</th>
                                    <td id="data3">xxxxxxxx</td>
                                </tr>

                                <th>Problem Category</th>
                                <td id="data4">xxxxxxxx</td>
                                </tr>
                                <tr>
                                    <th>Problem Description</th>
                                    <td id="data5">xxxxxxxx</td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>

                        </div>


                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">
                <header class="section-header">
                    <h3>Testimonials</h3>
                </header>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="owl-carousel testimonials-carousel">
                            <div class="testimonial-item">
                                <img src="{{asset('programs/assets/img/testimonial-1.jpg')}}" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('programs/assets/img/testimonial-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('programs/assets/img/testimonial-3.jpg')}}" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                            </div>

                            <div class="testimonial-item">
                                <img src="{{asset('programs/assets/img/testimonial-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <header class="section-header">
                    <h3>Our Clients</h3>
                </header>
                <div class="owl-carousel clients-carousel">
                    <img src="{{asset('programs/assets/img/logo/AIC LMCP4June18(F).png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/Anzen Logo.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/AVF square.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/BDF_logo_png.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/Copy of pnglogo_highresolution.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/CrAdLE.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/faad logo - transparent.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/icreate logo Highres-png.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/image002.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/100openstartup.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/kelvion logo.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/lead angels.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/legal-workmate-logo.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/Logo.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/Neos Logo.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/pnglogo_highresolution.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/smart up logo-01.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/Syncoro Ventures.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/tattvamassi logo.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/TIE Logo-0.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/VIC Logo.png')}}" alt="">
                    <img src="{{asset('programs/assets/img/logo/WF NEN.png')}}" alt="">
                </div>
            </div>
        </section><!-- End Clients Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="footer-info">
                                <h3>INNOFEST 2.0</h3>
                                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#services">Hackathon 1.0</a></li>
                                <li><a href="#faq">Tracks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-links">
                            <h4>Contact Us</h4>
                            <p>
                                Parul Univercity-EDC<br>
                                PIET Campus, Limda<br>
                                Vadodara-391760 <br>
                                <strong>Phone:</strong> +91 999 999 9999<br>
                                <strong>Email:</strong>tinkeringhub@paruluniversity.ac.in<br>
                            </p>
                        </div>
                        <div class="social-links">
                            <a href="https://twitter.com/paruluniversity" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.facebook.com/ParulUniversity/" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/paruluniversity/" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/school/paruluniversity/ " class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="size: 10px;">
        <div class="container">
            <div class="copyright">
                &copy; Copyright 2020 <strong>Parul University</strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End  Footer -->


    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('programs/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('programs/assets/vendor/aos/aos.js')}}"></script>

    <script src="{{asset('programs/assets/js/datatable/datatable-basic.init.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('programs/assets/js/main.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.viewID').click(function() {
                var id = $(this).data('id');
                $.get('/hackathon/view/' + id, function(response) {
                    if (response.success) {
                        console.log(response.statement);
                        document.getElementById('data1').innerHTML = response.statement['id'];
                        document.getElementById('data2').innerHTML = response.statement['Problem_Title'];
                        document.getElementById('data3').innerHTML = response.statement['Problem_Tracks'];
                        document.getElementById('data4').innerHTML = response.statement['Problem_Category'];
                        document.getElementById('data5').innerHTML = response.statement['problem_Description'];
                    }
                });

            });
        });

    </script>

    <script type="text/javascript">
        var videoPlayButton
            , videoWrapper = document.getElementsByClassName('video')[0]
            , video = document.getElementsByTagName('video')[0]
            , videoMethods = {
                renderVideoPlayButton: function() {
                    if (videoWrapper.contains(video)) {
                        this.formatVideoPlayButton()
                        video.classList.add('has-media-controls-hidden')
                        videoPlayButton = document.getElementsByClassName('video-overlay-play-button')[0]
                        videoPlayButton.addEventListener('click', this.hideVideoPlayButton)
                    }
                },

                formatVideoPlayButton: function() {
                    videoWrapper.insertAdjacentHTML('beforeend', '\
                <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video">\
                    <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"/>\
                    <polygon points="70, 55 70, 145 145, 100" fill="#fff"/>\
                </svg>\
            ')
                },

                hideVideoPlayButton: function() {
                    video.play()
                    videoPlayButton.classList.add('is-hidden')
                    video.classList.remove('has-media-controls-hidden')
                    video.setAttribute('controls', 'controls')
                }
            }

        videoMethods.renderVideoPlayButton()

    </script>

</body>

</html>
