<?php include "php/update.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="content w-100">
        <div class="log">
            <img src="CSS/images.pnc.png" width="6%">
        </div>
    </div>
    <div class="container">
        
        <form action="php/update.php" class="form"
            method="post">

            <h1>
                <li class="fa fa-user-plus display-2"></li><br>
            </h1>
            <!-- <h4 class="display-4 text-center">USERS</h4><hr><br> -->
            <?php
                if(isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                    </div>
            <?php } ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" 
                class="form-control" 
                id="name"
                name="name"
                value="<?=$row['name']?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" 
                class="form-control" 
                id="email" 
                name="email"
                value="<?=$row['email']?>">
            </div>
            <input type="text"
                    name="id"
                    value="<?=$row['id']?>"
                    hidden>
            <button type="submit" 
                    class="btn btn-primary"
                    name="update">Update</button>
                    
            <a href="read.php" class="btn btn-success">veiw</a>
        </form>
    </div>
</body>
</html>