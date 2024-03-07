<?php
$style = '
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/mobilNavbar.css">
<link rel="stylesheet" href="css/contact.css">
';
$title = "Contact Us";
$active = 7;
include './layout/header.php';
include './layout/mobileNav.php';
?>
<section>
    <div class="container-fluid  contactUs ">
        <div class=" pt-4">
            <?php if (isset($_GET["sent"]) && $_GET["sent"] == "1") { ?>
                <div class="text-center d-flex align-items-center justify-content-center">
                    <div class="alert alert-success alert-successss" id="malert" role="alert">
                        Submitted successfully ✅
                    </div>
                </div>
                <script>
                    // JavaScript to hide the success message after 10 seconds
                    document.addEventListener("DOMContentLoaded", function() {
                        setTimeout(function() {
                            var malert = document.getElementById("malert");
                            if (malert) {
                                malert.style.display = "none";
                            }
                        }, 5000); // 10 seconds (10000 milliseconds)
                    });
                </script>
            <?php } ?>
        </div>
        <h1 class="   px-md-5 pt-md-2 text-center" data-aos="zoom-in" data-aos-duration="700">Contact us</h1>
        <p class="LocateUs text-center mb-md-5" data-aos="zoom-in" data-aos-duration="700">Any question or remarks? Just write us a message!</p>
        <div class="conatiner contact_contain mx-md-5 my-md-3">
            <div class="row ">
                <div class="col-12 col-lg-5 px-md-4  contact_detail text-center text-md-start mx-auto pt-md-5   order-lg-0 order-3" data-aos="fade-right" data-aos-duration="700">
                    <div class="text-start ps-md-3 mb-md-5 ">
                        <p class="fw-medium mb-2 mb-md-2 m-0 infocont mt-2 mt-md-0">Contact Information</p>
                        <p class="infodesc">Feel free to contact us any time. We will get back<br> to you as soon as we can</p>
                    </div>
                    <div class="mt-1 ps-md-3 d-flex justify-content-md-start gap-3 pt-md-1">
                        <p class="fw-medium "> <span> <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Mail%2BIcon.svg" /> </span></p>
                        <div class="text-start">
                            <p class="fw-medium mb-md-2 m-0">E-mail Us </p>
                            <a href="mailto:customercare@unicohfc.com" class="text-decoration-none  text-light">
                                <p style="color: #535861;" class="m-0 ">customercare@unicohfc.com</p>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3 ps-md-3 d-flex justify-content-start gap-3 pt-md-3">
                        <p class="fw-medium"><span> <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Phone.svg" /> </span></p>
                        <div class="text-start">
                            <p class="fw-medium mb-md-2 m-0">Contact Us</p>
                            <a href="tel:+91-44-2232 8888" style="text-decoration: none;">
                                <a href="tel:044 611711" class="text-decoration-none  text-light">
                                    <p style="color: #535861;" class="m-0 pb-3">044 611711</p>
                                </a>
                            </a>
                        </div>
                    </div>
                    <div class="mt-3 ps-md-3 d-flex justify-content-start gap-3 pt-md-3 pb-md-2 d-none d-md-block ">
                        <p class="fw-medium"><span> <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Location.svg" /> </span></p>
                        <div class="text-start">
                            <p class="fw-medium mb-md-2 m-0">Address</p>
                            <p style="color: #535861;" class="m-0"> <span class="fw-semibold">Register Offcie : Unico Housing Finance Private Limited</span> <br> 8th Floor, The Oval, No. 10 & 12, Venkata Narayana Road , <br> T. Nagar, Tamil Nadu, Chennai- 600017.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between d-none d-md-block">
                        <div class="pt-md-5 pt-4">
                            <ul class="d-flex justify-content-start align-items-center p-0">
                                <a href="https://www.facebook.com/people/Unico-Housing-Finance-Private-Limited/61553679195669/" target="_blank">
                                    <li class="ps-md-3 ps-2 "><img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_3.svg" class="img-fluid" /></li>
                                </a>
                                <a href="https://twitter.com/UnicoHousing" target="_blank">
                                    <li class="ps-md-3 ps-2 "><img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_5.svg" class="img-fluid" /></li>
                                </a>
                                <a href="https://www.linkedin.com/in/unico-housing-finance-7b245b2a1/" target="_blank">
                                    <li class="ps-md-3 ps-2 "><img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_4.svg" class="img-fluid" /></li>
                                </a>
                                <a href="https://www.instagram.com/unicohousingfinance/" target="_blank">
                                    <li class="ps-md-3 ps-2 "><img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/he_so_2.svg" class="img-fluid" /></li>
                                </a>
                                <!-- <a href="https://www.instagram.com/unicohousingfinance/" target="_blank">
                                    <li class="ps-md-3 ps-2 "><img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/img127.svg" class="img-fluid" /></li>
                                </a> -->
                            </ul>
                        </div>
                        <div>
                            <img style="float:right;" class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Group%2B1171278531.png" alt="">
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-12 col-lg-6 col-md-10  mt-md-5  mx-auto  text-center text-md-start order-lg-1 order-0 px-md-5" data-aos="fade-left" data-aos-duration="700">
                    <form action="./contactUsDb.php" class="formbgcolor" method="post">
                        <div class="row mb-md-4">
                            <div class="col-md-6 my-md-4 my-2">
                                <input class="px-3 form-control  contactUsInput form-bg" type="text" placeholder="Your Name" required name="name" oninput="validateText(event)">
                            </div>
                            <div class="col-md-6 my-md-4 my-2">
                                <input class="px-3 form-control contactUsInput form-bg" type="email" required placeholder="E-Mail ID" name="email">
                            </div>
                        </div>
                        <div class="row mb-md-5">
                            <div class="col-md-6 my-md-4 mt-2 mt-md-5">
                                <input class="px-3 form-control contactUsInput form-bg" type="tel" required placeholder="Phone Number" name="number" oninput="validateNumber(event)">
                            </div>
                            <div class="col-md-6  my-md-4 my-2">
                                <input class="form-control form-bg contactUsInput px-3 pt-2 " type="text" name="address" placeholder="Address" id="exampleFormControlTextarea1"></input>
                            </div>
                        </div>
                        <div class="my-md-4 my-2">
                            <textarea class="form-control border-1 form-bg px-3 pt-2 " name="message" placeholder="Message" id="exampleFormControlTextarea1" style="height: 150px;width: 100%; border-radius: 6px;"></textarea>
                        </div>
                        <div class="my-md-4 my-5 text-md-end  buttonForContactUs1 mt-md-5">
                            <input class="px-5 btnd buttonForContactUs py-2" type="submit" value="Send Message" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php include './layout/footer.php'; ?>