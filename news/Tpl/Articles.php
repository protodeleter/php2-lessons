<div>
    <ul>
        <?php
        foreach ($data as $datum){
            ?>
            <li>
                <a href="single.php?art=<?php echo $datum->id; ?>" >
                    <span><?php echo $datum -> Title . '<br/>'; ?></span>
                    <span><?php echo $datum -> Content. '<br/>'; ?></span>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>
