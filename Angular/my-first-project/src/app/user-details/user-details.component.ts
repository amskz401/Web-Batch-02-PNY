import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-user-details',
  templateUrl: './user-details.component.html',
  styleUrl: './user-details.component.css'
})
export class UserDetailsComponent {
  users:any = [
    {id: 1, name: "Farhan", email: "farhan@pny.com"},
    {id: 2, name: "Iqra", email: "iqra@pny.com"},
    {id: 3, name: "Umar", email: "umar@pny.com"},
    {id: 4, name: "Sufi", email: "sufi@pny.com"},
    {id: 4, name: "Ali", email: "ali@pny.com"}
  ];
  user = [];
  constructor(private router: ActivatedRoute) {
    this.user = this.users[1];
    console.log(router);
    
  }
}
