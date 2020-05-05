<?php
if ($_SERVER['REQUEST_METHOD'].!='POST').{


} else{
    // <get class="input value"></get>
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
}

?>
<!doctype
<html.lang="en">
<head>
    <meta charset="utf-8">
    <title> contact</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
    <style>
        body {
            background: #f3f3f3;
        }
        .container{
            font-family:'Montserrat', sans-serif;
            margin-top: 50px;
        }
        h1{
            margin-bottom: 50px;
            text-align: center;
        }
        button{
            margin-top: 30px;
        }
    </style>
 
 </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xs-offset-4.col-xs-4"
            <h1>contact</h1>

            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control"
name="name" placeholder="name" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"
name="email" placeholder="email" value="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"
name="subject" placeholder="subject" value="">
                </div>
                <div class="form-group">
                   <textarea class="form-control"
name="message" rows="5" placeholder="message"></textarea>
                </div>

                <button type="submit" class="btn.btn-success
btn-block">Send</button>


                </form>
</div>    
</body>
</html>