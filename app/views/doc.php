<style>
	html {
		font-family: sans-serif;
		-ms-text-size-adjust: 100%;
		-webkit-text-size-adjust: 100%
	}

	body {
		margin: 0
	}

	article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
		display: block
	}

	audio, canvas, progress, video {
		display: inline-block;
		vertical-align: baseline
	}

	template {
		display: none
	}

	a {
		background: transparent
	}

	a:active, a:hover {
		outline: 0
	}

	b, strong {
		font-weight: bold
	}

	dfn {
		font-style: italic
	}

	h1 {
		font-size: 2em;
		margin: 0.67em 0
	}

	mark {
		background: #ff0;
		color: #000
	}

	small {
		font-size: 80%
	}

	sub, sup {
		font-size: 75%;
		line-height: 0;
		position: relative;
		vertical-align: baseline
	}

	sup {
		top: -0.5em
	}

	sub {
		bottom: -0.25em
	}

	img {
		border: 0
	}

	figure {
		margin: 1em 40px
	}

	hr {
		-moz-box-sizing: content-box;
		box-sizing: content-box;
		height: 0
	}

	pre {
		overflow: auto
	}

	code, kbd, pre, samp {
		font-family: monospace, monospace;
		font-size: 1em
	}

	button, input, optgroup, select, textarea {
		color: inherit;
		font: inherit;
		margin: 0
	}

	button {
		overflow: visible
	}

	button, select {
		text-transform: none
	}

	button, {
		-webkit-appearance: button;
		cursor: pointer
	}

	button::-moz-focus-inner, input::-moz-focus-inner {
		border: 0;
		padding: 0
	}

	input {
		line-height: normal
	}

	input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
		height: auto
	}

	input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
		-webkit-appearance: none
	}

	fieldset {
		border: 1px solid #c0c0c0;
		margin: 0 2px;
		padding: 0.35em 0.625em 0.75em
	}

	legend {
		border: 0;
		padding: 0
	}

	textarea {
		overflow: auto
	}

	optgroup {
		font-weight: bold
	}

	table {
		border-collapse: collapse;
		border-spacing: 0
	}

	td, th {
		padding: 0
	}

	@font-face {
		font-family: 'Open Sans';
		src: local('Open Sans'), local('OpenSans'), url('../font/OpenSans-Regular.ttf')    font-weight:normal;
		font-style: normal
	}

	body {
		background: #333;
		margin-bottom: 40px;
		margin-top: 20px;
		font-size: 16px;
		font-family: 'Open Sans', sans-serif
	}

	h1, h2, h3, h4, h5, h6 {
		font-family: 'Open Sans', sans-serif
	}

	.larajobs-text {
		padding-top: 10px;
		font-size: 10pt
	}

	img.larajobs-logo {
		display: inline;
		height: 30px
	}

	.top-bar {
		background: #333;
		color: white
	}

	.top-bar-section li a:not(.button) {
		color: #888;
		background: transparent;
		border-bottom: 1px solid transparent
	}

	.top-bar-section li:not(.has-form) a:not(.button):hover {
		color: white;
		background: transparent;
		border-bottom: 2px solid #fa503a
	}

	.top-bar-section .dropdown li:not(.has-form) a:not(.button):hover {
		color: white;
		background: transparent
	}

	.top-bar-section ul {
		background: transparent
	}

	.top-bar-section ul li > a {
		font-family: "Open Sans", sans-serif;
		font-size: 90%;
		font-weight: bold
	}

	.top-bar .name h1 a {
		font-family: "Open Sans", sans-serif;
		font-weight: bold;
		font-size: 110%;
		color: #fa503a
	}

	.row.full-width {
		width: 100%;
		max-width: 100%
	}

	#top-button {
		position: fixed;
		right: 20px;
		bottom: 20px;
		border: 1px solid #5d5d5d;
		border-radius: 3px;
		display: block;
		padding: 10px;
		color: #ddd
	}

	#top-button:hover {
		background: #ddd;
		color: #333
	}

	.code-column {
		background-color: #333;
		color: #fff;
		word-wrap: break-word
	}

	.code-column h6 {
		color: #ddd;
		margin: 0.2em 0
	}

	.code-column h4 {
		color: #fff;
		margin: 10px 0
	}

	.code-column h4 a {
		color: #fff
	}

	.code-column h4 a:hover {
		color: #ddd;
		text-decoration: underline
	}

	#search-box {
		margin-bottom: 1em
	}

	#search {
		margin-bottom: 0
	}

	#searchHint {
		color: #888
	}

	#search-button {
		background: transparent;
		border: 1px solid #5d5d5d;
		margin-bottom: 0
	}

	#search-button:hover {
		background: #ddd;
		color: #333
	}

	pre {
		font-family: Monaco, Consolas, "Lucida Console", monospace;
		background-color: #333;
		padding: 5px;
		font-size: 90%;
		color: #e9e4e5;
		line-height: 1.5em;
		margin: 0.2em 0;
		border: 0;
		white-space: pre-wrap
	}

	pre .pln {
		color: #e9e4e5
	}

	pre .str {
		color: #bcd42a
	}

	pre .kwd {
		color: #4bb1b1
	}

	pre .com {
		color: #888888;
		display: block
	}

	pre .com + .pln {
		white-space: normal
	}

	pre .typ {
		color: #ef7c61
	}

	pre .lit {
		color: #bcd42a
	}

	pre .pun {
		color: #ffffff
	}

	@font-face {
		font-family: 'FontAwesome';
		font-weight: normal;
		font-style: normal
	}

	[class^="icon-"] {
		font-family: FontAwesome;
		font-weight: normal;
		font-style: normal;
		text-decoration: inherit;
		-webkit-font-smoothing: antialiased;
		*margin-right: .3em
	}

	[class^="icon-"]:before {
		text-decoration: inherit;
		display: inline-block;
		speak: none
	}

	a [class^="icon-"] {
		display: inline
	}

	{
		display: inline-block
	;
		width: 1.1428571428571428em
	;
		text-align: right
	;
		padding-right: 0.2857142857142857em
	}
	[class^="icon-"].icon-fixed-width.icon-large {
		width: 1.4285714285714286em
	}

	.icons-ul {
		margin-left: 2.142857142857143em;
		list-style-type: none
	}

	.icons-ul > li {
		position: relative
	}

	.icon-2x {
		font-size: 2em
	}

	.icon-2x.icon-border {
		border-width: 2px;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px
	}

	.icon-3x {
		font-size: 3em
	}

	.icon-3x.icon-border {
		border-width: 3px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px
	}

	.icon-4x {
		font-size: 4em
	}

	.icon-4x.icon-border {
		border-width: 4px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px
	}

	.icon-5x {
		font-size: 5em
	}

	.icon-5x.icon-border {
		border-width: 5px;
		-webkit-border-radius: 7px;
		-moz-border-radius: 7px;
		border-radius: 7px
	}

	[class^="icon-"] {
		display: inline;
		width: auto;
		height: auto;
		line-height: normal;
		vertical-align: baseline;
		background-image: none;
		background-position: 0% 0%;
		background-repeat: repeat;
		margin-top: 0
	}

	{
		margin-top: 0
	}
	.btn.btn-large [class^="icon-"].pull-left.icon-2x {
		margin-top: .05em
	}

	,
	.btn.btn-large [class*=" icon-"].pull-left.icon-2x {
		margin-right: .2em
	}

	Ó {
		position: relative;
		display: inline-block;
		width: 2em;
		height: 2em;
		line-height: 2em;
		vertical-align: -35%
	}

	.icon-stack [class^="icon-"] {
		display: block;
		text-align: center;
		position: absolute;
		width: 100%;
		height: 100%;
		font-size: 1em;
		line-height: inherit;
		*line-height: 2em
	}

	@-moz-keyframes spin {
		0% {
			-moz-transform: rotate(0deg)
		}
		100% {
			-moz-transform: rotate(359deg)
		}
	}

	@-webkit-keyframes spin {
		0% {
			-webkit-transform: rotate(0deg)
		}
		100% {
			-webkit-transform: rotate(359deg)
		}
	}

	@-o-keyframes spin {
		0% {
			-o-transform: rotate(0deg)
		}
		100% {
			-o-transform: rotate(359deg)
		}
	}

	@-ms-keyframes spin {
		0% {
			-ms-transform: rotate(0deg)
		}
		100% {
			-ms-transform: rotate(359deg)
		}
	}

	@keyframes spin {
		0% {
			transform: rotate(0deg)
		}
		100% {
			transform: rotate(359deg)
		}
	}

	.icon-rotate-90:before {
		-webkit-transform: rotate(90deg);
		-moz-transform: rotate(90deg);
		-ms-transform: rotate(90deg);
		-o-transform: rotate(90deg);
		transform: rotate(90deg);
		filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1)
	}

	.icon-search:before {
		content: "\f002"
	}

	.icon-download:before {
		content: "\f01a"
	}

	.icon-arrow-up:before {
		content: "\f062"
	}

	.icon-comments:before {
		content: "\f086"
	}

	.icon-github:before {
		content: "\f09b"
	}

	.icon-file-text:before {
		content: "\f15c"
	}
</style>

<div class="row full-width">
<div class="large-4 columns code-column">


<h4><a name="artisan" href="#artisan">Artisan</a> <a href="http://laravel.com/docs/artisan"
                                                     title="Artisan CLI @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span
					class="com">// Displays help for a given command</span><span class="pln">
php artisan </span><span class="pun">--</span><span class="pln">help OR </span><span class="pun">-</span><span
					class="pln">h
</span><span class="com">// Do not output any message</span><span class="pln">
php artisan </span><span class="pun">--</span><span class="pln">quiet OR </span><span class="pun">-</span><span
					class="pln">q
</span><span class="com">// Display this application version</span><span class="pln">
php artisan </span><span class="pun">--</span><span class="pln">version OR </span><span class="pun">-</span><span
					class="pln">V
</span><span class="com">// Do not ask any interactive question</span><span class="pln">
php artisan </span><span class="pun">--</span><span class="kwd">no</span><span class="pun">-</span><span class="pln">interaction OR </span><span
					class="pun">-</span><span class="pln">n
</span><span class="com">// Force ANSI output</span><span class="pln">
php artisan </span><span class="pun">--</span><span class="pln">ansi
</span><span class="com">// Disable ANSI output</span><span class="pln">
php artisan </span><span class="pun">--</span><span class="kwd">no</span><span class="pun">-</span><span class="pln">ansi
</span><span class="com">// The environment the command should run under</span><span class="pln">
php artisan </span><span class="pun">--</span><span class="pln">env
</span><span class="com">// -v|vv|vvv Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</span><span
					class="pln">
php artisan </span><span class="pun">--</span><span class="pln">verbose

</span><span class="com">// Display the framework change list</span><span class="pln">
php artisan changes
</span><span class="com">// Remove the compiled class file</span><span class="pln">
php artisan clear</span><span class="pun">-</span><span class="pln">compiled
</span><span class="com">// Put the application into maintenance mode</span><span class="pln">
php artisan down
</span><span class="com">// Regenerate framework autoload files</span><span class="pln">
php artisan </span><span class="kwd">dump</span><span class="pun">-</span><span class="pln">autoload
</span><span class="com">// Display the current framework environment</span><span class="pln">
php artisan env
</span><span class="com">// Displays help for a command</span><span class="pln">
php artisan help
</span><span class="com">// Lists commands</span><span class="pln">
php artisan list

</span><span class="com">// Optimize the framework for better performance</span><span class="pln">
php artisan optimize
</span><span class="com">// List all registered routes</span><span class="pln">
php artisan routes
</span><span class="com">// Serve the application on the PHP development server</span><span class="pln">
php artisan serve
</span><span class="com">// Interact with your application</span><span class="pln">
php artisan tinker
</span><span class="com">// Bring the application out of maintenance mode</span><span class="pln">
php artisan up
</span><span class="com">// Create a new package workbench</span><span class="pln">
php artisan workbench

