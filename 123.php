<?php 

        for($a=1;$a<=9;$a++)
            for($b=0;$b<=9;$b++)
                for($c=0;$c<=9;$c++)
                    if($a*$a*$a+$b*$b*$b+$c*$c*$c == 100*$a+10*$b+$c)
                        echo $a.$b.$c."  ";

            


 ?>