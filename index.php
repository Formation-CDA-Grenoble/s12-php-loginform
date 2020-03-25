<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <?php if (isset($_COOKIE['USERNAME'])): ?>
            <div>
                Bonjour <?php echo $_COOKIE['USERNAME'] ?>!
            </div>
            <form method="post" action="logout.php">
                <button type="submit" class="btn btn-secondary">
                    Se déconnecter
                </button>
            </form>
        <?php else: ?>
            <a href="login-form.php" class="btn btn-primary">
                Se connecter
            </a>
        <?php endif; ?>
    </div>

</body>
</html>