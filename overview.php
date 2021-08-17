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
<div class="message">
    <?php echo $cardRepository->message?>
</div>


<form method="post">
    <label for="findPony">Find pony by name</label>
    <input type="text" id="findPony" name="findPony"/>
    <button type="submit">Find</button>
</form>
<?php foreach ($foundPonies as $foundPony) : ?>
    <div>
        <?php echo $foundPony['name']?>
    </div>

<?php endforeach; ?>
<br>
<br>
<form method="post" class="name-form">
    <label for="ponyName">Enter  new pony name</label>
    <input type="text" id="ponyName" name="ponyName"/>
    <button type="submit">Send</button>
</form>
<br>
<br>
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
<br>
<br>
<div>
    <div>
        <ul>
            <?php foreach ($cards as $card) : ?>
                <li class='pony-item' id="<?php echo $card['id']?>" data-name="<?php echo $card['name'] ?>">

                    <?php echo $card['name'] ?>
                </li>

            <?php endforeach; ?>
        </ul>

    </div>
</div>
<div id="updatePony">

</div>

<script src="script.js"></script>
</body>
</html>