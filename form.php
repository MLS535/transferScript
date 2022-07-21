<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">log_time_create:</label>
    <input type="date" name="log_time_create" value="<?php if(isset($row)) { echo $row['log_time_create']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">id_employee:</label>
    <input type="text" name="id_employee" value="<?php if(isset($row)) { echo $row['id_employee']; } ?>" class="form-control" / required>
</div>

