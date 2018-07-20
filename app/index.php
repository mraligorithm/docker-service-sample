<html>
    <head>
        <title> My to do list </title>
    </head>

    <body>
      <h1> Dont forget to do the list of things:</h1>
      <ul>
        <?php
          $json = file_get_contents('http://todos-service');
          $obj = json_decode($json);

          $todos = $obj->todos;
          foreach ($todos as $todo) {
            echo "<li>$todo</li>";
          }

        ?>
      </ul>
   </body>
</html>