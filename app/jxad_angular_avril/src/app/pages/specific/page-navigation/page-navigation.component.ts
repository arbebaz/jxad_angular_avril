import { Component } from '@angular/core';
import { NavigationComponent } from '../../../components/navigation/navigation.component';
import { TopnavComponent } from '../../../components/topnav/topnav.component';

@Component({
  selector: 'app-page-navigation',
  standalone: true,
  imports: [
    NavigationComponent,
    TopnavComponent
  ],
  templateUrl: './page-navigation.component.html',
  styleUrl: './page-navigation.component.css'
})
export class PageNavigationComponent {
  public page:string = "Navigation"

}
