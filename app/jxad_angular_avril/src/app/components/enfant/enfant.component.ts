import { Component, EventEmitter, Input, Output } from '@angular/core';

type employee = {
  nom: string, 
  prenom: string, 
  fonction: string, 
}

@Component({
  selector: 'app-enfant',
  standalone: true,
  imports: [],
  templateUrl: './enfant.component.html',
  styleUrl: './enfant.component.css'
})
export class EnfantComponent {
  // On perce la coque et on définit une variable qui recevra la données envoyée depuis le parent.
  // Une fois recue cette données est IMMUTABLE ( on ne peut pas la modifier ).
  // Mais elle est directement disponible dans le template (HTML) du composant. 

  @Input() dataRecuDuParent!: employee

  @Output() renvoiVersParentEvt: EventEmitter<string> = new EventEmitter<string>();

  renvoiVersParent(data: string) {

    this.renvoiVersParentEvt.emit(data);
  }

}
