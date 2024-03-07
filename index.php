<?php
$style = '
<link rel="stylesheet" href="Styles/index.css">
<link rel="stylesheet" href="Styles/navbar.css">
<link rel="stylesheet" href="Styles/mobilNavbar.css"> 
<link rel="stylesheet" href="Styles/calculator.css">
';
$title = "Home";
$active = 0;
include './layout/header.php';
include './layout/mobileNav.php'; ?>
<!-- Ajith code start -->
<main>
  <!-- banner -->
  <div class="banner_carousel z-9 bg-white" style="z-index:1">
    <a class="" href="./product.php"> <img class="banner_img" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/home_banner_1.png" alt=""></a>
    <a class="" href="./product.php"> <img class="banner_img" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/home_banner_2.png" alt=""></a>
    <a class="" href="./product.php"> <img class="banner_img" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/home_banner_3.png" alt=""></a>
  </div>
  <!-- Our Products -->
  <!-- <p class="text-center fw-bold  y_chose_unico mt-5 pt-3">Our <span>Products</span></p> 
  <p class="text-center   fs-2 mt-0 pt-0 font-monospace">Buy Your Dream Home with our Easy Home <br> Loan Process and Fast Approval</p>
   -->

  <div class="container bg-white mt-4 mt-md-0" style="z-index:9">
    <div class="row  pt-5   justify-content-center ">
      <div class="col-12 col-md-4 p-2   my-auto text-center  ">
        <img class="img-fluid text-start d-none d-md-block" data-aos="fade-down-right" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/react.svg" alt="">
        <p class="our_prodct ms-4 mt-0 pt-0" data-aos="fade-right">Our <span>Products</span></p>
        <p class="ms-md-4 fw-semibold  mt-1 ps-1 " data-aos="fade-right">Customized loan options for your aspirations.</p>
        <p class="ms-md-4  fw-semibold  ps-1 v_listn" data-aos="fade-right">We attentively listen, observe and curate your perfect loan.</p>

        <a class="" href="./product.php"> <button class="product_apply_now ms-md-3 px-md-5 py-md-3 py-3 px-4 border-0  rounded-4 mt-md-3 text-white fw-semibold " data-aos="fade-right">APPLY NOW</button> </a>
      </div>
      <div class="col-12 col-md-7"><img class="img-fluid" data-aos="fade-up" data-aos-anchor-placement="top-bottom" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/proImg.png" alt=""></div>
    </div>
  </div>

  <!-- <p class="text-center fw-bold  y_chose_unico mt-5 pt-3">Our <span>Products</span></p>
  <p class="text-center   fs-2 mt-0 pt-0">Buy Your Dream Home with our Easy Home <br> Loan Process and Fast Approval</p> -->
  <div>


    <div class="product_cont mt-0 pt-0 z-9  position-relative">
      <div class="container-fluid p-0">
        <div class="row ">
          <div class="Products_carousel">

            <div class="col-1 caro " data-aos="fade-down" onmouseover="changeColor()">
              <div class="background"></div>
              <div>
                <div class="  text-white caro_1 caros">
                  <p class="pt-3"></p>
                  <p class=" text-center px-3 fw-semibold pt-5">Home Loan Balance Transfer</p>
                  <!-- <p class="ms-0 mb-5 d-flex justify-content-center pb-3">
                <img class="img-fluid  pb-5" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/prod_caro_new_img.png" alt="" srcset="">
              </p> -->
                  <div class="text-center pb-5 pt-3 ">
                    <p class="text-center mx-5 mt-2 prod_gif_clr rounded-4 ">
                      <img class="img_fluid1" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Balance-Transfer.gif" alt="" srcset="">
                    </p>
                  </div>
                </div>
                <div class="text-center product_joint px-1">
                  <p class="px-1">Streamline your finances by transferring your existing home loan to Unico.</p>
                  <!-- <p class="px-3 pb-4"> <a class="" href="./product.php"><button class="py-2 px-3 rentalhome_btn mt-3 fs-5 fw-semibold">APPLY NOW</button></a></p> -->
                  <a class="box__link button-animation" href="./product.php">
                    Apply Now
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                  </a>
                </div>
              </div>

            </div>

            <div class="col-1 caro " data-aos="fade-down" data-aos-duration="400" onmouseover="changeColor()">
              <div class="background"></div>
              <div class="  text-white caro_2 caros">
                <p class="pt-3"></p>
                <p class=" text-center px-3 fw-semibold pt-5">New Commercial Property Purchase Loan</p>
                <!-- <p class="ms-0 mb-5 d-flex justify-content-center pb-3">
                <img class="img-fluid  pb-5" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/prod_caro_new_img.png" alt="" srcset="">
              </p> -->
                <div class="text-center pb-5 pt-3 ">
                  <p class="text-center d-flex ju mx-5 mt-2 prod_gif_clr rounded-4 ">
                    <img class="img_fluid1" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/New-Commercial-.gif" alt="" srcset="">
                  </p>
                </div>
              </div>
              <div class="text-center product_joint px-1">
                <p class="px-1">Acquire brand-new commercial spaces or shops in commercial complexes.</p>
                <!-- <p class="px-3 pb-4"> <a class="<?php echo (isset($active) && $active === 4) ? 'active' : ''; ?>" <?php echo (isset($active) && $active === 4) ? 'style="background-color: #CCCEFF;color:#ffffff!important;"' : ''; ?> href="./product.php"><button class="py-2 px-3 rentalhome_btn mt-3 fs-5 fw-semibold">APPLY NOW</button></a></p> -->
                <a class="box__link button-animation" href="./product.php">
                  Apply Now
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </div>
            </div>


            <div class="col-2 caro " data-aos="fade-down" data-aos-duration="600">
              <div class="background"></div>
              <div class="  text-white caro_3 caros">
                <p class="pt-3"></p>
                <p class=" text-center px-3 fw-semibold pt-5">Home Extension <br>Loan</p>
                <div class="text-center pb-5 pt-3 ">
                  <p class="text-center mx-5 mt-2 prod_gif_clr rounded-4 ">
                    <img class="img_fluid1" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Home-Extention-Loan-Gif.gif" alt="" srcset="">
                  </p>
                </div>
              </div>
              <div class="text-center product_joint px-1">
                <p class="px-1">Boost your existing home loan for various purposes, like renovations, extensions, etc. </p>
                <!-- <p class="px-3 pb-4"> <a class="<?php echo (isset($active) && $active === 4) ? 'active' : ''; ?>" <?php echo (isset($active) && $active === 4) ? 'style="background-color: #CCCEFF;color:#ffffff!important;"' : ''; ?> href="./product.php"><button class="py-2 px-3 rentalhome_btn mt-3 fs-5 fw-semibold">APPLY NOW</button></a></p> -->
                <a class="box__link button-animation" href="./product.php">
                  Apply Now
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </div>
            </div>

            <div class="col-2 caro position-relative" data-aos="fade-down" data-aos-duration="800">
              <div class="background"></div>
              <div class="  text-white caro_4 caros">
                <p class="pt-3"></p>
                <p class=" text-center px-3 fw-semibold pt-5">Loan Against Property <br> Residential </p>
                <!-- <p class="ms-0 mb-5 d-flex justify-content-center pb-3">
                <img class="img-fluid  pb-5" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/prod_caro_new_img.png" alt="" srcset="">
              </p> -->
                <div class="text-center pb-5 pt-3 ">
                  <p class="text-center mx-5 mt-2 prod_gif_clr rounded-4 ">
                    <img class="img_fluid1" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Loan-Against-Property.gif" alt="" srcset="">
                  </p>
                </div>
              </div>
              <div class="text-center product_joint px-1">
                <p class="px-1">Leverage the equity in your residential property to address various financial requirements.</p>
                <!-- <p class="px-3 pb-4"> <a class="<?php echo (isset($active) && $active === 7) ? 'active' : ''; ?>" <?php echo (isset($active) && $active === 4) ? 'style="background-color: #CCCEFF;color:#ffffff!important;"' : ''; ?> href="./product.php"><button class="py-2 px-3 rentalhome_btn mt-3 fs-5 fw-semibold">APPLY NOW</button></a></p> -->
                <a class="box__link button-animation" href="./product.php">
                  Apply Now
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </div>
            </div>

            <div class="col-2 caro " data-aos="fade-down" data-aos-duration="1000">
              <div class="background"></div>
              <div class="  text-white caro_5 caros">
                <p class="pt-3"></p>
                <p class=" text-center px-3 fw-semibold pt-5">Home Construction <br>Loan</p>
                <!-- <p class="ms-0 mb-5 d-flex justify-content-center pb-3">
                <img class="img-fluid  pb-5" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/prod_caro_new_img.png" alt="" srcset="">
              </p> -->
                <div class="text-center pb-5 pt-3 ">
                  <p class="text-center mx-5 mt-2 prod_gif_clr rounded-4 ">
                    <img class="img_fluid1" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Home Construction Loan Gif.gif" alt="" srcset="">
                  </p>
                </div>
              </div>
              <div class="text-center product_joint px-1">
                <p class="px-2">Construct your ideal living space with our Home Construction Loan. </p>
                <!-- <p class="px-3 pb-4"> <a class="<?php echo (isset($active) && $active === 4) ? 'active' : ''; ?>" <?php echo (isset($active) && $active === 4) ? 'style="background-color: #CCCEFF;color:#ffffff!important;"' : ''; ?> href="./product.php"><button class="py-2 px-3 rentalhome_btn mt-3 fs-5 fw-semibold">APPLY NOW</button></a></p> -->
                <a class="box__link button-animation" href="./product.php">
                  Apply Now
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </div>
            </div>

            <div class="col-2 caro " data-aos="fade-down" data-aos-duration="1200">
              <div class="background"></div>
              <div class="  text-white caro_6 caros">
                <p class="pt-3"></p>
                <p class=" text-center px-3 fw-semibold pt-5">Resale Commercial Property Purchase Loan</p>
                <!-- <p class="ms-0 mb-5 d-flex justify-content-center pb-3">
                <img class="img-fluid  pb-5" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/prod_caro_new_img.png" alt="" srcset="">
              </p> -->
                <div class="text-center pb-5 pt-3 ">
                  <p class="text-center mx-5  mt-2 prod_gif_clr rounded-4 ">
                    <img class="img_fluid1" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Resale-Commercial.gif" alt="" srcset="">
                  </p>
                </div>
              </div>
              <div class="text-center product_joint px-1">
                <p class="px-1">Purchase your commercial space to upscale your business using this loan.
                </p>
                <!-- <p class="px-3 pb-4"> <a class="<?php echo (isset($active) && $active === 4) ? 'active' : ''; ?>" <?php echo (isset($active) && $active === 7) ? 'style="background-color: #CCCEFF;color:#ffffff!important;"' : ''; ?> href="./product.php"><button class="py-2 px-3 rentalhome_btn mt-3 fs-5 fw-semibold">APPLY NOW</button></a></p> -->
                <a class="box__link button-animation" href="./product.php">
                  Apply Now
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div style="position: absolute; bottom: 60%; left: 0;" class="d-nones  " id="product"> </div>
    </div>



    <!-- unico home finance lottie -->
    <div>

      <!-- 
      <p class="text-center hme_finance_txt mt-4 p-0 mb-0"><span>Unico</span> Housing Finance </p>
      <p class="text-center para2  m-0 p-0">in three Easy Steps</p>
      <p class="text-center para3  m-0 p-0 pb-1">Buy your dream home with our easy home loan process and fast approval</p> -->
      <!-- <div class="container">
    <div class=" text-center">
      <img class="img-fluid text-center" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/lotti_alt.png" alt="" srcset="">
    </div>
  </div> -->
      <!-- <div class="container mobilcontain mx-auto text-center mt-1" id="mobilecontainer">
        <div class="row mx-auto text-center d-flex justify-content-center align-items-center"> -->


      <!-- <dotlottie-player id="animation" src="./assets/NewJsonVideo.json" background="transparent" speed="1" direction="1" playMode="normal" loop autoplay></dotlottie-player> -->

      <!-- <lottie-player class="lottie-progress text-align:center" id="lottie-progress" src="./assets/NewJsonVideo.json" speed="1"></lottie-player>


        </div> -->

    </div>
  </div>
  <div class="row p-o m-0 justify-content-center d-md-block d-none ">
    <div class="col-12 p-0 m-0">
      <div class="phonecont" id="animationWindow">
      </div>
    </div>
  </div>
  <div class="row p-o m-0 justify-content-center d-md-none d-block ">
    <div class="col-12 p-0 m-0">
      <div class="phonecont" id="animationWindowMobile">
      </div>
    </div>
    <!-- <lottie-player src="./assets/mobileLottie.json" background="transparent" speed="1" direction="1" mode="normal" loop autoplay></lottie-player> -->
  </div>

  <!-- testing gf -->

  <!-- why waste money on rental home -->
  <div class="bg-white pb-5">
    <div class="container rentalhomebk " id="rentalhomebk" style="z-index:99">
      <div class=" row p-md-5">
        <div class="col-12 col-lg-6 py-md-5 my-md-5 py-5 pe-0">
          <div class="pb-3 ">
            <p class="rentalhome_sub_txt text-md-start text-center" data-aos="fade-right" data-aos-duration="800">"Why spend money on rental homes <span>unnecessarily?"</span></p>
            <p class="fs-6 pe-1 pe-lg-5 lh-lg col-lg-9 text-md-start text-center" data-aos="fade-right" data-aos-duration="1000">Own your dream home with Unico Housing Finance and transform your rent into monthly instalments for your own house.</p>
            <div class="d-md-none d-block d-flex justify-content-center align-items-center">
              <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Island.svg" class="img-fluid " />
            </div>
            <a class="d-flex justify-content-md-start justify-content-center align-items-center" href="./product.php"> <button class="py-3 px-5 y_waste_money_btn mt-3  fw-semibold" data-aos="fade-right" data-aos-duration="1200">APPLY NOW</button></a>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid scrollHeight">
    <p class="text-center fw-bold  y_chose_unico pt-1 text-white" data-aos="fade-up" data-aos-anchor-placement="center-bottom">Why Choose <span>Unico</span></p>
  </div>
  <div class="bgForVerticalCarosel">
    <section class="scroll-trigger pb-md-5 pt-md-5">
      <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide d-flex">
              <div class="row justify-content-center  align-items-center y_chose_cotent">
                <div class="col-4 text-end ">
                  <p class="pe-4  text-center"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/01.png" alt=""></p>
                </div>
                <div class="col-4 splide_contain">
                  <p class="lh-base  fw-bold text-white pe-4">Quick Approvals, Simplified Process:</p>
                  <p class="lh-lg text-light  pe-3">Recognizing your urgency, we streamline pre-loan formalities to expedite decisions and provide quicker access to your dream home. </p>
                </div>
                <div class="col-4 "> <lottie-player class="" id="lottie-one" src="./assets/whychoose.json" speed="1"></lottie-player> </div>
              </div>
            </li>
            <li class="splide__slide d-flex">
              <div class="row  py-5 align-items-center ">
                <div class="col-4 text-end ">
                  <p class="pe-4  text-center"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/02.png" alt=""></p>
                </div>
                <div class="col-4 splide_contain">
                  <p class="lh-base  fw-bold text-white pe-3">Seamless Documentation, Reduced Paperwork:</p>
                  <p class="lh-lg text-light  pe-3">We emphasize a straightforward documentation process, guaranteeing a smooth journey towards your dream space.</p>
                </div>
                <div class="col-4 text-center"> <lottie-player class="" id="lottie-two" src="./assets/whychoose2.json" speed="1"></lottie-player> </div>
              </div>
            </li>
            <li class="splide__slide d-flex">
              <div class="row  py-5 align-items-center ">
                <div class="col-4 text-end ">
                  <p class="pe-4  text-center"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/03.png" alt=""></p>
                </div>
                <div class="col-4 splide_contain">
                  <p class="lh-base  fw-bold text-white pe-3">Digital Ease, Constant Connectivity:</p>
                  <p class="lh-lg text-light pe-3">Our intuitive digital tools provide round-the-clock access to account details, payments, and support, empowering you at every stage.</p>
                </div>
                <div class="col-4 text-center"> <lottie-player class="" id="lottie-three" src="./assets/whychoose1.json" speed="1"></lottie-player> </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </section>
  </div>
  <div class="container bg-white" id="nextsection">
    <p class="text-center fw-bold  y_chose_unico  py-4 pb-2 " data-aos="fade-up">Plan your dream home <span> with confidence! </span></p>
    <?php include './component/calculator.php' ?>
    <p class="text-center fw-bold  y_chose_unico py-4 pt-2 mb-0 " data-aos="fade-up">Review from our valued <span>Customers</span></p>
  </div>
  <div class="bg-white ">
    <div class="happy_customer">
      <p> </p>
    </div>

    <div class="containerr ">
      <div class="row happy_customer_row" data-aos="fade-up" data-aos-duration="1000">
        <!-- <div class=" testimonial-slider"> -->
        <div class="col-4 card_col ">
          <!-- <p style="margin-bottom: -300px;"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/caro_bf.svg" alt=""></p> -->
          <p class="text-center px-3 d-flex justify-content-center align-items-center" style="margin-bottom: -90px"><img class="img-fluid" width="170" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_img_2.png" alt=""></p>
          <div class="  bg-white border  px-3 pb-1 m-4 card_container">
            <div class="d-flex justify-content-between align-items-center mt-5   px-5 ">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublqutelft.svg" alt="" srcset="">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublquterit.svg" alt="" srcset="">
            </div>
            <p class="test_name fs-5 text-center p-0 m-0 fw-semibold ">Sujatha V</p>
            <p class="test_name_position fs-6 text-center p-0 m-0">Chennai</p>
            <p class="rev_caro_name fw-semibold fs-5 text-center p-0 m-0">Loan Against Property - Commercial</p>
            <p class="   text-center px-2 m-0 pb-2">"Unico's loan against property for commercial purposes has been a game-changer for my business.</p>
            <!-- <p class="text-center  mt-2"><button class=" rev_knw_more px-3 py-1 m-0">Know More</button></p> -->
            <div class="  text-center d-flex  justify-content-center stardiv   ">
              <p class="fw-bold my-auto d-flex  reve_sec py-2 px-3 "><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt="" class="text-center"></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span></p>
            </div>
          </div>
        </div>
        <div class="col-4 card_col ">
          <!-- <p style="margin-bottom: -300px;"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/caro_bf.svg" alt=""></p> -->
          <p class="text-center px-3 d-flex justify-content-center align-items-center" style="margin-bottom: -90px"><img class="img-fluid" width="170" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_img_3.png" alt=""></p>
          <div class="  bg-white border  px-3 pb-1 m-4 card_container">
            <div class="d-flex justify-content-between align-items-center mt-5   px-5 ">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublqutelft.svg" alt="" srcset="">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublquterit.svg" alt="" srcset="">
            </div>
            <p class="test_name fs-5 text-center p-0 m-0 fw-semibold ">Ashok metha</p>
            <p class="test_name_position fs-6 text-center p-0 m-0">Gujarat</p>
            <p class="rev_caro_name fw-semibold fs-5 text-center p-0 m-0">Home Renovation Loan</p>
            <p class="   text-center px-2 m-0 pb-2">"Thanks to Unico's home renovation loan, I was able to turn my house into my dream home.</p>
            <!-- <p class="text-center  mt-2"><button class=" rev_knw_more px-3 py-1 m-0">Know More</button></p> -->
            <div class="  text-center d-flex  justify-content-center  p-0 m-0  stardiv">
              <p class="fw-bold my-auto d-flex  reve_sec py-2 px-3 mt-1"><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt="" class="text-center"></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span></p>
            </div>
          </div>
        </div>
        <div class="col-4 card_col ">
          <!-- <p style="margin-bottom: -300px;"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/caro_bf.svg" alt=""></p> -->
          <p class="text-center px-3 d-flex justify-content-center align-items-center" style="margin-bottom: -90px"><img class="img-fluid" width="170" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_img_1.png" alt=""></p>
          <div class="  bg-white border  px-3 pb-1 m-4 card_container">
            <div class="d-flex justify-content-between align-items-center mt-5   px-5 ">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublqutelft.svg" alt="" srcset="">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublquterit.svg" alt="" srcset="">
            </div>
            <p class="test_name fs-5 text-center p-0 m-0 fw-semibold ">Anjali prathap</p>
            <p class="test_name_position fs-6 text-center p-0 m-0">Karnataka</p>
            <p class="rev_caro_name fw-semibold fs-5 text-center p-0 m-0">Loan Against Property-Topup</p>
            <p class="   text-center px-2 m-0 pb-2">"As an existing LAP customer of Unico, I recently availed of their top-up option, and I'm extremely satisfied.</p>
            <!-- <p class="text-center  mt-2"><button class=" rev_knw_more px-3 py-1 m-0">Know More</button></p> -->
            <div class="  text-center d-flex  justify-content-center   stardiv ">
              <p class="fw-bold my-auto d-flex  reve_sec py-2 px-3 mt-2"><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt="" class="text-center"></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span></p>
            </div>
          </div>
        </div>
        <div class="col-4 card_col ">
          <!-- <p style="margin-bottom: -300px;"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/caro_bf.svg" alt=""></p> -->
          <p class="text-center px-3 d-flex justify-content-center align-items-center" style="margin-bottom: -90px"><img class="img-fluid" width="170" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_img_4.png" alt=""></p>
          <div class="  bg-white border  px-3 pb-1 m-4 card_container">
            <div class="d-flex justify-content-between align-items-center mt-5   px-5 ">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublqutelft.svg" alt="" srcset="">
              <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/doublquterit.svg" alt="" srcset="">
            </div>
            <p class="test_name fs-5 text-center p-0 m-0 fw-semibold ">Pardeep</p>
            <p class="test_name_position fs-6 text-center p-0 m-0">Telungana</p>
            <p class="rev_caro_name fw-semibold fs-5 text-center p-0 m-0">Resale Purchase Loan</p>
            <p class="   text-center px-2 m-0 pb-2">"Securing a loan for purchasing a resale flat seemed daunting until I approached Unico.</p>
            <!-- <p class="text-center  mt-2"><button class=" rev_knw_more px-3 py-1 m-0">Know More</button></p> -->
            <div class="  text-center d-flex  justify-content-center  stardiv  ">
              <p class="fw-bold my-auto d-flex  reve_sec py-2 px-3 mt-2"><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt="" class="text-center"></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span><span class="me-2"><img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/review_start.svg" alt=""></span></p>
            </div>
          </div>
        </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <!-- get a call back -->
  <div class="bg-white mt-5">
    <div class="get_cal_back_bk " style="z-index:1">
      <div class="container  py-5">
        <div class="row">
          <div class="col-md-6 col-12 pt-5  ">
            <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/House_3D_Without_Graphic_1-2+2.png" alt="" class="d-md-none d-block">
          </div>
          <div class="col-md-6 col-12 align-self-end" data-aos="fade-left" data-aos-duration="1000">
            <div class="get_call_bk_cont  rounded-4 py-3 ps-5 pe-5">
              <p class="fs-2 text-white fw-semibold mt-5 get_hed mb-1">Get a Call Back</p>
              <p class="   fw-semibold  " style="color: #514C4C;">We're available 24/7. Connect with us directly, anytime!</p>
              <div class="d-flex  flex-md-row flex-column justify-content-between align-items-center  mt-md-5">
                <input class="get_call_bk_inputs ps-1  col-md-5 col-12" placeholder="Your name" type="text" name="" id="">
                <input class="get_call_bk_inputs ps-1 col-md-5 col-12 pt-md-0 pt-4" placeholder="Phone Number" type="text" name="" id="">
              </div>
              <div class="d-flex flex-md-row flex-column justify-content-between align-items-center mt-md-5">
                <input class="get_call_bk_inputs ps-1 col-md-5 col-12 pt-md-0 pt-4" placeholder="Mail Id" type="email" name="" id="">
                <input class="get_call_bk_inputs ps-1 col-md-5 col-12 pt-md-0 pt-4" placeholder="Pincode" type="Pincode" name="" id="">
              </div>
              <div class="mt-3 pb-4 d-flex justify-content-md-start align-items-start justify-content-center "><button class="py-md-3 py-2   get_cal_bk_btn mt-3 fs-5 fw-semibold rounded-5 ">Submit</button></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- frequently asked questions -->
  <div class="frquently_cont py-5 " data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
    <div class="container  p-3 bg-white rounded-5  shadow   ">
      <div class="bg_text_cont mx-2">
        <div class="row m-4 justify-content-center align-items-center pt-4 pb-3">
          <div class="col-12 col-md-6">
            <p class="fs-2 frequently_p mb-auto mb-0" data-aos="fade-right" data-aos-duration="1000">Frequently <span class=""> Asked Questions</span></p>
            <p data-aos="fade-right" data-aos-duration="1000">Answers to your home financing queries</p>
          </div>
          <div class="col-12 col-md-6 p-md-auto p-0 ">
            <!-- <div class="col-10 align-items-center px-3"> -->
            <div class="col-12 col-md-7 mx-auto">
              <div class="    d-flex justify-content-around   bg_cont_tab rounded-pill align-items-center  border border-dark  ">
                <p class=" px-4 px-md-5  mt-1 ms-2   fs-5 rounded-pill bg_selectt  bg-hover DivHighlight default my-auto  " onclick="opendiv('General')">General</p>
                <!-- <p class="bg_select_nilt  bg-hover DivHighlight px-5  mt-1 ms-2   fs-5 rounded-pill  my-1 " onclick="opendiv('Finance')">Finance </p> -->
                <p class="bg_select_nilt  bg-hover DivHighlight  px-5  mt-1 ms-2   fs-5 rounded-pill me-2  my-1" onclick="opendiv('Loans')">Loans</p>
              </div>
            </div>
            <!-- </div> -->
          </div>
        </div>
      </div>
      <div class=""></div>
      <!-- show selectd data rows -->
      <div class="Variable" id="General">
        <div class="row justify-content-between px-4 ">
          <div class="col-md-6 pb-4">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item acc_itm">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    How will Unico decide my home loan eligibility?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>The determination of your Home Loan eligibility relies on your repayment capacity, extending up to 90% of the property value. Repayment capacity is influenced by the combined income of all applicants and the age of the primary applicant.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item acc_itm my-3">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Can I also avail a loan for home improvements and home extension?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Certainly, you can also apply for a loan to acquire a home, construct a home, address home repairs, undertake home improvements, extend your existing home, or for the combined purpose of plot purchase and home construction.
                  </div>
                </div>
              </div>
              <div class="accordion-item acc_itm">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    When should I submit my documents?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    You will have to submit the documents along with your application form.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pb-4">
            <div class="accordion" id="accordionExample1">
              <div class="accordion-item acc_itm">
                <h2 class="accordion-header" id="headingO">
                  <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseO" aria-expanded="true" aria-controls="collapseO">
                    What are tenure options?
                  </button>
                </h2>
                <div id="collapseO" class="accordion-collapse collapse show" aria-labelledby="headingO" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>The tenure of your home loan ranges for up to 20 years. The term, however, does not extend beyond the retirement age or 60 years, whichever is earlier.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item acc_itm my-3">
                <h2 class="accordion-header" id="headingT">
                  <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseT" aria-expanded="false" aria-controls="collapseT">
                    Can I get approval for my home loan without finalising on my property?
                  </button>
                </h2>
                <div id="collapseT" class="accordion-collapse collapse" aria-labelledby="headingT" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    Yes, based on your income eligibility, we can offer you PNI (Property Not Identified) Sanction Letter for your home loan. You can identify the property you need to buy based on this document. Kindly speak to your sales manager to know more.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="Variable" id="Loans" style="display:none">
        <div div class="row justify-content-between px-4 ">
          <div class="col-md-6 col-12 pb-4">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item acc_itm">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    When can I make a home loan application?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    You can initiate a Home Loan application at any point after deciding to purchase or construct a property, even before finalizing the property or commencing construction. </div>
                </div>
              </div>
              <div class="accordion-item acc_itm my-3">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Are there any home loan tax benefits I can avail?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Certainly, resident Indians qualify for tax advantages on both the principal and interest components of a home loan as per the Income Tax Act. It is recommended to seek advice from your tax advisor for specific details. </div>
                </div>
              </div>
              <div class="accordion-item acc_itm">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What security will I have to provide to avail a home loan?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    The security for the loan usually includes a legal interest in the property financed by us and/or any extra collateral or temporary security deemed necessary by us. </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12 pb-4">
            <div class="accordion" id="accordionExample1">
              <div class="accordion-item acc_itm">
                <h2 class="accordion-header" id="headingO">
                  <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseO" aria-expanded="true" aria-controls="collapseO">
                    When do I start repaying the principal amount?
                  </button>
                </h2>
                <div id="collapseO" class="accordion-collapse collapse show" aria-labelledby="headingO" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    <p>The repayment of the principal starts from the month subsequent to the month in which you receive the complete disbursement of your loan. During the interim disbursement period, you are required to pay interest on the disbursed portion of the loan.
                  </div>
                  </p>
                </div>
              </div>
              <div class="accordion-item acc_itm my-3">
                <h2 class="accordion-header" id="headingT">
                  <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseT" aria-expanded="false" aria-controls="collapseT">
                    What does encumbrance refer to?
                  </button>
                </h2>
                <div id="collapseT" class="accordion-collapse collapse" aria-labelledby="headingT" data-bs-parent="#accordionExample1">
                  <div class="accordion-body fw-normal">
                    Encumbrance refers to claims, charges, or liabilities on a property, typically arising from factors like unpaid loans, outstanding bills, or other financial obligations. </div>
                </div>
              </div>
              <div class="accordion-item acc_itm">
                <h2 class="accordion-header" id="headingTh">
                  <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTh" aria-expanded="false" aria-controls="collapseTh">
                    What is the maximum home loan that I can obtain? </button>
                </h2>
                <div id="collapseTh" class="accordion-collapse collapse" aria-labelledby="headingTh" data-bs-parent="#accordionExample1">
                  <div class="accordion-body">
                    You need to provide an 'own contribution' ranging from 10-25% of the total property cost, depending on the loan amount. A housing loan can cover 75 to 90% of the property cost. </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>


  <!-- blogs -->
  <div class="blogs_bk  pt-5 ">
    <p class="text-center fs-1   blogstitle ">Blogs and Articles about <span class="fw-bold">UNICO</span></p>
  </div>
  <div class="  pb-5 mt-0 pt-0 blogs_carou ">
    <div class="container">

      <!-- neww -->
      <div class="row ">
        <div class="col-12 col-md-7 ">
          <div class="blog_new_carousel">

            <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog_2.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Unico’s Home Loan Balance Transfer: Empower Your Finances</p>
                <p class="d-flex justify-content-between align-items-center pb-3 ">
                  <span class="col-12">Unico's seamless home loan balance transfer give you lower rates, reduced EMIs & personalised assistance.</span>
                  <!-- <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg><span class="ps-2 fw-semibold">Share</span>
                  </span> -->
                </p>
              </div>
            </div>
            <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog_1.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Unico Home Loans: Unveiling the ABCs of Homeownership</p>
                <p class="d-flex justify-content-between align-items-center pb-3 ">
                  <span class="col-12">Owning a home is a cherished dream for many Indians. It's not just about having a roof over your head; it's about security, stability, and a sense of accomplishment.</span>
                  <!-- <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg><span class="ps-2 fw-semibold">Share</span>
                  </span> -->
                </p>
              </div>
            </div>
            <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog_3.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Build Your Dream: Unico's Loan Against Property - Your Key to Possibilities</p>
                <p class="d-flex justify-content-between align-items-center pb-3 ">
                  <span class="col-12">Your property can be a step towards your new home with Unico’s Loan Against Property. Get personalised loans based on your needs.</span>
                  <!-- <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg><span class="ps-2 fw-semibold">Share</span>
                  </span> -->
                </p>
              </div>
            </div>
            <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog_4.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Invest in your Future with Unico’s Commercial Property Loan</p>
                <p class="d-flex justify-content-between align-items-center pb-3 ">
                  <span class="col-12">Empower your business growth and success with Unico's commercial property loans and step into a brighter future.</span>
                  <!-- <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg>
                    <span class="ps-2 fw-semibold">Share</span>
                  </span> -->
                </p>
              </div>
            </div>
            <!-- <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog_2.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Unico Housing Finance Partners with Oracle to serve the Underbanked</p>
                <p class="d-flex justify-content-between align-items-center pb-3 px-2">
                  <span class="col-12">Unico Housing Finance's collaboration with Oracle Cloud Infrastructure is revolutionising affordable housing solutions in India. </span>
                   <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg><span class="ps-2 fw-semibold">Share</span>
                  </span>
                </p>
              </div>
            </div>  -->
            <div class="">
              <a href="https://www.pcquest.com/news/unicos-digital-leap-with-oracle-empowering-dreams-of-homeownership-in-india-3724223" target="_blank">
                <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog_5+1.png" alt="">
                <div class="bg-white px-3  rounded-bottom">
                  <p class="fs-5 fw-semibold pt-3" style="color: #1F1F1F">Unico & Oracle: Shaping Dreams for India's Homebuyers</p>
                  <p class="d-flex justify-content-between align-items-center pb-3 ">
                    <span class="col-12" style="color: #1F1F1F"> Unico Housing Finance's collaboration with Oracle Cloud Infrastructure is revolutionising affordable housing solutions in India.</span>
                    <!-- <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                      </svg>
                      <span class="ps-2 fw-semibold">Share</span>
                    </span> -->
                  </p>
                </div>
              </a>
            </div>
            <!-- <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/blogs_1.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Lorem ipsum dolor sit amet consectetur. Risus amet viverra justo it amet consectetur. Risus amet viverra</p>
                <p class="d-flex justify-content-between align-items-center pb-3 px-2">
                  <span class="col-8">blandit amet et sem quis. In mattis donec vitae facilisis et tempus elit penatibus ligula</span>
                  <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg><span class="ps-2 fw-semibold">Share</span>
                  </span>
                </p>
              </div>
            </div>
            <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/blogs_1.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Lorem ipsum dolor sit amet consectetur. Risus amet viverra justo it amet consectetur. Risus amet viverra</p>
                <p class="d-flex justify-content-between align-items-center pb-3 px-2">
                  <span class="col-8">blandit amet et sem quis. In mattis donec vitae facilisis et tempus elit penatibus ligula</span>
                  <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg><span class="ps-2 fw-semibold">Share</span>
                  </span>
                </p>
              </div>
            </div> -->
            <!-- <div class="">
              <img class="img-fluid" style="width: 100%;" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/blogs_1.png" alt="">
              <div class="bg-white px-3  rounded-bottom">
                <p class="fs-5 fw-semibold pt-3">Lorem ipsum dolor sit amet consectetur. Risus amet viverra justo it amet consectetur. Risus amet viverra</p>
                <p class="d-flex justify-content-between align-items-center pb-3 px-2">
                  <span class="col-8">blandit amet et sem quis. In mattis donec vitae facilisis et tempus elit penatibus ligula</span>
                  <span><svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.33333 11.1111C7.87037 11.1111 7.47685 10.9491 7.15278 10.625C6.8287 10.3009 6.66667 9.90741 6.66667 9.44444C6.66667 9.37963 6.6713 9.31241 6.68056 9.24278C6.68982 9.17315 6.7037 9.11074 6.72222 9.05555L2.80556 6.77778C2.64815 6.91667 2.47222 7.02556 2.27778 7.10444C2.08333 7.18333 1.87963 7.22259 1.66667 7.22222C1.2037 7.22222 0.810185 7.06018 0.486111 6.73611C0.162037 6.41204 0 6.01852 0 5.55556C0 5.09259 0.162037 4.69907 0.486111 4.375C0.810185 4.05093 1.2037 3.88889 1.66667 3.88889C1.87963 3.88889 2.08333 3.92833 2.27778 4.00722C2.47222 4.08611 2.64815 4.19481 2.80556 4.33333L6.72222 2.05556C6.7037 2 6.68982 1.93759 6.68056 1.86833C6.6713 1.79907 6.66667 1.73185 6.66667 1.66667C6.66667 1.2037 6.8287 0.810185 7.15278 0.486111C7.47685 0.162037 7.87037 0 8.33333 0C8.7963 0 9.18982 0.162037 9.51389 0.486111C9.83796 0.810185 10 1.2037 10 1.66667C10 2.12963 9.83796 2.52315 9.51389 2.84722C9.18982 3.1713 8.7963 3.33333 8.33333 3.33333C8.12037 3.33333 7.91667 3.29407 7.72222 3.21556C7.52778 3.13704 7.35185 3.02815 7.19444 2.88889L3.27778 5.16667C3.2963 5.22222 3.31019 5.28481 3.31944 5.35444C3.3287 5.42407 3.33333 5.49111 3.33333 5.55556C3.33333 5.62037 3.3287 5.68759 3.31944 5.75722C3.31019 5.82685 3.2963 5.88926 3.27778 5.94444L7.19444 8.22222C7.35185 8.08333 7.52778 7.97463 7.72222 7.89611C7.91667 7.81759 8.12037 7.77815 8.33333 7.77778C8.7963 7.77778 9.18982 7.93981 9.51389 8.26389C9.83796 8.58796 10 8.98148 10 9.44444C10 9.90741 9.83796 10.3009 9.51389 10.625C9.18982 10.9491 8.7963 11.1111 8.33333 11.1111Z" fill="black" />
                    </svg><span class="ps-2 fw-semibold">Share</span>
                  </span>
                </p>
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-12 col-md-5 mt-5">
          <div class="d-flex justify-content-start">
            <div class="col-1 d-none d-md-block  " style="border-left: 1px solid black"></div>
            <div class="  slider-nav ">
              <div class="d-flex justify-content-start align-items-center gap-2  py-3 botm_border ">
                <p class="m-0 p-0 col-1"> <img class="img-fluidd" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog+Box+_2.png" alt="" srcset=""></p>
                <p class="m-0 p-0 my-auto ms-2">
                  <li class="fw-semibold ms-5 sideblogcontent ps-4 ps-md-1">Unico’s Home Loan Balance Transfer: Empower Your Finances</li>
                </p>
                <hr>
              </div>
              <div class="d-flex justify-content-start align-items-center gap-2  py-3 botm_border">
                <p class="m-0 p-0 col-1"> <img class="img-fluidd" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog+Box+_1.png" alt="" srcset=""></p>
                <p class="  my-auto ms-2">
                  <li class="fw-semibold ms-5 sideblogcontent ps-4 ps-md-1">Unico Home Loans: Unveiling the ABCs of Homeownership</li>
                </p>
                <hr>
              </div>

              <div class="d-flex justify-content-start align-items-center gap-2   py-3 botm_border">
                <p class="m-0 p-0 col-1"> <img class="img-fluidd" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog+Box+_3.png" alt="" srcset=""></p>
                <p class="m-0 p-0 my-auto ms-2">
                  <li class="fw-semibold ms-5 sideblogcontent ps-4 ps-md-1">Build Your Dream: Unico's Loan Against Property - Your Key to Possibilities</li>
                </p>
                <hr>
              </div>
              <div class="d-flex justify-content-start align-items-center gap-2  py-3 botm_border ">
                <p class="m-0 p-0 col-1"> <img class="img-fluidd" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog+Box+_4.png" alt="" srcset=""></p>
                <p class="m-0 p-0 my-auto ms-2">
                  <li class="fw-semibold ms-5 sideblogcontent ps-4 ps-md-1">Invest in your Future with Unico’s Commercial Property Loan</li>
                </p>
                <hr>
              </div>
              <div class="d-flex justify-content-start align-items-center gap-2   py-3 botm_border">
                <p class="m-0 p-0 col-1"> <img class="img-fluidd" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Blog+Box+_5+1.png" alt="" srcset=""></p>
                <p class="m-0 p-0 my-auto ms-2">
                  <li class="fw-semibold ms-5 sideblogcontent ps-4 ps-md-1">Unico & Oracle: Shaping Dreams for India's Homebuyers</li>
                </p>
                <hr>
              </div>

              <!-- <div class="d-flex justify-content-start align-items-center gap-2  py-2 botm_border ">
                <p class="m-0 p-0 col-1"> <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/car_side_1.png" alt="" srcset=""></p>
                <p class="m-0 p-0 my-auto ms-2"> <span class="fw-semibold">Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</span> <br><span>blandit amet et sem quis.</span></p>
                <hr>
              </div>
              <div class="d-flex justify-content-start align-items-center gap-2   py-2 botm_border">
                <p class="m-0 p-0 col-1"> <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/car_side_1.png" alt="" srcset=""></p>
                <p class="m-0 p-0 my-auto ms-2"> <span class="fw-semibold">Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</span> <br><span>blandit amet et sem quis.</span></p>
                <hr>
              </div> -->
              <!-- <div class="d-flex justify-content-start align-items-center gap-2   py-2 botm_border">
                <p class="m-0 p-0 col-1"> <img class="img-fluid" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/car_side_1.png" alt="" srcset=""></p>
                <p class="m-0 p-0 my-auto ms-2"> <span class="fw-semibold"> last Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.</span> <br><span>blandit amet et sem quis.</span></p>
                <hr>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./component/calculator.js"></script>
  <?php include './layout/footer.php'; ?>