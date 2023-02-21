
<P>Equilateral triangle</P>
<?php
    //rhombus

    $value=10;

    for ($i=1; $i <=$value ; $i++) { 

        ?>
        <div style="margin-top:-10px">
        <?php

        for ($j=1; $j <=$value ; $j++) { 
            if ($j<=($value-$i)) {
                echo "&nbsp";
            }
            else {
            
                    echo "*";
              
                    

                
                
            }
        }
        ?>
        </div>
        <?php
    }

?>
    