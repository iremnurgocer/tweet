<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Kayıt Ol</title>
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">Kayıt Ol</h2>
    <form method="POST" action="/register">
        <div class="form-group">
            <label for="registerUsername">Kullanıcı Adı</label>
            <input type="text" class="form-control" name="username" id="registerUsername" placeholder="Kullanıcı Adı" required>
        </div>
        <div class="form-group">
            <label for="registerPassword">Şifre</label>
            <input type="password" class="form-control" name="password" id="registerPassword" placeholder="Şifre" required>
        </div>
        <button type="submit" class="btn btn-success">Kayıt Ol</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
