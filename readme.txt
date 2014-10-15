IDE         : PhpStorm 7.1
DataBase    : MySQL
Server      : http://localhost:8000/ (I configured a server via IDE.)
            : XAMPP 1.8.3
            : PHP: 5.5.6
Routes

Home - /

Home is main route also the page where you can find a login form and a slider.
Slider uses a sevice to get news from a RSS which can be changed by updating following line in sevices.yml

parameters:
    .
    .
    news_manager.rss: 'http://news.google.com/?output=rss'
    .
    .


Login - /login

This is not an actual page can be viewed. It will redirect you to home page.
I already created two users and I suggest you to use db.sql to create tables.

FOR ROLE_USER

username : user
password : green

FOR ROLE_ADMIN

username : admin
password : blue

Contact - /contact

There are 5 fields shouldn't be left empty to send email.
Email will be sent to admin's account that can be selected from a listbox.
I configured for Gmail which requires login therefore password and username will be needed.
In sevices.yml following lines should be updated.

parameters:
    .
    .
    email_manager.params:
          username: 'username'
          password: 'password'
    .
    .

Secured Area - /oauth

This is route for all authenticated users.

User Secured Area - /oauth/user/

This page can only be viewed by a user who has ROLE_USER.

Admin Secured Area - /oauth/admin/

This page can only be viewed by a user who has ROLE_ADMIN. In other words this is admin page.