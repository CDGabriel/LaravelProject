
import Chart from 'chart.js/auto';
import Alpine from 'alpinejs';
import 'taos';
window.Alpine = Alpine;
window.Chart = Chart;

Alpine.start();
const doughnutChart = document.getElementById('doughnutChart');

if (doughnutChart) {
    const ctx = doughnutChart.getContext('2d');

    // Chart.js code for this Blade
}
const chartElement = document.getElementById('spendingByCategoryChart');

const wrapper = document.getElementById('chart-wrapper');
const canvas = document.getElementById('doughnutChartMock');

const observer = new IntersectionObserver(
    ([entry]) => {
        if (entry.isIntersecting) {

            new Chart(canvas, {
                type: 'doughnut',

                data: {
                    labels: ['Food', 'Car', 'Entertainment'],
                    datasets: [{
                        data: [65, 25, 10],
                        borderWidth: 0
                    }]
                },

                options: {
                    responsive: true,
                    maintainAspectRatio: false,

                    animation: {
                        animateRotate: true,
                        animateScale: true,
                        duration: 1500,
                        easing: 'easeOutQuart'
                    }
                }
            });

            observer.unobserve(wrapper);
        }
    },
    {
        rootMargin: '-50% 0px -20% 0px',
        threshold: 0
    }
);

observer.observe(wrapper);


if (chartElement) {
    const spendingByCategory = JSON.parse(
        chartElement.dataset.spending
    );

    new Chart(chartElement, {
        type: 'doughnut',

        data: {
            labels: Object.keys(spendingByCategory),

            datasets: [{
                data: Object.values(spendingByCategory),
            }],
        },

        options: {
            responsive: true,

            plugins: {
                legend: {
                    position: 'bottom',
                },

                tooltip: {
                    callbacks: {
                        label: function (context) {
                            return ' €' + Number(context.raw).toFixed(2);
                        },
                    },
                },
            },
        },
    });
}