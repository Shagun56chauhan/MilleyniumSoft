<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Milleynium Soft</title>
  
    <!-- ✅ AOS (Animate on Scroll) Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --color-black: #111;
            --primary-color: #00ffff;
        }

        html,
        body {
            background-color: var(--color-black);
            color: #fff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            box-sizing: border-box;
            width: 100%;
        }

        .about_container {
            height: max-content;
            width: 100%;
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 50px;
        }

        .hero {
            text-align: center;
            padding: 60px 20px;
            background: linear-gradient(180deg, var(--color-black), #222);
            opacity: 0;
            transform: scale(0.9);
            transition: all 1s ease-in-out;
            width: 100%;
        }

        .hero h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 10px auto;
        }

        .section {
            padding: 50px 20px;
            text-align: center;
        }

        .section h2 {
            color: var(--primary-color);
        }

        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .feature-box {
            background: #222;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            text-align: center;
        }

        .feature-box h3 {
            color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .cta {
            text-align: center;
            padding: 40px;
        }

        .cta a {
            background: var(--primary-color);
            color: var(--color-black);
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .about-container {
            width: 80%;
            max-width: 1000px;
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 0px 15px rgba(0, 255, 255, 0.3);
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-in-out;
        }

        .about-container h1 {
            color: #00ffff;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .about-container p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .about-container .highlight {
            color: #00ffff;
            font-weight: bold;
        }

         /* Vision and Mission */
         .vision-mission-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
            gap: 30px;
            margin-top: 50px;
        }

        .vision-box,
        .mission-box {
            background: #222;
            border-radius: 10px;
            padding: 30px;
            width: 45%;
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .vision-box:hover,
        .mission-box:hover {
            transform: scale(1.05);
            box-shadow: 0px 0px 20px rgba(0, 255, 255, 0.5);
        }

        .vision-box i,
        .mission-box i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .vision-box h3,
        .mission-box h3 {
            color: var(--primary-color);
            font-size: 1.8rem;
        }


        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .hero p,
            .section p {
                font-size: 1rem;
            }

            .section h2 {
                font-size: 1.5rem;
            }

            .feature-box {
                width: 90%;
                margin: 10px auto;
                padding: 15px;
            }

            .cta h2 {
                font-size: 1.5rem;
            }

            .cta a {
                font-size: 1rem;
                padding: 8px 15px;
            }

            .about-container {
                width: 70%;
                padding: 20px;
                text-align: justify;
            }

            .about-container h1 {
                font-size: 1.8rem;
            }

            .about-container p {
                font-size: 0.95rem;
                line-height: 1.5;
            }


            /* vision */

            .vision-mission-container {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }

            .vision-box,
            .mission-box {
                width: 80%;
                padding: 20px;
            }

            .vision-box h3,
            .mission-box h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>

    <?php $this->view('layouts/header'); ?>

    <div class="about_container">

        <section class="hero" data-aos="fade-down" data-aos-duration="1500">
            <h1>Empowering Businesses with Smart ERP Solutions</h1>
            <p>We drive innovation and efficiency with cutting-edge ERP software solutions.</p>
        </section>

        <div class="about-container" data-aos="fade-up" data-aos-duration="1200">
            <h1>About <span class="highlight">Milleynium Soft</span></h1>
            <p data-aos="zoom-in" data-aos-duration="1500" >
                Welcome to <span class="highlight">Milleynium Soft</span>, your trusted partner in **ERP software
                development**.
                We specialize in **innovative, scalable, and efficient solutions** that empower businesses to streamline
                operations,
                enhance productivity, and drive growth in the digital era.
            </p>
            <p data-aos="zoom-in" data-aos-duration="1500">
                With a team of skilled professionals, we ensure that our **cutting-edge ERP solutions** cater to
                the unique needs of diverse industries. Join us on our mission to **redefine the future of enterprise
                solutions!**
                Milleynium Soft is a leading ERP solutions provider, helping businesses streamline operations and
                enhance
                productivity.
            </p>
        </div>

        <section class="section" data-aos="fade-up" data-aos-duration="1000">
            <h2>Why Choose Us?</h2>
            <div class="features">
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1000">
                    <h3><i class="fas fa-brain"></i> AI-powered Solutions</h3>
                    <p>Enhance decision-making with intelligent automation.</p>
                </div>
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1000">
                    <h3><i class="fas fa-lock"></i> Scalable & Secure</h3>
                    <p>Our ERP software grows with your business while ensuring top security.</p>
                </div>
                <div class="feature-box" data-aos="fade-up" data-aos-duration="1000">
                    <h3><i class="fas fa-headset"></i> 24/7 Support</h3>
                    <p>Our team is always ready to assist you with expert guidance.</p>
                </div>
            </div>
        </section>

        <section class="vision-mission-container">
            <div class="vision-box" data-aos="fade-left" data-aos-duration="1000">
                <i class="fas fa-eye"></i>
                <h3>Our Vision</h3>
                <p>To be a global leader in ERP software solutions, revolutionizing businesses with cutting-edge technologies and driving innovation.</p>
            </div>
            <div class="mission-box" data-aos="fade-right" data-aos-duration="1200">
                <i class="fas fa-bullseye"></i>
                <h3>Our Mission</h3>
                <p>Our mission is to deliver high-performance ERP systems that enable businesses to optimize operations, enhance productivity, and adapt to changing market needs.</p>
            </div>
        </section>

        <section class="cta" data-aos="fade-up" data-aos-duration="1000">
            <h2>Ready to Transform Your Business?</h2>
            <a href="<?php echo site_url('contactus') ?>">Get in Touch</a>
        </section>

    </div>

    <?php $this->view('layouts/footer'); ?>

    <script>
        // Initialize AOS
        AOS.init();
    </script>

</body>

</html>
