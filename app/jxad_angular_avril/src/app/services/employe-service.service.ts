import { Injectable } from '@angular/core';
import { EmployeModel } from '../models/employe-model.model';
import { DataService } from './dataService.data';

@Injectable({
  providedIn: 'root',
})
export class EmployeService {
  private EmployeList!: EmployeModel[];
  constructor(public dataService: DataService) {
    // des l'initialisation de notre service, celui ci va lancer une requete ajax
    // vers un API afin de récuperer une liste d'employé.
    // Pour lancer un appel ajax, il existe l'instruction fetch d'es6, mais aussi
    // beaucoup de librairies spécialisée dans les requetes async.
    // Parmis ces librairies, l'une des plus utilisée est la librairie axios.
    // comme nous n'avont pas d'api à interroger, pour cet exercice,
    // nous simulerons la reception d'une réponse json.

    this.EmployeList = this.dataService.getJsonData();

    // vérifions à la console 
    console.log('tableau liste des employés depuis le service: ', this.EmployeList);
  }

//   un service possède toutes les méthodes nécessaires pour fournir les données 
// selon différent filtres et format, fonction des besoins de l'application. 
getEmployeList(): EmployeModel[]{
    return this.EmployeList;
}

getEmployeByfonction(fonction: string): EmployeModel[] {
    let temp: EmployeModel[] = []; 
    this.EmployeList.map(employe => {
        if (employe.fonction === fonction){
            temp.push(employe); 
        }
    })

    return temp; 
}
}
