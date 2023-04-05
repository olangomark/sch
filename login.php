<?php
session_start();

include('dist/includes/dbcon.php');

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = $con->prepare("SELECT * FROM member WHERE username = ? AND password = ?");
    $query->bind_param("ss", $username, $password);
    $query->execute();
    $result = $query->get_result();
    
    if($result->num_rows == 0) {
        echo "<script type='text/javascript'>alert('Invalid Username or Password!');
              document.location='index.php'</script>";
    } else {
        $row = $result->fetch_assoc();
        $name = $row['member_salut'] . " " . $row['member_first'] . " " . $row['member_last'];
        $id = $row['member_id'];
        $status = $row['status'];
        
        $settings_query = $con->prepare("SELECT * FROM settings WHERE status = 'active'");
        $settings_query->execute();
        $settings_result = $settings_query->get_result();
        $settings_row = $settings_result->fetch_assoc();
        
        $_SESSION['settings'] = $settings_row['settings_id'];
        $_SESSION['term'] = $settings_row['term'];
        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['type'] = $status;
        
        if ($status == 'admin') {
            echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
        } else {
            echo "<script type='text/javascript'>document.location='pages/faculty_home.php'</script>";
        }
    }
}
?>
