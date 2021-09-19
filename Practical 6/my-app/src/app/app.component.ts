import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Angular';

  time: string;

  constructor() {
    this.time = new Date().toLocaleTimeString();
  }
  getTime() {
    this.time = new Date().toLocaleTimeString();
  }
}
