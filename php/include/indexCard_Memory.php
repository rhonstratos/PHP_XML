<div class="card mx-auto text-<?php echo $text;?>" style="width: 20rem;">
    <div class="card-header bg-<?php echo $bg;?>">Memory Options</div>
    <ul class="list-group list-group-flush">
        <?php foreach($memoryList as $memory)
            echo"<li class=\"list-group-item\">$memory</li>";
        ?>
    </ul>
</div>