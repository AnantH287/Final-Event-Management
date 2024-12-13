<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Booking Successful</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        .full-screen {
            font-size: 150px;
            color: #FFD700; /* Gold color for the emoji */
            animation: bounce 1s infinite;
        }
        .success-message {
            font-size: 40px;
            color: green;
            margin-top: 20px;
        }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-30px);
            }
        }
        .download-btn {
            margin-top: 30px;
            padding: 15px 30px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: #28a745;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .download-btn:hover {
            background-color: #218838;
            transform: translateY(-3px);
        }
        .download-btn:active {
            background-color: #1e7e34;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="full-screen">😊</div>
        <div class="success-message">Booking Successful!</div>
        <form action="download_pdf.php" method="post">
            <button class="download-btn">Download Booking Confirmation</button>
            <a href="../main/main.php"> <button type="button"> <i class="fa-solid fa-house"></i></button></a> 

        </form>
    </div>
</body>
</html>
