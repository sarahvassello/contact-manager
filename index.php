<?php

    $db = new PDO('mysql:host=localhost;dbname=contactManager;charset=utf8mb4', 'root', 'root');
    $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello world</title>

        <!-- mobile view -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/style.css">


  </head>
  <body>
    <div class="container">

     <div class="row">


    <h1>All Tasks <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
    <table class="table table-hover table-striped table-responsive">
    <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Title</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>ZIP</th>
    <th> Number</th>
    <th>Notes</th>
  </thead>
  <tbody>
   <?php foreach($contacts as $contact) : ?>
   <tr>
     <td><a href="/edit.php?id=<?= $contacts['ID']; ?>"><?= $contact['ID']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['First Name']; ?>"><?= $contact['First Name']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['Last Name']; ?>"><?= $contact['Last Name']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['Title']; ?>"><?= $contact['Title']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['Address']; ?>"><?= $contact['Address']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['City']; ?>"><?= $contact['City']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['State']; ?>"><?= $contact['State']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['ZIP']; ?>"><?= $contact['ZIP']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['Phone ']; ?>"><?= $contact['Phone']; ?></a></td>
      <td><a href="/edit.php?id=<?= $contacts['Notes']; ?>"><?= $contact['Notes']; ?></a></td>



   </tr>
     <?php endforeach; ?>
   </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
