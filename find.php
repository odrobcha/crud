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
    <?php foreach ($foundPonies as $foundPony) : ?>
        <div>
            <?php echo $foundPony['name']?>
        </div>

    <?php endforeach; ?>
</div>

