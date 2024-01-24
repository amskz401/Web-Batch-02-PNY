import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor() { }

  students:object = [];
  userList() {
    return this.students = [
      {
        id:1,
        name: "david"
      },
      {
        id: 2, 
        name: "john"
      }
  
    ];
  }
}
