<div class="form-actions">
    <p class="required"><span class="req">*</span> campos de preenchimento obrigat&oacute;rio</p>
    <?php
    $options = array(
        'class' => 'btn btn-default cancel',
        'title' => 'clique para cancelar',
        'div' => false,
        'data-toggle' => 'collapse'
    );

    if (!empty($cancel))
        $options['alt'] = $this->Html->url($cancel);

    if (!empty($cancelRedirect))
        $options['alt'] = $this->Html->url($cancel[$cancelRedirect]);
    ?>
    <div class="p-button">
        <?= $this->Form->button('<i class="icon-check icon-white"></i> Salvar', array('class' => 'btn btn-primary submit', 'div' => false, 'escape' => false)); ?>

        <?= $this->Form->button('Cancelar', $options); ?>

    </div>
</div>

<?= $this->Form->end() ?>