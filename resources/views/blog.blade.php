<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SafeCam - CCTV Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="{{ url('index') }}" class="navbar-brand ms-lg-5">
            <h1 class="display-5 m-0 text-primary">Safe<span class="text-secondary">Cam</span></h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('index') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ url('about') }}" class="nav-item nav-link">About</a>
                <a href="{{ url('service') }}" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('price') }}" class="dropdown-item">Pricing Plan</a>
                        <a href="{{ url('blog') }}" class="dropdown-item">Blog Grid</a>
                        <a href="{{ url('detail') }}" class="dropdown-item">Blog Detail</a>
                        <a href="{{ url('team') }}" class="dropdown-item">The Team</a>
                        <a href="{{ url('testimonial') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contact</a>
                <a href="tel:+123456789" class="nav-item nav-link nav-contact bg-secondary text-white px-5 ms-lg-5"><i class="bi bi-telephone-outbound me-2"></i>+123 456 789</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 hero-header mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-1 text-white animated zoomIn">Blog Grid</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Blog Grid</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Blog Start -->
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100 rounded-top" src="assets/img/blog-1.jpg" alt="">
                                <div class="blog-date">
                                    <h5 class="text-white fw-bold mb-0">01</h5>
                                    <h6 class="text-light mb-0">January</h6>
                                </div>
                            </div>
                            <div class="bg-primary rounded-bottom p-5">
                                <div class="d-flex mb-3">
                                    <span class="text-light text-uppercase">Admin</span>
                                    <span class="text-light px-2">|</span>
                                    <span class="text-light text-uppercase">Web Design</span>
                                </div>
                                <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100 rounded-top" src="assets/img/blog-2.jpg" alt="">
                                <div class="blog-date">
                                    <h5 class="text-white fw-bold mb-0">01</h5>
                                    <h6 class="text-light mb-0">January</h6>
                                </div>
                            </div>
                            <div class="bg-primary rounded-bottom p-5">
                                <div class="d-flex mb-3">
                                    <span class="text-light text-uppercase">Admin</span>
                                    <span class="text-light px-2">|</span>
                                    <span class="text-light text-uppercase">Web Design</span>
                                </div>
                                <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item">
                            <div class="position-relative">
                                <img class="img-fluid w-100 rounded-top" src="assets/img/blog-1.jpg" alt="">
                                <div class="blog-date">
                                    <h5 class="text-white fw-bold mb-0">01</h5>
                                    <h6 class="text-light mb-0">January</h6>
                                </div>
                            </div>
                            <div class="bg-primary rounded-bottom p-5">
                                <div class="d-flex mb-3">
                                    <span class="text-light text-uppercase">Admin</span>
                                    <span class="text-light px-2">|</span>
                                    <span class="text-light text-uppercase">Web Design</span>
                                </div>
                                <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                        <nav aria-label="Page navigation">
                          <ul class="pagination pagination-lg m-0">
                            <li class="page-item disabled">
                              <a class="page-link rounded-0" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link rounded-0" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Categories</h2>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Design</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Web Development</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Keyword Research</a>
                        <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Email Marketing</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Recent Post</h2>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="assets/img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="assets/img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Tag Cloud</h2>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-light m-1">Design</a>
                        <a href="" class="btn btn-light m-1">Development</a>
                        <a href="" class="btn btn-light m-1">Marketing</a>
                        <a href="" class="btn btn-light m-1">SEO</a>
                        <a href="" class="btn btn-light m-1">Writing</a>
                        <a href="" class="btn btn-light m-1">Consulting</a>
                        <a href="" class="btn btn-light m-1">Design</a>
                        <a href="" class="btn btn-light m-1">Development</a>
                        <a href="" class="btn btn-light m-1">Marketing</a>
                        <a href="" class="btn btn-light m-1">SEO</a>
                        <a href="" class="btn btn-light m-1">Writing</a>
                        <a href="" class="btn btn-light m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h2 class="mb-4">Plain Text</h2>
                    <div class="bg-light text-center" style="padding: 30px;">
                        <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-12">
                    <form class="mx-auto" style="max-width: 600px;">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary text-light py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>