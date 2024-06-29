<?php
    session_start();
    require_once('./db.php');
    $error = '';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 vh-100 d-flex align-items-center">
                <div class="card w-100 shadow">
                    <div class="card-header">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method='post'>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name='email' required/>
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="text" class="form-control" name='password' required/>
                            </div>

                            <p class='text-danger'>
                                <?php
                                    require_once('./crud/create.php');
                                ?>
                            </p>

                            <button class="btn btn-block btn-primary" type='submit' name='lgnbtn' id=''>Login</button>
                            <p class="mt-2">
                                Don't have an account? Register
                                <a href="register.php">here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>