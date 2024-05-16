// SIDEBAR TOGGLE

let sidebarOpen = false;
const sidebar = document.getElementById('sidebar');


function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}
function changePositionSideBar()
{
    const gridContainer = document.getElementById('grid-container');

    sidebar.classList.toggle('hidden');
    gridContainer.classList.toggle('sidebar-hidden-grid-container');
    console.log(gridContainer);

}

// // ---------- CHARTS ----------

// // BAR CHART
// const barChartOptions = {
//   series: [
//     {
//       data: [10, 8, 6, 4, 2],
//     },
//   ],
//   chart: {
//     type: 'bar',
//     height: 350,
//     toolbar: {
//       show: false,
//     },
//   },
//   colors: ['#246dec', '#cc3c43', '#367952', '#f5b74f', '#4f35a1'],
//   plotOptions: {
//     bar: {
//       distributed: true,
//       borderRadius: 4,
//       horizontal: false,
//       columnWidth: '40%',
//     },
//   },
//   dataLabels: {
//     enabled: false,
//   },
//   legend: {
//     show: false,
//   },
//   xaxis: {
//     categories: ['Laptop', 'Phone', 'Monitor', 'Headphones', 'Camera'],
//   },
//   yaxis: {
//     title: {
//       text: 'Count',
//     },
//   },
// };

// const barChart = new ApexCharts(
//   document.querySelector('#bar-chart'),
//   barChartOptions
// );
// barChart.render();

// // AREA CHART
// const areaChartOptions = {
//   series: [
//     {
//       name: 'Purchase Orders',
//       data: [31, 40, 28, 51, 42, 109, 100],
//     },
//     {
//       name: 'Sales Orders',
//       data: [11, 32, 45, 32, 34, 52, 41],
//     },
//   ],
//   chart: {
//     height: 350,
//     type: 'area',
//     toolbar: {
//       show: false,
//     },
//   },
//   colors: ['#4f35a1', '#246dec'],
//   dataLabels: {
//     enabled: false,
//   },
//   stroke: {
//     curve: 'smooth',
//   },
//   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
//   markers: {
//     size: 0,
//   },
//   yaxis: [
//     {
//       title: {
//         text: 'Purchase Orders',
//       },
//     },
//     {
//       opposite: true,
//       title: {
//         text: 'Sales Orders',
//       },
//     },
//   ],
//   tooltip: {
//     shared: true,
//     intersect: false,
//   },
// };

// const areaChart = new ApexCharts(
//   document.querySelector('#area-chart'),
//   areaChartOptions
// );
// areaChart.render();


function SearchSent() {
    const query = document.getElementById('search-input').value;
    if (query) {
        // Tạo một form động
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = '/search'; // Thay đổi thành route bạn muốn gửi POST request tới

        // Tạo một input ẩn chứa giá trị tìm kiếm
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'user'; // parameter to send
        input.value = query;

        // Thêm input vào form
        form.appendChild(input);

        // Thêm form vào body và gửi form
        document.body.appendChild(form);
        form.submit();
    } else {
        alert('Search box is empty!');
    }
}

function handleKeyDown(event) {
    if (event.key === 'Enter' || event.keyCode === 13) {
        event.preventDefault();
        SearchSent();
    }
}
