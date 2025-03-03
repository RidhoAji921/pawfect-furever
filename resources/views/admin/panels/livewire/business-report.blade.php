<div class="my-5 mt-2">
    <h1 class="font-semibold text-2xl mb-3 text-gray-900 dark:text-white">Grafik Order Dibuat dan Selesai</h1>
    <div id="ordersChart"></div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endassets

@script
<script>
    let options = {
        chart: {
            type: "bar",
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
            type: "datetime",
            categories: @json($dates),
            labels: {
                rotate: -45,
                style: {
                    colors: "#ffffff",
                    fontSize: "12px"
                }
            }
        },
        yaxis: [
            {
                title: {
                    text: "Pesanan",
                    style:{
                        color: "#ffffff",
                        fontSize: "12px",
                        fontWeight: "bold"
                    }
                },
                labels:{
                    style: {
                        colors: "#ffffff",
                        fontSize: "12px"
                    }
                }
            },
        ],
        colors: ["#007bff", "#28a745"]
    };

    let chart = new ApexCharts(document.querySelector("#ordersChart"), options);
    chart.render();
</script>
@endscript