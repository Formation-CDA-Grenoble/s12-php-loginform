<?php include('templates/head.tpl.php'); ?>

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