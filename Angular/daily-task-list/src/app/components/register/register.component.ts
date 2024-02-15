import { Component } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { UserHandlingService } from '../../services/user-handling.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrl: './register.component.css',
})
export class RegisterComponent {
  btnText: string = 'Register';
  btnSubmit: boolean = false;
  succMsg: boolean = false;

  constructor(private handleUser: UserHandlingService) {}
  registerForm = new FormGroup({
    name: new FormControl('', [Validators.required, Validators.minLength(5)]),
    email: new FormControl('', [
      Validators.required,
      Validators.email,
      Validators.min(6),
    ]),
    password: new FormControl('', [
      Validators.required,
      Validators.minLength(8),
    ]),
  });

  registerUser() {
    this.btnText = 'Processing...';
    this.btnSubmit = true;
    this.handleUser.registerUser(this.registerForm.value).subscribe((res) => {
      this.btnText = 'Register';
      this.btnSubmit = false;
      this.succMsg = true;
      console.log(res);
    });
  }

  get getName() {
    return this.registerForm.get('name');
  }
  get getEmail() {
    return this.registerForm.get('email');
  }
  get getPassword() {
    return this.registerForm.get('password');
  }
}
