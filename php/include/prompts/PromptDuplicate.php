<?php
    $title = "Duplicate Entry";
    $bg = "danger";
    $message = "The form that you wish to submit already exists.";
    $imgsrc = "../assets/woggy_stopAngry.png";
    $alt = "...";
?>
    <div class="toast bg-<?php echo $bg; ?> text-white" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <img src="<?php echo $imgsrc; ?>" class="rounded-3 me-2" alt="<?php echo $alt; ?>">
        <strong class="me-auto"><?php echo $title; ?></strong>
        <button type="button" class="btn-close me-1" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body text-center">
        <?php echo $message; ?>
      </div>
    </div>