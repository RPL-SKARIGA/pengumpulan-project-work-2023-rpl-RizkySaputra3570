<?php
    function readStuff() {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $arrays = [];
        $connector = finalTaskConnector();
        $stuffrows = mysqli_query($connector, "SELECT * FROM stuff_to_sale");
        $i = 0;

        while ($row = mysqli_fetch_assoc($stuffrows)) {
            $arrays[$i]['stuff_code'] = $row['stuff_code'];
            $arrays[$i]['stuff_name'] = $row['stuff_name'];
            $arrays[$i]['stuff_price'] = $row['stuff_price'];
            $arrays[$i]['stuff_release_year'] = $row['stuff_release_year'];
            $arrays[$i]['stuff_description'] = $row['stuff_description'];
            $arrays[$i]['stuff_proof_image'] = $row['stuff_proof_image'];
            $i++;
        }
        mysqli_close($connector);
        return $arrays;
    }

    function addStuff($stuffcode, $stuffname, $stuffprice, $stuffyear, $stuffdesc, $stuffimage) {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector();
        mysqli_query(
            $connector,
            "INSERT INTO stuff_to_sale VALUES ('1202$stuffcode', '$stuffname', '$stuffprice', '$stuffyear', '$stuffdesc', '$stuffimage')"
        );
        mysqli_close($connector);
        return $connector;
    }

    function deleteStuff($stuffcode) {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector();
        mysqli_query($connector,"DELETE FROM stuff_to_sale WHERE stuff_code = '1202$stuffcode'");
        mysqli_close($connector);
        return $connector;        
    }

    function searchStuff($stuffname) {
        include_once("../connection-handler/finalTaskDBConnectionHandler.php");

        $connector = finalTaskConnector();    
        $arrays = [];
        $code = "SELECT * FROM stuff_to_sale WHERE stuff_name = '$stuffname' ORDER BY stuff_code DESC";
        $action = mysqli_query($connector, $code);
        
        if (mysqli_num_rows($action) > 0) {
            while ($assocrows = mysqli_fetch_assoc($action)) {
                $arrays['stuff_name'] = $assocrows['stuff_name'];
                $arrays['stuff_price'] = $assocrows['stuff_price'];
                $arrays['stuff_release_year'] = $assocrows['stuff_release_year'];
                $arrays['stuff_description'] = $assocrows['stuff_description'];
                $arrays['stuff_proof_image'] = $assocrows['stuff_proof_image'];
                $arrays['stuff_code'] = $assocrows['stuff_code'];
                mysqli_close($connector);
                return $arrays;
            }
        } else {
            mysqli_close($connector);
            return null;            
        }
    }
?>