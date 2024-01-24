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
  timer = 0;
  constructor() {
    setTimeout(() => {
      this.timer = 15214;
    }, 2000);

    setInterval(() => {
      
      ++this.timer;
    }, 3000);
  }

  youclick() {
    ++this.counter;
    if(this.counter == 5) {
      this.succText = "You hit button 5 times"
    } 
    else if(this.counter == 10) {
      this.succText = "You hit button 10 times"
    } 
    
  }
}
