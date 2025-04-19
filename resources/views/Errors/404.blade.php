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
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 600px;
            width: 100%;
            padding: 1rem;
        }

        .notfound-text h1 {
            font-size: 6rem;
            margin: 0;
            color: #800080;
        }

        .notfound-text h2 {
            font-size: 1.75rem;
            margin-top: 1rem;
            color: #333;
        }

        .notfound-text p {
            color: #555;
            margin-top: 1rem;
            font-size: 1rem;
            max-width: 500px;
        }

        .notfound-image {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .notfound-image img {
            display: block;         /* Ensures it behaves like a block element */
            margin: 0 auto;         /* Horizontally centers the image */
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div id="notfound">
    <div class="notfound-container">
        <div class="notfound-text">
            <h1>Oops!</h1>
            <h2>Sorry, we couldn't find that page</h2>
            <p>It's unavailable either because it was removed, had its name changed or is temporarily unavailable.</p>
        </div>
        <div class="notfound-image">
            <img src="/images/hat.png" alt="404 Illustration" />
        </div>
    </div>
</div>
</body>
</html>
