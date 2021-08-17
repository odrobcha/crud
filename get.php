<h2>
    All ponies:
</h2>
<div class="get-pony">
    <ul>
        <?php foreach ($cards as $i => $card) : ?>
            <li class="show-pony" data-name="<?php echo $card['name'] ?>">

                <?php echo $card['name'] ?>
            </li>

        <?php endforeach; ?>
    </ul>
    <img id="get-pony-img">
</div>
