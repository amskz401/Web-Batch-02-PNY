import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class AuthUserService {

  userList:any = [];
  constructor() { }

  registerUser(data:object) {
    this.userList.push(data);
    console.log(this.userList);
    
  }

  checkEmail(email: any) {
    let user = this.userList.find( (user:any) => user.email == email );
    if(user) {
      return true;
    } else {
      return false;
    }
  }

  loginUser(data: any) {
    let user = this.userList.find( 
      (user:any) => user.email == data.email && user.password == data.password
    );
    if(user) {
      return user;
    } else {
      return false;
    }
  }
}
