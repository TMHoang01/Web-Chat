<div class="chat-area">
    <div class="chat-area-header">
        <div class="chat-area-title"><?= $to->name; ?></div>
        <div class="chat-area-group">
            <img class="chat-area-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png" alt="" />
        </div>
    </div>
    <?php $user_from = $this->Identity->get('id'); ?>
    <div class="chat-area-main">
        <?php foreach ($chats as $chat): ?>
        <?php
            if($chat->user_id_from == $user_from ):
        ?>
                <div class="chat-msg owner" data-id=<?= $chat->id ?> >
                    <div class="chat-msg-profile">
                        <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" alt="" />
                        <?php
                        // check modified
                        if($chat->modified == $chat->created){
                            echo '<div class="chat-msg-date">Sent: '.$chat->created .'</div>';
                        }else{
                            echo '<div class="chat-msg-date">Edit: '.$chat->modified .'</div>';
                        }
                        ?>
                    </div>
                    <div class="chat-msg-content">
                        <?php if($chat->message): ?>
                            <div class="chat-msg-text"><?= $chat->message ?></div>
                        <?php endif;?>
                        <?php if($chat->image_file_name): ?>
                            <div class="chat-msg-text"><?= $this->Html->image($chat->image_file_name); ?></div>
                        <?php endif;?>
                    </div>
                    <div class="chat-msg-setting" data-id=<?= $chat->id ?>>
                        <?php if(($chat->message)): ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        <?php endif;?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>

                    </div>
                </div>
        <?php else : ?>

                <div class="chat-msg" data-id=<?= $chat->id ?>>
                    <div class="chat-msg-profile">
                        <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png" alt="" />
                        <?php
                            // check modified
                            if($chat->modified == $chat->created){
                                echo '<div class="chat-msg-date">Sent: '.$chat->created .'</div>';
                            }else{
                                echo '<div class="chat-msg-date">Edit: '.$chat->modified .'</div>';
                            }
                        ?>
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
        <?php endif; ?>
        <?php endforeach; ?>
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

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <path d="M21 15l-5-5L5 21" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle">
            <circle cx="12" cy="12" r="10" />
            <path d="M12 8v8M8 12h8" />
        </svg>
        <?= $this->Form->input('message',['placeholder'=>"Type something here...",'id'=> 'txtSend']); ?>
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
        var check_conn = false;
        var user_id = <?= $this->request->getAttribute('identity')->id; ?>;

		var conn = new WebSocket('ws://localhost:8090?from='+ user_id +'&to=<?= $to->id ?>');
        var resource_id;
		conn.onopen = function(e) {
            console.log("Connection established!");
            check_conn = true;
        
		};
        conn.onmessage = function(e) {
            console.log(e.data);
            var data = JSON.parse(e.data);
            action = data.action;
  
            switch(action){
                case "sendMessage":
                    loadMessage(data);
                    break;

                case "editMessage":
                    $("div.chat-msg[data-id='"+data.id+"']").find(".chat-msg-text").html(data.message);
                    break;

                case "deleteMessage":
                    $("div.chat-msg[data-id='"+data.id+"']").remove();
                    // console.log("div.chat-msg[data-id='"+data.id+"']");
                    break;

                default:
                    break;
            }

        };
        

        
        conn.onclose = function(event) {
            check_conn = false;
            if (event.wasClean) {
                console.log('Connection closed cleanly');
            } else {
                console.log('Connection died');
            }
            console.log('Code: ' + event.code + ' reason: ' + event.reason);
        };


        $('.chat-area').scrollTop($('.chat-area')[0].scrollHeight);
        $('#txtSend').keypress(function (e){
            // check empty
            if(e.which == 13) {
                var searchKey = $(this).val();
                // check empty
                if(searchKey.length > 0){
                    sendMessage( <?=$user_from ?>, <?= $to->id ?> ,searchKey);
                }
            }
        });

        $('.chat-area-footer>svg.feather-send').click(function (){
            var searchKey = $('#txtSend').val();
            if(searchKey.length > 0){
                sendMessage( <?=$user_from ?>, <?= $to->id ?>, searchKey);
            }
        });
        // load message to chat area
        function loadMessage(response){
            msgId = response.id;
            clientFrom = response.user_id_from;
            clientTo = response.user_id_to;
            message = response.message;
            urlImg = response.image_file_name;
            contentMsg = '';
            if(message != null){
                contentMsg += `<div class="chat-msg-text">`+ message +`</div>`;
            }
            if(urlImg != null){
                urlImg = urlImg.replace(/%5c/gi, '/');

                var pathparts = location.pathname.split('/');
                if (location.host == 'localhost') {
                    var url = location.origin+'/'+pathparts[1].trim('/')+'/'; // http://localhost/myproject/
                }else{
                    var url = location.origin; // http://stackoverflow.com
                }
                
                imgMsg = `<img src="/`+ pathparts[1].trim('/') + urlImg +`" alt="" />`;
                // console.log(imgMsg);
                // contentMsg = `<div class="chat-msg-text"><img src="`+ urlImg +`" alt=""></div>`;
                contentMsg += `<div class="chat-msg-text">`+imgMsg+`</div>`;
            }
            date = new Date(response.created);
            date = date.toLocaleString();
            if(response)
            
            if(clientFrom == user_id){
                var classMsg = 'chat-msg owner';
                var srcImgAvatar = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png';
                var setting = 
                    `<div class="chat-msg-setting" data-id=`+ msgId +`>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-pencil" viewBox="0 0 16 16">
                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="feather feather-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </div>`;
            }else{
                var classMsg = 'chat-msg';
                var srcImgAvatar = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png';
                var setting = '';
            }          
            var newMsg =    
                    `<div class="`+classMsg+`" data-id=`+ msgId +`>
                        <div class="chat-msg-profile">
                            <img class="chat-msg-img" src="`+ srcImgAvatar +`" alt="" />
                            <div class="chat-msg-date">Sent: `+ date +`</div>
                        </div>
                        <div class="chat-msg-content">
                            `+ contentMsg +`
                        </div>
                        `+ setting +`
                    </div>`
            // create elemt newMsg
            var newMsg = $(newMsg);
            $('.chat-area-main').append(newMsg);
            newMsg.find(".chat-msg-setting>svg.feather-pencil").click(evenEditMsg);
            newMsg.find(".chat-msg-setting>svg.feather-trash").click(evenDeleteMsg);
            $('.chat-area').scrollTop($('.chat-area')[0].scrollHeight);
            $('.chat-area-main').scrollTop($('.chat-area-main')[0].scrollHeight);
        }
        // send message to server
        function sendMessage(userFrom, userTo, message){
            var data = {
                    user_id_from: userFrom,
					message: message,
					user_id_to: userTo,
				};

            $.ajax({
                method:'post',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?php echo $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'sendMessage'
                ]); ?>",
                data: data,
                success: function(response) {
                    console.log(response);
                    response = JSON.parse(response);
                    loadMessage(response);
                    // empty message
                    $('#txtSend').val('');
                    if(check_conn){
                        // add action to respone
                        response.action = 'sendMessage';
                        conn.send(JSON.stringify(response));
                    }
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
                        response = response.replace(/%5c/gi, '/');
                        // console.log(response);
                        $(".wrapper-images .images-list").html(response);
                        
                        // send stamps
                        $('.wrapper-images .images-list img').click(function (){
                            console.log("send stamps");
                            var stamp = $(this).attr('src');
                            // remove /webchat/webroot/img/stamps/ from src
                            stamp = stamp.replace('/webchat','');
                            sendStamp(<?=$user_from ?>, <?= $to->id ?>, stamp);
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

        // send stamp
        function sendStamp(userFrom, userTo, stamp){
            var data = {
                    user_id_from: userFrom,
                    image_file_name: stamp,
                    user_id_to: userTo,
                };
                
            $.ajax({
                method: 'post',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?php echo $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'sendStamps'
                ]); ?>",
                data: data,
                success: function (response){
                    // console.log('success send tamps: ' + response);
                    response = JSON.parse(response);

                    // $('.chat-area-main').append(response);
                    loadMessage(response);
                    $(".wrapper-images").toggle();
                    $('.chat-area').scrollTop($('.chat-area')[0].scrollHeight);
                    $('.chat-area-main').scrollTop($('.chat-area-main')[0].scrollHeight);

                    if(check_conn){
                        conn.send(JSON.stringify(response));
                    }
                },
                fail : function(){
                    console.log('fail send tamp');
                }
            });
        };

        // send image
        function sendImage(userFrom, userTo, img){
            var data= {
                    user_id_from: userFrom,
                    user_id_to: userTo,
                    image_file_name: img
                };
            $.ajax({
                method: 'post',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?php echo $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'sendImage'
                ]); ?>",
                data: data,
                success: function (response){
                    console.log('success send image');
                    response = JSON.parse(response);
                    loadMessage(response);
                    $('.chat-area').scrollTop($('.chat-area')[0].scrollHeight);
                    $('.chat-area-main').scrollTop($('.chat-area-main')[0].scrollHeight);

                    if(check_conn){
                        conn.send(JSON.stringify(data));
                    }
                },
                fail : function(){
                    console.log('fail send tamp');
                }
            });
        };


        $('.chat-msg-setting>svg.feather-plus-circle').click(function (){

        });

        // add event function click to edit message
        function evenEditMsg(){
            var msgEdit = $(this).parent().parent();
            // console.log(msgEdit);
            var msgEditId = msgEdit.data('id');
            console.log("id message edit ", msgEditId);
            var areaContent = msgEdit.find('.chat-msg-content');
            var areaText = msgEdit.find('.chat-msg-text');
            var valueText = areaText.text();
            var chidContent = areaContent.find('*');

            let formedit =
            '<div class="post-revision-edit-content edit-post-content js-post-revision-edit-content">'
            +    '<textarea placeholder="Write a post..." autocomplete="off">'+ valueText + '</textarea>'
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

            areaContent.html(formedit);

            // cancel edit message
            $("a#cancel-edit-msg").on("click",function(){
                console.log("cancel edit message", msgEditId, valueText);
                areaContent.html(chidContent);

            });

            // save message
            $('a#save-edit-msg').click(function (){
                // edit editMessage
                var id = msgEditId;
                var msgEdit = $(this).parent().parent();
                newmsg = msgEdit.find('textarea').val();
                // console.log("new message: ", newmsg);
                $.ajax({
                    method: 'post',
                    headers:{
                        'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                    },
                    url : "<?php echo $this->Url->build([
                        'controller' => 'Chats' , 'action' => 'editMessage'
                    ]); ?>",
                    data: {
                        id: id,
                        message: newmsg
                    },
                    success: function (response){
                        response = JSON.parse(response);
                        console.log('success edit message' , response);


                        areaText.text(newmsg);
                        areaContent.html(chidContent);
                        timeEdit = response.modified;
                        // format time
                        var date = new Date(timeEdit);
                        // console.log("time edit: ", date.toLocaleString());
                        areaContent.parent().find('.chat-msg-date').text("Edit: "+date.toLocaleString());

                        
                        response.action = 'editMessage';
                        if(check_conn){
                            conn.send(JSON.stringify(response));
                        }
                    },
                    fail : function(){
                        console.log('fail edit message');
                    }
                });


            });


        
        };
        // edit message
        $('.chat-msg-setting>svg.feather-pencil').click(evenEditMsg);


        // add event function click to delete message
        function evenDeleteMsg(){
            let msgDeleteId = $(this).parent().data('id');
            console.log("chosoe " + msgDeleteId);
            //conform delete
            var conf = confirm('Are you sure to delete this message '+msgDeleteId + '?', 'Delete');
            if(conf){
                // deleteMessage(msgDeleteId);
                // check  chat-msg-text have url img
                var msgDelete = $(this).parent().parent();
                var msgDeleteText = msgDelete.find('.chat-msg-text');
                var msgDeleteTextContent = msgDeleteText.find('img');
                if(msgDeleteTextContent.length > 0){
                    // delete img
                    var img = msgDeleteTextContent.attr('src');
                    console.log("img: ", img);
                    deleteMessage(msgDeleteId, img);

                }else{
                    console.log("no img");
                    deleteMessage(msgDeleteId);
                }



            }


        
        };
        // delete message
        $('.chat-msg-setting>svg.feather-trash').click(evenDeleteMsg); 
        // delete message to sever
        function deleteMessage(id,urlImg){
            $.ajax({
                method:'get',
                headers:{
                    'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                },
                url : "<?php echo $this->Url->build([
                    'controller' => 'Chats' , 'action' => 'deleteMessage'
                ]); ?>",
                data: {
                    message_id: id,
                    url_img: urlImg
                },
                success: function(response) {
                    // console.log(response);
                    // $('#'+msgDelete).remove();
                    if(response){
                        $("div.chat-msg[data-id='"+id+"']").remove();
                        if(check_conn){
                            conn.send(JSON.stringify({
                                action: 'deleteMessage',
                                user_id_from: user_id,
                                user_id_to: <?= $to->id ?>,
                                id: id
                            }));
                        }

                    }else{
                    }

                },
                fail:function (response){
                    console.log('fail');
                }
            });
        };


        // even upload image
        $('.chat-area-footer>svg.feather-image').click(function (){
            console.log('click image'+ check_conn);
            // choose file to upload
            var input = document.createElement('input');
            // only image
            input.type = 'file';
            input.accept = 'image/*';

            input.onchange = (function(e){
                var file = e.target.files[0];
                console.log(file);
                // setting up the reader
                var reader = new FileReader();
                reader.readAsDataURL(file); // this is reading as data url
                // here we tell the reader what to do when it's done reading...
                reader.onload = readerEvent => {
                    var content = readerEvent.target.result; // this is the content!
                    $('#img-test').attr('src', content);
                }

                var formData = new FormData();
                formData.append('image_file', file);
                // add user_id_from, user_id_to
                formData.append('user_id_from', <?=$user_from ?>);
                formData.append('user_id_to', <?= $to->id ?>);

                $.ajax({
                    method: 'post',
                    headers:{
                        'X-CSRF-Token': $('meta[name="csrfToken"]').attr('content')
                    },
                    url : "<?php echo $this->Url->build([
                        'controller' => 'Chats' , 'action' => 'sendImage'
                    ]); ?>",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function (response){
                        // add image to chat area
                        response = JSON.parse(response);
                        console.log(response);
                        loadMessage(response);

                        if(check_conn){
                            conn.send(JSON.stringify(response));
                        }
                    },
                    fail: function (response){
                        console.log('fail');
                    }
                });

            });

            input.click();
            // show image choosed in chat area

        });

    });



</script>
