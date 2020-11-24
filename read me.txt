How to run the Project:


1 download zip File from github

2 you need a Web Server like XAMPP 

3 open xampp control panel and run Apache and  MYsql

4 copy the Project and locate it in xampp/htdocs

5 go to your Browser and open the link http://localhost:8888/phpmyadmin

6 click on new to build a Database and name it "myproject"

7 open the Command Prompt cd into your project

8 Install Composer Dependencies typing the command
       composer install

9 Install NPM Dependencies typing the command
        npm install
or if you prefer yarn
         yarn

10 Create a copy of your .env file typing the command
       cp .env.example .env
This will create a copy of the .env.example file in your project and name the copy simply .env

11  Generate an app encryption key typing the command

      php artisan key:generate

12 In the .env file, add database information to allow Laravel to connect to the database

fill in the DB_DATABASE=myproject

13 Migrate the database typing the command
php artisan migrate

14 [Optional]: Seed the database typing the command
php artisan db:seed

15 in your Command Prompt type the final Command
php artisan serve

copy the link and past in your browser



enjoy (surfing testing and modifying) it

see you in the next Project....

Rewan

