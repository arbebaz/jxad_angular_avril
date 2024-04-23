import { Component } from '@angular/core';
import { LiaisonBidirectionnelleComponent } from '../../../components/liaison-bidirectionnelle/liaison-bidirectionnelle.component';
import { TopnavComponent } from '../../../components/topnav/topnav.component';

@Component({
  selector: 'app-page-liaison-bidirectionnelle',
  standalone: true,
  imports: [
    LiaisonBidirectionnelleComponent,
    TopnavComponent
  ],
  templateUrl: './page-liaison-bidirectionnelle.component.html',
  styleUrl: './page-liaison-bidirectionnelle.component.css'
})
export class PageLiaisonBidirectionnelleComponent {

  public page:string = "Liaison bidirectionnelle";
}
