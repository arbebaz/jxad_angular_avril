import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-liaison-unidirectionnelle',
  standalone: true,
  imports: [],
  templateUrl: './liaison-unidirectionnelle.component.html',
  styleUrl: './liaison-unidirectionnelle.component.css'
})
export class LiaisonUnidirectionnelleComponent implements OnInit{

  public texte!: string

  ngOnInit(): void {
    this.texte = "Ceci est mon joli texte!";
  }

}
