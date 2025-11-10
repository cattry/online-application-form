<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["fullname"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $dob = htmlspecialchars($_POST["dob"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $course = htmlspecialchars($_POST["course"]);
    $address = htmlspecialchars($_POST["address"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header><h1>Application Submitted Successfully 🎉</h1></header>

  <main class="form-container">
    <h2>Applicant Details</h2>
    <p><b>Name:</b> <?= $name ?></p>
    <p><b>Email:</b> <?= $email ?></p>
    <p><b>Phone:</b> <?= $phone ?></p>
    <p><b>Date of Birth:</b> <?= $dob ?></p>
    <p><b>Gender:</b> <?= $gender ?></p>
    <p><b>Course:</b> <?= $course ?></p>
    <p><b>Address:</b> <?= nl2br($address) ?></p>

    <a href="index.html"><button>Go Back</button></a>
  </main>

  <footer><p>© 2025 Online Application Portal</p></footer>
</body>
</html>
