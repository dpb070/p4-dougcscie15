* Title: Project 4, Health Tracking Application
* Class: CSCIE-15
* By: Doug Bradley
* Due Date: 12/15/2016
* Live URL: http://p4.dougcscie15.xyz/
* Screencast Demo Link:  http://www.screencast.com/t/TiFP8V94pN3R
* Description: A simple application for logging health-related information. The
application supports multiple users, and each user may see only their data. Major
features/components are:
  * Role-based access to user and admin functions
  * Admininstrators may:
    * Enter their own results
    * Create, update, and delete test definitions
    * Update user information and delete users (users are created via registration)
  * Users may:
    * Create, update, and delete their own results
    * Update their name, password, and email information
* Getting Started
  * Application Installation
  * clone from github
  * change to application directory
  * copy .env.sample to .env
  * composer install
  * as a privileged user
    * chmod -R 777 storage
    * chmod -R 777 bootstrap/cache
  * Demo Database (MySQL) Creation
    * create database P4
    * create user p4user identified by 'p4user'
    * grant all privileges on p4.* to p4user
  * Demo Database Initialization
    * from the application directory
      * php artisan migrate:reset
      * php artisan migrate
      * php artisan db:seed
