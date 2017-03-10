<?php
 include 'header.php';
?>

<div class="row col-md-6 col-md-offset-3">
<h1>Create Contact</h1>
<form method="POST" action="/create.php">
  <input type="hidden" name="id" id="contact_id" value="" />

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_first">First</label>
    <input class="form-control" type="text" name="first" id="contact_first" value="" placeholder="contact first name" />
  </div>
</div>

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_last">Last</label>
    <input class="form-control" type="text" name="last" id="contact_last" value="" placeholder="contact last name" />
  </div>
</div>

<div class="col-lg-12">
  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="contact_title" value="" placeholder="contact title" />
  </div>
</div>

<div class="col-lg-12">
  <div class="form-group">
    <label for="contact_address">Address</label>
    <input class="form-control" type="text" name="address" id="contact_address" value="" placeholder="contact address" />
  </div>
</div>

<div class="col-lg-4">
  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="contact_city" value="" placeholder="contact city" />
  </div>
</div>

<div class="col-lg-4">
  <div class="form-group">
    <label for="contact_state">State</label>
    <input class="form-control" type="text" name="state"  id="contact_state" value="" placeholder="contact state" />
  </div>
</div>

<div class="col-lg-4">
  <div class="form-group">
    <label for="contact_zip">Zip</label>
    <input class="form-control" type="text" name="zip" id="contact_zip" value="" placeholder="contact zip" />
  </div>
</div>

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_phone">Phone</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="" placeholder="contact phone" />
  </div>
</div>

<div class="col-lg-6">
  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <input class="form-control" type="text" name="notes" id="contact_notes" value="" placeholder="contact notes" />
  </div>
</div>
</div>

<button class="btn new">Create New Contact</button>
</form>

<?php
include 'footer.php';
?>
