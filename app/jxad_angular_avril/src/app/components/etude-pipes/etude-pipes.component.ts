import {
  CommonModule,
  CurrencyPipe,
  DatePipe,
  DecimalPipe,
  JsonPipe,
  LowerCasePipe,
  PercentPipe,
  SlicePipe,
  TitleCasePipe,
  UpperCasePipe,
} from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { UcfirstPipe } from '../../pipes/ucfirst.pipe';

type AutreObjet = {
  p1: string;
  p2: string;
};

interface MonObjet {
  prop1: string;
  prop2: AutreObjet;
}

@Component({
  selector: 'app-etude-pipes',
  standalone: true,
  imports: [
    CommonModule,
    CurrencyPipe,
    DatePipe,
    DecimalPipe,
    JsonPipe,
    TitleCasePipe,
    LowerCasePipe,
    UpperCasePipe,
    PercentPipe,
    SlicePipe,
    UcfirstPipe,
  ],
  templateUrl: './etude-pipes.component.html',
  styleUrl: './etude-pipes.component.css',
})
export class EtudePipesComponent implements OnInit {
  public aDate!: Date;
  public someObject!: MonObjet;

  ngOnInit(): void {
    this.aDate = new Date();
    this.someObject = {
      prop1: 'value1',
      prop2: {
        p1: 'v1',
        p2: 'v2',
      },
    };
  }
}
