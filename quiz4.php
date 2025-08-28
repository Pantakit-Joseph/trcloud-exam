<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.0/dist/chart.umd.min.js"></script>
</head>

<body>

    <div style="max-width: 800px;">
        <canvas id="bar_chart"></canvas>
    </div>
    <hr>
    <div style="max-width: 800px;">
        <canvas id="pie_chart"></canvas>
    </div>

    <script>
        (function() {

            fetch('https://www.trcloud.co/test/api.php')
                .then(response => response.json())
                .then(data => {
                    renderChart(data);
                })
                .catch(error => console.error(error));


            const renderChart = (data) => {
                renderBarChart(data);
                renderPieChart(data);
            }

            const renderBarChart = (data) => {
                const labels = [];
                const values = [];

                data.forEach(item => {
                    labels.push(item.City + ' (' + item.Country + ')');
                    values.push(item.Population);

                });

                const barChart = document.getElementById('bar_chart');

                new Chart(barChart, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Range by Country',
                            data: values,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                        }]
                    },
                });
            }

            const renderPieChart = (data) => {
                const labels = [];
                const values = [];

                data.forEach(item => {
                    labels.push(item.City + ' (' + item.Country + ')');
                    values.push(item.Population);

                });

                const pieChart = document.getElementById('pie_chart');
                new Chart(pieChart, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Range by Country',
                            data: values,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 205, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(201, 203, 207, 0.2)'
                            ],
                            borderColor: [
                                'rgb(255, 99, 132)',
                                'rgb(255, 159, 64)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)',
                                'rgb(54, 162, 235)',
                                'rgb(153, 102, 255)',
                                'rgb(201, 203, 207)'
                            ],
                            borderWidth: 1
                        }]
                    },
                });
            }
        })();
    </script>
</body>

</html>