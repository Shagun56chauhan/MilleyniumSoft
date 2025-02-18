<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Page</title>

    
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

        .services-page {
            width: 100%;
            height: max-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 80px;
        }


        /* header */

        .header-card {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 255, 255, 0.3);
            text-align: center;
            width: 80%;
            max-width: 1000px;
            margin-top: 90px;
        }

        .header-card h1 {
            color: #00b3b3;
            margin-bottom: 10px;
        }

        .header-card p {
           
            line-height: 1.5;
        }

        /* header */

        /* service card */
        .services {
            display: flex;
            margin-top: 30px;
            padding: 0 20px;
            gap: 50px;
            /* Adds some margin to sides for cleaner look */
        }

        .service-card {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s, height 0.3s;
            overflow: hidden;
            height: 180px;
            /* Default height */
            max-width: 250px;
            /* Limit width for better design */
            margin: 0 auto;
            /* Centers the cards */
        }

        .service-card:hover {
            transform: scale(1.05);
            height: 350px;
            /* Height when hovered */
        }

        .service-card h3 {
            color: var(--primary-color);
            margin: 10px 0;
            font-size: 22px;
            /* Adjust font size */
        }

        .service-card .service-icon {
            font-size: 40px;
            color: var(--primary-color);
        }

        .service-card .short-description {
            font-size: 14px;
            color: #fff;
            margin: 10px 0;
        }

        .service-card .full-description {
            font-size: 14px;
            color: #fff;
            display: none;
            margin-top: 10px;
        }

        /* Show full description when hovered */
        .service-card:hover .full-description {
            display: block;
        }

        .service-card:hover .short-description {
            display: none;
            /* Hide short description on hover */
        }

        /* Adjust spacing for cleaner look */
        .service-card .service-icon,
        .service-card h3 {
            margin-bottom: 15px;
        }



        /* service card */

        .cta {
            text-align: center;
            margin: 40px 0;
        }

        .cta h2 {
            color: #00b3b3;
        }

        .cta-button {
            background-color: var(--cyan);
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #00b3b3;
        }

        .testimonial-card {
            background: #222;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .testimonials h2 {
            color: #00b3b3;
            padding: 20px;
        }

        .testimonial-card p {
            font-size: 16px;
            color: #fff;
            margin-bottom: 10px;
        }

        .testimonial-card p:first-child {
            font-style: italic;
        }

        .testimonial-card p:last-child {
            font-weight: bold;
            color: var(--primary-color);
        }


        /* FAQ Section */
        .faq {
            padding: 20px;
            margin: 10px;
            background: #333;
            border-radius: 10px;
            width: 96%;
            background: linear-gradient(180deg, var(--color-black), #222);
            
           
        }

        .faq h3 {
            color: var(--primary-color);
        }

        .faq-item {
            margin-bottom: 15px;
        }

        .faq-item h4 {
            font-size: 18px;
            cursor: pointer;
        }

        .faq-item p {
            display: none;
            font-size: 16px;
            margin-top: 5px;
        }

        .faq-item.active p {
            display: block;
            color: #00b3b3;
        }













        /* Responsive Design */
        @media (max-width: 768px) {
            .services {
                flex-direction: column;
                gap: 20px;
            }
            .faq{
                width: 85%;
            }
        }
    </style>
</head>

<body>

    <?php $this->view('layouts/header'); ?>






    <div class="services-page">
        <!-- Header Section -->
        <div class="header-card" data-aos="fade-down" data-aos-duration="1200">
            <h1>Our Services</h1>
            <p data-aos="zoom-in" data-aos-duration="1500">We provide next-gen ERP solutions designed to optimize your business operations, automate workflows, and
                enhance overall efficiency. Our solutions are tailored for various industries, ensuring seamless
                integration and maximum productivity.</p>
            <p data-aos="zoom-in" data-aos-duration="1500">With our cutting-edge technology, you can manage resources, track performance, and gain valuable insights
                through real-time analytics.</p>
        </div>

        <!-- Services Overview Section -->
        <div class="services">
            <!-- Custom Software Development -->
            <div class="service-card" data-aos="fade-down" data-aos-duration="1000">
                <i class="fas fa-cogs service-icon"></i>
                <h3>Custom Software Development</h3>
                <p class="short-description">Tailor-made software solutions to meet your business requirements.</p>
                <p class="full-description">Our custom software development services are designed to cater to the unique
                    needs of your business, helping you stay competitive and scale efficiently. We ensure the highest
                    quality and innovation to achieve your goals.</p>
            </div>
            <!-- React & PHP Development -->
            <div class="service-card" data-aos="fade-left" data-aos-duration="1000">
                <i class="fas fa-code service-icon"></i>
                <h3>React & PHP Development</h3>
                <p class="short-description">Modern web solutions powered by React and PHP for high performance.</p>
                <p class="full-description">We build responsive, fast, and scalable web applications using React for the
                    frontend and PHP for the backend, ensuring a seamless user experience and high performance.</p>
            </div>
            <!-- ERP Solutions -->
            <div class="service-card" data-aos="fade-right" data-aos-duration="1000">
                <i class="fas fa-cogs service-icon"></i>
                <h3>ERP Solutions</h3>
                <p class="short-description">Next-gen ERP solutions to streamline your business processes efficiently.
                </p>
                <p class="full-description">Our ERP solutions help you manage resources, streamline workflows, and
                    improve data visibility for better decision-making. We integrate all your business functions into a
                    unified system.</p>
            </div>
            <!-- Comprehensive Portals -->
            <div class="service-card" data-aos="fade-down" data-aos-duration="1000">
                <i class="fas fa-briefcase service-icon"></i>
                <h3>Comprehensive Portals</h3>
                <p class="short-description">Robust product and service portals to enhance digital experiences.</p>
                <p class="full-description">Our portals provide an all-in-one solution for managing products, services,
                    and customer interactions, improving the overall experience for your business and your customers.
                </p>
            </div>
        </div>



        <!-- CTA Section -->
        <div class="cta" data-aos="fade-up" data-aos-duration="1000">
            <h2>Interested in our ERP solutions?</h2>
            <a href="<?php echo site_url('contactus') ?>" class="cta-button">Contact Us Today</a>
        </div>

        <!-- FAQ Section -->
        <div class="faq" data-aos="fade-right" data-aos-duration="1000">
            <h3>Frequently Asked Questions</h3>
            <div class="faq-item">
                <h4>What is ERP?</h4>
                <p>ERP (Enterprise Resource Planning) is a software that integrates all the functions of a business,
                    allowing for efficient management of resources, processes, and data.</p>
            </div>
            <div class="faq-item">
                <h4>How long does it take to develop custom software?</h4>
                <p>Depending on the complexity of the project, it can take anywhere from a few weeks to several months
                    to develop custom software.</p>
            </div>
            <div class="faq-item">
                <h4>What makes your ERP solutions different?</h4>
                <p>Our ERP solutions are highly customizable, scalable, and designed to meet the specific needs of your
                    business, improving efficiency and reducing operational costs.</p>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="testimonials">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-card" data-aos="fade-left" data-aos-duration="1000">
                <p>"The custom software developed by this team completely transformed our business. Their ERP solutions
                    were exactly what we needed to streamline our processes. Highly recommended!"</p>
                <p>- John Doe, CEO of ABC Corp.</p>
            </div>
            <div class="testimonial-card" data-aos="fade-right" data-aos-duration="1000">
                <p>"We partnered with them for our React & PHP development project, and the results exceeded our
                    expectations. Their professionalism and expertise made the process seamless."</p>
                <p>- Jane Smith, Head of Development at XYZ Ltd.</p>
            </div>
            <div class="testimonial-card" data-aos="fade-left" data-aos-duration="1000">
                <p>"Their ERP solutions have significantly improved the efficiency of our business operations. We now
                    have a more connected and transparent workflow."</p>
                <p>- Mark Johnson, Operations Manager at TechCo.</p>
            </div>
        </div>

    </div>


    <script>

         // Initialize AOS
         AOS.init();

        // FAQ Toggle
        const faqItems = document.querySelectorAll('.faq-item h4');
        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                const parent = item.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>


    <?php $this->view('layouts/footer'); ?>

</body>

</html>

</html>