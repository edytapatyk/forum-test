<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $age = htmlspecialchars($_POST["age"]);
  $skin = htmlspecialchars($_POST["skin_type"]);
  $notes = htmlspecialchars($_POST["notes"]);

  $concerns = isset($_POST["concerns"]) ? implode(", ", $_POST["concerns"]) : "None";

  $data = "Name: $name\nEmail: $email\nPhone: $phone\nAge: $age\nSkin Type: $skin\nConcerns: $concerns\nNotes: $notes\n---\n";

  file_put_contents("submissions.txt", $data, FILE_APPEND);

  echo "<h2>Thank you for your submission!</h2>";
} else {
  echo "Invalid request.";
}
?>
