import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EtudePipesComponent } from './etude-pipes.component';

describe('EtudePipesComponent', () => {
  let component: EtudePipesComponent;
  let fixture: ComponentFixture<EtudePipesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [EtudePipesComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(EtudePipesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
