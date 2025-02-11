<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #444;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 450px;
            text-align: center;
            animation: slideIn 0.5s ease-out;
        }

        h2 {
            color: #007bff;
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .form-group {
            text-align: left;
            margin-bottom: 16px;
        }

        label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #007bff;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: #0056b3;
            box-shadow: 0 0 8px rgba(0, 86, 179, 0.4);
            outline: none;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 14px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 8px;
            width: 100%;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        button:focus {
            outline: none;
        }

        .form-group input,
        .form-group textarea {
            font-size: 14px;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            input,
            textarea {
                font-size: 14px;
            }

            button {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Get in Touch</h2>
        <form action="#" method="POST">

            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required aria-label="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required aria-label="Enter your email address">
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="5" required aria-label="Enter your message here"></textarea>
            </div>

            <button type="submit">Send Your Message</button>
        </form>
    </div>

</body>

</html>