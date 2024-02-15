import { Component } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { GetUsersService } from '../../services/get-users.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrl: './register.component.css'
})
export class RegisterComponent {
  customType = "password";
  showMessage: string = "";
  constructor(private userServices: GetUsersService, private router: Router) {}
  registerForm = new FormGroup({
    'name': new FormControl(""),
    'email': new FormControl(""),
    'password': new FormControl("")
  });

  saveUser() {
    this.userServices.postData(this.registerForm.value).subscribe( (ret) => {
      this.router.navigate(['login']);
      // if(ret) {
      //   this.showMessage = "User registered successfully";
      // } else {
      //   this.showMessage = "Something went wrong"
      // }
      
    } );
  }

  showPassword() {
    if(this.customType == 'password') {
      this.customType = 'text';
    } else {
      this.customType = 'password';
    }
  }
}
