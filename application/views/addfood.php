 <div class="report-container">
   
   
                <div class="report-header">
                <h1 class="recent-Articles">Food Menu</h1>

                    <button class="view">View All</button>
                </div>

 
                
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <form action="<?php echo base_url('index.php/Welcome/addfoods');?>" method="post" >
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
    

    
    

    <input type="submit" name="submit" class="btn btn-success" value="Submit"/>
  </form>
</div>



</script>

</body>
</html>

 


    
 
 
    