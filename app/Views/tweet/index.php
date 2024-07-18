<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title><?= mb_convert_encoding("Tweet Uygulaması",'ISO-8859-9','UTF-8')?></title>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <!-- Sol Tarafta Kullanıcı Bölümü -->
        <div class="col-md-3 user-section">
            <?php
            session_start();
            $loggedIn = isset($_SESSION['user_id']);
            if ($loggedIn) {
                $username = $_SESSION['username'];
                echo '<p>username: ' . $username . '</p>';
                echo '<a href="#" class="btn btn-primary btn-sm">Profil</a> | <a href="/logout" class="btn btn-danger btn-sm">'.mb_convert_encoding("Çıkış Yap",'ISO-8859-9','UTF-8').'</a>';
            } else {
                // Kullanıcı giriş yapmamışsa
                echo '<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loginModal">'.mb_convert_encoding("Giriş Yap",'ISO-8859-9','UTF-8').'</button>';
                echo ' | ';
                echo '<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#registerModal">'.mb_convert_encoding("Kayıt Ol",'ISO-8859-9','UTF-8').'</button>';
            }
            ?>
        </div>

        <!-- Giriş Yap Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel"><? echo mb_convert_encoding("Giriş Yap",'ISO-8859-9','UTF-8');?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/login">
                            <div class="form-group">
                                <label for="loginUsername"><? echo mb_convert_encoding("Kullanıcı Adı",'ISO-8859-9','UTF-8');?></label>
                                <input type="text" class="form-control" name="username" id="loginUsername" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="loginPassword"><? echo mb_convert_encoding("Şifre",'ISO-8859-9','UTF-8');?></label>
                                <input type="password" class="form-control" name="password" id="loginPassword" placeholder="*****">
                            </div>
                            <button type="submit" class="btn btn-primary"><? echo mb_convert_encoding("Giriş Yap",'ISO-8859-9','UTF-8');?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kayıt Ol Modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel"><? echo mb_convert_encoding("Kayıt Ol",'ISO-8859-9','UTF-8');?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/register">
                            <div class="form-group">
                                <label for="registerUsername"><? echo mb_convert_encoding("Kullanıcı Adı",'ISO-8859-9','UTF-8');?></label>
                                <input type="text" class="form-control" name="username" id="registerUsername" placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="registerPassword"><? echo mb_convert_encoding("Şifre",'ISO-8859-9','UTF-8');?></label>
                                <input type="password" class="form-control" name="password" id="registerPassword" placeholder="******">
                            </div>
                            <button type="submit" class="btn btn-success"><? echo mb_convert_encoding("Kayıt Ol",'ISO-8859-9','UTF-8');?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tweet İçerikleri -->
        <div class="col-md-6 offset-md-1">
            <h2 class="mb-4">Anasayfa</h2>
            <!-- Sağ Üstte Arama Kutusu -->
            <div class="search-section">
                <form class="form-inline my-2 my-lg-0" method="GET" action="/">
                    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <?php foreach ($tweets as $item): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Tweet #<?php echo $item['id']; ?></h5>
                        <p class="card-text"><?php echo mb_convert_encoding($item['content'],'ISO-8859-9','UTF-8'); ?></p>
                        <p class="card-text"><small class="text-muted"> <?php echo mb_convert_encoding("Kullanıcı ID:",'ISO-8859-9','UTF-8').$item['userId']; ?></small></p>
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
