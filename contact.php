<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            font-family: Arial, sans-serif;
        }

        .contact-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 500px;
            max-width: 100%;
            text-align: center;
            font-size: large;
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            margin-bottom: 1rem;
            color: #333;
            font-size: 2rem;
            
        }

        .input-container {
            position: relative;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .input-container input,
        .input-container textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #ddd;
            border-radius: 5px;
            outline: none;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .input-container input:focus,
        .input-container textarea:focus {
            border-color:#333;
        }

        .input-container label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            background: #fff;
            padding: 0 0.25rem;
            color:#333;
            font-size: large;
            transition: top 0.3s, font-size 0.3s, color 0.3s;
            pointer-events: none;

        }

        .input-container input:focus + label,
        .input-container input:not(:placeholder-shown) + label,
        .input-container textarea:focus + label,
        .input-container textarea:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 0.75rem;
            color: #ff9a9e;
        }

        .submit-btn {
            background: #ff9a9e;
            color: #fff;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .submit-btn:hover {
            background: #e85a71;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <form action="submit_form.php" method="post">
            <div class="input-container">
                <input type="text" name="name" required>
                <label><h3>Name<h3></label>
            </div>
            <div class="input-container">
                <input type="email" name="email" required>
                <label><h3>Email<h3></label>
            </div>
            <div class="input-container">
                <textarea name="message" rows="4" required></textarea>
                <label><h3>Message<h3></label>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const inputs = document.querySelectorAll('.input-container input, .input-container textarea');

            inputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.parentNode.classList.add('focused');
                });

                input.addEventListener('blur', () => {
                    if (!input.value) {
                        input.parentNode.classList.remove('focused');
                    }
                });
            });
        });
    </script>
</body>
</html>
