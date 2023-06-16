# Earworm

Earworm is an ear-training webapp designed to hand control over to the user. The user can practice virtual piano and 
train for pitch correction. Users can also leave feedback about the webapp on comment page.

## Authors


- Sajal Khadgi
- Ethan


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

All PHP files contains DocBlock and Follows Pear Standards.(Did my best)
8. Has full validation on the client side through JavaScript and server side through PHP.

Forms all validated through js and there is also validation.php for server side

9.All code is clean, clear, and well-commented. DRY (Don't Repeat Yourself) is practiced.

All the files are commented. Complex Functions are described. Redundancy is as little as possible. Best of my capacity.
10. Your submission shows adequate effort for a final project in a full-stack web development course.

This was quarter provided a lot of learning opportunity. Just realize add commit push is like second nature at this point.
I tried my best to implement things I learned and also challenged myself to grow more by applying different methods.
I gave my best. 

BONUS: Incorporates Ajax that access data from a JSON file, PHP script, or API.

Comment webpage Axios library for making AJAX requests to the comments.php script. It fetches the comments on page load and updates the comment section dynamically. When the comment form is submitted, it sends a POST request to add the comment to the database and updates the comment section again.

I tried my best to complete the task as much as I could, even though I had to lift the project.
I wasn't able to figure out few things. I initially planed to have a log in page but I wasn't able to 
get it. 

Note: leaderboard and quiz webpage are extra attempt to try new things.
It's for practicing things I learned this quarter, in order to become better at them.
## Admin Login(this is for database)

Username: sajalgre_sajal
Password: P@ssword1234
