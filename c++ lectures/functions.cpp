// what is a function

#include <iostream>
using namespace std;

int sum(int num1 = 0, int num2 = 0, int num3 = 0, int num4 = 0, int num5 = 0){
    int sum = 0;
    sum = num1 + num2 + num3 + num4 + num5;
    return sum;
}

int main(){
    int num1 = 40;
    int num2 = 20;
    int num3 = 12;

    cout << "Sum of " << num1 << " + " << num2 << " + " << num3 << " = " << sum(num1, num2, num3) << endl;

    int a, b = 0;
    a = 2;
    b = 3;
    cout << "Sum of " << a << " + " << b << " = " << sum(a, b) << endl;

    int num4 = 40;
    int num5 = 20;
    int num6 = 12;
    int num7 = 12;
    int sum2 = 0;

    cout << "Sum of " << num4 << " + " << num5 << " + " << num6 << " + " << num7 << " = " << sum(num4, num5, num6, num7) << endl;

    int num8, num9;
    cout << "Enter Numer1: ";
    cin >> num8;
    cout << "Enter Number2: ";
    cin >> num9;
    cout << sum(num8, num9) << endl;


    return 0;
}
