import { Skill } from './skill';
import { SkillCategory } from './skill-category';

export const SKILLS: Skill[] = [
    { id: 1, name: 'UML / Merise', levelBase100: 90, order: 0, categoryId: 1 },
    { id: 2, name: 'TDD / BDD', levelBase100: 100, order: 0, categoryId: 1 },
    { id: 3, name: 'Agile / Scrum', levelBase100: 100, order: 0, categoryId: 1 },
    { id: 4, name: 'API Design', levelBase100: 100, order: 0, categoryId: 1 },
    { id: 5, name: 'Microservice', levelBase100: 100, order: 0, categoryId: 1 },
    { id: 6, name: 'DevOps', levelBase100: 85, order: 0, categoryId: 1 },
    { id: 7, name: 'Java', levelBase100: 95, order: 0, categoryId: 2 },
    { id: 8, name: 'Spring / Spring Boot', levelBase100: 85, order: 0, categoryId: 2 },
    { id: 9, name: 'Hibernate / JPA', levelBase100: 90, order: 0, categoryId: 2 },
    { id: 10, name: 'C / C++', levelBase100: 30, order: 0, categoryId: 2 },
    { id: 11, name: 'PHP', levelBase100: 80, order: 0, categoryId: 2 },
    { id: 12, name: 'HTML', levelBase100: 90, order: 0, categoryId: 2 },
    { id: 13, name: 'CSS', levelBase100: 80, order: 0, categoryId: 2 },
    { id: 14, name: 'JavaScript', levelBase100: 80, order: 0, categoryId: 2 },
    { id: 15, name: 'Angular', levelBase100: 25, order: 0, categoryId: 2 },
    { id: 16, name: 'Bootstrap', levelBase100: 35, order: 0, categoryId: 2 },
    { id: 17, name: 'Python', levelBase100: 25, order: 0, categoryId: 2 },
    { id: 18, name: 'Shell Scripting', levelBase100: 80, order: 0, categoryId: 2 },
    { id: 19, name: 'Git / SVN', levelBase100: 90, order: 0, categoryId: 3 },
    // { id: 20, name: 'AWS', levelBase100: 20, order: 0, categoryId: 3 },
    { id: 21, name: 'Google Cloud', levelBase100: 10, order: 0, categoryId: 3 },
    { id: 22, name: 'Docker', levelBase100: 60, order: 0, categoryId: 3 },
    { id: 23, name: 'Jenkins, Maven, Sonar', levelBase100: 85, order: 0, categoryId: 3 },
    { id: 24, name: 'Unix', levelBase100: 85, order: 0, categoryId: 4 },
    { id: 25, name: 'Windows', levelBase100: 85, order: 0, categoryId: 4 },
    { id: 26, name: 'MySQL, T/SQL, PostgreSQL', levelBase100: 90, order: 0 , categoryId: 5}
];

export const SKILL_CATEGORIES: SkillCategory[] = [
    { id: 1, name: 'Architecture / Conception / Methodology', order: 0 },
    { id: 2, name: 'Languages / Frameworks', order: 0 },
    { id: 3, name: 'Industrialization / Platforms', order: 0 },
    { id: 4, name: 'OS', order: 0 },
    { id: 5, name: 'Databases', order: 0 }
];
