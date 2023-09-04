<div class="wrapper">
  <div class="form">
    <div class="title">
      Login To Northstreet Restaurant
    </div>
        <style>
          body{
            background-image: url("<?php echo base_url('/images/restaurant.jpg'); ?>");
        }
            @import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Jost', sans-serif;
  outline: none;
  color: #5c4b51;
}

body{
  background: linear-gradient(to right, #f4b661, #f16160);
}

.wrapper{
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.form{
  width: 425px;
  height: auto;
  background: #fff;
  padding: 35px 50px;
  border-radius: 2px;
}

.form .title{
  text-align: center;
  margin-bottom: 20px;
  font-weight: 700;
  font-size: 24px;
}

.form .input_wrap{
  margin-bottom: 20px;
  width: 325px;
  position: relative;
}

.form .input_wrap:last-child{
  margin-bottom: 0;
}

.form .input_wrap label{
  display: block;
  margin-bottom: 5px;
}

.form .input_wrap input{
  padding: 15px;
  width: 100%;
  border: 1px solid transparent;
  font-size: 16px;
  border-radius: 3px;
}

.form .input_wrap .input{
  background: #f5f4f4;
  padding-right: 35px;
}


.form .input_wrap .input:focus{
  border-color: #1dbf73;
}

.form .input_wrap .input_field{
  position: relative;
}

.form .input_wrap .btn{
  text-transform: uppercase;
  letter-spacing: 3px;
  color: #fff;
}

.form .input_wrap .btn.disabled{
  background: #727272;
}

.form .input_wrap .btn.enabled{
  background: #1dbf73;
  cursor: pointer;
}

.form .input_wrap .error_msg{
  font-size: 15px;
  margin-bottom: 5px; 
  color: #f74040;
  display: none;
}

        </style>
    <form method="post" action="<?php echo base_url('index.php/Welcome/');?>" onsubmit="return validation();">
      <div class="input_wrap">
        <label for="input_text">Email or Username</label>
        <div class="input_field">
          <input type="text" class="input" id="input_text">
        </div>
      </div>
      <div class="input_wrap">
        <label for="input_password">Password</label>
        <div class="input_field">
          <input type="password" class="input" id="input_password">
        </div>
      </div>
      <div class="input_wrap">
        <span class="error_msg">Incorrect username or password. Please try again</span>
        <input type="submit" id="login_btn" class="btn disabled" value="Login" disabled="true">
      </div>

      <div>
                <p>Not Registered ?
               <a href="<?php echo base_url().'index.php/Welcome/'?>" class="">Register</a></p>
            </div>
            <script>
                function validation(){
  var input_text = document.querySelector("#input_text");
  var input_password = document.querySelector("#input_password");
  var error_msg = document.querySelector(".error_msg");

  if(input_text.value.length <= 3 || input_password.value.length <= 3 ){
    error_msg.style.display = "inline-block";
    input_text.style.border = "1px solid #f74040";
    input_password.style.border = "1px solid #f74040";
    return false;
  }
  else{
    alert("form submitted successfully")
    return true;
  }
  
}

var input_fields = document.querySelectorAll(".input");
var login_btn = document.querySelector("#login_btn");

input_fields.forEach(function(input_item){
  input_item.addEventListener("input", function(){
    if(input_item.value.length > 3){
      login_btn.disabled = false;
      login_btn.className = "btn enabled"
    }
  })
})
            </script>
    </form>
  </div>
</div>