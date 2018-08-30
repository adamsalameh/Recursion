//'main' method must be in a class 'Rextester'.
//Compiler version 1.8.0_111

import java.util.*;
import java.lang.*;

class Rextester
{  
    public static int power(int n, int p){
       
        if (p == 0){
           return 1; 
        }
        return n * power(n,p-1);
    }
    public static void main(String args[])
    {
        System.out.println(power(3,1));
    }
}
