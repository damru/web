import { Skill } from './skill';

export class SkillCategory {
    id: number;
    name: string;
    skills: Array<Skill>;
    order: number;
}
