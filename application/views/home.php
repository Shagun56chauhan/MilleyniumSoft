<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Milleynium Soft</title>

    <!-- ✅ Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <!-- ✅ AOS (Animate on Scroll) Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* ✅ Home Page Background Same as Navbar */
        body {
            background-color: var(--color-black);
            color: var(--color-neutral-200);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            box-sizing: border-box;
            width: 100%;


        }




        .home {
            width: 100%;
            height: max-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 30px;

            position: relative;
            z-index: 1;
           

        }



        /* ✅ Home Section Styling */
        .container {
            min-height: 100vh;
            /* 👈 height ke bajaye min-height use karo */

            width: 100%;

            overflow: hidden;
            /* Extra content cut ho jayega */
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

            box-sizing: border-box;
            /* Fixes overflow issue */

        }

        .home-content h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #00ffff;
        }

        .home-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #00ffff;
            color: black;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: var(--color-neutral-400);
        }

        /* js particles */
        /* #particles-js {
            position: fixed;
            width: 100%;
            height: 100vh;
            z-index: -10;
            top: 0;
            left: 0;
        } */
        /* js particles */

       /* particles css */
        /* Neon Particle Effect */
        .particles-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;
          
        }

        .particle {
            position: absolute;
            width: 5px;
            height: 5px;
            background-color: #00ffff;
            border-radius: 50%;
            animation: moveParticles 5s infinite linear;
        }

        /* Animation for particle movement */
        @keyframes moveParticles {
            0% {
                transform: translate(0, 0);
                opacity: 0.8;
            }
            50% {
                transform: translate(150px, 150px);
                opacity: 0.4;
            }
            100% {
                transform: translate(300px, 300px);
                opacity: 0;
            }
        }
       /* particles css */

        /* ✅ About Us Section */
        .about-us {
            width: 80%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* padding: 50px 20px; */
            background-color: var(--color-black);
            text-align: justify;
        }

        .about-content {
            max-width: 600px;
        }

        .about-content h2 {
            color: #00ffff;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .about-image img {
            background-color: white;
            height: 140px;
            width: 140px;
            border-radius: 10px;
            box-shadow: inset 0 0 10px rgba(0, 255, 255, 0.5), 0 0 15px rgba(0, 255, 255, 0.7);
            padding: 10px;
        }

        .about-us .about-image {
            flex: 1;
            text-align: center;
            padding-right: 40px;
            height: auto;
            width: 140px;
        }

        .about-us .about-content {
            flex: 1;
        }



        /* services */
        .services {
        height:max-content ;
        text-align: center;
        padding: 80px 20px;
        background-color: var(--color-black);
        color: var(--color-neutral-200);
    }

    .services-heading {
        font-size: 2rem;
        color: #00ffff;
        margin-bottom: 30px;
    }

    .services-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .service-card {
        background-color: #222;
        padding: 20px;
        border-radius: 10px;
        width: 250px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0, 255, 255, 0.2);
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
    }

    .service-card i {
        font-size: 2.5rem;
        color: #00ffff;
        margin-bottom: 10px;
    }

    .service-card h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: var(--color-neutral-200);
        font-weight: bold;
    }

    .service-card p {
        font-size: 0.9rem;
        color: var(--color-neutral-400);
    }

        /* services */
        /* ✅ Responsive Design */
        @media (max-width: 768px) {
            .home-content h1 {
                font-size: 1.4rem;
            }

           

             /* ✅ Home Page Background Same as Navbar */
       html, body {
            background-color: var(--color-black);
            color: var(--color-neutral-200);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            box-sizing: border-box;
            width: 100%;


        }






            .home-content p {
                font-size: 0.4rem;
            }

            .about-us {
                display: flex;
                flex-direction: column;
                
                /* 👈 Align content to the left */

                /* border: 2px solid red; */
                text-align: justify;
               
            }
            .about-us h2{
                text-align: center;
            }

            .about-us .about-image {
                padding-right: 0;
                margin-bottom: 20px;
            }

            /* services */
            .services{
                margin-top: 30px;
            }
            
            .services-container {
            flex-direction: column;
            align-items: center;
        }
            /* services */
        }
    </style>
