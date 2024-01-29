import { Component } from '@angular/core';

@Component({
  selector: 'app-daily-task-list',
  templateUrl: './daily-task-list.component.html',
  styleUrl: './daily-task-list.component.css'
})
export class DailyTaskListComponent {
  showList:any = [];
  button:number = 0;
  constructor() {
    
  }
  sendData(data:any) {
    this.button++
    this.showList.push(data);
  }

  delete(id:number) {
    this.showList.splice(id, 1);
    
  }
}
