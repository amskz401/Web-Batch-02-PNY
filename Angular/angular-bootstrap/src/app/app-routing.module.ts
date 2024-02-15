import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { RegisterComponent } from './components/register/register.component';
import { LoginComponent } from './components/login/login.component';
import { UsersListComponent } from './components/users-list/users-list.component';
import { EditUserComponent } from './components/edit-user/edit-user.component';
import { TextUtilComponent } from './components/text-util/text-util.component';
import { CalculatorComponent } from './components/calculator/calculator.component';
import { TodoListComponent } from './components/todo-list/todo-list.component';
import { ViewDetailsComponent } from './view-details/view-details.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { authGuard } from './auth.guard';

const routes: Routes = [
  { path: 'register', component: RegisterComponent },
  { path: 'login', component: LoginComponent },
  { path: 'list', component: UsersListComponent },
  { path: 'user/edit/:id', component: EditUserComponent },
  { path: 'user/view/:id', component: ViewDetailsComponent },
  { path: 'text-util', component: TextUtilComponent },
  {
    path: 'calculator',
    component: CalculatorComponent,
    canActivate: [authGuard],
  },
  { path: 'todo-list', component: TodoListComponent },

  {
    path: '',
    redirectTo: 'list',
    pathMatch: 'full',
  },

  {
    path: '**',
    component: NotFoundComponent,
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}
