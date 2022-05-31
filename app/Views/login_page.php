<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url() . '/'; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() . '/'; ?>css/sidebars.css" rel="stylesheet">
    <link href="<?php echo base_url() . '/'; ?>css/signin.css" rel="stylesheet">

    <title>E-Journal</title>
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="<?php echo base_url() . '/index.php/Authenticate/auth'; ?>" method="post" role="form">
            <h2 class="mb-4 mt-5 fw-bold">LOGIN PAGE</h2>
            <h3 class="h3 mb-3 fw-normal">Please sign in</h3>

            <div class="form-floating">
                <input type="email" class="form-control" id="username" placeholder="name@example.com" required>
                <label for="username">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <div class="fs-6 mt-2 fw-light">
                <a href="<?php echo base_url() . '/'; ?>index.php/current" class="link-primary">Forgot Password?</a>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>

        </form>
    </main>
</body>