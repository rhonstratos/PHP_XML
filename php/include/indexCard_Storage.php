<div class="card mx-auto text-<?php echo $text;?>" style="width: 20rem;">
    <div class="card-header bg-<?php echo $bg;?>">Storage Options</div>
    <ul class="list-group list-group-flush">
        <?php foreach($storageList as $storage)
            echo"<li class=\"list-group-item\">$storage</li>";
        ?>
    </ul>
</div>