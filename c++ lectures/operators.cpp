#include <iostream>
using namespace std;

int main(){
    // operators

    // types of operators
    // 1. arithmetic operators
    // 2. logical operators
    // 3. assignment operators

    // 1. arithmetic operators (+, -, *, /, %)
    cout << "sum: " << 1 + 1 << endl;
    cout << "sub: " << 1 - 1 << endl;
    cout << "div: " << 1 / 1 << endl;
    cout << "mul: " << 1 * 1 << endl;
    cout << "mod: " << 1 % 1 << endl;

    // 2. logical operators (&&, ||, !)
    cout << "&& operator result: " << ( 1 == 1 && 1 == 2 ) << endl;
    cout << "|| operator result: " << ( 1 == 1 || 1 == 2 ) << endl;
    cout << "! operator result: " << !( 1 == 1 && 1 == 2 ) << endl;

    int a = 5;
    // 3. assignment operators
    cout << "add 4 to a: " << (a += 4) << endl; // (a = a + 4);
    cout << "sub 4 to a: " << (a -= 4) << endl; // (a = a - 4);
    cout << "mul 4 to a: " << (a *= 4) << endl; // (a = a * 4);
    cout << "new value of a: " << a << endl;
    cout << "div 4 to a: " << (a /= 4) << endl; // (a = a / 4);

    return 0;
}
