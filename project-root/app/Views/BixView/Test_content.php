<script type="text/javascript">
    $("#test_content").ready(function() {

        $(".nav-tab").each(function() {
            $(this)[0].addEventListener('shown.bs.tab', function(event) {
                alert('test');
            })
        })

    });
</script>
<div id="test_content">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active nav-tab" id="tutti-tab" data-bs-toggle="tab" data-bs-target="#tutti-tab-pane" type="button" role="tab" aria-controls="tutti-tab-pane" aria-selected="true">Results</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link nav-tab" id="report-tab" data-bs-toggle="tab" data-bs-target="#report-tab-pane" type="button" role="tab" aria-controls="report-tab-pane" aria-selected="false">Report</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link nav-tab" id="calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane" href="#calendar" aria-selected="false">Calendar</button>
        </li>
    </ul>
</div>