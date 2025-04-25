<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 - Page Not Found!</title>

    <style>
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 900;
            font-display: swap;
            src: url(/fonts.gstatic.com/s/montserrat/v25/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w0aXpsog.woff2) format('woff2');
            unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: mediumpurple;
            font-family: 'Montserrat', sans-serif;
        }

        #notfound {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .notfound-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            max-width: 800px;
            padding: 20px;
            margin: 0 auto;
        }

        .fairy_404 {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .notfound-text {
            max-width: 720px;
            width: 100%;
            line-height: 1.6;
        }

        .notfound-text .notfound-404 {
            text-align: center;
            margin-bottom: 20px;
        }

        .notfound-text .notfound-404 h1 > span {
            text-shadow: -8px 0 0 #fff;
        }

        .notfound-text h2 {
            font-family: 'Cabin', sans-serif;
            font-size: 24px;
            font-weight: 400;
            text-transform: uppercase;
            color: white;
            margin-top: 0;
            margin-bottom: 30px;
            text-align: center;
        }

        @media only screen and (max-width: 767px) {
            .notfound-container {
                flex-direction: column;
                text-align: center;
            }
        }

        @media only screen and (max-width: 480px) {
            .notfound-text .notfound-404 {
                height: 162px;
            }

            .notfound-text h2 {
                font-size: 16px;
            }
        }
        .home-button {
            display: inline-block;
            margin: 5px auto 0;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 600;
            color: darkmagenta;
            background-color: #EAB308;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
        }
        .button-container {
            text-align: center;
        }

        .home-button:hover {
            background-color: #580058;
            color: white;
        ;
        }
        @media only screen and (max-width: 767px) {
            .notfound-container {
                flex-direction: column;
                text-align: center;
                gap: 5px;
                padding: 30px 20px;
            }

            .fairy_404 {
                width: 90%;
                max-width: 320px;
                margin: 0 auto;
                display: block;
            }

            .notfound-text .notfound-404 {
                height: 220px;
            }

            .notfound-text h2 {
                font-size: 18px;
            }

            .home-button {
                font-size: 14px;
                padding: 10px 20px;
            }
        }

        @media only screen and (max-width: 480px) {
            .notfound-text .notfound-404 {
                height: 180px;
            }

            .notfound-text h2 {
                font-size: 16px;
            }

            .home-button {
                font-size: 13px;
                padding: 8px 16px;
            }

            .fairy_404 {
                max-width: 340px;
                width: 100%;
            }
        }


    </style>
</head>
<body>
<div id="notfound">
    <div class="notfound-container">
        <div class="notfound-text">
            <div class="notfound-404">
                <img src="/images/fairy_404.png" alt="fairy" class="fairy_404" />
            </div>
            <h2>We couldn't find the page you were looking for</h2>
            <div class="button-container">
                    <a href="/" class="home-button">Return Home</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
