# HHVM + CodeIgniter + Bootstrap Material Design

Proof-of-concept

## Installation

1. Clone this repo to a new subdirectory (ie: ~/www)
2. Run `bower install` in the new subdirectory
3. Install HHVM (https://docs.hhvm.com/hhvm/getting-started/getting-started)
4. Start the HHVM as a stand-alone server (ie: `hhvm -m server -p 8080`)
5. Point your browser to the server: http://localhost:8080/index.php 

## Examples

There are two primary examples:

* http://localhost:8080/index.php (with or without the /dashboard uri segment suffix) ~ Based on the dashboard template provided by Twitter Bootstrap (http://getbootstrap.com/examples/dashboard)
* http://localhost:8080/index.php/blank ~ The standard CodeIgniter welcome page, rewired

## Reference

* Facebook HHVM ~ https://github.com/facebook/hhvm | http://hhvm.com
* CodeIgniter ~ https://github.com/bcit-ci/CodeIgniter | http://www.codeigniter.com/user_guide
* Bootstrap Material Design ~ https://github.com/FezVrasta/bootstrap-material-design | http://fezvrasta.github.io/bootstrap-material-design
* Twitter Bootstrap ~ https://github.com/twbs/bootstrap | http://getbootstrap.com/

## TODO

* Configure Nginx to rewrite URLs so they are clean (no more index.php)
