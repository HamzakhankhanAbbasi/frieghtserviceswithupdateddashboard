<?php include 'includes/headertwo.php';?>
<!-- Login Page -->
<section class="login-page">
	<div class="login-leftwrap">
        <div class="modal-logo">
            <a href="index.php">
                <img src="assets/images/logo.png" class="img-fluid" alt="">
            </a>
        </div>
    </div>
    <div class="login-rightwrap">
        <div class="login-fields">
            <p class="login-title">Login Dashboard</p>
            <form action="">
                <input type="text" placeholder="Email address">
                <input type="password" placeholder="Password">
                <div class="checkbox-container">
                    <input id="rememberMe" type="checkbox"/>
                    <label class="checkbox" for="rememberMe"></label>
                    <label for="rememberMe">Remember me?</label>
                </div>
                <div class="loginBtn">
                    <a href="javascript:void(0)" class="clrBTn">Login</a>
                </div>
                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#forgetmodal" class="forgetpsd">Forget Password?</a>
            </form>
            <div class="login-bottomSec">
                <p class="login-title text-center">Or Login with</p>
                <div class="social-links">
                    <a href="#!" class="social-icons"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!" class="social-icons"><i class="fab fa-instagram"></i></a>
                    <a href="#!" class="social-icons"><i class="fab fa-apple"></i></a>
                    <a href="#!" class="social-icons"><i class="fab fa-google-plus-g"></i></a>
                </div>
            </div>
        </div>
        <p class="footer-text text-center">© Copyright 2022 Freilght Services Unlimited, All Right Reserved</p>
    </div>
</section>

<?php include 'includes/footertwo.php';?>