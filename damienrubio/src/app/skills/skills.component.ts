import { Component, OnInit } from '@angular/core';
import { Skill } from '../skill';
import { SkillCategory } from '../skill-category';
import { SkillService } from './skill.service';

@Component({
    selector: 'app-skills',
    templateUrl: './skills.component.html',
    styleUrls: ['./skills.component.css']
})
export class SkillsComponent implements OnInit {

    skillCategories: SkillCategory[];

    constructor(private skillService: SkillService) { }

    ngOnInit() {
        this.getSkillCategories();
    }

    getSkillCategories(): void {
        this.skillCategories = this.skillService.getSkillCategories();
    }
}
