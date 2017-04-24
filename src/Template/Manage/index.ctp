<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-list-alt fa-lg"></i><?= __('Survey List') ?>
                </div>
                <div class="tools">
                    <?= $this->Html->link(__('New Survey') . ' <i class="fa fa-plus"></i>', ['action' => 'add'], ['escape' => false, 'class' => 'btn grey-cascade']); ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id', __('Sl. No.')) ?></th>
                            <th><?= $this->Paginator->sort('title', __('Title')) ?></th>
                            <th><?= $this->Paginator->sort('description', __(ucfirst('description'))) ?></th>
                            <th><?= $this->Paginator->sort('banner', __(ucfirst('banner'))) ?></th>
                            <th><?= $this->Paginator->sort('type', __(ucfirst('type'))) ?></th>
                            <th><?= $this->Paginator->sort('start', __(ucfirst('start'))) ?></th>
                            <th><?= $this->Paginator->sort('end', __(ucfirst('end'))) ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($survey as $key => $survey_en) { ?>
                            <tr>
                                <td><?= $this->Number->format($key + 1) ?></td>
                                <td><?= h($survey_en->title) ?></td>
                                <td><?= h($survey_en->description) ?></td>
                                <td><?= $survey_en->banner?__('Yes'):__('No') ?></td>
                                <td><?= h($survey_en->type) ?></td>
                                <td><?= h($survey_en->start) ?></td>
                                <td><?= h($survey_en->end) ?></td>
                                <td class="actions">
                                    <?php
                                    echo $this->Html->link(__('View'), ['action' => 'view', $survey_en->id], ['class' => 'btn btn-sm btn-info']);
                                    echo $this->Html->link(__('Edit'), ['action' => 'edit', $survey_en->id], ['class' => 'btn btn-sm btn-warning']);
//                                    echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $survey_en->id], ['class' => 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $survey->id)]);

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

