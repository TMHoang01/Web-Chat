<?php foreach($users as $user) : ?>

    <div class="msg online">
        <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" alt="" />
        <div class="msg-detail">
            <div class="msg-username"><?=  $this->Html->link($user->name,['controller'=>'chats','action'=> 'to', $user->id])   ?></div>
            <div class="msg-content">
                <span class="msg-message">What time was our meet</span>
                <span class="msg-date">20m</span>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<button class="add"></button>
<div class="overlay"></div>
