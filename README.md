# luhn-app


Luhn Algorithm app:

Give it some HTML & CSS and push it to github.io

Wrong!

Coded in PHP

- Connecting PHP code to HTML (Google)

- YouTube video taught me to add a .htaccess file with "AddType application/x-httpd-php .htm .html

- java2s.com taught me:

<form action="script.php" method="post">
  <input class="input" type="text" name="num"></input><br/>

  and

$num = $_POST['num'];

- Working but how to deploy? Github.io is for static pages, not PHP

- Pushed to Heroku, but it only recognized the PHP and would only show the index.php file (composer missing)

- Split them up - PHP app & HTML app...nope, Heroku doesn’t recognize static pages (cannot detect the buildpack)

- Google search -> Medium blog post taught me to trick Heroku:

add composer.json file with {} in it

  and

add index.php file (already had one) and add a redirect "include_once("index.html");"

- But then the redirect caused it to only showed the html

- Had the idea to create a separate php file for the code because index.php is the main one that gets looked at

- Created script.php for my function, updated by form action and left only the "include" statement in the index.php
