<?php
if($_GET['action']=="contact"){
    
mail("maratmavliev@mail.ru", $_POST['topic'], $_POST['email'].' '.$_POST['fname'].' '.$_POST['message']); 
   }?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Usite - website, where user chooses design. Usite technology.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="d2ce4369291b393d" />
    <meta name="keywords" content="пользователь выбирает дизайн, suite, usite, подстраиваемый дизайн" />
    <meta name="description" content="Website, where user chooses design. Usite technology." />
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,900|Open+Sans:100,400,900|Oswald:100,400,900|Playfair+Display:100,400,900|Roboto&display:100,400,900=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/jquery-ui.structure.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="400">
<div class="modal fade" id="modalSettings" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content bc">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"><i class="fas fa-cog"></i> Настройки</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class="row form-group">
                                <div class="col">
                                    <div>
                                        <input type="color" value="#A8A8A8" class="in1" id="main-color-input">
                                    </div>
                                    <div>
                                        <input type="color" value="#00d2b5" class="in1" id="link-color-input">
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <input type="color" value="#000000" class="in1" id="header-color-input">
                                    </div>
                                    <div>
                                        <input type="color" value="#ffffff" class="in1" id="bg-color-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row form-group">
                                <div class="col text-center head-font">
                                    <label class="text-black" for="head-font">Header's font</label>
                                    <a class="dropdown-item mons active" id="head-mons">Monserrat</a>
                                    <a class="dropdown-item roboto" id="head-roboto">Roboto</a>
                                    <a class="dropdown-item open-sans" id="head-sans">Open Sans</a>
                                    <a class="dropdown-item oswald" id="head-oswald">Oswald</a>
                                    <a class="dropdown-item playfair" id="head-playfair">Playfair Display</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row form-group">
                                <div class="col text-center text-font">
                                    <label class="text-black" for="head-font">Text's font</label>
                                    <a class="dropdown-item mons active" id="text-mons">Monserrat</a>
                                    <a class="dropdown-item roboto" id="text-roboto">Roboto</a>
                                    <a class="dropdown-item open-sans" id="text-sans">Open Sans</a>
                                    <a class="dropdown-item oswald" id="text-oswald">Oswald</a>
                                    <a class="dropdown-item playfair" id="text-playfair">Playfair Display</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row form-group">
                                <div class="col text-center">
                                    <h4>Headers and text</h4>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <div class="w-100"></div>
                                    <div class="col">
                                        <label for="customRange2" class="tc">Boldness</label> <select id="font-weight-text"><option>3</option><option selected="">2</option><option>1</option> </select></div>
                                    <div class="w-100"></div>
                                    <div class="col"> <label for="customRange2" class="tc">Size</label> <select id="font-size-range"><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option selected="">16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option> </select></div>
                                </div>
                                <div class="col"> <label for="customRange2" class="tc">Boldness</label> <select id="font-weight-head"><option selected="">3</option><option>2</option><option>1</option> </select></div>
                            </div>
                        </div>
                        <div class="button-choose">
                            <div class="row form-group" id="button-choose">
                                <div class="col text-center">
                                    <h4>Button's templates</h4>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 form-group text-center">
                                    <button type="button" class="btn btn-primary d-inline-block button1 active-btn" id="button1">1</button>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 form-group text-center">
                                    <button type="button" class="btn btn-primary d-inline-block button2" id="button2">2</button>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 form-group text-center">
                                    <button type="button" class="btn btn-primary d-inline-block button3" id="button3">3</button>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 text-center">
                                    <button type="button" class="btn btn-primary d-inline-block button4" id="button4">4</button>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 text-center">
                                    <button type="button" class="btn btn-primary d-inline-block button5" id="button5">5</button>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4 text-center">
                                    <button type="button" class="btn btn-primary d-inline-block button6" id="button6">6</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row w-100">
                            <div class="col-4">
                                <button type="button" class="btn btn-secondary d-inline-block" id="reset-color">Reset</button>
                            </div>
                            <div class="col-8">
                                <button type="button" class="btn btn-primary d-inline-block" id="back">&larr;</button>
                                <button type="button" class="btn btn-primary d-inline-block" id="next">&rarr;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="bottom__cookie-block">
        <p>We use cookies to only store your website preferences. No contact information is stored.<span class="ok lc">&nbsp;&nbsp; Ok</span></p>

    </div>

     <div class="site-wrap bc" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="js-menu-toggle"><i class="fas fa-times"></i></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <div class="container d-none d-lg-block">
            <div class="row">
                <div class="col-12 text-center mb-4 mt-5">
                    <h1 class="mb-0 site-logo"><a href="#" class="text-black h2 mb-0">Usite<span class="lc">.</span> </a></h1>
                </div>
            </div>
        </div>
        <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

