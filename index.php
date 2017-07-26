<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" href="style.css">
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
        <p>We will keep flipping a coin as long as the result is heads!</p>
          <?php
          $flipCount = 0;
          do {
            $flip = rand(0,1);
            $flipCount ++;
            if ($flip){
              echo "<div class=\"coin\">H</div>";
            }
            else {
              echo "<div class=\"coin\">T</div>";
            }
          } while ($flip);
          $verb = "were";
          $last = "flips";
          if ($flipCount == 1) {
            $verb = "was";
            $last = "flip";
          }
          echo "<p>There {$verb} {$flipCount} {$last}!</p>";
          ?>
          <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $peeps = array();
    array_push($peeps, "Jen");
    array_push($peeps, "Cindy");
    array_push($peeps, "Beth");
    array_push($peeps, "Sarah");
	// Sort the list
    sort($peeps);
	// Randomly select a winner!
    $length = count($peeps);
    $winner = rand(0,$length-1);
	// Print the winner's name in ALL CAPS
  print "<p>Select a random winner from my friend's list:".join(", ",$peeps)."</p>";
	print "The winner is:"." ".strtoupper($peeps[$winner]);
	?>
	</p>
	</body>
</html>
