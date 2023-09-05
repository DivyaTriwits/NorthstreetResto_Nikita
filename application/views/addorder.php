 <div class="report-container">
   
   
                <div class="report-header">
                <h1 class="recent-Articles">Order</h1>

                    
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

<div class="title">
      <h2>Order Form</h2>
  </div>
<div class="d-flex">
  <form action="<?php echo base_url('index.php/Welcome/addorders');?>" method="post">
    <label>
      <span class="fname">First Name <span class="required">*</span></span>
      <input type="text" id="fname" name="fname">
    </label>
    <label>
      <span class="lname">Last Name <span class="required">*</span></span>
      <input type="text" id="lname" name="lname">
    </label>
    <label>
      <span>Food Items <span class="required">*</span></span>
      <select name="selection">
        <option value="select">Select Food...</option>
        <option value="Vegetable Salad With Wheat Bread On The Side">Vegetable Salad With Wheat Bread On The Side.</option>
        <option value="Banana Bread Overnight Oats">Banana Bread Overnight Oats.</option>
        <option value="Mix Vegiee Salad">Mix Vegiee Salad.</option>
        <option value="Protein Meal Kit">Protein Meal Kit .</option>
        <option value="Rainbow fruit & veggie platter with hummus">Rainbow fruit & veggie platter with hummus.</option>
        <option value="Porcelain Salad with Ice cream">Porcelain Salad with Ice cream.</option>
        <option value="Meal">Meal.</option>
        <option value="Pizza">Pizza.</option>
        <option value="FrenchFries">FrenchFries.</option>
        <option value="Cake">Cake.</option>
        <option value="Juice">Juice.</option>
        <option value="Burger">Burger.</option>

        
      </select>
    </label>
    
    <label>
       <button type="submit" class="btn btn-outline-primary">Place Order</button>
    </label>
  </form>
  
 </div>
</div>

 

   
</script>

</body>
</html>

 


    
 
 
    