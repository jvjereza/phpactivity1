<!DOCTYPE html>
<html lang=en>
  <head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
      /* Animal Crossing colors */
      :root {
        --background-color: #f5f5f5;
        --text-color: #555;
        --accent-color: #5d5d5d;
        --link-color: #ff9999;
      }
      
      /* Global styles */
      body {
        font-family: 'Arial', sans-serif;
        color: var(--text-color);
        background-color: var(--background-color);
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
      h1 {
        font-size: 48px;
        text-align: center;
        margin-bottom: 20px;
      }
      p {
        font-size: 24px;
        line-height: 1.5;
        margin-bottom: 20px;
      }
      a {
        color: var(--link-color);
        text-decoration: none;
        border-bottom: 1px solid var(--link-color);
      }
      
      /* Animal Crossing specific styles */
      body {
        background-color: #f5f5f5;
      }
      h1 {
        font-family: 'Comic Sans MS', cursive;
        color: #ff9999;
        text-shadow: 2px 2px #fff;
      }
      input[type=text] {
        padding: 10px;
        border: 2px solid var(--accent-color);
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 24px;        
      }

      
    </style>
  </head>
  <body>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        
        // Do something with the name and email values, such as storing them in a database or sending an email
        
        echo "<p>Thank you for contacting us, $name! We will be in touch soon.</p>";
      } else {
        echo "<div class='container'>";
        echo "<h1>Contact Us</h1>";
        echo "<form method='post'>";
        echo "<label for='name'>Name:</label><br>";
        echo "<input type='text' id='name' name='name'><br>";
        echo "<label for='email'>Email:</label><br>";
        echo "<input type='text' id='email' name='email'><br>";
        echo "<label for='message'>Message:</label><br>";
        echo "<textarea id='message' name='message' rows='5'></textarea><br>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
        echo "</div>";
      }
    ?>
  </body>
</html>
