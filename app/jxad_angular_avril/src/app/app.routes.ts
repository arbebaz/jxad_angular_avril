import { Routes } from '@angular/router';
import { AccueilComponent } from './pages/general/accueil/accueil.component';
import { NotFoundComponent } from './pages/not_found/not-found/not-found.component';
import { PremierComposantComponent } from './pages/specific/premier-composant/premier-composant.component';
import { PageLiaisonUnidirectionnelleComponent } from './pages/specific/page-liaison-unidirectionnelle/page-liaison-unidirectionnelle.component';
import { PageLiaisonBidirectionnelleComponent } from './pages/specific/page-liaison-bidirectionnelle/page-liaison-bidirectionnelle.component';

export const routes: Routes = [
  { path: '', component: AccueilComponent },

  {
    path: 'liaison-unidirectionnelle',
    component: PageLiaisonUnidirectionnelleComponent,
  },

  {
    path: 'liaison-bidirectionnelle',
    component: PageLiaisonBidirectionnelleComponent,
  },

  { path: 'premier-composant', component: PremierComposantComponent },

  { path: '***', component: NotFoundComponent },
];
