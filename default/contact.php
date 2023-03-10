<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HLEBIK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Premium Bootstrap 5 Template" />
        <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
        <meta content="Mannatthemes" name="author" />

        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />

        <!-- css -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.min.css" rel="stylesheet" type="text/css" />

        <!-- colors -->
        <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="80" >
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg fixed-top sticky light-active" id="navbar">
            <div class="container">
                <a href="index.html" class="navbar-brand">
                    <img src="images/logo-sm.png" class="logo-sm" alt="" height="24" />
                    <img src="images/logo-light.png" class="logo-light" alt="" height="16" />
                    <img src="images/logo-dark.png" class="logo-dark" alt="" height="16" />
                </a><!--end navbar-brand-->
                <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
                </a><!--end navbar-toggler-->

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto navbar-center mt-lg-0 mt-2">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">??????????????</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">?????? ??????</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">????????????</a>
                        </li><!--end nav-item-->                        
                        <li class="nav-item">
                            <a class="nav-link" href="resume.html">????????????</a>
                        </li><!--end nav-item-->
                        <!--<li class="nav-item">
                            <a class="nav-link" href="projects.html">??????????????</a>
                        </li>--><!--end nav-item-->
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="blogs.html">??????????</a>
                        </li>--><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link  active" href="contact.html">??????????????</a>
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav-->
                    <a href="contact.php" class="btn btn-sm nav-btn text-primary mb-4 mb-lg-0">?????????????? ????????! <i class="icon-xxs ms-1" data-feather="chevrons-right"></i></a>
                </div><!-- end #navbarNav -->
            </div><!-- end container -->
        </nav>
        <!-- end navbar -->

        <!-- start hero -->
        <section class="hero-one position-relative bg-black" id="about"  style="background-image: url(images/personal/main-bg.png); background-size: cover; background-position: center center;">
            <div class="container">
                <div class="row align-items-center justify-content-center py-100">
                    <div class="col-lg-7 text-center py-5 text-center">
                        <h5 class="head-title py-4" aria-label="??????????????"></h5>                        
                    </div><!--end col-->                  
                </div><!--end row-->             
            </div><!-- end container -->
        </section>
        <!-- end hero -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- start resume -->
        <section class="section">
            <div class="container">     
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-white"  style="background: url(images/personal/testi-pet.png); background-repeat: no-repeat; background-size: 15%; background-position: right bottom;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="fs-2 fw-normal lh-1 text-dark mb-3">???????????????? ???? ??????????!</h2>
                                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 ">???????????? ???????????????? ?????? ????????????????, ???????? ???????????????? ???????????????????? ????????????,<br>
                                            ???? ?????????????????????? ???????????????????? ???? ??????.</p>
                                        <form method="post" name="myForm">
                                            <span id="error-msg"></span>
                                            <div class="row">

                                                <!-- Hidden Required Fields -->
		                                        <input type="hidden" name="project_name" value="HLEBIK">
		                                        <!--<input type="hidden" name="admin_email" value="dea16367@cdfaq.com">-->

                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label fs-16" for="name">??????</label>
                                                    <input type="text" name="fio" class="form-control" placeholder="???????? ??????" id="name" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="email" >??????????</label>
                                                    <input type="email" name="email" class="form-control" placeholder="???????? ??????????" id="email" value="<?=isset($_POST['email'])?$_POST['email']:''?>"/>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="subject">????????</label>
                                                    <input type="text" name="form_subject" class="form-control" placeholder="???????? ????????" id="subject" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="number">??????????</label>
                                                    <input type="text" name="phone" class="form-control" placeholder="+7 800 555 35 35" id="number" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-12 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="comments">??????????????????</label>
                                                    <textarea class="form-control" name="content" id="comments" placeholder="?????????????? ???????? ??????????????????..." rows="5"></textarea>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-12">
                                                    <input type="submit" id="submit" name="send" class="btn btn-primary mt-2" value="?????????????????? ??????????????????" />
                                                </div>
                                                <!-- end col -->
                                            </div><!--end row-->
                                        </form><!-- end form -->
                                    </div><!-- end col -->

                                    <!--<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                                    <script src="script.js"></script>

                                    <div class="col-md-4">
                                        <img src="images/personal/contact.svg" alt="" height="200" class=" mx-auto d-block mb-5">
                                        <div class="d-flex">
                                            <div class="bg-light d-flex justify-content-center align-items-center thumb-lg  rounded">
                                                <i class="ti ti-phone fs-22"></i>
                                            </div>
                                            <div class="align-self-center ms-3">
                                                <span class="d-block lh-1">+7 925 150 57 95</span>
                                                <span class="text-muted fs-14 mt-n2">?? 9:00 ???? 19:00 ???? ????????????</span>
                                            </div>
                                        </div>
                                        <hr class="hr-dashed my-3">
                                        <div class="d-flex">
                                            <div class="bg-light d-flex justify-content-center align-items-center thumb-lg  rounded">
                                                <i class="ti ti-mail fs-22"></i>
                                            </div>
                                            <div class="align-self-center ms-3">
                                                <span class="d-block lh-1">glebanazarenko@gmail.com</span>
                                                <span class="text-muted fs-14 mt-n2">?? ???????????????????????? ???? ??????????????</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!-- end row -->  
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end resume -->

        
        
        
        <div class="position-relative">
            <div class="shape overflow-hidden bg-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- start footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 border-e-dashed">
                        <a href="layout-one-1.html">
                            <img src="images/logo-sm.png" alt="" height="18" />
                            <img src="images/logo-light.png" alt="" height="16" />
                        </a>
                        <p class="my-4">?? ?????????????????? ???????? ?????????? ???????????? ???? ???????????????????????? ????, ???? ?????? ???????????? ????????????, ?????? ?? ?????????? ??????????????. ?????????????? ??????????, ?????? ?? ??????????????.
                        </p>
                        <ul class="list-unstyled footer-social mb-0 mt-sm-0 mt-3">
                            <li class="list-inline-item">
                                <a href="https://github.com/glebanazarenko"> <i class="icon-xs" data-feather="github"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://vk.com/hlebik_official"> <i class="icon-xs" data-feather="book"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://t.me/hlebik"> <i class="icon-xs" data-feather="phone"></i> </a>
                            </li>
                        </ul>
                    </div><!-- end col -->
                    <div class="col-lg-6 offset-lg-1">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-5">???????????? ????????????????????</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="index.html">????????????????</a></li>
                                    <li><a href="about.html">?????? ??????</a></li>
                                    <!--<li><a href="services.html">??????????????</a></li>-->         
                                    
                                </ul>
                            </div><!-- end col -->
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-4">????????????????????</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="resume.html">????????????</a></li>
                                    <!--<li><a href="#review">????????????</a></li>-->
                                    <!--<li><a href="projects.html">??????????????</a></li>         -->     
                                    <li><a href="services.html">????????????</a></li>                      
                                    
                                </ul>
                            </div><!-- end col -->
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-4">???????????? ????????????????????</h6>
                                <ul class="list-unstyled footer-list">
                                    <!--<li><a href="#blogs">??????????</a></li>-->
                                    <li><a href="contact.php">??????????????</a></li>
                                    <!--<li><a href="#">?????????????? ?? ??????????????</a></li>-->
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <!-- start footer alter -->
        <div class="footer-alt">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p> &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> HLEBIK. ?????????????? ?? <i class="las la-heart text-danger"></i> ????????</p>
                    </div>
                    <div class="col-sm-6 text-sm-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">????????????<sup class="text-danger">*</sup></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer alter -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()">
            <div>
                <h3 class="fw-medium mb-0">Select Your Choice</h3>
                <hr class="hr-dashed my-3">
                <ul class="pattern">
                    <li>
                        <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                    </li>
                    <li>
                        <a class="color2" href="javascript: void(0);" onclick="setColor('info')"></a>
                    </li>
                    <li>
                        <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                    </li>
                    <li>
                        <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
                    </li>
                    <li>
                        <a class="color5" href="javascript: void(0);" onclick="setColor('purple')"></a>
                    </li>
                    <li>
                        <a class="color6" href="javascript: void(0);" onclick="setColor('success')"></a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <a href="javascript: void(0);" class="settings rounded-end"><i class="las la-paint-brush fs-22"></i></a>
            </div>
        </div>
        <!-- end Style switcher -->

        <script src="js/bootstrap.bundle.min.js"></script>

        <script src="js/feather.js"></script>

        <script src="js/app.js"></script>
    </body>
</html>
