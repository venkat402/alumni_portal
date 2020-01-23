# Alumni Portal - Laravel

The main objective of this system is to allow the Alumni and the students to communicate with each other. Students get updated on current industry trends, Internship opportunity, sponsored projects and various referrals opening in the corporate world. This system will involve several modules.

•	Registration module: In the registration module Alumni and new students can register to the system by entering their profile details.

•	Login module: The registered alumni and students can login to the system by entering login credentials. If the alumni or the student forgets password they can recover the password in the forgot password panel and change the password in the change password page.

•	Staff module: The staff module is for college staff to monitor student’s activities in the portal.

•	Admin module: The administrator has full authority of the website. Only administrator can add staff details, delete Alumni or students and update the details. Admin can also post events and student will get the published event through the portal.

•	Message module: The students can communicate with Alumni in the message module. To create message, compose message, Inbox has received messages and sent message can be viewed in this module (Realtime).

•	Voluntarily donations module: The Alumni can voluntarily contribute the fund to assist the students who are financially challenged.


ALUMNI PORTAL
=====================================

REQUIREMENTS:-
==============

PHP version : PHP >= 7.2.0 (Install 7.2 only)
Composer (https://getcomposer.org/)




Php.ini Configuration:-
================
memory_limit = 1000M
max_execution_time=100000;
max_input_time=-1
upload_max_filesize=5000M;
post_max_size=2000M;
max_input_vars=10000
(Restart xampp/wamp after saving to php.ini file)

Project setup:-
==========



Project configuration:-
================


Git setup:-
=======
git config --global user.name "Your Name Here"
git config --global user.email your@email.com

1. git clone <url> - To create a copy of the source code in the local machine
2. git checkout <branchname/filename> - To switch branch or revert file.
3. git pull - To update the local repo with the remote repo/to upll changes/to pull new branches.
4. git add <filename(s)> - To add file(s) to change list
5. git commit -m <message> - To commit the created change list to local repo.
6. git push - To push the changes from local repo to remote repo.
git log - prints the commit logs in screen.


Git configuration:-
=============

https://git-scm.com/downloads


.env configuration:-
==============
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_three
DB_USERNAME=root
DB_PASSWORD=



Run application:-
=============
composer install
composer dump-autoload
php artisan key:generate
php artisan migrate
php artisan serve

