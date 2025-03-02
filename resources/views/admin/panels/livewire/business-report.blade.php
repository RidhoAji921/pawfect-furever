<div>
    <div id="ordersChart"></div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endassets

@script
<script>
    let options = {
        chart: {
            type: "line",
            height: 350
        },
        series: [
            {
                name: "Order Dibuat",
                data: @json($ordersData)
            },
            {
                name: "Order Selesai",
                data: @json($finishedData)
            }
        ],
        xaxis: {
            categories: @json($dates),
            labels: {
                rotate: -45 // Agar label tanggal lebih rapi
            }
        },
        colors: ["#007bff", "#28a745"]
    };

    let chart = new ApexCharts(document.querySelector("#ordersChart"), options);
    chart.render();
</script>
@endscript