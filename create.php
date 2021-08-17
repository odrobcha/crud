<h2>
    Create Pony Name
</h2>
<form method="post" class="name-form">
    <label for="ponyName">Enter  new pony name</label>
    <input type="text" id="ponyName" name="ponyName"/>
    <button type="submit">Send</button>
</form>
<div class="error">
    <?php echo $cardRepository->error?>

</div>
<div class="message">
    <?php echo $cardRepository->message?>
</div>
<br>
