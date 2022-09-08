<div class="chat-area">
    <div class="chat-area-header">
        <div class="chat-area-title"><?= "All chat" ?></div>
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
                <div class="chat-msg-date"><?= $chat->user_id_from ?> - <?= $chat->created ?></div>
            </div>
            <div class="chat-msg-content">
                <?php if($chat->message): ?>
                <div class="chat-msg-text"><?= $chat->message ?></div>
                <?php endif;?>
                <?php if($chat->image_file_name): ?>
                    <div class="chat-msg-text"><?= $this->Html->image($chat->image_file_name); ?></div>
                <?php endif;?>
            </div>
        </div>
        <?php else : ?>
        <div class="chat-msg owner" data-id=<?= $chat->id ?> >
            <div class="chat-msg-profile">
                <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" alt="" />
                <div class="chat-msg-date"><?= $chat->user_id_from ?> - <?= $chat->created ?></div>
            </div>
            <div class="chat-msg-content">
                <?php if($chat->message): ?>
                <div class="chat-msg-text"><?= $chat->message ?></div>
                <?php endif;?>
                <?php if($chat->image_file_name): ?>
                    <div class="chat-msg-text"><?= $this->Html->image($chat->image_file_name); ?></div>
                <?php endif;?>
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
        <div class="wrapper-images" >
            <div class="section">
                <h2>
                    Stamps Images
                </h2>
                <div class="images-list">
                    <?= $this->Html->image('stamps/01.png'); ?>
                    <?= $this->Html->image('stamps/02.png'); ?>

                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video">
            <path d="M23 7l-7 5 7 5V7z" />
            <rect x="1" y="5" width="15" height="14" rx="2" ry="2" /></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <path d="M21 15l-5-5L5 21" /></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 8v8M8 12h8" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
            <path d="M21.44 11.05l-9.19 9.19a6 6 0 01-8.49-8.49l9.19-9.19a4 4 0 015.66 5.66l-9.2 9.19a2 2 0 01-2.83-2.83l8.49-8.48" /></svg>

        <?= $this->Form->input('message',['placeholder'=>"Type something here...",'id'=> 'txtSend']); ?>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
            <circle cx="12" cy="12" r="10" />
            <path d="M8 14s1.5 2 4 2 4-2 4-2M9 9h.01M15 9h.01" />
        </svg>
        <svg display="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up">
            <path d="M14 9V5a3 3 0 00-3-3l-4 9v11h11.28a2 2 0 002-1.7l1.38-9a2 2 0 00-2-2.3zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3" />
        </svg>
        <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
        </svg>

    </div>
</div>
<?= $this->Html->css('formEditMsg'); ?>
<script>
    $(document).ready(function (){


        $('#txtSend').keypress(function (e){
            // check empty
            // console.log($('#txtSend').val().length);
            if(e.which == 13) {
                var searchKey = $(this).val();
                // check empty
                if(searchKey.length > 0){
                console.log("send message by enter",<?=$user_from ?>, 0 ,searchKey);
                sendMessage( <?=$user_from ?>, 0 ,searchKey);
                }
            }
        });

        $('.chat-area-footer>svg.feather-send').click(function (){
            var searchKey = $('#txtSend').val();
            if(searchKey.length > 0){
                sendMessage( <?=$user_from ?>, 0, searchKey);
            }
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

        //load stamps
        var checkLoadStamps = false;
        $('.chat-area-footer>svg.feather-plus-circle').click(function (){
            if(checkLoadStamps == false){
                $.ajax({
                    method:'get',
                    data:'',
                    headers:{
                        'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                    },
                    url : "<?php echo $this->Url->build([
                        'controller' => 'Chats' , 'action' => 'loadStamps'
                    ]); ?>",
                    success: function(response) {
                        $(".wrapper-images .images-list").html(response);

                        // send stamps
                        $('.wrapper-images .images-list img').click(function (){
                            console.log("send stamps");
                            var stamp = $(this).attr('src');
                            // remove /webchat/webroot/img/stamps/ from src
                            stamp = stamp.replace('/webchat','');
                            sendImage(<?=$user_from ?>, 0, stamp);
                        });

                    },
                    fail:function (response){
                        console.log('fail');
                    }
                });
                checkLoadStamps = true;
            }
            $(".wrapper-images").toggle();
        });
        // send image
        function sendImage(userFrom, userTo, stamp){
            $.ajax({
                method: 'post',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?php echo $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'sendImage'
                ]); ?>",
                data: {
                    user_id_from: userFrom,
                    user_id_to: userTo,
                    image_file_name: stamp
                },
                success: function (response){
                    console.log('success send tamp');
                    $('.chat-area-main').append(response);
                },
                fail : function(){
                    console.log('fail send tamp');
                }
            });
        };




        $('.chat-msg-setting>svg.feather-plus-circle').click(function (){

        });

        // edit message
        $('.chat-msg-setting>svg.feather-pencil').click(function (){
            // alert('edit');
            // let formedit = '<input type="text" value="'+$(this).parent().parent().find('.chat-msg-text').text()+'">';

            var msgEdit = $(this).parent().parent();
            console.log(msgEdit);
            var msgEditId = msgEdit.data('id');
            console.log("id message edit ", msgEditId);
            var textContent = msgEdit.find('.chat-msg-text');
            var textContentValue = textContent.text();

            let formedit =
            '<div class="post-revision-edit-content edit-post-content js-post-revision-edit-content">'
            +    '<textarea placeholder="Write a post..." autocomplete="off">'+ textContentValue + '</textarea>'
            +    '<a class="file-upload-link js-file-upload-link" href="#">'
            +        '<i class="icon-paper-clip js-file-upload-icon" original-title="attach notes, past exams, or other materials"></i>'
            +    '</a>'
            +    '<div class="edit-post-content-controls">'
            +        '<a class="js-cancel" id="save-edit-msg" href="#2" non-pjax="">'
            +            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">'
            +               '<path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>'
            +            '</svg>'
            +        '</a>'
            +        '<a class="js-cancel" id="cancel-edit-msg" href="#1" >'
            +            '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">'
            +               '<path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>'
            +            '</svg>'
            +        '</a>'
            +        '<div class="clearfix"></div>'
            +    '</div>'
            +    '<input class="js-upload-file-input" type="file" name="file" multiple="">';

            textContent.replaceWith(formedit);

            $('.chat-msg-setting').each(function (){
                $(this).hide();
            });


            // cancel edit message
            $("a#cancel-edit-msg").on("click",function(){
                console.log("cancel edit message", msgEditId, textContentValue);
                textContent.text(textContentValue);
                $('.chat-msg-setting').each(function (){
                    $(this).show();
                });
            });

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


        // delete message
        $('.chat-msg-setting>svg.feather-trash').click(function (){
            let msgDeleteId = $(this).parent().data('id');
            console.log("chosoe " + msgDeleteId);
            //conform delete
            var conf = confirm('Are you sure to delete this message '+msgDeleteId + '?', 'Delete');
            if(conf){
                deleteMessage(msgDeleteId);
            }


        });

        function deleteMessage(id){
            $.ajax({
                method:'get',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?php echo $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'deleteMessage'
                ]); ?>",
                data: {
                    message_id: id
                },
                success: function(response) {
                    console.log(response);
                    // $('#'+msgDelete).remove();
                    if(response){
                        $("div.chat-msg[data-id='"+id+"']").remove();
                    }else{
                    }

                },
                fail:function (response){
                    console.log('fail');
                }
            });
        };



    });
</script>
