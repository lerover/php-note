<?php
    if(isset($_POST['savebtn'])){
        $title = $_POST['title'];
        $body = $_POST['body'];
          



        $stmt = $db->prepare("INSERT INTO notes(title,body,user_id) VALUES('$title','$body',$authid)");
        $result = $stmt->execute();

        if($result){
            echo "<script>location.href='home.php'</script>";
        }else{
            echo "Error!!";
        };

    }
?>