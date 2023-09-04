<div class="container">
    <h1 class="title"></h1>
    <style>
       body{
            background-image: url("<?php echo base_url('/images/man.jpg'); ?>");
        }
        body {
  margin: 0;
  padding: 0;
  background-color: #0f0f1a;
  color: #fff;
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.title {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

.card {
  width: 300px;
  background-color: #1e213a;
  padding: 20px;
  border-radius: 10px;
  border-top: 4px solid #19d4ca;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

input {
  padding: 10px;
  border: none;
  background-color: transparent;
  border-bottom: 1px solid #ccc;
  color: #fff;
  transition: box-shadow 0.3s;
}

input:focus {
  box-shadow: 0 0 10px #19d4ca;
}

.buttons {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  gap: 10px;
}

.login-button,
.register-link {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s, box-shadow 0.3s, color 0.3s;
  text-decoration: none;
}

.login-button {
  background-color: transparent;
  color: #19d4ca;
}

.login-button:hover {
  background-color: #19d4ca;
  color: #fff;
  box-shadow: none;
}

.login-button:active {
  box-shadow: 0 0 10px #19d4ca;
}

.register-link {
  color: #ccc;
  background-color: transparent;
}

.register-link:hover {
  color: #fff;
}

.register-link:active {
  box-shadow: 0 0 10px #ccc;
}

@media (max-width: 480px) {
  .card {
    width: 100%;
    max-width: 300px;
  }
}

    </style>
    <div class="container">
        <h2>Registartion Form</h2>
      
        <form action="<?php echo base_url('index.php/Register_controller/');?>"  method="post" >
          <div class="form-group">
            <label for="firstname">Firstname:</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter FirstName">
          </div>
          <div class="form-group">
            <label for="lastname">Lastname:</label>
            <input type="text" class="form-control" name="lastname" id="lastname"  placeholder="Enter Lastname">
          </div>
      
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email id">
          </div>
      
          <div class="form-group">
            <label for="passsword">Password:</label>
            <input type="passsword" class="form-control" name="password" id="password" placeholder="Enter Password">
          </div>
          
           
      
          <div class="form-group">
            <label for="confirmpasssword">ConfirmPassword:</label>
            <input type="passsword" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Enter ConfirmPassword">
          </div>
         
          <input type="submit" name="register" class="btn btn-success" value="Register"/>
          <div>
                      <p> Registered ?
                     <a href="<?php echo base_url().'index.php/Login_controller'?>" class="">Login</a></p>
                  </div>
            
        </form>
    </div>
</div>