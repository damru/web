import { Component, OnInit } from '@angular/core';
import { Skill } from './skill';
import { SkillCategory } from './skill-category';
import { SkillService } from './skill.service';

@Component({
    selector: 'app-skills',
    templateUrl: './skills.component.html',
    styleUrls: ['./skills.component.scss']
})
export class SkillsComponent implements OnInit {

    skillCategories: SkillCategory[];
    skills: Skill[];

    constructor(private skillService: SkillService) { }

    ngOnInit() {
        this.getSkillCategories();
        this.getSkills();
    }

    getSkillCategories(): void {
        this.skillCategories = this.skillService.getSkillCategories();
    }

    getSkills(): void {
        this.skills = this.skillService.getSkills();
    }
}
