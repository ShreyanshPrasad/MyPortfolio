<?php
if(isset($_POST['FrmSubmit']) && !empty($_POST['emailId'])){

    include 'includes/connection.php';
    
    $emailId = $_POST['emailId'];

    /*$stmt = $conn->prepare("SELECT `sub_email` FROM `t_newsletter_subscription` WHERE `sub_email` = ?");
    $stmt -> bind_param("s", $emailId);

    $result = $stmt -> execute();*/

    $query = "SELECT `sub_email` FROM `t_newsletter_subscription` WHERE `sub_email` = '$emailId'";
    $conn->query($query);

    if($conn->affected_rows > 0)
        echo 'found';
    else
        echo 'notFound';

    $conn->close();
}
?>