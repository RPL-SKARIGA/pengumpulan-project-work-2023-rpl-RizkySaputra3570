<?php
    function finalTaskConnector() {
        define('HOST_SERVER', 'localhost');
        define('SERVER_USER', 'root');
        define('SERVER_PASSWORD', '');
        define('DATABASE_NAME', 'final_task');
        
        $connector = mysqli_connect(
            hostname: HOST_SERVER, 
            username: SERVER_USER, 
            password: SERVER_PASSWORD, 
            database: DATABASE_NAME
        );
        
        if (!$connector) {
            die("Failed to connect to database" . $connector);
        }
        return $connector;
    }
?>