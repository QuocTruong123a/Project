// const datex = [
//     '0',
//     '1',
//     '13',
//     '19',
//     '21',
// ]
// const datey = [

//     '0',
//     '4000',
//     '3500',
//     '3800',
//     '2800',
// ]
// const weekx = [
//     '0',
//     '1',
//     '13',
//     '19',
//     '21',
// ]
// const weeky = [
//     '0',
//     '1000',
//     '3500',
//     '2800',
//     '3800',
// ]
// const Yearx = [
//     '0',
//     '1',
//     '13',
//     '19',
//     '22',
// ]
// const Yeary = [
//     '0',
//     '5000',
//     '4500',
//     '3800',
//     '6800',
// ]
// const data = {
//     labels: datex,
//     datasets: [{
//         label: 'Weekly Sales',
//         data: datey,
//         backgroundColor: [
//             'rgba(255, 26, 104, 0.2)',
//             'rgba(54, 162, 235, 0.2)',
//             'rgba(255, 206, 86, 0.2)',
//             'rgba(75, 192, 192, 0.2)',
//             'rgba(153, 102, 255, 0.2)',
//             'rgba(255, 159, 64, 0.2)',
//             'rgba(0, 0, 0, 0.2)'
//         ],
//         borderColor: [
//             'rgba(255, 26, 104, 1)',
//             'rgba(54, 162, 235, 1)',
//             'rgba(255, 206, 86, 1)',
//             'rgba(75, 192, 192, 1)',
//             'rgba(153, 102, 255, 1)',
//             'rgba(255, 159, 64, 1)',
//             'rgba(0, 0, 0, 1)'
//         ],
//         borderWidth: 1
//     }]
// };


// const config = {
//     type: 'bar',
//     data,
//     options: {
//         scales: {
//             x: {
//                 type: 'time',
//                 time: {
//                     unit: 'day'
//                 }
//             },
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// };


// const myChart = new Chart(
//     document.getElementById('myChart'),
//     config

// );

// function updateMoth(month) {
//     console.log(month)
//     if (month.value === 'date') {
//         myChart.config.data.datasets[0].data = datey
//         myChart.config.data.datasets[0].labels = datex
//     }
//     if (month.value === 'week') {
//         myChart.config.data.datasets[0].data = weeky
//         myChart.config.data.datasets[0].labels = weekx
//     }
//     if (month.value === 'Year') {
//         myChart.config.data.datasets[0].data = Yeary
//         myChart.config.data.labels = Yearx
//     }
//     myChart.update();
// }
//code đẫ hoàn thiện

const datex = [

    '1',
    '13',
    '19',
    '31',
]
const datey = [


    '2700',
    '2500',
    '4000',
    '3200',
]
const weekx = [

    'Tuần 1',
    'Tuần 2',
    'Tuần 3',
    'Tuần 4',
]
const weeky = [

    '2000',
    '1600',
    '2800',
    '3800',
]
const Yearx = [

    '1',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9',
    '10',
    '11',
    '12',
]
const Yeary = [
    '5000',
    '4500',
    '3800',
    '6600',
    '5400',
    '4500',
    '3800',
    '6200',
    '5100',
    '4500',
    '3800',
    '7800',
]
const data = {
    labels: datex,
    datasets: [{

        label: ' ',
        data: datey,

        backgroundColor: [
            ' rgba(189, 223, 255,1)',
            'rgba(255, 99, 132, 0.2)'
        ],
        borderColor: [
            'rgba(38, 112, 255)',
        ],

    }],

};
const config = {
    type: 'line',

    data,
    options: {
        legend: { display: false },
        scales: {
            x: {
                type: 'time',
                time: {
                    unit: 'day'
                }
            },
            y: {
                beginAtZero: false
            }
        }
    }
};


const myChart = new Chart(
    document.getElementById('myChart'),
    config

);
var d = new Date();

function updateMoth(month) {
    var message = document.getElementById('show_message');
    var value = month.value;
    if (value === 'date') {
        message.innerHTML = "Bảng thống kê theo ngày";
    } else if (value === 'week') {
        message.innerHTML = "Bảng thống kê theo tuần";
    } else if (value === 'Year') {
        message.innerHTML = "Bảng thống kê theo tháng";
    }


    var messages = document.getElementById('show_date');
    var value = month.value;
    const one = d.getMonth();
    const two = d.getFullYear();
    if (value === 'date') {
        messages.innerHTML = one + 1 + "/" + two;
    } else if (value === 'week') {
        messages.innerHTML = one + 1 + "/" + two;
    } else if (value === 'Year') {
        messages.innerHTML = two;
    }

    var messagess = document.getElementById('show_dates');
    var value = month.value;
    const three = "Tháng";
    if (value === 'date') {
        messagess.innerHTML = three;
    } else if (value === 'week') {
        messagess.innerHTML = three;
    } else if (value === 'Year') {
        messagess.innerHTML = "Năm";
    }

    console.log(month)


    if (month.value === 'date') {
        myChart.config.data.datasets[0].data = datey
        myChart.config.data.labels = datex
    }
    if (month.value === 'week') {
        myChart.config.data.datasets[0].data = weeky
        myChart.config.data.labels = weekx
    }
    if (month.value === 'Year') {
        myChart.config.data.datasets[0].data = Yeary
        myChart.config.data.labels = Yearx
    }
    myChart.update();
}
