 <div class="report-container">
   
 
                <div class="report-header">
                <h1 class="recent-Articles">Customer Review</h1>

                    <button class="view">View All</button>
                </div>
 
                <div class="report-body">
                    <div class="report-topic-heading">
                     
                     <h3 class="t-op" style="width:20px!important;">Firstname</h3>
                     <h3 class="t-op" style="width:20px!important;">Lastname</h3>
                     <h3 class="t-op">Reviewinp</h3>
                     

                       
                    </div>
                     
                    <div class="items">
                     <?php  
                    foreach ($result as $row)  
                    {  
                    ?>
                        <div class="item1">
                           <h3 class="t-op-nextlvl"><?php echo $row->firstname;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->lastname;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->reviewinp;?></h3>
                           
                          
                           
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

    
 
 
    