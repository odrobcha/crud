<h2>
    Delete Pony Name
</h2>
<form method="post">
    <ul class="delete-pony">
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
