(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "./src/$$_lazy_route_resource lazy recursive":
/*!**********************************************************!*\
  !*** ./src/$$_lazy_route_resource lazy namespace object ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./src/$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./src/app/app.component.css":
/*!***********************************!*\
  !*** ./src/app/app.component.css ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2FwcC5jb21wb25lbnQuY3NzIn0= */"

/***/ }),

/***/ "./src/app/app.component.html":
/*!************************************!*\
  !*** ./src/app/app.component.html ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<body class=\"dark-grey\">\r\n    <div class=\"container\">\r\n        <div id=\"personal-details\">\r\n            <h1 class=\"dark-green\">Damien Rubio</h1>\r\n            <div>(514) 915-6290 | <a class=\"green\" href=\"mailto:job@damienrubio.com\">job@damienrubio.com</a> | Montreal, QC, Canada</div>\r\n        </div>\r\n        <div class=\"d-lg-flex d-print-flex\">\r\n            <div class=\"order-2\">\r\n                <app-skills></app-skills>\r\n            </div>\r\n            <div class=\"order-1\">\r\n                <app-experiences></app-experiences>\r\n            </div>\r\n        </div>\r\n        <div class=\"container-fluid text-smaller d-print-none\" id=\"powered-by\">\r\n            Crafted with <span class=\"heart\">&hearts;</span><br>and powered by <a href=\"https://www.docker.com/\" target=\"_blank\">Docker</a>, <a href=\"https://www.nginx.com/\" target=\"_blank\">Nginx</a>, <a href=\"https://angular.io/\" target=\"_blank\">Angular</a> and <a href=\"https://getbootstrap.com/\" target=\"_blank\">Bootstrap</a>\r\n        </div>\r\n    </div>\r\n</body>\r\n"

/***/ }),

/***/ "./src/app/app.component.ts":
/*!**********************************!*\
  !*** ./src/app/app.component.ts ***!
  \**********************************/
/*! exports provided: AppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppComponent", function() { return AppComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};

var AppComponent = /** @class */ (function () {
    function AppComponent() {
        this.title = 'damienrubio';
    }
    AppComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-root',
            template: __webpack_require__(/*! ./app.component.html */ "./src/app/app.component.html"),
            styles: [__webpack_require__(/*! ./app.component.css */ "./src/app/app.component.css")]
        })
    ], AppComponent);
    return AppComponent;
}());



/***/ }),

/***/ "./src/app/app.module.ts":
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app.component */ "./src/app/app.component.ts");
/* harmony import */ var _skills_skills_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./skills/skills.component */ "./src/app/skills/skills.component.ts");
/* harmony import */ var _experiences_experiences_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./experiences/experiences.component */ "./src/app/experiences/experiences.component.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};





var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            declarations: [
                _app_component__WEBPACK_IMPORTED_MODULE_2__["AppComponent"],
                _skills_skills_component__WEBPACK_IMPORTED_MODULE_3__["SkillsComponent"],
                _experiences_experiences_component__WEBPACK_IMPORTED_MODULE_4__["ExperiencesComponent"]
            ],
            imports: [
                _angular_platform_browser__WEBPACK_IMPORTED_MODULE_0__["BrowserModule"]
            ],
            providers: [],
            bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_2__["AppComponent"]]
        })
    ], AppModule);
    return AppModule;
}());



/***/ }),

/***/ "./src/app/date.service.ts":
/*!*********************************!*\
  !*** ./src/app/date.service.ts ***!
  \*********************************/
/*! exports provided: DateService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "DateService", function() { return DateService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};

var DateService = /** @class */ (function () {
    function DateService() {
    }
    DateService.prototype.diff = function (from, to) {
        return datediff(from, to);
    };
    DateService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])({
            providedIn: 'root'
        }),
        __metadata("design:paramtypes", [])
    ], DateService);
    return DateService;
}());



/***/ }),

