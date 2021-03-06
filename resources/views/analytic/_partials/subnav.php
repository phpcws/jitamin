<div class="page-header">
    <ul class="nav nav-tabs">
        <li <?= $this->app->setActive('AnalyticController', 'taskDistribution') ?>>
            <?= $this->url->link(t('Task distribution'), 'AnalyticController', 'taskDistribution', ['project_id' => $project['id']]) ?>
        </li>
        <li <?= $this->app->setActive('AnalyticController', 'userDistribution') ?>>
            <?= $this->url->link(t('User repartition'), 'AnalyticController', 'userDistribution', ['project_id' => $project['id']]) ?>
        </li>
        <li <?= $this->app->setActive('AnalyticController', 'cfd') ?>>
            <?= $this->url->link(t('Cumulative flow diagram'), 'AnalyticController', 'cfd', ['project_id' => $project['id']]) ?>
        </li>
        <li <?= $this->app->setActive('AnalyticController', 'burndown') ?>>
            <?= $this->url->link(t('Burndown chart'), 'AnalyticController', 'burndown', ['project_id' => $project['id']]) ?>
        </li>
        <li <?= $this->app->setActive('AnalyticController', 'averageTimeByColumn') ?>>
            <?= $this->url->link(t('Average time into each column'), 'AnalyticController', 'averageTimeByColumn', ['project_id' => $project['id']]) ?>
        </li>
        <li <?= $this->app->setActive('AnalyticController', 'leadAndCycleTime') ?>>
            <?= $this->url->link(t('Lead and cycle time'), 'AnalyticController', 'leadAndCycleTime', ['project_id' => $project['id']]) ?>
        </li>
        <li <?= $this->app->setActive('AnalyticController', 'timeComparison') ?>>
            <?= $this->url->link(t('Estimated vs actual time'), 'AnalyticController', 'timeComparison', ['project_id' => $project['id']]) ?>
        </li>

        <?= $this->hook->render('template:analytic:subside', ['project' => $project]) ?>
    </ul>
</div>