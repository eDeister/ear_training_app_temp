# ear_training_app

## Authors

- Ethan
- Sajal Khadgi

# Earworm

Earworm is an ear-training webapp designed to hand control over to the user. The user can practice virtual piano and 
train have pitch correctiong training. Users and also leave feedback about the webapp on comment pace.

Quiz and Leaderboard are extra features and will be added soon. Maybe during the summer...


## Project Requirements
1. Separates all database/business logic using the MVC pattern.

All HTML files are inside views folder
Routes to all the html files under the index.php
index.php calls function in HomeController which is located inside controller directory to get data from model and return views.
JavaScripts under scripts

2. Routes all URLs and leverages a templating language using Fat-Free framework

All routes are in the index.php and leverages a templating language using Fat-Free Framework

3. Has a clearly defined database layer using PDO and prepared statements.
config.php is used for comment section  pdo linked to mysql database, comment.php is inside database directory and learderboard has another table and database.


4. Data can be viewed and added.
comment.php uses pdo and data can be viewed and added.

5. Has a history of commits from both team members to a Git repository. Commits are clearly commented.
 We have over 25 clearly commented, commits.

6. Uses OOP, and defines multiple classes, including at least one inheritance relationship.
I have classes HomeController OOP and multiple classes. MelodyController does extend BaseController
unfortunately I had to finish the project myself so I didn't get chance to fully apply it.
Inside Model directory, I have multiple files with OOP, I haven't fully applied it, however. 

7. Contains full Docblocks for all PHP files and follows PEAR standards.

All PHP files contains DocBlock and Follows Pear Standards.
✔️ 8. Has full validation on the client side through JavaScript and server side through PHP.

User and ProUser sign up, and Creation form has full validation on the client side through JavaScript (scripts/validate.js) and server side through PHP (model/validate.PHP).
✔️ 9. All code is clean, clear, and well-commented. DRY (Don't Repeat Yourself) is practiced.

All functions and files are commented. Any code that was repeated was turned into a function and called upon instead of repeating code.
✔️ 10. Your submission shows adequate effort for a final project in a full-stack web development course.

We learned quite a bit this quarter and we think our project was able to incorporate everything and then some! We definitely did not take the easy route!
BONUS: Incorporates Ajax that access data from a JSON file, PHP script, or API.

Our project does not incorporate Ajax.
If you were unable to implement any requirement, mention it clearly:

- Unable to implement Requirement 4

## UML Class Diagram

![Class Diagram](link_to_class_diagram)

## Admin Login

Username: sajalgre_sajal
Password: P@ssword1234
