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
        <li><?= __('View Survey Question') ?></li>
    </ul>
</div>


<div class="row">
    <div class="col-md-12">
        <!-- BEGIN BORDERED TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-picture-o fa-lg"></i><?= __('Survey Question Details') ?>
                </div>
                <div class="tools">
                    <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-sm btn-success']); ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">
                    <h1><?= __('Question Details') ?></h1>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th><?= __('Title') ?></th>
                            <td><?= h($surveyQuestion->title) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Description') ?></th>
                            <td><?= h($surveyQuestion->description) ?></td>
                        </tr>

                        <tr>
                            <th><?= __('Survey Id') ?></th>
                            <td><?= $this->Number->format($surveyQuestion->survey_id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= h($surveyQuestion->created) ?></tr>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= h($surveyQuestion->modified) ?></tr>
                        </tr>
                    </table>
                    <h1><?= __('Options') ?></h1>
                    <table class="table table-bordered">
                        <tr>
                            <th><?= __('Sl No.') ?></th>
                            <th ><?= __('Options') ?></th>
                        </tr>
                        <?php foreach($surveyQuestion['survey_question_options'] as $key=>$option): ?>
                        <tr class="option">
                            <td><?= $key+1; ?></td>
                            <td><?= $option['title'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- END BORDERED TABLE PORTLET-->
    </div>
</div>

