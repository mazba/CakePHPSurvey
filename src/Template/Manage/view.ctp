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
        <li>
            <?= $this->Html->link(__('Survey'), ['action' => 'index']) ?>
            <i class="fa fa-angle-right"></i>
        </li>
        <li><?= __('View Survey') ?></li>
    </ul>
</div>


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-picture-o fa-lg"></i><?= __('Survey Details') ?>
                </div>
                <div class="tools">
                    <?= $this->Html->link(__('Back'), ['action' => 'index'],['class'=>'btn btn-sm btn-success']); ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-bordered table-hover">
                                                                                                        <tr>
                                    <th><?= __('Title') ?></th>
                                    <td><?= h($survey->title) ?></td>
                                </tr>
                                                                                                        <tr>
                                    <th><?= __('Description') ?></th>
                                    <td><?= h($survey->description) ?></td>
                                </tr>
                                                                                                        <tr>
                                    <th><?= __('Banner') ?></th>
                                    <td><?= h($survey->banner) ?></td>
                                </tr>
                                                                                                        <tr>
                                    <th><?= __('Type') ?></th>
                                    <td><?= h($survey->type) ?></td>
                                </tr>
                                                                                                                                                                                                                                                                            
                                                            <tr>
                                    <th><?= __('Modified By') ?></th>
                                    <td><?= $this->Number->format($survey->modified_by) ?></td>
                                </tr>
                                                                                                                                <tr>
                                    <th><?= __('Start') ?></th>
                                    <td><?= h($survey->start) ?></tr>
                                </tr>
                                                        <tr>
                                    <th><?= __('End') ?></th>
                                    <td><?= h($survey->end) ?></tr>
                                </tr>
                                                        <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($survey->created) ?></tr>
                                </tr>
                                                        <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($survey->modified) ?></tr>
                                </tr>
                                                                                            </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div>

