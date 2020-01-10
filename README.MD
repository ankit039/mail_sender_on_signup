# Automatic Mail Sender on Every Signup
## Languages Used- 
 * Html
 * Css
 * PHP
 * MySql
## Others-
 * PHP Mailer
 * Composer
## How to use?
 * First of all use the command
   ```
      git clone https://github.com/ankit039/mail_sender_on_signup.git
   ```
 * then go to setting.php and set your username and password from where you want to send you mail to the user
 * then on setting.php configure you message as you like to sent to the user then on same file replace only localhost with your domain name if server goes live
   ```
    <a href='localhost/mailsenderverify.php?otp=$strotp&mail=$useremail'> click here</a>
   ```
## Schema of MySql
 * database name - userlogin
 * table name - loginuser
 * rows of dabtabase be like id | name | email | password | status | hashusername | otp | updatedby