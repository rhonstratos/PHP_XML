<div class="card mx-auto text-<?php echo $text;?>" style="width: 20rem;">
    <div class="card-header bg-<?php echo $bg;?>">Compute Options</div>
    <ul class="list-group list-group-flush">
        <?php foreach($cpuList as $cpu)
            echo"<li class=\"list-group-item\">$cpu</li>";
        ?>
    </ul>
</div>