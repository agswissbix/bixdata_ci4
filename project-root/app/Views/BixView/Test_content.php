<script type="text/javascript">
    $("#tables").ready(function() {

            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();



        }

    );

</script>

<div id="calendar"></div>