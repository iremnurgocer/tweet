<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Giriş Yap</title>
</head>
<body>
<div class="container">
    <h1 class="home-title">Giriş Yap</h1>
    <form method="POST" action="/login">
        <div class="form-group">
            <label for="username">Kullanıcı Adı</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Şifre</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Giriş Yap</button>
    </form>
</div>
</body>
</html>
