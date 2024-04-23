import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PageLiaisonParentEnfantComponent } from './page-liaison-parent-enfant.component';

describe('PageLiaisonParentEnfantComponent', () => {
  let component: PageLiaisonParentEnfantComponent;
  let fixture: ComponentFixture<PageLiaisonParentEnfantComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PageLiaisonParentEnfantComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PageLiaisonParentEnfantComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
