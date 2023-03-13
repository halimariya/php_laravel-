<?php
/*Write a PHP script that:
Validates the form inputs (ensure that all fields are filled out and the email is in a valid format)

Saves the profile picture to the server in a directory named "uploads" with a unique filename.

Adds the current date and time to the filename of the profile picture before saving it to the server.

Saves the user's name, email, and profile picture filename to a CSV file named "users.csv".
Starts a new session and sets a cookie with the user's name.
Create a new HTML page that displays the contents of the "users.csv" file in a table.
 */

session_start();
define( 'UPLOAD_FOLDER', 'profile_image/' );
function uniqueFileName( $fileExtension ) {
    $timestemp = ( new DateTime() )->getTimestamp();
    $randomNumber = mt_rand( 100, 999 );
    return $timestemp . $randomNumber . $fileExtension;

}

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ( empty( $name ) || empty( $email ) || empty( $password ) ) {
        die( 'All filds are requied.' );
    }

    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        die( 'Invalid email address.' );
    }

    if ( $_FILES['profile_picture']['Error'] != UPLOAD_ERR_OK ) {
        die( 'Error file upload.' );
    }

    $fileExtension = pathinfo( $_FILES['profile_picture']['name'], PATHINFO_EXTENSION );
    if ( !in_array( $fileExtension, ['jpg', 'png', 'gif'] ) ) {
        die( 'Only accept jpg, png, gif requied.' );

    }
    // save profile image
    $fileName = uniqueFileName( $fileExtension );
    $uploadPath = UPLOAD_FOLDER . $fileName;
    if ( !move_uploaded_file( $_FILES['profile_picture']['tmp_name'], $uploadPath ) ) {
        die( 'Error saving file.' );
    }
    $_SESSION['name'] = $name;
    setcookie( 'name', $name, time() + ( 86400 * 10 ), '/' ); //24*60h*60s

    header( 'Location: success.php' );
    exit;

}
