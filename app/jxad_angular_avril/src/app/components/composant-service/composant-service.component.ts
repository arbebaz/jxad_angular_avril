import { Component } from '@angular/core';
import { EmployeService } from '../../services/employe-service.service';
import { TopnavComponent } from '../topnav/topnav.component';

@Component({
  selector: 'app-composant-service',
  standalone: true,
  imports: [TopnavComponent],
  templateUrl: './composant-service.component.html',
  styleUrl: './composant-service.component.css'
})
export class ComposantServiceComponent {

  public page:string = "Page service"

  constructor(
    public employeService: EmployeService
  ) {
    console.log('log depuis le composant service: ', this.employeService.getEmployeList())
  }

}
