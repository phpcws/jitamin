<div class="page-header">
    <ul class="nav nav-tabs">
        <li <?= $this->app->setActive('Dashboard/ProjectController', 'index') ?>>
            <?= $this->url->link(t('My projects'), 'Dashboard/ProjectController', 'index') ?>
        </li>
        <li <?= $this->app->setActive('Dashboard/ProjectController', 'starred') ?>>
            <?= $this->url->link(t('My stars'), 'Dashboard/ProjectController', 'starred') ?>
        </li>
        <li <?= $this->app->setActive('Dashboard/DashboardController', 'tasks') ?>>
            <?= $this->url->link(t('My tasks'), 'Dashboard/DashboardController', 'tasks') ?>
        </li>
        <li <?= $this->app->setActive('Dashboard/DashboardController', 'subtasks') ?>>
            <?= $this->url->link(t('My subtasks'), 'Dashboard/DashboardController', 'subtasks') ?>
        </li>
        <li <?= $this->app->setActive('Dashboard/DashboardController', 'calendar') ?>>
            <?= $this->url->link(t('My calendar'), 'Dashboard/DashboardController', 'calendar') ?>
        </li>
        <li <?= $this->app->setActive('Dashboard/DashboardController', 'activities') ?>>
            <?= $this->url->link(t('My activities'), 'Dashboard/DashboardController', 'activities') ?>
        </li>
        <li <?= $this->app->setActive('Dashboard/DashboardController', 'notifications') ?>>
            <?= $this->url->link(t('My notifications'), 'Dashboard/DashboardController', 'notifications') ?>
        </li>
        <?= $this->hook->render('template:dashboard:subside', ['user' => $user]) ?>
    </ul>
</div>