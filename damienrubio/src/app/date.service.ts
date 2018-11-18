import { Injectable } from '@angular/core';

declare var datediff: any;

@Injectable({
    providedIn: 'root'
})
export class DateService {

    constructor() { }

    diff(from: Date, to: Date): any {
        return datediff(from, to);
    }
}