/***/ "./src/app/experiences/experiences.component.css":
/*!*******************************************************!*\
  !*** ./src/app/experiences/experiences.component.css ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = ".experience {\r\n    margin-bottom: 1rem;\r\n}\r\n.experience h2 {\r\n\tfont-size: 1.5em;\r\n    padding: 10px 5px 10px 5px;\r\n}\r\n.experience h2 span.eq-diploma {\r\n    display: block;\r\n    font-size: 0.9em;\r\n}\r\n.date {\r\n\tpadding: 0.5em 5px 0 5px;\r\n    border-right: 1px dotted #b6ceb1;\r\n}\r\n.date::after {\r\n    position: absolute;\r\n    top: 1em;\r\n    right: -5px;\r\n    width: 10px;\r\n    height: 10px;\r\n    content: ''; \r\n    background-color: #b6ceb1;\r\n    border-radius: 50%;\r\n}\r\n.location {\r\n    margin-bottom: 5px;\r\n}\r\n.school, .company {\r\n    font-family: \"Oswald\", sans-serif;\r\n    font-size: 1.3em;\r\n}\r\nul.tasks {\r\n\tmargin: 0;\r\n\tpadding: 0;\r\n\tlist-style: none;\r\n    text-align: justify;\r\n    line-height: 1.2em;\r\n}\r\nul.job-skills {\r\n\tdisplay: inline-block;\r\n\tpadding: 10px 20px 0 20px;\r\n    margin: 0;\r\n\tfont-style: italic;\r\n\tfont-weight: lighter;\r\n}\r\nul.job-skills li:first-child::before {\r\n\tcontent: \"\";\r\n}\r\nul.job-skills li {\r\n    display: inline-block;\r\n}\r\nul li::before {\r\n\tcontent: \"•\";\r\n\tmargin-right: 5px;\r\n\tmargin-left: 5px;\r\n}\r\n.experience .col-10 {\r\n    margin-bottom: 1em;\r\n}\r\n.experience .col-10:last-child {\r\n    margin-bottom: 0;\r\n}\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvZXhwZXJpZW5jZXMvZXhwZXJpZW5jZXMuY29tcG9uZW50LmNzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQTtJQUNJLG9CQUFvQjtDQUN2QjtBQUNEO0NBQ0MsaUJBQWlCO0lBQ2QsMkJBQTJCO0NBQzlCO0FBQ0Q7SUFDSSxlQUFlO0lBQ2YsaUJBQWlCO0NBQ3BCO0FBQ0Q7Q0FDQyx5QkFBeUI7SUFDdEIsaUNBQWlDO0NBQ3BDO0FBQ0Q7SUFDSSxtQkFBbUI7SUFDbkIsU0FBUztJQUNULFlBQVk7SUFDWixZQUFZO0lBQ1osYUFBYTtJQUNiLFlBQVk7SUFDWiwwQkFBMEI7SUFDMUIsbUJBQW1CO0NBQ3RCO0FBQ0Q7SUFDSSxtQkFBbUI7Q0FDdEI7QUFDRDtJQUNJLGtDQUFrQztJQUNsQyxpQkFBaUI7Q0FDcEI7QUFDRDtDQUNDLFVBQVU7Q0FDVixXQUFXO0NBQ1gsaUJBQWlCO0lBQ2Qsb0JBQW9CO0lBQ3BCLG1CQUFtQjtDQUN0QjtBQUNEO0NBQ0Msc0JBQXNCO0NBQ3RCLDBCQUEwQjtJQUN2QixVQUFVO0NBQ2IsbUJBQW1CO0NBQ25CLHFCQUFxQjtDQUNyQjtBQUNEO0NBQ0MsWUFBWTtDQUNaO0FBQ0Q7SUFDSSxzQkFBc0I7Q0FDekI7QUFDRDtDQUNDLGFBQWE7Q0FDYixrQkFBa0I7Q0FDbEIsaUJBQWlCO0NBQ2pCO0FBRUQ7SUFDSSxtQkFBbUI7Q0FDdEI7QUFDRDtJQUNJLGlCQUFpQjtDQUNwQiIsImZpbGUiOiJzcmMvYXBwL2V4cGVyaWVuY2VzL2V4cGVyaWVuY2VzLmNvbXBvbmVudC5jc3MiLCJzb3VyY2VzQ29udGVudCI6WyIuZXhwZXJpZW5jZSB7XHJcbiAgICBtYXJnaW4tYm90dG9tOiAxcmVtO1xyXG59XHJcbi5leHBlcmllbmNlIGgyIHtcclxuXHRmb250LXNpemU6IDEuNWVtO1xyXG4gICAgcGFkZGluZzogMTBweCA1cHggMTBweCA1cHg7XHJcbn1cclxuLmV4cGVyaWVuY2UgaDIgc3Bhbi5lcS1kaXBsb21hIHtcclxuICAgIGRpc3BsYXk6IGJsb2NrO1xyXG4gICAgZm9udC1zaXplOiAwLjllbTtcclxufVxyXG4uZGF0ZSB7XHJcblx0cGFkZGluZzogMC41ZW0gNXB4IDAgNXB4O1xyXG4gICAgYm9yZGVyLXJpZ2h0OiAxcHggZG90dGVkICNiNmNlYjE7XHJcbn1cclxuLmRhdGU6OmFmdGVyIHtcclxuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcclxuICAgIHRvcDogMWVtO1xyXG4gICAgcmlnaHQ6IC01cHg7XHJcbiAgICB3aWR0aDogMTBweDtcclxuICAgIGhlaWdodDogMTBweDtcclxuICAgIGNvbnRlbnQ6ICcnOyBcclxuICAgIGJhY2tncm91bmQtY29sb3I6ICNiNmNlYjE7XHJcbiAgICBib3JkZXItcmFkaXVzOiA1MCU7XHJcbn1cclxuLmxvY2F0aW9uIHtcclxuICAgIG1hcmdpbi1ib3R0b206IDVweDtcclxufVxyXG4uc2Nob29sLCAuY29tcGFueSB7XHJcbiAgICBmb250LWZhbWlseTogXCJPc3dhbGRcIiwgc2Fucy1zZXJpZjtcclxuICAgIGZvbnQtc2l6ZTogMS4zZW07XHJcbn1cclxudWwudGFza3Mge1xyXG5cdG1hcmdpbjogMDtcclxuXHRwYWRkaW5nOiAwO1xyXG5cdGxpc3Qtc3R5bGU6IG5vbmU7XHJcbiAgICB0ZXh0LWFsaWduOiBqdXN0aWZ5O1xyXG4gICAgbGluZS1oZWlnaHQ6IDEuMmVtO1xyXG59XHJcbnVsLmpvYi1za2lsbHMge1xyXG5cdGRpc3BsYXk6IGlubGluZS1ibG9jaztcclxuXHRwYWRkaW5nOiAxMHB4IDIwcHggMCAyMHB4O1xyXG4gICAgbWFyZ2luOiAwO1xyXG5cdGZvbnQtc3R5bGU6IGl0YWxpYztcclxuXHRmb250LXdlaWdodDogbGlnaHRlcjtcclxufVxyXG51bC5qb2Itc2tpbGxzIGxpOmZpcnN0LWNoaWxkOjpiZWZvcmUge1xyXG5cdGNvbnRlbnQ6IFwiXCI7XHJcbn1cclxudWwuam9iLXNraWxscyBsaSB7XHJcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XHJcbn1cclxudWwgbGk6OmJlZm9yZSB7XHJcblx0Y29udGVudDogXCLigKJcIjtcclxuXHRtYXJnaW4tcmlnaHQ6IDVweDtcclxuXHRtYXJnaW4tbGVmdDogNXB4O1xyXG59XHJcblxyXG4uZXhwZXJpZW5jZSAuY29sLTEwIHtcclxuICAgIG1hcmdpbi1ib3R0b206IDFlbTtcclxufVxyXG4uZXhwZXJpZW5jZSAuY29sLTEwOmxhc3QtY2hpbGQge1xyXG4gICAgbWFyZ2luLWJvdHRvbTogMDtcclxufSJdfQ== */"

