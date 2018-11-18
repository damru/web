import { Injectable } from '@angular/core';
import { SkillCategory } from '../skill-category';
import { SKILL_CATEGORIES } from '../mock-skills';

@Injectable({
    providedIn: 'root'
})
export class SkillService {

    constructor() { }

    getSkillCategories(): SkillCategory[] {
        return SKILL_CATEGORIES;
    }
}
