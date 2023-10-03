// loops in programming;

#include <iostream>
using namespace std;

int main(){
    int num = 0;
    int endpoint = 100;

    //for loop example
    // for(num = 7; num <= 20; num++){
        // cout << "starting for loop: ";
        // cout << num << endl;
    // }


    //while(num <= 100){
        // cout << "starting while loop: ";
        //cout << num << endl;
        //num++;
    //}

    do {
        // cout << "starting do while loop: ";
        cout << num << endl;
        num = num + 1;
    } while(num <= endpoint);


    return 0;
}