/***/ }),

/***/ "./src/app/experiences/experiences.component.html":
/*!********************************************************!*\
  !*** ./src/app/experiences/experiences.component.html ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div id=\"background\">\r\n    <div class=\"cv-part\" id=\"work-experiences\">\r\n        <h1 class=\"light-green\">work experience</h1>\r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Senior Software Engineer / Technical Leader</h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>feb. 2017 - present</strong></div>\r\n                <div class=\"light-green\">{{ getDuration('2017-02-01') }}</div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"company\">Société Général CIB</div>\r\n                <div class=\"location text-smaller light-green\">Montreal, QC, Canada<br>Val-de-Fontenay, France</div>\r\n                <ul class=\"tasks\">\r\n                    <li>Kickstarted a new project by creating guidelines for development, testing, build etc. in order to provide the future feature teams with strong and common basis.</li>\r\n                    <li>Designed a microservice architectured application providing many APIs to process legal contracts and provide services on them.</li>\r\n                    <li>Backend development with a TDD/BDD approach. Created integration testings and scenarios with business users and their requirements.\r\n                    <li>Successfully created build pipelines in order to have a continuous integration environment and flawlessly deliver in production.</li>\r\n                    <li>Contribution to the frontend client development.</li>\r\n                </ul>\r\n                <ul class=\"job-skills text-smaller\">\r\n                    <li>Java</li>\r\n                    <li>Spring</li>\r\n                    <li>Spring Boot</li>\r\n                    <li>OAuth2</li>\r\n                    <li>Consul</li>\r\n                    <li>Zuul</li>\r\n                    <li>Jenkins</li>\r\n                    <li>Sonar</li>\r\n                    <li>Git</li>\r\n                    <li>Maven</li>\r\n                    <li>Docker</li>\r\n                    <li>Angular</li>\r\n                    <li>Python</li>\r\n                    <li>BDD</li>\r\n                    <li>TDD</li>\r\n                    <li>DevOps</li>\r\n                </ul>\r\n            </div>\r\n        </div>  \r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Software Engineer</h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>nov. 2016 - feb. 2017</strong></div>\r\n                <div class=\"light-green\">4 months</div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"company\">Generali</div>\r\n                <div class=\"location text-smaller light-green\">La Plaine Saint-Denis, France</div>\r\n                <ul class=\"tasks\">\r\n                    <li>Implemented good practices and development guidelines in order to stabilize and standardize all Java applications of the IT department (industrialization, TDD, BDD, intergration testings).</li>\r\n                    <li>Migrated an obsolete webservice from Corba to Java.</li>\r\n                </ul>\r\n                <ul class=\"job-skills text-smaller\">\r\n                    <li>J2EE</li>\r\n                    <li>Angular JS</li>\r\n                    <li>Selenuim/Fluentlenium</li>\r\n                    <li>Jenkins</li>\r\n                </ul>\r\n            </div>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>oct. 2016 - nov. 2016</strong></div>\r\n                <div class=\"light-green\">1 month</div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"company\">SFEIR</div>\r\n                <div class=\"location text-smaller light-green\">Neuilly-sur-Seine, France</div>\r\n                <ul class=\"tasks\">\r\n                    <li>Contribution to the backend development of an application dedicated to the employees skillsets with a graph database and graphic representation.</li>\r\n                </ul>\r\n                <ul class=\"job-skills text-smaller\">\r\n                    <li>Java</li>\r\n                    <li>Docker</li>\r\n                    <li>Spring</li>\r\n                    <li>Spring Boot</li>\r\n                    <li>Neo4J Database</li>\r\n                    <li>Google Cloud (AppEngine, ComputeEngine)</li>\r\n                </ul>\r\n            </div>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>feb. 2013 - oct. 2016</strong></div>\r\n                <div class=\"light-green\">3 years 8 months</div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"company\">Crédit Agricole CIB</div>\r\n                <div class=\"location text-smaller light-green\">Courbevoie, France<br>New-York, NY, USA (2014)</div>\r\n                <ul class=\"tasks\">\r\n                    <li>Designed and implemented the complete refactoring of inhouse front-to-back booking application from Struts to Spring, and from Java 5 to Java with teams in Paris and Noida (India).</li>\r\n                    <li>Completed the makeover of the CTRLM (scheduler) architecture for CACIB New-York IT Treasury department.</li>\r\n                    <li>Study and development for Treasury IT on front-to-back proprietary application Kondor+.</li>\r\n                    <li>Handled support L3 and managed offshore team in Noida (6 peoples, India).\r\n                </ul>\r\n                <ul class=\"job-skills text-smaller\">\r\n                    <li>Java</li>\r\n                    <li>Spring</li>\r\n                    <li>Hibernate</li>\r\n                    <li>jUnit</li>\r\n                    <li>SVN</li>\r\n                    <li>Maven</li>\r\n                    <li>JavaScript</li>\r\n                    <li>Kondor+ by Misys (formerly by Reuters)</li>\r\n                    <li>Shell scripting</li>\r\n                    <li>STP</li>\r\n                    <li>Sybase ASE (T/SQL)</li>\r\n                    <li>CTRLM</li>\r\n                    <li>Team Management</li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Programmer Analyst</h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>may 2012 - nov. 2012</strong></div>\r\n                <div class=\"light-green\">7 months</div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"company\">BNP Paribas</div>\r\n                <div class=\"location text-smaller light-green\">Montreuil, France</div>\r\n                <ul class=\"tasks\">\r\n                    <li>Detailed analysis of business requirements to enhance the reporting tool of the Treasury.</li>\r\n                    <li>Development of new reports through the creation of complex stored procedures.</li>\r\n                    <li>Optimization of the stored procedures through indexes and complex sql joins with temporary tables.</li>\r\n                </ul>\r\n                <ul class=\"job-skills text-smaller\">\r\n                    <li>SVN</li>\r\n                    <li>Shell scripting</li>\r\n                    <li>Sybase ASE (T/SQL)</li>\r\n                    <li>C++</li>\r\n                    <li>Powerbuilder</li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Web Developper</h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>apr. 2011 - jul. 2011</strong></div>\r\n                <div class=\"light-green\">6 months</div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"company\">buzzing light</div>\r\n                <div class=\"location text-smaller light-green\">Paris, France</div>\r\n                <ul class=\"tasks\">\r\n                    <li>Backend and frontend development for the short-term jobs web and mobile platform <strong><i>Beepjob</i></strong></li>\r\n                    <li>Creation of the search engine based on the user location. Enhancement of this search engine to take into account many criterias (distance, type of contract, relevance)</li>\r\n                    <li>Contribution to the design of the visual identity.</li>\r\n                </ul>\r\n                <ul class=\"job-skills text-smaller\">\r\n                    <li>PHP</li>\r\n                    <li>HTML</li>\r\n                    <li>CSS</li>\r\n                    <li>JavaScript</li>\r\n                    <li>AJAX</li>\r\n                    <li>MySQL</li>\r\n                    <li>Google Geolocation API</li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div class=\"cv-part\" id=\"education\">\r\n        <h1 class=\"light-green\">education</h1>\r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Diplôme d'Ingénieur<span class=\"eq-diploma grey\">5th year degree in Computer Engineering</span></h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>2009 - 2012</strong></div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"school\">ECE Paris École d’Ingénieurs <span class=\"location text-smaller light-green\">Paris, France</span></div>\r\n                <div class=\"dark-green text-smaller\">Major Information Technologies</div>\r\n                <div class=\"light-green text-smaller\">Minor Audiovisual & Multimedia</div>\r\n                <div class=\"school grey\">Concordia University <i class=\"text-smaller\">(sept. – dec. 2011) </i> <span class=\"location text-smaller light-green\">Montreal, QC, Canada</span></div>\r\n                <div class=\"light-green text-smaller\">Computer Science</div>\r\n            </div>\r\n        </div>  \r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Diplôme Universitaire de Technologie (DUT) Informatique<span class=\"eq-diploma grey\">2 years technical degree in Computer Engineering</span></h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>2007 - 2009</strong></div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"school\">IUT de Montreuil Université Paris 8 <span class=\"location text-smaller light-green\">Montreuil, France</span></div>\r\n                <div class=\"dark-green text-smaller\">Major Software Development</div>\r\n                <div class=\"light-green text-smaller\">Minor Software Development</div>\r\n                <div class=\"school grey\">Wrexham Glyndwr University <i class=\"text-smaller\">(jun. – aug. 2008) </i><span class=\"location text-smaller light-green\">Wrexham, Wales</span></div>\r\n                <div class=\"light-green text-smaller\">Applied Computing</div>\r\n            </div>\r\n        </div>  \r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Diplôme d'Etudes Universitaires Générales (DEUG) d'Admistration Economique et Sociale<span class=\"eq-diploma grey\">2 years University degree in Administration, Economics and Social Science</span></h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>2004 - 2007</strong></div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"school\">Université Paris 1 Panthéon-Sorbonne <span class=\"location text-smaller light-green\">Paris, France</span></div>\r\n            </div>\r\n        </div>  \r\n        <div class=\"row experience\">\r\n            <h2 class=\"container-fluid\">Baccalauréat Economique et Social<span class=\"eq-diploma grey\">French High-School diploma in Economics And Social Science</span></h2>\r\n            <div class=\"col-2 date text-smaller\">\r\n                <div class=\"dark-green\"><strong>2001 - 2004</strong></div>\r\n            </div>\r\n            <div class=\"col-10\">\r\n                <div class=\"school\">Lycée Romain Rolland <span class=\"location text-smaller light-green\">Ivry-sur-Seine, France</span></div>\r\n                <div class=\"dark-green text-smaller\">Major Economics</div>\r\n            </div>\r\n        </div>  \r\n    </div>\r\n</div>"

/***/ }),

