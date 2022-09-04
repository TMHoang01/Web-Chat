
<div class="chat-msg owner" data-id=<?= $chat->id ?>>
    <div class="chat-msg-profile">
        <img class="chat-msg-img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29.png" />
        <div class="chat-msg-date"><?= $chat->created ?></div>
    </div>
    <div class="chat-msg-content">
        <?= $this->Flash->render(); ?>
        <div class="chat-msg-text"><?= $chat->message ?></div>
        <!-- <div class="chat-msg-text">
            <img src="https://media0.giphy.com/media/yYSSBtDgbbRzq/giphy.gif?cid=ecf05e47344fb5d835f832a976d1007c241548cc4eea4e7e&rid=giphy.gif" /></div>
        <div class="chat-msg-text">Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Pretium lectus quam id leo.</div> -->
    </div>
</div>