<!--<form type="post">-->
<!--    <input type="text" placeholder="Email or Phone Number" required />-->
<!--    <input type="password" placeholder="Password" required>-->
<!--    <button class="login">Log In</button>-->
<!--    <hr>-->
<!--    <button type="submit" class="create-account">Create New Account</button>-->
<!--</form>-->
<!--<hr>-->

<?= $this->Form->create(); ?>
<?= $this->Flash->render() ?>
<?= $this->Form->input('email',['placeholder'=>"Email"]); ?>
<?= $this->Form->input('password',['type'=>'password', 'placeholder'=>"Password"]); ?>
<?= $this->Form->button('logIn', ['class'=>"login", 'type'=>'submit']);?>
<hr>
<!--<button>-->
<?= $this->Html->link(__("Create new account"),['action'=>'register'], ['class'=>'create-account']); ?>
<!--</button>-->
<?= $this->Form->end();; ?>
