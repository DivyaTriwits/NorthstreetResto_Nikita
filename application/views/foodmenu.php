 <div class="report-container">
   
 
                <div class="report-header">
                <h1 class="recent-Articles">Food Menu</h1>

                    <button class="view">View All</button>
                </div>
 
                <div class="report-body">
                    <div class="report-topic-heading">
                     
                     <h3 class="t-op" style="width:20px!important;">Item</h3>
                     <h3 class="t-op" style="width:20px!important;">Name</h3>
                     <h3 class="t-op">Price</h3>
                     
                     

                       
                    </div>
                     
                    <div class="items">
                     <?php  
                    foreach ($result as $row)  
                    {  
                    ?>
                        <div class="item1">
                           <h3 class="t-op-nextlvl"><?php echo $row->item;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->name;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->price;?></h3>
                           
                           
                          
                           
                        </div>
                        <?php }  
                 ?>
 
                       
                     </div>
                  </div>
          
 
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 
 
    