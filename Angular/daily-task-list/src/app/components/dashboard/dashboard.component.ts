import { Component } from '@angular/core';
import { UserHandlingService } from '../../services/user-handling.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrl: './dashboard.component.css',
})
export class DashboardComponent {
  getTaskList: any = [];
  getCompTaskList: any = [];
  showNLoader = false;
  showCLoader = false;
  showError = false;
  showErrMsg = '';
  switchTimer = 5;
  constructor(private userHanle: UserHandlingService, private router: Router) {
    this.checkUserToken();
  }
  saveTask(value: any) {
    this.userHanle.saveTask(value).subscribe((retTask) => {
      this.getMyTask();
    });
  }

  checkUserToken() {
    this.userHanle.checkToken().subscribe(
      (succ) => {
        this.getMyTask();
        this.getCompleted();
      },
      (error) => {
        this.showError = true;
        this.showErrMsg = error.error.message;
        setInterval(() => {
          if (this.switchTimer == 0) {
            localStorage.removeItem('token');
            this.router.navigate(['login']);
          }
          --this.switchTimer;
        }, 1000);
      }
    );
  }

  getMyTask() {
    this.showNLoader = true;
    this.userHanle.getTask('n').subscribe((taskList) => {
      this.showNLoader = false;
      this.getTaskList = taskList;
    });
  }

  getCompleted() {
    this.showCLoader = true;
    this.userHanle.getTask('c').subscribe((taskList) => {
      this.showCLoader = false;
      this.getCompTaskList = taskList;
    });
  }

  moveToCompleted(id: any) {
    this.userHanle.udpateTask(id).subscribe((res) => {
      console.log(res);
      this.getMyTask();
      this.getCompleted();
    });
  }

  deleteTask(id: any) {
    this.userHanle.deleteTask(id).subscribe((res) => {
      console.log(res);
      this.getCompleted();
    });
  }
}
