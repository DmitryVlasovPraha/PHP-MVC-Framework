
<?php use app\core\form\Form; ?>

<h1>Register</h1>


<?php $form = Form::begin('', "post"); ?>

<?php echo $form->field($model, 'firstname') ?>
<?php echo $form->field($model, 'lastname') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password') ?>
<?php echo $form->field($model, 'confirmPassword') ?>

<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::end(); ?>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="exampleInputEmail1">First name</label>
                <input type="text" name="firstname" class="form-control  <?php echo $model->hasError('firstname') ? ' is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="exampleInputEmail1">Last name</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Confirm password</label>
        <input type="password" name="confirmPassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>