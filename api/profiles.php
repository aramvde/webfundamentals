<?php
    include "../database/index.php";

    $database = new Database();
    $profiles = $database->getQueryFetchAll("SELECT * FROM sorting;");
    echo json_encode($profiles);