/***/ "./src/app/experiences/experiences.component.ts":
/*!******************************************************!*\
  !*** ./src/app/experiences/experiences.component.ts ***!
  \******************************************************/
/*! exports provided: ExperiencesComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ExperiencesComponent", function() { return ExperiencesComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _date_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../date.service */ "./src/app/date.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var ExperiencesComponent = /** @class */ (function () {
    function ExperiencesComponent(dateService) {
        this.dateService = dateService;
    }
    ExperiencesComponent.prototype.ngOnInit = function () {
    };
    ExperiencesComponent.prototype.getDuration = function (from, to) {
        var dateFrom = from ? new Date(from) : new Date();
        var dateTo = to ? new Date(to) : new Date();
        var diff = this.dateService.diff(dateFrom, dateTo);
        var y = diff.years > 0 ?
            diff.years > 1 ?
                diff.years + ' years '
                : diff.years + ' year '
            : '';
        var m = diff.months > 0 ?
            diff.months > 1 ?
                diff.months + ' months '
                : diff.months + ' month '
            : '';
        return y + m;
    };
    ExperiencesComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-experiences',
            template: __webpack_require__(/*! ./experiences.component.html */ "./src/app/experiences/experiences.component.html"),
            styles: [__webpack_require__(/*! ./experiences.component.css */ "./src/app/experiences/experiences.component.css")]
        }),
        __metadata("design:paramtypes", [_date_service__WEBPACK_IMPORTED_MODULE_1__["DateService"]])
    ], ExperiencesComponent);
    return ExperiencesComponent;
}());



