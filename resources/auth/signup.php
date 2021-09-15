<div class="container my-5 bg-white p-5">
    <form class="row g-3 needs-validation <?php echo hasErrorBag() ? 'was-validated' : ''; ?>" action="<?php url('\app\signup') ?>" method="post" novalidate>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" name="first_name" id="validationCustom01" required>
            <?php showFormError('first_name'); ?>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" name="last_name" id="validationCustom02" required>
            <?php showFormError('last_name'); ?>
        </div>
        
        <div class="col-md-12">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="validationCustom03" required>
            <?php showFormError('email'); ?>
        </div>
        <div class="col-md-12">
            <label for="validationCustom04" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="validationCustom04" required>
            <?php showFormError('password'); ?>
        </div>
        <div class="col-md-12">
            <label for="validationCustom05" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="repassword" id="validationCustom05" required>
            <?php showFormError('repassword'); ?>
        </div>
        
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>