<?php
include "../functions.php";

if(isset($_POST['setup'])  ){
    write_into_();
    header("location:../index.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Setup localhost </title>
    <!-- <link rel="stylesheet" href="../../css/passwordstyles.css"> -->
    
<style>
        .main-wrapper {
        width: 100vw;
        overflow: hidden;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
        /*background:  url(https://github.com/amaury-diallo/pure-javascript-todolist-app/blob/master/blue-bg.svg) no-repeat center; */
        background: #2c6974;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #6E48AA, #9D50BB);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #6E48AA, #9D50BB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        z-index: 0;
        }

        #container{
            border-style: none;
        }


        /* entire container, keeps perspective */
        .card-container {
            perspective: 500px;
            margin-bottom: 30px;
        }

        /* flip the pane when hovered */
        .card-container.rotate .card{
            transform: rotateY( 180deg );
        }
        /* flip speed goes here */
        .card {
            transition: transform .85s;
            transform-style: preserve-3d;
            position: relative;
        }

        /* hide back of pane during swap */
        .login-form,.signup-form  , .container border p-4 mycontent{
            backface-visibility: hidden;
            position: absolute;
            top: 0;
            
            left: 0;
            background-color: #FFF;
            box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
        }

        /* front pane, placed above back */
        .login-form {
            z-index: 2;
        }

        /* back, initially hidden pane */
        .signup-form {
            transform: rotateY(180deg);
            z-index: 3;
        }

        /*        Style       */
        .card-container{
            width: 300px;
            margin: 0 auto;
            border-radius: 40px;
        }

        .card{
            background: #161313;
            border-radius: 40px;
            color: #444444;
        }

        .card-container, .login-form, .signup-form {
            height: 420px;
            border-radius: 40px;
        }
        .login-form, .signup-form {
            width: 100%;
            height: 420px;
            border-radius: 40px;

        }
        .card .header {
            margin: 10px;
            color: #6E48AA;
            padding: 10px 0 10px 0;
            text-align: center;
            border-bottom: 1px solid #EEEEEE;
            color: #999999;
            text-transform: uppercase;
            font-weight: bold;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -7px rgba(0, 0, 0, 0.2);
        }
        .text_login{
            color: #6E48AA;
            

        }
        .card .content{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0);
            box-shadow: none;
            flex: 1;
        }
        .card .footer {
            border-top: 1px solid #EEEEEE;
            color: #999999;
            padding: 5px 0 5px 0;
            text-align: center;
        }

        .btn {
            border: none;
            border-radius: 10px;
            display: inline-block;
            height: 36px;
            line-height: 36px;
            padding: 0 16px;
            font-family: inherit;
            font-weight: 100;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            outline: none;
            border: none;
            cursor: pointer;
            transition: .4s;
        }

        .btn-rotate {
            color: #212529;
            background-color: #ddd;
        }

        .btn-rotate:hover {
            color: #212529;
            background-color: #ccc;
        }

        .btn-rotate:focus{
            outline: none;
            border: none;
        }

        .btn-submit {
            width: 50%;
            margin: 0 auto;
            border-radius: 20px;
            color: #212529;
            font-weight: bold;
            background-color: #809BE0;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -7px rgba(0, 0, 0, 0.2);

        }



        .btn-submit:hover {
            color: #212529;
            background-color: #4D8CDE;
            
        }

        .btn-submit:focus{
            outline: none;
            border: none;
        }
        .text{
            color: #9D50BB;
        }
        .btn-signup{
            font-weight: bold;
            background-color: #809BE0;
            border-radius: 20px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -7px rgba(0, 0, 0, 0.2);
        }

        form{
            width: 100%;
        }

        .input-field{
            position: relative;
            width: 90%;
            margin: 20px auto;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .input-field input{ 
            width: 100%;
            max-height: 20px;
            padding: 20px;
            margin-bottom: 10px;
            border: none;
            outline: none;
            border-radius: 30px;
            background-color:lightblue;
            color: black;
            transition: .4s;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -7px rgba(0, 0, 0, 0.2);
        }

        ::-webkit-input-placeholder {
        color: black;
        }
        ::-moz-placeholder {
        color:black;
        }
        :-ms-input-placeholder {
        color: black;
        }
        ::-ms-input-placeholder {
        color: black;
        }
        ::placeholder {
        color: black;
        }

        .input-field input:focus{
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }

        .see-password{
            position: absolute;
            right: 10px;
            padding-bottom: 5px;
            cursor: pointer;
        }

        .group input{
            padding-right: 40px;
        }
        input{
            border-radius: 30px;
        }
        .checkbox{
        padding-top: 10px;
        }
</style>

</head>
<body> 
<div class="main-wrapper">
  <div class="card-container">
      <div class="card">
          <div class="login-form">
              <div class="header"> <span class="text_login"> Database configuration : </span>
              </div>
              <div class="content">
                  <form action="" method="post">
                      <div class="input-field" >
                          <label for="localhost"><b> Server name : </b></label>
                          <input type="text" name="host" placeholder="Enter localhost" value="localhost">
                      </div>
                      <div class="input-field">
                          <label for="username_db"><b>Username: </b></label>
                          <input type="text" name="username_db" placeholder="Enter username" value="root">
                      </div>
                      <div class="input-field" >
                          <label for="password"><b>Password: </b></label>
                          <input type="password" name="password_db" placeholder="Enter Password :"value="" >
                      </div>
                      <div class="input-field">
                          <label for="password"><b>Database name: </b></label>
                          <input type="" name="name_db" placeholder="Enter Database Name">
                      </div>
                      <div class="input-field">
                          <button class="btn btn-submit" name="setup" onclick="instruct()" type="submit" style="background-color: green;"><b> S e t u p </b></button>
                      </div>
                  </form>
              </div>
              <div class="footer">
                </div>
          </div> <!-- end login-form panel -->
             </div> <!-- end card -->
  </div> <!-- end card-container -->
</div>
<script>
function signup() {

    let admin_verification ="qwerty123";

    var request_1 = prompt("Enter admin passcode provided by super admin : 'lloyd'");

    if (request_1 != admin_verification) {
        alert("Kindly Contact Admin lloyd for admin signing up");    
    }
    else if (request_1==admin_verification){
         alert("Super admin 'lloyd' is currently working on admin registration forms kindly wait");
    }

}
function instruct(){
       alert("for username and password if not configured leave blank to take parameters root and null password respectively");
       die;
    }
</script>
</body>
</html>