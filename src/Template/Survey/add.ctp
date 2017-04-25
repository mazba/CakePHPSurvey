<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-plus-square-o fa-lg"></i><?= __('Add New Survey') ?>
                </div>
                <div class="tools">
                    <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-sm btn-success']); ?>
                </div>
            </div>
            <div class="portlet-body">
                <?= $this->Form->create($survey, ['class' => 'form-horizontal', 'role' => 'form']) ?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <?php
                        echo $this->Form->input('title');
                        echo $this->Form->input('description',['type'=>'textarea']);
                        echo $this->Form->input('type');
                        ?>
                        <div class="row">
                            <div class="col-md-9 col-md-offset-3">
                                <div class='input-group date' id='datetimepicker1'>
                                    <input required placeholder="start date" name="start" type='text' class="form-control"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <div class="col-md-9 col-md-offset-3">
                                <div class='input-group date' id='datetimepicker2'>
                                    <input required placeholder="end date" name="end" type='text' class="form-control"/>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <br/>
                            <br/>
                            <div class="col-md-12">
                                <table id="option-wrp" data-increment-id="1" class="table table-responsive">
                                    <tr>
                                        <th><?php echo __('Sl. No.'); ?></th>
                                        <th><?php echo __('Survey Question'); ?></th>
                                        <th><?php echo __('Remove'); ?></th>
                                    </tr>
                                    <tr class="option">
                                        <th class="increment">1</th>
                                        <td><?php echo $this->Form->input('survey_and_questions.0.survey_question_id',['label'=>false,'options'=>$questions,'class'=>'select2me']); ?></td>
                                        <td><span class="remove-row btn btn-sm btn-circle btn-danger"><i class="fa fa-times-circle"></i></span></td>
                                    </tr>
                                </table>
                                <button type="button" id="add-more-option" class="btn btn-success pull-right"><i class="fa fa-plus-square"></i></button>
                            </div>
                        </div>
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn blue pull-right', 'style' => 'margin-top:20px']) ?>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div>
<?= $this->Html->css("CakephpSurvey.bootstrap-datetimepicker"); ?>
<?= $this->Html->css("CakephpSurvey.bootstrap-datetimepicker-standalone"); ?>
<?= $this->Html->script("CakephpSurvey.moment"); ?>
<?= $this->Html->script("CakephpSurvey.bootstrap-datetimepicker.min"); ?>
<script>
    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker2').datetimepicker();
    jQuery(document).on('click', '#add-more-option', function () {
        var index_training = jQuery('#option-wrp').data('increment-id');
        jQuery('#option-wrp').data('increment-id', index_training + 1);
        var $lastRow = jQuery('#option-wrp .option:last');
        $lastRow.find('select').select2('destroy');
        var html = $lastRow.clone().find('select').each(function () {
            this.name = this.name.replace(/\d+/, index_training + 1);
//            this.id = this.id.replace(/\d+/, index_training + 1);
//            this.value = '';
        }).end();
        $('#option-wrp').append(html);
        $lastRow.find('select').select2();
        jQuery('#option-wrp .option:last').find('select').select2();
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

