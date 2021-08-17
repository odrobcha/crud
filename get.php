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
</div>