/***/ }),

/***/ "./src/app/mock-skills.ts":
/*!********************************!*\
  !*** ./src/app/mock-skills.ts ***!
  \********************************/
/*! exports provided: SKILL_CATEGORIES */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SKILL_CATEGORIES", function() { return SKILL_CATEGORIES; });
var SKILL_LIST1 = [
    { id: 1, name: 'UML / Merise', levelBase100: 90, order: 0 },
    { id: 2, name: 'TDD / BDD', levelBase100: 100, order: 0 },
    { id: 3, name: 'Agile / Scrum', levelBase100: 100, order: 0 },
    { id: 4, name: 'API Design', levelBase100: 100, order: 0 },
    { id: 5, name: 'Microservice', levelBase100: 100, order: 0 },
    { id: 6, name: 'DevOps', levelBase100: 85, order: 0 }
];
var SKILL_LIST2 = [
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
var SKILL_LIST3 = [
    { id: 19, name: 'Git / SVN', levelBase100: 90, order: 0 },
    // { id: 20, name: 'AWS', levelBase100: 20, order: 0 },
    { id: 21, name: 'Google Cloud', levelBase100: 10, order: 0 },
    { id: 22, name: 'Docker', levelBase100: 60, order: 0 },
    { id: 23, name: 'Jenkins, Maven, Sonar', levelBase100: 85, order: 0 }
];
var SKILL_LIST4 = [
    { id: 24, name: 'Unix', levelBase100: 85, order: 0 },
    { id: 25, name: 'Windows', levelBase100: 85, order: 0 }
];
var SKILL_LIST5 = [
    { id: 26, name: 'MySQL, T/SQL, PostgreSQL', levelBase100: 90, order: 0 }
];
var SKILL_CATEGORIES = [
    { id: 1, name: 'Architecture / Conception / Methodology', skills: SKILL_LIST1, order: 0 },
    { id: 2, name: 'Languages / Frameworks', skills: SKILL_LIST2, order: 0 },
    { id: 3, name: 'Industrialization / Platforms', skills: SKILL_LIST3, order: 0 },
    { id: 4, name: 'OS', skills: SKILL_LIST4, order: 0 },
    { id: 5, name: 'Databases', skills: SKILL_LIST5, order: 0 }
];


/***/ }),

