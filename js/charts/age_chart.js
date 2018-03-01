$(document).ready(function () {
    $.ajax({
        url: "http://127.0.0.1/sante/data/age_data.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var ranges = [];

            for (var i in data) {
                ranges.push(data[i].percentage);
            }

            console.log(ranges)

            var chartdata = {
                labels: ["6 à 14 ans", "15 à 24 ans", "25 à 44 ans", "45 à 64 ans", "65 à 79 ans"],
                datasets: [
                    {
                        label: "Age participants",
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

            var ctx = $("#age_chart");

            var barGraph = new Chart(ctx, {
                type: 'doughnut',
                data: chartdata
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
});