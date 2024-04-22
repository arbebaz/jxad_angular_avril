import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PageEtudePipesComponent } from './page-etude-pipes.component';

describe('PageEtudePipesComponent', () => {
  let component: PageEtudePipesComponent;
  let fixture: ComponentFixture<PageEtudePipesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PageEtudePipesComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PageEtudePipesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
