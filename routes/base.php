<?php

/*
 * This file is part of Jitamin.
 *
 * Copyright (C) Jitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

// WebNotification routes
'notification/:user_id/:notification_id' => 'WebNotificationController@redirect',

// Search routes
'search'          => 'SearchController@index',
'search/activity' => 'SearchController@activity',

// Calendar routes
'calendar/:project_id' => 'CalendarController@show',
'c/:project_id'        => 'CalendarController@show',

// Listing routes
'list/:project_id' => 'Task/TaskController@index',
'l/:project_id'    => 'Task/TaskListController@show',

// Gantt routes
'gantt/:project_id'               => 'Task/TaskGanttController@show',
'gantt/:project_id/sort/:sorting' => 'Task/TaskGanttController@show',
'gantt/:project_id/create'        => 'Task/TaskGanttController@create',

// Feed routes
'feed/project/:token' => 'FeedController@project',
'feed/user/:token'    => 'FeedController@user',

// Ical routes
'ical/project/:token' => 'ICalendarController@project',
'ical/user/:token'    => 'ICalendarController@user',

// Doc
'help/:file' => 'DocumentationController@show',
'help'       => 'DocumentationController@show',

];
