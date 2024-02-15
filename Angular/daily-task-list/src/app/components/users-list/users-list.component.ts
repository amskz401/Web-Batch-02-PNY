import { Component } from '@angular/core';
import { UserHandlingService } from '../../services/user-handling.service';

@Component({
  selector: 'app-users-list',
  templateUrl: './users-list.component.html',
  styles: ``,
})
export class UsersListComponent {
  usersList: any = '';
  p: any = 1;
  start: number = 0;
  limit: number = 10;
  countUsers: number = 0;
  constructor(private userHanle: UserHandlingService) {
    this.getUsersListFunc();
  }

  nextPage(event: any) {
    if (event == 1) {
      this.start = 0;
    } else {
      this.start = (event - 1) * this.limit;
      this.getUsersListFunc();
    }
    this.p = event;
  }

  getUsersListFunc() {
    this.userHanle
      .getUsersList(this.start, this.limit)
      .subscribe((users: any) => {
        this.usersList = users.users;
        this.countUsers = users.count;
        console.log(users);
      });
  }
}
