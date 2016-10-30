<?php

return [

    /*
     * Use this setting to enable the flash notifications
     */
    'enabled' => env('NOTIFY_ENABLED', true),

    /*
     * Use this setting to set the default notification type.
     * Possible values: info, success, warning, danger
     */
    'type' => 'info',

    /*
     * Use this setting to set the default notification icon.
     */
    'icon' => 'glyphicon glyphicon-warning-sign',

    /*
     * Use this setting to allow notification dismissal by default.
     */
    'allow_dismiss' => true,

    /*
     * Use this setting to show newest notification on top by default.
     */
    'newest_on_top' => false,

    /*
     * Use this setting to set the default notification placement
     */
    'placement' => [
        'from' => 'top',
        'align' => 'right'
    ],

    /*
     * Use this setting to set the default notification offset
     */
    'offset' => 20,

    /*
     * Use this setting to set the default notification spacing
     */
    'spacing' => 10,

    /*
     * Use this setting to set the default notification delay
     */
    'delay' => 5000,

    /*
     * Use this setting to set the default notification z-index
     */
    'z_index' => 1031,

    /*
     * Use this setting to set the default notification timer
     */
    'timer' => 1000,

    /*
     * Use this setting to set the default notification url_target
     */
    'url_target' => '_blank',

    /*
     * Use this setting to set the default animation for the notification.
     */
    'animate' => [
        'enter' => 'animated fadeInDown',
        'exit' => 'animated fadeOutUp'
    ],

    /*
     * Use this to change the default notification template.
     */
    'template' => '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' .
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' .
        '<span data-notify="icon"></span> ' .
        '<span data-notify="title">{1}</span> ' .
        '<span data-notify="message">{2}</span>' .
        '<div class="progress" data-notify="progressbar">' .
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' .
        '</div>' .
        '<a href="{3}" target="{4}" data-notify="url"></a>' .
    '</div>',

];