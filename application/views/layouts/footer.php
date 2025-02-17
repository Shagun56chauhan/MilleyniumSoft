<footer>
    <div class="footer-container">
        <!-- 🔹 Company Info -->
        <div class="footer-box">
            <h2>Milleynium Soft</h2>
            <p>Innovating the future with cutting-edge ERP solutions.</p>
        </div>

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

        <!-- 🔹 Contact Info -->
        <div class="footer-box">
            <h3>Contact Us</h3>
            <p><strong>Email:</strong> info@milleyniumsoft.com</p>
            <p><strong>Phone:</strong> +91 98765 43210</p>
            <p><strong>Address:</strong> 123 Tech Park, India</p>
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

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Milleynium Soft. All rights reserved.</p>
    </div>
</footer>

<!-- ✅ Internal CSS -->
<style>
footer {
    background-color: #111;
    color: #ddd;
    padding: 30px 20px;
    text-align: center;
    width: 100%;
    height: max-content;
}

.footer-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    
    width: 100%;
    margin: auto;
}

.footer-box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    text-align: justify;
    padding: 10px;
    min-width: 200px;
}

.footer-box h2 {
    color: #00ffff;
    font-size: 1.5rem;
    margin-bottom: 8px;
}

.footer-box h3 {
    font-size: 1.2rem;
    color: #00ffff;
}

.footer-box p {
    font-size: 0.9rem;
    line-height: 1.6;
}

.quick-links ul {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 50px;
}

.quick-links ul li a {
    color: #ddd;
    text-decoration: none;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    text-align: justify;
    gap: 8px;
    transition: color 0.3s ease-in-out;
}

.quick-links ul li a span {
    color: #00ffff;
    font-size: 1rem;
}

.quick-links ul li a:hover {
    color: #00ffff;
}

.follow-us .social-icons {
    display: flex;
    justify-content: center;
    gap: 50px;
    margin-top: 10px;
}

.follow-us a {
    font-size: 1.3rem;
    color: #ddd;
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
}

.follow-us a:hover {
    transform: scale(1.2);
    color: #00ffff;
}

.footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    margin-top: 15px;
    padding-top: 10px;
    font-size: 0.8rem;
}

/* ✅ Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .quick-links ul {
        grid-template-columns: 1fr 1fr;
    }

    .footer-box {
        text-align: center;
    }

    .follow-us .social-icons {
        justify-content: center;
    }
}
</style>
