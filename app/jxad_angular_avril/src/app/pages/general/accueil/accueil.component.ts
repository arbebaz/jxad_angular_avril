import { DatePipe } from '@angular/common';
import { Component } from '@angular/core';
import { UcfirstPipe } from '../../../pipes/ucfirst.pipe';

@Component({
  selector: 'app-accueil',
  standalone: true,
  imports: [
    DatePipe,
    UcfirstPipe,
  ],
  templateUrl: './accueil.component.html',
  styleUrl: './accueil.component.css'
})
export class AccueilComponent {
  public date:number = Date.now();

}
