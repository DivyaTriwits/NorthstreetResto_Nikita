 <div class="report-container">
   
 
                <div class="report-header">
                <h1 class="recent-Articles">View Orders</h1>

                    <button class="view">View All</button>
                </div>
 
                <div class="report-body">
                    <div class="report-topic-heading">
                     
                     <h3 class="t-op" style="width:20px!important;">Firstname</h3>
                     <h3 class="t-op" style="width:20px!important;">Lastname</h3>
                     <h3 class="t-op">Selection</h3>
                     

                       
                    </div>
                     
                    <div class="items">
                     <?php  
                    foreach ($result as $row)  
                    {  
                    ?>
                        <div class="item1">
                           <h3 class="t-op-nextlvl"><?php echo $row->fname;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->lname;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->selection;?></h3>
                           
                          
                           
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

    
 
 
    