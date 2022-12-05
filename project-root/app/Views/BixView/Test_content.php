<script type="text/javascript">
    $("#test_content").ready(function() {

        $(".nav-tab").each(function() {
            $(this)[0].addEventListener('shown.bs.tab', function(event) {
                alert('test');
            })
        })

    });
</script>



<div class="container">
    <h1>CSS only scrollable table body</h1>
    <p>by PDG</p>
    <table class="table-scroll small-first-col">
        <thead>
            <tr>
                <th>Head 1</th>
                <th>Head 2</th>
                <th>Head 3</th>
                <th>Head 4</th>
            </tr>
        </thead>
        <tbody class="body-half-screen">
            <tr>
                <td>1</td>
                <td>First row</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>A very long cell content comes here, just to test it all!!!</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>There is an empty cell above!</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td> Last row</td>
            </tr>
        </tbody>
    </table>
    <h3>Notes</h3>
    <p>The table uses flex properties to arrange the cell sizes, however, this tends to make them the same as "fixed width". To fix that, you need to create additional classes that target the <strong>td:nth-child()</strong> and <strong>th:nth-child()</strong> with a specific <strong>flex-basis</strong> property.</p>
    <p>The <strong>height</strong> of the body also must be fixed and cannot be percentages (in the example above I use "vh")</p>
</div>

<style>
    .container {
        padding: 1rem;
        margin: 1rem;
    }

    .table-scroll {
        /*width:100%; */
        display: block;
        empty-cells: show;

        /* Decoration */
        border-spacing: 0;
        border: 1px solid;
    }

    .table-scroll thead {
        background-color: #f1f1f1;
        position: relative;
        display: block;
        width: 100%;
        overflow-y: scroll;
    }

    .table-scroll tbody {
        /* Position */
        display: block;
        position: relative;
        width: 100%;
        overflow-y: scroll;
        /* Decoration */
        border-top: 1px solid rgba(0, 0, 0, 0.2);
    }

    .table-scroll tr {
        width: 100%;
        display: flex;
    }

    .table-scroll td,
    .table-scroll th {
        flex-basis: 100%;
        flex-grow: 2;
        display: block;
        padding: 1rem;
        text-align: left;
    }

    /* Other options */

    .table-scroll.small-first-col td:first-child,
    .table-scroll.small-first-col th:first-child {
        flex-basis: 20%;
        flex-grow: 1;
    }

    .table-scroll tbody tr:nth-child(2n) {
        background-color: rgba(130, 130, 170, 0.1);
    }

    .body-half-screen {
        max-height: 50vh;
    }

    .small-col {
        flex-basis: 10%;
    }
</style>