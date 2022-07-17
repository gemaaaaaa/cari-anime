<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('assets/css/cssreset.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animedetail.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maitree&family=Montserrat:wght@700&family=Roboto&display=swap" rel="stylesheet"> 

    <title>Cari Anime</title>
</head>
<body>
    <nav>
        <h1 class="nav-brand"><a href="<?= base_url() ?>">Cari Anime</a></h1>
    </nav>

    <main>
        <section class="main-detail">
            <div class="poster">
                <img src="<?= $poster_url ?>" height="300px">
            </div>

            <div class="detail">
                <h2 class="title"><?= $title ?></h2>

                <div class="more-info">
                    <div class="alternative-title">
                        <p><?= $title_english ?></p>
                        <p><?= $title_japanese ?></p>
                    </div>
                    
                    <div class="score">
                        <span><?= $score ?></span>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                
                <p class="synopsis"><?= $synopsis ?></p>
            </div>
        </section>
    </main>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/index.js') ?>"></script>

</html>