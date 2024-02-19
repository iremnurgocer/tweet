<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f8fa; /* Eski Twitter arkaplan rengi */
        }

        .container {
            background-color: #ffffff; /* Eski Twitter ana içerik rengi */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .card {
            background-color: #ffffff; /* Eski Twitter kart rengi */
            border: 1px solid #e1e8ed;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .card-body {
            color: #1c2938; /* Eski Twitter metin rengi */
        }

        .card-title {
            color: #1da1f2; /* Eski Twitter başlık rengi */
        }

        .card-text {
            color: #14171a; /* Eski Twitter metin rengi */
        }

        .text-muted {
            color: #657786; /* Eski Twitter gri metin rengi */
        }
    </style>
    <title>Tweet Uygulaması</title>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="mb-4">Anasayfa</h2>
            <?php foreach ($tweet as $item): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Tweet #<?php echo $item['id']; ?></h5>
                        <p class="card-text"><?php echo $item['content']; ?></p>
                        <p class="card-text"><small class="text-muted">Kullanıcı ID: <?php echo $item['userId']; ?></small></p>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