</span><span class="com">// Publish a package's assets to the public directory</span><span class="pln">
php artisan asset</span><span class="pun">:</span><span class="pln">publish </span><span class="pun">[--</span><span
					class="pln">bench</span><span class="pun">[=</span><span class="str">"vendor/package"</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">path</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[</span><span
					class="kwd">package</span><span class="pun">]</span><span class="pln">
</span><span class="com">// Create a migration for the password reminders table</span><span class="pln">
php artisan auth</span><span class="pun">:</span><span class="pln">reminders</span><span class="pun">-</span><span
					class="pln">table
</span><span class="com">// Flush the application cache</span><span class="pln">
php artisan cache</span><span class="pun">:</span><span class="pln">clear
</span><span class="com">// Create a new Artisan command (L3:task)</span><span class="pln">
php artisan command</span><span class="pun">:</span><span class="pln">make name </span><span class="pun">[--</span><span
					class="pln">command</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">path</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span class="kwd">namespace</span><span
					class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span class="pln">
</span><span class="com">// Publish a package's configuration to the application</span><span class="pln">
php artisan config</span><span class="pun">:</span><span class="pln">publish
</span><span class="com">// Create a new resourceful controller</span><span class="pln">
php artisan controller</span><span class="pun">:</span><span class="pln">make </span><span class="pun">[--</span><span
					class="pln">bench</span><span class="pun">=</span><span class="str">"vendor/package"</span><span
					class="pun">]</span><span class="pln">
</span><span class="com">// Seed the database with records</span><span class="pln">
php artisan db</span><span class="pun">:</span><span class="pln">seed </span><span class="pun">[--</span><span
					class="kwd">class</span><span class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[--</span><span class="pln">database</span><span class="pun">[=</span><span
					class="str">"..."</span><span class="pun">]]</span><span class="pln">
</span><span class="com">// Set the application key</span><span class="pln">
php artisan key</span><span class="pun">:</span><span class="pln">generate

</span><span class="com">// Database migrations</span><span class="pln">
php artisan migrate
php artisan migrate </span><span class="pun">[--</span><span class="pln">bench</span><span class="pun">=</span><span
					class="str">"vendor/package"</span><span class="pun">]</span><span class="pln"> </span><span
					class="pun">[--</span><span class="pln">database</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">path</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="kwd">package</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">pretend</span><span class="pun">]</span><span class="pln"> </span><span
					class="pun">[--</span><span class="pln">seed</span><span class="pun">]</span><span class="pln">
</span><span class="com">// Create the migration repository</span><span class="pln">
php artisan migrate</span><span class="pun">:</span><span class="pln">install </span><span class="pun">[--</span><span
					class="pln">database</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln">
</span><span class="com">// Create a new migration file</span><span class="pln">
php artisan migrate</span><span class="pun">:</span><span class="pln">make name </span><span class="pun">[--</span><span
					class="pln">bench</span><span class="pun">=</span><span class="str">"vendor/package"</span><span
					class="pun">]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">create</span><span class="pun">]</span><span class="pln"> </span><span
					class="pun">[--</span><span class="kwd">package</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">path</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">table</span><span class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln">
</span><span class="com">// Reset and re-run all migrations</span><span class="pln">
php artisan migrate</span><span class="pun">:</span><span class="pln">refresh </span><span class="pun">[--</span><span
					class="pln">database</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">seed</span><span class="pun">]</span><span class="pln">
</span><span class="com">// Rollback all database migrations</span><span class="pln">
php artisan migrate</span><span class="pun">:</span><span class="pln">reset </span><span class="pun">[--</span><span
					class="pln">database</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">pretend</span><span class="pun">]</span><span class="pln">
</span><span class="com">// Rollback the last database migration</span><span class="pln">
php artisan migrate</span><span class="pun">:</span><span class="pln">rollback </span><span class="pun">[--</span><span
					class="pln">database</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[--</span><span
					class="pln">pretend</span><span class="pun">]</span><span class="pln">

</span><span class="com">// Listen to a given queue</span><span class="pln">
php artisan queue</span><span class="pun">:</span><span class="pln">listen </span><span class="pun">[--</span><span
					class="pln">queue</span><span class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[--</span><span class="pln">delay</span><span
					class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[--</span><span class="pln">memory</span><span
					class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[--</span><span class="pln">timeout</span><span
					class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[</span><span class="pln">connection</span><span
					class="pun">]</span><span class="pln">
</span><span class="com">// Subscribe a URL to an Iron.io push queue</span><span class="pln">
php artisan queue</span><span class="pun">:</span><span class="pln">subscribe </span><span class="pun">[--</span><span
					class="pln">type</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> queue url
</span><span class="com">// Process the next job on a queue</span><span class="pln">
php artisan queue</span><span class="pun">:</span><span class="pln">work </span><span class="pun">[--</span><span
					class="pln">queue</span><span class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[--</span><span class="pln">delay</span><span
					class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[--</span><span class="pln">memory</span><span
					class="pun">[=</span><span class="str">"..."</span><span class="pun">]]</span><span
					class="pln"> </span><span class="pun">[--</span><span class="pln">sleep</span><span
					class="pun">]</span><span class="pln"> </span><span class="pun">[</span><span
					class="pln">connection</span><span class="pun">]</span><span class="pln">
</span><span class="com">// Create a migration for the session database table</span><span class="pln">

php artisan session</span><span class="pun">:</span><span class="pln">table
</span><span class="com">// Publish a package's views to the application</span><span class="pln">
php artisan view</span><span class="pun">:</span><span class="pln">publish </span><span class="pun">[--</span><span
					class="pln">path</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="kwd">package</span><span class="pln">
php artisan tail </span><span class="pun">[--</span><span class="pln">path</span><span class="pun">[=</span><span
					class="str">"..."</span><span class="pun">]]</span><span class="pln"> </span><span
					class="pun">[--</span><span class="pln">lines</span><span class="pun">[=</span><span class="str">"..."</span><span
					class="pun">]]</span><span class="pln"> </span><span class="pun">[</span><span class="pln">connection</span><span
					class="pun">]</span><span class="pln">
			</span></pre>

<h4><a name="composer" href="#composer">Composer</a> <a href="http://getcomposer.org/doc/03-cli.md"
                                                        title="Composer CLI Docs"><i class="icon-file-text"></i></a>
</h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">composer create</span><span
					class="pun">-</span><span class="pln">project laravel</span><span class="pun">/</span><span
					class="pln">laravel folder_name
composer install
composer update
composer </span><span class="kwd">dump</span><span class="pun">-</span><span class="pln">autoload </span><span
					class="pun">[--</span><span class="pln">optimize</span><span class="pun">]</span><span class="pln">
composer </span><span class="kwd">self</span><span class="pun">-</span><span class="pln">update
			</span></pre>


<h4><a name="routing" href="#routing">Routing</a> <a href="http://laravel.com/docs/routing"
                                                     title="Routing @ Laravel Docs"><i class="icon-file-text"></i></a>
</h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Route</span><span
					class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){});</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'ControllerName@function'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">controller</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'FooController'</span><span class="pun">);</span><span
					class="pln">
			</span></pre>

<h6>RESTful Controllers</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Route</span><span
					class="pun">::</span><span class="pln">resource</span><span class="pun">(</span><span class="str">'posts'</span><span
					class="pun">,</span><span class="str">'PostsController'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">//Specify a subset of actions to handle on the route</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">resource</span><span
					class="pun">(</span><span class="str">'photo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'PhotoController'</span><span class="pun">,[</span><span
					class="str">'only'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="pun">[</span><span class="str">'index'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'show'</span><span
					class="pun">]]);</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">resource</span><span
					class="pun">(</span><span class="str">'photo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'PhotoController'</span><span class="pun">,[</span><span
					class="str">'except'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="pun">[</span><span class="str">'update'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'destroy'</span><span class="pun">]]);</span><span
					class="pln">
			</span></pre>

<h6>Triggering Errors</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">App</span><span class="pun">::</span><span
					class="pln">abort</span><span class="pun">(</span><span class="lit">404</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">missing</span><span class="pun">(</span><span
					class="kwd">function</span><span class="pun">(</span><span class="pln">$exception</span><span
					class="pun">){});</span><span class="pln">
</span><span class="kwd">throw</span><span class="pln"> </span><span class="kwd">new</span><span
					class="pln"> </span><span class="typ">NotFoundHttpException</span><span class="pun">;</span><span
					class="pln">
			</span></pre>

<h6>Route Parameters</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Route</span><span
					class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'foo/{bar}'</span><span
					class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$bar</span><span class="pun">){});</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'foo/{bar?}'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$bar </span><span
					class="pun">=</span><span class="pln"> </span><span class="str">'bar'</span><span
					class="pun">){});</span><span class="pln">
			</span></pre>

<h6>HTTP Verbs</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Route</span><span
					class="pun">::</span><span class="pln">any</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){});</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">post</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">put</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">patch</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){});</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">delete</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
</span><span class="com">// RESTful actions</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">resource</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'FooController'</span><span class="pun">);</span><span
					class="pln">
			</span></pre>

<h6>Secure Routes</h6>
<pre class="prettyprint lang-php prettyprinted"><span class="typ">Route</span><span class="pun">::</span><span
		class="kwd">get</span><span class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
		class="pln"> array</span><span class="pun">(</span><span class="str">'https'</span><span
		class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){}));</span></pre>

<h6>Route Constraints</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Route</span><span
					class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span class="str">'foo/{bar}'</span><span
					class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$bar</span><span class="pun">){})</span><span class="pln">
	</span><span class="pun">-&gt;</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'bar'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'[0-9]+'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'foo/{bar}/{baz}'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$bar</span><span
					class="pun">,</span><span class="pln"> $baz</span><span class="pun">){})</span><span class="pln">
	</span><span class="pun">-&gt;</span><span class="kwd">where</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'bar'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'[0-9]+'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'baz'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'[A-Za-z]'</span><span
					class="pun">))</span><span class="pln">
			</span></pre>
			<pre class="prettyprint lang-php prettyprinted"><span
					class="com">// Set a pattern to be used across routes</span><span class="pln">
			</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">pattern</span><span
					class="pun">(</span><span class="str">'bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'[0-9]+'</span><span class="pun">)</span><span class="pln">
			</span></pre>
<h6>Filters</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// Declare an auth filter</span><span
					class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">filter</span><span
					class="pun">(</span><span class="str">'auth'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
</span><span class="com">// Register a class as a filter</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="pln">filter</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'FooFilter'</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'before'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'auth'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){}));</span><span class="pln">
</span><span class="com">// Routes in this group are guarded by the 'auth' filter</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'before'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'auth'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){}));</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">group</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'before'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'auth'</span><span class="pun">),</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){});</span><span class="pln">
</span><span class="com">// Pattern filter</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">when</span><span
					class="pun">(</span><span class="str">'foo/*'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foo'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// HTTP verb pattern</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">when</span><span
					class="pun">(</span><span class="str">'foo/*'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'post'</span><span class="pun">));</span><span
					class="pln">
			</span></pre>

<h6>Named Routes</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Route</span><span
					class="pun">::</span><span class="pln">currentRouteName</span><span class="pun">();</span><span
					class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'as'</span><span class="pln"> </span><span
					class="pun">=&gt;</span><span class="pln"> </span><span class="str">'foobar'</span><span
					class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){}));</span><span
					class="pln">
			</span></pre>

<h6>Route Prefixing</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// This route group will carry the prefix 'foo'</span><span
					class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">group</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'prefix'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'foo'</span><span class="pun">),</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){})</span><span class="pln">
			</span></pre>

<h6>Route Namespacing</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// This route group will carry the namespace 'Foo\Bar'</span><span
					class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">group</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'namespace'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'Foo\Bar'</span><span
					class="pun">),</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){})</span><span
					class="pln">
			</span></pre>
<h6>Sub-Domain Routing</h6>
			<pre class="prettyprint lang-php prettyprinted"><span
					class="com">// {sub} will be passed to the closure</span><span class="pln">
</span><span class="typ">Route</span><span class="pun">::</span><span class="kwd">group</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'domain'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'{sub}.example.com'</span><span
					class="pun">),</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
			</span></pre>

<h4><a name="app" href="#app">App</a> <a href="http://laravel.com/docs/helpers#app" title="App @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">App</span><span class="pun">::</span><span
					class="pln">environment</span><span class="pun">();</span><span class="pln">
</span><span class="com">// test equal to</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">environment</span><span
					class="pun">(</span><span class="str">'local'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">runningInConsole</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">runningUnitTests</span><span
					class="pun">();</span><span class="pln">
			</span></pre>

<h4><a name="log" href="#log">Log</a> <a href="http://laravel.com/docs/helpers#log" title="Log @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Log</span><span class="pun">::</span><span
					class="pln">info</span><span class="pun">(</span><span class="str">'info'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Log</span><span class="pun">::</span><span class="pln">info</span><span
					class="pun">(</span><span class="str">'info'</span><span class="pun">,</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'context'</span><span
					class="pun">=&gt;</span><span class="str">'additional info'</span><span class="pun">));</span><span
					class="pln">
</span><span class="typ">Log</span><span class="pun">::</span><span class="pln">error</span><span
					class="pun">(</span><span class="str">'error'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Log</span><span class="pun">::</span><span class="pln">warning</span><span class="pun">(</span><span
					class="str">'warning'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// get monolog instance</span><span class="pln">
</span><span class="typ">Log</span><span class="pun">::</span><span class="pln">getMonolog</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// add listener</span><span class="pln">
</span><span class="typ">Log</span><span class="pun">::</span><span class="pln">listen</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$level</span><span
					class="pun">,</span><span class="pln"> $message</span><span class="pun">,</span><span class="pln"> $context</span><span
					class="pun">)</span><span class="pln"> </span><span class="pun">{});</span><span class="pln">
</span><span class="com">// get all ran queries.</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">getQueryLog</span><span class="pun">();</span><span class="pln">
			</span></pre>

<h4><a name="urls" href="#urls">URLs</a> <a href="http://laravel.com/docs/helpers#urls" title="URLs @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">URL</span><span class="pun">::</span><span
					class="pln">full</span><span class="pun">();</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">current</span><span class="pun">();</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">previous</span><span class="pun">();</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">to</span><span class="pun">(</span><span
					class="str">'foo/bar'</span><span class="pun">,</span><span class="pln"> $parameters</span><span
					class="pun">,</span><span class="pln"> $secure</span><span class="pun">);</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">action</span><span class="pun">(</span><span class="str">'FooController@method'</span><span
					class="pun">,</span><span class="pln"> $parameters</span><span class="pun">,</span><span
					class="pln"> $absolute</span><span class="pun">);</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">route</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> $parameters</span><span
					class="pun">,</span><span class="pln"> $absolute</span><span class="pun">);</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">secure</span><span class="pun">(</span><span class="str">'foo/bar'</span><span
					class="pun">,</span><span class="pln"> $parameters</span><span class="pun">);</span><span
					class="typ">
URL</span><span class="pun">::</span><span class="pln">asset</span><span class="pun">(</span><span class="str">'css/foo.css'</span><span
					class="pun">,</span><span class="pln"> $secure</span><span class="pun">);</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">secureAsset</span><span class="pun">(</span><span class="str">'css/foo.css'</span><span
					class="pun">);</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">isValidUrl</span><span class="pun">(</span><span class="str">'http://example.com'</span><span
					class="pun">);</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">getRequest</span><span class="pun">();</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">setRequest</span><span class="pun">(</span><span class="pln">$request</span><span
					class="pun">);</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">getGenerator</span><span class="pun">();</span><span class="typ">
