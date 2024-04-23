import { Component } from '@angular/core';
import { LiaisonUnidirectionnelleComponent } from '../../../components/liaison-unidirectionnelle/liaison-unidirectionnelle.component';
import { TopnavComponent } from '../../../components/topnav/topnav.component';

@Component({
  selector: 'app-page-liaison-unidirectionnelle',
  standalone: true,
  imports: [
    LiaisonUnidirectionnelleComponent,
    TopnavComponent
  ],
  templateUrl: './page-liaison-unidirectionnelle.component.html',
  styleUrl: './page-liaison-unidirectionnelle.component.css'
})
export class PageLiaisonUnidirectionnelleComponent {

  public page:string = "Laision unidirectionnelle";

}
