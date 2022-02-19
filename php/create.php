<?php
if (isset($_POST['create'])) {
    include "../db_con.php";
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    
    $user_data = 'name' . $name . 'email' . $email;

    if (empty($name)) {
        header("Location: ../start.php?error=Name is required&$user_data");
    }elseif (empty($email)) {
        header("Location: ../start.php?error=Email is required&$user_data");
    }else {
        $sql = "INSERT INTO users(name, email)
                VALUES('$name', '$email')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../update.php?error=unknow error required& $user_data");
        }else {
            header("Location: ../start.php?error=unknow error required& $user_data");
        }
    }
}
    
?>