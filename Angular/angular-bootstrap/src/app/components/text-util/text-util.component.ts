import { Component } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-text-util',
  templateUrl: './text-util.component.html',
  styleUrl: './text-util.component.css',
})
export class TextUtilComponent {
  textAnalyzer = new FormGroup({
    myTextArea: new FormControl(),
  });
  analyzeText(value: any) {
    console.log(value);
  }

  clearText() {
    console.log('clear triggered');

    this.textAnalyzer.controls.myTextArea.setValue('');
  }
}
