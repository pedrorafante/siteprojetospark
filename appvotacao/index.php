<!DOCTYPE html>
<html>

<head>
    <title>Resultado Votação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <button onclick="teste()"> Sanfona </button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"
        integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            showGraph();
        });
        var barGraph;
        const showGraph = () => {
            {
                var name = ['Grupo 1', 'Grupo 2', 'Grupo 3', 'Grupo 4'];
                var marks = [2, 2, 3, 5];
                var backgroundColorConst = ['red', 'green', 'yellow', 'pink']
                // $.post("data.php", function (data) {
                //     console.log(data);
                //     var name = [];
                //     var marks = [];

                //     for (var i in data) {
                //         name.push(data[i].student_name);
                //         marks.push(data[i].marks);
                //     }

                var chartdata = {
                    labels: name,
                    datasets: [
                        {
                            // label: 'Student Marks',
                            backgroundColor: backgroundColorConst,//'green',
                            // borderColor: '#46d5f1',
                            // hoverBackgroundColor: '#CCCCCC',
                            // hoverBorderColor: '#666666',
                            data: marks
                        }
                    ]
                };

                var graphTarget = $("#graph");

                barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata
                });
                // });
            }
        }

        function teste() {
            barGraph.data.datasets[0].data[2] = 50; // Would update the first dataset's value of 'March' to be 50
            barGraph.update(); // Calling update now animates the position of March from 90 to 50.
        }

        var updateData = function () {
            $.ajax({
                url: "data.php",
                success: function (data) {
                    console.log(data);
                    teste();
                }

            })
        }
        setInterval(updateData, 3000);
    </script>
</body>

</html>