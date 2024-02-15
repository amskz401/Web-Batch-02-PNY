import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root',
})
export class GetUsersService {
  constructor(private http: HttpClient) {}

  url = 'http://127.0.0.1:8000/api';
  postData(data: any) {
    return this.http.post(`${this.url}/add-user`, data);
  }

  getData(id: any = 0) {
    if (id > 0) {
      return this.http.get(`${this.url}/get-users/${id}`);
    } else {
      return this.http.get(`${this.url}/get-users`);
    }
  }

  login(data: any) {
    return this.http.post(`${this.url}/login`, data);
  }

  delete(id: number) {
    return this.http.get(`${this.url}/delete/${id}`);
  }
}
