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
    <div class="hill">
  </div>
  <div class="row col-md-6 col-md-offset-3">
    <h1>Hip-hop in the Hill</h1>
    <p>
      In an effort to get more students involved in the Ackland Art Museum, we are starting
      a new initiative: Hip-hop in the Hill, a series of hip-hop concerts held in concert with
      our permanent collection. To plan for the 2019-2020 budget, here are a few potential artists.
    </p>
    <h1>Potential artists <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
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
     <td><a href="/edit.php?id=<?= $contacts['id']; ?>"><?= $contact['id']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['first']; ?>"><?= $contact['first']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['last']; ?>"><?= $contact['last']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['city']; ?>"><?= $contact['city']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['state']; ?>"><?= $contact['state']; ?></a></td>
   </tr>
     <?php endforeach; ?>
   </tbody>
</table>
</div>

<?php
include 'footer.php';
?>
