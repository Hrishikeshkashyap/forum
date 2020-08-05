# forum
QnA forum

## Sign-up flow (Kept the names of the webpages such that they are self explanatory)
signup.php > insertsignupinfo.php > userinfo.php > insertuserinfo.php > userinterest.php > insertinterest.php > userphoto.php > insertphoto.php

After all data is signup/login validatelogin.php validates those informations

Important files

### mydatabase.sql => the database schema

### question_fetch1.php => on succesful login it fetches all the relevant questions based on the interest provided during signup

### profile1.php => user dashboard

### upvote.php & downvote.php => storres one's upvotes and downvotes

### search.php => To search topics

### edit_profile.php & delete_profile.php => edit or delete one's account


I am further upgrading the project to Laravel framework as a blog version 
