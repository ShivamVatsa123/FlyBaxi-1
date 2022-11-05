<nav class="navbar navbar-custom navbar-expand-lg navbar-light 1 px-lg-3 py-lg-2 shadow-sm sticky-top" style="background-color: #fd7e14;">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-boldh-font" href="index.php"><img src="images/logo/12.png me-auto">FlyBaxi
        </a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active pop" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active me-2 pop" href="bikes.php">Bikes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2 pop" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2 pop" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active me-2 pop" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle pop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item pop" href="#">My Profile</a></li>
                        <li><a class="dropdown-item pop" href="#">My Booking</a></li>
                        <li><a class="dropdown-item pop" href="#">Log Out</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle pop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu pop" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">BIKE</a></li>
                        <li><a class="dropdown-item" href="#">CAR</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle pop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Centre
                    </a>
                    <ul class="dropdown-menu pop" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item pop" href="#">Jaipur</a></li>
                        <li><a class="dropdown-item pop" href="#">Rohtang</a></li>
                        <li><a class="dropdown-item pop" href="#">Ajmer</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link me-2" href="#">Centre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Category</a>
                    </li> -->
            </ul>

            <div class="d-flex">

                <button type="button" class="btn btn-sm text-dark shadow-none me-lg-3 me-3 pop" style="background-color:white" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <div class="d-flex">

                    <button type="button" class="btn btn-sm text-dark shadow-none me-lg-3 me-3 pop" style="background-color:white" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
</nav>


</nav>
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-2 me-2"></i>User Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="submit" class="btn btn-dark shadow-none pop" style="background-color:#fd7e14;">
                            LOGIN
                        </button>
                        <a href="javascript(): void(0)" class="text-secondary text-decoration-none pop">Forgot Password?</a>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>

                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-2 me-2"></i>

                        User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                        Note: Your details must match with the ID(Aadhar card, Driving Licence) that will be required during the pick-up.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <!-- <div class="col-md-12 mb-3">
                                    <label class="form-label" >Name</label>
                                    <input type="name" class="form-control shadow-none" row="1">
                                </div> -->
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="name" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" row="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3 ">
                                    <label class="form-label">Phone number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>

                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>


                                <div class="col-md-6 ps-0 mb-3 ">
                                    <label class="form-label">Pin Code</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none pop" style="background-color:#fd7e14;">
                                Register
                            </button>

                        </div>
                        <!-- <div class="mb-3">
                            
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                             -->


                        <!-- <a href="javascript(): void(0)" class="text-secondary text-decoration-none">Forgot Password?</a> -->
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>