URL</span><span class="pun">::</span><span class="pln">setGenerator</span><span class="pun">(</span><span class="pln">$generator</span><span
					class="pun">);</span><span class="pln">
			</span></pre>


<h4><a name="events" href="#events">Events</a> <a href="http://laravel.com/docs/events" title="Events @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Event</span><span
					class="pun">::</span><span class="pln">fire</span><span class="pun">(</span><span class="str">'foo.bar'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span
					class="pln">$bar</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">listen</span><span
					class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$bar</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">listen</span><span
					class="pun">(</span><span class="str">'foo.*'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$bar</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">listen</span><span
					class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'FooHandler'</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">10</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">listen</span><span
					class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'BarHandler'</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">5</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">listen</span><span
					class="pun">(</span><span class="str">'foor.bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$event</span><span
					class="pun">){</span><span class="pln"> </span><span class="kwd">return</span><span
					class="pln"> </span><span class="kwd">false</span><span class="pun">;</span><span
					class="pln"> </span><span class="pun">});</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">queue</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="pln">$bar</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">flusher</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$bar</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">flush</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">forget</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Event</span><span class="pun">::</span><span class="pln">subscribe</span><span
					class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">FooEventHandler</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h4><a name="db" href="#db">Database</a> <a href="http://laravel.com/docs/queries" title="Query Builder @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln typ">DB</span><span
					class="pun">::</span><span class="pln">connection</span><span class="pun">(</span><span class="str">'connection_name'</span><span
					class="pun">);</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">statement</span><span class="pun">(</span><span class="str">'drop table users'</span><span
					class="pun">);</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">listen</span><span class="pun">(</span><span
					class="kwd">function</span><span class="pun">(</span><span class="pln">$sql</span><span class="pun">,</span><span
					class="pln"> $bindings</span><span class="pun">,</span><span class="pln"> $time</span><span
					class="pun">){</span><span class="pln"> code_here</span><span class="pun">;</span><span
					class="pln"> </span><span class="pun">});</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">transaction</span><span class="pun">(</span><span class="kwd">function</span><span
					class="pun">(){</span><span class="pln"> transaction_code_here</span><span class="pun">;</span><span
					class="pln"> </span><span class="pun">});</span><span class="pln">
</span><span class="com">// Cache a query for $time minutes</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'users'</span><span class="pun">)-&gt;</span><span class="pln">remember</span><span
					class="pun">(</span><span class="pln">$time</span><span class="pun">)-&gt;</span><span class="kwd">get</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Escape raw input</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">raw</span><span class="pun">(</span><span class="str">'sql expression here'</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h6>Selects</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln typ">DB</span><span
					class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">)-&gt;</span><span class="kwd">get</span><span class="pun">();</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">distinct</span><span
					class="pun">()-&gt;</span><span class="kwd">get</span><span class="pun">();</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="kwd">select</span><span
					class="pun">(</span><span class="str">'column as column_alias'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="kwd">where</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'John'</span><span class="pun">)-&gt;</span><span class="kwd">get</span><span
					class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">whereBetween</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">100</span><span class="pun">))-&gt;</span><span class="kwd">get</span><span
					class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">whereIn</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">3</span><span class="pun">))-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">whereNotIn</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">2</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">3</span><span class="pun">))-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">whereNull</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">whereNotNull</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">groupBy</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="com">// Default Eloquent sort is ascendant</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">orderBy</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">orderBy</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">,</span><span class="str">'desc'</span><span
					class="pun">)-&gt;</span><span class="kwd">get</span><span class="pun">();</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">having</span><span
					class="pun">(</span><span class="str">'count'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'&gt;'</span><span class="pun">,</span><span
					class="pln"> </span><span class="lit">100</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">skip</span><span
					class="pun">(</span><span class="lit">10</span><span class="pun">)-&gt;</span><span
					class="pln">take</span><span class="pun">(</span><span class="lit">5</span><span
					class="pun">)-&gt;</span><span class="kwd">get</span><span class="pun">();</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">first</span><span
					class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">pluck</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">lists</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Joins</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">join</span><span
					class="pun">(</span><span class="str">'table'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'name.id'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'table.id'</span><span class="pun">)</span><span class="pln">
    </span><span class="pun">-&gt;</span><span class="kwd">select</span><span class="pun">(</span><span class="str">'name.id'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'table.email'</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h6>Inserts, Updates, Deletes</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln typ">DB</span><span
					class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">)-&gt;</span><span class="pln">insert</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pln"> </span><span
					class="pun">=&gt;</span><span class="pln"> </span><span class="str">'John'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'email'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'john@example.com'</span><span
					class="pun">));</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">insertGetId</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'John'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'john@example.com'</span><span class="pun">));</span><span
					class="pln">
</span><span class="com">// Batch insert</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">insert</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="pln">
	array</span><span class="pun">(</span><span class="str">'name'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'John'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'john@example.com'</span><span class="pun">)</span><span
					class="pln">
	array</span><span class="pun">(</span><span class="str">'name'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'James'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'james@example.com'</span><span class="pun">)</span><span
					class="pln">
</span><span class="pun">));</span><span class="pln">
</span><span class="com">// Update an entry</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="kwd">where</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'John'</span><span class="pun">)</span><span class="pln">
	</span><span class="pun">-&gt;</span><span class="pln">update</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'email'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'john@example2.com'</span><span class="pun">));</span><span
					class="pln">
</span><span class="com">// Delete everything from a table</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="kwd">delete</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Delete specific records</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="kwd">where</span><span
					class="pun">(</span><span class="str">'id'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'&gt;'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'10'</span><span class="pun">)-&gt;</span><span class="kwd">delete</span><span
					class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">truncate</span><span
					class="pun">();</span><span class="pln">
			</span></pre>

<h6>Aggregates</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln typ">DB</span><span
					class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">)-&gt;</span><span class="pln">count</span><span class="pun">();</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">max</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">min</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">avg</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">sum</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">increment</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">increment</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">,</span><span class="pln"> $amount</span><span
					class="pun">);</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">decrement</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">);</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">decrement</span><span
					class="pun">(</span><span class="str">'column'</span><span class="pun">,</span><span class="pln"> $amount</span><span
					class="pun">);</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">remember</span><span
					class="pun">(</span><span class="lit">5</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">remember</span><span
					class="pun">(</span><span class="lit">5</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'cache-key-name'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">cacheTags</span><span
					class="pun">(</span><span class="str">'my-key'</span><span class="pun">)-&gt;</span><span
					class="pln">remember</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">cacheTags</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'my-first-key'</span><span
					class="pun">,</span><span class="str">'my-second-key'</span><span class="pun">))-&gt;</span><span
					class="pln">remember</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
			</span></pre>

<h6>Raw Expressions</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// return rows</span><span
					class="pln typ">
DB</span><span class="pun">::</span><span class="kwd">select</span><span class="pun">(</span><span class="str">'select * from users where id = ?'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span class="str">'value'</span><span
					class="pun">));</span><span class="pln">
</span><span class="com">// return nr affected rows</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">insert</span><span class="pun">(</span><span class="str">'insert into foo set bar=2'</span><span
					class="pun">);</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">update</span><span class="pun">(</span><span class="str">'update foo set bar=2'</span><span
					class="pun">);</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="kwd">delete</span><span class="pun">(</span><span class="str">'delete from bar'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// returns void</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">statement</span><span class="pun">(</span><span class="str">'update foo set bar=2'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// raw expression inside a statement</span><span class="pln typ">
DB</span><span class="pun">::</span><span class="pln">table</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">)-&gt;</span><span class="kwd">select</span><span
					class="pun">(</span><span class="pln typ">DB</span><span class="pun">::</span><span
					class="pln">raw</span><span class="pun">(</span><span
					class="str">'count(*) as count, column2'</span><span class="pun">))-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
			</span></pre>

<h4><a name="eloquent" href="#eloquent">Eloquent</a> <a href="http://laravel.com/docs/eloquent"
                                                        title="Eloquent @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Model</span><span
					class="pun">::</span><span class="pln">create</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pln"> </span><span
					class="pun">=&gt;</span><span class="pln"> </span><span class="str">'value'</span><span class="pun">));</span><span
					class="pln">
</span><span class="com">// Fill a model with an array of attributes, beware of mass assignment!</span><span
					class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">fill</span><span
					class="pun">(</span><span class="pln">$attributes</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">destroy</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">all</span><span class="pun">();</span><span
					class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">find</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Find using dual primary key</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">find</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'first'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'last'</span><span
					class="pun">));</span><span class="pln">
