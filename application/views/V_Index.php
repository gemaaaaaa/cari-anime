<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= base_url('assets/css/index.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Cari Anime</title>
</head>
<body>
    <input type="hidden" id="baseURL" value="<?= base_url() ?>">

    <main>
        <h3>Cari Anime</h3>

        <div>
            <input type="text" class="main-search-bar" name="searchBar" id="searchBar">
            <button>
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <div class="list-anime"></div>
    </main>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/index.js') ?>"></script>

</html>