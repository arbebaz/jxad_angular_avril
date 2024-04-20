import { Component } from '@angular/core';
import { MonPremierComposantComponent } from '../../../components/mon-premier-composant/mon-premier-composant.component';

@Component({
  selector: 'app-premier-composant',
  standalone: true,
  imports: [MonPremierComposantComponent],
  templateUrl: './premier-composant.component.html',
  styleUrl: './premier-composant.component.css'
})
export class PremierComposantComponent {

}
