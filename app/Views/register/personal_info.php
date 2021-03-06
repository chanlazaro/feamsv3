<div class="d-flex">
  <hr class="my-auto flex-grow-1">
  <div class="px-4">PERSONAL INFORMATION</div>
  <hr class="my-auto flex-grow-1">
</div>
<br>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="first_name" class="required">First name</label>
      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name" required value="<?=isset($value['first_name']) ? esc($value['first_name']): ''?>">
    </div>
    <div class="col-md-4 mb-3">
      <label for="middle_name">Middle Name</label>
      <div class="input-group">
        <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name" value="<?=isset($value['middle_name']) ? esc($value['middle_name']): ''?>">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="last_name" class="required">Last name</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name" required value="<?=isset($value['last_name']) ? esc($value['last_name']): ''?>">
    </div>
</div>

<div class="form-row">
    <div class="col-md-6 mb-3">
        <label class="required">Birthdate:</label>
        <div class="input-group date" id="birthdate" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" name="birthdate" data-target="#birthdate" required value="<?=isset($value['birthdate']) ? esc($value['birthdate']): ''?>"/>
            <div class="input-group-append" data-target="#birthdate" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <label class="required">Gender:</label>
        <div class="row">
            <div class="form-check form-check-inline control-label gender">
                <input class="form-check-input" type="radio" name="gender" id="male" value="Male" checked>
                <label class="form-check-label" for="gender">
                    Male
                </label>
            </div>
            <div class="form-check form-check-inline gender">
                <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                <label class="form-check-label" for="gender">
                    Female
                </label>
            </div>
        </div>
    </div>
</div>

<!-- address
<div class="form-group">
    <label class="required">Address</label>
    <!-- <textarea name="address" class="form-control" rows="3" placeholder="Enter ..." required></textarea> 
</div> -->

<div class="form-row">
    <!-- E-mail address -->
    <div class="col">
      <label class="required">E-mail address</label>
      <input type="email" class="form-control" placeholder="" name="email" required value="<?=isset($value['email']) ? esc($value['email']): ''?>">
    </div>
    <!-- Contact Number -->
    <div class="col">  
      <label class="required">Contact Number</label>
      <input type="number" class="form-control" placeholder="" name="contact_number" required value="<?=isset($value['contact_number']) ? esc($value['contact_number']): ''?>">
    </div>
</div>

<!-- Account Info -->
<br>
<div class="d-flex">
  <hr class="my-auto flex-grow-1">
  <div class="px-4">ACCOUNT INFORMATION</div>
  <hr class="my-auto flex-grow-1">
</div>
<br>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="username" class="required">Username</label>
      <input type="text" class="form-control <?=isset($errors['username']) ? 'is-invalid': ''?>" id="username" name="username" placeholder="Username" required value="<?=isset($value['username']) ? esc($value['username']): ''?>">
      <?php if(isset($errors['username'])):?>
        <div class="invalid-feedback">
            <?=esc($errors['username'])?>
        </div>
      <?php endif;?>
    </div>
    <div class="form-group col-md-6">
      <label for="password" class="required">Password</label>
      <input type="password" class="form-control <?=isset($errors['password']) ? 'is-invalid': ''?>" id="password" name="password" placeholder="Password" required>
      <?php if(isset($errors['password'])):?>
        <div class="invalid-feedback">
            <?=esc($errors['password'])?>
        </div>
      <?php endif;?>
    </div>
</div>

<div class="form-group">
    <label for="exampleInputFile">Profile Picture</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input <?php if(!empty($errors['image'])) echo 'is-invalid';?>" id="image" name="image" required>
            <label class="custom-file-label" for="exampleInputFile">Choose image</label>
        </div>
    </div>
    <?php if(isset($errors['image'])): ?>
        <small id="emailHelp" class="form-text text-danger"><?= $errors['image']?></small>
    <?php endif; ?>
</div>

<!-- Payment Info -->
<br>
<div class="d-flex">
  <hr class="my-auto flex-grow-1">
  <div class="px-4">PAYMENT INFORMATION</div>
  <hr class="my-auto flex-grow-1">
</div>
<br>

<div class="form-group">
    <label for="exampleInputFile">Membership Fee Proof <a class="btn-link" href="#" role="button" data-toggle="modal" data-target="#helpModal"><i class="far fa-question-circle"></i></a></label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input <?php if(!empty($errors['proof'])) echo 'is-invalid';?>" id="proof" name="proof" required>
            <label class="custom-file-label form-control-file" for="exampleInputFile">Upload an image</label>
        </div>
    </div>
    <?php if(isset($errors['proof'])): ?>
        <small id="emailHelp" class="form-text text-danger"><?= $errors['proof']?></small>
    <?php endif; ?>
</div>
