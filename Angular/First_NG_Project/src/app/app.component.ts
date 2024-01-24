import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { UserService } from './services/user.service';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {

  usersList:object = [];
  constructor(users: UserService) {
    this.usersList = users.userList();
    
  }
  
  title = 'First_NG_Project';
}
