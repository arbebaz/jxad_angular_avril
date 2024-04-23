import { Injectable } from "@angular/core";
import * as dataResult from "../data/data.json"; 
import { EmployeModel } from "../models/employe-model.model";

@Injectable ({
    providedIn: "root"
})

export class DataService {
    getJsonData(): EmployeModel[]{
        // Angular lors de l'implémentation créé un "record" nommé "default" qui va contenir 
        //  le tableau d'objet. Il faut donc re stringifier pour ensuite parser afin de pouvoir obtenir le record en tant que 
        // propriété appelable sur l'objet dataResult

        let r: EmployeModel[] = JSON.parse(JSON.stringify(dataResult)).default
        return r
    }
}