</head>

<body>

    <?php $this->view('layouts/header'); ?>


    <div class="home">
  
    <!-- <div id="particles-js"></div> -->
         <!-- Particle Container -->
    <div class="particles-container" id="particles-container"></div>

        <!-- ✅ Home Page Content (Scroll Animation Added) -->
        <div class="container">
            <div class="home-content" data-aos="fade-down" data-aos-duration="1500">
                <h1>Welcome to Milleynium Soft</h1>
                <p>We build next-generation ERP software for businesses.</p>
                <a href="<?php echo site_url('service') ?>" class="btn" data-aos="zoom-in" data-aos-duration="1000">Get Started</a>
            </div>
        </div>

        

        <!-- ✅ About Us Section (Slide Animation on Scroll) -->
        <div class="about-us" data-aos="fade-up" data-aos-duration="1200">
            <div class="about-image" data-aos="zoom-in" data-aos-duration="1500">
                <img src="<?php echo base_url('assets/icons/erp.png'); ?>" alt="About Milleynium Soft">
            </div>
            <div class="about-content" data-aos="fade-left" data-aos-duration="1200">
                <h2>About Us</h2>
                <p>Milleynium Soft is a leading technology company specializing in ERP software, website development,
                    and
                    mobile app solutions.
                    With a commitment to innovation, we streamline business operations and enhance digital experiences.
                    Our
                    expertise spans multiple industries,
                    delivering customized and scalable solutions. We empower businesses with cutting-edge technology,
                    ensuring efficiency and growth.
                    Let us transform your vision into reality with our advanced digital solutions.</p>
            </div>
        </div>

        <!-- ✅ Services Section -->
<div class="services" data-aos="fade-up" data-aos-duration="1200">
    <h2 class="services-heading">Our Services</h2>
    <div class="services-container">
        <!-- Service 1 -->
        <div class="service-card" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-cogs"></i> <!-- Gear Icon -->
            <h3>ERP Solutions</h3>
            <p>Next-gen ERP solutions to streamline your business processes efficiently.</p>
        </div>

        <!-- Service 2 -->
        <div class="service-card" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-laptop-code"></i> <!-- Code Icon -->
            <h3>Custom Software Development</h3>
            <p>Tailor-made software solutions to meet your business requirements.</p>
        </div>

        <!-- Service 3 -->
        <div class="service-card" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fab fa-react"></i> <!-- React Logo Icon -->
            <h3>React & PHP Development</h3>
            <p>Modern web solutions powered by React and PHP for high performance.</p>
        </div>

        <!-- Service 4 -->
        <div class="service-card" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-globe"></i> <!-- Globe Icon -->
            <h3>Comprehensive Portals</h3>
            <p>Robust product and service portals to enhance digital experiences.</p>
        </div>
    </div>
</div>

    </div>

<!-- js particles -->

<!-- <script>
        window.onload = function () {
            AOS.init();

            particlesJS("particles-js", {
                "particles": {
                    "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
                    "color": { "value": "#00ffff" },
                    "shape": { "type": "circle" },
                    "opacity": { "value": 0.5 },
                    "size": { "value": 3 },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#00ffff",
                        "opacity": 0.5,
                        "width": 1
                    },
                    "move": { "enable": true, "speed": 3 }
                }
            });
        };

    </script> -->
<!-- js particles -->

  
    <script>

         // Initialize AOS
         AOS.init();

        // Function to create particles
        function createParticles() {
            const container = document.getElementById('particles-container');
            const numParticles = 100;

            for (let i = 0; i < numParticles; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                container.appendChild(particle);

                // Set random positions and animation delays
                const xPos = Math.random() * window.innerWidth;
                const yPos = Math.random() * window.innerHeight;
                const delay = Math.random() * 5;

                particle.style.left = `${xPos}px`;
                particle.style.top = `${yPos}px`;
                particle.style.animationDelay = `${delay}s`;
            }
        }

        window.onload = createParticles;
    </script>

    <?php $this->view('layouts/footer'); ?>

</body>

</html>