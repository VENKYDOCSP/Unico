<nav class="navbar navbar-expand-md navbar-light bg-light d-block d-lg-none  p-0">
    <div style="background-color: #2E52A1" class="d-md-flex ">
        <div class="container-fluid pt-2 pb-2 d-flex align-items-center justify-content-between col-md-5">
            <a class="navbar-brand links text-start" href="./">
                <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/UnicoMobileLogo.svg" class="img-fluid " alt=""></a>
            <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="background-image: url(https://unicowebsite.s3.ap-south-1.amazonaws.com/threeLines.svg);"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ps-md-0 ps-4">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About Us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="ps-4 mt-2"><a class="<?php if (isset($active) && $active === 1) echo "active" ?> fw-bold" href="./companyProfile.php" style="color:black !important">Company Profile</a></li>
                        <li class="ps-4 mt-2"><a class=" <?php if (isset($active) && $active === 1) echo "active" ?> fw-bold" href="./directors.php" style="color:black !important">Board of Directors</a></li>
                        <li class="ps-4 mt-2"><a class="<?php if (isset($active) && $active === 1) echo "active" ?> fw-bold" href="./management.php" style="color:black !important">Management</a></li>
                    </ul>
                </li>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Policies
                </a>
                <ul class="dropdown-menu ps-3" aria-labelledby="navbarDropdown">
                    <li class="pt-1 pb-2"><a class=" fs-6 fw-bold  text-dark" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/FAIR+PRACTICES+CODE.pdf" target="_blank">
                            Fair Practices Code</a></li>
                    <li class="pt-1 pb-2"><a class=" text-dark  fw-bold fs-6" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+002+-+Policy+on+KYC.pdf" target="_blank">
                            KYC Policy</a></li>
                    <li class="pt-1 pb-2"><a class=" text-dark fw-bold fs-6" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-SEC-002+Fit+and+Proper+criteria+of+Directors.pdf" target="_blank">
                            Fit and Proper Criteria of Directors</a></li>
                    <li class="pt-1 pb-2"><a class=" text-dark  fw-bold fs-6" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/Unico-+Fin-+004+-+Related+Party.pdf" target="_blank">
                            Policy on Related Party Transactions</a></li>
                    <li class="pt-1 pb-2"><a class=" text-dark fw-bold  fs-6" href="https://repcobank.s3.ap-south-1.amazonaws.com/UNICO-SECRETARIAL-004-CORPORATE+GOVERNANCE+POLICY.pdf" target="_blank">
                            Corporate Governance policy</a></li>
                    <li class="pt-1 pb-2"><a class=" text-dark fw-bold  fs-6" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+FIn+-+002+-+Interest+Rate+Policy.pdf" target="_blank">
                            Interest Rate Policy </a></li>
                    <li class="pt-1 pb-2"><a class=" text-dark  fw-bold fs-6" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+001+Customer+Grievance+Rederessal+policy.pdf" target="_blank">
                            Customer Grievance Redressal Policy</a></li>
                    <li class="pt-1 pb-2"><a class=" text-dark  fw-bold fs-6" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-HR-001-Posh+Policy.pdf" target="_blank">
                            Prevention Of Sexual Harassment (POSH) Policy</a></li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="careers.php">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>