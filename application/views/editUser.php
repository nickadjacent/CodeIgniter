<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Edit User</title>
</head>

<body>

    <div class="container-fluid" style="width: 50%">
        <h1 class="text-center">Edit User</h1>
        <div class="container" style="width:80%">
            <?php echo form_open('user/updateUser/' . $user->id) ?>
            <div class="form-group">
                <label>Username:<sup>*</sup></label>
                <input type="text" name="username" class="form-control" value="<?php echo $user->username ?>">
            </div>
            <div class="form-group">
                <label>First Name:<sup>*</sup></label>
                <input type="text" name="first_name" class="form-control" value="<?php echo $user->first_name ?>">
            </div>
            <div class="form-group">
                <label>Last Name:<sup>*</sup></label>
                <input type="text" name="last_name" class="form-control" value="<?php echo $user->last_name ?>">
            </div>
            <div class="form-group">
                <label>Email Address:<sup>*</sup></label>
                <input type="email" name="email_address" class="form-control" value="<?php echo $user->email_address ?>">
            </div>
            <div class="d-flex justify-content-between">
                <div class="form-group text-right d-inline-block" style=" margin-top: 5px; ">
                    <a href="http://localhost/codeigniter3/" class="btn btn-danger">Cancel</a>
                </div>
                <div class="form-group text-right d-inline-block" style=" margin-top: 5px; ">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </div>
                <div class="form-group text-right d-inline-block" style=" margin-top: 5px; ">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>

</body>

</html>