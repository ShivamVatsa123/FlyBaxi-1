<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Baxi - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="css/common.css"> -->
    <?php require('inc/links.php'); ?>
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 576px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>
    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/img1.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/img2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/img3.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/img4.jpg" class="w-100 d-block" />
                </div>

            </div>

        </div>
    </div>
    <!-- check availability -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Pickup</label>
                            <input type="date" class="form-control shadow-none">
                        </div>                           
                            <div class="col-lg-2 mb-3">
                                <input type="time" class="form-control" value="10:05 AM" />
                            </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Dropoff</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                            <div class="col-lg-2 mb-3">
                                <input type="time" class="form-control" value="10:05 AM" />
                            </div>                     
                        <div class="col-lg-2 mb-lg-3 mt-2">
                            <button type="search" class="btn btn-sm text-white shadow-none modal-dialog modal-xl custom-bg " >Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bikes -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FLEET</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/bikes/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Harley Davidson</h5>
                        <h6 class="mb-4"> ₹800 per day</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Free Helmet: 1
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Free km: 250km
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 free Bike
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/bikes/2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Harley Davidson</h5>
                        <h6 class="mb-4"> ₹800 per day</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Free Helmet: 1
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Free km: 250km
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 free Bike
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/bikes/3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Harley Davidson</h5>
                        <h6 class="mb-4"> ₹800 per day</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Free Helmet: 1
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                Free km: 250km
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
                                1 free Bike
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Bikes >>></a>
            </div>
        </div>

    </div>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/12.png" width="80px">
                <h5 class="mt-3">Helmet</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/13.png" width="80px">
                <h5 class="mt-3">Riding Gears</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/11.png" width="80px">
                <h5 class="mt-3">Free Kilometers</h5>
            </div>
        </div>
    </div>
    <!-- testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/testimonials/1.jpg" width="40px" />
                        <h6 class="m-0 ms-2 ">Random user1</h6>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/testimonials/2.jpg" width="40px" />
                        <h6 class="m-0 ms-2">Random user2</h6>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/testimonials/2.jpg" width="40px" />
                        <h6 class="m-0 ms-2">Random user3</h6>
                    </div>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details >>></a>
    </div>
    </div>
    <!-- Reach Us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-4 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14214.961423207387!2d75.8932026!3d27.0383693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c14bd99188f39e6!2sFLYBAXI%20Kukas-%20Bike%20Rent%20in%20Jaipur!5e0!3m2!1sen!2sin!4v1666210631666!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="phone: +917903657669" class="d=inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-whatsapp"></i>
                        +917903657669
                    </a>
                    <br>
                    <a href="phone: +917903657669" class="d=inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +917903657669
                    </a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d=inline-block mb-3 ">
                        <span class="badge bg-white text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i>
                            Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d=inline-block mb-3 ">
                        <span class="badge bg-white text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>
                            Fcebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d=inline-block mb-3 ">
                        <span class="badge bg-white text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>
                            Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,

            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                var640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>