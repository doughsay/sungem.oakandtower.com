<h1>Sungem</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2>What is it?</h2>
<p>Sungem is ...</p>

<h2>Getting started</h2>
<p>
	First, let's set up a directory structure to contain a simple app.  Create a
	folder somewhere called <strong>sungemApp</strong> or whatever you'd like to
	call it.
</p>

<p>
	Inside this folder let's create this basic structure for now:
</p>

<div class="well">
	<ul class="nav nav-list">
		<li>
			<i class="icon-folder-open"></i> sungemApp
			<ul class="nav nav-list">
				<li><i class="icon-folder-close"></i> config</li>
				<li><i class="icon-folder-close"></i> controllers</li>
				<li><i class="icon-folder-close"></i> layouts</li>
				<li><i class="icon-folder-close"></i> lib</li>
				<li><i class="icon-folder-close"></i> views</li>
				<li><i class="icon-folder-close"></i> webroot</li>
			</ul>
		</li>
	</ul>
</div>

<p>
	Now open up the sungemApp folder in you terminal and clone the sungem
	repository into it.
</p>

<pre class="prettyprint linenums">
cd sungemApp
git clone git://github.com/oakandtower/sungem.git
</pre>

<p>
	This will have created a new folder here called <strong>sungem</strong>.
</p>

<p>
	Now let's link up the essential libraries and files:
</p>

<pre class="prettyprint linenums">
cd webroot
ln -s ../sungem/webroot/index.php .
cd ../lib
ln -s ../sungem/lib/core.php .
cd ..
</pre>

<p>
	Now we have a link to the main entry point to the webapp (index.php) and a
	link to the core library needed to run.  Point your web server's document
	root to the webroot folder, and then you're good to go.
</p>

<h2>Setting up a simple app</h2>

<h2>Define the essentials</h2>

<h2>Test it in the browser</h2>
