<?php


// asunchronous javascript and xml
// xtmlrequest >> making communction with server
// error 404 >> page not found
// error 200 >> ok
// error 400 >> bad request
// error 403 >> forbidden
// error 401 >> unauthorized
// error 500 >> internal server error

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax</title>
</head>

<body>

    <button onclick="myFunction()"> click</button>

    <script>
    function myFunction() {
        let myRequest = new XMLHttpRequest();
        // on ready state change call back function called when ready state change
        myRequest.onreadystatechange = function() {
            // check if ready state is 4 and status is 200
            if (this.readyState == 4 && this.status == 200) {

                let myObj = JSON.parse(this.responseText);
                mtText = "";
                for (i = 0; i < myObj.length; i++) {
                    mtText += "<li>" + myObj[i].answer + "</li>";
                    console.log(myObj[i].quiz.answer);
                }
             
            }

        }
        // open request
        myRequest.open("GET", "quiz.json", true);
        // send request
        myRequest.send();

    }
    </script>
</body>

</html>