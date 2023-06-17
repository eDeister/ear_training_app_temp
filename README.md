# Earworm

Earworm is an ear-training webapp designed to hand control over to the user. The user can practice virtual piano and 
train for pitch correction. Users can also leave feedback about the webapp on comment page.

## Authors


- Sajal Khadgi
- Ethan Deister


Quiz and Leaderboard are extra features and will be added soon. Maybe during the summer...


## Project Requirements
1. Separates all database/business logic using the MVC pattern.

All HTML files stored inside views directory. 
Controller routes to/includes files as expected.
All script files, styling files, etc. stored in respective directories. - Ethan


2. Routes all URLs and leverages a templating language using Fat-Free framework

All routes defined in the Controller class and called in the index page. 
Templating used to display repetitive data (leaderboard.html and header/nav in particular.) - Ethan

3. Has a clearly defined database layer using PDO and prepared statements.
   
DataLayer used in combination with DBPlayer to prepare and execute statements to store and access user data to and from database. - Ethan


5. Data can be viewed and added.
   
Data added via the form in quiz.html and viewed via leaderboard.html - Ethan

7. Has a history of commits from both team members to a Git repository. Commits are clearly commented.
   
 We have over 25 (39 now) commits with descriptive comments. - Ethan

9. Uses OOP, and defines multiple classes, including at least one inheritance relationship.
    
Defines a data helper class (DBPlayer), a class to hold user info (Player) and one class which inherits from player (Instrumentalist).
If one of our users also plays an instrument, they are considered an Instrumentalist. Otherwise they are just a Player. - Ethan

11. Contains full Docblocks for all PHP files and follows PEAR standards.

PHPDocs present where appropriate, follows PEAR standards according to OOP powerpoint. - Ethan

8. Has full validation on the client side through JavaScript and server side through PHP.

Forms all validated through js and there is also validation.php for server side - Sajal

Validation for adding with DBPlayer is handled by the Controller, but it is still present. - Ethan

9.All code is clean, clear, and well-commented. DRY (Don't Repeat Yourself) is practiced.

All the files are well-commented. Redundancy is as little as possible. Best of our capacity. - Sajal

10. Your submission shows adequate effort for a final project in a full-stack web development course.

This was quarter provided a lot of learning opportunity. Just realize add commit push is like second nature at this point.
I tried my best to implement things I learned and also challenged myself to grow more by applying different methods.
I gave my best. - Sajal

I put in all the effort I could given the circumstances. It may be hard to believe but I've really really been wanting to work on this project for 
the longest time (I've had the idea since my first programming courses back in high-school); my issues with procrastination have to do with motivation, not inspiration. - Ethan

BONUS: Incorporates Ajax that access data from a JSON file, PHP script, or API.

Comment webpage Axios library for making AJAX requests to the comments.php script. It fetches the comments on page load and updates the comment section dynamically. When the comment form is submitted, it sends a POST request to add the comment to the database and updates the comment section again.

I tried my best to complete the task as much as I could, even though I had to lift the project.
I wasn't able to figure out few things. I initially planed to have a log in page but I wasn't able to 
get it. 

- Sajal

====================================
 
Note: leaderboard and quiz webpage are extra attempt to try new things.
It's for practicing things I learned this quarter, in order to become better at them.
## Admin Login(this is for database)

Username: sajalgre_sajal
Password: P@ssword1234

- Sajal


====================================

The text file under the Database directory contains the SQL used to create the table used in this repo, the instructions above apply for the first repo that was submitted.

- Ethan
