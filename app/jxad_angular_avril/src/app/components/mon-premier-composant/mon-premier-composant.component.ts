import { Component, OnInit } from '@angular/core';
import simpleDecorator from '../../decorators/simple-decorator.decorator';

@simpleDecorator({
  valeur1: '100',
  valeur2: '200'
})

@Component({
  selector: 'app-mon-premier-composant',
  standalone: true,
  imports: [],
  templateUrl: './mon-premier-composant.component.html',
  styleUrl: './mon-premier-composant.component.css',
})
export class MonPremierComposantComponent implements OnInit {
  ngOnInit(): void {
    console.log('Je suis le premier composant');
  }
}
