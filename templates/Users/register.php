<!--<form>-->
<!--    <input type="text" placeholder="Email or Phone Number" required />-->
<!--    <input type="name" placeholder="Name" required>-->
<!--    <input type="password" placeholder="Password" required>-->
<!--    <input type="repassword" placeholder="Re Password" required>-->
<!--  <input type="password" placeholder="Password" required>-->
<!--    <button class="login">Log In</button>-->
<!--    <a href="#">Forgot Password ?</a>-->
<!--    <hr>-->
<!--    <button class="create-account">Create New Account</button>-->
<!--</form>-->
<?= $this->Form->create(); ?>
<?= $this->Form->input('email',['placeholder'=>"Email"]); ?>
<?= $this->Form->input('name',['placeholder'=>"Name"]); ?>
<?= $this->Form->input('password',['placeholder'=>"Password"]); ?>
<?= $this->Form->input('re_password',['placeholder'=>"Re password"]); ?>

<?= $this->Form->button('Sign up', ['class'=>"login"]);?>
<hr>

<?= $this->Html->link(__("Login"),['action'=>'login'], ['class'=>'create-account']); ?>

<?= $this->Form->end();; ?>
