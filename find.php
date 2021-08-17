<?php $action = 'find'; ?>
<h2>
    Find Pony by Name
</h2>
<form method="post">
    <label for="findPony">Type the name: </label>
    <input type="text" id="findPony" name="findPony"/>
    <button type="submit">Find</button>
</form>
<div class="found-ponies">
    <ul>
    <?php foreach ($foundPonies as $foundPony) : ?>

            <li class="find-pony" data-name="<?php echo $foundPony['name'] ?>">
                <?php echo $foundPony['name']?>
            </li>



    <?php endforeach; ?>
    </ul>
    <img id="find-pony-img">
</div>

