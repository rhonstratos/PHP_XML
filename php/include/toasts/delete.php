<?php  
    #<!-- Position it: -->
    #<!-- - `.toast-container` for spacing between toasts -->
    #<!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
    #<!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
    #<option value="" selected>Select a position...</option>
    #<option value="top-0 start-0">Top left</option>
    #<option value="top-0 start-50 translate-middle-x">Top center</option>
    #<option value="top-0 end-0">Top right</option>
    #<option value="top-50 start-0 translate-middle-y">Middle left</option>
    #<option value="top-50 start-50 translate-middle">Middle center</option>
    #<option value="top-50 end-0 translate-middle-y">Middle right</option>
    #<option value="bottom-0 start-0">Bottom left</option>
    #<option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
    #<option value="bottom-0 end-0">Bottom right</option>
?>

<?php
    $title = "Model Number: ";
    if(isset($_GET['modelNumber'])) $title .=$_GET['modelNumber'];
    $message = "Successfully deleted the macbook";
    $bg = "success";
    $imgsrc = "../assets/wdance_60.gif";
    if (isset($_GET['delete']) && $_GET['delete']=='false'){ 
      $bg = "danger";
      $message = "Unsuccessful Deletion";
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