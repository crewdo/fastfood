<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Booking Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="styl" name="description" />
    <meta content="" name="author" />
        <?= $this->Html->css([
            "/admin/vendor/bootstrap4/css/bootstrap.min.css",]) ?>

</head>

<body  style="background: black;">
<?= $this->Html->image('/admin/img/login/bg2.jpg', array('class'=>'login-logo','style'=>'opacity: 0.25; position:absolute; width:100%')); ?>
        <div class="row bs-reset">
            <div class="col-md-6">
        
            </div>
            <div class="col-md-5" style="margin-top: 200px;">
                <div class="login-content">
                    <h1 style="color:white">FF LOGIN</h1>
                    <div id="result"></div>
                    <p style="color:white"> Only Fastfoody Admin can use this appication, if you can't sign in your account, please contact to admin@fastfoody.com. Enjoy your work, from Jed with love. </p>
                    <div class="clear-fix"></div>
                    <p style="color:white">Adminstrator</p>
                      <?= $this->Form->create(null, ['url' => ['action' => 'login'], 'class'=>'']); ?>
                        <div class="row">
                            <div class="col-xs-6" style="color:white">
                                <?= $this->Form->input('username', ['class'=>'form-control form-control-solid placeholder-no-fix form-group', 'placeholder'=>'Type your email', 'required'=>'1']); ?>
                            </div>
                            <div class="col-xs-6" style="color:white">
                                <?= $this->Form->input('password', ['class'=>'form-control form-control-solid placeholder-no-fix form-group', 'placeholder'=>'Type your password', 'required'=>'1']); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Form->submit(__('Sign in with Adminstrator'), ['class'=>'btn btn-danger']) ?>
                            </div>
                        </div>
                        <?= $this->Form->end(); ?>
                </div>
            </div>
        </div>
</body>
</html>