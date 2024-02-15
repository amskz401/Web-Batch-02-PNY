import { Component } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { GetUsersService } from '../../services/get-users.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrl: './login.component.css',
})
export class LoginComponent {
  customType: string = 'password';
  loginForm = new FormGroup({
    email: new FormControl(''),
    password: new FormControl(''),
  });

  constructor(private userServices: GetUsersService) {}

  togglePassword() {
    if (this.customType == 'password') {
      this.customType = 'text';
    } else {
      this.customType = 'password';
    }
  }

  checkUser() {
    this.userServices.login(this.loginForm.value).subscribe((data: any) => {
      if (data) {
        if (data.msg) {
        } else {
          localStorage.setItem('user', '1');
        }
      }
    });
  }
}
