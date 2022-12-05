<div class="chart-container" style="position: relative; height:100%; width:100%">
                        <canvas style="height: 50%; width: 100%" id="myChart"></canvas>
                    </div>

                    <script>
                        <?php
                        $labels_string="[";
                        foreach ($report['datax'] as $key => $value) {
                            $labels_string=$labels_string."'$value',";
                        }
                        $labels_string="]";
                        ?>
                        /*
                        const labels = [
                            'January',
                            'February',
                            'March',
                            'April',
                            'May',
                            'June',
                        ];
                        */

                        const labels = <?=$labels_string?>

                        const data = {
                            labels: labels,
                            datasets: [{
                                label: 'My First dataset',
                                backgroundColor: 'rgb(255, 99, 132)',
                                borderColor: 'rgb(255, 99, 132)',
                                data: [0, 10, 5, 2, 20, 30, 45],
                            }]
                        };

                        const config = {
                            type: 'line',
                            data: data,
                            options: {},
                        };
                    </script>

                    <script>
                        const myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
                    </script>