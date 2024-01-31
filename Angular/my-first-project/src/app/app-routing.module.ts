import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { HomeComponent } from './home/home.component';
import { StrUtilityComponent } from './str-utility/str-utility.component';
import { DailyTaskListComponent } from './daily-task-list/daily-task-list.component';
import { UserListComponent } from './user-list/user-list.component';
import { UserDetailsComponent } from './user-details/user-details.component';

const routes: Routes = [
  {
    "path": "login", 
    "component": LoginComponent,
    "title": "Login Page"
  },
  {
    "path": "register", 
    "component": RegisterComponent,
    "title": "Register Page"
  },
  {
    path: "text-util",
    component: StrUtilityComponent
  },
  {
    path: 'daily-task',
    component: DailyTaskListComponent
  },
  {
    path: "user-list",
    component: UserListComponent
  },
  {
    path: "user-details/:id",
    component: UserDetailsComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
