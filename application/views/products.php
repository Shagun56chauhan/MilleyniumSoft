<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - Milleynium Soft</title>

     <!-- ✅ AOS (Animate on Scroll) Library -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --color-black: #121212;
            --color-cyan: #00ffff;
        }

        .outer_products {
            width: 100%;
            height: max-content;
            margin-top: 50px;
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
            text-align: center;
        }

        .hero {
            padding: 60px 20px;
            background: var(--color-black);
        }

        .hero h1 {
            color: var(--color-cyan);
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2rem;
            color: #bbb;
        }

        .section {
            padding: 40px 10%;
        }

        .section h2 {
            color: var(--color-cyan);
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .products-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;

            width: 100%;
        }

        .clients-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            /* 2 columns */
            grid-template-rows: repeat(2, auto);
            /* 2 rows */
            gap: 20px;
            justify-content: center;
        }

        .card {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 255, 255, 0.3);
            transition: transform 0.3s;
        }

        .cards {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 255, 255, 0.3);
            transition: transform 0.3s;
            width: 50%;
        }

        .sk {
            width: 270px;
            height: 70px;
            object-fit: contain;
            margin-bottom: 10px;
            background-color: #2A9D8F;
            box-shadow:
                0 4px 8px rgba(0, 0, 0, 0.6),
                /* Darker inset shadow */
                0 4px 10px rgba(0, 0, 0, 0.3);
            /* External shadow for more depth */
        }

       
        .ff{
            width: 238px;
            height: 70px;
            object-fit: contain;
            margin-bottom: 10px;
            background-color: #2A9D8F;
            box-shadow:
                0 4px 8px rgba(0, 0, 0, 0.6),
                /* Darker inset shadow */
                0 4px 10px rgba(0, 0, 0, 0.3);
            /* External shadow for more depth */
        }
       

        .monal {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
            border-radius: 50%;
        }

        .record {
            width: 200px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
            border-radius: 100%;
        }

        .kk {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .spips {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .cards:hover {
            transform: translateY(-10px);
        }

        /* .card img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 10px;
        } */

        .card h3 {
            color: var(--color-cyan);
            font-size: 1.5rem;
        }

        .card p {
            color: #ccc;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 15px;
            background: var(--color-cyan);
            color: var(--color-black);
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .btn:hover {
            background: #00cccc;
        }


        @media (max-width: 768px) {


            .clients-container {
                grid-template-columns: repeat(1, 1fr);
                /* Small screens pe 1 column */
            }

            .cards {
                width: 90%;

            }
           

            .products-container {
                flex-direction: column;

            }

            .sk {
                width: 160px;
                height: 70px;
            }

            .ff{
                width: 160px;
                height: 50px;
            }
        }
    </style>
</head>

<body>

    <?php $this->view('layouts/header'); ?>
    <div class="outer_products" data-aos="fade-down" data-aos-duration="1000">
        <div class="hero">
            <h1>Our Products & Clients</h1>
            <p>Powering businesses with cutting-edge ERP solutions</p>
        </div>

        <div class="section">
            <h2 >My Products</h2>
            <div class="products-container">
                <div class="cards" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/skoolizer.png" alt="KK Blossom Logo" class="sk">
                    <h3>Skoolizer</h3>
                    <p>A complete ERP solution for school management.</p>
                    <a href="https://skoolizer.in/skoolizer/index.php/auth" class="btn">Learn More</a>
                </div>
                <div class="cards" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/images/familyfinance.png" alt="KK Blossom Logo" class="ff">
                    <h3>FamilyFinance</h3>
                    <p>A personal and business finance management solution.</p>
                    <a href="https://skoolizer.in/FamilyFinance/Auth" class="btn">Learn More</a>
                </div>
            </div>
        </div>

        <div class="section">
            <h2>Our Clients</h2>
            <div class="clients-container">
                <div class="card" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/kk_blossom.webp" alt="KK Blossom Logo" class="kk">
                    <h3>KK Blossom Solan</h3>
                    <p>School website powered by Skoolizer.</p>
                    <a href="https://kkblossomschool.org/" class="btn">Learn More</a>
                </div>
                <div class="card" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/images/spips.png" alt="SPIPS Logo" class="spips">
                    <h3>SPIPS Sanjauli Shimla</h3>
                    <p>ERP solutions for school management.</p>
                    <a href="https://spipschool.org/" class="btn">Learn More</a>
                </div>
                <div class="card" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/monal.jpg" alt="Monal Public School Logo" class="monal">
                    <h3>Monal Public School Shimla</h3>
                    <p>Smart school management system integration.</p>
                    <a href="https://monalpublicschool.org/" class="btn">Learn More</a>
                </div>
                <div class="card" data-aos="fade-right" data-aos-duration="1000">
                    <img src="assets/images/him-chatterjee.jpg" alt="Him Chatterjee Logo" class="record">
                    <h3>Him Chatterjee</h3>
                    <p>Renowned visual artist specializing in modern art and digital illustrations.</p>
                    <a href="https://himchatterjee.in/index.php/home" class="btn">Learn More</a>
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