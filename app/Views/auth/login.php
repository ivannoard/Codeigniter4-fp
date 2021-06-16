<?php
$username = [
    'id' => 'username',
    'name' => 'username',
    'placeholder' => 'username',
    'value' => null,
    'class' => 'form-control'
];
$password = [
    'id' => 'password',
    'name' => 'password',
    'placeholder' => 'password',
    'value' => null,
    'class' => 'form-control'
];

$session = session();
$errors = $session->getFlashdata('errors');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <?php if ($errors != null) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <h4>Terjadi Kesalahan</h4>
                                            <?php foreach ($errors as $err) {
                                                echo $err . '</br>';
                                            } ?>
                                        </div>
                                    <?php endif ?>
                                    <?= form_open('auth/login') ?>
                                    <div class="form-floating mb-3">
                                        <?= form_input($username) ?>
                                        <?= form_label('Username', 'username') ?>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <?= form_password($password) ?>
                                        <?= form_label('Password', 'password') ?>
                                    </div>

                                    <div class="text-right">
                                        <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
                                    </div>

                                    <div class="text-center">
                                        <a href="<?= site_url('auth/register') ?>">Belum punya akun?</a>
                                    </div>
                                    <?= form_close() ?>
                                    <!-- <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0 text-right">

                                            <a class="btn btn-primary" href="index.html">Login</a>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>