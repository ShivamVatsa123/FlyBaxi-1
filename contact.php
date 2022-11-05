<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- <link rel="stylesheet" href="css/common.css"> -->
    <?php require('inc/links.php'); ?>
    <style>
    </style>
</head>

<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Exercitationem doloribus illum voluptatum accusantium est <br> nobis pariatur quae corporis
            reiciendis distinctio nulla, vero earum laborum itaque quia dolor esse dignissimos atque?
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-3 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14214.961423207387!2d75.8932026!3d27.0383693!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c14bd99188f39e6!2sFLYBAXI%20Kukas-%20Bike%20Rent%20in%20Jaipur!5e0!3m2!1sen!2sin!4v1666210631666!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://g.page/flybaxikukas?share" target="_blank" class="d-line-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> Fly Baxi, Kukas, Jaipur, Rajasthan
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="phone: +917903657669" class="d=inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-whatsapp"></i>
                        +917903657669
                    </a>
                    <br>
                    <a href="phone: +917903657669" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +917903657669
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: vatsashivam2022@gmail.com" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> vatsashivam2022@gmail.com
                    </a>
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2 ">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class=" mt-4 btn btn-dark shadow-none pop" style="background-color:#fd7e14;">
                            SEND
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <?php require('inc/footer.php'); ?>

</body>

</html>