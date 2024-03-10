<style>
    .nav-link {
        text-decoration: none;
        color: #ffffff !important;
    }

    /* Style the sidenav */
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 9;
        top: 0;
        right: 0;
        /* background-color: #fff; */
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    /* The navigation links */
    .sidenav a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        color: #000;
        display: block;
        transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    /* Style the button that is used to open the sidenav */
    .sidenav span {
        font-size: 30px;
        cursor: pointer;
        position: fixed;
        top: 20px;
        left: 20px;
    }

    /* Style the navbar toggler icon */
    .navbar-toggler-icon {
        background-image: url(https://unicowebsite.s3.ap-south-1.amazonaws.com/threeLines.svg);
    }

    .mainMenu {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        color: #ffffff;
    }

    #menu-sub {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 99;
        top: 0;
        right: 0;
        background-color: #2E52A1;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    #menu-SubPolicies {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 99;
        top: 0;
        right: 0;
        background-color: #2E52A1;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .arrowright {
        font-size: 32px;
        color: #ffffff
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light d-none d-lg-block p-0">
        <!-- Navbar content here -->
    </nav>

    <div class="d-lg-none " style="background-color: #2E52A1">
        <div id="mySidenav" class="sidenav" style="background-color: #2E52A1">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="nav-link" href="./">Home</a>
            <hr class="m-0" style="border:0.5px solid #ffffff;" />
            <ul class="mb-0 ps-0">
                <li class="mainMenu text-decoration-none pt-0 pb-0" onclick="toggleMenuSub()">
                    <div class="d-flex justify-content-start gap-4 align-items-center">
                        <p class="mb-0 pt-1">About Us</p>
                        <div class="arrowright d-flex align-items-center  ">&#8250;</div>

                    </div>
                    <div id="menu-sub">
                        <div class="closebtn" style="cursor: pointer;" onclick="toggleMenuSub()">&times;</div>
                        <a class="nav-link" href="./companyprofile.php">Company
                            Profile</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="./directors.php">Board of
                            Directors</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="./management.php">Management</a>
                    </div>
                </li>
            </ul>
            <hr class="m-0" style="border:0.5px solid #ffffff;" />
            <ul class="mb-0 ps-0">
                <li class="mainMenu text-decoration-none pt-0 pb-0 " onclick="toggleMenuSubPolicies()">
                    <div class="d-flex justify-content-start gap-4  align-items-center">
                        <p class="mb-0 pt-1">Policies</p>
                        <div class="arrowright d-flex align-items-center  ">&#8250;</div>

                    </div>
                    <div id="menu-SubPolicies">
                        <div class="closebtn" style="cursor: pointer;" onclick="toggleMenuSubPolicies()">&times;</div>
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/FAIR+PRACTICES+CODE.pdf" target="_blank">Fair Practices Code</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+002+-+Policy+on+KYC.pdf" target="_blank">KYC Policy</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-SEC-002+Fit+and+Proper+criteria+of+Directors.pdf" target="_blank">Fit and Proper Criteria of Directors</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/Unico-+Fin-+004+-+Related+Party.pdf" target="_blank">Policy on Related Party Transactions</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-SECRETARIAL-004-CORPORATE+GOVERNANCE+POLICY.pdf" target="_blank">Corporate Governance policy</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+FIn+-+002+-+Interest+Rate+Policy.pdf" target="_blank">Interest Rate Policy</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+001+Customer+Grievance+Rederessal+policy.pdf" target="_blank">Customer Grievance Redressal Policy</a>
                        <hr class="m-0" style="border:0.5px solid #ffffff;" />
                        <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-HR-001-Posh+Policy.pdf" target="_blank">Prevention Of Sexual Harassment (POSH) Policy</a>
                    </div>
                </li>
            </ul>
            <hr class="m-0" style="border:0.5px solid #ffffff;" />


            <!-- <li class="nav-link text-decoration-none" onclick="toggleMenuSub()">Policies
                <div class="menu-sub">
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/FAIR+PRACTICES+CODE.pdf" target="_blank">Fair Practices Code</a>
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+002+-+Policy+on+KYC.pdf" target="_blank">KYC Policy</a>
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-SEC-002+Fit+and+Proper+criteria+of+Directors.pdf" target="_blank">Fit and Proper Criteria of Directors</a>
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/Unico-+Fin-+004+-+Related+Party.pdf" target="_blank">Policy on Related Party Transactions</a>
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-SECRETARIAL-004-CORPORATE+GOVERNANCE+POLICY.pdf" target="_blank">Corporate Governance policy</a>
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+FIn+-+002+-+Interest+Rate+Policy.pdf" target="_blank">Interest Rate Policy</a>
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO+-+OPS+-+001+Customer+Grievance+Rederessal+policy.pdf" target="_blank">Customer Grievance Redressal Policy</a>
                    <a class="nav-link" href="https://unicowebsite.s3.ap-south-1.amazonaws.com/UNICO-HR-001-Posh+Policy.pdf" target="_blank">Prevention Of Sexual Harassment (POSH) Policy</a>
                </div>
            </li> -->
            <!-- </ul> -->

            <a class="nav-link" href="careers.php">Careers</a>
            <hr class="m-0" style="border:0.5px solid #ffffff;" />
            <a class="nav-link" href="contact.php">Contact Us</a>
        </div>
        <div class="d-flex justify-content-between align-items-center p-2">
            <a class="navbar-brand links text-start" href="./">
                <img src="https://unicowebsite.s3.ap-south-1.amazonaws.com/UnicoMobileLogo.svg" class="img-fluid " alt></a>
            <button class="navbar-toggler border-0 " type="button" onclick="openNav()">
                <span class="navbar-toggler-icon" style="background-image: url(https://unicowebsite.s3.ap-south-1.amazonaws.com/threeLines.svg);"></span>
            </button>
        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function toggleMenuSub() {
            var menuSub = document.getElementById("menu-sub");
            var computedWidth = window.getComputedStyle(menuSub).width;

            if (computedWidth === "250px") {
                console.log(computedWidth, "closeIcon");
                menuSub.style.width = "0";
            } else {
                menuSub.style.width = "250px";
            }
        }

        function toggleMenuSubPolicies() {
            var menuSub = document.getElementById("menu-SubPolicies");
            var computedWidth = window.getComputedStyle(menuSub).width;

            if (computedWidth === "250px") {
                console.log(computedWidth, "closeIcon");
                menuSub.style.width = "0";
            } else {
                menuSub.style.width = "250px";
            }
        }
    </script>