<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="">

        <h2>LOGIN</h2>
        <?php if  (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

         <label>Nama</label>
     	<input type="text" name="nama" placeholder="nama"><br>

     	<label>Katalaluan</label>
     	<input type="katalaluan" name="katalaluan" placeholder="kataluan"><br>

     	<button type="submit"><a href="create.php"> Login</button></a> 

    </form>
</body>
</html>