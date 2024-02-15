import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { RegisterComponent } from './components/register/register.component';
import { LoginComponent } from './components/login/login.component';
import { UsersListComponent } from './components/users-list/users-list.component';
import { NavigationComponent } from './components/navigation/navigation.component';
import { EditUserComponent } from './components/edit-user/edit-user.component';
import { TextUtilComponent } from './components/text-util/text-util.component';
import { CalculatorComponent } from './components/calculator/calculator.component';
import { TodoListComponent } from './components/todo-list/todo-list.component';
import { ViewDetailsComponent } from './view-details/view-details.component';
import { NotFoundComponent } from './not-found/not-found.component';

@NgModule({
  declarations: [
    AppComponent,
    RegisterComponent,
    LoginComponent,
    UsersListComponent,
    NavigationComponent,
    EditUserComponent,
    TextUtilComponent,
    CalculatorComponent,
    TodoListComponent,
    ViewDetailsComponent,
    NotFoundComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgbModule,
    HttpClientModule,
    FormsModule,
    ReactiveFormsModule,
  ],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
