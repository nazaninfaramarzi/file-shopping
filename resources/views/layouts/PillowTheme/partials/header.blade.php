    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="theme/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">               
                                    <a class="nav-link" href="/">صفحه اصلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">درباره ما</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        محصولات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="product_list.html"> لیست محصولات</a>
                                        <a class="dropdown-item" href="single-product.html">جزئیات محصولات</a>
                                        
                                    </div>
                                </li>
                                @guest
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        صفحات
                                    </a>
                                   
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">

                                        <a class="dropdown-item" href="login"> 
                                            ورود
                                            
                                        </a>
                                        @if (Route::has('register'))
                                        <a class="dropdown-item" href="register"> 
                                            ثبت نام
                                            
                                        </a>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        صفحات
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                   
                                        
                                        <a class="dropdown-item" href="checkout.html">چک کردن محصولات</a>
                                        <a class="dropdown-item" href="cart.html">سبد خرید</a>
                                        <a class="dropdown-item" href="confirmation.html">تایید نهایی</a>
                                        <a class="dropdown-item" href="elements.html">جزئیات</a>

                                    </div>
                                </li>
                                @endguest
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        وبلاگ
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> وبلاگ</a>
                                        <a class="dropdown-item" href="single-blog.html">صفحه داخلی وبلاگ </a>
                                    </div>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">تماس با ما</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                            
                          
                            <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">person</i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                   
                                   <a class="dropdown-item" href="profile">
                                   @guest
                                   <a class="dropdown-item" href="login"> 
                                            ورود
                                            
                                        </a>
                                        @if (Route::has('register'))
                                        <a class="dropdown-item" href="register"> 
                                            ثبت نام
                                            
                                        </a>
                                        @endif
                                        @endguest
                                        @auth
                                    {{auth()->user()->name}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        @endauth
                                    </a>
                                   </div>
                                   </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="جست و جو">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->