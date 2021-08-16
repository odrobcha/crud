<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of MyLittlePony cards</title>
</head>
<body>

<h1>Goodcard - track your collection of MyLittlePony cards</h1>
<form method="post">
    <ul>
        <?php foreach ($cards as $i => $card) : ?>
            <li>
                <input type="checkbox"
                       value="<?php echo $card['id']?>"
                       name="delete_pony[]"
                       id="<?php echo $card['id']?>" >
                <?= $card['name'] ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <button type="submit">Remove Selected Items?</button>
</form>

<a href="update.php">Update Exiting Name</a>

</body>
</html>