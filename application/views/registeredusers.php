 <div class="report-container">
   
   <form action="<?php echo base_url('index.php/Welcome/');?>" method="post">
                <div class="report-header">
                <h1 class="recent-Articles">Registered Users</h1>

                    <button class="view">View All</button>
                </div>
 
                <div class="report-body">
                    <div class="report-topic-heading">
                    
                      
                     
                     <h3 class="t-op">Fristname</h3>
                     <h3 class="t-op">Lastname</h3>
                     <h3 class="t-op">Email</h3>
                     <h3 class="t-op">Password</h3>
                     <h3 class="t-op">Action</h3>

                      
                    </div>
                     
                    <div class="items">
                     <?php  
                    foreach ($result as $row)  
                    {  
                    ?>

                        <div class="item1">
                           
                           <h3 class="t-op-nextlvl"><?php echo $row->firstname;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->lastname;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->email;?></h3>
                           <h3 class="t-op-nextlvl"><?php echo $row->password;?></h3>
                           <h3 >
                           <a href='deletedata?id=".$row->id."'>     </a>
                            </h3>

                            

                            <h3>
                              
                       <a href="<?php echo base_url('index.php/Welcome/edit/'.$row->id) ?>">Update</a>        
                      <a href="<?php echo base_url('index.php/Welcome/deletedata/'.$row->id) ?>">  
                        Delete
                    </a>
                  </h3>


                          </div>
                        <?php }  
                 ?>
 
                       
                     </div>
                  </div>
               </form>


               
 
                    </div>
                </div>
            </div>
        </div>
    </div>

    
 
 
    