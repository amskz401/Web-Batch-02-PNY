import { Component } from '@angular/core';
import { GetUsersService } from '../../services/get-users.service';

@Component({
  selector: 'app-users-list',
  templateUrl: './users-list.component.html',
  styleUrl: './users-list.component.css'
})
export class UsersListComponent {
  userList:any = [];
  constructor(private userServices: GetUsersService) {}
  ngOnInit() {
    this.userServices.getData().subscribe( data => {
      this.userList = data;
    } )
  }

  deleteUser(id:number) {
    if(confirm("Sure ?")) {
      this.userServices.delete(id).subscribe(data => {
        console.log(data);
        this.ngOnInit();
      })
    }
  }
}
