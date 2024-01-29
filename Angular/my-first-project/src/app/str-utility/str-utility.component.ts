import { Component } from '@angular/core';

@Component({
  selector: 'app-str-utility',
  templateUrl: './str-utility.component.html'
})
export class StrUtilityComponent {
  text = '';
  charCount = 0;
  wordCount = 0;
  formData:object = {};
  textToUpper(value:string) {
    console.log(this.text.toUpperCase());
    this.text = value.toUpperCase();
  }

  textToLower(value:string) {
    this.text = value.toLowerCase();
  }

  sendData(formData:any) {
    console.log(formData);
    
    
  }

  getValue(value:string) {
    this.charCount = value.length;
    this.wordCount = value.split(" ").length
  }
}
