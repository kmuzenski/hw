<?php

function armup() 
{

print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");


print_r("           * *\n");
print_r("          *   *\n");
print_r("           * *    *\n");
print_r("            *   *\n");
print_r("          * * *\n");
print_r("         *  *\n"); 
print_r("        *   *\n");  
print_r("            *\n");
print_r("          *   *\n");
print_r("         *     *\n");
print_r("        *       *\n");
print_r("       *         *\n");
print_r("      *           *\n");
 
}

function armdown(){
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");
print_r ("\n");


print_r("           * *\n");
print_r("          *   *\n");
print_r("           * *\n");    
print_r("            *\n");   
print_r("          * * *\n");
print_r("         *  *   *\n");
print_r("         *   *    *\n");
print_r("            *  \n");
print_r("          *   *\n");
print_r("         *     *\n");
print_r("       *         *\n");
print_r("      *           *\n");


}



for ($i=0; $i <= 2; $i++) {
armup();

sleep(5);

armdown();

sleep(5);
}

?>


