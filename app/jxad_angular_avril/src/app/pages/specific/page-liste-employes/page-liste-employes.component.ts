import { Component } from '@angular/core';
import { ListeEmployesComponent } from '../../../components/liste-employes/liste-employes.component';

@Component({
  selector: 'app-page-liste-employes',
  standalone: true,
  imports: [
    ListeEmployesComponent
  ],
  templateUrl: './page-liste-employes.component.html',
  styleUrl: './page-liste-employes.component.css'
})

export class PageListeEmployesComponent {

}
