<script type="text/javascript">
    $("#test_content").ready(function() {

        $(".nav-tab").each(function() {
            $(this)[0].addEventListener('shown.bs.tab', function(event) {
                alert('test');
            })
        })

    });
</script>



<style>
    /*Creates table with scrollable tbody*/
    tbody {
        display: block;
        height: 150px;
        overflow: auto;
    }

    thead,
    tfoot,
    tbody tr {
        display: table;
        width: 100%;
        table-layout: fixed;
    }

    thead,
    tfoot {
        width: calc(100% - 1em)
    }

    table {
        width: 100%;
    }
</style>




<div class="col s12 m6 l6">
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Total Spent</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rent</td>
                <td>$640</td>
            </tr>
            <tr>
                <td>Utilities</td>
                <td>$56.12</td>
            </tr>
            <tr>
                <td>Foo</td>
                <td>$45</td>
            </tr>
            <tr>
                <td>Foo</td>
                <td>$45</td>
            </tr>
            <tr>
                <td>Foo</td>
                <td>$45</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Category</th>
                <th>Total Spent</th>
            </tr>
        </tfoot>
    </table>
</div>