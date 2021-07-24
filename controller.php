<?php
        

        $path = mysqli_connect("localhost", "root");
        mysqli_query($path, "USE chida");
        $result = mysqli_query($path, "select email, password from client");
        
        $temp = array();

        while ($tab = mysqli_fetch_row($result)){
                
                $temp = $tab[0];

        }
?>