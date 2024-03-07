<?php
$style = '
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/mobilNavbar.css">
<link rel="stylesheet" href="css/companyprofile.css">
';
$title = "Company Profile";
$active = 1;
include './layout/header.php';
include './layout/mobileNav.php';
?>
<style>
    #more {
        display: none;
    }
</style>
<section>
    <div class="solutioncontainer">
        <div class="container ">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-12 col-md-6 solutionDream ps-md-4 pe-md-5 " data-aos="fade-up">
                    <h1 class="solutionDream py-md-1 mt-4 mt-md-1">Every Solution
                        For Your Dream Home</h1>
                    <p class="py-md-2  " style="text-align: justify;"><span>Unico Housing Finance</span> stands as a new-age, digitally-driven housing finance entity officially recognized by the Reserve Bank of India under registration number DOR-00187, dated October 16, 2023. </p>
                    <!-- <p id="dots">...</p> -->
                    <p id="more" style="text-align: justify;">Our primary commitment lies in delivering affordable housing loan solutions and services to meet the credit needs of underserved and New-to-credit customer segments, thus empowering them and fostering a sense of pride in homeownership. Our pledge is to guarantee an unparalleled customer service experience through the integration of cutting-edge technology for enhanced convenience and accessibility. Unico’s array of solutions is meticulously crafted to cater to diverse home financial requirements within the affordable housing segment, ensuring a range of advantageous options for individuals.</p>
                    <button class="soloution_knowmore mb-5 mt-2 mt-md-1" onclick="toggleMore()" id="myBtn">Read More</button>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" data-aos="zoom-in-right" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/House+2+1+(1).jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container  justify-content-center py-md-5 mt-5">
        <div class="  row    justify-content-center align-items-center ">

            <!-- <div class="col-12 col-md-6"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/abtpro.png" alt=""></div> -->
            <div class="col-12 col-md-6 text-end " data-aos="zoom-in-right"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/abt_us.png" alt=""></div>
            <div class="col-12 col-md-6     my-auto " data-aos="fade-right">
                <img class="img-fluid text-start position-absolute " src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Vector+30.svg" alt="">
                <p class="our_prodctabt ps-4 ps-md-3 pt-2 mb-md-0 pt-2 "><span class="topvec"> </span>
                    <span class=" "> Where Family Thrives, Love Flourishes - </span> We Nurture Your Home Finance to Sustain the Warmth!
                </p>
                <p class="our_proddetails ps-1 ps-md-3 mb-md-0 ">We're here to ease your worries, and accompany you on the journey towards your dream home. Together, let's turn your aspirations into reality.We're here to ease your worries, and accompany you on the journey towards your dream home. Together, let's turn your aspirations into reality.</p>
                <!-- <p class="ms-3 fw-semibold abtprodes pe-md-5 ps-md-5 ">Buy Your Dream Home with our Easy Home Loan Process and Fast Approval</p> -->
                <!-- <div class=" ps-md-2 ">
                    <button class="mx-md-5 ms-md-5 productprofile">Read More</button>
                </div> -->
            </div>
            <!-- <div class="col-6 p-5   my-auto our_prodctabt ">
                <img class="img-fluid text-start" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/react.svg" alt="">
                <p class="our_prodctabt ps-3 mb-md-0 "><span class="topvec"> </span>
                    <span>Home is Where the Heart is,</span>Let Us Fund Yours!
                </p>
                <button class="product_apply_now ms-3 px-4 py-2 border-0  rounded-4 mt-3 text-white fw-semibold ">Read More</button>
            </div> -->
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 missionbg p-md-5 order-md-1 order-2  " data-aos="zoom-out-right">
                <h2 class="ps-md-5 pt-3 pt-md-5">OUR MISSON</h2>
                <p class="ps-md-5"> Empowering our stakeholders' lives is our paramount mission, achieved through attentive understanding and collaborative synergy. With a dedicated focus on sensitivity and mutual growth, we aspire to meet their unique needs and aspirations. Our commitment to transparency, integrity, and excellence drives us to create meaningful connections and foster shared success. Together, we embark on a journey of fulfillment, where every interaction is a testament to our unwavering dedication. </p>
            </div>
            <div class="col-12 col-md-6 text-center missionimg p-md-5 order-md-2 order-1 " data-aos="zoom-out-left">
                <img class="py-md-5" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/mission.svg" alt="">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row  ">
            <div class="col-12 col-md-6 text-center p-md-5 visionimg " data-aos="zoom-out-right">
                <img class="py-md-5" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/vision.svg" alt="">
            </div>
            <div class="col-12 col-md-6 visionbg p-md-5 " data-aos="zoom-out-left">
                <h2 class="ps-md-5 pt-3 pt-md-5 pb-2 pb-md-1">OUR VISION</h2>
                <p class="ps-md-5">Our vision is to emerge as the premier housing finance provider in the affordable segment, renowned for delivering unmatched value to our stakeholders. Leveraging innovative technology, we lay the foundation for a resilient, sustainable, and scalable organization. Our steadfast commitment to excellence propels us forward, shaping a future where prosperity thrives within the communities we serve.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-md-5">
        <div class="row text-center values " data-aos="zoom-in-down">
            <h2 class="py-3 py-md-0">OUR VALUES</h2>
            <p class="px-md-5 py-md-3 col-12 col-md-8  m-auto">At <span>Unico</span> we embody <span> Sensitivity, Ownership, Agility, Responsibility, and Synergy (SOARS)</span>as the pillars of our value system. Sensitivity shapes our understanding, Ownership fuels accountability, Agility steers us through change, Responsibility anchors our integrity, and Synergy unleashes our collective potential. Together, we soar to new heights!</p>
            <img class="img-fluid pt-3 pt-md-0" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/valu.png" alt="">
        </div>
    </div>
    <div class="containersoars pt-md-5 pb-md-5">
        <div class="text-center " data-aos="zoom-in-up">
            <h2 class="soars">
                Unico SOARS!!! 
            </h2>
            <p class="soarcont pb-md-5">
                Where in our values are as below</p>
            <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/soars.png" alt="">
        </div>
    </div>
    <div class="text-center pt-md-5 pb-md-5" data-aos="zoom-in-up">
        <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/bhdlogo.png" alt="">
    </div>
</section>
<script>
    function toggleMore() {
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
        if (moreText.style.display === "none") {
            moreText.style.display = "block";
            btnText.innerHTML = "Read Less";
        } else {
            moreText.style.display = "none";
            btnText.innerHTML = "Read More";
        }
    }
</script>
<?php include './layout/footer.php'; ?>