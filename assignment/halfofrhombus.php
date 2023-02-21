
<P>a half of rhombus</P>
<?php
    //rhombus

    $mn=10;

    for ($i=1; $i <=$mn ; $i++) { 
        echo "<br>";
        for ($j=1; $j <=$mn ; $j++) { 
            if ($j<=($mn-$i)) {
                echo "&nbsp&nbsp";
            }
            else {
                if ($i==10) {
                    
                        for ($i=1; $i <=$mn ; $i++) { 
                            
                            for ($j=$mn; $j >=1; $j--) { 
                            if ($j<=($mn-$i)) {
                                echo "*";   
                            }
                        else {
                            echo "&nbsp&nbsp";
                        }
                    }
                    echo "<br>";
                }
                
                   break; 
                }
                else{
                    echo "*";
                }
                    

                
                
            }
        }
    }

?>
    