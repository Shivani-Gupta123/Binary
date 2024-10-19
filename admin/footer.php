<footer class="footer mt-auto py-3 bg-white text-center">
     <div class="container">
        <span class="text-muted"> Powered by NEO Binary</span> 
        <a
        href="javascript:void(0);" class="text-dark fw-semibold">2024 &copy;</a>.
        Designed with <span class="bi bi-heart-fill text-danger"></span> |  <a href="javascript:void(0);">
            <span class="fw-semibold text-primary text-decoration-underline">Binary MLM Plan</span>
        </a> 
    </span>
</div>
</footer>

</div>
<div class="scrollToTop">
    <span class="arrow"><i class="las la-angle-double-up"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/jquery-3.6.0.min.js"></script>
<!-- Popper JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/simplebar/simplebar.min.js"></script>
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/simplebar.js"></script>

<!-- Color Picker JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/@simonwep/pickr/pickr.es5.min.js"></script>



<!-- Custom-Switcher JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/custom-switcher.min.js"></script>

	<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/apexcharts/apexcharts.min.js"></script>

	<!-- JSVector Maps JS -->
	<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/jsvectormap/js/jsvectormap.min.js"></script>

	<!-- JSVector Maps MapsJS -->
	<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/jsvectormap/maps/world-merc.js"></script>
	<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/us-merc-en.js"></script>

	<!-- Chartjs Chart JS -->
	<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/index.js"></script>

	<!-- Chartjs Chart JS -->
	<script src="https://demo.neomlmsoftware.com/binary/assets/backend/libs/chart.js/chart.min.js"></script>


	<script src="https://demo.neomlmsoftware.com/binary/assets/plugins/notify/notify.js"></script>
	<script type="text/javascript">

		const data3 = {
			labels: [
				'Active Users',
				'Inactive Users'
				],
			datasets: [{
				label: 'My First Dataset',
				data: [63, 0],
				backgroundColor: [
					'rgb(245, 184, 73)',
					'rgb(132, 90, 223)',
					'rgb(35, 183, 229)'
					],
				hoverOffset: 4
			}]
		};
		const config4 = {
			type: 'doughnut',
			data: data3,
		};
		const myChart3 = new Chart(
			document.getElementById('bonus-doughnut'),
			config4
			);

		var options1 = {
			series: [{
				name: 'Referral',
				data: [0, 0, 0, 0, 0, 0, 600, 0, 0, 0, 0, 0]
			}, {
				name: 'Binary',
				data: [0, 0, 0, 0, 0, 20, 600, 0, 0, 0, 0, 0]
			}, {
				name: 'Level',
				data: [0, 0, 0, 0, 0, 39, 3600, 0, 0, 0, 0, 0]
			}],
			chart: {
				height: 256,
				type: "bar",
				toolbar: {
					show: false,
				},
				fontFamily: 'Nunito, sans-serif',
			},
			dataLabels: {
				enabled: false
			},
			stroke: {
				show: true,
				width: 2,
				endingShape: 'rounded',
				colors: ['transparent'],
			},
			grid: {
				borderColor: '#f3f3f3',
				xaxis: {
					lines: {
						show: false
					}
				}, 
			},
			xaxis: {
				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				axisBorder: {
					show: false,
				},
				axisTicks: {
					show: false,
				},
			},
			yaxis: {
				axisBorder: {
					show: false,
				},
			},
			legend: {
				show: false
			},
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			markers: {
				size: 0
			},
			colors: ['#0162e8', '#f93a5a', '#f7a556'],
			plotOptions: {
				bar: {
					columnWidth: "45%",
					endingShape: 'rounded',
				}
			},
			fill: {
				opacity: 1
			},
			legend: {
				show: false,
			},
			tooltip: {
				y: {
					formatter: function (val) {
						return "$ " + val 
					}
				}
			}
		};
		document.getElementById('Sales-bar').innerHTML = ''
		var chart1 = new ApexCharts(document.querySelector("#Sales-bar"), options1);
		chart1.render();
		function salesReport() {
			chart1.updateOptions({
				colors: ["rgb(" + myVarVal + ")",  "#f93a5a", "#f7a556"],
			})
		}

		var options = {
			chart: {
				width: 200,
				height: 205,
				responsive: 'true',
				reset: 'true',
				type: 'radialBar',
				offsetX: 0,
				offsetY: 0,
			},
			plotOptions: {
				radialBar: {
					responsive: 'true',
					startAngle: -135,
					endAngle: 135,
					size: 120,
					imageWidth: 50,
					imageHeight: 50,

					track: {
						strokeWidth: "80%",
						background: '#ecf0fa',
					},
					dropShadow: {
						enabled: false,
						top: 0,
						left: 0,
						bottom: 0,
						blur: 3,
						opacity: 0.5
					},
					dataLabels: {
						name: {
							fontSize: '16px',
							color: undefined,
							offsetY: 30,
						},
						hollow: {
							size: "60%"
						},
						value: {
							offsetY: -10,
							fontSize: '22px',
							color: undefined,
							formatter: function (val) {
								return val + "%";
							}
						}
					}
				}
			},
			colors: ['#0162e8','#0db2de'],
			fill: {
				type: "gradient",
				gradient: {
					shade: "dark",
					type: "horizontal",
					shadeIntensity: .5,
					gradientToColors: ['#0162e8'],
					inverseColors: !0,
					opacityFrom: 1,
					opacityTo: 1,
					stops: [0, 100]
				}
			},
			stroke: {
				dashArray: 4
			},
			series: [0,0],
			labels: ["Release","Pending"]
		};

		document.querySelector('#chart').innerHTML = ""
		var chart = new ApexCharts(document.querySelector("#chart"), options);
		chart.render();

	</script>
	<script type="text/javascript">
		function copyReferral(element) {
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val($(element).text()).select();
			document.execCommand("copy");
			$temp.remove();
			$.notify(
				"Copied the Referral link", 
				{ color: "#fff", background: "#38D9C8",blur: 0.4, delay:5000}
				);
		}

		document.addEventListener('DOMContentLoaded', () => {
			const localTimeElement = document.getElementById('local-time');
			const serverTimeElement = document.getElementById('server-time');

    // Function to update local time
			function updateLocalTime() {
				const now = new Date();
				localTimeElement.textContent = now.toLocaleTimeString();
			}

    // Function to get server time
			function getServerTime() {
				const xhr = new XMLHttpRequest();
				xhr.open('GET', '/server-time', true);
				xhr.onreadystatechange = function() {
					if (xhr.readyState == 4 && xhr.status == 200) {
						serverTimeElement.textContent = xhr.responseText;
					}
				};
				xhr.send();
			}

    // Update local time every second
			setInterval(updateLocalTime, 1000);

    // Get server time initially and every 10 seconds
			getServerTime();
			setInterval(getServerTime, 10000);
		});



		function fetchServerTime() {
			$.ajax({
				url:"https://demo.neomlmsoftware.com/binary/admin/dashboard/getTime",
				type: 'GET',
				dataType: 'json',
				success: function(response) {
            // Handle successful response
					var serverTime = response.server_time;
					$('#server-time').html(serverTime);
					console.log('Server Time:', response.server_time);
            // You can update your UI with the server time here
				},
				error: function(xhr, status, error) {
            // Handle errors
					console.error('Error fetching server time:', error);
				}
			});
		}
		fetchServerTime();

// Fetch server time every second
setInterval(fetchServerTime, 1000); // 1000 milliseconds = 1 second
</script>
 

<!-- Custom JS -->
<script src="https://demo.neomlmsoftware.com/binary/assets/backend/js/custom.js"></script>

</body>

</html>