import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PageLiaisonUnidirectionnelleComponent } from './page-liaison-unidirectionnelle.component';

describe('PageLiaisonUnidirectionnelleComponent', () => {
  let component: PageLiaisonUnidirectionnelleComponent;
  let fixture: ComponentFixture<PageLiaisonUnidirectionnelleComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PageLiaisonUnidirectionnelleComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PageLiaisonUnidirectionnelleComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
