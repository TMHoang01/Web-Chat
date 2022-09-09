
<div class="chat-msg owner" data-id=<?= $newMsg->id ?> >
            <div class="chat-msg-profile">
                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" alt="" />
                <div class="chat-msg-date"><?= $newMsg->created ?></div>
            </div>
            <div class="chat-msg-content">
                <?php if($newMsg->message): ?>
                <div class="chat-msg-text"><?= $newMsg->message ?></div>
                <?php endif;?>
                <?php if($newMsg->image_file_name): ?>
                    <div class="chat-msg-text"><?= $this->Html->image($newMsg->image_file_name); ?></div>
                <?php endif;?>
            </div>
            <div class="chat-msg-setting" data-id=<?= $newMsg->id ?>>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg>
            </div>
        </div>
