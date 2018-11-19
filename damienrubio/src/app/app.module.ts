import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { SkillsComponent } from './skills/skills.component';
import { ExperiencesComponent } from './experiences/experiences.component';

@NgModule({
  declarations: [
    AppComponent,
    SkillsComponent,
    ExperiencesComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
