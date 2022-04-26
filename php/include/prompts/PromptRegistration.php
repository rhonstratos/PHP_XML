
<?php
    $title = "Model Number: ";
    if(isset($_GET['modelNumber'])) $title .=$_GET['modelNumber'];
    $message = "Successfully registered the new macbook";
    $bg = "success";
    $imgsrc = "../assets/wdance_60.gif";
    if (isset($_GET['registered']) && $_GET['registered']=='false'){ 
      $bg = "danger";
      $message = "Unsuccessful Registration";
      $imgsrc = "../assets/woggy_stopAngry.png";
    }
    if (isset($_GET['exception'])&&!empty($_GET['exception']))
      $message .= " :".$_get['exception'];
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