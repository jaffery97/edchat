<!DOCTYPE html>
<html>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .signupbtn {
    float: left;
    background-color: #60c7c1;
  color: white;
  border: none;
  padding: 10px 20px;
  
  font-family: Raleway;
  cursor: pointer;
        width: 30%;
}
    
    form{
        width: 50%;
        height: 50%;
    }
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
    
    input[type=checkbox]{
       float: left;
        text-align: left;
        margin-right: 133px;
    }

/* Set a style for all buttons */
button {
    background-color: #3b5998;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */


/* Add padding to container elements */
.cont {
    text-align:left;
}

/* The Modal (background) */
.modal {
    
    
    padding-left: 35%;
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    
}
.slogin{
        width: 50%;
    }

/* Change styles for cancel button and signup button on extra small screens */
@media all screen and (max-width:700px),(max-width:320px),(max-width:360px),(max-width:384px),(max-width:414px),(max-width:600px),(max-width:768px),(max-width:800px), (max-width:922px), {
   form { 
        width: 90%;
        height: 90%;
    }
    
    .modal {
    padding-left: 15%;
    }
    .slogin {
        width: 90%;
    }
    
}
    
    .or-seperator {
        margin-top: 20px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background-color: black;
        position: relative;
        top: -11px;
        z-index: 1;
    } 
    
    .btn {
        float: left;
        width: 32%;
        margin: 2px;
    }
    .info {
        background-color: #d62d20;
    }
    .warning {
        background-color: #1dcaff;
    }
    .success {
        background-color: #3b5998;
    }
    
    
</style>
    <body>

<div  class="modal">

  <form  action="/action_page.php">
    
      <div class="cont">
      <label>Email</label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label>Password</label>
      <input type="password" placeholder="Enter Password" name="psw" required>

    
<!--      <input type="checkbox" checked="checked">remember me-->
        

      <div class="clearfix">
        <button type="submit" class="signupbtn">
          Login</button>
          <br>
          <a href="#" style="font-size:12px;float:right;text-decoration: underline"> Forgot password</a>
      </div>
    </div>
      
      
  </form>
    <br><br>
    <div class="slogin">
      <div class="or-seperator"><i>or</i></div>
    <p style="text-align:center">Login with your social media account</p>
        <div>
            <button class="btn success">Facebook</button>
            <button class="btn info">Google</button>
            <button class="btn warning">Twitter</button>
        </div>
        
        
    </div>
    
    
</div>
        <br><br>
        <br>
<p style="text-align:center;font-size:12px;">Don't have an account? <span style="cursor:pointer" onclick="openSign()">Sign Up here!</span>  </p>

    </body></html>

