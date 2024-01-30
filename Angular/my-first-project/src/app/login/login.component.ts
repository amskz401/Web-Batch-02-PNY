import { Component } from '@angular/core';
import { FormGroup, FormControl, Validator, Validators } from '@angular/forms';
import { AuthUserService } from '../services/auth-user.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent {
  constructor( private userAuth: AuthUserService ) { }
  loginForm = new FormGroup({
    email: new FormControl("", [
      Validators.required, 
      Validators.email,
      Validators.minLength(10)
    ]),
    password: new FormControl("", [
      Validators.required,
      Validators.minLength(8),
      Validators.maxLength(20)
    ])
  });

  checkLogin() {
    let res = this.userAuth.loginUser(this.loginForm.value);
    if(res) {
      console.log(res);
      
    } else {
      console.log("User not found");
      
    }
  }

  get checkEmail() {
    return this.loginForm.get("email");
  }
  
  get checkPassword() {
    return this.loginForm.get("password");
  }
}
