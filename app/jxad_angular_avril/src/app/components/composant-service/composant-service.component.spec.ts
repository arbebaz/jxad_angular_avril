import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ComposantServiceComponent } from './composant-service.component';

describe('ComposantServiceComponent', () => {
  let component: ComposantServiceComponent;
  let fixture: ComponentFixture<ComposantServiceComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ComposantServiceComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ComposantServiceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
