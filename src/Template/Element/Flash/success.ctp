<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<?php /*
<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>
*/ ?>
<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')"><?= $message ?></div>