<div class="container">
    <div class="row align-items-center">

        <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
            <h1 class="mb-0 site-logo"><a href="#" class="text-black h2 mb-0">Usite<span
                        class="lc">.</span> </a></h1>
        </div>

        <div class="col-12 col-md-10 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li><a href="#home-section" class="nav-link">Start</a></li>
                    <li><a href="#features-section" class="nav-link">Functions</a></li>
                    <li><a href="#blog" class="nav-link">Blog</a></li>
                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                    <li>
                        <a class="nav-link" data-toggle="modal" data-target="#modalSettings" id="customize-btn">
                            <i class="fas fa-cog"></i>
                            </a>
                        </li>
                    <li>
                        <a class="nav-link">&nbsp;&nbsp;&nbsp;</a>
                        <a class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0"><a href="#"
                class="site-menu-toggle js-menu-toggle text-black float-right"><i class="fas fa-bars"></i></a></div>

    </div>
</div>

</header>



        <div class="site-blocks-cover bc">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                    <div class="col-md-12" style="position: relative;" data-aos="fade-up">

                        <div class="usite">
                            <span class="first-letter lc">U</span><span class="small-letters">site</span>
                        </div>

                        <div class="row mb-4">
                            <div class="col-lg-5 mr-auto">
                                <h1>Let people define style of your site.</h1>
                                <p class="mb-5 c">You define content.</p>
                                <div>
                                    <a href="#features-section" class="btn btn-primary mr-2 mb-2">Get Started</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bc-t" id="features-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3 c-bc">Unlimited customization abilities<span class="lc">:</span></h2>
                    </div>
                </div>
                <div class="row align-items-stretch feature" role="navigation">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

                        <div class="unit-4 d-block">
                            <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="lc"><i class="fas fa-fill-drip"></i></span></span>
                            </div>
                            <div>
                                <h3>Color scheme</h3>
                                <p>Paint your experience.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p><a href="#color-sheme-div">Learn More</a></p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">

                        <div class="unit-4 d-block">
                            <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="lc"><i class="fas fa-ruler-combined"></i></span></span>
                            </div>
                            <div>
                                <h3>Size of blocks</h3>
                                <p>Extend, reduce, enjoy.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p><a href="#layout">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block">
                            <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="lc"><i class="fas fa-th"></i></span></span>
                            </div>
                            <div>
                                <h3>Layout</h3>
                                <p>Right content in right place.&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                <p><a href="#layout">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block">
                            <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="lc"><i class="fas fa-border-none"></i></span></span>
                            </div>
                            <div>
                                <h3>Templates of elements</h3>
                                <p>Choose how you want it to look.&nbsp;&nbsp;&nbsp;</p>
                                <p><a href="#templates">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block">
                            <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="lc"><i class="fas fa-font"></i></span></span>
                            </div>
                            <div>
                                <h3>Font family and size</h3>
                                <p>Typography is under your control.</p>
                                <p><a href="#typography-div">Learn More</a></p>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                        <div class="unit-4 d-block">
                            <div class="unit-4-icon mb-3">
                                <span class="icon-wrap"><span class="lc"><i class="fas fa-plus"></i></span></span>
                            </div>
                            <div>
                                <h3>Specially for your website</h3>
                                <p>Your own customization abilities</p>
                                <p><a href="#contact-section">Suggest</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="mt-5 row mb-5 site-section" style="border-top:1px solid var(--t-color)">
                <div class="pr-lg-5 m-auto text-center mt-5 order-2 order-lg-1">
                    <h2 class="text-black">This is a demo website of Usite technology.</h2>
                    <p class="mb-4">Usite - website, where user chooses design. Go to top menu and click <i
                            class="fas fa-cog"></i></p>
                </div>
            </div>
        </div>
        <div class="site-section border-bottom" id="color-sheme-div">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7 tutorial">
                        <img src="../images/tut.jpg" alt="How to open menu" class="img-fluid">
                    </div>
                    <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
                        <h2 class="text-black" id="color-sheme-heading">Color Scheme</h2>
                        <p class="mb-4 color-sheme-text">User choose all colours in color pattern. It will create new experience and refresh your wesbite. Also users can change color of specific element by opening top right menu and selecting "Change color sheme"</p>
                        <ul class="mb-5 list-unstyled">
                            <li class="color-sheme-text"><i class="fas fa-check"></i> Can be implemented on any website</li>
                            <li class="color-sheme-text"><i class="fas fa-check"></i> Freedom of customization (e. g. create gradient instead of colors)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-big bc">

            <div class="container">
                <div class="mt-5 row mb-5 site-section" id="layout">

                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="author-box position-relative tf bc-c c-bc" id="div1">
                            <div>
                                <a href="#" role="button" class="dropdown-link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-caret-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item drag-on">Drag</a>
                                    <a class="dropdown-item resize-on">Resize</a>
                                    <a class="dropdown-item dropdownColor" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Change color sheme</a>
                                    <a class="dropdown-item return">Return to original position</a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownColor">
                                        <a class="dropdown-item">Text<input type="color" value="#A8A8A8" class="dropColor"></a>
                                        <a class="dropdown-item">Background<input type="color" value="#ffffff" class="dropBackColor"></a>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex mb-4">
                                <div class="mr-3">
                                    <img src="../images/me.jpg" alt="My dog" class="img-fluid rounded-circle">
                                </div>
                                <a href="http://mmavliev.com" target="_blank" rel="noopener">
                                    <div class="mr-auto text-black">
                                        <strong class="font-weight-bold mb-0 c-bc">Marat M.</strong> <br> <span class="c-bc">Developer</span>
                                    </div>
                                </a>
                            </div>
                            <blockquote>&ldquo;Hey! This is big important text. For example: new, that is too big for user to comfortably read it in this small box, but it isn't that big to be displayed on separated page. So why not to make this box bigger so it
                                is easy to read it? Then user can put it back or close it. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis elit a nisl finibus, at imperdiet sem tincidunt. Morbi ut finibus justo. Proin suscipit
                                sem quam, et laoreet sapien iaculis at. Morbi lobortis ligula ut mauris bibendum condimentum. Mauris placerat viverra diam hendrerit fringilla. Etiam scelerisque, lectus in convallis tempor, elit velit dapibus tortor, posuere
                                hendrerit enim nibh ultricies lectus. Phasellus pretium sollicitudin dui, vel cursus augue aliquet eget. Fusce sit amet vehicula felis. Pellentesque eu felis ac odio finibus placerat. Mauris eget varius est, at maximus
                                ante. Quisque a placerat felis. Donec ultricies gravida velit. Phasellus eu libero ac massa aliquet rhoncus vel eget risus. Phasellus sem mauris, sagittis faucibus rhoncus non, suscipit sit amet tellus. Donec mattis gravida
                                nibh ut pellentesque&rdquo;</blockquote>
                        </div>
                    </div>
                    <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
                        <h2 class="text-black">Adjust blocks of content</h2>
                        <p class="mb-4">Drag and drop or resize blocks of content. Perfect for blogs, forums, web applications and other highly-visited websites. It will help users to focus on a content and close other things that they don't need now.<br><span id="phone-warning" class="lc">Dragging and resizing isn't available on touch screens.</span></p>
                        <ul class=" mb-5 list-unstyled">
                            <li><i class="fas fa-check"></i> Position will be saved</li>
                            <li><i class="fas fa-check"></i> Flexible, unlimited amount of blocks, options</li>
                        </ul>

                    </div>
                </div>
                <div class="row mb-5 site-section border-bottom" id="typography-div">
                    <div class="col-lg-7">
                        <span id="big-letter">T</span><span id="small-letter">r</span>
                    </div>
                    <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
                        <h2 class="text-black">Typography</h2>
                        <p class="mb-4">Change font family of headings and texts and size of text. Information written with user's favorite font is recieved better. Simple and powerful customization.</p>
                        <ul class="mb-5 list-unstyled">
                            <li><i class="fas fa-check"></i> Lot's of fonts to choose from.</li>
                            <li><i class="fas fa-check"></i> Wide variaty of combinations.</li>
                        </ul>

                    </div>
                </div>

                <div class="mt-5 row mb-5 site-section" id="templates">
                    <div class="col-lg-7 order-1 order-lg-2">
                        <button type="button" class="btn btn-primary d-inline-block" id="button-hover">Hover over me!</button>
                    </div>
                    <div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">
                        <h2 class="text-black">Templates of elements</h2>
                        <p class="mb-4">Choose how particular elements will look like. On this website - how buttons look when hovering. What would you like users to be able to change on your website? Animations on hover? Blog post templates? </p>
                        <ul class=" mb-5 list-unstyled">
                            <li><i class="fas fa-check"></i> Totally up to you and your website</li>
                            <li><i class="fas fa-check"></i> Unlimited freedom of customizing</li>
                        </ul>
                    </div>
                </div>

                <div class="row mb-5 site-section border-bottom">
                    <div class="col-lg-7">
                        <button id="reload-btn" class="btn btn-primary mr-2 mb-2">Reload and see</button>
                    </div>
                    <div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">
                        <h2 class="text-black">Everything gonna be saved</h2>
                        <p class="mb-4">All your changes are being stored using cookies. So it will be saved even if you shut down your computer.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bc-t" id="custom">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="section-title mb-3">Idea behind it<span class="lc">:</span></h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-5 ml-auto pl-lg-5">
                        <h2 class="mb-4 c-bc">Make your website closer to users.</h2>
                        <p class="mb-4 c-bc">It's impossible to create a website with the design everyone will love. Especially if it is a resource visited by thousands of people everyday. So, most of these websites have pretty standart and common design. No risks, as nobody
                            wants to visit website if they don't like the appearance of it. So, instead of having design that <u>most</u> of the people will love, why not to let <u>users
                            </u> create design. Users just need a minute to set all the preferences.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="../images/about_1.jpg" alt="People think" class="img-fluid mb-5 mb-lg-0 rounded shadow">
                    </div>
                </div>

            </div>
        </div>
        <div class="site-section" id="blog-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12 text-center">
                        <h2 class="text-black mb-3">Blog Posts</h2>
                    </div>
                </div>
                <div class="row text-center" id="blog">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <div class="dial">
                                <div class="dot"></div>
                                <div class="sec-hand"></div>
                                <div class="sec-hand shadow"></div>
                                <div class="min-hand"></div>
                                <div class="min-hand shadow"></div>
                                <div class="hour-hand"></div>
                                <div class="hour-hand shadow"></div>
                                <span class="twelve">12</span>
                                <span class="three">3</span>
                                <span class="six">6</span>
                                <span class="nine">9</span>
                                <span class="diallines"></span>
                                <div class="date"></div>
                            </div>
                            <h2><a href="#">How long does "Usite" integration takes?</a></h2>
                            <div class="meta mb-4">Marat Mavliev <span class="mx-2">&bullet;</span> Today<span class="mx-2">&bullet;</span> <span class="lc">FAQ</span></div>
                            <p>It's 3 days. 1st day - menu in style of your website, html&css code preparation. 2nd - all JS logic. 3rd day - optimization.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="290" height="380" fill="var(--l-color)">
