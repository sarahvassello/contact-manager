<?php
    include 'header.php';
    include 'database.php';

    $id = $_GET['id'];

    $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>
  <?php if (array_key_exists('updated', $_GET)) : ?>
  <div class="alert alert-success">
    <p><strong>Update successful!</strong> Your contact was updated.</p>
  </div>
  <?php endif; ?>

  <?php if (array_key_exists('created', $_GET)) : ?>
  <div class="alert alert-info">
    <p><strong>Contact created!</strong> Your contact was successfully created.</p>
  </div>
  <?php endif; ?>
  
  <div class="row col-md-6 col-md-offset-3">

    <h1>Edit Post</h1>

    <form method="POST" action="/update.php">
      <input type="hidden" name="ID" id="contact_ID" value="<?= $contact['id']; ?>" />

      <div class="row">
      <div class="form-group col-md-6">
        <label for="contact_first">First Name</label>
        <input class="form-control" type="text" name="First Name" id="contact_first" value="<?= $contact['first']; ?>" />
      </div>

      <div class="form-group col-md-6">
        <label for="contact_last">Last Name</label>
        <input class="form-control" type="text" name="Last Name" id="contact_last" value="<?= $contact['last']; ?>" />
      </div>
    </div>
      <div class="form-group">
        <label for="contact_address">Address</label>
        <input class="form-control" type="text" name="Address" id="contact_address" value="<?= $contact['address']; ?>" />
      </div>
      <div class="row">
      <div class="form-group col-md-4">
        <label for="contact_city">City</label>
        <input class="form-control" type="text" name="First Name" id="contact_city" value="<?= $contact['city']; ?>" />
      </div>

      <div class="form-group col-md-4">
        <label for="contact_state">State</label>
        <input class="form-control" type="text" name="State" id="contact_state" value="<?= $contact['state']; ?>" />
      </div>
      <div class="form-group col-md-4">
        <label for="contact_ZIP">ZIP</label>
        <input class="form-control" type="text" name="ZIP" id="contact_ZIP" value="<?= $contact['zip']; ?>" />
      </div>
    </div>
    <div class="form-group">
      <label for="contact_phone">Phone Number</label>
      <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
    </div>
      <div class="form-group">
        <label for="contact_notes">Notes</label>
        <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['notes']; ?></textarea>
      </div>

      <button class="btn btn-success">Save Task</button>
    </form>

<?php
    include 'footer.php';
 ?>
