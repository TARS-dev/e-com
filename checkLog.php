<?php

if ( isset( $_POST['username'] ) ) {
    //connection
    include( 'conDB.php' );
    //รับค่า user & password
    session_start();
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    //query
    $sql = "SELECT * FROM user Where Username='".$Username."' and Password='".$Password."' ";
    

    $result = mysqli_query( $con, $sql );

    if ( mysqli_num_rows( $result ) == 1 ) {
        $row = mysqli_fetch_array( $result );
        $_SESSION['check'] = true;
        $_SESSION['UserID'] = $row['user_id'];
        $_SESSION['User'] = $row['username'];
        $_SESSION['pass'] = $row['password'];
        $_SESSION['Userlevel'] = $row['status'];
        

        if ( $_SESSION['Userlevel'] == 2 and $_SESSION['check'] == true ) {
            Header( 'Location: index.php' );
        }

        if ( $_SESSION['Userlevel'] == 1 and $_SESSION['check'] == true ) {
            //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
            echo 'alert(\'fail\')';
            Header( 'Location: store.php' );

        }

    } else {
        echo '<script>';
        echo 'alert(\' user หรือ  password ไม่ถูกต้อง\');';

        echo 'window.history.back()';
        echo '</script>';

    }

} else {

    Header( 'Location: form.php' );
    //user & password incorrect back to login again

}
?>