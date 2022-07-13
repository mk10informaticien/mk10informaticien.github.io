<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1">
	<title>Vase Admin Dashboard</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<input type="checkbox" name="" id="menu-toggle">
	<div class="overlay">
		<label for="menu-toggle"></label>
	</div>
	
	<?php include "section/navbar.html"; ?>

	<div class="main-content">
		<?php
			require "php/entete.php";
			creationEntete('Tableau de bord','menu principal');
		?>
		<main>
			<section>
				<h3 class="section-head">Overview</h3>
				<div class="analytics">
					<div class="analytic">
						<div class="analytic-icon">
							<span class="las la-eye"></span>
						</div>
						<div class="analytic-info">
							<h4>Total views</h4>
							<h1>10.3M</h1>
						</div>
					</div>

					<div class="analytic">
						<div class="analytic-icon">
							<span class="las la-clock"></span>
						</div>
						<div class="analytic-info">
							<h4>Watch Time (hrs)</h4>
							<h1>20.9K<small class="text-danger">5%</small></h1>
						</div>
					</div>

					<div class="analytic">
						<div class="analytic-icon">
							<span class="las la-users"></span>
						</div>
						<div class="analytic-info">
							<h4>Subscribers</h4>
							<h1>1.3K<small class="text-success">12%</small></h1>
						</div>
					</div>

					<div class="analytic">
						<div class="analytic-icon">
							<span class="las la-heart"></span>
						</div>
						<div class="analytic-info">
							<h4>Total likes</h4>
							<h1>3.4M</h1>
						</div>
					</div>
				</div>
			</section>
			
		</main>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.js"></script>
	<script>
		Chart.defaults.global.defaultFontFamily = "Poppins";
		let ctx = document.querySelector("#revenueChart");

		let revChart = new Chart(ctx,{
			type:"line",
			data:{
				labels: ["Sept 1"," Sept 3","Sept 6","Sept 9","Sept 12","Sept 15","Sept 18","Sept 21","Sept 24","Sept 27","Sept 30"],
				datasets:[
					{
						label: "Views",
						borderColor:"#2ec3a3",
						borderWidth: "3",
						backgroundColor: "rgba(235,247,245,0.7)",
						data:[0,30,60,25,60,25,50,10,50,90,120]
					},
					{
						label: "Watch time",
						borderColor:"#396aff",
						borderWidth: "3",
						backgroundColor: "rgba(233,238,253,0.7)",
						data:[0,60,25,100,20,75,30,55,20,60,20]
					}
				]
			},
			options:{
				responsive: true,
				tooltips:{
					intersect: false,
					node:"index",
				}
			}
		});
	</script>

</body>
</html>