/***/ "./src/app/skills/skill.service.ts":
/*!*****************************************!*\
  !*** ./src/app/skills/skill.service.ts ***!
  \*****************************************/
/*! exports provided: SkillService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SkillService", function() { return SkillService; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _mock_skills__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../mock-skills */ "./src/app/mock-skills.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var SkillService = /** @class */ (function () {
    function SkillService() {
    }
    SkillService.prototype.getSkillCategories = function () {
        return _mock_skills__WEBPACK_IMPORTED_MODULE_1__["SKILL_CATEGORIES"];
    };
    SkillService = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Injectable"])({
            providedIn: 'root'
        }),
        __metadata("design:paramtypes", [])
    ], SkillService);
    return SkillService;
}());



/***/ }),

/***/ "./src/app/skills/skills.component.css":
/*!*********************************************!*\
  !*** ./src/app/skills/skills.component.css ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "#skills {\r\n    max-width: 280px;\r\n    margin-left: 30px;\r\n}\r\nh1#skills-header {\r\n\tfont-size: 2em;\r\n    text-align: center;\r\n    text-transform: uppercase;\r\n}\r\n.skill {\r\n\tbackground-color: #b6ceb1;\r\n    border-radius: 7px;\r\n    margin: 0 0 20px 0 ;\r\n    padding: 10px 0 20px 0;\r\n    min-width: 250px;\r\n    max-width: 250px;\r\n}\r\n.skill h2 {\r\n\tbackground-color: #688162;\r\n    border-radius: 7px;\r\n    margin: 0 -3px 10px -3px;\r\n    padding: 10px 8px;\r\n\tfont-size: 1.4em;\r\n    font-weight: normal;\r\n    color: #fcfcfc;\r\n}\r\n.skill .label {\r\n\tfont-weight: bold;\r\n}\r\n.skill table {\r\n    width: 100%;\r\n}\r\n.skill table tr {\r\n    width: 100%\r\n}\r\n.skill table td {\r\n\twidth: 50%;\r\n    max-width: 50%;\r\n\tpadding: 2px 10px;\r\n    vertical-align: top;\r\n}\r\n.skill .title img {\r\n\twidth: 30px;\r\n}\r\n/*\r\nprogress bars\r\n*/\r\n.progress {\r\n    background-color: #707F70;\r\n\tbox-shadow: 0px 0px 2px rgba(0,0,0,.8) inset;\r\n}\r\n.progress-bar {\r\n    background-color: #323332;\r\n\tborder-radius: 3px;\r\n    text-indent: -9999px; \r\n}\r\n/*\r\n* to large screen\r\n*/\r\n@media (max-width: 991.98px) {\r\n    \r\n    #skills {\r\n        max-width: 100%;\r\n        margin-left:auto;\r\n    }\r\n    \r\n    .skill {\r\n        margin-right: 15px;\r\n        margin-left: 15px;\r\n    }\r\n\r\n}\r\n@media print  \r\n{\r\n    div {\r\n        float: none !important;\r\n    }\r\n    \r\n    .skill{\r\n        display: inline-block;\r\n        float: none !important;\r\n        page-break-inside: avoid;\r\n        -webkit-column-break-inside: avoid;\r\n                break-inside: avoid;\r\n        -webkit-column-break-before: always;\r\n                break-before: always;\r\n    }\r\n}\r\n\r\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvc2tpbGxzL3NraWxscy5jb21wb25lbnQuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0lBQ0ksaUJBQWlCO0lBQ2pCLGtCQUFrQjtDQUNyQjtBQUNEO0NBQ0MsZUFBZTtJQUNaLG1CQUFtQjtJQUNuQiwwQkFBMEI7Q0FDN0I7QUFDRDtDQUNDLDBCQUEwQjtJQUN2QixtQkFBbUI7SUFDbkIsb0JBQW9CO0lBQ3BCLHVCQUF1QjtJQUN2QixpQkFBaUI7SUFDakIsaUJBQWlCO0NBQ3BCO0FBQ0Q7Q0FDQywwQkFBMEI7SUFDdkIsbUJBQW1CO0lBQ25CLHlCQUF5QjtJQUN6QixrQkFBa0I7Q0FDckIsaUJBQWlCO0lBQ2Qsb0JBQW9CO0lBQ3BCLGVBQWU7Q0FDbEI7QUFDRDtDQUNDLGtCQUFrQjtDQUNsQjtBQUNEO0lBQ0ksWUFBWTtDQUNmO0FBQ0Q7SUFDSSxXQUFXO0NBQ2Q7QUFDRDtDQUNDLFdBQVc7SUFDUixlQUFlO0NBQ2xCLGtCQUFrQjtJQUNmLG9CQUFvQjtDQUN2QjtBQUNEO0NBQ0MsWUFBWTtDQUNaO0FBRUQ7O0VBRUU7QUFDRjtJQUNJLDBCQUEwQjtDQUM3Qiw2Q0FBNkM7Q0FDN0M7QUFDRDtJQUNJLDBCQUEwQjtDQUM3QixtQkFBbUI7SUFDaEIscUJBQXFCO0NBQ3hCO0FBRUQ7O0VBRUU7QUFDRjs7SUFFSTtRQUNJLGdCQUFnQjtRQUNoQixpQkFBaUI7S0FDcEI7O0lBRUQ7UUFDSSxtQkFBbUI7UUFDbkIsa0JBQWtCO0tBQ3JCOztDQUVKO0FBRUQ7O0lBRUk7UUFDSSx1QkFBdUI7S0FDMUI7O0lBRUQ7UUFDSSxzQkFBc0I7UUFDdEIsdUJBQXVCO1FBQ3ZCLHlCQUF5QjtRQUN6QixtQ0FBb0I7Z0JBQXBCLG9CQUFvQjtRQUNwQixvQ0FBcUI7Z0JBQXJCLHFCQUFxQjtLQUN4QjtDQUNKIiwiZmlsZSI6InNyYy9hcHAvc2tpbGxzL3NraWxscy5jb21wb25lbnQuY3NzIiwic291cmNlc0NvbnRlbnQiOlsiI3NraWxscyB7XHJcbiAgICBtYXgtd2lkdGg6IDI4MHB4O1xyXG4gICAgbWFyZ2luLWxlZnQ6IDMwcHg7XHJcbn1cclxuaDEjc2tpbGxzLWhlYWRlciB7XHJcblx0Zm9udC1zaXplOiAyZW07XHJcbiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XHJcbiAgICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO1xyXG59XHJcbi5za2lsbCB7XHJcblx0YmFja2dyb3VuZC1jb2xvcjogI2I2Y2ViMTtcclxuICAgIGJvcmRlci1yYWRpdXM6IDdweDtcclxuICAgIG1hcmdpbjogMCAwIDIwcHggMCA7XHJcbiAgICBwYWRkaW5nOiAxMHB4IDAgMjBweCAwO1xyXG4gICAgbWluLXdpZHRoOiAyNTBweDtcclxuICAgIG1heC13aWR0aDogMjUwcHg7XHJcbn1cclxuLnNraWxsIGgyIHtcclxuXHRiYWNrZ3JvdW5kLWNvbG9yOiAjNjg4MTYyO1xyXG4gICAgYm9yZGVyLXJhZGl1czogN3B4O1xyXG4gICAgbWFyZ2luOiAwIC0zcHggMTBweCAtM3B4O1xyXG4gICAgcGFkZGluZzogMTBweCA4cHg7XHJcblx0Zm9udC1zaXplOiAxLjRlbTtcclxuICAgIGZvbnQtd2VpZ2h0OiBub3JtYWw7XHJcbiAgICBjb2xvcjogI2ZjZmNmYztcclxufVxyXG4uc2tpbGwgLmxhYmVsIHtcclxuXHRmb250LXdlaWdodDogYm9sZDtcclxufVxyXG4uc2tpbGwgdGFibGUge1xyXG4gICAgd2lkdGg6IDEwMCU7XHJcbn1cclxuLnNraWxsIHRhYmxlIHRyIHtcclxuICAgIHdpZHRoOiAxMDAlXHJcbn1cclxuLnNraWxsIHRhYmxlIHRkIHtcclxuXHR3aWR0aDogNTAlO1xyXG4gICAgbWF4LXdpZHRoOiA1MCU7XHJcblx0cGFkZGluZzogMnB4IDEwcHg7XHJcbiAgICB2ZXJ0aWNhbC1hbGlnbjogdG9wO1xyXG59XHJcbi5za2lsbCAudGl0bGUgaW1nIHtcclxuXHR3aWR0aDogMzBweDtcclxufVxyXG5cclxuLypcclxucHJvZ3Jlc3MgYmFyc1xyXG4qL1xyXG4ucHJvZ3Jlc3Mge1xyXG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzcwN0Y3MDtcclxuXHRib3gtc2hhZG93OiAwcHggMHB4IDJweCByZ2JhKDAsMCwwLC44KSBpbnNldDtcclxufVxyXG4ucHJvZ3Jlc3MtYmFyIHtcclxuICAgIGJhY2tncm91bmQtY29sb3I6ICMzMjMzMzI7XHJcblx0Ym9yZGVyLXJhZGl1czogM3B4O1xyXG4gICAgdGV4dC1pbmRlbnQ6IC05OTk5cHg7IFxyXG59XHJcblxyXG4vKlxyXG4qIHRvIGxhcmdlIHNjcmVlblxyXG4qL1xyXG5AbWVkaWEgKG1heC13aWR0aDogOTkxLjk4cHgpIHtcclxuICAgIFxyXG4gICAgI3NraWxscyB7XHJcbiAgICAgICAgbWF4LXdpZHRoOiAxMDAlO1xyXG4gICAgICAgIG1hcmdpbi1sZWZ0OmF1dG87XHJcbiAgICB9XHJcbiAgICBcclxuICAgIC5za2lsbCB7XHJcbiAgICAgICAgbWFyZ2luLXJpZ2h0OiAxNXB4O1xyXG4gICAgICAgIG1hcmdpbi1sZWZ0OiAxNXB4O1xyXG4gICAgfVxyXG5cclxufVxyXG5cclxuQG1lZGlhIHByaW50ICBcclxue1xyXG4gICAgZGl2IHtcclxuICAgICAgICBmbG9hdDogbm9uZSAhaW1wb3J0YW50O1xyXG4gICAgfVxyXG4gICAgXHJcbiAgICAuc2tpbGx7XHJcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xyXG4gICAgICAgIGZsb2F0OiBub25lICFpbXBvcnRhbnQ7XHJcbiAgICAgICAgcGFnZS1icmVhay1pbnNpZGU6IGF2b2lkO1xyXG4gICAgICAgIGJyZWFrLWluc2lkZTogYXZvaWQ7XHJcbiAgICAgICAgYnJlYWstYmVmb3JlOiBhbHdheXM7XHJcbiAgICB9XHJcbn1cclxuIl19 */"

/***/ }),

