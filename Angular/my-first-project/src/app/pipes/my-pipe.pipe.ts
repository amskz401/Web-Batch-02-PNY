import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'myPipe'
})
export class MyPipePipe implements PipeTransform {

  transform(value: number, ...args: unknown[]): unknown {
    return Math.floor(value * Math.random());
  }

}
