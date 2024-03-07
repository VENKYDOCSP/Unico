 <div class="container mt-3 mb-4 mb-md-3 onMobileResponsive">
     <div class="tab-content row TabsInMortgage" id="custom-pills-tabContent">
         <div class="tab-pane  fade show active p-0" id="custom-pills-home" role="tabpanel" aria-labelledby="custom-pills-home-tab">
             <div class="backGroundForCalculatorr">
                 <div class="MaxWidthForCalculator mx-auto my-auto ">
                     <div class="row justify-content-center  mt-md-2  ">
                         <div class="col-12 col-lg-5 row_clr ">
                             <div class=" col-12 p-4      mx-0 ">
                                 <p class=" fs-5"><span class=""><img class="img-fluid pe-2" src="https://unicowebsite.s3.ap-south-1.amazonaws.com/calculatoricon.svg" alt=""></span>Loan EMI Calculator</p>
                                 <div class="row mt-4 d-flex justify-content-end align-items-center pb-2 ">
                                     <div class="col-6 ">
                                         <!-- <label for="customRange1" class="form-label pt-2 textColorInCalsi">Loan Amount</label>
                                         <div class=" ">
                                             <div class=" border-0 d-flex">
                                                 <h2>₹ <span id="InputBoxForTM">100000</span></h2>
                                             </div>
                                         </div> -->
                                     </div>
                                     <div class="col-6">
                                         <div class="input-group">
                                             <span class="input-group-text BorderForAmount border-end-0 fs-4">₹</span>
                                             <input type="tel" class="   form-control  fs-4 BorderForAmount text-center border-start-0 resettable-input" id="fvalue" value="100000" min="100000" max="20000000">
                                         </div>
                                         <p id="RangeExceeds" class="text-danger " style="display: none; font-weight: 600;">! Not In Range</p>
                                     </div>
                                 </div>
                                 <div class="row  ">
                                     <div class="col">
                                         <input type="range" min="100000" max="10000000" step="1000" value="10000" class="resettable-input" id="AmtSliderForTM" list="valu">
                                     </div>
                                     <div class="d-flex justify-content-between ValuesUnderslider mt-2">
                                         <div class="lon_amd fw-semibold ">
                                             Loan Amount
                                         </div>
                                         <div class="">
                                             <!-- <h2 class=" ">₹ <span id="InputBoxForTM " class="fs-3">100000</span></h2> -->
                                             <h2 class="InputBoxForTM fw-semibold fs-4">₹ <span id="InputBoxForTM">100000</span></h2>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row  pt-3 pb-2 d-flex justify-content-between align-items-center mt-2">
                                     <div class="col-6">
                                         <!-- <div class="">
                                             <label class="form-label textColorInCalsi  pt-2 ">Interest Rate</label>
                                         </div>
                                         <div class=" text-center ">
                                             <div class="d-flex">
                                                 <h2> <span id="TimePeriodBoxForTM">7</span> % </h2>
                                             </div>
                                         </div> -->
                                     </div>
                                     <div class="col-md-4 col-4">
                                         <div class="input-group">
                                             <span class="input-group-text BorderForAmount border-end-0 fs-4 fw-bold">%</span>
                                             <input class="text-center resettable-input form-control BorderForAmount fs-5" value="2" id="interest1" min="2" max="24" type="tel">
                                         </div>
                                         <p id="InterestRangeExceeds" class="text-danger text-center " style="display: none; font-weight: 600;">! Not In Range</p>
                                     </div>
                                 </div>
                                 <div class="row accordion ">
                                     <div class="col">
                                         <div>
                                             <input type="range" min="2" max="20" step="0.5" value="2" id="timePeriodSlider" class="resettable-input" list="year">
                                             <div class="d-flex justify-content-between ValuesUnderslider mt-2">
                                                 <div class="lon_amd fw-semibold ">
                                                     Interest Rate
                                                 </div>
                                                 <div class="">
                                                     <h2 class="fs-4 InputBoxForTM fw-bold"> <span id="TimePeriodBoxForTM">2</span> % </h2>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- <div class="row mt-3">
                                     <div class="col tex-start">
                                         <label class="form-label textColorInCalsi ">Tenure in Years</label>
                                         <div class="col-md-4 col-4">
                                             <div class="input-group">
                                                 <h2 id=""><span id="timeYear">5</span> Year</h2>
                                             </div>
                                         </div>
                                     </div>
                                 </div> -->
                                 <div class="row mt-5">
                                     <div class="col">
                                         <input type="range" min="2" max="20" step="1" value="2" class="resettable-input" id="interestBoxForTM" list="valu">
                                     </div>
                                     <div class="d-flex justify-content-between ValuesUnderslider mt-2">
                                         <div class="lon_amd fw-semibold ">
                                             Tenure in Years
                                         </div>
                                         <div>
                                             <h2 class="InputBoxForTM fw-semibold fs-4" id=""><span id="timeYear">2</span> Year</h2>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="text-center mt-2"> <a class="" href="./product.php"><button class="calcbtnApply mb-1 mt-3 py-3 px-5   fs-5 fw-bold"> Apply Now</button></a>
                                 </div>
                             </div>
                         </div>
                         <!-- right side -->
                         <div class="col-12 col-lg-5 pb-3  bgForpieChart ">
                             <!-- <div class="bgForpieChart"> -->
                             <div class="row bg_top-cldr text-center  mb-5  pt-3 ">
                                 <div class="pt-3   mt-3 ValuesOfPiechart1 ">
                                     <p class="p-0 m-0  text_secondary fw-semibold  fs-3 ">Monthly Emi </p>
                                     <h1 class="ps-2  text_secondary  fw-semibold  fs-1" style="color: var(--primary);">₹<span id="EMI"></span> <span class="fs-3">/Month</span></h1>
                                 </div>
                             </div>
                             <div class="d-flex flex-md-row flex-column justify-content-center align-items-center   accordion ">
                                 <div id="myPieChartWrapper">
                                     <canvas id="myPieChart3" class=""></canvas>
                                 </div>
                             </div>
                             <div class="d-flex  mt-4  ">
                                 <div class="HideOnRD d-flex justify-content-center align-items-center     ">
                                     <p class=" rounded-circle m-0 valueRoundered"></p>
                                     <div class="hideOnRecurring ValuesOfPiechart p-2">
                                         <p class="p-0 m-0  fw-bold">Principal Amount</p>
                                         <h3 class="fs-6 fw-semibold text-start">₹ <span class="value">10000</span>
                                             <h3>
                                     </div>
                                 </div>
                                 <div class="HideOnRD d-flex justify-content-center align-items-center  pe-5   ps-2">
                                     <p class=" rounded-circle m-0 valueRoundered1"></p>
                                     <div class="hideOnRecurring ValuesOfPiechart p-2">
                                         <p class="p-0 m-0  fw-bold">Total Interest</p>
                                         <h3 class="fs-6 fw-semibold text-start">₹ <span id="AmountEarned">10000</span>
                                             <h3>
                                     </div>
                                 </div>
                             </div>
                             <!-- </div> -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>