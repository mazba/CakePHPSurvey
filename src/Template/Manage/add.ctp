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
                                <table class="table table-responsive">
                                    <tr>
                                        <th>1</th>
                                        <td><?php echo $this->Form->input('survey_and_questions.survey_question_id',['options'=>$questions,'class'=>'select2me']); ?></td>
                                    </tr>
                                </table>
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
</script>

