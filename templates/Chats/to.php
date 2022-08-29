<div class="chat-area">
    <div class="chat-area-header">
        <div class="chat-area-title"><?= $to->name; ?></div>
        <div class="chat-area-group">
            <img class="chat-area-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png" alt="" />
            <!--            <img class="chat-area-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%282%29.png" alt="">-->
            <!--            <img class="chat-area-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%2812%29.png" alt="" />-->
            <!--            <span>+4</span>-->
        </div>
    </div>
    <?php $user_from = $this->Identity->get('id'); ?>
    <div class="chat-area-main">
        <?php foreach ($chats as $chat): ?>
        <?php
            if($chat->user_id_to == $user_from ):
        ?>
        <div class="chat-msg">
            <div class="chat-msg-profile">
                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png" alt="" />
                <div class="chat-msg-date"><?= $chat->created ?></div>
            </div>
            <div class="chat-msg-content">
<!--                <div class="chat-msg-text">Luctus et ultrices posuere cubilia curae.</div>-->
<!--                <div class="chat-msg-text">-->
<!--                    <img src="https://media0.giphy.com/media/yYSSBtDgbbRzq/giphy.gif?cid=ecf05e47344fb5d835f832a976d1007c241548cc4eea4e7e&rid=giphy.gif" />-->
<!--                </div>-->
                <div class="chat-msg-text"><?= $chat->message ?></div>
            </div>
        </div>
        <?php else : ?>
        <div class="chat-msg owner" data-id=<?= $chat->id ?> >
            <div class="chat-msg-profile">
                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" alt="" />
                <div class="chat-msg-date"><?= $chat->created ?></div>
            </div>
            <div class="chat-msg-content">
                <div class="chat-msg-text"><?= $chat->message ?></div>
<!--                <div class="chat-msg-text">Cras mollis nec arcu malesuada tincidunt.</div>-->
            </div>
            <div class="chat-msg-setting" data-id=<?= $chat->id ?>>
<!--                <div class="chat-msg-edit">-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
<!--                </div>-->
<!--                <div class="chat-msg-delete">-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
<!--                </div>-->
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

<!--        <div class="chat-msg">-->
<!--            <div class="chat-msg-profile">-->
<!--                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%282%29.png" alt="">-->
<!--                <div class="chat-msg-date">Message seen 2.45pm</div>-->
<!--            </div>-->
<!--            <div class="chat-msg-content">-->
<!--                <div class="chat-msg-text">Aenean tristique maximus tortor non tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae😊</div>-->
<!--                <div class="chat-msg-text">Ut faucibus pulvinar elementum integer enim neque volutpat.</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="chat-msg owner">-->
<!--            <div class="chat-msg-profile">-->
<!--                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" alt="" />-->
<!--                <div class="chat-msg-date">Message seen 2.50pm</div>-->
<!--            </div>-->
<!--            <div class="chat-msg-content">-->
<!--                <div class="chat-msg-text">posuere eget augue sodales, aliquet posuere eros.</div>-->
<!--                <div class="chat-msg-text">Cras mollis nec arcu malesuada tincidunt.</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="chat-msg">-->
<!--            <div class="chat-msg-profile">-->
<!--                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%2812%29.png" alt="" />-->
<!--                <div class="chat-msg-date">Message seen 3.16pm</div>-->
<!--            </div>-->
<!--            <div class="chat-msg-content">-->
<!--                <div class="chat-msg-text">Egestas tellus rutrum tellus pellentesque</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="chat-msg">-->
<!--            <div class="chat-msg-profile">-->
<!--                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png" alt="" class="account-profile" alt="">-->
<!--                <div class="chat-msg-date">Message seen 3.16pm</div>-->
<!--            </div>-->
<!--            <div class="chat-msg-content">-->
<!--                <div class="chat-msg-text">Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et.</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="chat-msg owner">-->
<!--            <div class="chat-msg-profile">-->
<!--                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" alt="" />-->
<!--                <div class="chat-msg-date">Message seen 2.50pm</div>-->
<!--            </div>-->
<!--            <div class="chat-msg-content">-->
<!--                <div class="chat-msg-text">Tincidunt arcu non sodales😂</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="chat-msg">-->
<!--            <div class="chat-msg-profile">-->
<!--                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%282%29.png" alt="">-->
<!--                <div class="chat-msg-date">Message seen 3.16pm</div>-->
<!--            </div>-->
<!--            <div class="chat-msg-content">-->
<!--                <div class="chat-msg-text">Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et🥰</div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
    <?= $this->Flash->render();?>
    <div class="chat-area-footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video">
            <path d="M23 7l-7 5 7 5V7z" />
            <rect x="1" y="5" width="15" height="14" rx="2" ry="2" /></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <path d="M21 15l-5-5L5 21" /></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 8v8M8 12h8" /></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
            <path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48" /></svg>
