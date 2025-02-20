<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Millennium Soft</title>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->


    <!-- ✅ AOS (Animate on Scroll) Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
    :root {
        --color-black: #121212;
            --color-cyan: #00ffff;
        }


    html,
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

    .outer_contact {

        margin-top: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
    }

    .contact-container {
        margin-top: 20px;
        display: flex;
        gap: 40px;
        background: #111;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px var(--color-cyan);
        width: 60%;
    }

    .contact-form,
    .contact-info {
        flex: 1;
        padding: 20px;
    }

    .contact-form h2,
    .contact-info h3 {
        color: var(--color-cyan);
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        border: none;
        border-radius: 5px;
    }

    .contact-form button {
        background: var(--color-cyan);
        color: black;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background: white;
    }

    .social-links a {
        color: var(--color-cyan);
        font-size: 20px;
        margin: 0 10px;
    }


    .map-container {
        margin-top: 20px;
        border-radius: 8px;
        overflow: hidden;
    }

    .map-container iframe {
        border: none;
        border-radius: 8px;
    }


    @media (max-width: 768px) {
        .contact-container {
            flex-direction: column;
            width: 100%;
            margin: 30px;
        }

        .outer_contact {
            height: max-content;
            margin-top: 80px;

        }
        .map-container iframe {
            width: 100%;
        }

    }
</style>

</head>

<body>

    <?php $this->view('layouts/header'); ?>
    <div class="outer_contact">
        <div class="contact-container" data-aos="zoom-in" data-aos-duration="1500">
            <div class="contact-form">
                <h2>Contact Us</h2>
                <p>We’d love to hear from you! Let's build something amazing together.</p>
                <form>
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Your Phone (Optional)">
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p><i class="fas fa-map-marker-alt"></i> Prem Niwas, Airport Road, Shivnagar, Totu Shimla-11</p>
                <p><i class="fas fa-phone"></i> +91 9459820876</p>
                <p><i class="fas fa-envelope"></i> milleyniumsoft@gmail.com</p>
                <p><i class="fas fa-clock"></i> Mon - Fri: 9 AM - 6 PM</p>



                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <!-- Google Maps Embed -->
                <!-- Google Maps Embed -->
                <div class="map-container">
                    <iframe
                        src="https://maps.google.com/maps?q=Milleynium%20Soft,%20Prem%20Niwas,%20Airport%20Rd,%20Shiv%20Nagar,%20Totu,%20Shimla,%20Himachal%20Pradesh%20171011&output=embed"
                        width="85%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>


    </div>

    <script>

        // Initialize AOS
        AOS.init();

    </script>

    <?php $this->view('layouts/footer'); ?>
</body>

</html>

