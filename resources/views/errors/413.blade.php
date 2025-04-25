<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>413 - Request Entity Too Large</title>
    <style>
        html {
            font-size: 20px;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #0A3857;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .notfound-container {
            text-align: center;
            padding: 40px;
            max-width: 1000px;
            width: 90%;
            transform: scale(1.15);
        }

        .error_413 {
            max-width: 350px;
            margin: 0 auto 20px;
            display: block;
        }

        .notfound-404 h1 {
            font-size: 250px;
            font-weight: 900;
            color: #FF5800;
            letter-spacing: -14px;
            margin: 0;
            line-height: 1;
        }

        .notfound-404 h1 span {
            text-shadow: -6px 0 0 white;
        }

        .notfound-404 h3 {
            font-size: 32px;
            font-weight: 600;
            color: white;
            margin: 5px 0 10px;
        }

        h2 {
            font-size: 24px;
            color:white;
            margin: 10px 0 20px;
        }

        .home-button {
            display: inline-block;
            padding: 16px 32px;
            font-size: 18px;
            font-weight: 600;
            color: white;
            background-color: #FF5800;
            border: none;
            border-radius: 8px;
            text-decoration: none;
        }

        .home-button:hover {
            background-color: #12649c;
        }

        @media (max-width: 767px) {
            html {
                font-size: 17px;
            }

            .notfound-container {
                transform: scale(1);
                padding: 20px;
            }

            .error_500 {
                max-width: 200px;
            }

            .notfound-404 h1 {
                font-size: 120px;
                letter-spacing: -10px;
            }

            .notfound-404 h3 {
                font-size: 22px;
            }

            h2 {
                font-size: 18px;
            }

            .home-button {
                font-size: 16px;
                padding: 12px 24px;
            }
        }
    </style>
</head>
<body>
<div class="notfound-container">
    <img src="/images/error_413.png" alt="error_413" class="error_413" />
    <div class="notfound-404">
        <h3>Request Entity Too Large</h3>
        <h1><span>4</span><span>1</span><span>3</span></h1>
    </div>
    <h2>The photo you submitted is too large.<br> Needs to be less than 2048 pixels.</h2>
    <a href="/" class="home-button">Return Home</a>
</div>
</body>
</html>