</span><span class="com">// Throw an exception if the lookup fails</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">findOrFail</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Find using dual primary key and throw exception if the lookup fails</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">findOrFail</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'first'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'last'</span><span
					class="pun">));</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">)-&gt;</span><span class="kwd">get</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">)-&gt;</span><span class="pln">first</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// dynamic</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">whereFoo</span><span
					class="pun">(</span><span class="str">'bar'</span><span class="pun">)-&gt;</span><span class="pln">first</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Throw an exception if the lookup fails</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">)-&gt;</span><span class="pln">firstOrFail</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">)-&gt;</span><span class="pln">count</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">)-&gt;</span><span class="kwd">delete</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">//Output raw query</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'='</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">)-&gt;</span><span class="pln">toSql</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">whereRaw</span><span
					class="pun">(</span><span class="str">'foo = bar and cars = 2'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="lit">20</span><span class="pun">))-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">remember</span><span
					class="pun">(</span><span class="lit">5</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">remember</span><span
					class="pun">(</span><span class="lit">5</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'cache-key-name'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">cacheTags</span><span
					class="pun">(</span><span class="str">'my-tag'</span><span class="pun">)-&gt;</span><span
					class="pln">remember</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">cacheTags</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'my-first-key'</span><span
					class="pun">,</span><span class="str">'my-second-key'</span><span class="pun">))-&gt;</span><span
					class="pln">remember</span><span class="pun">(</span><span class="lit">5</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">on</span><span
					class="pun">(</span><span class="str">'connection-name'</span><span class="pun">)-&gt;</span><span
					class="pln">find</span><span class="pun">(</span><span class="lit">1</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">with</span><span
					class="pun">(</span><span class="str">'relation'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">all</span><span
					class="pun">()-&gt;</span><span class="pln">take</span><span class="pun">(</span><span class="lit">10</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">all</span><span
					class="pun">()-&gt;</span><span class="pln">skip</span><span class="pun">(</span><span class="lit">10</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h6>Soft Delete</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Model</span><span
					class="pun">::</span><span class="pln">withTrashed</span><span class="pun">()-&gt;</span><span
					class="kwd">where</span><span class="pun">(</span><span class="str">'cars'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span
					class="pun">)-&gt;</span><span class="kwd">get</span><span class="pun">();</span><span class="pln">
</span><span class="com">// Include the soft deleted models in the results</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">withTrashed</span><span class="pun">()-&gt;</span><span
					class="kwd">where</span><span class="pun">(</span><span class="str">'cars'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span
					class="pun">)-&gt;</span><span class="pln">restore</span><span class="pun">();</span><span
					class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="kwd">where</span><span class="pun">(</span><span
					class="str">'cars'</span><span class="pun">,</span><span class="pln"> </span><span
					class="lit">2</span><span class="pun">)-&gt;</span><span class="pln">forceDelete</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Force the result set to only included soft deletes</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">onlyTrashed</span><span class="pun">()-&gt;</span><span
					class="kwd">where</span><span class="pun">(</span><span class="str">'cars'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span
					class="pun">)-&gt;</span><span class="kwd">get</span><span class="pun">();</span><span class="pln">
			</span></pre>

<h6>Events</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Model</span><span
					class="pun">::</span><span class="pln">creating</span><span class="pun">(</span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$model</span><span class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">created</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$model</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">updating</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$model</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">updated</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$model</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">saving</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$model</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">saved</span><span class="pun">(</span><span
					class="kwd">function</span><span class="pun">(</span><span class="pln">$model</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">deleting</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$model</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">deleted</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$model</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Model</span><span class="pun">::</span><span class="pln">observe</span><span
					class="pun">(</span><span class="kwd">new</span><span class="pln"> </span><span class="typ">FooObserver</span><span
					class="pun">);</span><span class="pln">
			</span></pre>
<h6>Eloquent Configuration</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// Disables mass assignment exceptions from being thrown from model inserts and updates</span><span
					class="pln">
</span><span class="typ">Eloquent</span><span class="pun">::</span><span class="pln">unguard</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Renables any ability to throw mass assignment exceptions</span><span class="pln">
</span><span class="typ">Eloquent</span><span class="pun">::</span><span class="pln">reguard</span><span
					class="pun">();</span><span class="pln">
			</span></pre>

</div>

<div class="large-4 columns code-column">
<h4><a name="db" href="#db">Schema</a> <a href="http://laravel.com/docs/schema" title="Schema Builder @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// Indicate that the table needs to be created</span><span
					class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">create</span><span
					class="pun">(</span><span class="str">'table'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$table</span><span
					class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
    $table</span><span class="pun">-&gt;</span><span class="pln">increments</span><span class="pun">(</span><span
					class="str">'id'</span><span class="pun">);</span><span class="pln">
</span><span class="pun">});</span><span class="pln">
</span><span class="com">// Specify a Connection</span><span class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">connection</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">)-&gt;</span><span class="pln">create</span><span
					class="pun">(</span><span class="str">'table'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$table</span><span
					class="pun">){});</span><span class="pln">
</span><span class="com">// Rename the table to a given name</span><span class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">rename</span><span
					class="pun">(</span><span class="pln">$from</span><span class="pun">,</span><span
					class="pln"> $to</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Indicate that the table should be dropped</span><span class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">drop</span><span class="pun">(</span><span
					class="str">'table'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Indicate that the table should be dropped if it exists</span><span class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">dropIfExists</span><span class="pun">(</span><span
					class="str">'table'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Determine if the given table exists</span><span class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">hasTable</span><span
					class="pun">(</span><span class="str">'table'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Determine if the given table has a given column</span><span class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">hasColumn</span><span
					class="pun">(</span><span class="str">'table'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'column'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Update an existing table</span><span class="pln">
</span><span class="typ">Schema</span><span class="pun">::</span><span class="pln">table</span><span
					class="pun">(</span><span class="str">'table'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$table</span><span
					class="pun">){});</span><span class="pln">
</span><span class="com">// Indicate that the given columns should be renamed</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">renameColumn</span><span class="pun">(</span><span
					class="str">'from'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'to'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Indicate that the given columns should be dropped</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">dropColumn</span><span class="pun">(</span><span
					class="kwd">string</span><span class="pun">|</span><span class="pln">array</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// The storage engine that should be used for the table</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">engine </span><span class="pun">=</span><span
					class="pln"> </span><span class="str">'InnoDB'</span><span class="pun">;</span><span class="pln">
</span><span class="com">// Only work on MySQL</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">string</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">)-&gt;</span><span class="pln">after</span><span class="pun">(</span><span class="str">'email'</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h6>Indexes</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">$table</span><span
					class="pun">-&gt;</span><span class="kwd">string</span><span class="pun">(</span><span class="str">'column'</span><span
					class="pun">)-&gt;</span><span class="pln">unique</span><span class="pun">();</span><span
					class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">primary</span><span class="pun">(</span><span class="str">'column'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Creates a dual primary key</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">primary</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'first'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'last'</span><span class="pun">));</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">unique</span><span class="pun">(</span><span class="str">'column'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">unique</span><span class="pun">(</span><span class="str">'column'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'key_name'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Creates a dual unique index</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">unique</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'first'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'last'</span><span class="pun">));</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">unique</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'first'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'last'</span><span class="pun">),</span><span
					class="pln"> </span><span class="str">'key_name'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">index</span><span class="pun">(</span><span class="str">'column'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">index</span><span class="pun">(</span><span class="str">'column'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'key_name'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Creates a dual index</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">index</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'first'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'last'</span><span class="pun">));</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">index</span><span class="pun">(</span><span class="pln">array</span><span
					class="pun">(</span><span class="str">'first'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'last'</span><span class="pun">),</span><span
					class="pln"> </span><span class="str">'key_name'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">dropPrimary</span><span class="pun">(</span><span
					class="str">'table_column_primary'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">dropUnique</span><span class="pun">(</span><span
					class="str">'table_column_unique'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">dropIndex</span><span class="pun">(</span><span
					class="str">'table_column_index'</span><span class="pun">);</span><span class="pln">
			</span></pre>

<h6>Foreign Keys</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">$table</span><span
					class="pun">-&gt;</span><span class="pln">foreign</span><span class="pun">(</span><span class="str">'user_id'</span><span
					class="pun">)-&gt;</span><span class="pln">references</span><span class="pun">(</span><span
					class="str">'id'</span><span class="pun">)-&gt;</span><span class="pln">on</span><span
					class="pun">(</span><span class="str">'users'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">foreign</span><span class="pun">(</span><span class="str">'user_id'</span><span
					class="pun">)-&gt;</span><span class="pln">references</span><span class="pun">(</span><span
					class="str">'id'</span><span class="pun">)-&gt;</span><span class="pln">on</span><span
					class="pun">(</span><span class="str">'users'</span><span class="pun">)-&gt;</span><span
					class="pln">onDelete</span><span class="pun">(</span><span class="str">'cascade'</span><span
					class="pun">|</span><span class="str">'restrict'</span><span class="pun">|</span><span class="str">'set null'</span><span
					class="pun">|</span><span class="str">'no action'</span><span class="pun">);</span><span
					class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">foreign</span><span class="pun">(</span><span class="str">'user_id'</span><span
					class="pun">)-&gt;</span><span class="pln">references</span><span class="pun">(</span><span
					class="str">'id'</span><span class="pun">)-&gt;</span><span class="pln">on</span><span
					class="pun">(</span><span class="str">'users'</span><span class="pun">)-&gt;</span><span
					class="pln">onUpdate</span><span class="pun">(</span><span class="str">'cascade'</span><span
					class="pun">|</span><span class="str">'restrict'</span><span class="pun">|</span><span class="str">'set null'</span><span
					class="pun">|</span><span class="str">'no action'</span><span class="pun">);</span><span
					class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">dropForeign</span><span class="pun">(</span><span
					class="str">'posts_user_id_foreign'</span><span class="pun">);</span><span class="pln">
			</span></pre>

<h6>Column Types</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// Increments</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">increments</span><span class="pun">(</span><span
					class="str">'id'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">bigIncrements</span><span class="pun">(</span><span
					class="str">'id'</span><span class="pun">);</span><span class="pln">

</span><span class="com">// Numbers</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">integer</span><span class="pun">(</span><span class="str">'votes'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">tinyInteger</span><span class="pun">(</span><span
					class="str">'votes'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">smallInteger</span><span class="pun">(</span><span
					class="str">'votes'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">mediumInteger</span><span class="pun">(</span><span
					class="str">'votes'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">bigInteger</span><span class="pun">(</span><span
					class="str">'votes'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">float</span><span class="pun">(</span><span class="str">'amount'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">double</span><span class="pun">(</span><span class="str">'column'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">15</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">8</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">decimal</span><span class="pun">(</span><span class="str">'amount'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">5</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">2</span><span
					class="pun">);</span><span class="pln">

</span><span class="com">//String and Text</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">char</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">4</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">string</span><span class="pun">(</span><span class="str">'email'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">string</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">100</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">text</span><span class="pun">(</span><span class="str">'description'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">mediumText</span><span class="pun">(</span><span
					class="str">'description'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">longText</span><span class="pun">(</span><span class="str">'description'</span><span
					class="pun">);</span><span class="pln">

</span><span class="com">//Date and Time</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">date</span><span class="pun">(</span><span class="str">'created_at'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">dateTime</span><span class="pun">(</span><span class="str">'created_at'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">time</span><span class="pun">(</span><span class="str">'sunrise'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">timestamp</span><span class="pun">(</span><span
					class="str">'added_on'</span><span class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">timestamps</span><span class="pun">();</span><span
					class="pln">
</span><span class="com">// Adds created_at and updated_at columns</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">nullableTimestamps</span><span class="pun">();</span><span
					class="pln">

</span><span class="com">// Others</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">binary</span><span class="pun">(</span><span class="str">'data'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">boolean</span><span class="pun">(</span><span class="str">'confirmed'</span><span
					class="pun">);</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">softDeletes</span><span class="pun">();</span><span
					class="pln">
</span><span class="com">// Adds deleted_at column for soft deletes</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="kwd">enum</span><span class="pun">(</span><span class="str">'choices'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">));</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">rememberToken</span><span class="pun">();</span><span
					class="pln">
</span><span class="com">// Adds remember_token as VARCHAR(100) NULL</span><span class="pln">
$table</span><span class="pun">-&gt;</span><span class="pln">morphs</span><span class="pun">(</span><span class="str">'parent'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Adds INTEGER parent_id and STRING parent_type</span><span class="pln">
</span><span class="pun">-&gt;</span><span class="pln">nullable</span><span class="pun">()</span><span class="pln">
</span><span class="pun">-&gt;</span><span class="kwd">default</span><span class="pun">(</span><span
					class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="pun">-&gt;</span><span class="kwd">unsigned</span><span class="pun">()</span><span class="pln">
			</span></pre>

<h4><a name="input" href="#input">Input</a> <a href="http://laravel.com/docs/requests" title="Input @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Input</span><span
					class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Default if the key is missing</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'default'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">has</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">all</span><span class="pun">();</span><span
					class="pln">
</span><span class="com">// Only retrieve 'foo' and 'bar' when getting input</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">only</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'bar'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Disregard 'foo' when getting input</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="kwd">except</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">);</span><span class="pln">
			</span></pre>

<h6>Session Input (flash)</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// Flash input to the session</span><span
					class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">flash</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Flash only some of the input to the session</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">flashOnly</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'bar'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Flash only some of the input to the session</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">flashExcept</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'baz'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Retrieve an old input item</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">old</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span class="str">'default_value'</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h6>Files</h6>
			<pre class="prettyprint lang-php prettyprinted"><span
					class="com">// Use a file that's been uploaded</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'filename'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Determine if a file was uploaded</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">hasFile</span><span
					class="pun">(</span><span class="str">'filename'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Access file properties</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">getRealPath</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">getClientOriginalName</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">getClientOriginalExtension</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">getSize</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">getMimeType</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Move an uploaded file</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">move</span><span
					class="pun">(</span><span class="pln">$destinationPath</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Move an uploaded file</span><span class="pln">
</span><span class="typ">Input</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">)-&gt;</span><span class="pln">move</span><span
					class="pun">(</span><span class="pln">$destinationPath</span><span class="pun">,</span><span
					class="pln"> $fileName</span><span class="pun">);</span><span class="pln">
			</span></pre>

<h4><a name="cache" href="#cache">Cache</a> <a href="http://laravel.com/docs/cache" title="Cache @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Cache</span><span
					class="pun">::</span><span class="pln">put</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">,</span><span class="pln"> $minutes</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">add</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">,</span><span class="pln"> $minutes</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">forever</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">remember</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span class="pln"> $minutes</span><span
					class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){</span><span class="pln"> </span><span class="kwd">return</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pln"> </span><span
					class="pun">});</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">rememberForever</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){</span><span
					class="pln"> </span><span class="kwd">return</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pln"> </span><span class="pun">});</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">forget</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">has</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'default'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){</span><span
					class="pln"> </span><span class="kwd">return</span><span class="pln"> </span><span class="str">'default'</span><span
					class="pun">;</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">tags</span><span
					class="pun">(</span><span class="str">'my-tag'</span><span class="pun">)-&gt;</span><span
					class="pln">put</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pun">,</span><span class="str">'value'</span><span class="pun">,</span><span class="pln"> $minutes</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">tags</span><span
					class="pun">(</span><span class="str">'my-tag'</span><span class="pun">)-&gt;</span><span
					class="pln">has</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">tags</span><span
					class="pun">(</span><span class="str">'my-tag'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">tags</span><span
					class="pun">(</span><span class="str">'my-tag'</span><span class="pun">)-&gt;</span><span
					class="pln">forget</span><span class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">tags</span><span
					class="pun">(</span><span class="str">'my-tag'</span><span class="pun">)-&gt;</span><span
					class="pln">flush</span><span class="pun">();</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">increment</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">increment</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span class="pln"> $amount</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">decrement</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">decrement</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span class="pln"> $amount</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">section</span><span
					class="pun">(</span><span class="str">'group'</span><span class="pun">)-&gt;</span><span
					class="pln">put</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pun">,</span><span class="pln"> $value</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">section</span><span
					class="pun">(</span><span class="str">'group'</span><span class="pun">)-&gt;</span><span
					class="kwd">get</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Cache</span><span class="pun">::</span><span class="pln">section</span><span
					class="pun">(</span><span class="str">'group'</span><span class="pun">)-&gt;</span><span
					class="pln">flush</span><span class="pun">();</span><span class="pln">
			</span></pre>

<h4><a name="cookies" href="#cookies">Cookies</a> <a href="http://laravel.com/docs/requests#cookies"
                                                     title="Cookies @ Laravel Docs"><i class="icon-file-text"></i></a>
</h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Cookie</span><span
					class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Cookie</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'default'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Create a cookie that lasts for ever</span><span class="pln">
</span><span class="typ">Cookie</span><span class="pun">::</span><span class="pln">forever</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Create a cookie that lasts N minutes</span><span class="pln">
</span><span class="typ">Cookie</span><span class="pun">::</span><span class="pln">make</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'minutes'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Set a cookie before a response has been created</span><span class="pln">
</span><span class="typ">Cookie</span><span class="pun">::</span><span class="pln">queue</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'minutes'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Forget cookie</span><span class="pln">
</span><span class="typ">Cookie</span><span class="pun">::</span><span class="pln">forget</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Send a cookie with a response</span><span class="pln">
$response </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Response</span><span class="pun">::</span><span
					class="pln">make</span><span class="pun">(</span><span class="str">'Hello World'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Add a cookie to the response</span><span class="pln">
$response</span><span class="pun">-&gt;</span><span class="pln">withCookie</span><span class="pun">(</span><span
					class="typ">Cookie</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">,</span><span class="pln"> $minutes</span><span
					class="pun">));</span><span class="pln">
			</span></pre>

<h4><a name="sessions" href="#sessions">Sessions</a> <a href="http://laravel.com/docs/session"
                                                        title="Session @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Session</span><span
					class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Returns an item from the session</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'default'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="kwd">get</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(){</span><span class="pln"> </span><span class="kwd">return</span><span
					class="pln"> </span><span class="str">'default'</span><span class="pun">;</span><span
					class="pln"> </span><span class="pun">});</span><span class="pln">
</span><span class="com">// Put a key / value pair in the session</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">put</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Push a value into an array in the session</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">push</span><span
					class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">,</span><span class="str">'value'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Returns all items from the session</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">all</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Checks if an item is defined</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">has</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Remove an item from the session</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">forget</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Remove all of the items from the session</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">flush</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Generate a new session identifier</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">regenerate</span><span class="pun">();</span><span
					class="pln">
</span><span class="com">// Flash a key / value pair to the session</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">flash</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Reflash all of the session flash data</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">reflash</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Reflash a subset of the current flash data</span><span class="pln">
</span><span class="typ">Session</span><span class="pun">::</span><span class="pln">keep</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span
					class="str">'key1'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'key2'</span><span
					class="pun">));</span><span class="pln">
			</span></pre>

<h4><a name="requests" href="#requests">Requests</a> <a href="http://laravel.com/docs/requests#request-information"
                                                        title="Requests @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// url: http://xx.com/aa/bb</span><span
					class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">url</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// path: /aa/bb</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">path</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// getRequestUri: /aa/bb/?c=d</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">getRequestUri</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Returns user's IP</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">getClientIp</span><span class="pun">();</span><span
					class="pln">
</span><span class="com">// getUri: http://xx.com/aa/bb/?c=d</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">getUri</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// getQueryString: c=d</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">getQueryString</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Get the port scheme of the request (e.g., 80, 443, etc.)</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">getPort</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Determine if the current request URI matches a pattern</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="kwd">is</span><span
					class="pun">(</span><span class="str">'foo/*'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get a segment from the URI (1 based index)</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">segment</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Retrieve a header from the request</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">header</span><span
					class="pun">(</span><span class="str">'Content-Type'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Retrieve a server variable from the request</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">server</span><span
					class="pun">(</span><span class="str">'PATH_INFO'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Determine if the request is the result of an AJAX call</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">ajax</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Determine if the request is over HTTPS</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">secure</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Get the request method</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">method</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Checks if the request method is of specified type</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">isMethod</span><span
					class="pun">(</span><span class="str">'post'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get raw POST data</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">instance</span><span class="pun">()-&gt;</span><span
					class="pln">getContent</span><span class="pun">();</span><span class="pln">
</span><span class="com">// Get requested response format</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">format</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// true if HTTP Content-Type header contains */json</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">isJson</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// true if HTTP Accept header is application/json</span><span class="pln">
</span><span class="typ">Request</span><span class="pun">::</span><span class="pln">wantsJson</span><span class="pun">();</span><span
					class="pln">

			</span></pre>

<h4><a name="responses" href="#responses">Responses</a> <a href="http://laravel.com/docs/responses"
                                                           title="Responses @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="kwd">return</span><span
					class="pln"> </span><span class="typ">Response</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="pln">$contents</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Response</span><span
					class="pun">::</span><span class="pln">make</span><span class="pun">(</span><span class="pln">$contents</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">200</span><span
					class="pun">);</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Response</span><span
					class="pun">::</span><span class="pln">json</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">));</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Response</span><span
					class="pun">::</span><span class="pln">json</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">))</span><span class="pln">
	</span><span class="pun">-&gt;</span><span class="pln">setCallback</span><span class="pun">(</span><span
					class="typ">Input</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'callback'</span><span class="pun">));</span><span
					class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Response</span><span
					class="pun">::</span><span class="pln">download</span><span class="pun">(</span><span class="pln">$filepath</span><span
					class="pun">);</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Response</span><span
					class="pun">::</span><span class="pln">download</span><span class="pun">(</span><span class="pln">$filepath</span><span
					class="pun">,</span><span class="pln"> $filename</span><span class="pun">,</span><span class="pln"> $headers</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Create a response and modify a header value</span><span class="pln">
$response </span><span class="pun">=</span><span class="pln"> </span><span class="typ">Response</span><span class="pun">::</span><span
					class="pln">make</span><span class="pun">(</span><span class="pln">$contents</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">200</span><span
					class="pun">);</span><span class="pln">
$response</span><span class="pun">-&gt;</span><span class="pln">header</span><span class="pun">(</span><span
					class="str">'Content-Type'</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'application/json'</span><span class="pun">);</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> $response</span><span class="pun">;</span><span class="pln">
</span><span class="com">// Attach a cookie to a response</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Response</span><span
					class="pun">::</span><span class="pln">make</span><span class="pun">(</span><span class="pln">$content</span><span
					class="pun">)</span><span class="pln">
	</span><span class="pun">-&gt;</span><span class="pln">withCookie</span><span class="pun">(</span><span class="typ">Cookie</span><span
					class="pun">::</span><span class="pln">make</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">));</span><span class="pln">
			</span></pre>

<h4><a name="redirects" href="#redirects">Redirects</a> <a href="http://laravel.com/docs/responses#redirects"
                                                           title="Redirects @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="kwd">return</span><span
					class="pln"> </span><span class="typ">Redirect</span><span class="pun">::</span><span
					class="pln">to</span><span class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">);</span><span
					class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">to</span><span class="pun">(</span><span class="str">'foo/bar'</span><span
					class="pun">)-&gt;</span><span class="kwd">with</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">);</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">to</span><span class="pun">(</span><span class="str">'foo/bar'</span><span
					class="pun">)-&gt;</span><span class="pln">withInput</span><span class="pun">(</span><span
					class="typ">Input</span><span class="pun">::</span><span class="kwd">get</span><span class="pun">());</span><span
					class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">to</span><span class="pun">(</span><span class="str">'foo/bar'</span><span
					class="pun">)-&gt;</span><span class="pln">withInput</span><span class="pun">(</span><span
					class="typ">Input</span><span class="pun">::</span><span class="kwd">except</span><span class="pun">(</span><span
					class="str">'password'</span><span class="pun">));</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">to</span><span class="pun">(</span><span class="str">'foo/bar'</span><span
					class="pun">)-&gt;</span><span class="pln">withErrors</span><span class="pun">(</span><span
					class="pln">$validator</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Create a new redirect response to the previous location</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">back</span><span class="pun">();</span><span class="pln">
</span><span class="com">// Create a new redirect response to a named route</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">route</span><span class="pun">(</span><span class="str">'foobar'</span><span
					class="pun">);</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">route</span><span class="pun">(</span><span class="str">'foobar'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span class="str">'value'</span><span
					class="pun">));</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">route</span><span class="pun">(</span><span class="str">'foobar'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">));</span><span class="pln">
