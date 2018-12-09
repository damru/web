import { Component, OnInit } from '@angular/core';
import { ExperiencesComponent } from '../experiences.component';

@Component({
  selector: 'app-jobs',
  templateUrl: './jobs.component.html',
  styleUrls: ['../experiences.component.css', './jobs.component.css']
})
export class JobsComponent extends ExperiencesComponent implements OnInit {

  constructor() {
    super();
  }

  ngOnInit() {
  }

}
