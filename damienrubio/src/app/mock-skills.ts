import { Skill } from './skill';
import { Skills } from './skills';

const SKILL_LIST: Skill[] = [
    { id: 1, name: 'UML / Merise', levelBase100: 90 },
    { id: 2, name: 'TDD / BDD', levelBase100: 100 },
    { id: 3, name: 'Agile / Scrum', levelBase100: 100 },
    { id: 4, name: 'API Design', levelBase100: 100 },
    { id: 5, name: 'Microservice', levelBase100: 100 },
    { id: 6, name: 'DevOps', levelBase100: 85 }
];

export const SKILLS: Skills = { id: 1, name: 'Architecture / Conception / Methodology', skills: SKILL_LIST };