/***/ "./src/app/skills/skills.component.html":
/*!**********************************************!*\
  !*** ./src/app/skills/skills.component.html ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "<div id=\"skills\">\r\n    <h1 class=\"light-green\" id=\"skills-header\">Skills</h1>\r\n    <div class=\"d-flex flex-lg-column flex-wrap justify-content-center\" style=\"position:relative; top: -23px;\">\r\n        <div class=\"skill\" *ngFor=\"let skillCategory of skillCategories\">\r\n            <h2>{{skillCategory.name}}</h2>\r\n            <table>\r\n                <tr *ngFor=\"let skill of skillCategory.skills\">\r\n                    <td class=\"label\">{{skill.name}}</td>\r\n                    <td>\r\n                        <div class=\"progress\">\r\n                            <div class=\"progress-bar\" [style.width.%]=\"skill.levelBase100\">{{skill.levelBase100}}%</div>\r\n                        </div>\r\n                    </td>\r\n                </tr>\r\n            </table>\r\n        </div>\r\n        <div class=\"skill\">\r\n            <h2>Communication</h2>\r\n            <table>\r\n                <tr>\r\n                    <td class=\"label\"><img src=\"assets/img/fr.png\" /></td>\r\n                    <td><span class=\"label\">mother tongue</span></td>\r\n                </tr>\r\n                <tr>\r\n                    <td class=\"label\"><img src=\"assets/img/en.png\" /></td>\r\n                    <td>\r\n                        <span class=\"label\">operational</span>\r\n                    </td>\r\n                </tr>\r\n            </table>\r\n        </div>\r\n    </div>\r\n</div>\r\n"

/***/ }),

