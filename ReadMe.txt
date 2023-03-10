Purpose
--------
This repository is for the homework assignment requested as part of the process of a job application.

Primary Files
---------------
ReadMe.txt
www/index.html
www/resubmit.php
www/submit_form.php
www/dev2_homework.log
www/video/Function_Walkthrough.mp4

Notes
-------
Text input type was used for email entry because server-side validation was requested.

This entire repository can be cloned to the AMPPS folder, when AMPPS is installed on a development PC.

Monolog is being used to write to log file.

Objectives
-----------
** Completed **
● Create a PHP script that parses an HTML form with the following user data and
constraints.
○ Email (valid email address)
○ Username (6-10 characters; alphanumeric only)
○ Password (at least one lowercase letter, one uppercase letter, and one number)
● The validation should be server-side and handled on form submission (client-side
validation is out of scope for this assignment).
● The form should be valid HTML5 that meets the W3C standard.
● If the user enters bad input, your script should display an error message and repopulate
the form so that the user can change their entered data.
● Note that the Password field should be exempt from repopulation. It should always be
blank on every form render.
● Upon successful validation, write the data to a log file. Bonus points for using composer
and monolog.
● Please submit using github by sharing a repo of the completed project

** Partially-Completed **
○ Gender (either “male,” “female,” "non-binary," or “other”)
■ Use a PHP object as the source for this data (in lieu of a database)
*Explanation
- Using PHP would have invalidated HTML5 W3C standard

** Incomplete **
● Bonus points for using Laravel.
* Explanation
- Setting up Docker Desktop to run in a VMWare Desktop virtual environment proved to be complicated because VMWare v16 does not support nested virtualization.  Due to time constraints, the Laravel portion was not completed.
