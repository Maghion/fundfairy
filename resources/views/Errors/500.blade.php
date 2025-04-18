<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - Page Not Found</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            background: #f4f4f4;
        }

        #notfound {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 2rem;
        }

        .notfound-container {
            display: flex;
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            max-width: 1000px;
            width: 100%;
        }

        .notfound-text {
            padding: 2rem;
            flex: 1;
        }

        .notfound-text h1 {
            font-size: 5rem;
            margin: 0;
            color: #e11d48;
        }

        .notfound-text h2 {
            font-size: 1.5rem;
            margin-top: 1rem;
            color: #333;
        }

        .notfound-text p {
            color: #555;
            margin-top: 1rem;
            font-size: 1rem;
        }

        .notfound-image {
            flex: 1;
            background-color: #fef2f2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .notfound-image img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .notfound-container {
                flex-direction: column;
                text-align: center;
            }

            .notfound-image {
                padding: 1rem;
            }

            .notfound-text h1 {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
<div id="notfound">
    <div class="notfound-container">
        <div class="notfound-text">
            <h1>Oops!</h1>
            <h2>We couldn't find that page</h2>
            <p>Sorry, the page you're looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
        </div>
        <div class="notfound-image">
            <img src="/images/404-illustration.png" alt="404 Illustration" />
        </div>
    </div>
</div>
</body>
</html>
