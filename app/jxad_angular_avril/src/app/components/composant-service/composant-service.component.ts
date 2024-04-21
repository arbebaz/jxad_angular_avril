import { Component } from '@angular/core';
import { EmployeService } from '../../services/employe-service.service';

@Component({
  selector: 'app-composant-service',
  standalone: true,
  imports: [],
  templateUrl: './composant-service.component.html',
  styleUrl: './composant-service.component.css'
})
export class ComposantServiceComponent {

  constructor(
    public employeService: EmployeService
  ) {
    console.log('log depuis le composant service: ', this.employeService.getEmployeList())
  }

}
