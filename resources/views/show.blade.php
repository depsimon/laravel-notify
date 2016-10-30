@if ($laravelNotifyConfig['enabled'] && $laravelShouldNotify)
    <script>
        $.notify({
            // options
            icon: '{{ array_get($laravelNotify, 'icon', $laravelNotifyConfig['icon']) }}',
            title: {{ array_has($laravelNotify, 'title') ? "'" . array_get($laravelNotify, 'title') . "'" : 'null' }},
            message: '{{ array_get($laravelNotify, 'message') }}',
            url: {{ array_has($laravelNotify, 'url') ? "'" . array_get($laravelNotify, 'url') . "'" : 'null' }},
            target: {{ array_has($laravelNotify, 'target') ? "'" . array_get($laravelNotify, 'target') . "'" : 'null' }},
        },{
            // settings
            element: '{{ array_get($laravelNotifyConfig, 'title', 'body') }}',
            position: null,
            type: '{{ array_get($laravelNotify, 'type', $laravelNotifyConfig['type']) }}',
            allow_dismiss: {{ array_get($laravelNotify, 'allow_dismiss', $laravelNotifyConfig['allow_dismiss']) ? 'true' : 'false' }},
            newest_on_top: {{ array_get($laravelNotify, 'newest_on_top', $laravelNotifyConfig['newest_on_top']) ? 'true' : 'false' }},
            showProgressbar: {{ array_get($laravelNotify, 'showProgressbar', $laravelNotifyConfig['showProgressbar']) ? 'true' : 'false' }},
            placement: {!! json_encode(array_get($laravelNotify, 'placement', $laravelNotifyConfig['placement'])) !!},
            offset: {{ array_get($laravelNotify, 'offset', $laravelNotifyConfig['offset']) }},
            spacing: {{ array_get($laravelNotify, 'spacing', $laravelNotifyConfig['spacing']) }},
            z_index: {{ array_get($laravelNotify, 'z_index', $laravelNotifyConfig['z_index']) }},
            delay: {{ array_get($laravelNotify, 'delay', $laravelNotifyConfig['delay']) }},
            timer: {{ array_get($laravelNotify, 'timer', $laravelNotifyConfig['timer']) }},
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated fadeInDown',
                exit: 'animated fadeOutUp'
            },
            onShow: null,
            onShown: null,
            onClose: null,
            onClosed: null,
            icon_type: 'class',
            template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                '<span data-notify="icon"></span> ' +
                '<span data-notify="title">{1}</span> ' +
                '<span data-notify="message">{2}</span>' +
                '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                '</div>' +
                '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
    </script>
@endif