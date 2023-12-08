<?php
    function readAllAdmin() {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector(); 
        $code = "SELECT * FROM admin_tab ORDER BY admin_id DESC LIMIT 1";
        $action = mysqli_query($connector, $code);
        $adminrows = mysqli_num_rows($action);       
        
        if ($adminrows > 0) {
            $assocrows = mysqli_fetch_assoc($action);
            $adminid = $assocrows['admin_id'];
            $rowsplit = str_split($adminid);
            $split = $rowsplit[5];
        } else {
            $split = 0;
        }
        mysqli_close($connector);
        return $split;        
    }

    function addAdmin($adminidinput, $admininput, $adminpasswordinput) {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector(); 
        $code = "INSERT INTO admin_tab VALUES ('20400$adminidinput', '$admininput', md5('$adminpasswordinput'))";
        mysqli_query($connector, $code);
        mysqli_close($connector);
        return $connector;
    }       

   function searchAdmin($adminnameinput) {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector();         
        $dataarrays = [];
        $code = "SELECT * FROM admin_tab WHERE admin_name = '$adminnameinput' ORDER BY 'admin_id' DESC";
        $action = mysqli_query($connector, $code);       
        
        if (mysqli_num_rows($action) > 0) {
            while ($assocrows = mysqli_fetch_assoc($action)) {
                $dataarrays['admin_name'] = $assocrows['admin_name'];
                $dataarrays['admin_password'] = $assocrows['admin_password'];
                $dataarrays['admin_id'] = $assocrows['admin_id'];
                mysqli_close($connector);
                return $dataarrays;
            }
        } else {
            mysqli_close($connector);
            return null;
        }        
    }

    function authenticateAdmin($adminnameinput, $adminpasswordinput) {
        $admindata = [];
        $passwordencrypt = md5($adminpasswordinput);
        $admindata = searchAdmin($adminnameinput);

        if ($admindata != null) {
            if ($passwordencrypt == $admindata['admin_password']) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }    
?>