import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { LoginComponent } from '../components/login/login.component';
import { GetUsersService } from '../services/get-users.service';

@Component({
  selector: 'app-view-details',
  templateUrl: './view-details.component.html',
  styleUrl: './view-details.component.css',
})
export class ViewDetailsComponent {
  userDetails:any = "";
  constructor(
    private router: ActivatedRoute,
    private userSer: GetUsersService
  ) {
    console.log();
  }

  ngOnInit() {
    this.userSer
      .getData(this.router.snapshot.paramMap.get('id'))
      .subscribe((user) => {
        this.userDetails = user;
      });
  }
}
