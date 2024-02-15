import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})
export class UserHandlingService {
  apiUrl: string = 'http://localhost:8000/api';
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json',
      Authorization: `Bearer ${localStorage.getItem('token')}`,
    }),
  };
  constructor(private http: HttpClient) {}
  // get, post, put, delete;
  registerUser(data: any) {
    return this.http.post(`${this.apiUrl}/register-user`, data);
  }

  loginUser(data: any) {
    return this.http.post(`${this.apiUrl}/check-login`, data);
  }

  isLoggedIn() {
    const token = localStorage.getItem('token');
    return this.http.get(`${this.apiUrl}/check-token/${token}`);
  }

  saveTask(task: any) {
    console.log(task);
    const newTask = {
      task: task,
    };
    return this.http.post(
      `${this.apiUrl}/save-task/`,
      newTask,
      this.httpOptions
    );
  }

  getTask(type: any = '') {
    if (type !== '') {
      return this.http.get(
        `${this.apiUrl}/get-tasks/${type}`,
        this.httpOptions
      );
    } else {
      return this.http.get(`${this.apiUrl}/get-tasks/`, this.httpOptions);
    }
  }

  udpateTask(id: any) {
    return this.http.get(`${this.apiUrl}/update-task/${id}`, this.httpOptions);
  }
  deleteTask(id: any) {
    return this.http.get(`${this.apiUrl}/delete-task/${id}`, this.httpOptions);
  }

  checkToken() {
    const token = `Bearer ${localStorage.getItem('token')}`;
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
        Authorization: token,
      }),
    };
    return this.http.get(`${this.apiUrl}/validate-token`, this.httpOptions);
  }

  getUsersList(offset: number = 0, limit: number = 10) {
    const token = `Bearer ${localStorage.getItem('token')}`;
    const httpOptions = {
      headers: new HttpHeaders({
        'Content-Type': 'application/json',
        Authorization: token,
      }),
    };
    return this.http.get(
      `${this.apiUrl}/all-users/${offset}/${limit}`,
      this.httpOptions
    );
  }
}
