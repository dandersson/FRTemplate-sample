FRTemplate-sample
=================
A minimal example of a site implementing the [FRTemplate](https://github.com/dandersson/FRTemplate) framework.

* Place FRTemplate in the `include/` directory (configurable in `autoload.php`).
* Enable `mod_rewrite` (or disable `mod_rewrite`-like links in the corresponding configuration file in the `config/` dir — exercise for the reader: which file needs to be changed?) and set up rules as per:

        RewriteEngine on
        RewriteRule ^([a-z]{2})-([a-z]+)/?$ index.php?page=$2&language=$1 [L,QSA]

    for the directory in question.
* Serve the site through a PHP-enabled web server.
