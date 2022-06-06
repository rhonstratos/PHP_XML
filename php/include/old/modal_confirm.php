<?php 
    $title = "Confirm Action";
    $message = "Are you sure that you that want to continue?";
?>
<div class="modal fade" tabindex="-1" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?php echo $title?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><?php echo $message; ?></p>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal">Reset Form</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="confirm" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
