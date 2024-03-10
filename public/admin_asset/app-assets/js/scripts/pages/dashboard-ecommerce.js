$(window).on("load", function () {
    "use strict";

    var $textMutedColor = "#b9b9c3";
    var $revenueReportChart = document.querySelector("#revenue-report-chart");
    var revenueReportChartOptions;
    var revenueReportChart;

    revenueReportChartOptions = {
        colors: [window.colors.solid.danger, window.colors.solid.primary],
        series: [
            {
                name: "Chưa thanh toán",
                type: "column",
                data: NotEarning,
            },
            {
                name: "Đã thanh toán",
                type: "column",
                data: Earning,
            },
        ],
        chart: {
            height: 250,
            // stacked: true,
            type: "line",
            toolbar: { show: false },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "50%",
                endingShape: "rounded",
            },
            distributed: true,
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        stroke: {
            width: [0, 4],
            curve: 'smooth'
          },
        xaxis: {
            categories: Months,
            labels: {
                style: {
                    colors: $textMutedColor,
                    fontSize: "0.86rem",
                },
            },
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    if (value > 1000000000) {
                        return (value / 1000000000).toLocaleString() + " T";
                    } else if (value > 1000000) {
                        return (value / 1000000).toLocaleString() + " Tr";
                    } else if (value > 1000) {
                        return (value / 1000).toLocaleString() + " N";
                    }
                    return value;
                },
                style: {
                    colors: $textMutedColor,
                },
            },
        },
        fill: {
            opacity: 1,
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return val.toLocaleString("vi", {
                        style: "currency",
                        currency: "VND",
                    });
                },
            },
        },
    };
    revenueReportChart = new ApexCharts(
        $revenueReportChart,
        revenueReportChartOptions
    );
    revenueReportChart.render();

});
