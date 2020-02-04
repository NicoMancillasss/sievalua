document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        eventSources: [
            {

            }
        ],
        defaultDate: '2019-08-12',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: false,


    });
    calendar.setOption('height', 600);
    calendar.render();
});
