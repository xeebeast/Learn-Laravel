<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700,900|Fira+Sans:400,400italic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	
	<title>Horizontal Timeline | CodyHouse</title>
</head>
<body>
<section class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol>
					<li><a href="#0" data-date="16/01/2014" class="selected">Laravel</a></li>
					<li><a href="#0" data-date="28/02/2014">Before Laravel</a></li>
					<li><a href="#0" data-date="20/04/2014">Laravel 1</a></li>
					<li><a href="#0" data-date="20/05/2014">Laravel 2</a></li>
					<li><a href="#0" data-date="09/07/2014">Laravel 3</a></li>
					<li><a href="#0" data-date="30/08/2014">Laravel 4</a></li>
					<li><a href="#0" data-date="15/09/2014">Larevel 5</a></li>
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->
			
		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-timeline-navigation -->
	</div> <!-- .timeline -->

	<div class="events-content">
		<ol>
			<li class="selected" data-date="16/01/2014">
				<h2>History of Laravel</h2>
				<em>Laravel</em>
				<p>	
					Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.
				</p>
			</li>

			<li data-date="28/02/2014">
				<h2>Before Laravel</h2>
				<em>State of the world of PHP frameworks before Laravel 4</em>
				<p>	
					In August of 2009 PHP 5.3 was released. It featured introduction of namespaces and anonymous functions called closures amongst other updates. The new features allowed developers write better Object-Oriented PHP applications. Even though it provided many benefits and a way to get to a brighter development future, not all frameworks were looking into that future but instead focused on supporting the older versions of PHP. The framework landscape mainly consisted of Symfony, Zend, Slim micro framework, Kohana, Lithium and CodeIgniter. CodeIgniter was probably the most well known PHP framework at the time. Developers loved it for its comprehensive documentation and simplicity. Any PHP programmer could quickly start making applications with it. It had large community and great support from its creators. But back in 2011 CodeIgniter was lacking some functionality that Taylor Otwell, the creator of Laravel, considered to be essential in building web applications. For example out of the box authentication (logging users in and out) and closure routing were absent in CodeIgniter. Therefore, Laravel version 1 beta was released on June 9, 2011 to fill in the missing functionality. According to Laravel’s creator, Taylor Otwell, Laravel version 1 was released in June 2011 simply to solve the growing pains of using CodeIgniter PHP framework.
				</p>
			</li>

			<li data-date="20/04/2014">
				<h2>World of Laravel</h2>
				<em>Laravel 1</em>
				<p>	
					Starting with the first release, Laravel featured built in authentication, Eloquent ORM for database operations, localization, models and relationships, simple routing mechanism, caching, sessions, views, extendibility through modules and libraries, form and HTML helpers and more. Even on the very first release the framework already had some impressive functionality.
					<br>
					<br>
					At that point Laravel was not yet an MVC framework because it did not feature controllers but the developers immediately loved the clean syntax and the potential of this new framework. In the following months Taylor added validation methods, pagination, a command line package installer, expanded Eloquent ORM, and included a few hundred of unit tests for the framework’s components. Laravel went from version 1 to version 2 in less than six months.
				</p>
			</li>

			<li data-date="20/05/2014">
				<h2>World of Laravel</h2>
				<em>Laravel 2</em>
				<p>	
					Version 2 of the framework was privately released to developers on November 24, 2011, its read me file states:
					<br>
					<br>
					“Freeing you from spaghetti code, Laravel helps you create wonderful applications using simple, expressive syntax. Development should be a creative experience that you enjoy, not something that is painful. Enjoy the fresh air.”
					<br>
					<br>
					The second major release of the framework got some solid upgrades from the creator and the community. Such features were implemented: controller support, “Blade” templating engine, usage of inversion of control container. With the additions of controllers, the framework became a fully qualified MVC framework. Developers were pleased with how Laravel was shaping up but not happy with elimination of third party modules support(that was reintroduced in version 3 as Bundles). Ability to mix and match routes with controllers (a feature previously lacking in some popular PHP frameworks), powerful Eloquent ORM, and usage of inversion of control pattern within the framework’s core attracted more developers excited to try out the new Laravel framework. Less than two months later new major point release was announced, Laravel 3.
				</p>
			</li>

			<li data-date="09/07/2014">
				<h2>World of Laravel</h2>
				<em>Laravel 3</em>
				<p>	
					On February 22, 2012 Laravel 3 was released along with a shiny new website and great new features of the framework. This release was focusing on unit test integration, the Artisan command line interface, database migrations, events, more session drivers and database drivers, integration for “bundles” and more. Eloquent ORM was briefly refactored into a bundle and was not shipped with the framework for a short period of time. It eventually was included back in Laravel 3 and has been a part of the framework ever since. Laravel 3 was the most stable and solid release of Laravel at that time, powerful enough to be used for many kinds of web applications, offering simplicity and extremely short learning curve comparing to other framewokrs.
					<br>
					<br>
					Laravel 3 was quickly catching up to the big boys of PHP frameworks such as CodeIgniter and Kohana, a lot of developers started switching from other frameworks to Laravel for its power and expressiveness. Blog posts, tutorials, reviews and lessons started appearing online dedicated to Laravel 3 framework praising it as the new hot thing in the PHP world. Laravel’s forum was relentlessly lighting up with new users. Laravel 3 stayed in a stable release for quite some time but about 5 months after it was released the creator of the framework decided to re-write the whole framework from scratch as a set of packages distributed through “Composer” PHP dependency manager. Thus Laravel 4 codenamed “Illuminate” was in the works. Laravel 4 was a significant upgrade featuring a different architecture of the framework core and amazing extendibility. Table below shows the feature comparison of all Laravel versions including the last major release Laravel 4. What has changed in Laravel 4 and why was it such a big leap from the previous versions
				</p>
			</li>

			<li data-date="30/08/2014">
				<h2>World of Laravel</h2>
				<em>Illuminate, also known as Laravel 4</em>
				<p>	
					It appears that there was a new version of Laravel every few months. Laravel 4 was officially released a year and 3 months after release of version 3, on May 28, 2013. Even though releasing new versions often is a sign that the framework is evolving, it was lowering the credibility of the framework. Some developers called it “too fast-paced” and “unstable” because they would have to migrate to the new version and sometimes that is just not possible with big applications already built on the previous architecture. The community asked for more stability, some new features and better unit testing of Laravel’s components. Laravel 4 is the culmination of all previous development of the framework, looking into the bright future of PHP development.
					<br>
					<br>
					Laravel 4 was re-written from the ground up as a collection of components (or packages) that integrate with each other to make up a framework. The management of these components is done through the best PHP dependency manager available called “Composer”. Laravel 4 has an extended set of features that no other version of Laravel (and even no other PHP framework) has had before: database seeding, message queues, built in mailer, even more powerful Eloquent ORM featuring scopes, soft deletes and more.
					<br>
					<br>
					Different from prior versions of Laravel in that there will be a regular release schedule – minor point release every 6 months with revisions (patches and bug fixes) whenever they come out. With more unit tests covering 100% of the framework’s functionality, Laravel 4 promises to be stable and easily extendable by means of Composer packages.
					<br>
					<br>
					Embracing the new features of PHP 5.3 Laravel has come a long way in just over two years appealing to more and more developers worldwide. The visionary behind the framework – Taylor Otwell and the community surrounding Laravel have made enormous progress creating a future-friendly established architecture for PHP web applications in a very short period of time. Laravel’s success and constantly growing community of users and contributors means that Laravel is here to stay.
				</p>
			</li>

			<li data-date="15/09/2014">
				<h2>World of Laravel</h2>
				<em>Laravel 5</em>
				<p>	
					Laravel 5.0 introduces a fresh application structure to the default Laravel project. This new structure serves as a better foundation for building robust application in Laravel, as well as embraces new auto-loading standards (PSR-4) throughout the application.
				</p>
				<br>

				<p> <a href="https://laracasts.com/series/laravel-5-fundamentals"> Learn Laravel with Laracast</a> </p>
				
			</li>
		</ol>
	</div> <!-- .events-content -->
</section>
	
<script src="/js/jquery-2.1.4.js"></script>
<script src="/js/jquery.mobile.custom.min.js"></script>
<script src="/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>