<!DOCTYPE html>
<html lang=en>
  <head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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
        background-color: #fddfdf;
      }
      h1 {
        font-family: 'Comic Sans MS', cursive;
        color: #00bfff;
        text-shadow: 2px 2px #fff;
      }
      .btn-container {
        display: flex;
        justify-content: center;
        margin-top: 40px;
      }
      .btn {
        background-color: var(--accent-color);
        border: none;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        border-radius: 5px;
        margin: 10px;
        cursor: pointer;
        transition:0.5s;
      }
      .btn:hover{
        background-color: var(--accent-color);
        color: #00bfff;
      }
    </style>
  </head>
  <body>
    <?php
      echo "<div class='container'>";
      echo "<h1>Welcome to My Home Page</h1>";
      echo "<p>Hello, this is the home page.</p>";
      echo "<div class='btn-container'>";
      echo "<a href='./about.php' class='btn'>Go to About</a>";
      echo "<a href='./contact.php' class='btn'>Go to Contact</a>";
      echo "</div>";
      echo "</div>";
    ?>
  </body>
</html>