<g>
	<path d="M326.623,133.062c13.785,0,25-11.215,25-25s-11.215-25.001-25-25.001s-25,11.216-25,25.001   c0,5.63,1.872,10.83,5.025,15.014l-41.076,57.401c-2.451-0.805-5.066-1.247-7.784-1.247c-6.569,0-12.551,2.551-17.017,6.709   l-27.379-15.536c0.365-1.696,0.561-3.454,0.561-5.257c0-13.785-11.215-25-25-25s-25,11.215-25,25c0,1.803,0.196,3.561,0.561,5.257   l-27.379,15.536c-4.466-4.158-10.448-6.708-17.017-6.708c-13.785,0-25,11.216-25,25.001s11.215,25.001,25,25.001   s25-11.216,25-25.001c0-1.803-0.196-3.561-0.561-5.257l27.379-15.536c4.466,4.158,10.448,6.709,17.017,6.709   c6.569,0,12.55-2.551,17.017-6.708l27.379,15.536c-0.365,1.696-0.561,3.454-0.561,5.257c0,13.785,11.215,25.001,25,25.001   c13.786,0,25.001-11.216,25.001-25.001c0-5.631-1.873-10.832-5.026-15.016l41.076-57.401   C321.289,132.62,323.905,133.062,326.623,133.062z M326.623,98.061c5.514,0,10,4.486,10,10.001c0,5.514-4.486,10-10,10   s-10-4.486-10-10C316.622,102.547,321.108,98.061,326.623,98.061z M120.115,214.231c-5.514,0-10-4.486-10-10.001   s4.486-10.001,10-10.001s10,4.486,10,10.001S125.629,214.231,120.115,214.231z M188.951,175.146c-5.514,0-10-4.486-10-10.001   c0-5.514,4.486-10,10-10s10,4.486,10,10C198.952,170.66,194.465,175.146,188.951,175.146z M257.787,214.231   c-5.514,0-10-4.486-10-10.001s4.486-10.001,10-10.001c5.515,0,10.001,4.486,10.001,10.001S263.301,214.231,257.787,214.231z"/>
	<path d="M418.796,376.965H366.31H80.428H21.215c-3.427,0-6.215-2.788-6.215-6.215V61.331c0-3.427,2.788-6.215,6.215-6.215h35.356   c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H21.215C9.517,40.116,0,49.633,0,61.331V370.75c0,11.698,9.517,21.215,21.215,21.215   h51.713v16.506c0,9.403,7.65,17.053,17.053,17.053h75.074l-35.34,68.998c-1.888,3.687-0.431,8.206,3.256,10.095   c1.094,0.561,2.262,0.826,3.413,0.826c2.725,0,5.354-1.49,6.681-4.083l38.843-75.836h82.922l38.843,75.836   c1.328,2.593,3.956,4.083,6.681,4.083c1.151,0,2.319-0.267,3.413-0.826c3.687-1.889,5.145-6.408,3.256-10.095l-35.34-68.998h75.074   c9.403,0,17.053-7.649,17.053-17.053v-16.506h44.986c4.142,0,7.5-3.357,7.5-7.5S422.938,376.965,418.796,376.965z M358.81,408.471   c0,1.132-0.921,2.053-2.053,2.053H89.981c-1.132,0-2.053-0.921-2.053-2.053v-16.506H358.81V408.471z"/>
	<path d="M86.571,55.116h102.672h68.251h168.028c3.427,0,6.215,2.788,6.215,6.215v71.311c0,4.143,3.358,7.5,7.5,7.5   s7.5-3.357,7.5-7.5V61.331c0-11.698-9.517-21.215-21.215-21.215H264.995V25.374c0-10.375-8.441-18.816-18.817-18.816H200.56   c-10.375,0-18.817,8.441-18.817,18.816v14.742H86.571c-4.142,0-7.5,3.357-7.5,7.5S82.429,55.116,86.571,55.116z M196.743,25.374   c0-2.104,1.712-3.816,3.817-3.816h45.618c2.104,0,3.817,1.712,3.817,3.816v14.742h-53.251V25.374z"/>
	<path d="M104.902,267.576c-4.142,0-7.5,3.357-7.5,7.5v66.272c0,4.143,3.358,7.5,7.5,7.5h30.427c4.142,0,7.5-3.357,7.5-7.5v-66.272   c0-4.143-3.358-7.5-7.5-7.5H104.902z M127.829,333.849h-15.427v-51.272h15.427V333.849z"/>
	<path d="M173.737,229.248c-4.142,0-7.5,3.357-7.5,7.5v104.601c0,4.143,3.358,7.5,7.5,7.5h30.427c4.142,0,7.5-3.357,7.5-7.5V236.748   c0-4.143-3.358-7.5-7.5-7.5H173.737z M196.665,333.849h-15.427v-89.601h15.427V333.849z"/>
	<path d="M242.573,267.576c-4.142,0-7.5,3.357-7.5,7.5v66.272c0,4.143,3.358,7.5,7.5,7.5H273c4.142,0,7.5-3.357,7.5-7.5v-66.272   c0-4.143-3.358-7.5-7.5-7.5H242.573z M265.5,333.849h-15.427v-51.272H265.5V333.849z"/>
	<path d="M311.409,311.832c-4.142,0-7.5,3.357-7.5,7.5v22.017c0,4.143,3.358,7.5,7.5,7.5h30.427c4.142,0,7.5-3.357,7.5-7.5   s-3.358-7.5-7.5-7.5h-22.927v-14.517C318.909,315.189,315.551,311.832,311.409,311.832z"/>
	<path d="M508.175,384.019l-43.027-74.526c10.901-11.619,18.839-25.816,23.079-41.64c6.777-25.291,3.299-51.708-9.793-74.384   c-27.026-46.813-87.097-62.906-133.907-35.881c-46.811,27.025-62.906,87.096-35.88,133.907   c13.092,22.676,34.231,38.896,59.522,45.674c8.446,2.263,17.015,3.382,25.53,3.382c7.442,0,14.841-0.856,22.077-2.55l43.018,74.528   c5.273,9.137,14.875,14.25,24.737,14.249c4.833,0,9.729-1.229,14.208-3.813c8.796-5.077,14.261-14.544,14.261-24.706   C512,393.28,510.678,388.357,508.175,384.019z M372.051,322.68c-21.421-5.74-39.326-19.479-50.415-38.685   c-22.89-39.648-9.257-90.526,30.39-113.417c13.043-7.53,27.296-11.106,41.374-11.106c28.715,0,56.683,14.893,72.043,41.497   c11.088,19.206,14.034,41.58,8.294,63.002c-5.74,21.422-19.479,39.325-38.685,50.414   C415.847,325.474,393.473,328.418,372.051,322.68z M490.242,409.973c-6.453,3.726-14.733,1.508-18.456-4.942l-41.388-71.704   c4.148-1.693,8.21-3.673,12.156-5.951c3.949-2.28,7.689-4.818,11.23-7.566l41.4,71.707c1.188,2.061,1.816,4.393,1.816,6.743   C497,403.078,494.41,407.567,490.242,409.973z"/>
	<path d="M461.542,263.611c5.295-17.056,4.034-35.316-3.551-51.416c-1.766-3.748-6.234-5.354-9.981-3.589   c-3.748,1.766-5.354,6.234-3.588,9.981c5.983,12.7,6.976,27.109,2.795,40.575c-4.204,13.54-13.286,24.903-25.573,31.997   c-13.002,7.508-28.151,9.5-42.652,5.615c-14.502-3.886-26.624-13.187-34.13-26.189c-15.497-26.841-6.267-61.285,20.574-76.782   c19.625-11.329,43.98-9.815,62.051,3.857c3.304,2.5,8.007,1.849,10.506-1.455c2.499-3.303,1.848-8.007-1.456-10.506   c-22.891-17.321-53.745-19.238-78.602-4.887c-16.472,9.51-28.255,24.866-33.178,43.238s-2.396,37.562,7.114,54.034   c9.51,16.473,24.866,28.255,43.238,33.179c6.135,1.644,12.361,2.457,18.546,2.457c12.338,0,24.517-3.236,35.488-9.571   C444.71,295.163,456.216,280.767,461.542,263.611z"/>
