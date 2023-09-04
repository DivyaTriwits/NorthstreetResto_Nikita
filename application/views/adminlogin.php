
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Validation Form</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
<body>
    <style>
        body{
            background-image: url("<?php echo base_url('/images/screen.png'); ?>");
        }
        h1{
            font-size:25px;
            margin:10px 0;
        }
        .form-box{
            border:1px solid #d3d3d3;
            padding:20px;
        }
    </style>
<div class="container">
    <h1>AdminLogin</h1>
    
    <div class="row">
        <div class="col-md-4">
            <form action="<?php echo base_url('index.php/Welcome/login');?>" method="post" class="form-box" id="form">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name"/>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Enter Password"/>
                </div>

                <div class="form-group">
                    <input type="submit" id="submit" name="Login" class="btn btn-md btn-info" value="Login"/>
                    <span id="Required" style="color:#ff0000;"></span>
                </div>
                <span id="error" style="color:#ff0000"></span>
            </form>
        </div>
    </div>
</div>
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
<!-- <script>
     $(document).ready(function(){
        $("#submit").click(function(){
            var name= $("#name").val();
            var pass = $("#pass").val();
            if(name == '' || pass == ''){
                $("#Required").html('All Feild Are Required').css('color','red');
            }else if(name == 'admin' && pass == '123'){
                 $("#form").html('<h4>User Login Successfully</h4><a href="">Back</a>').css('color','green');
             }else{
                 $("#error").html('User Are Not Valid');
             }
        });
    });
</script> -->
  </body>
</html>