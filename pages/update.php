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