</span><span class="com">// Create a new redirect response to a controller action</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">action</span><span class="pun">(</span><span class="str">'FooController@index'</span><span
					class="pun">);</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">action</span><span class="pun">(</span><span class="str">'FooController@baz'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span class="str">'value'</span><span
					class="pun">));</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">action</span><span class="pun">(</span><span class="str">'FooController@baz'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">));</span><span class="pln">
</span><span class="com">// If intended redirect is not defined, defaults to foo/bar.</span><span class="pln">
</span><span class="kwd">return</span><span class="pln"> </span><span class="typ">Redirect</span><span
					class="pun">::</span><span class="pln">intended</span><span class="pun">(</span><span class="str">'foo/bar'</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h4><a name="ioc" href="#ioc">IoC</a> <a href="http://laravel.com/docs/ioc" title="IoC Container @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">App</span><span class="pun">::</span><span
					class="pln">bind</span><span class="pun">(</span><span class="str">'foo'</span><span
					class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$app</span><span class="pun">){</span><span
					class="pln"> </span><span class="kwd">return</span><span class="pln"> </span><span
					class="kwd">new</span><span class="pln"> </span><span class="typ">Foo</span><span
					class="pun">;</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// If this class exists, it's returned</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="str">'FooBar'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Register a shared binding in the container</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">singleton</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){</span><span
					class="pln"> </span><span class="kwd">return</span><span class="pln"> </span><span
					class="kwd">new</span><span class="pln"> </span><span class="typ">Foo</span><span
					class="pun">;</span><span class="pln"> </span><span class="pun">});</span><span class="pln">
</span><span class="com">// Register an existing instance as shared in the container</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">instance</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">new</span><span class="pln"> </span><span
					class="typ">Foo</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Register a binding with the container</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">bind</span><span
					class="pun">(</span><span class="str">'FooRepositoryInterface'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'BarRepository'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Register a service provider with the application</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="kwd">register</span><span
					class="pun">(</span><span class="str">'FooServiceProvider'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Listen for object resolution</span><span class="pln">
</span><span class="typ">App</span><span class="pun">::</span><span class="pln">resolving</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$object</span><span
					class="pun">){});</span><span class="pln">
			</span></pre>

<h4><a name="security" href="#security">Security</a> <a href="http://laravel.com/docs/security"
                                                        title="Security @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
