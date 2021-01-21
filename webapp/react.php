<?php
include 'header.php';
include 'leftnav.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>React</title>
  </head>
  <body>

    <h2>Add React To The Website</h2>
    <p>This page demonstrates using React with no build tooling.</p>
    <p>React is loaded as a script tag.</p>

    <!-- We will put our React component inside this div. -->
    <div id="like_button_container"></div>
    <div id="Toggle"></div>
    <div id="name"></div>

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

    <!-- Load our React component. -->
    <script src="like_button.js"></script>
    <script src="Toggle.js"></script>
    <script src="NameForm.js"></script>

  </body>
</html>

<?php
include 'footer.php';
?>