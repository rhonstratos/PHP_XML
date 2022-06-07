<div class="card cardIndex">
    <img src="../assets/<?php echo $img;?>" alt="..." class="p-3 cards-index">
    <div class="card-body">
        <?php echo "$modelNumber<br>$variantName"; ?>
        <a href="#viewCard" class="text-decoration-none float-end" onclick="viewCard('<?php echo $modelNumber; ?>');$('#viewCardMODAL').modal('show')">
            More Info
            <img src="../assets/moreThan_100.png" width="20">
        </a>
    </div>
</div>