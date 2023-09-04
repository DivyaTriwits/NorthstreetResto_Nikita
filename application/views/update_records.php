<h2 class="text-center mt-5 mb-3"><?php echo $title;?></h2>
<div class="card">
    <div class="card-header">
        <a class="btn btn-outline-info float-right" href="<?php echo base_url('index.php/Project/update/edit/');?>"> 
            
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata('errors')) {?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('errors'); ?>
            </div>
        <?php } ?>
 
        <form action="<?php echo base_url('index.php/Welcome/'. $log->id);?>" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="firstname">FirstName</label>
                <input
                    type="text"
                    class="form-control"
                    id="firstname"
                    name="firstname"
                    value="<?php echo $data->firstname;?>">
            </div>
            <div class="form-group">
                <label for="lastname">LastName</label>
                <input
                    type="text"
                    class="form-control"
                    id="lastname"
                    name="lastname"
                    value="<?php echo $data->lastname;?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    value="<?php echo $data->email;?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="text"
                    class="form-control"
                    id="password"
                    name="password"
                    value="<?php echo $data->password;?>">
            </div>
            <tr>
    <td colspan="2" align="center">
    <input type="submit" name="update" value="Update_Records"/></td>
  </tr>
            
          
            <button type="submit" class="btn btn-outline-primary">Save</button>
        </form>
       
    </div>
</div>