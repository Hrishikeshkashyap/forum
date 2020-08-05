# forum
QnA forum

## Sign-up flow (Kept the names of the webpages such that they are self explanatory)
signup.php > insertsignupinfo.php(validator) > userinfo.php > insertuserinfo.php(validator) > userinterest.php > insertinterest.php(validator) > userphoto.php > insertphoto.php(validator)

## Sign-up flow (Kept the names of the webpages such that they are self explanatory)
login.php > validatelogin.php(validator)

validator phps are used as extra layer of scrutiny

Important files :

### mydatabase.sql => The database schema

### question_fetch1.php => On succesful login, this pages fetches all the relevant questions based on the interests provided during signup

### profile1.php => User dashboard

### upvote.php & downvote.php => Stores user's upvotes and downvotes

### search.php => To search topics

### edit_profile.php & delete_profile.php => Edit or Delete one's account


I am further upgrading the project to Laravel framework as a blog version 

