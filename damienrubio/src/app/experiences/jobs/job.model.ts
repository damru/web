import { Experience } from '../experience.model';

export class Job implements Experience {

    id: number;
    startDate: string;
    endDate: string;
    location: string;

    company: string;
    tasks: string[];
    skills: string[];

}