<!--        --><?//= $this->Form->create($chat,['type' => 'file']); ?>
        <?= $this->Form->hidden('user_id_from', ['value'=> $user_from]); ?>
        <?= $this->Form->hidden('user_id_to', ['value'=> $to->id]); ?>
<!--        --><?//= $this->Form->hidden('user_id_to', $to->id); ?>
        <?= $this->Form->input('message',['placeholder'=>"Type something here...",'id'=> 'txtSend']); ?>
<!--        <input type="text" placeholder="Type something here..." />-->
        <?= $this->Form->button('Submit',['id'=> 'btnSend']); ?>
<!--        --><?//= $this->Form->end(); ?>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
            <circle cx="12" cy="12" r="10" />
            <path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
            <path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3" />
        </svg>
    </div>
</div>
<?= $this->Html->css('formEditMsg'); ?>
<script>
    $(document).ready(function (){


        $('#txtSend').keypress(function (e){
            if(e.which == 13) {
                var searchKey = $(this).val();

                console.log("send message by enter",<?=$user_from ?>, <?= $to->id ?> ,searchKey);

                sendMessage( <?=$user_from ?>, <?= $to->id ?> ,searchKey);
            }
        });

        $('#btnSend').click(function (){
            var searchKey = $('#txtSend').val();
            sendMessage( <?=$user_from ?>, <?= $to->id ?>, searchKey);
        });

        function sendMessage(userFrom, userTo, message){
            $.ajax({
                method:'post',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?php echo $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'sendMessage'
                ]); ?>",
                data: {
                    user_id_from: userFrom,
                    user_id_to: userTo,
                    message: message
                },
                success: function(response) {
                    $('input#txtSend').val('');
                    $('.chat-area-main').append(response);
                },
                fail:function (response){
                    console.log('fail');
                }
            });
        };

        // edit message
        $('.chat-msg-setting>svg.feather-pencil').click(function (){
            alert('edit');
            // let formedit = '<input type="text" value="'+$(this).parent().parent().find('.chat-msg-text').text()+'">';
            let formedit =
            '<div class="post-revision-edit-content edit-post-content js-post-revision-edit-content">'
            +    '<textarea placeholder="Write a post..." autocomplete="off"></textarea>'
            +    '<a class="file-upload-link js-file-upload-link" href="#">'
            +        '<i class="icon-paper-clip js-file-upload-icon" original-title="attach notes, past exams, or other materials"></i>'
            +    '</a>'
            +    '<div class="edit-post-content-controls">'
            +        '<label>'
            +            '<input class="js-anonymous" type="checkbox" name="anonymous">'
            +            'anonymous'
            +        '</label>'
            +        '<button class="button-success button-mini js-edit">'
            +            'save'
            +        '</button>'
            +        '<a class="js-cancel" href="#" non-pjax="">'
            +            'cancel'
            +        '</a>'
            +        '<div class="clearfix"></div>'
            +    '</div>'
            +    '<input class="js-upload-file-input" type="file" name="file" multiple="">';
            var msgEdit = $(this).parent().parent();
            var msgEditId = msgEdit.data('id');
            console.log("id message edit ", msgEditId);
            var textContent = msgEdit.find('.chat-msg-text');
            // replace textContent by formedit
            textContent.replaceWith(formedit);
            

        });
        // save message
        $('.chat-msg-setting>svg.feather-save').click(function (){
            var msgId = $(this).attr('msg-id');
            var msgText = $(this).parent().parent().find('.chat-msg-text').val();
            var msg = $('#msg-'+msgId);
            var msgText = msg.find('.chat-msg-text');
            var msgEdit = $('#msg-edit-'+msgId);
            var msgEditText = msgEdit.find('.chat-msg-text');
            msgEdit.hide();
            msg.show();
            msgText.text(msgEditText.val());
            msgEditText.val('');
        });



        function editMessage(id, message){
            $.ajax({
                method:'post',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?= $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'editMessage'
                ]); ?>",
                data:{
                    id: id,
                    message: message
                },
                success: function(response){

                },
                fail:function(response){

                }
            });
        };


    });
</script>
