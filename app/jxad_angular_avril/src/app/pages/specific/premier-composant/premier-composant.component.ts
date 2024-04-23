import { Component } from '@angular/core';
import { MonPremierComposantComponent } from '../../../components/mon-premier-composant/mon-premier-composant.component';
import { TopnavComponent } from '../../../components/topnav/topnav.component';

@Component({
  selector: 'app-premier-composant',
  standalone: true,
  imports: [
    MonPremierComposantComponent, 
    TopnavComponent],
  templateUrl: './premier-composant.component.html',
  styleUrl: './premier-composant.component.css',
})
export class PremierComposantComponent {

  public page:string = "Mon premier composant"
}
