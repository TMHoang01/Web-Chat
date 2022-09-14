<div class="chat-area">

</div>
<?= $this->Html->css('formEditMsg'); ?>
<script>
    $(document).ready(function (){
        $('.chat-area').css('background-image', 'url(<?= $this->Url->build('/img/draw.webp'); ?>)');
        $('.chat-area').css('background-size', 'cover');
        $('.chat-area').css('background-position', 'center');
        // $('.chat-area').css('background-attachment', 'fixed');




    });
</script>
