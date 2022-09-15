<?php
$chk = '<input type="checkbox" onclick="check(this);" />';
?>

<div style="display:flex;">

<?php
for ($i = 0; $i < 10; $i++): ?>

  <div>
    <?php echo $chk ?>
  </div>

<?php endfor; ?>

</div>
