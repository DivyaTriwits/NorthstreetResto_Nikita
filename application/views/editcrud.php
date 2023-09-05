<div>
    
        <form action="<?php echo base_url('index.php/Welcome/'. $log->id);?>" method="POST">
    <label> ID </label>
    <input type="text" name="id" id="id" disabled="disable" value = "<?php echo $record->id ;?>" /><br/>
    <label>FirstName</label>
    <input type="text" name="firstname" id ="firstname" value = "<?php echo $record->firstname ;?>" /><br/>
    <label>LastName</label>
    <input type="text" name="lastname" id ="lastname" value = "<?php echo $record->lastname ;?>" /><br/>
    <label>Email</label>
    <input type="text" name="email" id ="email" value="<?php echo $record->email ;?>" /><br/>
    <label>Password</label>
    <input type="text" name="password" id ="password" value = "<?php echo $record->password ;?>" /><br/>
    <label>ConfirmPassword</label>
    <input type="text" name="confirmpassword" id ="confirmpassword" value = "<?php echo $record->confirmpassword ;?>" /><br/>
    <input type="submit" name="edit" value="Edit" />
    
</form>
</div>