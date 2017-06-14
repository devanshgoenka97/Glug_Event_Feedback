# Glug_Event_Feedback
A laravel app made for Glug Events that contain download presentation and feedback section<br>
All the Feedback Given will be sent to your gmail
## Prerequisites
Lararvel 5.4 Installed in your homestead/virtual machine<br>
    For installation refer https://laravel.com/docs/5.4/installation<br>
## Installation
Open .env file in SublimeText or the Editor of your choice and set:<br>
    MAIL_DRIVER=smtp<br>
    MAIL_HOST=smtp.gmail.com<br>
    MAIL_PORT=587<br>
    MAIL_USERNAME='Your Gmail' (without quotes)<br>
    MAIL_PASSWORD='Your Password' (without quotes) (Password must be generated through Gmail APP Password (https://support.google.com/accounts/answer/185833?hl=en))<br>
    MAIL_ENCRYPTION=tls<br>
    
   After this run the app through terminal<br>
   php artisan serve
