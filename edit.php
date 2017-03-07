<?php
    include 'header.php';
    include 'database.php';

    $id = $_GET['ID'];

    $stmt = $db->prepare('SELECT * FROM contacts WHERE ID= :ID LIMIT 1');
    $stmt->bindParam(':id', $id);


  ?>
    <h1>Edit Post</h1>

    <form method="POST" action="/update.php">
      <input type="hidden" name="ID" id="contact_ID" value="<?= $contact['ID']; ?>" />

      <div class="row">
      <div class="form-group col-md-6">
        <label for="contact_first">First Name</label>
        <input class="form-control" type="text" name="First Name" id="contact_first" value="<?= $contact['First Name']; ?>" />
      </div>

      <div class="form-group col-md-6">
        <label for="contact_last">Last Name</label>
        <input class="form-control" type="text" name="Last Name" id="contact_last" value="<?= $contact['Last Name']; ?>" />
      </div>
    </div>
      <div class="form-group">
        <label for="contact_address">Address</label>
        <input class="form-control" type="text" name="Address" id="contact_address" value="<?= $contact['Address']; ?>" />
      </div>
      <div class="row">
      <div class="form-group col-md-4">
        <label for="contact_city">City</label>
        <input class="form-control" type="text" name="First Name" id="contact_city" value="<?= $contact['City']; ?>" />
      </div>

      <div class="form-group col-md-4">
        <label for="contact_state">State</label>
        <input class="form-control" type="text" name="State" id="contact_state" value="<?= $contact['State']; ?>" />
      </div>
      <div class="form-group col-md-4">
        <label for="contact_ZIP">ZIP</label>
        <input class="form-control" type="text" name="ZIP" id="contact_ZIP" value="<?= $contact['ZIP']; ?>" />
      </div>
    </div>
    <div class="form-group">
      <label for="contact_phone">Phone Number</label>
      <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['Phone']; ?>" />
    </div>
      <div class="form-group">
        <label for="contact_notes">Notes</label>
        <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['Notes']; ?></textarea>
      </div>

      <button class="btn btn-success">Save Task</button>
    </form>
