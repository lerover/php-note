<?php

    $stmt = $db->prepare("SELECT * FROM notes WHERE user_id LIKE $authid");
    $stmt->execute();
    $notes = $stmt->fetchAll(PDO::FETCH_OBJ);



?>