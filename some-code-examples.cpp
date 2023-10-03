#include <iostream>
using namespace std;

int main() {
  // artmetic operators (+, -, *, /, %, **)

  cout << "Sum: " << 8 + 8 << endl;
  cout << "Sub: " << 8 - 8 << endl;
  cout << "Mul: " << 8 * 8 << endl;
  cout << "Div: " << 8 / 8 << endl;
  cout << "Mod: " << 8 % 8 << endl;
  // cout << "Mod: " << 8 ** 8  << endl;



  // assignment operators
  int a = 12;
  cout << a += 4 << endl; // a = a + 4;
  cout << a -= 4 << endl; // a = a - 4;
  cout << a *= 4 << endl; // a = a * 4;
  cout << a /= 4 << endl; // a = a / 4;
  cout << a %= 4 << endl; // a = a / 4;

  // increment or decrement
  int a = 12;
  cout << a++ << endl; // a = a + 1;
  cout << ++a << endl; // a = a + 1;
  cout << --a << endl; // a = a - 1;
  cout << a-- << endl; // a = a - 1;

  // logical operators
  // equal expression
  c == 4;
  (c == 4) // true or false

  // not equal expression
  (c != 4) // true or false

  c = 2;
  
  (c > 2) // true or false
  (c < 2) // true or false

  (c >= 2) // true or false
  (c <= 2) // true or false

  !(2 >= 2) // true or false

  if(1 == 2){
    alert("condition 1");
  }
  else if( 1 == 1){
    alert("condition 2");
  }
  else {
    alert("default");
  }

  // && || operators
  if(gender == "male" && age){
    alert("success");
  } 
  else {
    alert("false")
  }
}