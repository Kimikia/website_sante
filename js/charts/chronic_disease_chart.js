$(document).ready(function () {
    $.ajax({
        url: "http://127.0.0.1/sante/data/chronic_disease_data.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var labels = [];
            var ranges = [];

            for (var i in data) {
                labels.push(data[i].chronic_disease_number);
                ranges.push(data[i].percentage);
            }



            var chartdata = {
                labels: labels,
                datasets: [
                    {
                        label: "Nombre de maladie chronique par foyer",
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1,
                        data: ranges
                    }
                ]
            };

            var ctx = $("#chronic_disease_chart");

            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
});