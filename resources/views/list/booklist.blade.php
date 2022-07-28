<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>memorial books</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{  URL::asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{  URL::asset('css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{  URL::asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{  URL::asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 40%;
        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
        }
        </style>
   </head>
   <!-- body -->
   <body class="main-layout contact-page">

      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="/images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                <li > <a href="http://127.0.0.1:8000/">Home</a> </li>
                                <li><a href={{route('books.index')}}>Our Books</a></li>
                                <li class="active"><a href="{{route('list.booklist')}}">library</a></li>
                                <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                <li class="mean-last"> <a href="#"><img src="images/top-icon.png" alt="#" /></a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="about-bg">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                  <div class="abouttitle">
                     <h2>Book List</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Contact -->
      <div class="Contact">
         <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Action </b></h4>
                     <a href="{{route('books.create',['list_id'=>'2']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Biography</b></h4>
                      <a href="{{route('books.create',['list_id'=>'3']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Dictionary</b></h4>
                     <a href="{{route('books.create',['list_id'=>'4']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
            </div>
            <div class="row" style="margin-top:20px ">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Drama </b></h4>
           <a href="{{route('books.create',['list_id'=>'5']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Crime</b></h4>
                   <a href="{{route('books.create',['list_id'=>'6']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Fantasy</b></h4>
                    <a href="{{route('books.create',['list_id'=>'7']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
            </div>
            <div class="row" style="margin-top:20px ">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>History </b></h4>
                 <a href="{{route('books.create',['list_id'=>'8']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Journal</b></h4>
                     <a href="{{route('books.create',['list_id'=>'9']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Poetry</b></h4>
                        <a href="{{route('books.create',['list_id'=>'10']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px ">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Science </b></h4>
                 <a href="{{route('books.create',['list_id'=>'11']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Short story</b></h4>
                      <a href="{{route('books.create',['list_id'=>'12']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="container">
                      <h4><b>Suspense</b></h4>
                   <a href="{{route('books.create',['list_id'=>'1']) }}"><button type="button" class="btn btn-secondary">Add Books</button></a>
                    </div>
                  </div>
                </div>
            </div>
         </div>
      </div>
      <!-- end Contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                     <div class="Follow">
                        <h3>Follow Us</h3>
                     </div>
                     <ul class="location_icon">
                        <li> <a href="#"><img src="/icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="/icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="/icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="/icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                     <div class="Follow">
                        <h3>Newsletter</h3>
                     </div>
                     <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                     <button class="Subscribe">Subscribe</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <p>Copyright 2021 All Right Reserved </p>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
