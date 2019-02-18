Q1 
In php way, 
•	I can simply get a random color in the color array by using array_rand function.
And I was able to get the current time by using  date("M, d, Y h:i:s A"), 
•	I endered a html file with the random backgournd color. 
•	 echo the required message with the current time.

In Nodejs way,
•	I used the express module and java script random function to get the random background color in the color array and the current time by using Date() function.
•	Set the content-type header as text/html 
•	I rendered a html file with the random background color and the required messages with the current time. 

Q2
In php way, 
•	I send two different data files (XML, JSON) to a php file.
•	if the query string contains “XML”, I echo the xml packet with the required form and messages
•	if the query string contains “JSON” I echo the json packet with the required form and messages.
•	If there not nothing in the query sring, echo "<h1>Specify response paramter</h1> 
In Nodejs way,
•	Similar as php way, I send two different data files (XML, JSON) to a nodejs file.
•	I used express module and app.get function and parsing query string and send different packet depending on the type of data.

Q3
In php way,
•	I used $_SERVER[“environment variable”]  to get the environment variable from request.
•	And print a narray with the environment variables
In Node way,
•	I sued express module and app.get function and simply get the request headers by using req.headers and render a html file with the environment variables
Q4
In php way
•	I made form with name input text box tag and color with select type input tag and two http methods with select type input tag.
•	To send two different type of http methods I implemented javascript function to change request method in the html form, and I call it by onclick.
•	The form send the data to a php file and I used $_POST or $_GET to get name and color based on the https method.
•	I echo the required message with the name and time and render  a html file with the random backgournd color.
In NodeJS way,
•	Similar with php way, I used the same html form.
•	I used express module.
•	I used app.get or app.post based on the different http method from the html form.
•	When using app.get, I parsed the query sting to get the data(name and color).
•	When using app.post, I parsed the payload go get the data.
•	And I render a html file with the required message containing the data.

Q5
•	On sessionpage1, first, I render a html file and start session.
•	I set cookie with the user name with JavaScript to call a function used to set cookie with the given user name when users submit their name.
$UN = $_POST["name"];
$_SESSION["username"] = $UN;
setcookie("username", $UN, $expire, "/");
•	And I linked the seesionpage1 to sessionpage2 and on sessionpage2, I echo the user’s name with the required message, and I made a form to movie to another file to delete the session and cookie.
session_destroy();
$_SESSION = array();
setcookie(session_name(),"",time()-3600, "/");

Q7

Since I implemented my app enabling to save users’ information in a table by using html and JavaScript, People visually see the users information on their screen.
I used Json-sever to save data to setup a REST endpoint with CRUD operations.
I created a new JSON file with name db.json. This file contains the data which should be exposed by the REST API. For objects contained in the JSON structure CRUD endpoints are created automatically.


CRUD
Create: I used POST method to add a user with their information
        const payload = {"user_name": name, "user_login": login, "admin": admin};
            var ourRequest2 = new XMLHttpRequest();
            var myData = JSON.stringify(payload);
            ourRequest2.open('POST', 'http://localhost:3000/users/');
            ourRequest2.setRequestHeader("Content-type", "application/json");   
            ourRequest2.onreadystatechange = function () {
                if (ourRequest2.readyState === 4 && ourRequest2.status === 200) {
                    console.log("sucess!");
                }
            };

Read: I used GET method to read a user with their information
            
            var row =table.rows[rIndex];
            var index = row.getAttribute("data-index-number")
            var ourRequest2 = new XMLHttpRequest();
            ourRequest2.open('GET', 'http://localhost:4000/users/'+index);
            ourRequest2.setRequestHeader("Content-type", "application/json")
            ourRequest2.onreadystatechange = function () {
                if (ourRequest2.readyState === 4 && ourRequest2.status === 200) {
                    var data = JSON.parse(ourRequest2.responseText);
                        var M = data.user_name;
                        var T = data.user_login;
                        var D = data.admin;
                        console.log(M);
                        console.log(T);
                        var G = "Name: "+ M+ " Login: "+ T+ " admin: " + D;
                        var result  = document.getElementById("result");
                        result.innerHTML = G;

Update: I used PUT method to edit a user with their information
            const payload = {"user_name": name, "user_login": login, "admin": admin};
            var ourRequest2 = new XMLHttpRequest();
            var myData = JSON.stringify(payload);
            ourRequest2.open('PUT', 'http://localhost:4000/users/'+index);
            ourRequest2.setRequestHeader("Content-type", "application/json");   
            ourRequest2.onreadystatechange = function () {
                if (ourRequest2.readyState === 4 && ourRequest2.status === 200) {
                    var data = JSON.parse(ourRequest2.responseText);
                    console.log("sucess!");
                }
            };

Delete: I used DELTE method to delete a user with their information
            var row =table.rows[rIndex];
            var index = row.getAttribute("data-index-number")
            var ourRequest2 = new XMLHttpRequest();
            ourRequest2.open('DELETE', 'http://localhost:4000/users/'+index);
            ourRequest2.send();





I had really hard time doing this homework because I’m really new about php and nodejs. 
 So I had to learn everything from lecture, website, youtube. And After this homework, I became much familiar with https process. And this homework really helped me to understand server-side and client-side. 

I feel like php is a good choice for my analytics project because for me I could deal with http request and response more easily than nodejs.

