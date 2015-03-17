<h2>About FRTemplate</h2>

<p>After maintaining two sites built on a quite similar foundation, I began to merge the common functionality into a framework. This is the result.

<p>Structured as a PHP-based templating system, it provides some utility functions for keeping multi-lingual versions of a web site in sync, with an emphasis on keeping the templating system close to the HTML end result, using PHP in two separate ways:

<ul>
  <li>as a back-end system using a class structure accessed by an <a href="http://php.net/manual/en/language.oop5.autoload.php">auto-loading mechanism</a>
  <li>as a light-weight templating system within the HTML templates.
</ul>

<p>I find that the way to PHP madness is usually avoided by clearly separating its applications in this way. When more advanced functionality spreads to be interspersed with HTML layout, soon everything is lost as per code clarity and maintainability.

<ul>
  <li><a href="https://github,com/dandersson/FRTemplate">FRTemplate project page at Github</a>
  <li><a href="https://github.com/dandersson/FRTemplate-demo">FRTemplate-sample at Github</a> — a minimal demonstration of a site structured to use FRTemplate
</ul>

<h3>Generality</h3>
<p>The system is not written with general application in mind, but rather tailor-made for a couple of real-life sites. The code is presented here mostly for the very few who might have any interest in this specific collaboration.

<h3>Performance</h3>
<p>Performance has never been a problem even with a vanilla Apache configuration for the scale at which the target sites are used. I currently run the sites behind a <a href="https://www.varnish-cache.org/">Varnish</a> instance anyway, which makes performance an absolute non-issue.
