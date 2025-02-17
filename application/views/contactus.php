<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Millennium Soft</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php $this->view('layouts/header'); ?>
    <div class="outer_contact">
        <div class="contact-container">
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
                <p><i class="fas fa-map-marker-alt"></i> Millennium Soft, New Delhi, India</p>
                <p><i class="fas fa-phone"></i> +91 9876543210</p>
                <p><i class="fas fa-envelope"></i> contact@millenniumsoft.com</p>
                <p><i class="fas fa-clock"></i> Mon - Fri: 9 AM - 6 PM</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <?php $this->view('layouts/footer'); ?>
</body>

</html>

<style>
    :root {
        --color-black: #000;
        --color-cyan: #00ffff;
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

    }
</style>