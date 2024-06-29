<?php 
                                    if(isset($_POST['lgnbtn'])){
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $stmt = $db->prepare("SELECT * FROM userregister WHERE email ='$email' AND password = '$password' ");
                                        $stmt->execute();
                                        $users = $stmt->fetchObject();


                                        if(empty($email) || empty($password)){
                                            $error = 'Your field is empty';
                                            echo $error;
                                        }elseif($users){
                                            // header('location:home.php');
                                            $_SESSION['email'] = $email;
                                            $_SESSION['password'] = $password;
                                            $_SESSION['userid']= $users->id;
                                            header('location:home.php');


                                        }elseif(!$users){
                                            $error = 'Your email or password is wrong!! Try Again!!';
                                            echo $error;
                                        }
                                    }




                                ?>