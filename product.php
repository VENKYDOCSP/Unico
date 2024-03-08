<?php
$style = '
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/mobilNavbar.css">
<link rel="stylesheet" href="css/product.css">
';
$title = "Products";
$active = 4;
include './layout/header.php';
// include './layout/mobileHeader.php';
include './layout/mobileNav.php'; ?>
<div class="position-relative container-fluid p-0 m-0 " id="banner" id="top">
  <div class="  p-0 m-0">
    <!-- <div class=" m-0 p-0"> -->
    <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/pro_baner.png" alt="banner" class="img-fluid w-100">
    <!-- </div> -->
  </div>
  <!-- <div class=" d-md-none d-block">
    <div class="m-0 p-0 ">
      <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/HomeBannerForUnicoMobile.jpg" alt="banner" class="img-fluid w-100">
    </div>
  </div> -->
  <div class=" mx-auto mt-md-0 d-flex flex-column justify-content-center align-items-center pb-3   formDetails" data-aos="zoom-in" data-aos-duration="600">
    <div class=" mt-2 mb-0">
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
            }, 5000);
          });
        </script>
      <?php } ?>
    </div>
    <h2 class="mb-md-3 text-center text-white  getstart py-2 py-md-0 fs-3"> Apply Now - Achieve Dreams
    </h2>
    <form class="unicoForm px-3 py-3 px-md-4 py-md-5 " action="formdb.php" method="post" autocomplete="off">
      <div class="mb-4 borderForInput m">
        <input class="form-control border-0" type="text" placeholder="Full Name" name="name" aria-label="default input example" required oninput="validateText(event)">
      </div>
      <div class="mb-4 borderForInput">
        <input type="tel" class="form-control border-0" id="floatingInput" name="number" placeholder="Phone Number" required oninput="validateNumber(event)">
      </div>
      <div class="mb-4 borderForInput">
        <input type="email" class="form-control border-0" id="floatingInput" name="email" placeholder="Email ID" required>
      </div>
      <div class="mb-4 borderForInput">
        <input type="tel" class="form-control border-0" id="floatingInput" name="pincode" placeholder="Pincode" required oninput="validatePincode(event)">
      </div>
      <div class="mb-4 borderForInput">
        <select class="form-select  floatingInput border-0" aria-label="Default select example" name="product" required>
          <option selected class="">Select Your Loan</option>
          <option value="New Flat/ Independent House Purchase Loan">New Flat/ Independent House - Purchase Loan</option>
          <option value="New Commercial Property- Purchase Loan">New Commercial Property - Purchase Loan</option>
          <option value="Self Construction Loan">Self Construction Loan</option>
          <option value="Home Extension Loan">Home Extension Loan</option>
          <option value="Home Renovation Loan">Home Renovation Loan</option>
          <option value="Flat/Independent House- Resale Purchase Loan">Flat/ Independent House - Resale Purchase Loan </option>
          <option value="Resale Commercial Property- Purchase Loan">Resale Commercial Property - Purchase Loan</option>
          <option value="Plot Plus Construction Loan">Plot Plus Construction Loan</option>
          <option value="Home Loan Topup Loan">Home Loan - Topup Loan</option>
          <option value="Home Loan- Balance Transfer">Home Loan - Balance Transfer</option>
          <option value="Loan Against Property-Residential">Loan Against Property - Residential</option>
          <option value="Loan Against Property-Topup">Loan Against Property - Topup</option>
          <option value="Loan Against Property-Balance Transfer">Loan Against Property - Balance Transfer</option>
          <option value="Loan Against Property-Commerical">Loan Against Property - Commerical</option>
        </select>
      </div>
      <div class="pt-2 ">
        <button class="btn text-light w-100 fs-5 " type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
