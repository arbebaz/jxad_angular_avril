import { Component } from '@angular/core';
import { TopnavComponent } from '../../../components/topnav/topnav.component';

@Component({
  selector: 'app-contact',
  standalone: true,
  imports: [
    TopnavComponent
  ],
  templateUrl: './contact.component.html',
  styleUrl: './contact.component.css'
})
export class ContactComponent {

  public page:string = "Contact";
}
    