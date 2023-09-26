// Exploring Conditional Statements

#include <iostream>
using namespace std;

int main(){

    // equal ==> match exact same value 1 == 1
    // not equal ==> check value is equal or not 1 != 2;
    // greater ==> match greater value 19 > 18;
    // less ==> match less values 18 < 19;
    // greater equal ==> 18 >= 18;
    // less equal ==> 18 <= 18;
    int age = 19;
    cout << "Condition Matched: " << (1 == 1) << endl;
    cout << "Condition not Matched: " << (1 != 2) << endl;
    cout << "Greater than Condition: " << (2 > 1) << endl;
    cout << "Less than Condition: " << (1 < 2) << endl;
    cout << "Greater equal Condition: " << (1 >= 1) << endl;
    cout << "Less than Condition: " << (1 <= 1) << endl;

    // equal case
    if(age == 18){
        cout << "Your age is: " << age << endl;
    }
    else {
        cout << "You age is: " << age << endl;
    }

    // not equal case
    if(age != 18){
        cout << "Your age is: " << age << endl;
    }
    else {
        cout << "You age is: " << age << endl;
    }

    // greater than
    if(age > 18){
        cout << "Your age is greater than: " << age << endl;
    }
    else {
        cout << "Your age is less than: " << age << endl;
    }

    // greater equal
    if(age >= 18){
        cout << "Your age is greater than: " << age << endl;
    }
    else {
        cout << "Your age is less than: " << age << endl;
    }

    // less than
    if(age < 18){
        cout << "Your age is greater than: " << age << endl;
    }
    else {
        cout << "Your age is less than: " << age << endl;
    }

    // less equal
    if(age <= 18){
        cout << "Your age is less equal than: " << age << endl;
    }
    else {
        cout << "Your age is less than: " << age << endl;
    }

}
