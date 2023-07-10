<!DOCTYPE html>
<html>

<head>
    <title>Resultado Votação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid w-75">
        <div class="row">
            <div class="col-md-12 my-5 d-flex justify-content-center">
                <h1>Resultado Votação</h1>
            </div>
            <div class="col-md-12">
                <canvas id="graph"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script>
        $(document).ready(function() {
            showGraph();
        });
        var barGraph;
        const showGraph = () => {
            {
                var name = ['Pata 7', 'Squad da Quebrada', 'Mango Joe', 'Soneca'];

                var marks = [0, 0, 0, 0];
                var backgroundColorConst = ['#4354E7', '#FF882A', '#264131', '#87CEEB']

                var chartdata = {
                    labels: name,
                    datasets: [{
                        backgroundColor: backgroundColorConst,
                        data: marks
                    }]
                };

                var graphTarget = $("#graph");
                Chart.defaults.set('plugins.datalabels', {
                    color: '#FE777B'
                });
                barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata,
                    plugins: [ChartDataLabels],
                    options: {
                        plugins: {
                            legend: {
                                display: false,
                                labels: {
                                    color: 'rgb(255, 99, 132)'
                                }
                            },
                            datalabels: {
                                backgroundColor: 'white',
                                borderColor: 'black',
                                borderRadius: 25,
                                borderWidth: 2,
                                color: 'black',
                                font: {
                                    weight: 'bold'
                                },
                                formatter: Math.round
                            }
                        }
                    }
                });
            }
        }

        var updateData = function() {
            $.ajax({
                url: "data.php",
                success: function(data) {
                    var PATA7 = 0;
                    var SQUAD_DA_QUEBRADA = 1;
                    var MANGO_JOE = 2;
                    var SONECA = 3;

                    var j = 0;
                    for (var i in data) {
                        if (data[i].grupo == "PATA7") {
                            j = PATA7;
                        } else if (data[i].grupo == "SQUAD DA QUEBRADA") {
                            j = SQUAD_DA_QUEBRADA;
                        } else if (data[i].grupo == "MANGO JOE") {
                            j = MANGO_JOE;
                        } else if (data[i].grupo == "SONECA") {
                            j = SONECA;
                        }
                        barGraph.data.datasets[0].data[j] = data[i].qtd;
                        barGraph.update();
                        j++;
                    }
                    // barGraph.update();
                }

            })
        }
        setInterval(updateData, 5000);
    </script>
</body>

</html>