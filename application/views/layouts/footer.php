<footer>
    <div class="footer-container">
        <!-- 🔹 Company Info -->
        <div class="footer_outer">
            <div class="footer-box">
                <h2>Milleynium Soft</h2>
                <p>Innovating the future with cutting-edge ERP solutions.</p>
            </div>

            <!-- 🔹 Contact Info -->
            <div class="footer-box">
                <h3>Contact Us</h3>
                <p><strong>Email:</strong> info@milleyniumsoft.com</p>
                <p><strong>Phone:</strong> +91 98765 43210</p>
                <p><strong>Address:</strong> 123 Tech Park, India</p>
            </div>
        </div>

        <div class="footer_outer">
            <!-- 🔹 Quick Links -->
            <div class="footer-box quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#"><span>●</span> Home</a></li>
                    <li><a href="#"><span>●</span> About Us</a></li>
                    <li><a href="#"><span>●</span> Services</a></li>
                    <li><a href="#"><span>●</span> Contact</a></li>
                </ul>
            </div>

            <!-- 🔹 Follow Us -->
            <div class="footer-box follow-us">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Milleynium Soft. All rights reserved.</p>
    </div>
</footer>

<!-- ✅ Internal CSS -->
<style>
    footer {
        background-color: #111;
        color: #ddd;
        padding: 20px 10px;
        text-align: center;
        width: 100%;
        font-size: 0.85rem;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .footer_outer {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 45%;
        text-align: center;
    }

    .footer-box {
        padding: 5px 10px;
        width: 100%;
    }

    .footer-box h2 {
        color: #00ffff;
        font-size: 1.3rem;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .footer-box h3 {
        font-size: 1rem;
        color: #00ffff;
        margin-bottom: 5px;
    }

    .footer-box p {
        font-size: 0.7rem;
        line-height: 1.4;
    }

    .quick-links ul {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 15px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .quick-links ul li a {
        color: #ddd;
        text-decoration: none;
        font-size: 0.7rem;
        display: flex;
        align-items: center;
        gap: 5px;
        transition: color 0.3s ease-in-out;
    }

    .quick-links ul li a span {
        color: #00ffff;
        font-size: 0.7rem;
    }

    .quick-links ul li a:hover {
        color: #00ffff;
    }

    .follow-us .social-icons {
        display: flex;
        gap: 35px;
        justify-content: center;
        margin-top: 5px;
    }

    .follow-us a {
        font-size: 1rem;
        color: #ddd;
        transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .follow-us a:hover {
        transform: scale(1.1);
        color: #00ffff;
    }

    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        margin-top: 10px;
        padding-top: 5px;
        font-size: 0.75rem;
    }

    /* ✅ Responsive Design */
    @media (max-width: 768px) {
        .footer-container {
            flex-direction: column;
        }

        .footer_outer {
            width: 100%;
            margin-bottom: 10px;
        }

        .quick-links ul {
            justify-content: center;
        }

        .follow-us .social-icons {
            justify-content: center;
        }
    }
</style>
