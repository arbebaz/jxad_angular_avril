import { Component } from '@angular/core';
import { TopnavComponent } from '../../../components/topnav/topnav.component';

@Component({
  selector: 'app-about',
  standalone: true,
  imports: [
    TopnavComponent
  ],
  templateUrl: './about.component.html',
  styleUrl: './about.component.css'
})
export class AboutComponent {

  public page:string =  "About";
}
