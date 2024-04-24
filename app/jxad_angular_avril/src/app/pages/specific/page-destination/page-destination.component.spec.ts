import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PageDestinationComponent } from './page-destination.component';

describe('PageDestinationComponent', () => {
  let component: PageDestinationComponent;
  let fixture: ComponentFixture<PageDestinationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PageDestinationComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(PageDestinationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
