import { Component } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { AuthUserService } from '../services/auth-user.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrl: './register.component.css'
})
export class RegisterComponent {
  constructor (private userAuth: AuthUserService) {  } 
  successMessage = "";
  errorMessage = "";
  previewImg:any = "";
  registerForm = new FormGroup({
    email: new FormControl("", [
      Validators.required, 
      Validators.email,
      Validators.minLength(10)
    ]),
    password: new FormControl("", [
      Validators.required,
      Validators.minLength(8),
      Validators.maxLength(20)
    ]),
    full_name: new FormControl("", Validators.required)
  });

  registerUser() {
    let res:any = this.userAuth.checkEmail(this.registerForm.value.email);
    if(res) {
      console.log("Email already exist");
      
    } else {
      this.userAuth.registerUser(this.registerForm.value);
      console.log("User registered successfully");
      
    }
    
  }

  get checkEmail() {
    return this.registerForm.get("email");
  }
  
  get checkPassword() {
    return this.registerForm.get("password");
  }
  
  get checkName() {
    return this.registerForm.get("full_name");
  }

  previewFile(input:any) {
    let file = input.target.files[0];
    this.previewImg = URL.createObjectURL(file);
    // let reader = new FileReader();
    // reader.onload = () => {
    //   this.previewImg = reader.result;
    // }
    // reader.readAsDataURL(file);
    
  }
}
