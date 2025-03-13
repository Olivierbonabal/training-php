<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion 🔑</title>

    <!--CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form
            class="p-5 rounded-5 shadow"
            style="max-width: 30rem; width: 100%"
            method="post"
            action="php/auth.php">

            <h1 class="text-center display-4 pb-5">connexion</h1>

            <?php
            if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= htmlspecialchars(string: $_GET['error']); ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Votre adresse Email </label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="exampleInputPassword1">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">se souvenir de moi</label>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary">Se connecter</button>

                <a href="index.php" class="btn btn-outline-secondary">Accueil</a>
            </div>

        </form>
    </div>
</body>

</html>