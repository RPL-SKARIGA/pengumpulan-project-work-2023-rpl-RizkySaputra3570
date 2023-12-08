<?php
    function readAllUsers() {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector(); 
        $querycode = "SELECT * FROM user_tab ORDER BY user_id DESC LIMIT 1";
        $queryaction = mysqli_query($connector, $querycode);
        $numrows = mysqli_num_rows($queryaction);

        if ($numrows > 0) {
            $rows = mysqli_fetch_assoc($queryaction);
            $userid = $rows['user_id'];
            $spliterarray = str_split($userid);
            $codesplit = $spliterarray[5];
        } else {
            $codesplit = 0;
        }
        mysqli_close($connector);
        return $codesplit;
    }

    function addUser($useridinput, $usernameinput, $emailinput, $phonenumberinput, $passwordinput) {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector(); 
        $querycode = "INSERT INTO user_tab VALUES ('2500$useridinput', '$usernameinput', '$emailinput', '$phonenumberinput', md5('$passwordinput'))";
        mysqli_query($connector, $querycode);
        mysqli_close($connector);
        return $connector;
    }   

    function searchUser($usernameinput) {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector();         
        $dataarrays = [];
        $querycode = "SELECT * FROM user_tab WHERE username = '$usernameinput' ORDER BY 'user_id' DESC";
        $queryaction = mysqli_query($connector, $querycode);       
        
        if (mysqli_num_rows($queryaction) > 0) {
            while ($rows = mysqli_fetch_assoc($queryaction)) {
                $dataarrays['username'] = $rows['username'];
                $dataarrays['email'] = $rows['email'];
                $dataarrays['phone_number'] = $rows['phone_number'];
                $dataarrays['user_password'] = $rows['user_password'];
                $dataarrays['user_id'] = $rows['user_id'];
                mysqli_close($connector);
                return $dataarrays;
            }
        } else {
            mysqli_close($connector);
            return null;
        }        
    }

    function authenticateUser($usernameinput, $passwordinput) {
        $userdata = [];
        $passwordencrypt = md5($passwordinput);
        $userdata = searchUser($usernameinput);

        if ($userdata != null) {
            if ($passwordencrypt == $userdata['user_password']) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
?>