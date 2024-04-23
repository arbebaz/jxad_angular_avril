import { Component, OnInit } from '@angular/core';
import { EnfantComponent } from '../enfant/enfant.component';

type employee = {
  nom: string;
  prenom: string;
  fonction: string;
};
@Component({
  selector: 'app-parent',
  standalone: true,
  imports: [EnfantComponent],
  templateUrl: './parent.component.html',
  styleUrl: './parent.component.css',
})
export class ParentComponent implements OnInit {
  public data!: employee;

  public dataRecuDeEnfant!: string;

  ngOnInit(): void {
    this.data = {
      nom: 'Dupont',
      prenom: 'Jean',
      fonction: 'Manager',
    };
  }

  recupereLigneClick(ev: string) {
    // console.log(ev);
    this.dataRecuDeEnfant = ev;
  }
}
