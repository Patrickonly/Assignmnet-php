<?php
$name="PATRICK";

echo "before reverse: <b>",$name,"</b><br><br>";
echo "after reverse: <b>";
for ($t=strlen($name)-1; $t >=0 ; $t--) { 
    echo $name[$t];
}
echo "</b>";

?>