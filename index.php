<?php
    $conn = mysqli_connect( 'svc.sel4.cloudtype.app', 'root', 'root', 'testdb' );
    $sql = "SELECT * FROM test_table LIMIT 5;";
    $result = mysqli_query( $conn, $sql );
    
    while( $row = mysqli_fetch_array( $result ) ) {
        echo
        ''.$row['address'].';'.$row['lat'].';'.$row['lng'].':';
      }
?>
