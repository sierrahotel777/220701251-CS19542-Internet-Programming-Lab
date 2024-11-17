
import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { AppComponent } from './app.component'; 
import { HomeComponent } from './home/home.component'; 
import { AboutComponent } from './about/about.component'; 
import { ContactComponent } from './contact/contact.component'; 
import { routes } from './app.routes'; 

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AboutComponent,
    ContactComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(routes) 
  ],
  providers: [],
  bootstrap: [AppComponent] 
})
export class AppModule { }
