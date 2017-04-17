<body>

	<div class="container">
	  <div class="well">
	  <div class="col-lg-6">
		<div class="input-group">
		  <div class="input-group-btn">
			<button type="submit" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Pilih Kota <span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu">
			  <li><a href="?city=semarang">Semarang</a></li>
			  <li><a href="?city=jakarta">Jakarta</a></li>
			</ul>
		  </div><!-- /btn-group -->
		</div><!-- /input-group -->
	  </div><!-- /.col-lg-6 -->
	  </div>
	</div>
	
	
	<?php
		error_reporting(0);
		$city=$_GET['city'];
		if($city=='semarang')
		{
			$json_string1 = file_get_contents("http://api.wunderground.com/api/a17de8113d1dfa97/conditions/q/zmw:00000.1.96837.json");

		}
		else if($city=='jakarta')
		{
			$json_string1 = file_get_contents("http://api.wunderground.com/api/a17de8113d1dfa97/conditions/q/zmw:00000.2.96749.json");
		}
		
		$parsed_json1 = json_decode($json_string1);
		$country = $parsed_json1->{'current_observation'}->{'display_location'}->{'state_name'};
		$city = $parsed_json1->{'current_observation'}->{'display_location'}->{'city'};
		$obs_time = $parsed_json1->{'current_observation'}->{'observation_time'};
		$temp = $parsed_json1->{'current_observation'}->{'temperature_string'};
		$wind_mph = $parsed_json1->{'current_observation'}->{'wind_mph'};
		$wind_string = $parsed_json1->{'current_observation'}->{'wind_string'};
		
	?>
	<?php
		
	?>
	<div class="container">
		<div class="well">
		<h2>DETAILS</h2>
		<div class="panel panel-info">
			<div class="panel-heading">NEGARA</div>
				<div class="panel-body">
				  <?php
					echo "${country}";
				  ?>
				</div>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">KOTA</div>
				<div class="panel-body">
				  <?php
					echo "${city}<br>";
				  ?>
				</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">OBSERVATION TIME</div>
				<div class="panel-body">
				  <?php
					echo "${obs_time}<br>";
				  ?>
				</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">TEMPERATURE</div>
				<div class="panel-body">
				  <?php
					echo "${temp}<br>";
				  ?>
				</div>
		</div>

		 <div class="panel panel-info">
			<div class="panel-heading">KECEPATAN ANGIN</div>
				<div class="panel-body">
				  <?php
					echo "${wind_mph} MPH<br>";
				  ?>
				</div>
		</div>
		 <div class="panel panel-info">
			<div class="panel-heading">ARAH ANGIN</div>
				<div class="panel-body">
				  <?php
					echo "${wind_string}<br>";
				  ?>
				</div>
		</div>

	  </div>
	</div>
	
</body>