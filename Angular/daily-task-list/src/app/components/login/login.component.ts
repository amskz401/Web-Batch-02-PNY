import { Component } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { UserHandlingService } from '../../services/user-handling.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrl: './login.component.css',
})
export class LoginComponent {
  errorMsg = '';
  btnText: string = 'Login';
  btnSubmit: boolean = false;
  loginForm = new FormGroup({
    email: new FormControl(''),
    password: new FormControl(''),
  });

  constructor(private handleUser: UserHandlingService, private router: Router) {
    if (localStorage.getItem('token')) {
      router.navigate(['dashboard']);
    }
  }

  loginUser() {
    this.btnText = 'Procssing...';
    this.btnSubmit = true;

    this.handleUser.loginUser(this.loginForm.value).subscribe((res: any) => {
      console.log(res);
      if (res.token) {
        localStorage.setItem('token', res.token);
        localStorage.setItem('user', JSON.stringify(res.user));
        this.router.navigate(['dashboard']);
      } else {
        this.btnText = 'Login';
        this.btnSubmit = false;
        this.errorMsg = res.message;
      }
    });
  }
}
