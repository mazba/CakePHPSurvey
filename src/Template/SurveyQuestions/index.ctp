<?php
$status = \Cake\Core\Configure::read('status_options');
?>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="<?= $this->Url->build(('/Dashboard'), true); ?>"><?= __('Dashboard') ?></a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li><?= $this->Html->link(__('Survey Questions'), ['action' => 'index']) ?></li>
    </ul>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-list-alt fa-lg"></i><?= __('Survey Question List') ?>
                </div>
                <div class="tools">
                    <?= $this->Html->link(__('New Survey Question').' <i class="fa fa-plus"></i>', ['action' => 'add'],['escape'=> false,'class'=>'btn grey-cascade']); ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                                                                                            <th><?= $this->Paginator->sort('id',__('Sl. No.')) ?></th>
                                                                                                                    <th><?= $this->Paginator->sort('survey_id') ?></th>
                                                                                                                <th><?= $this->Paginator->sort('title',__('Title'))?></th>
                                                                                                                    <th><?= $this->Paginator->sort('description',__(ucfirst('description')))?></th>
                                                                                                                                                <th><?= $this->Paginator->sort('created',__(ucfirst('created')))?></th>
                                                                                                                                                <th><?= $this->Paginator->sort('modified',__(ucfirst('modified')))?></th>
                                                                                                                                        <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($surveyQuestions as $key => $surveyQuestion) {  ?>
                                <tr>
                                                                                    <td><?= $this->Number->format($key+1) ?></td>
                                                                                            <td><?= $this->Number->format($surveyQuestion->survey_id) ?></td>
                                                                                            <td><?= h($surveyQuestion->title) ?></td>
                                                                                            <td><?= h($surveyQuestion->description) ?></td>
                                                                                            <td><?= h($surveyQuestion->created) ?></td>
                                                                                            <td><?= h($surveyQuestion->modified) ?></td>
                                                                                <td class="actions">
                                        <?php
                                            echo $this->Html->link(__('View'), ['action' => 'view', $surveyQuestion->id],['class'=>'btn btn-sm btn-info']);

                                            echo $this->Html->link(__('Edit'), ['action' => 'edit', $surveyQuestion->id],['class'=>'btn btn-sm btn-warning']);

                                            echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $surveyQuestion->id],['class'=>'btn btn-sm btn-danger','confirm' => __('Are you sure you want to delete # {0}?', $surveyQuestion->id)]);
                                            
                                        ?>

                                    </td>
                                </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination">
                       <?php
                       echo $this->Paginator->prev('<<');
                       echo $this->Paginator->numbers();
                       echo $this->Paginator->next('>>');
                       ?>
                   </ul>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div>

