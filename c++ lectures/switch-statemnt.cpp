// conditional statement using switch

#include <iostream>
using namespace std;

int main(){
    int condition = 0;
    cout << "Enter your lucky number: ";
    cin >> condition;

    switch(condition){
        /*case 1:
            cout << "You pressed " << condition;
            break;

        case 2:
            cout << "You pressed " << condition;
            break;

        case 3:
            cout << "You pressed " << condition;
            break; */

        case 50:
            cout << "You win the lottery" << endl;
            break;

        default:
            cout << "You pressed " << condition << " try again !" << endl;
    }


    return 0;
}
