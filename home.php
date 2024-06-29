<?php
    ini_set('display-errors',1);
    session_start();

    $authid = $_SESSION['userid'];
    
    require_once('./layout/header.php');
    require_once('./db.php');

    if(!isset($_SESSION['email']) && !isset($_SESSION['password'])){
        echo "<script>location.href='index.php'</script>";
    };

    require_once('./notecrud/create.php');
    require_once('./notecrud/read.php');
    require_once('./notecrud/delete.php');
?>

    <nav class='navbar navbar-expand-md bg-secondary d-flex justify-content-around text-light'>
        <h5 class='nav-title'>PHP-NOTE user1</h5>
        <form action="" method='post'>
            <button class='nav-link btn btn-outline-dark p-2' name='lobtn' onclick='return confirm("Are you sure to log out?")'>Log Out
                <?php 
                    
                    if(isset($_POST['lobtn'])){
                        session_destroy();
                        echo "<script>location.href='index.php'</script>";
                    };
                ?>
            </button>
        </form>
    </nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <h5>Create Notes</h5>
                <form action="" method='post'>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name='title' id=''>
                    </div>
                    <div class="mb-3">
                        <label for="">Body</label>
                        <textarea name="body" rows="5" class="form-control" ></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn w-100 btn-primary" name='savebtn'>Save</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">

                <div class="row g-2">
                <?php
                    foreach($notes as $note):
                       
                ?>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="card card-body">
                            <h6><?php echo $note->title?></h6>
                            <p><?php echo $note->body?></p>
                            <div class="d-flex justify-content-end dropdown">
                                <button class="border-0 bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="home.php?del_id=<?php echo $note->id ?>">Delete</a></li>
                                    <li><a class="dropdown-item" href="#">Copy</a></li>
                                    <li><a class="dropdown-item" href="#">Share</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>

    <?php
        require_once('./layout/footer.php');
    ?>

</html>