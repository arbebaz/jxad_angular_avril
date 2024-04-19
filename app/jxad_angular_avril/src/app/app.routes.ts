import { Routes } from '@angular/router';
import { AccueilComponent } from './pages/general/accueil/accueil.component';
import { NotFoundComponent } from './pages/not_found/not-found/not-found.component';

export const routes: Routes = [
    { path: '', component: AccueilComponent},
    { path: 'NotFound', component: NotFoundComponent},
];
