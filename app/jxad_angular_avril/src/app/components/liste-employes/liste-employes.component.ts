import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { EmployeModel } from '../../models/employe-model.model';
import { EmployeService } from '../../services/employe-service.service';

@Component({
  selector: 'app-liste-employes',
  standalone: true,
  imports: [
    CommonModule
  ],
  templateUrl: './liste-employes.component.html',
  styleUrl: './liste-employes.component.css'
})
export class ListeEmployesComponent {
  public listeEmployes!: EmployeModel[]

  constructor(
    private employeService: EmployeService
  ) {
    this.listeEmployes = this.employeService.getEmployeList()
  }

}
