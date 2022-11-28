<?php
if (empty($_GET)) {
    echo 'Compila i campi';
} else {
    $acces_msg = '';
    $user_name = $_GET['userName'];
    $user_email = $_GET['userEmail'];
    $user_age = $_GET['userAge'];
    /* echo $user_name . $user_email . $user_age; */
    /* var_dump([strlen($user_name) > 3, str_contains($user_email, "."), is_numeric(intval($user_age))]); */
    if (strlen($user_name) > 3 && (str_contains($user_email, "@") && str_contains($user_email, ".")) && is_numeric(intval($user_age))) {
        $acces_msg = 'Accesso riuscito';
    } else {
        $acces_msg = 'Accesso negato';
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Verify Acces</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="get">
            <div class="mb-3">
                <label for="userName" class="form-label">Name</label>
                <input type="text" name="userName" id="userName" class="form-control" placeholder="ex: Mario Rossi" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="userEmail" class="form-label">E-mail</label>
                <input type="text" name="userEmail" id="userEmail" class="form-control" placeholder="user@example.com" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
            <div class="number">
                <label for="userAge"></label>
                <input type="number" name="userAge" id="userAge">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        <?php if (isset($acces_msg)) : ?>
            <span><?= $acces_msg ?></span>
        <?php endif ?>

    </div>

</body>

</html>