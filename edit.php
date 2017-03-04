<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Post</title>
  </head>
  <body>
    <h1>Edit Post</h1>

    <form method="POST" action="/update.php">
      <input type="hidden" name="ID" id="task_id" value="<?= $contact['ID']; ?>" />

      <div class="row">
      <div class="form-group col-md-4">
        <label for="task_title">First Name</label>
        <input class="form-control" type="text" name="First Name" id="task_title" value="<?= $contact['First Name']; ?>" />
      </div>

      <div class="form-group col-md-4">
        <label for="task_title">Last Name</label>
        <input class="form-control" type="text" name="title" id="task_title" value="<?= $contact['Last Name']; ?>" />
      </div>
    </div>
      <div class="form-group">
        <label for="task_description">Description</label>
        <textarea class="form-control" name="description" id="task_description"><?= $contact['description']; ?></textarea>
      </div>

      <button class="btn btn-success">Save Task</button>
    </form>
  </body>
</html>
