<?php

echo '<table border="1">';
for ($i = 1 ; $i <= 9; $i++){
  echo '<tr>';
  for ($j = 1 ; $j <= 9; $j++){
    echo '<td width="30" align="right">' . ($j * $i) . "</td>";
  }
  echo "</tr>";
}
echo '</table>';

?>
