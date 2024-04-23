import { DatePipe } from '@angular/common';
import { Component } from '@angular/core';
import { UcfirstPipe } from '../../../pipes/ucfirst.pipe';
import { TopnavComponent } from '../../../components/topnav/topnav.component';

@Component({
  selector: 'app-accueil',
  standalone: true,
  imports: [
    DatePipe,
    UcfirstPipe,
    TopnavComponent
  ],
  templateUrl: './accueil.component.html',
  styleUrl: './accueil.component.css'
})
export class AccueilComponent {
  public date:number = Date.now();
  public page:string = "Accueil";

}
