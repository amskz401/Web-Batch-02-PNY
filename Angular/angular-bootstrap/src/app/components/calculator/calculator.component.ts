import { Component } from '@angular/core';

@Component({
  selector: 'app-calculator',
  templateUrl: './calculator.component.html',
  styleUrl: './calculator.component.css',
})
export class CalculatorComponent {
  result: any = '';
  buttons: string[] = [
    '+',
    '-',
    '*',
    '/',
    '7',
    '8',
    '9',
    '4',
    '5',
    '6',
    '1',
    '2',
    '3',
    '0',
    '.',
    'AC',
    '=',
  ];

  btnClicked(value: any) {
    if (value == 'AC') {
      this.result = 0;
    } else if (value == '=') {
      this.result = eval(this.result).toFixed(2);
    } else {
      this.result = this.result + value;
    }
  }
}
