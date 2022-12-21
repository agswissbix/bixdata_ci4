<!-- Fullcalendar js -->
<script src="assets/vendor/fullcalendar/main.min.js"></script>

<!-- Calendar App Demo js -->
<script src="assets/js/pages/demo.calendar.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>

<div id='calendar'></div>