</g>
</svg>
                            <h2><a href="#">Does "Usite" affect SEO?</a></h2>
                            <div class="tc mb-4">Marat Mavliev <span class="mx-2 tc">&bullet;</span> Today<span
                                    class="mx-2">&bullet;</span> <span class="lc">FAQ</span></div>
                            <p>No. Your website gets JS file, preferences window and small changes to CSS. Everything else will be left same.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> 

    <div class="site-section bc-t" id="contact-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-3">Want Usite on your website? Get In Touch!</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 mb-5">



                    <form action="#" class="p-5 bc">

                        <h2 class="h4 text-black mb-5">Contact Form</h2>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" class="form-control rounded-0">
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="topic">Subject</label>
                                <input type="text" id="topic" class="form-control rounded-0">
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" class="form-control rounded-0">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="message">Message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary mr-2 mb-2">
                            </div>
                        </div>


                    </form>
                </div>

            </div>

        </div>
    </div>

    <div class="footer py-5 border-top text-center bc">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <p class="mb-0">
                        <a href="https://www.instagram.com/usite.tech" class="p-3" aria-label="My IG"><i class="fas fa-instagram"></i></a>
                        <a href="mailto:maratmavliev@mail.ru" class="p-3" aria-label="Email me"><i class="fas fa-envelope"></i></a>
                        <a target="_blank" rel="noopener" href="http://mmavliev.com" class="p-3" aria-label="My website!"><i class="fas fa-link"></i></a>
                    </p>
                </div>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/all.js"></script>    
    <script src="../js/jquery.cookie.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/usite.js"></script>
    <script src="../js/en.js"></script>
    <script>
        $("#submit-btn").click(function() {
            $.ajax({
                url: "index.php?action=contact",
                type: "POST",
                data: "fname=" + $("#fname").val() + "&topic=" + $("#topic").val() + "&email=" + $("#email").val() + "&message=" + $("#message").val(),
                success: function() {
                    $("form").empty();
                    $("form").html("<p class='text-black'>Your message was sent successfully.</p>")

                }
            })

        })
    </script>

</body>

</html>