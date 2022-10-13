let mix = require('laravel-mix');


mix.scripts([
    'resources/plugins/global/plugins.bundle.js',
    'resources/js/scripts.bundle.js',
    'resources/js/index.js',
    'resources/js/xy.js',
    'resources/js/percent.js',
    'resources/js/radar.js',
    'resources/js/Animated.js',
    'resources/js/map.js',
    'resources/js/worldLow.js',
    'resources/js/continentsLow.js',
    'resources/js/usaLow.js',
    'resources/js/worldTimeZonesLow.js',
    'resources/js/worldTimeZoneAreasLow.js',
    'resources/plugins/custom/datatables/datatables.min.js',
    'resources/js/widgets.bundle.js',
    'resources/js/custom/widgets.js',
    'resources/js/custom/apps/chat/chat.js',
    'resources/js/custom/utilities/modals/create-app.js',
    'resources/js/custom/utilities/modals/upgrade-plan.js',
    'resources/js/custom/utilities/modals/users-search.js',
    'resources/js/moment.min.js',

],'public/js/app.js');

mix.scripts([
    'resources/plugins/custom/fullcalendar/fullcalendar.bundle.js',
    'resources/js/custom/apps/calendar/calendar.js',
],'public/js/fullcal.min.js');

mix.scripts([
    'resources/js/custom/apps/dropzone/dropzone.js'
],'public/js/dropzone.js');


mix.styles([
    'resources/css/style.bundle.css',
    'resources/plugins/global/plugins.bundle.css',
    'resources/plugins/custom/fullcalendar/fullcalendar.bundle.css',
    'resources/plugins/custom/datatables/datatables.min.css',
],'public/css/app.css');


