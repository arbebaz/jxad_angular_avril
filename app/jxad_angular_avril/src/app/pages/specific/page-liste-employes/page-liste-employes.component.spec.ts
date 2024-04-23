import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PageListeEmployesComponent } from './page-liste-employes.component';

describe('PageListeEmployesComponent', () => {
  let component: PageListeEmployesComponent;
  let fixture: ComponentFixture<PageListeEmployesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PageListeEmployesComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PageListeEmployesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
