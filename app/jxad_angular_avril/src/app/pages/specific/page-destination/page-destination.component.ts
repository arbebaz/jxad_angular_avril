import { Component } from '@angular/core';
import { TopnavComponent } from '../../../components/topnav/topnav.component';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-page-destination',
  standalone: true,
  imports: [
    TopnavComponent,
    RouterLink
  ],
  templateUrl: './page-destination.component.html',
  styleUrl: './page-destination.component.css'
})
export class PageDestinationComponent {

  public page:string  = "page";
}
