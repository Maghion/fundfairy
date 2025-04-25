<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>403 - Forbidden</title>

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
            background-color: #EFC35D;
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
            align-items: center;
            gap: 40px;
            max-width: 1200px;
            padding: 20px;
        }

        .wizard-image {
            max-width: 300px;
            height: auto;
        }

        .notfound-text {
            max-width: 720px;
            width: 100%;
            line-height: 1.6;
        }

        .notfound-text .notfound-404 {
            position: relative;
            height: 320px;
        }

        .notfound-text .notfound-404 h1 {
            font-family: 'Montserrat', sans-serif;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 320px;
            font-weight: 900;
            margin: 0;
            color: darkmagenta;
            text-transform: uppercase;
            letter-spacing: -40px;
            margin-top: 15px;
            margin-left: -20px;
        }

        .notfound-text .notfound-404 h1 > span {
            text-shadow: -8px 0 0 #fff;
        }

        .notfound-text h3 {
            font-family: 'Cabin', sans-serif;
            font-size: 28px;
            font-weight: 500;
            color: #333;
            margin: 20px 0 16px;
            letter-spacing: 0.5px;
            text-align: center;
        }

        .notfound-text h2 {
            font-family: 'Cabin', sans-serif;
            font-size: 26px;
            font-weight: 400;
            text-transform: uppercase;
            color: #000;
            margin-top: 0;
            margin-bottom: 30px;
            text-align: center;
        }

        @media only screen and (max-width: 767px) {
            .notfound-container {
                flex-direction: column;
                text-align: center;
            }

            .notfound-text .notfound-404 h1 {
                font-size: 200px;
            }
        }

        @media only screen and (max-width: 480px) {
            .notfound-text .notfound-404 {
                height: 162px;
            }

            .notfound-text .notfound-404 h1 {
                font-size: 162px;
                height: 150px;
                line-height: 162px;
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
            color: white;
            background-color: darkmagenta;
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
            ;
        }
        @media only screen and (max-width: 767px) {
            .notfound-container {
                flex-direction: column;
                text-align: center;
                gap: 5px;
                padding: 30px 20px;
            }

            .wizard-image {
                max-width: 200px;
                margin: 0 auto;
                display: block;
            }

            .notfound-text .notfound-404 {
                height: 220px;
            }

            .notfound-text .notfound-404 h1 {
                font-size: 200px;
                letter-spacing: -25px;
            }

            .notfound-text h3 {
                font-size: 20px;
                margin: 20px 0 16px;
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

            .notfound-text .notfound-404 h1 {
                font-size: 160px;
                height: 160px;
                line-height: 160px;
                letter-spacing: -15px;
            }

            .notfound-text h3 {
                font-size: 18px;
            }

            .notfound-text h2 {
                font-size: 16px;
            }

            .home-button {
                font-size: 13px;
                padding: 8px 16px;
            }
        }


    </style>
</head>
<body>
<div id="notfound">
    <div class="notfound-container">
        <img src="/images/wizard.png" alt="Forbidden Wizard" class="wizard-image" />
        <div class="notfound-text">
            <div class="notfound-404">
                <h3>You shall not pass!</h3>
                <h1><span>4</span><span>0</span><span>3</span></h1>
            </div>
            <h2>You do not have access to this page</h2>
            <div class="button-container">
                <div class="button-container">
                    <a href="/" class="home-button">Return Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
