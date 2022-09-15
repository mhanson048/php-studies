<script type="text/javascript">
  function check(cb, sample) {
    if (cb.checked) {
      new Audio(sample).play()
    }
  }
</script>

<?php
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors', true);
  include "point.php";
  include "sample-track.php";
?>
