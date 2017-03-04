<?php

    include 'header.php';
    include 'database.php';
    
    $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact Manager</title>
  </head>
  <body>
    <h1>Contact List <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
    <table class="table table-hover table-striped table-responsive">
    <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City</th>
    <th>State</th>
  </thead>
  <tbody>
   <?php foreach($contacts as $contact) : ?>
   <tr>
     <td><a href="/edit.php?id=<?= $contacts['ID']; ?>"><?= $contact['ID']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['First Name']; ?>"><?= $contact['First Name']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['Last Name']; ?>"><?= $contact['Last Name']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['City']; ?>"><?= $contact['City']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['State']; ?>"><?= $contact['State']; ?></a></td>



   </tr>
     <?php endforeach; ?>
   </tbody>
</table>
<button type="button" class="btn btn-primary">Add New Contact</button>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
