<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Paramorso-Your Consultancy Solution" />
    <meta name="keywords" content="paramorsho,paramorsho website,online doctor,online lawyer,online psychologist" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="{{ asset('frontend_assets') }}/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="{{ asset('frontend_assets') }}/img/favicon/favicon.ico" type="image/x-icon" />
    <title>Paramorso-Your Consultancy Solution</title>

    <link href="../../../fonts.googleapis.com/css2ce4e.css?family=Cairo:wght@200;300;400;600;900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/slicknav.min.css" type="text/css" />
    <!-- <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/style.css" type="text/css" />
     -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/index.min.css" type="text/css" />
    <!-- <link rel="stylesheet" href="dist/index.min.css" type="text/css" /> -->

</head>

<body>
    <div class="profile-card-overlay hide"></div>


    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('frontend_assets') }}/img/logo/logo-2.png" alt="Paramorsho Logo" /></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                </li>
            </ul>
            <div class="header__cart__price">item: <span>৳ 200.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png " alt="" />
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a onclick="myFunction()" href="#">Spanis</a></li>
                    <li><a onclick="myFunction()" href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#" onclick="myFunction()"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="/">Home</a></li>
                <li><a href="{{ url('our-team') }}">Our Team</a></li>
                <!-- <li>
            <a href="#">Blogs</a>
            <ul class="header__menu__dropdown">
              <li><a href="shop-details.html">About Us</a></li>
              <li><a href="shoping-cart.html">Shoping Cart</a></li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li> -->
                <li><a href="#" onclick="myFunction()">Blog</a></li>
                <li><a href="#" onclick="myFunction()">About Us</a></li>
                <li><a href="{{ url('privacy_policy') }}">Privacy Policy</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://www.facebook.com/paramorsho" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.youtube.com/channel/UCfqCJGGXqnnchyV0NdWjy_g" target="_blank"><i
                    class="fa fa-youtube"></i></a>
            <a href="#" onclick="myFunction()"><i class="fa fa-linkedin"></i></a>
            <a href="#" onclick="myFunction()"><i class="fa fa-twitter"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="#">support@paramorsho.com</a>
                </li>
                <li>Paramorsho-Your Consultancy Solution</li>
            </ul>
        </div>
    </div>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <div class="header__top__left">
                            <ul>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <a href="" class="__cf_email__" style="color: white">support@paramorsho.com</a>
                                </li>
                                <li>
                                    Paramorsho is a mobile app-based online consultation service
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/paramorsho" target="_blank"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://www.youtube.com/channel/UCfqCJGGXqnnchyV0NdWjy_g" target="_blank"><i
                                        class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('frontend_assets') }}/img/language.png" alt="" />
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo" style="text-align: center">
                        <a href="#" onclick="myFunction()"><img src="{{ asset('frontend_assets') }}/img/logo/logo-1.png"
                                height="100" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="{{ url('our-team') }}">Our Team</a></li>
                            <!-- <li>
                  <a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                    <li><a href="shop-details.html">Blogs</a></li>
                    <li><a href="shoping-cart.html">About Us</a></li>
                    <li><a href="checkout.html">Check Out</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
                </li> -->
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-heart"></i> <span>1</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a>
                            </li>
                        </ul>
                        <div class="header__cart__price">item: <span>৳ 200.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>

    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Consultancies</span>
                        </div>
                        <ul>
                            <li><a href="#" onclick="myFunction()">Doctor</a></li>
                            <li><a href="#" onclick="myFunction()">Lawyer</a></li>
                            <li><a href="#" onclick="myFunction()">Psychologist</a></li>
                            <li><a href="#" onclick="myFunction()">IT Consultant</a></li>
                            <li><a href="#" onclick="myFunction()">Nutritionist</a></li>
                            <li>
                                <a href="#" onclick="myFunction()">Beauty & Life Style Consultant</a>
                            </li>
                            <li>
                                <a href="#" onclick="myFunction()">Business Consultant</a>
                            </li>
                            <li><a href="#" onclick="myFunction()">Gym Consultant</a></li>
                            <li>
                                <a href="#" onclick="myFunction()">Agriculture Consultant</a>
                            </li>
                            <li>
                                <a href="#" onclick="myFunction()">Finance and Banking Consultant</a>
                            </li>
                            <li>
                                <a href="#" onclick="myFunction()">Musical/Instrument Consultant</a>
                            </li>
                            <li>
                                <a href="#" onclick="myFunction()">Travel Consultant</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#" onclick.prevent="myFunction()">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?" />
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+8801965-992299</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
              <div class="hero__text">
                <span>DOWNLOAD OUR APP</span>
                <h2>PARAMORSHO</h2>
                <p>Your Consultancy Solution</p>
                <a href="#" onclick="myFunction()" class="primary-btn"
                  >Download App</a
                >
              </div>
            </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Team</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Our Team</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-content">
        <div class="container">
            <!-- first row  -->
            <div class="row">
                <!-- profile start  -->
                <div class="profile-bio hide" id='profile0'>
                    <span class="profile-clos-btn" id='close0'>x</span>
                    <h3>About Sajjat Hossain Samin </h3>
                    <div class="short-info">
                        <p>
                            Sajjat Hossain is the Founder & CEO of Paramorsho which is a mobile app-based online
                            consultation service. Paramorsho
                            has brought all experts at one’s fingertip. By using paramorsho app anyone can consult with
                            an
                            expert (ex: Doctor,
                            Lawyer, Psychologist, Nutritionist, Fitness Trainer, Travel Consultant, Immigration
                            consultant,
                            etc) through video or
                            audio call. Sajjat Hossain sets the vision and strategy for the company. In 2020 He left the
                            job
                            & started working to
                            give a real look to what had been in his head for a long time: A Start-up Company that will
                            turn
                            into a unicorn and
                            contribute to achieving Sustainable Development goals with the benefits of information
                            technology.
                        </p>
                        <p>
                            Sajjat Hossain graduated with a B.Sc. in Psychology from the National University and
                            attended
                            the University of Dhaka,
                            where he earned his Master’s in School Psychology degree. After having the MS, he joined the
                            BRAC IED as a Learning
                            Support Facilitator. In college life, he was involved with a prominent social organization
                            such
                            as Bissho Sahitta
                            Kendro, Prothom Alo Bandhusava, etc. He was the Founder Chief Coordinator of AASCBR, a
                            leading
                            library movement.
                        </p>
                        <p>
                            In his pastime, He loved to read the book, watching film and recite poetry. He is the big
                            fan of
                            Yuval Noah Harari &
                            Haruki Murakami. Abbas Kiarostami and Kim Ki Duk are his favourite filmmakers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-12">
                    <div class="profile-card">
                        <div class="profile-card_cover">
                            <img src="{{ asset('frontend_assets') }}/img/our-team-cover-background.png" alt="">
                        </div>
                        <div class="profile-card_padding">
                            <div class="profile-card_image">
                                <img src="{{ asset('frontend_assets') }}/img/users/sajjad.jpeg" alt="">
                            </div>
                            <div class="profile-card_details">
                                <h3>Sajjat Hossain Samin</h3>
                                <p class="text-muted">CEO & Founder</p>
                            </div>
                            <div class="profile-card_social">
                                <a href=#!>
                                    <img src="{{ asset('frontend_assets') }}/img/social/mail.png" alt="Linkedin">
                                    <span class='profile-card-mail text-muted'>
                                        sajjathossain.ceo@gmail.com
                                    </span>
                                </a>

                            </div>
                        </div>
                        <button class="profile-btn" id='btn0'>Explore</button>
                    </div>
                </div>
                <!-- profile end  -->


                <!-- profile start  -->
                <div class="profile-bio hide" id='profile1'>
                    <span class="profile-clos-btn" id='close1'>x</span>
                    <h3>About Fazilatunnesa Tania</h3>
                    <div class="short-info">
                        <p>
                            Fazilatunnesa Tania is appointed as the deputy director of "Paramorsho" in 2020, which is a
                            Mobile app based online
                            consultation service. By using this app, anyone can consult with an expert.
                        </p>
                        <p>
                            She completed her M.s.s from the National University. During her graduation degree, she
                            joined at Govt.sector in a
                            primary school as an assistant teacher.She had more then 18 years experience is working in
                            this sector and it is runing.
                        </p>
                        <p>
                            As a deputy director of Paramorsho, she is very dedicated to contribute anything to achieve
                            it’s goal.
                        </p>
                        <p>
                            Alongside in her professional life,she was involved with a social organisation and this was
                            "Abdullah Abu Sayeed Center
                            for Book Reading." This organisation is mainly worked to build-up readers who can change our
                            society. Which has
                            organised reading cycle, science fest,movie fest,art competition e.t.c.
                        </p>
                        <p>
                            All this apart, she loved to read books,listening music and travelling.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-12">
                    <div class="profile-card">
                        <div class="profile-card_cover">
                            <img src="{{ asset('frontend_assets') }}/img/our-team-cover-background.png" alt="">
                        </div>
                        <div class="profile-card_padding">
                            <div class="profile-card_image">
                                <img src="{{ asset('frontend_assets') }}/img/users/tania.jpg" alt="">
                            </div>
                            <div class="profile-card_details">
                                <h3>Fazilatunnesa Tania</h3>
                                <p class="text-muted">
                                    Deputy Director</p>
                            </div>
                            <div class="profile-card_social">
                                <a href=#!>
                                    <img src="{{ asset('frontend_assets') }}/img/social/mail.png" alt="Linkedin">
                                    <span class='profile-card-mail text-muted'>
                                        tanianandini143@gmail.com
                                    </span>
                                </a>

                            </div>
                        </div>
                        <button class="profile-btn" id='btn1'>Explore</button>
                    </div>
                </div>
                <!-- profile end  -->


                <!-- profile start  -->
                <div class="profile-bio hide" id='profile2'>
                    <span class="profile-clos-btn" id='close2'>x</span>
                    <h3>About Ali Azgar Rakib</h3>
                    <div class="short-info">
                        <p>
                            People say nothing is impossible. Rakib is that type of guy who does nothing every day!
                            Also, he
                            copies other quotes
                            very nicely without quoting. Besides that Rakib is a Fullstack Web Developer. He cannot hack
                            NASA with HTML but he knows
                            HTML as well as CSS, Bootstrap, Javascript, Vue Js, PHP, Laravel, MySQL(IIt's just some
                            technology. If you are not
                            familiar with those just ignore them and also set in your mind that this guy is genius !!
                            😐).
                            One
                            good thing about him,
                            He always updates himself with technologies that's why he has a can-do attitude about any
                            technical task.
                        </p>
                        <p>
                            Rakib is Head of IT of Paramorsho. He loves to do creative things with technology. That's
                            why he
                            joins paramorsho at the
                            beginning. He will lead IT team to make paramorsho app fast, user-friendly, and interactive.
                            He
                            will give 100%
                            satisfaction to paramorsho mobile app users with cool stuff through tachnology and will make
                            paramorsho a unicorn
                            company. To achieve this goal, he starts coding inside four walls with his favorite laptop,
                            like
                            Gautama Buddha
                            meditated for enlightenment
                        </p>

                        <p>
                            Rakib is a self-taught coder-programmer although he has a 4-years Diploma degree in CSE but
                            he
                            thinks it's not helped
                            much for learning programming. He worked as an intern Web Developer at Creative IT
                            Institute.
                            After that, He worked as a
                            freelance web developer and did some web development projects.
                        </p>
                        <p>
                            In College life,He has done lots of social work . Rakib joined a college programming club
                            and
                            worked as a trainer. In
                            addition, he took part in a revolution called the 'Boipora Movement (Revolution for Reading
                            Book)'. In this revolution,
                            they have made a library and cultural organization. They run a reading cycle in 20 college
                            universities, organize a
                            yearly science fest, cinema fest, and many more cultural programs. Rakib also a member of
                            some
                            creative platforms such
                            as Bishwo Shahitto Kendro, Bandhushava, etc .
                        </p>
                        <p>
                            Rakib Love to read Books and Watch Movie. He loves to read Manik Bandopadhyay.Aroj Ali
                            Matubbar's, Yuval Noah Harari's
                            thoughts have a strong influence on him. His Favourite movie director is Kim Ki Duk
                            (warning:
                            please don't watch Kim Ki
                            Duk's movies if you are not an adult and not matures ! 😌). He write movies and book's
                            review,
                            some times short story,
                            essay and also do some shitty comedy and make meme as well.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-12">
                    <div class="profile-card">
                        <div class="profile-card_cover">
                            <img src="{{ asset('frontend_assets') }}/img/our-team-cover-background.png" alt="">
                        </div>
                        <div class="profile-card_padding">
                            <div class="profile-card_image">
                                <img src="{{ asset('frontend_assets') }}/img/users/rakib.png" alt="">
                            </div>
                            <div class="profile-card_details">
                                <h3>Ali Azgar Rakib</h3>
                                <p class="text-muted">Head of IT</p>
                            </div>
                            <div class="profile-card_social">
                                <a href=#!>
                                    <img src="{{ asset('frontend_assets') }}/img/social/mail.png" alt="Linkedin">
                                    <span class='profile-card-mail text-muted'>
                                        aliazgarrakib.it@gmail.com
                                    </span>
                                </a>

                            </div>
                        </div>
                        <button class="profile-btn" id='btn2'>Explore</button>
                    </div>
                </div>
                <!-- profile end  -->



            </div>
            <!-- end first row  -->
            <!-- first row  -->
            <div class="row">
                <!-- profile start  -->
                <div class="profile-bio hide" id='profile3'>
                    <span class="profile-clos-btn" id='close3'>x</span>
                    <h3>About Elizabeth Eti Marandy</h3>
                    <div class="short-info">
                        <p>
                            Elizabeth is a Promotional Content Creator & Strategy maker. She brings creative touch in
                            the
                            promotional strategy of
                            Paramorsho app.
                        </p>
                        <p>
                            Elizabeth completed her Bachelor of Arts in English Language & Literature (ELL) from Notre
                            Dame
                            University Bangladesh.
                        </p>
                        <p>
                            Due to having skills in English Language & Literature she has an excellent skill in content
                            writing as well.
                        </p>
                        <p>
                            Earlier in her Campus life she used to be the Club Ambassador of NDUB Cultural Club
                        </p>
                        <p>
                            She is passionate about creating impactful content and implementing in professional field as
                            well. She is highly
                            dedicated in resolving the market situation and challenging projects of Paramorsho app.
                        </p>
                        <p>
                            She loves to Reading fictions, gardening, travelling
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4">
                    <div class="profile-card">
                        <div class="profile-card_cover">
                            <img src="{{ asset('frontend_assets') }}/img/our-team-cover-background.png" alt="">
                        </div>
                        <div class="profile-card_padding">
                            <div class="profile-card_image">
                                <img src="{{ asset('frontend_assets') }}/img/users/eti.png" alt="">
                            </div>
                            <div class="profile-card_details">
                                <h3>Elizabeth Eti Marandy</h3>
                                <p class="text-muted">Brand Promotion & Sales
                                    Executive</p>
                            </div>
                            <div class="profile-card_social">
                                <a href=#!>
                                    <img src="{{ asset('frontend_assets') }}/img/social/mail.png" alt="Linkedin">
                                    <span class='profile-card-mail text-muted'>
                                        eliza.eti1197@gmail.com
                                    </span>
                                </a>

                            </div>
                        </div>
                        <button class="profile-btn" id='btn3'>Explore</button>
                    </div>
                </div>
                <!-- profile end  -->


                <!-- profile start  -->
                <div class="profile-bio hide" id='profile4'>
                    <span class="profile-clos-btn" id='close4'>x</span>
                    <h3>About Edward Wilson</h3>
                    <div class="short-info">
                        <p>
                            Edward is a creative marketing professional with expertise in Brand promotion and HR
                            management.
                            He brings over several
                            years of experience in working with Multinational Corporations, Non- Governmental
                            organisation
                            including Square
                            Pharmaceuticals Limited, Access Bangladesh Foundation etc. Most recently he held the role of
                            Brand promotion & sales
                            Executive and working with a number of rural and urban people to enhance the connectivity
                            and
                            operations of Paramorsho.
                        </p>
                        <p>
                            Edward completed his Bachelors of Business Administartion (BBA) from Notre Dame University
                            Bangladesh. Before starting
                            his career in the marketing & Brand promotion department , He used to work and train himself
                            in
                            the Recruitment &
                            Selection team of Square Pharmaceuticals limited,
                            Due to having double major educational background in Marketing and HR as well
                        </p>
                        <p>
                            Earlier in his Campus life he used to be the part of the Executive Body at NDUB Business
                            Club
                            for few terms.
                        </p>
                        <p>
                            He is passionate about creating impactful marketing communications. He loves to travel,
                            Generate
                            new ideas in his spare
                            time.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-12">
                    <div class="profile-card">
                        <div class="profile-card_cover">
                            <img src="{{ asset('frontend_assets') }}/img/our-team-cover-background.png" alt="">
                        </div>
                        <div class="profile-card_padding">
                            <div class="profile-card_image">
                                <img src="{{ asset('frontend_assets') }}/img/users/edward.jpg" alt="">
                            </div>
                            <div class="profile-card_details">
                                <h3>Edward Wilson</h3>
                                <p class="text-muted">Brand Promotion & Sales
                                    Executive</p>
                            </div>
                            <div class="profile-card_social">
                                <a href=#!>
                                    <img src="{{ asset('frontend_assets') }}/img/social/mail.png" alt="Linkedin">
                                    <span class='profile-card-mail text-muted'>
                                        edd.wils5@gmail.com
                                    </span>
                                </a>

                            </div>
                        </div>
                        <button class="profile-btn" id='btn4'>Explore</button>
                    </div>
                </div>
                <!-- profile end  -->


                <!-- profile start  -->
                <div class="profile-bio hide" id='profile5'>
                    <span class="profile-clos-btn" id='close5'>x</span>
                    <h3>About Jibon</h3>
                    <p class="short-info">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quos voluptatibus
                        maiores expedita, unde animi? Dicta, odio? Illo soluta quidem error, mollitia fuga illum
                        maiores expedita, unde animi? Dicta, odio? Illo soluta quidem error, mollitia fuga illum
                    </p>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-4 col-12">
                    <div class="profile-card">
                        <div class="profile-card_cover">
                            <img src="{{ asset('frontend_assets') }}/img/our-team-cover-background.png" alt="">
                        </div>
                        <div class="profile-card_padding">
                            <div class="profile-card_image">
                                <img src="{{ asset('frontend_assets') }}/img/users/jibon.jpg" alt="">
                            </div>
                            <div class="profile-card_details">
                                <h3>Md Jibon Hossen</h3>
                                <p class="text-muted">Graphics Designer</p>
                            </div>
                            <div class="profile-card_social">
                                <a href=#!>
                                    <img src="{{ asset('frontend_assets') }}/img/social/mail.png" alt="Linkedin">
                                    <span class='profile-card-mail text-muted'>
                                        jibon5226@gmail.com
                                    </span>
                                </a>

                            </div>
                        </div>
                        <button class="profile-btn" id='btn5'>Explore</button>
                    </div>
                </div>
                <!-- profile end  -->



            </div>
            <!-- end first row  -->

        </div>
    </section>

    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="#"><img width="100" height="100"
                                    src="{{ asset('frontend_assets') }}/img/logo/logo.png" alt="Paramorsho logo" /></a>
                        </div>
                        <ul>
                            <li>Address: 193/2,Siddik Mansion,Fakirapool,Motijeel</li>
                            <li>Phone: +8801965-992299</li>
                            <li>Email: support@paramorsho.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#" onclick="myFunction()">About Us</a></li>
                            <li><a href="#" onclick="myFunction()">About Our Shop</a></li>
                            <li><a href="#" onclick="myFunction()">Secure Shopping</a></li>
                            <li>
                                <a href="#" onclick="myFunction()">Delivery infomation</a>
                            </li>
                            <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                            <li><a href="#" onclick="myFunction()">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#" onclick="myFunction()">Who We Are</a></li>
                            <li><a href="#" onclick="myFunction()">Our Services</a></li>
                            <li><a href="#" onclick="myFunction()">Projects</a></li>
                            <li><a href="#" onclick="myFunction()">Contact</a></li>
                            <li><a href="#" onclick="myFunction()">Innovation</a></li>
                            <li><a href="#" onclick="myFunction()">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Download Our App</h6>
                        <p>
                            We provide all kinds of consultancy you need in your daily life.
                            By using paramorsho mobile app anyone can consult with an expert
                            on different issues like health, psychological, law, education,
                            business, beauty, lifestyle, etc. It’s a total consultancy
                            solution for you.
                        </p>
                        <div>
                            <a href="https://play.google.com/store/apps/details?id=com.paramorsho.consultancy"
                                onclick="myFunction()">
                                <img src="{{ asset('frontend_assets') }}/img/google-play-badge/google-play-badge/128x128.png"
                                    alt="" /></a>
                            <a href="javascript:void(0)" onclick="myFunction()">
                                <img src="{{ asset('frontend_assets') }}/img/app-store-badge/app-store-badge/128x128.png"
                                    alt="" />
                            </a>
                        </div>
                        <!-- <form action="#">
                  <input type="text" placeholder="Enter your mail" />
                  <button type="submit" class="site-btn">Subscribe</button>
                </form> -->
                        <div class="footer__widget__social">
                            <a href="https://www.facebook.com/paramorsho"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/channel/UCfqCJGGXqnnchyV0NdWjy_g"><i
                                    class="fa fa-youtube"></i></a>
                            <a href="#" onclick="myFunction()"><i class="fa fa-instagram"></i></a>
                            <a href="#" onclick="myFunction()"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy;

                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved | This template is made with
                                <i class="fa fa-heart" aria-hidden="true"></i> by
                                <a href="/">Paramorsho</a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment">
                            <!-- <img src="img/payment-item.png" alt="" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('frontend_assets') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery-ui.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/jquery.slicknav.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/mixitup.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>
    <script>
        const profileClose = document.querySelector('.profile-clos-btn');
        const profileBtn = document.querySelectorAll('.profile-btn');
        const overlay = document.querySelector('.profile-card-overlay');

        for (let i = 0; i < profileBtn.length; i++) {
            // for opening model 
            document.querySelector('#btn' + i).addEventListener('click', () => {
                overlay.classList.remove('hide');
                document.querySelector('#profile' + i).classList.remove('hide')
            })



            // for closing model 
            overlay.addEventListener('click', () => {
                overlay.classList.add('hide');
                document.querySelector('#profile' + i).classList.add('hide')

            })

            document.querySelector('#close' + i).addEventListener('click', () => {
                overlay.classList.add('hide');
                document.querySelector('#profile' + i).classList.add('hide')

            })


        }

        // overlay.addEventListener('click', () => {
        //     close()
        // })

        // document.addEventListener('keydown', (e) => {
        //     e.key === 'Escape' ? close() : ''
        // })

        // profileClose.addEventListener('click', close)

        // show modal 


        // close modal 
        // function close() {
        //     overlay.classList.add('hide');
        //     profile.classList.add('hide')
        // }
    </script>


    <script>
        function myFunction() {
            Swal.fire({
                title:
                    "Our website is under construction.Click Playstore icon for download our app from playstore",
                icon: "info",
                html:
                    '<a href="https://play.google.com/store/apps/details?id=com.paramorsho.consultancy"><img src="./img/google-play-badge/google-play-badge/128x128.png" alt=""/></a>',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                confirmButtonAriaLabel: "Thumbs up, great!",
                cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: "Thumbs down",
            });
        }
    </script>
</body>

</html>