import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PageLiaisonBidirectionnelleComponent } from './page-liaison-bidirectionnelle.component';

describe('PageLiaisonBidirectionnelleComponent', () => {
  let component: PageLiaisonBidirectionnelleComponent;
  let fixture: ComponentFixture<PageLiaisonBidirectionnelleComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PageLiaisonBidirectionnelleComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PageLiaisonBidirectionnelleComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
