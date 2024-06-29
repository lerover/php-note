<?php

    if(isset( $_GET['del_id'])){
        $noteid = $_GET['del_id'];
        $stmt = $db->prepare("DELETE FROM notes WHERE id = $noteid");
        $result = $stmt->execute();
        if($result){
           echo "<script>location.href='home.php'</script>";
        };

    }



?>