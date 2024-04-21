import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-liaison-bidirectionnelle',
  standalone: true,
  imports: [
    FormsModule
  ],
  templateUrl: './liaison-bidirectionnelle.component.html',
  styleUrl: './liaison-bidirectionnelle.component.css'
})
export class LiaisonBidirectionnelleComponent implements OnInit {
  public text1!: string
  public text2!: string;

  ngOnInit(): void {
    this.text1 = "Ceci est un jolie texte créé dans le code de fonctonnement"

    this.text2 = "Modifiez moi ! "
  }

}
