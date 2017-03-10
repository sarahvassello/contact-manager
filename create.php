
<?php
  include 'database.php';

  $stmt = $db->prepare("INSERT INTO contacts
    (id, first, last, title, address, city, state, zip, phone, notes
      VALUES
    (:id, :first, :last, :title, :address, :city, :state, :zip, :phone, :notes)
  ");
  $stmt->execute(array(
    ':id' => $_POST['id'],
    ':first' => $_POST['first'],
    ':last' => $_POST['last'],
    ':title' => $_POST['title'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':phone' => $_POST['phone'],
    ':notes' => $_POST['notes'],
  ));
  $id = $db->lastInsertId();
  header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');
?>
