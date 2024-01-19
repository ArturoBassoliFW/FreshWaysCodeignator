<html>

<head>
    <title>My Form</title>
</head>

<body>

    <h1>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
    </h1>

    <?= form_open('form') ?>

    <h5>Username</h5>

    <?= form_input('username', set_value('username')) ?>
    <div class="error"><?= \Config\Services::validation()->getError('username') ?></div>

    <h5>Password</h5>
    <?= form_password('password', set_value('password')) ?>
    <div class="error"><?= \Config\Services::validation()->getError('password') ?></div>

    <h5>Password Confirm</h5>
    <?= form_password('passconf', set_value('passconf')) ?>
    <div class="error"><?= \Config\Services::validation()->getError('passconf') ?></div>

    <h5>Email Address</h5>
    <?= form_input('email', set_value('email')) ?>
    <div class="error"><?= \Config\Services::validation()->getError('email') ?></div>

    <div><?= form_submit('submit', 'Submit') ?></div>

    <?= form_close() ?>


</body>

</html>