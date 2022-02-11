<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 8</title>
</head>
<body>
    <h3>Lecture 8 || PHP and MySQL</h3>
    <?php include 'dbConnection.php';
        $selectQuery = "SELECT `user_name`, `email` FROM `users`";
        $userInfo = mysqli_query($dbConnection, $selectQuery);
    ?>
    <table>
        <tr>
            <th>User Name</th>
            <th>Email</th>
        </tr>
        <?php while($user = mysqli_fetch_assoc($userInfo)) { ?>
        <tr>
            <td><?php echo $user["user_name"];?></td>
            <td><?php echo $user["email"];?></td>
        </tr>
    <?php } ?>
    </table>

    <?php mysqli_close($dbConnection); ?>
</body>
</html>