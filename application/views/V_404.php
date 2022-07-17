<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404 Not Found</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
        }

        html, body {
            height: 100%;
        }
        
        body {
            background: #D3CCE3;
            background: -webkit-linear-gradient(to left, #E9E4F0, #D3CCE3);
            background: linear-gradient(to left, #E9E4F0, #D3CCE3);
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
        }

        blockquote {
            margin-top: 90px;
            padding: 60px 80px 40px;
            position: relative;
        }

        blockquote p {
            font-family: "Utopia-italic";
            font-size: 35px;
            font-weight: 700px;
            text-align: center;
        }
        
        blockquote:before {
            position: absolute;
            font-family: 'FontAwesome';
            top: 0;
            
            content:"\f10d";
            font-size: 180px;
            color: rgba(0,0,0,0.1);
        }

        blockquote::after {
            content: "404";
            top: -90px;
            left: 50%;
            font-size: 100px;
            margin-left: -100px;
            position: absolute;
            border-bottom: 3px solid #bf0024;
        }

        .info {
            width: 60%;
        }

        .image {
            width: 40%;
        }

        .image img {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="info">
        <blockquote>
            <p>“You don’t need to worry. You’ll soon find something you can do, something you can set your heart on.” – Yui Hirasawa</p>
        </blockquote>
    </div>

    <div class="image">
        <img src="<?= base_url("assets/img/404.png") ?>" alt="Yui Hirasawa STOP!" height="400px">
    </div>
</body>
</html>