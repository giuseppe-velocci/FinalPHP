<?php $this->layout('layout', ['title' => 'Add Article']) ?>

<form action="" method="POST">
    Title:<br>
    <input type="text" name="title"><br>
    Content:<br>
    <textarea rows="20" cols="50" name="content" placeholder="Insert text here"></textarea><br>
    Author:<br>
    <input type="text" name="author"><br>
    <input type="submit" value="Confirm">
</form>