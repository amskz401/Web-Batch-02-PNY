import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {

  title = 'my-first-project';
  counter = 0;
  succText = '';
  timer = 10;
  timerMsg = '';
  students = [
    {id: 1, name: "Jado"},
    {id: 2, name: "PNY"},
    {id: 3, name: "Multan"}
  ];
  constructor() {
    // setTimeout(() => {
    //   this.timer = 15214;
    // }, 2000);

    // setInterval(() => {
      
    //   ++this.timer;
    // }, 3000);
  }

  counterFunc(param:string) {
    if(param == '+') {
      ++this.counter;  
    } else {
      --this.counter;  
    }
      
  }

  startCounter() {
    const int = setInterval( () => {
      if(this.timer == 0) {
        this.timer = 0;
        clearInterval(int);
        this.timerMsg = "Time out";
      } else {
        --this.timer;
      }
      
    }, 1000 );
  }
}
