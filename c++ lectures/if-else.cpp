// nested if else statements
#include <iostream>
using namespace std;

int main(){
    int number = 0;
    cout << "Enter number: ";
    cin >> number;

    if(number >= 60 && number <= 70){
        cout << "Your grade is B";
    }
    else if(number > 70){
        cout << "Your grade is B+";
    }
    else if(number > 80){
        cout << "Your grade is A";
    }
    else if(number > 90){
        cout << "Your grade is A+";
    }
    else if(number > 95){
        cout << "Your grade is A++";
    }
    else {
        cout << "Your grade is B-";
    }
    return 0;
}
