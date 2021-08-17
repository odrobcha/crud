<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of MyLittlePony cards</title>
    <link href = 'styles.css ' rel="stylesheet"/>
</head>
<body>

<h1>Goodcard - track your collection of MyLittlePony cards</h1>

<h2>
    All ponies:
</h2>
<div>
    <ul>
        <?php foreach ($cards as $i => $card) : ?>
            <li>

                <?php echo $card['name'] ?>
            </li>

        <?php endforeach; ?>
    </ul>
</div
<br>

<h2>
    Find Pony by Name
</h2>
<form method="post">
    <label for="findPony">Type the name: </label>
    <input type="text" id="findPony" name="findPony"/>
    <button type="submit">Find</button>
</form>
<?php foreach ($foundPonies as $foundPony) : ?>
    <div>
        <?php echo $foundPony['name']?>
    </div>

<?php endforeach; ?>
<br>

<h2>
    Create Pony Name
</h2>
<form method="post" class="name-form">
    <label for="ponyName">Enter  new pony name</label>
    <input type="text" id="ponyName" name="ponyName"/>
    <button type="submit">Send</button>
</form>
<div class="message">
    <?php echo $cardRepository->message?>
</div>
<br>

<h2>
    Delete Pony Name
</h2>
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
    <button type="submit">Remove Selected Items</button>
</form>
<br>

<div >
    <h2>
        Update Pony Name
    </h2>
    <h3>
        Click on Pony, you want to update.
    </h3>
    <div class="update-pony">
        <ul>
            <?php foreach ($cards as $card) : ?>
                <li class='pony-item' id="<?php echo $card['id']?>" data-name="<?php echo $card['name'] ?>">

                    <?php echo $card['name'] ?>
                </li>

            <?php endforeach; ?>
        </ul>
        <div id="updatePony">
    </div>

</div>


</div>

<script src="script.js"></script>
</body>
</html>