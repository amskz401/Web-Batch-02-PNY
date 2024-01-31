import { Component } from '@angular/core';

@Component({
  selector: 'app-user-list',
  templateUrl: './user-list.component.html',
  styleUrl: './user-list.component.css'
})
export class UserListComponent {
  users = [
    {id: 1, name: "Farhan", email: "farhan@pny.com"},
    {id: 2, name: "Iqra", email: "iqra@pny.com"},
    {id: 3, name: "Umar", email: "umar@pny.com"},
    {id: 4, name: "Sufi", email: "sufi@pny.com"},
    {id: 4, name: "Ali", email: "ali@pny.com"}
  ];
}
