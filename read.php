<?php include "php/read.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="content w-100">
        <div class="log">
            <img src="CSS/images.pnc.png" width="6%">
        </div>
    </div>
    <div class="container">
        <div class="box w-100">
            <h4 class="display-5 text-center text-bolder"></h4><hr>
            <?php if (mysqli_num_rows($result)) { ?>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i = 0;
                        while($rows = mysqli_fetch_assoc($result)) {
                            $i++;
                    ?>
                        <tr>
                            <th scope="row"><?=$i?></th>
                            <td><?=$rows['name']?></td>
                            <td><?php echo $rows['email']; ?></td>
                            <td>
                                <a href="update.php?id=<?=$rows['id']?>"
                                class="btn btn-success">Update</a>

                                <a href="php/delete.php?id=<?=$rows['id']?>"
                                class="btn btn-danger">Delete</a>
                            </td>   
                        </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
            <!-- d-flex justify-content-between -->
            <div class="link-right">
                <a href="index.php"><button type="button" class="btn btn-primary mr-3">back</button></a>
                <a href="start.php"class=" link-right link-danger btn btn-primary">Create</a>
              
            </div>
            
        </div>
    </div>
</body>
</html>