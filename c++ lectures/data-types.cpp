// main wrapper to write c++ program

#include <iostream>
// input output stream to handle user input/output

using namespace std;
// standard library to handle input/output stream

int main(){
    // type variable = value
    int number = 0; // accept integer value 0-9;
    float float_num = 0.0; // accept point/decimal values
    double dbl_num = 0.0; // accept point/decimal values
    string first_str = ""; // accept alpha numeric values
    char first_char = 'C'; // accept only one value/character at a time
    bool flag = true; // accept only true or false; 0 or 1;

    number = 20;
    float_num = 12.2;
    dbl_num = 32.43;
    first_str = "my new string";
    first_char = '+';
    flag = false;

    cout << number << endl;
    cout << float_num << endl;
    cout << dbl_num << endl;
    cout << first_str << endl;
    cout << first_char << endl;
    cout << flag;


    return 0;
}
