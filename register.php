<?php
    ini_set('display_errors','1');
    require_once('./layout/header.php');
    require_once('./db.php');
    // print_r($_POST);
    $name = '';
    $email = '';
    $password = '';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        


    };

?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 vh-100 d-flex align-items-center">
                <div class="card w-100 shadow">
                    <div class="card-header">
                        <h4 class="card-title">Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method='post'>
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name='name' id='name' value="<?php echo $name ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name='email' id='email' value="<?php echo $email ?>"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>

                                <input type="text" class="form-control" name='password' id='password' value="<?php echo $password ?>"/>
                                    
                            </div>
                            <?php
                                if(isset($_POST['submit'])){
                                    if(empty($name) || empty($email) || empty($password)){
                                        echo '<p class="text-danger">Your field is empty!!!</p>';
                                    }else{
                                        $stmt=$db->prepare("INSERT INTO userregister(name,email,password)VALUES('$name','$email','$password')");
                                        $result=$stmt->execute();
                                        header('location:index.php');
                                    }
                                }
                            ?>
                            <button type='submit' class="btn btn-block btn-primary" name='submit'>Register</button>
                            <p class="mt-2">
                                Already have an account? Login <a href="index.php">here</a>
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