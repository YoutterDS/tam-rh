<?php if(isset($registerStatus)):?>
    <?php if($registerStatus === 1):?>
        <span class="time-table-status status-ok"><i class="fas fa-check"></i> Validado</span>
    <?php else: ?>
        <span class="time-table-status status-pending"><i class="fas fa-exclamation-triangle"></i> Pendiente de validar</span>
    <?php endif;?>
<?php endif;?>

