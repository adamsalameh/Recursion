/'main' method must be in a class 'Rextester'.
//Compiler version 1.8.0_111

import java.util.*;
import java.lang.*;

class Rextester
{   
    // The power of number by recursion
    public static int power(int n, int p) {       
        if (p == 0) {
            return 1; 
        }
        return n * power(n,p-1);
    }
    
    // Factorial number by recursion
    public static int factorial(int n) {       
        if (n == 0) {
            return 1; 
        }
        return n*factorial(n-1);
    }
    
    public static void main(String args[])
    {
        System.out.println(power(3,1));
        System.out.println(factorial(5));
        
    }
}
