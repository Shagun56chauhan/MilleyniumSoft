<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar in CodeIgniter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bungee&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');



        :root {
            --color-black: #000;
            --color-neutral-200: #e0e0e0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            /* padding-top: 70px; */

            /* Prevent content from hiding under navbar */
        }

        /* .container{
            width: 100%;
              padding: 20px;
        } */

        /* ✅ Navbar Styling */
        .navbar {
            display: flex;
            box-sizing: border-box; /* Fixes overflow issue */
            align-items: center;
            justify-content: space-between;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: var(--color-black);
            color: var(--color-neutral-200);
            padding: 15px 30px;
            z-index: 1000;
            transition: transform 0.4s ease-in-out;
            backdrop-filter: blur(10px);
          
        }

        /* ✅ Navbar Moves Up & Comes Back Down Smoothly */
        .navbar.scroll-up {
            transform: translateY(0);
        }

        .navbar.scroll-down {
            transform: translateY(-50px);
        }

        .navbar-left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;

        }

        .navbar-left span {
            font-size: 1.8rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-weight: bold;
            font-family: 'Bungee', sans-serif;
            color: #00ffff;

        }

        .navbar-left p {
            --color-neutral-200: #e0e0e0;
            font-size: 0.6rem;

        }

        .navbar-center {
            list-style: none;
            display: flex;
            gap: 30px;
            padding: 0;
        }

        .navbar-center li {
            display: inline;
        }


        .navbar-center a {
            text-decoration: none;
            color: var(--color-neutral-200);
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .navbar-center a:hover {
            color: #00ffff;
        }


        .navbar-right {
            width: 120px;
            height: auto;


        }

        .company-logo {
            background-color: white;
            height: 80px;
            width: 80px;
            color: red;
            border-radius: 10px;
            /* Optional, for smooth edges */
            box-shadow: inset 0 0 10px rgba(0, 255, 255, 0.5),
                0 0 15px rgba(0, 255, 255, 0.7);
            /* Inner + Outer Glow */

            padding: 10px;
            /* Space for inset effect */
        }

        .navbar1 {
            display: none;
        }









        @media (max-width: 768px) {

            .navbar {
                display: none;
            }

            .navbar1 {
                display: flex;
                align-items: center;
                justify-content: space-between;
                position: fixed;
                top: 0;
                width: 100%;
               
                background-color: var(--color-black);
                color: var(--color-neutral-200);
                padding: 15px;
                z-index: 1000;
                transition: transform 0.4s ease-in-out;
                backdrop-filter: blur(10px);
            }

            .navbar1.scroll-up {
                transform: translateY(0);
            }

            .navbar1.scroll-down {
                transform: translateY(-50px);
            }
            .navbar-center{
                display: none;
                
            }
            .bar{
                     display: flex;
                     align-items: center;
                     justify-content: center;
                     text-align: center;
                     height: 60px;
                     width: 60px;                
            }

            #cross{
                margin-right: 10px;
                transition: .2s linear;
                
            }

            #cross.fa-x{
        transform: rotate(180deg);
        text-shadow:  
        0 0 10px rgba(0, 255, 255, 0.5),  
        0 0 15px rgba(0, 255, 255, 0.7);
    }

            .bar i{
                font-size: 28px;
            }

         
            .company-logo {
           
            height: 40px;
            width: 52px;
           
        }
        
        .navbar-right{
          
            width: 80px;
        }

        .navbar-left span {
            font-size: 1.1rem;
           

        }

        .navbar-left p {
            
            font-size: 0.4rem;

        }
        
        .navbar-center a {
            
            font-size: 1.7rem;
            text-shadow:  
        0 0 10px rgba(0, 255, 255, 0.5),  
        0 0 15px rgba(0, 255, 255, 0.7);
        }

        


        /* toggle */


        ...
/* Add this CSS for the toggled state */
.navbar1.toggled {
  
    width: 100%;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* padding-top: 60px; */
    
    
}


.navbar1.toggled .navbar-center {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    text-align: center;
    margin-top: 20px;
    height: 100vh;
    
}

.navbar1.toggled .navbar-center li {
    
    margin: 10px 0;
}

.navbar1.toggled .bar {
    position: absolute;
    top: 15px;
    right: 15px;
}

.navbar1.toggled .navbar-left,
.navbar1.toggled .navbar-right {
    display: none;
}

        /* toggle */


            

        }
    </style>
</head>

<body>



    <nav class="navbar">
        <div class="navbar-left">
            <span class="company-name">Milleynium Soft</span>
            <p>EMPOWERING INNOVATION ACCROSS INDUSTRIES</p>
        </div>
        <ul class="navbar-center">
            <li><a href="<?php echo site_url('home') ?>">Home</a></li>
            <li><a href="<?php echo site_url('aboutus') ?>">About Us</a></li>
            <li><a href="<?php echo site_url('service') ?>">Services</a></li>
            <li><a href="<?php echo site_url('products') ?>">Our Products</a></li>
            <li><a href="<?php echo site_url('contactus') ?>">Contact Us</a></li>
        </ul>
        <div class="navbar-right">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Company Icon" class="company-logo">
        </div>
    </nav>

    <!-- mobile view -->
  

    <nav class="navbar1">
        <div class="navbar-right">
            <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Company Icon" class="company-logo">
        </div>
        <ul class="navbar-center" id='navs'>
            <li><a href="<?php echo site_url('home') ?>">Home</a></li>
            <li><a href="<?php echo site_url('aboutus') ?>">About Us</a></li>
            <li><a href="<?php echo site_url('service') ?>">Services</a></li>
            <li><a href="<?php echo site_url('products') ?>">Our Products</a></li>
            <li><a href="<?php echo site_url('contactus') ?>">Contact Us</a></li>
        </ul>
        <div class="navbar-left">
            <span class="company-name">Milleynium Soft</span>
            <p>EMPOWERING INNOVATION ACCROSS INDUSTRIES</p>
        </div>

        <div class="bar" onclick="toggleMenu()">
        <i class="fa-solid fa-bars menu-btn" id='cross' ></i>
     

       
        </div>

      

    </nav>
    <!-- mobile view -->


    
<script>
    let lastScrollY = window.scrollY;
    const navbar = document.querySelector(".navbar");
    const navbar1 = document.querySelector(".navbar1");
 
    const cross = document.querySelector("#cross");
    const navbarCenter = document.querySelector(".navbar-center");

    window.addEventListener("scroll", () => {
        if (window.scrollY > lastScrollY) {
            navbar.classList.add("scroll-down");
            navbar1.classList.add("scroll-down");
            navbar.classList.remove("scroll-up");
            navbar1.classList.remove("scroll-up");
        } else {
            navbar.classList.add("scroll-up");
            navbar1.classList.add("scroll-up");
            navbar.classList.remove("scroll-down");
            navbar1.classList.remove("scroll-down");
        }
        lastScrollY = window.scrollY;
    });

    function toggleMenu() {
        navbar1.classList.toggle("toggled");
        cross.classList.toggle("fa-x");

              
    }

    // cross.addEventListener("click", toggleMenu);
</script>






</body>

</html>