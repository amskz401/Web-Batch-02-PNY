#include "function.cpp";
#include <iostream>
using namespace std;

int main(){

    cout << "Sum: " << add_numbers(123, 111) << endl;
    cout << "Sum: " << add_numbers(122,234,878) << endl;
    cout << "Sum: " << add_numbers(122, 655, 788) << endl;
    cout << "Sum: " << add_numbers(172, 695, 798, 495) << endl;

    print_numbers(50);
    return 0;

}