<h6>Passwords</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Hash</span><span
					class="pun">::</span><span class="pln">make</span><span class="pun">(</span><span class="str">'secretpassword'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Hash</span><span class="pun">::</span><span class="pln">check</span><span
					class="pun">(</span><span class="str">'secretpassword'</span><span class="pun">,</span><span
					class="pln"> $hashedPassword</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Hash</span><span class="pun">::</span><span class="pln">needsRehash</span><span
					class="pun">(</span><span class="pln">$hashedPassword</span><span class="pun">);</span><span
					class="pln">
			</span></pre>
<h6>Auth</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// Determine if the current user is authenticated</span><span
					class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">check</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Get the currently authenticated user</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">user</span><span class="pun">();</span><span
					class="pln">
</span><span class="com">// Get the ID of the currently authenticated user</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">id</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Attempt to authenticate a user using the given credentials</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">attempt</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'email'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> $email</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'password'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> $password</span><span class="pun">));</span><span class="pln">
</span><span class="com">// 'Remember me' by passing true to Auth::attempt()</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">attempt</span><span
					class="pun">(</span><span class="pln">$credentials</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">true</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Log in for a single request</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">once</span><span
					class="pun">(</span><span class="pln">$credentials</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Log a user into the application</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">login</span><span
					class="pun">(</span><span class="typ">User</span><span class="pun">::</span><span
					class="pln">find</span><span class="pun">(</span><span class="lit">1</span><span
					class="pun">));</span><span class="pln">
</span><span class="com">// Log the given user ID into the application</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">loginUsingId</span><span
					class="pun">(</span><span class="lit">1</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Log the user out of the application</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">logout</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Validate a user's credentials</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">validate</span><span
					class="pun">(</span><span class="pln">$credentials</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Attempt to authenticate using HTTP Basic Auth</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">basic</span><span
					class="pun">(</span><span class="str">'username'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Perform a stateless HTTP Basic login attempt</span><span class="pln">
</span><span class="typ">Auth</span><span class="pun">::</span><span class="pln">onceBasic</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Send a password reminder to a user</span><span class="pln">
</span><span class="typ">Password</span><span class="pun">::</span><span class="pln">remind</span><span
					class="pun">(</span><span class="pln">$credentials</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$message</span><span
					class="pun">,</span><span class="pln"> $user</span><span class="pun">){});</span><span class="pln">
			</span></pre>

<h6>Encryption</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Crypt</span><span
					class="pun">::</span><span class="pln">encrypt</span><span class="pun">(</span><span class="str">'secretstring'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Crypt</span><span class="pun">::</span><span class="pln">decrypt</span><span
					class="pun">(</span><span class="pln">$encryptedString</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Crypt</span><span class="pun">::</span><span class="pln">setMode</span><span
					class="pun">(</span><span class="str">'ctr'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Crypt</span><span class="pun">::</span><span class="pln">setCipher</span><span
					class="pun">(</span><span class="pln">$cipher</span><span class="pun">);</span><span class="pln">
			</span></pre>

<h4><a name="mail" href="#mail">Mail</a> <a href="http://laravel.com/docs/mail" title="Mail @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Mail</span><span
					class="pun">::</span><span class="pln">send</span><span class="pun">(</span><span class="str">'email.view'</span><span
					class="pun">,</span><span class="pln"> $data</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$message</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Mail</span><span class="pun">::</span><span class="pln">send</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'html.view'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'text.view'</span><span class="pun">),</span><span
					class="pln"> $data</span><span class="pun">,</span><span class="pln"> $callback</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Mail</span><span class="pun">::</span><span class="pln">queue</span><span
					class="pun">(</span><span class="str">'email.view'</span><span class="pun">,</span><span
					class="pln"> $data</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$message</span><span class="pun">){});</span><span
					class="pln">
</span><span class="typ">Mail</span><span class="pun">::</span><span class="pln">queueOn</span><span
					class="pun">(</span><span class="str">'queue-name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'email.view'</span><span class="pun">,</span><span
					class="pln"> $data</span><span class="pun">,</span><span class="pln"> $callback</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Mail</span><span class="pun">::</span><span class="pln">later</span><span
					class="pun">(</span><span class="lit">5</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'email.view'</span><span class="pun">,</span><span
					class="pln"> $data</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$message</span><span class="pun">){});</span><span
					class="pln">
</span><span class="com">// Write all email to logs instead of sending</span><span class="pln">
</span><span class="typ">Mail</span><span class="pun">::</span><span class="pln">pretend</span><span
					class="pun">();</span><span class="pln">
			</span></pre>

<h6>Messages</h6>
            <pre class="prettyprint lang-php prettyprinted"><span class="com">// These can be used on the $message instance passed into Mail::send() or Mail::queue()</span><span
		            class="pln">
$message</span><span class="pun">-&gt;</span><span class="kwd">from</span><span class="pun">(</span><span class="str">'email@example.com'</span><span
		            class="pun">,</span><span class="pln"> </span><span class="str">'Mr. Example'</span><span
		            class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">sender</span><span class="pun">(</span><span class="str">'email@example.com'</span><span
		            class="pun">,</span><span class="pln"> </span><span class="str">'Mr. Example'</span><span
		            class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">returnPath</span><span class="pun">(</span><span
		            class="str">'email@example.com'</span><span class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">to</span><span class="pun">(</span><span class="str">'email@example.com'</span><span
		            class="pun">,</span><span class="pln"> </span><span class="str">'Mr. Example'</span><span
		            class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">cc</span><span class="pun">(</span><span class="str">'email@example.com'</span><span
		            class="pun">,</span><span class="pln"> </span><span class="str">'Mr. Example'</span><span
		            class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">bcc</span><span class="pun">(</span><span class="str">'email@example.com'</span><span
		            class="pun">,</span><span class="pln"> </span><span class="str">'Mr. Example'</span><span
		            class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">replyTo</span><span class="pun">(</span><span
		            class="str">'email@example.com'</span><span class="pun">,</span><span class="pln"> </span><span
		            class="str">'Mr. Example'</span><span class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">subject</span><span class="pun">(</span><span
		            class="str">'Welcome to the Jungle'</span><span class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">priority</span><span class="pun">(</span><span
		            class="lit">2</span><span class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">attach</span><span class="pun">(</span><span class="str">'foo\bar.txt'</span><span
		            class="pun">,</span><span class="pln"> $options</span><span class="pun">);</span><span class="pln">
</span><span class="com">// This uses in-memory data as attachments</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">attachData</span><span class="pun">(</span><span
		            class="str">'bar'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Data Name'</span><span
		            class="pun">,</span><span class="pln"> $options</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Embed a file in the message and get the CID</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">embed</span><span class="pun">(</span><span class="str">'foo\bar.txt'</span><span
		            class="pun">);</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">embedData</span><span class="pun">(</span><span
		            class="str">'foo'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Data Name'</span><span
		            class="pun">,</span><span class="pln"> $options</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get the underlying Swift Message instance</span><span class="pln">
$message</span><span class="pun">-&gt;</span><span class="pln">getSwiftMessage</span><span class="pun">();</span><span
		            class="pln">
            </span></pre>

<h4><a name="queues" href="#queues">Queues</a> <a href="http://laravel.com/docs/queues" title="Queues @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Queue</span><span
					class="pun">::</span><span class="pln">push</span><span class="pun">(</span><span class="str">'SendMail'</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span class="str">'message'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> $message</span><span
					class="pun">));</span><span class="pln">
</span><span class="typ">Queue</span><span class="pun">::</span><span class="pln">push</span><span
					class="pun">(</span><span class="str">'SendEmail@send'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'message'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> $message</span><span
					class="pun">));</span><span class="pln">
</span><span class="typ">Queue</span><span class="pun">::</span><span class="pln">push</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$job</span><span
					class="pun">)</span><span class="pln"> </span><span class="kwd">use</span><span
					class="pln"> $id </span><span class="pun">{});</span><span class="pln">
php artisan queue</span><span class="pun">:</span><span class="pln">listen
php artisan queue</span><span class="pun">:</span><span class="pln">listen connection
php artisan queue</span><span class="pun">:</span><span class="pln">listen </span><span class="pun">--</span><span
					class="pln">timeout</span><span class="pun">=</span><span class="lit">60</span><span class="pln">
php artisan queue</span><span class="pun">:</span><span class="pln">work
			</span></pre>

<h4><a name="validation" href="#validation">Validation</a> <a href="http://laravel.com/docs/validation"
                                                              title="Validation @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Validator</span><span
					class="pun">::</span><span class="pln">make</span><span class="pun">(</span><span class="pln">
	array</span><span class="pun">(</span><span class="str">'key'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'Foo'</span><span class="pun">),</span><span class="pln">
	array</span><span class="pun">(</span><span class="str">'key'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'required|in:Foo'</span><span class="pun">)</span><span
					class="pln">
</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Validator</span><span class="pun">::</span><span class="pln">extend</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$attribute</span><span
					class="pun">,</span><span class="pln"> $value</span><span class="pun">,</span><span class="pln"> $params</span><span
					class="pun">){});</span><span class="pln">
</span><span class="typ">Validator</span><span class="pun">::</span><span class="pln">extend</span><span
					class="pun">(</span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'FooValidator@validate'</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Validator</span><span class="pun">::</span><span class="pln">resolver</span><span
					class="pun">(</span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$translator</span><span
					class="pun">,</span><span class="pln"> $data</span><span class="pun">,</span><span class="pln"> $rules</span><span
					class="pun">,</span><span class="pln"> $msgs</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
	</span><span class="kwd">return</span><span class="pln"> </span><span class="kwd">new</span><span
					class="pln"> </span><span class="typ">FooValidator</span><span class="pun">(</span><span
					class="pln">$translator</span><span class="pun">,</span><span class="pln"> $data</span><span
					class="pun">,</span><span class="pln"> $rules</span><span class="pun">,</span><span class="pln"> $msgs</span><span
					class="pun">);</span><span class="pln">
</span><span class="pun">});</span><span class="pln">
			</span></pre>

<h6>Rules</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">accepted
active_url
after</span><span class="pun">:</span><span class="pln">YYYY</span><span class="pun">-</span><span class="pln">MM</span><span
					class="pun">-</span><span class="pln">DD
before</span><span class="pun">:</span><span class="pln">YYYY</span><span class="pun">-</span><span
					class="pln">MM</span><span class="pun">-</span><span class="pln">DD
alpha
alpha_dash
alpha_num
array
between</span><span class="pun">:</span><span class="lit">1</span><span class="pun">,</span><span
					class="lit">10</span><span class="pln">
confirmed
date
date_format</span><span class="pun">:</span><span class="pln">YYYY</span><span class="pun">-</span><span
					class="pln">MM</span><span class="pun">-</span><span class="pln">DD
different</span><span class="pun">:</span><span class="pln">fieldname
digits</span><span class="pun">:</span><span class="pln">value
digits_between</span><span class="pun">:</span><span class="pln">min</span><span class="pun">,</span><span class="pln">max
</span><span class="kwd">boolean</span><span class="pln">
email
exists</span><span class="pun">:</span><span class="pln">table</span><span class="pun">,</span><span class="pln">column
image
</span><span class="kwd">in</span><span class="pun">:</span><span class="pln">foo</span><span class="pun">,</span><span
					class="pln">bar</span><span class="pun">,...</span><span class="pln">
not_in</span><span class="pun">:</span><span class="pln">foo</span><span class="pun">,</span><span
					class="pln">bar</span><span class="pun">,...</span><span class="pln">
integer
numeric
ip
max</span><span class="pun">:</span><span class="pln">value
min</span><span class="pun">:</span><span class="pln">value
mimes</span><span class="pun">:</span><span class="pln">jpeg</span><span class="pun">,</span><span class="pln">png
regex</span><span class="pun">:[</span><span class="lit">0</span><span class="pun">-</span><span
					class="lit">9</span><span class="pun">]</span><span class="pln">
required
required_if</span><span class="pun">:</span><span class="pln">field</span><span class="pun">,</span><span class="pln">value
required_with</span><span class="pun">:</span><span class="pln">foo</span><span class="pun">,</span><span class="pln">bar</span><span
					class="pun">,...</span><span class="pln">
required_with_all</span><span class="pun">:</span><span class="pln">foo</span><span class="pun">,</span><span
					class="pln">bar</span><span class="pun">,...</span><span class="pln">
required_without</span><span class="pun">:</span><span class="pln">foo</span><span class="pun">,</span><span
					class="pln">bar</span><span class="pun">,...</span><span class="pln">
required_without_all</span><span class="pun">:</span><span class="pln">foo</span><span class="pun">,</span><span
					class="pln">bar</span><span class="pun">,...</span><span class="pln">
same</span><span class="pun">:</span><span class="pln">field
size</span><span class="pun">:</span><span class="pln">value
timezone
unique</span><span class="pun">:</span><span class="pln">table</span><span class="pun">,</span><span
					class="pln">column</span><span class="pun">,</span><span class="kwd">except</span><span class="pun">,</span><span
					class="pln">idColumn
url

			</span></pre>

</div>
<div class="large-4 columnsi code-column">
<h4><a name="views" href="#views">Views</a> <a href="http://laravel.com/docs/responses#views"
                                               title="Views @ Laravel Docs"><i class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">View</span><span
					class="pun">::</span><span class="pln">make</span><span class="pun">(</span><span class="str">'path/to/view'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">)-&gt;</span><span
					class="kwd">with</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">)-&gt;</span><span
					class="pln">withKey</span><span class="pun">(</span><span class="str">'value'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pln"> </span><span
					class="pun">=&gt;</span><span class="pln"> </span><span class="str">'value'</span><span class="pun">));</span><span
					class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">exists</span><span class="pun">(</span><span
					class="str">'foo/bar'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Share a value across all views</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">share</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Nesting views</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">make</span><span
					class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">)-&gt;</span><span
					class="pln">nest</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'foo/baz'</span><span
					class="pun">,</span><span class="pln"> $data</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Register a view composer</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">composer</span><span
					class="pun">(</span><span class="str">'viewname'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$view</span><span
					class="pun">){});</span><span class="pln">
</span><span class="com">//Register multiple views to a composer</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">composer</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'view1'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'view2'</span><span
					class="pun">),</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$view</span><span class="pun">){});</span><span class="pln">
</span><span class="com">// Register a composer class</span><span class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">composer</span><span
					class="pun">(</span><span class="str">'viewname'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'FooComposer'</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">View</span><span class="pun">::</span><span class="pln">creator</span><span
					class="pun">(</span><span class="str">'viewname'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$view</span><span
					class="pun">){});</span><span class="pln">
			</span></pre>

<h4><a name="blade" href="#blade">Blade Templates</a> <a href="http://laravel.com/docs/templates#blade-templating"
                                                         title="Blade Templating @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="lit">@extends</span><span
					class="pun">(</span><span class="str">'layout.name'</span><span class="pun">)</span><span
					class="pln">
</span><span class="com">// Begin a section</span><span class="pln">
</span><span class="lit">@section</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">)</span><span class="pln">
</span><span class="com">// End a section</span><span class="pln">
</span><span class="lit">@stop</span><span class="pln">
</span><span class="com">// End a section and yield</span><span class="pln">
</span><span class="lit">@show</span><span class="pln">
</span><span class="lit">@parent</span><span class="pln">
</span><span class="com">// Show a section in a template</span><span class="pln">
</span><span class="lit">@yield</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">)</span><span class="pln">
</span><span class="lit">@include</span><span class="pun">(</span><span class="str">'view.name'</span><span class="pun">)</span><span
					class="pln">
</span><span class="lit">@include</span><span class="pun">(</span><span class="str">'view.name'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'key'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">));</span><span class="pln">
</span><span class="lit">@lang</span><span class="pun">(</span><span class="str">'messages.name'</span><span
					class="pun">)</span><span class="pln">
</span><span class="lit">@choice</span><span class="pun">(</span><span class="str">'messages.name'</span><span
					class="pun">,</span><span class="pln"> </span><span class="lit">1</span><span
					class="pun">);</span><span class="pln">
</span><span class="lit">@if</span><span class="pln">
</span><span class="lit">@else</span><span class="pln">
</span><span class="lit">@elseif</span><span class="pln">
</span><span class="lit">@endif</span><span class="pln">
</span><span class="lit">@unless</span><span class="pln">
</span><span class="lit">@endunless</span><span class="pln">
</span><span class="lit">@for</span><span class="pln">
</span><span class="lit">@endfor</span><span class="pln">
</span><span class="lit">@foreach</span><span class="pln">
</span><span class="lit">@endforeach</span><span class="pln">
</span><span class="lit">@while</span><span class="pln">
</span><span class="lit">@endwhile</span><span class="pln">
</span><span class="com">// Echo content</span><span class="pln">
</span><span class="pun">{{</span><span class="pln"> $var </span><span class="pun">}}</span><span class="pln">
</span><span class="com">// Echo escaped content</span><span class="pln">
</span><span class="pun">{{{</span><span class="pln"> $var </span><span class="pun">}}}</span><span class="pln">
</span><span class="pun">{{--</span><span class="pln"> </span><span class="typ">Blade</span><span
					class="pln"> </span><span class="typ">Comment</span><span class="pln"> </span><span
					class="pun">--}}</span><span class="pln">
</span><span class="com">// Echoing Data After Checking For Existence</span><span class="pln">
</span><span class="pun">{{{</span><span class="pln"> $name </span><span class="kwd">or</span><span class="pln"> </span><span
					class="str">'Default'</span><span class="pln"> </span><span class="pun">}}}</span><span class="pln">
</span><span class="com">// Displaying Raw Text With Curly Braces</span><span class="pln">
</span><span class="pun">@{{</span><span class="pln"> </span><span class="typ">This</span><span
					class="pln"> will </span><span class="kwd">not</span><span class="pln"> be processed </span><span
					class="kwd">by</span><span class="pln"> </span><span class="typ">Blade</span><span
					class="pln"> </span><span class="pun">}}</span><span class="pln">
			</span></pre>

<h4><a name="forms" href="#forms">Forms</a> <a href="http://laravel.com/docs/html"
                                               title="Forms &amp; HTML @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Form</span><span
					class="pun">::</span><span class="pln">open</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'url'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'foo/bar'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'method'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'PUT'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">open</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'route'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'foo.bar'</span><span
					class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">open</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'route'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">,</span><span class="pln"> $parameter</span><span
					class="pun">)));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">open</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'action'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span class="str">'FooController@method'</span><span
					class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">open</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span class="str">'action'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'FooController@method'</span><span class="pun">,</span><span
					class="pln"> $parameter</span><span class="pun">)));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">open</span><span
					class="pun">(</span><span class="pln">array</span><span class="pun">(</span><span
					class="str">'url'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'foo/bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'files'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="kwd">true</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">close</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">token</span><span
					class="pun">();</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">model</span><span
					class="pun">(</span><span class="pln">$foo</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'route'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">,</span><span class="pln"> $foo</span><span
					class="pun">-&gt;</span><span class="pln">bar</span><span class="pun">)));</span><span class="pln">

			</span></pre>

