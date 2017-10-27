<html>
<head>
<title>Contact form</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="main.css" />
</head>
<body>
<div class="container">
  <form action="<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

 ?>">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Steve Adams">

    <label for="email">Email</label>
    <input type="text" id="email" placeholder="steve@mail.com">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Once upon a time..." style="height:200px"></textarea>

    <input type="submit" value="Send">

  </form>
</div>
</body>
</html>