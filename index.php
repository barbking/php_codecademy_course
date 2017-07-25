<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
        <p>
          <?php
            echo "Hello World from PHP";
          ?>
        </p>
        <p>
          <?php
           $loopCond = true;
           while ($loopCond == true){
             echo "<p>The loop is running.</p>";
             $loopCond = false;
           }
           echo "<p>And now it's done.</p>";
          ?>
        </p>
	</body>
</html>
