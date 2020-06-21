<?php
/**
 * Created by PhpStorm.
 * User: paulPc
 * Date: 19.06.2020
 * Time: 19:27
 */
?>
<div>
    <?php
    foreach ($single_data as $s_datum){ ?>
            <span><?php echo $s_datum -> Title . '<br/>'; ?></span>
            <span><?php echo $s_datum -> Content. '<br/>'; ?></span>
        <?php
    }
    ?>
</div>
