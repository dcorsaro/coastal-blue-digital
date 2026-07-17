<?php

echo "<h1>Form Submitted Successfully!</h1>";

echo "<p><stong>Name:</strong>" . $_POST['name'] . "</p>";
echo "<p><strong>Business</strong>" . $_POST['business'] . "</p>";
echo "<p><strong>Email:</strong> " . $_POST['email'] . "</p>";
echo "<p><strong>Phone:</strong> " . $_POST['phone'] . "</p>";
echo "<p><strong>Message:</strong><br>" . nl2br($_POST['message']) . "</p>";

?>