<h6>Form Elements</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">Form</span><span
					class="pun">::</span><span class="pln">label</span><span class="pun">(</span><span
					class="str">'id'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'Description'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">label</span><span
					class="pun">(</span><span class="str">'id'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'Description'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'class'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'foo'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">text</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">text</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span class="pln"> $value</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">text</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span class="pln"> $value</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span class="str">'class'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">textarea</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">textarea</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span class="pln"> $value</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">textarea</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span class="pln"> $value</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span class="str">'class'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">hidden</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> $value</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">password</span><span
					class="pun">(</span><span class="str">'password'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">password</span><span
					class="pun">(</span><span class="str">'password'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'placeholder'</span><span class="pln"> </span><span
					class="pun">=&gt;</span><span class="pln"> </span><span class="str">'Password'</span><span
					class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">email</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span class="pln"> $value</span><span
					class="pun">,</span><span class="pln"> array</span><span class="pun">());</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">file</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'class'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">checkbox</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generating a checkbox that is checked</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">checkbox</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'class'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">radio</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generating a radio input that is selected</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">radio</span><span
					class="pun">(</span><span class="str">'name'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">true</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'class'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="kwd">select</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="kwd">select</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span
					class="str">'key'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">),</span><span
					class="pln"> </span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'class'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">submit</span><span class="pun">(</span><span
					class="str">'Submit!'</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'class'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">button</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">,</span><span class="pln"> array</span><span class="pun">(</span><span
					class="str">'class'</span><span class="pln"> </span><span class="pun">=&gt;</span><span
					class="pln"> </span><span class="str">'name'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">macro</span><span
					class="pun">(</span><span class="str">'fooField'</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">()</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
	</span><span class="kwd">return</span><span class="pln"> </span><span
					class="str">'&lt;input type="custom"/&gt;'</span><span class="pun">;</span><span class="pln">
</span><span class="pun">});</span><span class="pln">
</span><span class="typ">Form</span><span class="pun">::</span><span class="pln">fooField</span><span
					class="pun">();</span><span class="pln">
			</span></pre>

<h4><a name="html" href="#html">HTML Builder</a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">HTML</span><span
					class="pun">::</span><span class="pln">macro</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
</span><span class="com">// Convert an HTML string to entities</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">entities</span><span class="pun">(</span><span class="pln">$value</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Convert entities to HTML characters</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">decode</span><span class="pun">(</span><span
					class="pln">$value</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generate a link to a JavaScript file</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">script</span><span class="pun">(</span><span
					class="pln">$url</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Generate a link to a CSS file</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">style</span><span class="pun">(</span><span
					class="pln">$url</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Generate an HTML image element</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">image</span><span class="pun">(</span><span
					class="pln">$url</span><span class="pun">,</span><span class="pln"> $alt</span><span
					class="pun">,</span><span class="pln"> $attributes</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Generate a HTML link</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">link</span><span class="pun">(</span><span
					class="pln">$url</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'title'</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">,</span><span class="pln"> $secure</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generate a HTTPS HTML link</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">secureLink</span><span class="pun">(</span><span class="pln">$url</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'title'</span><span
					class="pun">,</span><span class="pln"> $attributes</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Generate a HTML link to an asset</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">linkAsset</span><span class="pun">(</span><span
					class="pln">$url</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'title'</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">,</span><span class="pln"> $secure</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generate a HTTPS HTML link to an asset</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">linkSecureAsset</span><span class="pun">(</span><span
					class="pln">$url</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'title'</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Generate a HTML link to a named route</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">linkRoute</span><span class="pun">(</span><span class="pln">$name</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'title'</span><span
					class="pun">,</span><span class="pln"> $parameters</span><span class="pun">,</span><span
					class="pln"> $attributes</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generate a HTML link to a controller action</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">linkAction</span><span class="pun">(</span><span class="pln">$action</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'title'</span><span
					class="pun">,</span><span class="pln"> $parameters</span><span class="pun">,</span><span
					class="pln"> $attributes</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generate a HTML link to an email address</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">mailto</span><span class="pun">(</span><span
					class="pln">$email</span><span class="pun">,</span><span class="pln"> </span><span class="str">'title'</span><span
					class="pun">,</span><span class="pln"> $attributes</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Obfuscate an e-mail address to prevent spam-bots from sniffing it</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">email</span><span class="pun">(</span><span
					class="pln">$email</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Generate an ordered list of items</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">ol</span><span class="pun">(</span><span
					class="pln">$list</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Generate an un-ordered list of items</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">ul</span><span class="pun">(</span><span
					class="pln">$list</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Create a listing HTML element</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">listing</span><span class="pun">(</span><span
					class="pln">$type</span><span class="pun">,</span><span class="pln"> $list</span><span
					class="pun">,</span><span class="pln"> $attributes</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Create the HTML for a listing element</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">listingElement</span><span class="pun">(</span><span
					class="pln">$key</span><span class="pun">,</span><span class="pln"> $type</span><span
					class="pun">,</span><span class="pln"> $value</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Create the HTML for a nested listing attribute</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">nestedListing</span><span class="pun">(</span><span class="pln">$key</span><span
					class="pun">,</span><span class="pln"> $type</span><span class="pun">,</span><span class="pln"> $value</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Build an HTML attribute string from an array</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">attributes</span><span class="pun">(</span><span class="pln">$attributes</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Build a single attribute element</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">attributeElement</span><span class="pun">(</span><span
					class="pln">$key</span><span class="pun">,</span><span class="pln"> $value</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Obfuscate a string to prevent spam-bots from sniffing it</span><span class="typ">
HTML</span><span class="pun">::</span><span class="pln">obfuscate</span><span class="pun">(</span><span class="pln">$value</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h4><a name="str" href="#str">Strings</a> <a href="http://laravel.com/docs/helpers#strings"
                                             title="Strings CLI @ Laravel Docs"><i class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span
					class="com">// Transliterate a UTF-8 value to ASCII</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">ascii</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">camel</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">contains</span><span
					class="pun">(</span><span class="pln">$haystack</span><span class="pun">,</span><span class="pln"> $needle</span><span
					class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">endsWith</span><span
					class="pun">(</span><span class="pln">$haystack</span><span class="pun">,</span><span class="pln"> $needles</span><span
					class="pun">)</span><span class="pln">
</span><span class="com">// Cap a string with a single instance of a given value.</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">finish</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">,</span><span
					class="pln"> $cap</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="kwd">is</span><span class="pun">(</span><span
					class="pln">$pattern</span><span class="pun">,</span><span class="pln"> $value</span><span
					class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">length</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">limit</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">,</span><span class="pln"> $limit </span><span
					class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">,</span><span
					class="pln"> $end </span><span class="pun">=</span><span class="pln"> </span><span
					class="str">'...'</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">lower</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">words</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">,</span><span class="pln"> $words </span><span
					class="pun">=</span><span class="pln"> </span><span class="lit">100</span><span class="pun">,</span><span
					class="pln"> $end </span><span class="pun">=</span><span class="pln"> </span><span
					class="str">'...'</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">plural</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">,</span><span class="pln"> $count </span><span
					class="pun">=</span><span class="pln"> </span><span class="lit">2</span><span
					class="pun">)</span><span class="pln">
</span><span class="com">// Generate a more truly "random" alpha-numeric string.</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">random</span><span
					class="pun">(</span><span class="pln">$length </span><span class="pun">=</span><span
					class="pln"> </span><span class="lit">16</span><span class="pun">)</span><span class="pln">
</span><span class="com">// Generate a "random" alpha-numeric string.</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">quickRandom</span><span
					class="pun">(</span><span class="pln">$length </span><span class="pun">=</span><span
					class="pln"> </span><span class="lit">16</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">upper</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">title</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">singular</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">slug</span><span
					class="pun">(</span><span class="pln">$title</span><span class="pun">,</span><span class="pln"> $separator </span><span
					class="pun">=</span><span class="pln"> </span><span class="str">'-'</span><span class="pun">)</span><span
					class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">snake</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">,</span><span class="pln"> $delimiter </span><span
					class="pun">=</span><span class="pln"> </span><span class="str">'_'</span><span class="pun">)</span><span
					class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">startsWith</span><span
					class="pun">(</span><span class="pln">$haystack</span><span class="pun">,</span><span class="pln"> $needles</span><span
					class="pun">)</span><span class="pln">
</span><span class="com">// Convert a value to studly caps case.</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">studly</span><span
					class="pun">(</span><span class="pln">$value</span><span class="pun">)</span><span class="pln">
</span><span class="typ">Str</span><span class="pun">::</span><span class="pln">macro</span><span
					class="pun">(</span><span class="pln">$name</span><span class="pun">,</span><span class="pln"> $macro</span><span
					class="pun">)</span><span class="pln">
			</span></pre>

<h4><a name="localization" href="#localization">Localization</a> <a href="http://laravel.com/docs/localization"
                                                                    title="Localization @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">App</span><span class="pun">::</span><span
					class="pln">setLocale</span><span class="pun">(</span><span class="str">'en'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">Lang</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'messages.welcome'</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Lang</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'messages.welcome'</span><span class="pun">,</span><span
					class="pln"> array</span><span class="pun">(</span><span class="str">'foo'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'Bar'</span><span class="pun">));</span><span class="pln">
</span><span class="typ">Lang</span><span class="pun">::</span><span class="pln">has</span><span
					class="pun">(</span><span class="str">'messages.welcome'</span><span class="pun">);</span><span
					class="pln">
</span><span class="typ">Lang</span><span class="pun">::</span><span class="pln">choice</span><span class="pun">(</span><span
					class="str">'messages.apples'</span><span class="pun">,</span><span class="pln"> </span><span
					class="lit">10</span><span class="pun">);</span><span class="pln">
			</span></pre>

<h4><a name="files" href="#files">Files</a> <a href="http://laravel.com/api/class-Illuminate.Filesystem.Filesystem.html"
                                               title="Filesystem @ Laravel Docs"><i class="icon-file-text"></i></a></h4>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">File</span><span
					class="pun">::</span><span class="pln">exists</span><span class="pun">(</span><span class="str">'path'</span><span
					class="pun">);</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="kwd">get</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">getRemote</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get a file's contents by requiring it</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">getRequire</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Require the given file once</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">requireOnce</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Write the contents of a file</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">put</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'contents'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Append to a file</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">append</span><span class="pun">(</span><span
					class="str">'path'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'data'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Delete the file at a given path</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="kwd">delete</span><span class="pun">(</span><span
					class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Move a file to a new location</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">move</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'target'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Copy a file to a new location</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">copy</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'target'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Extract the file extension from a file path</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">extension</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get the file type of a given file</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">type</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get the file size of a given file</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">size</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get the file's last modification time</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">lastModified</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Determine if the given path is a directory</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">isDirectory</span><span
					class="pun">(</span><span class="str">'directory'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Determine if the given path is writable</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">isWritable</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Determine if the given path is a file</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">isFile</span><span class="pun">(</span><span
					class="str">'file'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Find path names matching a given pattern.</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">glob</span><span
					class="pun">(</span><span class="pln">$patterns</span><span class="pun">,</span><span class="pln"> $flag</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Get an array of all files in a directory.</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">files</span><span
					class="pun">(</span><span class="str">'directory'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Get all of the files from the given directory (recursive).</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">allFiles</span><span
					class="pun">(</span><span class="str">'directory'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Get all of the directories within a given directory.</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">directories</span><span
					class="pun">(</span><span class="str">'directory'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Create a directory</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">makeDirectory</span><span
					class="pun">(</span><span class="str">'path'</span><span class="pun">,</span><span class="pln">  $mode </span><span
					class="pun">=</span><span class="pln"> </span><span class="lit">0777</span><span
					class="pun">,</span><span class="pln"> $recursive </span><span class="pun">=</span><span
					class="pln"> </span><span class="kwd">false</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Copy a directory from one location to another</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">copyDirectory</span><span
					class="pun">(</span><span class="str">'directory'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'destination'</span><span class="pun">,</span><span
					class="pln"> $options </span><span class="pun">=</span><span class="pln"> </span><span class="kwd">null</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Recursively delete a directory</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">deleteDirectory</span><span
					class="pun">(</span><span class="str">'directory'</span><span class="pun">,</span><span class="pln"> $preserve </span><span
					class="pun">=</span><span class="pln"> </span><span class="kwd">false</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Empty the specified directory of all files and folders</span><span class="pln">
</span><span class="typ">File</span><span class="pun">::</span><span class="pln">cleanDirectory</span><span class="pun">(</span><span
					class="str">'directory'</span><span class="pun">);</span><span class="pln">
			</span></pre>


<h4><a name="helpers" href="#helpers">Helpers</a> <a href="http://laravel.com/docs/helpers"
                                                     title="Helpers @ Laravel Docs"><i class="icon-file-text"></i></a>
</h4>
<h6>Arrays</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">array_add</span><span class="pun">(</span><span
					class="pln">$array</span><span class="pun">,</span><span class="pln"> </span><span
					class="str">'key'</span><span class="pun">,</span><span class="pln"> </span><span class="str">'value'</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Build a new array using a callback</span><span class="pln">
array_build</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
</span><span class="com">// Divide an array into two arrays. One with keys and the other with values</span><span
					class="pln">
array_divide</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Flatten a multi-dimensional associative array with dots</span><span class="pln">
array_dot</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get all of the given array except for a specified array of items</span><span class="pln">
array_except</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">));</span><span class="pln">
</span><span class="com">// Fetch a flattened array of a nested array element</span><span class="pln">
array_fetch</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Return the first element in an array passing a given truth test</span><span class="pln">
array_first</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$key</span><span
					class="pun">,</span><span class="pln"> $value</span><span class="pun">){},</span><span class="pln"> $default</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// Strips keys from the array</span><span class="pln">
array_flatten</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Remove one or many array items from a given array using "dot" notation</span><span
					class="pln">
array_forget</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foo'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Dot notation</span><span class="pln">
array_forget</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foo.bar'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get an item from an array using "dot" notation</span><span class="pln">
array_get</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foo'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'default'</span><span class="pun">);</span><span class="pln">
array_get</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foo.bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'default'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get a subset of the items from the given array</span><span class="pln">
array_only</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span class="pln"> array</span><span
					class="pun">(</span><span class="str">'key'</span><span class="pun">));</span><span class="pln">
</span><span class="com">// Return array of key =&gt; values</span><span class="pln">
array_pluck</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Return and remove 'key' from array</span><span class="pln">
array_pull</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'key'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Set an array item to a given value using "dot" notation</span><span class="pln">
array_set</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'key'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Dot notation</span><span class="pln">
array_set</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'key.subkey'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'value'</span><span class="pun">);</span><span class="pln">
array_sort</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">,</span><span
					class="pln"> </span><span class="kwd">function</span><span class="pun">(){});</span><span
					class="pln">
</span><span class="com">// First element of an array</span><span class="pln">
head</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Last element of an array</span><span class="pln">
</span><span class="kwd">last</span><span class="pun">(</span><span class="pln">$array</span><span class="pun">);</span><span
					class="pln">
			</span></pre>
<h6>Paths</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">app_path</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">//  Get the path to the public folder</span><span class="pln">
public_path</span><span class="pun">();</span><span class="pln">
</span><span class="com">// App root path</span><span class="pln">
base_path</span><span class="pun">();</span><span class="pln">
</span><span class="com">// Get the path to the storage folder</span><span class="pln">
storage_path</span><span class="pun">();</span><span class="pln">
			</span></pre>
<h6>Strings</h6>
			<pre class="prettyprint lang-php prettyprinted"><span
					class="com">// Convert a value to camel case</span><span class="pln">
camel_case</span><span class="pun">(</span><span class="pln">$value</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Get the class "basename" of the given object / class</span><span class="pln">
class_basename</span><span class="pun">(</span><span class="pln">$class</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Escape a string</span><span class="pln">
e</span><span class="pun">(</span><span class="str">'&lt;html&gt;'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Determine if a given string starts with a given substring</span><span class="pln">
starts_with</span><span class="pun">(</span><span class="str">'Foo bar.'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'Foo'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Determine if a given string ends with a given substring</span><span class="pln">
ends_with</span><span class="pun">(</span><span class="str">'Foo bar.'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'bar.'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Convert a string to snake case</span><span class="pln">
snake_case</span><span class="pun">(</span><span class="str">'fooBar'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Determine if a given string contains a given substring</span><span class="pln">
str_contains</span><span class="pun">(</span><span class="str">'Hello foo bar.'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foo'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Result: foo/bar/</span><span class="pln">
str_finish</span><span class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'/'</span><span class="pun">);</span><span class="pln">
str_is</span><span class="pun">(</span><span class="str">'foo*'</span><span class="pun">,</span><span
					class="pln"> </span><span class="str">'foobar'</span><span class="pun">);</span><span class="pln">
str_plural</span><span class="pun">(</span><span class="str">'car'</span><span class="pun">);</span><span class="pln">
str_random</span><span class="pun">(</span><span class="lit">25</span><span class="pun">);</span><span class="pln">
str_singular</span><span class="pun">(</span><span class="str">'cars'</span><span class="pun">);</span><span
					class="pln">
</span><span class="com">// Result: FooBar</span><span class="pln">
studly_case</span><span class="pun">(</span><span class="str">'foo_bar'</span><span class="pun">);</span><span
					class="pln">
trans</span><span class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">);</span><span class="pln">
trans_choice</span><span class="pun">(</span><span class="str">'foo.bar'</span><span class="pun">,</span><span
					class="pln"> $count</span><span class="pun">);</span><span class="pln">
			</span></pre>
<h6>URLs and Links</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">action</span><span
					class="pun">(</span><span class="str">'FooController@method'</span><span class="pun">,</span><span
					class="pln"> $parameters</span><span class="pun">);</span><span class="pln">
link_to</span><span class="pun">(</span><span class="str">'foo/bar'</span><span class="pun">,</span><span class="pln"> $title</span><span
					class="pun">,</span><span class="pln"> $attributes</span><span class="pun">,</span><span
					class="pln"> $secure</span><span class="pun">);</span><span class="pln">
link_to_asset</span><span class="pun">(</span><span class="str">'img/foo.jpg'</span><span class="pun">,</span><span
					class="pln"> $title</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">,</span><span class="pln"> $secure</span><span class="pun">);</span><span class="pln">
link_to_route</span><span class="pun">(</span><span class="str">'route.name'</span><span class="pun">,</span><span
					class="pln"> $title</span><span class="pun">,</span><span class="pln"> $parameters</span><span
					class="pun">,</span><span class="pln"> $attributes</span><span class="pun">);</span><span
					class="pln">
link_to_action</span><span class="pun">(</span><span class="str">'FooController@method'</span><span class="pun">,</span><span
					class="pln"> $title</span><span class="pun">,</span><span class="pln"> $params</span><span
					class="pun">,</span><span class="pln"> $attrs</span><span class="pun">);</span><span class="pln">
</span><span class="com">// HTML Link</span><span class="pln">
asset</span><span class="pun">(</span><span class="str">'img/photo.jpg'</span><span class="pun">,</span><span
					class="pln"> $title</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">);</span><span class="pln">
</span><span class="com">// HTTPS link</span><span class="pln">
secure_asset</span><span class="pun">(</span><span class="str">'img/photo.jpg'</span><span class="pun">,</span><span
					class="pln"> $title</span><span class="pun">,</span><span class="pln"> $attributes</span><span
					class="pun">);</span><span class="pln">
secure_url</span><span class="pun">(</span><span class="str">'path'</span><span class="pun">,</span><span class="pln"> $parameters</span><span
					class="pun">);</span><span class="pln">
route</span><span class="pun">(</span><span class="pln">$route</span><span class="pun">,</span><span class="pln"> $parameters</span><span
					class="pun">,</span><span class="pln"> $absolute </span><span class="pun">=</span><span
					class="pln"> </span><span class="kwd">true</span><span class="pun">);</span><span class="pln">
url</span><span class="pun">(</span><span class="str">'path'</span><span class="pun">,</span><span class="pln"> $parameters </span><span
					class="pun">=</span><span class="pln"> array</span><span class="pun">(),</span><span class="pln"> $secure </span><span
					class="pun">=</span><span class="pln"> </span><span class="kwd">null</span><span
					class="pun">);</span><span class="pln">
		</span></pre>
<h6>Miscellaneous</h6>
		<pre class="prettyprint lang-php prettyprinted"><span class="pln">csrf_token</span><span
				class="pun">();</span><span class="pln">
dd</span><span class="pun">(</span><span class="pln">$value</span><span class="pun">);</span><span class="pln">
value</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">(){</span><span
				class="pln"> </span><span class="kwd">return</span><span class="pln"> </span><span
				class="str">'bar'</span><span class="pun">;</span><span class="pln"> </span><span class="pun">});</span><span
				class="pln">
</span><span class="kwd">with</span><span class="pun">(</span><span class="kwd">new</span><span
				class="pln"> </span><span class="typ">Foo</span><span class="pun">)-&gt;</span><span class="pln">chainedMethod</span><span
				class="pun">();</span><span class="pln">
			</span></pre>

<h4><a name="unittest" href="#unittest">Unit testing</a> <a href="http://laravel.com/docs/unittest"
                                                            title="Unit testing @ Laravel Docs"><i
			class="icon-file-text"></i></a></h4>
<h6>Install and run</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="com">// add to composer and update:</span><span
					class="pln">
</span><span class="str">"phpunit/phpunit"</span><span class="pun">:</span><span class="pln"> </span><span class="str">"4.0.*"</span><span
					class="pln">
</span><span class="com">// run tests (from project root)</span><span class="pln">
</span><span class="pun">./</span><span class="pln">vendor</span><span class="pun">/</span><span
					class="pln">bin</span><span class="pun">/</span><span class="pln">phpunit
			</span></pre>
<h6>Asserts</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">$this</span><span class="pun">-&gt;</span><span
					class="pln">assertTrue</span><span class="pun">(</span><span class="kwd">true</span><span
					class="pun">);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertEquals</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">,</span><span class="pln"> $bar</span><span
					class="pun">);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertCount</span><span class="pun">(</span><span
					class="lit">1</span><span class="pun">,</span><span class="pln">$times</span><span
					class="pun">);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertResponseOk</span><span class="pun">();</span><span
					class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertResponseStatus</span><span class="pun">(</span><span
					class="lit">403</span><span class="pun">);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertRedirectedTo</span><span class="pun">(</span><span
					class="str">'foo'</span><span class="pun">);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertRedirectedToRoute</span><span
					class="pun">(</span><span class="str">'route.name'</span><span class="pun">);</span><span
					class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertRedirectedToAction</span><span
					class="pun">(</span><span class="str">'Controller@method'</span><span class="pun">);</span><span
					class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertViewHas</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertViewHas</span><span class="pun">(</span><span
					class="str">'age'</span><span class="pun">,</span><span class="pln"> $value</span><span class="pun">);</span><span
					class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertSessionHasErrors</span><span
					class="pun">();</span><span class="pln">
</span><span class="com">// Asserting the session has errors for a given key...</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertSessionHasErrors</span><span class="pun">(</span><span
					class="str">'name'</span><span class="pun">);</span><span class="pln">
</span><span class="com">// Asserting the session has errors for several keys...</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertSessionHasErrors</span><span class="pun">(</span><span
					class="pln">array</span><span class="pun">(</span><span class="str">'name'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'age'</span><span
					class="pun">));</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">assertHasOldInput</span><span class="pun">();</span><span
					class="pln">
			</span></pre>
<h6>Calling routes</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="pln">$response </span><span
					class="pun">=</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span class="pln">call</span><span
					class="pun">(</span><span class="pln">$method</span><span class="pun">,</span><span class="pln"> $uri</span><span
					class="pun">,</span><span class="pln"> $parameters</span><span class="pun">,</span><span
					class="pln"> $files</span><span class="pun">,</span><span class="pln"> $server</span><span
					class="pun">,</span><span class="pln"> $content</span><span class="pun">);</span><span class="pln">
$response </span><span class="pun">=</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span
					class="pln">callSecure</span><span class="pun">(</span><span class="str">'GET'</span><span
					class="pun">,</span><span class="pln"> </span><span class="str">'foo/bar'</span><span
					class="pun">);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">session</span><span class="pun">([</span><span class="str">'foo'</span><span
					class="pln"> </span><span class="pun">=&gt;</span><span class="pln"> </span><span
					class="str">'bar'</span><span class="pun">]);</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">flushSession</span><span class="pun">();</span><span
					class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">seed</span><span class="pun">();</span><span class="pln">
$this</span><span class="pun">-&gt;</span><span class="pln">seed</span><span class="pun">(</span><span class="pln">$connection</span><span
					class="pun">);</span><span class="pln">
			</span></pre>

<h4><a name="SSH" href="#SSH">SSH</a> <a href="http://laravel.com/docs/ssh" title="SSH @ Laravel Docs"><i
			class="icon-file-text"></i></a>
</h4>
<h6>Executing Commands</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">SSH</span><span class="pun">::</span><span
					class="pln">run</span><span class="pun">(</span><span class="pln">array $commands</span><span
					class="pun">);</span><span class="typ">
SSH</span><span class="pun">::</span><span class="kwd">into</span><span class="pun">(</span><span
					class="pln">$remote</span><span class="pun">)-&gt;</span><span class="pln">run</span><span
					class="pun">(</span><span class="pln">array $commands</span><span class="pun">);</span><span
					class="pln"> </span><span class="com">// specify remote, otherwise assumes default</span><span
					class="typ">
SSH</span><span class="pun">::</span><span class="pln">run</span><span class="pun">(</span><span class="pln">array $commands</span><span
					class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$line</span><span class="pun">)</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
	echo $line</span><span class="pun">.</span><span class="pln">PHP_EOL</span><span class="pun">;</span><span
					class="pln">
</span><span class="pun">});</span><span class="pln">
			</span></pre>

<h6>Tasks</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">SSH</span><span class="pun">::</span><span
					class="pln">define</span><span class="pun">(</span><span class="pln">$taskName</span><span
					class="pun">,</span><span class="pln"> array $commands</span><span class="pun">);</span><span
					class="pln"> </span><span class="com">// define</span><span class="typ">
SSH</span><span class="pun">::</span><span class="pln">task</span><span class="pun">(</span><span
					class="pln">$taskName</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span
					class="pun">(</span><span class="pln">$line</span><span class="pun">)</span><span
					class="pln"> </span><span class="com">// execute</span><span class="pln">
</span><span class="pun">{</span><span class="pln">
	echo $line</span><span class="pun">.</span><span class="pln">PHP_EOL</span><span class="pun">;</span><span
					class="pln">
</span><span class="pun">});</span><span class="pln">
			</span></pre>

<h6>SFTP Uploads</h6>
			<pre class="prettyprint lang-php prettyprinted"><span class="typ">SSH</span><span class="pun">::</span><span
					class="pln">put</span><span class="pun">(</span><span class="pln">$localFile</span><span
					class="pun">,</span><span class="pln"> $remotePath</span><span class="pun">);</span><span
					class="typ">
SSH</span><span class="pun">::</span><span class="pln">putString</span><span class="pun">(</span><span class="pln">$string</span><span
					class="pun">,</span><span class="pln"> $remotePath</span><span class="pun">);</span><span
					class="pln">
			</span></pre>
</div>

</div>