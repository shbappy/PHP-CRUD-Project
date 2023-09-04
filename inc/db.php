
<?php


 $dbName = "ssb457";
 $dbUser = "root";
 $dbPass = "";
 $dbHost = "localhost";

 //mysqli_connect ---- ai function er kaaj holo (mysql er sathe )database er sathe connect kora.  er vitore 4 ta para meter thake
 


 $db = mysqli_connect( $dbHost, $dbUser, $dbPass, $dbName,);

 if ( $db ){
    //echo "DataBase Connected";
 }
 else{
    die ( "Connection Error. " . mysqli_error($db) );
 }

////die   kothay error ache seta check korar jnno use hoy ---server a ebabe bolte hobe
/// die function er pore    mysqli_error() fuction ta dite hoye jate dekha jay ja kon ta error hocce
?>