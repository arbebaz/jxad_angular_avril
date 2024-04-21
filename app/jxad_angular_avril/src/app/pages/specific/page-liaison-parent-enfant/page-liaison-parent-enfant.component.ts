import { Component } from '@angular/core';
import { ParentComponent } from '../../../components/parent/parent.component';
import { EnfantComponent } from '../../../components/enfant/enfant.component';

@Component({
  selector: 'app-page-liaison-parent-enfant',
  standalone: true,
  imports: [
    ParentComponent
  ],
  templateUrl: './page-liaison-parent-enfant.component.html',
  styleUrl: './page-liaison-parent-enfant.component.css'
})
export class PageLiaisonParentEnfantComponent {

}