/***/ "./src/app/skills/skills.component.ts":
/*!********************************************!*\
  !*** ./src/app/skills/skills.component.ts ***!
  \********************************************/
/*! exports provided: SkillsComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "SkillsComponent", function() { return SkillsComponent; });
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _skill_service__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./skill.service */ "./src/app/skills/skill.service.ts");
var __decorate = (undefined && undefined.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (undefined && undefined.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};


var SkillsComponent = /** @class */ (function () {
    function SkillsComponent(skillService) {
        this.skillService = skillService;
    }
    SkillsComponent.prototype.ngOnInit = function () {
        this.getSkillCategories();
    };
    SkillsComponent.prototype.getSkillCategories = function () {
        this.skillCategories = this.skillService.getSkillCategories();
    };
    SkillsComponent = __decorate([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["Component"])({
            selector: 'app-skills',
            template: __webpack_require__(/*! ./skills.component.html */ "./src/app/skills/skills.component.html"),
            styles: [__webpack_require__(/*! ./skills.component.css */ "./src/app/skills/skills.component.css")]
        }),
        __metadata("design:paramtypes", [_skill_service__WEBPACK_IMPORTED_MODULE_1__["SkillService"]])
    ], SkillsComponent);
    return SkillsComponent;
}());



/***/ }),

/***/ "./src/environments/environment.ts":
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.
var environment = {
    production: false
};
/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ "./src/main.ts":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/platform-browser-dynamic */ "./node_modules/@angular/platform-browser-dynamic/fesm5/platform-browser-dynamic.js");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./app/app.module */ "./src/app/app.module.ts");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./environments/environment */ "./src/environments/environment.ts");




if (_environments_environment__WEBPACK_IMPORTED_MODULE_3__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_0__["enableProdMode"])();
}
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_1__["platformBrowserDynamic"])().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_2__["AppModule"])
    .catch(function (err) { return console.error(err); });


/***/ }),

/***/ 0:
/*!***************************!*\
  !*** multi ./src/main.ts ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\damie\Documents\Workspace\web\damienrubio\src\main.ts */"./src/main.ts");


/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main.js.map