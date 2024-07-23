<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - E-Gadget Store</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background:lightgreen;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: #333;
        }
        .about-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }
        h1 {
            color:indigo;
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInDown 1s ease-in-out;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            animation: fadeIn 1s ease-in-out;
        }
        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 2rem;
        }
        .team-member {
            margin: 1rem;
            text-align: center;
            animation: zoomIn 1s ease-in-out;
        }
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 0.5rem;
            transition: transform 0.3s;
        }
        .team-member:hover img {
            transform: scale(1.1);
        }
        .contact-info {
            margin-top: 2rem;
            animation: fadeInUp 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="about-container">
        <h1>About E-Gadget Store</h1>
        <p>Welcome to E-Gadget Store! We are your one-stop-shop for the latest and greatest in electronic gadgets. Founded with the mission to bring innovative technology to your doorstep, we pride ourselves on our commitment to quality and customer satisfaction.</p>
        <p>Our journey began in [2024] with a small team of tech enthusiasts. Today, we have grown into a trusted retailer of a wide range of gadgets, from smartphones to smart home devices. Our dedication to staying ahead of the tech curve ensures that we always offer the newest and most reliable products on the market.</p>
        <div class="team">
            <div class="team-member">
                <img src="team-member-1.jpg" alt="Team Member 1">
                <h3>ROSHINI S</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="team-member">
                <img src="team-member-2.jpg" alt="Team Member 2">
                <h3>ROSHINI S</h3>
                <p>Chief Technology Officer</p>
            </div>
        </div>
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p>Email: sroshini013@gmail.com</p>
            <p>Phone:9941877192</p>
        </div>
    </div>
</body>
</html>
