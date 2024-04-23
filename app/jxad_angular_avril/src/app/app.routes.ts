import { Routes } from '@angular/router';
import { AccueilComponent } from './pages/general/accueil/accueil.component';
import { NotFoundComponent } from './pages/not_found/not-found/not-found.component';
import { PremierComposantComponent } from './pages/specific/premier-composant/premier-composant.component';
import { PageLiaisonUnidirectionnelleComponent } from './pages/specific/page-liaison-unidirectionnelle/page-liaison-unidirectionnelle.component';
import { PageLiaisonBidirectionnelleComponent } from './pages/specific/page-liaison-bidirectionnelle/page-liaison-bidirectionnelle.component';
import path from 'path';
import { ParentComponent } from './components/parent/parent.component';
import { EnfantComponent } from './components/enfant/enfant.component';
import { PageLiaisonParentEnfantComponent } from './pages/specific/page-liaison-parent-enfant/page-liaison-parent-enfant.component';
import { ComposantServiceComponent } from './components/composant-service/composant-service.component';
import { PageListeEmployesComponent } from './pages/specific/page-liste-employes/page-liste-employes.component';
import { EtudePipesComponent } from './components/etude-pipes/etude-pipes.component';
import { ContactComponent } from './pages/general/contact/contact.component';
import { AboutComponent } from './pages/general/about/about.component';
import { NavigationComponent } from './components/navigation/navigation.component';
import { PageNavigationComponent } from './pages/specific/page-navigation/page-navigation.component';

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

  {
    path: 'liaison-parent-enfant',
    component: PageLiaisonParentEnfantComponent,
  },

  { path: 'premier-composant', component: PremierComposantComponent },

  { path: 'page-service', component: ComposantServiceComponent },

  { path: 'liste-employes', component: PageListeEmployesComponent },

  { path: 'page-etude-pipes', component: EtudePipesComponent },

  { path: 'contact', component: ContactComponent },

  { path: 'about', component: AboutComponent },

  { path: 'page-navigation', component: PageNavigationComponent },

  { path: '***', component: NotFoundComponent },
];
