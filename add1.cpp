#include "function.cpp";
#include <iostream>
using namespace std;

int main(){

    cout << "Sum: " << add_numbers(12, 11) << endl;
    cout << "Sum: " << add_numbers(12,34,78) << endl;
    cout << "Sum: " << add_numbers(12, 65, 78) << endl;
    cout << "Sum: " << add_numbers(12, 65, 78, 45) << endl;

    print_numbers(1);
    return 0;

}
