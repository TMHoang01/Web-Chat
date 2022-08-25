<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook Login Page</title>
<!--    <link rel="stylesheet" href="./login_form_2.css" />-->
    <?= $this->Html->css('login'); ?>
</head>
<body>
<div class="content">
    <div class="flex-div">
        <div class="name-content">
            <h1 class="logo">Facebook</h1>
            <p>Connect with friends and the world around you on Facebook.</p>
        </div>

        <?= $this->fetch('content'); ?>
    </div>
</div>
</body>
</html>
