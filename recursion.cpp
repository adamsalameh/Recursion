//g++  5.4.0

#include <iostream>
using namespace std;

// The power of number by recursion
int power(int n, int p){
       
        if (p == 0){
           return 1; 
        }
        return n * power(n,p-1);
    }
    
// Factorial number by recursion
int factorial(int n){
       
        if (n == 0){
           return 1; 
        }
        return n*factorial(n-1);
    }



int main()
{
    cout << power(5,5)<<endl;
    cout <<factorial(5)<<endl;
}
