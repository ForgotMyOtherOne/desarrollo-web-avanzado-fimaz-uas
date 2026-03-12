The objective of this test was to use catch and exceptions, heritance, and everything we had learn before.
First I created the Usuario class in the file Usuario.php. 
In this class i added a filter using the FILTER_VALIDATE_EMAIL function, already part of PHP, to check if the email is in a valid format.
Then I created the Alumno and Admin classes in their own files, both extending the Usuario class. 
Both have a getRol() method that returns their role as a string.
Finally, on the index.php file I instanced both Alumno and Admin, and made an example of the try/catch block to show the error.

To see the output I used the terminal to cd into the folder where these project its and then used: 
    php -S localhost:8000
After that i used http://localhost:8000/index.php on my browser to check the output.
Everything shown in the page its in a table format.