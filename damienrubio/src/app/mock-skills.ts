import { Skill } from './skill';
import { SkillCategory } from './skill-category';

const SKILL_LIST1: Skill[] = [
    { id: 1, name: 'UML / Merise', levelBase100: 90, order: 0 },
    { id: 2, name: 'TDD / BDD', levelBase100: 100, order: 0 },
    { id: 3, name: 'Agile / Scrum', levelBase100: 100, order: 0 },
    { id: 4, name: 'API Design', levelBase100: 100, order: 0 },
    { id: 5, name: 'Microservice', levelBase100: 100, order: 0 },
    { id: 6, name: 'DevOps', levelBase100: 85, order: 0 }
];

const SKILL_LIST2: Skill[] = [
    { id: 7, name: 'Java', levelBase100: 95, order: 0 },
    { id: 8, name: 'Spring / Spring Boot', levelBase100: 85, order: 0 },
    { id: 9, name: 'Hibernate / JPA', levelBase100: 90, order: 0 },
    { id: 10, name: 'C / C++', levelBase100: 30, order: 0 },
    { id: 11, name: 'PHP', levelBase100: 80, order: 0 },
    { id: 12, name: 'HTML', levelBase100: 90, order: 0 },
    { id: 13, name: 'CSS', levelBase100: 80, order: 0 },
    { id: 14, name: 'JavaScript', levelBase100: 80, order: 0 },
    { id: 15, name: 'Angular', levelBase100: 25, order: 0 },
    { id: 16, name: 'Bootstrap', levelBase100: 35, order: 0 },
    { id: 17, name: 'Python', levelBase100: 25, order: 0 },
    { id: 18, name: 'Shell Scripting', levelBase100: 80, order: 0 }
];
const SKILL_LIST3: Skill[] = [
    { id: 19, name: 'Git / SVN', levelBase100: 90, order: 0 },
    // { id: 20, name: 'AWS', levelBase100: 20, order: 0 },
    { id: 21, name: 'Google Cloud', levelBase100: 10, order: 0 },
    { id: 22, name: 'Docker', levelBase100: 60, order: 0 },
    { id: 23, name: 'Jenkins, Maven, Sonar', levelBase100: 85, order: 0 }
];

const SKILL_LIST4: Skill[] = [
    { id: 24, name: 'Unix', levelBase100: 85, order: 0 },
    { id: 25, name: 'Windows', levelBase100: 85, order: 0 }
];

const SKILL_LIST5: Skill[] = [
    { id: 26, name: 'MySQL, T/SQL, PostgreSQL', levelBase100: 90, order: 0 }
];

export const SKILL_CATEGORIES: SkillCategory[] = [
    { id: 1, name: 'Architecture / Conception / Methodology', skills: SKILL_LIST1, order: 0 },
    { id: 2, name: 'Languages / Frameworks', skills: SKILL_LIST2, order: 0 },
    { id: 3, name: 'Industrialization / Platforms', skills: SKILL_LIST3, order: 0 },
    { id: 4, name: 'OS', skills: SKILL_LIST4, order: 0 },
    { id: 5, name: 'Databases', skills: SKILL_LIST5, order: 0 }
];
