#include <iostream>
using namespace std;

int add_numbers(int a = 0, int b = 0, int c = 0, int d = 0, int e = 0){
    int add = (a + b + c + d + e);
    return add;
}

int print_numbers(int index = 1){
    ++index;
    cout << "Index: " << index << endl;

    if(index == 200){
        return 0;
    } else {
        print_numbers(index);
    }

}
