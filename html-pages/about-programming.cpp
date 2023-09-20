// input output stream
#include <iostream>

// standard library to handle input output stream
using namespace std;

// main wrapper
int main(){
    // print my first string
	cout << "Print My First String" << "\n";
	
	// writing comments and benefits
    // date: 12-12-12
    // instructions: to add two numbers;
    // instucted by: client name;
    
    // 	this line adding to numbers;
	cout << "Sum: ";
	cout << 8 + 9 << endl;
	
	cout << "Sub: ";
	cout << 8 - 6 << endl;
	
	// more about data types
    int mynumber = 78;
    string mystring = "this is my first string";
    float myfloat = 12.27;
    double mydouble = 12.47;
    char mychar = 'C';
    bool myFlag = false;
    
    cout << mynumber << endl;
    cout << mystring << endl;
    cout << myfloat << endl;
    cout << mydouble << endl;
    cout << mychar << endl;
    cout << myFlag;
    
    // multiple variable declaration in one line
    int num1, num2 = 7, num3 = 9, num4 = 0;
    num1 = 90;
	return 0;
}