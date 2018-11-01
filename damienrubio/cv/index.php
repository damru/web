<?php
	$print_pic=false;
	$print_contact=true;
	$print_loisirs=false;

    function durationSince($since) {
        $start = new DateTime($since);
        $now = new DateTime("now");
        $interval = $start->diff($now);
        $y = $interval->y;
        $m = $interval->m;
        $y_label = $y . " year";
        $m_label = $m . " month";
        if ($y > 1) $y_label .= "s";
        if ($m > 1) $m_label .= "s";
        return $y_label . " " . $m_label; 
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="fonts/fonts.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/media.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="text-smaller dark-grey">
        <div class="container" >
            <div id="personal-details">
                <h1 class="dark-green">Damien Rubio</h1>
                <div>(514) 915-6290 | <a class="green" href="mailto:job@damienrubio.com">job@damienrubio.com</a> | Montreal, QC, Canada</div>
			</div>
            <div class="d-lg-flex">
                <div class="order-lg-2 container" id="skills">
                    <h1 class="light-green" id="skills-header">Skills</h1>
                    <div class="d-flex flex-lg-column flex-wrap justify-content-center" style="position:relative; top: -23px;">
                        <div class="skill">
                            <h2>Architecture / Conception / Methodology</h2>
                            <table>
                                <tr>
                                    <td class="label">UML / Merise</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:90%">90%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">TDD / BDD</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%">100%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">Agile / Scrum</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%">100%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">API Design</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%">100%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">Microservice</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%">100%</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label">DevOps</td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 85%">85%</div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="skill">
                            <h2>Languages / Frameworks</h2>
							<table>
								<tr>
									<td class="label">Java</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">95%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Spring / Spring Boot</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">95%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Hibernate / JPA</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%">90%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">C, C++</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 30%">30%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">PHP</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%">90%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">HTML</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">95%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">CSS</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%">75%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">JavaScript</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%">80%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Angular</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%">20%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Bootstrap</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%">20%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Python</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%">40%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Shell scripting</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%">80%</div>
										</div>
									</td>
								</tr>
							</table>
                        </div>
                        <div class="skill">
							<h2>OS</h2>
							<table>
								<tr>
									<td class="label">Unix</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%">90%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Windows</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%">90%</div>
										</div>
									</td>
								</tr>
							</table>
                        </div>
                        <div class="skill">
							<h2>Databases</h2>
							<table>
								<tr>
									<td class="label">MySQL, TSQL, PostgreSQL</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">95%</div>
										</div>
									</td>
								</tr>
							</table>
                        </div>
                        <div class="skill">
							<h2>Industrialization / Platforms</h2>
							<table>
								<tr>
									<td class="label">Git / SVN</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%">95%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Google Cloud</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%">20%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">AWS</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%">20%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Docker</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%">60%</div>
										</div>
									</td>
								</tr>
								<tr>
									<td class="label">Jenkins, Maven, Sonar</td>
									<td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 85%">85%</div>
										</div>
									</td>
								</tr>
							</table>
                        </div>
                        <div class="skill">
                            <h2>Communication</h2>
							<table>
								<tr>
									<td class="label"><img src="img/fr.png" /></td>
									<td><span class="label">mother tongue</span></td>
								</tr>
								<tr>
									<td class="label"><img src="img/en.png" /></td>
									<td>
										<span class="label">operational</span>
									</td>
								</tr>
							</table>
                        </div>
                    </div>
                </div>
                <div class="order-lg-1 container">
                    <div class="cv-part" id="work-experiences">
                        <h1 class="light-green">work experience</h1>
                        <div class="row experience">
                            <h2 class="col-12 d-block">Senior Software Engineer / Technical Leader</h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>feb. 2017 - present</strong></div>
                                <div class="light-green"><?php echo durationSince("2017-02");?></div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="company">Société Général CIB</div>
                                <div class="location text-smaller light-green">Montreal, QC, Canada<br>Val-de-Fontenay, France</div>
                                <ul class="tasks">
                                    <li>Kickstarted a new project by creating guidelines for development, testing, build etc. in order to provide the future feature teams with strong and common basis.</li>
                                    <li>Designed a microservice architectured application providing many APIs to process legal contracts and provide services on them.</li>
                                    <li>Backend development with a TDD/BDD approach. Created integration testings and scenarios with business users and their requirements.
                                    <li>Successfully created build pipelines in order to have a continuous integration environment and flawlessly deliver in production.</li>
                                    <li>Contribution to the frontend client development.</li>
                                </ul>
                                <ul class="job-skills text-smaller">
                                    <li>Java</li>
                                    <li>Spring</li>
                                    <li>Spring Boot</li>
                                    <li>OAuth2</li>
                                    <li>Consul</li>
                                    <li>Zuul</li>
                                    <li>Jenkins</li>
                                    <li>Sonar</li>
                                    <li>Git</li>
                                    <li>Maven</li>
                                    <li>Docker</li>
                                    <li>Angular</li>
                                    <li>Python</li>
                                    <li>BDD</li>
                                    <li>TDD</li>
                                    <li>DevOps</li>
                                </ul>
                            </div>
                        </div>  
                        <div class="row experience">
                            <h2 class="container-fluid">Software Engineer</h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>nov. 2016 - feb. 2017</strong></div>
                                <div class="light-green">4 months</div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="company">Generali</div>
                                <div class="location text-smaller light-green">La Plaine Saint-Denis, France</div>
                                <ul class="tasks">
                                    <li>Implemented good practices and development guidelines in order to stabilize and standardize all Java applications of the IT department (industrialization, TDD, BDD, intergration testings).</li>
                                    <li>Migrated an obsolete webservice from Corba to Java.</li>
                                </ul>
                                <ul class="job-skills text-smaller">
                                    <li>J2EE</li>
                                    <li>Angular JS</li>
                                    <li>Selenuim/Fluentlenium</li>
                                    <li>Jenkins</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row experience">
                            <h2 class="container-fluid">Software Engineer</h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>oct. 2016 - nov. 2016</strong></div>
                                <div class="light-green">1 month</div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="company">SFEIR</div>
                                <div class="location text-smaller light-green">Neuilly-sur-Seine, France</div>
                                <ul class="tasks">
                                    <li>Contribution to the backend development of an application dedicated to the employees skillsets with a graph database and graphic representation.</li>
                                </ul>
                                <ul class="job-skills text-smaller">
                                    <li>Java</li>
                                    <li>Docker</li>
                                    <li>Spring</li>
                                    <li>Spring Boot</li>
                                    <li>Neo4J Database</li>
                                    <li>Google Cloud (AppEngine, ComputeEngine)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row experience">
                            <h2 class="container-fluid">Software Engineer</h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>feb. 2013 - oct. 2016</strong></div>
                                <div class="light-green">3 years 8 months</div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="company">Crédit Agricole CIB</div>
                                <div class="location text-smaller light-green">Courbevoie, France<br>New-York, NY, USA (2014)</div>
                                <ul class="tasks">
                                    <li>Designed and implemented the complete refactoring of inhouse front-to-back booking application from Struts to Spring, and from Java 5 to Java with teams in Paris and Noida (India).</li>
                                    <li>Completed the makeover of the CTRLM (scheduler) architecture for CACIB New-York IT Treasury department.</li>
                                    <li>Study and development for Treasury IT on front-to-back proprietary application Kondor+.</li>
                                    <li>Handled support L3 and managed offshore team in Noida (6 peoples, India).
                                </ul>
                                <ul class="job-skills text-smaller">
                                    <li>Java</li>
                                    <li>Spring</li>
                                    <li>Hibernate</li>
                                    <li>jUnit</li>
                                    <li>SVN</li>
                                    <li>Maven</li>
                                    <li>JavaScript</li>
                                    <li>Kondor+ by Misys (formerly by Reuters)</li>
                                    <li>Shell scripting</li>
                                    <li>STP</li>
                                    <li>Sybase ASE (T/SQL)</li>
                                    <li>CTRLM</li>
                                    <li>Team Management</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row experience">
                            <h2 class="container-fluid">Programmer Analyst</h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>may 2012 - nov. 2012</strong></div>
                                <div class="light-green">7 months</div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="company">BNP Paribas</div>
                                <div class="location text-smaller light-green">Montreuil, France</div>
                                <ul class="tasks">
                                    <li>Detailed analysis of business requirements to enhance the reporting tool of the Treasury.</li>
                                    <li>Development of new reports through the creation of complex stored procedures.</li>
                                    <li>Optimization of the stored procedures through indexes and complex sql joins with temporary tables.</li>
                                </ul>
                                <ul class="job-skills text-smaller">
                                    <li>SVN</li>
                                    <li>Shell scripting</li>
                                    <li>Sybase ASE (T/SQL)</li>
                                    <li>C++</li>
                                    <li>Powerbuilder</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row experience">
                            <h2 class="container-fluid">Web Developper</h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>apr. 2011 - jul. 2011</strong></div>
                                <div class="light-green">6 months</div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="company">buzzing light</div>
                                <div class="location text-smaller light-green">Paris, France</div>
                                <ul class="tasks">
                                    <li>Backend and frontend development for the short-term jobs web and mobile platform <strong><i>Beepjob</i></strong></li>
                                    <li>Creation of the search engine based on the user location. Enhancement of this search engine to take into account many criterias (distance, type of contract, relevance)</li>
                                    <li>Contribution to the design of the visual identity.</li>
                                </ul>
                                <ul class="job-skills text-smaller">
                                    <li>PHP</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                    <li>AJAX</li>
                                    <li>MySQL</li>
                                    <li>Google Geolocation API</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cv-part" id="education">
                        <h1 class="light-green">education</h1>
                        <div class="row experience">
                            <h2 class="container-fluid">Diplôme d'Ingénieur<span class="eq-diploma grey">5th year degree in Computer Engineering</span></h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>2009 - 2012</strong></div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="school">ECE Paris École d’Ingénieurs <span class="location text-smaller light-green">Paris, France</span></div>
                                <div class="dark-green text-smaller">Major Information Technologies</div>
                                <div class="light-green text-smaller">Minor Audiovisual & Multimedia</div>
                                <div class="school grey"><strong>Concordia University <i class="text-smaller">(sept. – dec. 2011)</i> <span class="location text-smaller light-green">Montreal, QC, Canada</span></strong></div>
                                <div class="light-green text-smaller">Computer Science</div>
                            </div>
                        </div>  
                        <div class="row experience">
                            <h2 class="container-fluid">Diplôme Universitaire de Technologie (DUT) Informatique<span class="eq-diploma grey">2 years technical degree in Computer Engineering</span></h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>2007 - 2009</strong></div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="school">IUT de Montreuil Université Paris 8 <span class="location text-smaller light-green">Montreuil, France</span></div>
                                <div class="dark-green text-smaller">Major Software Development</div>
                                <div class="light-green text-smaller">Minor Software Development</div>
                                <div class="school grey"><strong>Wrexham Glyndwr University <i class="text-smaller">(jun. – aug. 2008)</i> <span class="location text-smaller light-green">Wrexham, Wales</span></strong></div>
                                <div class="light-green text-smaller">Applied Computing</div>
                            </div>
                        </div>  
                        <div class="row experience">
                            <h2 class="container-fluid">Diplôme d'Etudes Universitaires Générales (DEUG) d'Admistration Economique et Sociale<span class="eq-diploma grey">2 years University degree in Administration, Economics and Social Science</span></h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>2004 - 2007</strong></div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="school">Université Paris 1 Panthéon-Sorbonne <span class="location text-smaller light-green">Paris, France</span></div>
                            </div>
                        </div>  
                        <div class="row experience">
                            <h2 class="container-fluid">Baccalauréat Economique et Social<span class="eq-diploma grey">French High-School diploma in Economics And Social Science</span></h2>
                            <div class="col-3 col-sm-2 date text-smaller">
                                <div class="dark-green"><strong>2001 - 2004</strong></div>
                            </div>
                            <div class="col-9 col-sm-10">
                                <div class="school">Lycée Romain Rolland <span class="location text-smaller light-green">Ivry-sur-Seine, France</span></div>
                                <div class="dark-green text-smaller">Major Economics</div>
                            </div>
                        </div>  
                </div>
                </div>
            </div>
            <div class="container text-smaller d-print-none" id="powered-by">Crafted with <span class="heart">&hearts;</span><br>and powered by <a href="https://www.docker.com/" target="_blank">Docker</a>, <a href="https://www.nginx.com/" target="_blank">Nginx</a>, <a href="http://www.php.net/" target="_blank">PHP</a> and <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a>
            </div>
        </div>
	</body>
</html>
