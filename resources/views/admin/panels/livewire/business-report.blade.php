<div class="my-5 mt-2">
    <h1 class="font-bold text-2xl mb-3 text-gray-900 dark:text-white">Order Dibuat dan Selesai</h1>
    <h1 class="font-semibold text-xl mb-3 text-gray-900 dark:text-white">Order Paket Mandi Biasa</h1>
    <div id="ordersChartMBS" class="flex justify-center"></div>
    <h1 class="font-semibold text-xl mb-3 text-gray-900 dark:text-white">Order Paket Mandi Lengkap</h1>
    <div id="ordersChartMLK" class="flex justify-center"></div>
    <h1 class="font-semibold text-xl mb-3 text-gray-900 dark:text-white">Order Pet Hotel</h1>
    <div id="ordersChartHTL" class="flex justify-center"></div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endassets

@script
<script>
    let options = {
        chart: {
            type: "bar",
            height: 350,
            width: 900,
        },
        series: [
            {
                name: "Order Dibuat",
                data: @json($ordersData_MBS)
            },
            {
                name: "Order Selesai",
                data: @json($finishedData_MBS)
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
    let optionsMLK = {
        chart: {
            type: "bar",
            height: 350,
            width: 900,
        },
        series: [
            {
                name: "Order Dibuat",
                data: @json($ordersData_MLK)
            },
            {
                name: "Order Selesai",
                data: @json($finishedData_MLK)
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
    let optionsHTL = {
        chart: {
            type: "bar",
            height: 350,
            width: 900,
        },
        series: [
            {
                name: "Order Dibuat",
                data: @json($ordersData_PetHotel)
            },
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

    let chartMBS = new ApexCharts(document.querySelector("#ordersChartMBS"), options);
    chartMBS.render();

    let chartMLK = new ApexCharts(document.querySelector("#ordersChartMLK"), optionsMLK);
    chartMLK.render();

    let chartHTL = new ApexCharts(document.querySelector("#ordersChartHTL"), optionsHTL);
    chartHTL.render();
</script>
@endscript