<div class="container-fluid py-md-5" style="background-color: #E7E7E7;">
  <div class="row pt-md-5 pt-3">
    <div class="col-12 col-md-5 servicetitle p-md-5 p-2 ">
      <h1 class="ps-3 ps-md-5" data-aos="fade-right" data-aos-duration="600">OUR SERVICES</h1>
      <p class=" ps-3 ps-md-5" data-aos="fade-right" data-aos-duration="800">Custom-made services to meet your needs
      </p>
    </div>
    <div class="col-12 col-md-7 servicecol  py-md-0 ">
      <div class="row services mx-4  ">
        <div class="servbox m-md-4 ms-md-auto ms-1" data-aos="zoom-in" data-aos-duration="600">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service1.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">Customized services delivered at your doorsteps</h2>
        </div>
        <div class="servbox m-md-4  ms-md-auto ms-1 " data-aos="zoom-in" data-aos-duration="800">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service3.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">Simple documentation </h2>
        </div>
        <div class="servbox m-md-4 ms-md-auto ms-1" data-aos="zoom-in" data-aos-duration="1000">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service4.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">Instant loan approval</h2>
        </div>
        <div class="servbox m-md-4 ms-md-auto ms-1" data-aos="zoom-in" data-aos-duration="1200">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service5.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">No ITR</h2>
        </div>
        <div class="servbox m-md-4 ms-md-auto ms-1" data-aos="zoom-in" data-aos-duration="1400">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service6.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">Fast loan disbursement</h2>
        </div>
        <div class="servbox m-md-4 ms-md-auto ms-1" data-aos="zoom-in" data-aos-duration="1600">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service7.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">Support in getting government Documents / legal records</h2>
        </div>
        <div class="servbox m-md-4 ms-md-auto ms-1" data-aos="zoom-in" data-aos-duration="1800">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service8.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">Loans with long repayment period</h2>
        </div>
        <div class="servbox m-md-4 ms-md-auto ms-1">
          <p class="d-flex justify-content-center ">
            <img class="img-fluid pt-md-5 pt-4" width="40%" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/service9.svg" alt="">
          </p>
          <h2 class="pt-md-2 pb-md-5">Affordable interest rates</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="pt-4 " style="background-color: #E7E7E7;">
  <div class="container    justify-content-center pt-5">
    <div class="row    justify-content-center align-items-center ">
      <div class="col-12 col-md-6      mt-3  "><img class="img-fluid" data-aos="fade-right" data-aos-duration="1000" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/abtpro.png" alt=""></div>
      <div class="col-12 col-md-4    ps-2 my-auto ">
        <p class="topvec mt-3 mt-md-0">
          <img class="img-fluid text-start mt-3 mt-md-0" data-aos="fade-down" data-aos-duration="1000" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/Vector+30+(1).svg" alt="">
        </p>
        <h2 class="sell_product ps-3 mb-md-0 ms-2 " data-aos="fade-left" data-aos-duration="1000">Improve your living space with Home Renovation Loan!</h2>
        <p class=" fw-semibold sellprodes pe-md-5 ps-4 py-md-2 mt-2" data-aos="fade-left" data-aos-duration="1000">Enhance your living experience while adding equity to your property, creating a lasting return on your investment. </p>
        <div class=" ps-md-2 pb-3 pb-md-0 ms-4 ms-md-0">
          <a href="#banner"> <button class=" ms-md-3   fs-5 sellbtn" data-aos="fade-left" data-aos-duration="1000">Apply for loan</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="frquently_const  py-5  mt-0 mt-md-4" data-aos="fade-up" data-aos-duration="600">
  <div class="container  p-3 bg-white rounded-5  shadow   ">
    <div class="prod_text_bg mx-2 ">
      <div class="row m-4 justify-content-center align-items-center pt-4 pb-3">
        <div class="col-12 col-md-6">
          <p class="fs-2 frequently_desc mb-md-auto mb-2">Frequently <span class="">Asked Questions</span></p>
          <p>Answers to your home financing queries</p>
        </div>
        <div class="col-12 col-md-6 p-md-auto p-0">
          <!-- <div class="col-10 align-items-center px-3"> -->
          <div class="col-12 col-md-7 mx-auto">
            <div class="    d-flex justify-content-around   bg_cont_tab rounded-pill align-items-center  border border-dark  ">
              <p class=" px-4 px-md-5  mt-1 ms-2   fs-5 rounded-pill bg_selectt  bg-hover DivHighlight default my-auto  " onclick="opendiv('General')">General</p>
              <!-- <p class="bg_select_nilt  bg-hover DivHighlight px-5  mt-1 ms-2   fs-5 rounded-pill  my-1 " onclick="opendiv('Finance')">Finance </p> -->
              <p class="bg_select_nilt  bg-hover DivHighlight px-4 px-md-5 mt-1 ms-2   fs-5 rounded-pill me-2  my-1" onclick="opendiv('Loans')">Loans</p>
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
        <div class="accordion d-flex flex-md-row flex-column" id="accordionExample">
        <div class="col-md-6 pb-4">
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
          <!-- </div> -->
        </div>
        <div class="col-md-6 pb-4">
          <!-- <div class="accordion" id="accordionExample1"> -->
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What are tenure options?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>The tenure of your home loan ranges for up to 20 years. The term, however, does not extend beyond the retirement age or 60 years, whichever is earlier.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item acc_itm my-3">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Can I get approval for my home loan without finalising on my property?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Yes, based on your income eligibility, we can offer you PNI (Property Not Identified) Sanction Letter for your home loan. You can identify the property you need to buy based on this document. Kindly speak to your sales manager to know more.
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
    </div>
    <!-- <div class="Variable" id="Finance" style="display:none">
      <div class="row justify-content-between px-4 ">
        <div class="col-6 pb-4">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Unico Home Finance in Loreum ? finance
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Lorem ipsum dolor sit amet consectetur. Risus amet viverra justo blandit amet et sem quis. In mattis </p>
                </div>
              </div>
            </div>
            <div class="accordion-item acc_itm my-3">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Unico Home Finance in Loreum ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Soman Vein Baid ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 pb-4">
          <div class="accordion" id="accordionExample1">
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingO">
                <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseO" aria-expanded="true" aria-controls="collapseO">
                  Unico Home Finance in Loreum ? finance
                </button>
              </h2>
              <div id="collapseO" class="accordion-collapse collapse show" aria-labelledby="headingO" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                  <p>Lorem ipsum dolor sit amet consectetur. Risus amet viverra justo blandit amet et sem quis. In mattis </p>
                </div>
              </div>
            </div>
            <div class="accordion-item acc_itm my-3">
              <h2 class="accordion-header" id="headingT">
                <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseT" aria-expanded="false" aria-controls="collapseT">
                  Unico Home Finance in Loreum ?
                </button>
              </h2>
              <div id="collapseT" class="accordion-collapse collapse" aria-labelledby="headingT" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingTh">
                <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTh" aria-expanded="false" aria-controls="collapseTh">
                  Soman Vein Baid ?
                </button>
              </h2>
              <div id="collapseTh" class="accordion-collapse collapse" aria-labelledby="headingTh" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="Variable" id="Loans" style="display:none">
      <div div class="row justify-content-between px-4 ">
        <div class="accordion d-flex flex-md-row flex-column" id="accordionExample1">
        <div class="col-md-6 col-12 pb-4">
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  When can I make a home loan application?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
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
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
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
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                  The security for the loan usually includes a legal interest in the property financed by us and/or any extra collateral or temporary security deemed necessary by us. </div>
              </div>
            </div>
          <!-- </div> -->
        </div>
        <div class="col-md-6 col-12 pb-4">
          <!-- <div class="accordion" id="accordionExample1"> -->
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button acc_btn fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  When do I start repaying the principal amount?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse " aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                <div class="accordion-body">
                  <p>The repayment of the principal starts from the month subsequent to the month in which you receive the complete disbursement of your loan. During the interim disbursement period, you are required to pay interest on the disbursed portion of the loan.
                </div>
                </p>
              </div>
            </div>
            <div class="accordion-item acc_itm my-3">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  What does encumbrance refer to?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample1">
                <div class="accordion-body fw-normal">
                  Encumbrance refers to claims, charges, or liabilities on a property, typically arising from factors like unpaid loans, outstanding bills, or other financial obligations. </div>
              </div>
            </div>
            <div class="accordion-item acc_itm">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed acc_btn fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  What is the maximum home loan that I can obtain? </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample1">
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
<div class="frq_ask_down mb-5"></div>
<?php include './layout/footer.php'; ?>