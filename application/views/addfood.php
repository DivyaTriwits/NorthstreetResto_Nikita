 <div class="report-container">
   
   
                <div class="report-header">
                <h1 class="recent-Articles">Food Menu</h1>

                    
                </div>

 
                
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
 <style>
      .upload {
  border: 2px dashed black;
  border-radius: 15px;
  margin: 15px;
  padding: 10px;
  width: 80%;
  display: flex;
  justify-content: center;
  box-shadow: 0px 6px 15px black;
}
input {
margin-top: 10px;
margin-bottom: 10px; 
  box-shadow: 0px 6px 15px black;
  border: 1px solid grey;
  padding: 8px;
}
    </style>

<body>

<div class="container">
  <?php echo $this->session->flashdata('success_msg'); ?>
<?php echo $this->session->flashdata('error_msg'); ?>
  <form action="<?php echo base_url('index.php/Welcome/addfoods');?>" method="post" enctype="multipart/form-data" >
    

  <h2>Addfood</h2>
 

    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <label for="item">Item:</label>
      <input type="item" class="form-control" name="item" id="item" placeholder="Enter Item No">
    </div>

    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price">
    </div>

    <div class="form-group">
     

      <label for="price">Picture:</label>
      <input type="file" class="form-control" name="picture" id="picture"><br>
  
  <progress id="progressBar" value="0" max="100" style="width:100%;"></progress>
  
    </div>

 <input type="submit" name="submit" class="btn btn-success" value="Submit"/>
  </form>
</div>



</script>

</body>
</html>

 


    
 
 
    