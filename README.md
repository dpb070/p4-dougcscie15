* Title: Project 4, Health Tracking Application
* Class: CSCIE-15
* By: Doug Bradley
* Due Date: 12/15/2016
* Live URL: tbd
* Screencast Demo Link:  tb
* Description: A simple application for logging health-related information. The
application supports multiple users, and each user may see only their data. Major
features/components are:
  * Authenticated access for user and admin functions
  * User definition (admin) - administrators may create application users or
other administrators.
  * User modification (user) - users may change their name, email, and password
information
  * Test definition (admin) - administrators may define and edit the types of
tests available for user result logging.  The test definition may include
validation ranges for result entry as well as default warning limits.
  * Result logging (user) - users may enter results for defined tests
for test results for flagging in the application display
* Additional Details
  * Application Installation
  * clone from github
  * change to application directory
  * copy .env.sample .env
  * composer install
  * as a privileged user
    * chmod -R 777 storage
    * chmod -R 777 bootstrap/cache
  * Demo Database (MySQL)
    * create database P4
    * create user p4user identified by p4user
    * grant all on p4 to p4user
    
