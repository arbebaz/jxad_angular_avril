import { Component } from '@angular/core';
import { ComposantServiceComponent } from '../../../components/composant-service/composant-service.component';

@Component({
  selector: 'app-page-service',
  standalone: true,
  imports: [
    ComposantServiceComponent
  ],
  templateUrl: './page-service.component.html',
  styleUrl: './page-service.component.css'
})
export class PageServiceComponent {

}
