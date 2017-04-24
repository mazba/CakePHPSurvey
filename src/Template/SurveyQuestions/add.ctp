<?php
use Cake\Core\Configure;

?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="<?= $this->Url->build(('/Dashboard'), true); ?>"><?= __('Dashboard') ?></a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <?= $this->Html->link(__('Survey Questions'), ['action' => 'index']) ?>
            <i class="fa fa-angle-right"></i>
        </li>
        <li><?= __('New Survey Question') ?></li>

    </ul>
</div>


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus-square-o fa-lg"></i><?= __('Add New Survey Question') ?>
                </div>
                <div class="tools">
                    <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-sm btn-success']); ?>
                </div>

            </div>
            <div class="portlet-body">
                <?= $this->Form->create($surveyQuestion, ['class' => 'form-horizontal', 'role' => 'form']) ?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <?php
                        echo $this->Form->input('title');
                        echo $this->Form->input('description',['type'=>'textarea']);
                        ?>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered" id="option-wrp" data-increment-id="1">
                            <tr>
                                <th><?= __('Sl No.') ?></th>
                                <th class="required-header"><?= __('Options') ?></th>
                                <th><?= __('Remove') ?></th>
                            </tr>
                            <tr class="option">
                                <td class="increment"><?php echo __(1); ?></td>
                                <td><?php echo $this->Form->input("survey_question_options.0.option", ['type' => 'text', 'class' => 'form-control','label' => false,'required' =>'required']); ?></td>
                                <td>
                                    <span class="remove-row btn btn-sm btn-circle btn-danger"><i class="fa fa-times-circle"></i></span>
                                </td>
                            </tr>
                        </table>
                        <button type="button" id="add-more-option" class="btn btn-success pull-right"><i class="fa fa-plus-square"></i></button>
                    </div>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn blue pull-right', 'style' => 'margin-top:20px']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div>
<script>
    jQuery(document).on('click', '#add-more-option', function () {
        var index_training = jQuery('#option-wrp').data('increment-id');
        jQuery('#option-wrp').data('increment-id', index_training + 1);
        var html = jQuery('#option-wrp .option:last').clone().find('.form-control').each(function () {
            this.name = this.name.replace(/\d+/, index_training + 1);
            this.id = this.id.replace(/\d+/, index_training + 1);
            this.value = '';
        }).end();
        $('#option-wrp').append(html);
        var $lastRowIncrement=$('.option:last').find('.increment');
        $lastRowIncrement.html(parseInt($lastRowIncrement.html())+1);
    });
    jQuery(document).on('click', '.remove-row', function () {
        var obj = jQuery(this);
        var count = jQuery('.option').length;
        if (count > 1) {
            obj.closest('.option').remove();
        }
    });
</script>

