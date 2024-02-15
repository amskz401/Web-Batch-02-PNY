import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-edit-user',
  templateUrl: './edit-user.component.html',
  styleUrl: './edit-user.component.css'
})
export class EditUserComponent {
  constructor(private actRoute: ActivatedRoute) {
    console.log(this.actRoute.snapshot.paramMap.get('id'));
    
  }
}
