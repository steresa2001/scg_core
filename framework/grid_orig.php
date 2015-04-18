<!-- Start Head -->
<?php include 'head.php'; ?>
<!-- End Head -->

<body>
	
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function() {
		  $('.flexslider').flexslider({
		    animation: "slide"
		  });
		});
	</script>

	<!-- Start Header -->
	<?php include 'header.php'; ?>
	<!-- End Header -->

	<!-- Start Body Wrapper -->
	<div id="body-wrapper" class="">

		<!-- Start Grid Wrapper -->
		<div id="grid-wrapper">
			
			<div class="ctn-24">
				<h1>Grid Blueprint</h1>
			</div>

			<div class="ctn-24">
				<div class="showcase grid-100">
					<p>The grid consists of 24 columns each having a specified width which is calculated automatically based off the number of columns found in a given row. Each column has a percentage based width allowing for a smooth responsive grid. Each one of these pixel based measurements are converted automatically into percentage based measurements using <a href="http://sass-lang.com/" title="Sass" target="blank">Sass</a> functions.</p>
				</div>
			</div>
			
			<!-- Start Grid With Margin -->
			<div class="ctn-24">
				<h2>Columns with Margins</h2>
			</div>
			
			<div class="ctn-24">
				<div class="showcase grid-100">
					
					<p>The standard grid columns have a horizontal margin of 10px (left and right) and a vertical margin of 5px (top and bottom).</p>
					
				</div>
			</div>

			<div class="ctn-24 grid-100">

				<div class="ctns-6">
					<p class="grid-p">6</p>
				</div>

				<div class="ctns-6">
					<p class="grid-p">6</p>
				</div>

				<div class="ctns-6">
					<p class="grid-p">6</p>
				</div>

				<div class="ctns-6">
					<p class="grid-p">6</p>
				</div>

				<div class="ctns-12">
					<p class="grid-p">12</p>
				</div>

				<div class="ctns-12">
					<p class="grid-p">12</p>
				</div>

				<div class="ctns-10">
					<p class="grid-p">10</p>
				</div>

				<div class="ctns-10">
					<p class="grid-p">10</p>
				</div>

				<div class="ctns-4">
					<p class="grid-p">4</p>
				</div>

				<div class="ctns-16">
					<p class="grid-p">16</p>
				</div>

				<div class="ctns-8">
					<p class="grid-p">8</p>
				</div>

				<div class="ctns-24">
					<p class="grid-p">24</p>
				</div>

			</div>

			<div class="ctn-24">
				<script type="syntaxhighlighter" class="brush: js"><![CDATA[
	  				// Start Grid Wrapper
	  				<div id="grid-wrapper">
						// Start ctn 24
						<div class="ctn-24">
								// Insert Code
						</div>
						// End ctn 24
					</div>
					// End Grid Wrapper
				]]></script>
			</div>
			<!-- End Grid With Margin -->

			<div class="ctn-24 ctn-v-space-20">
				<h2>Columns with No Margins</h2>
			</div>

			<!-- Start Grid With No Margin -->
			<div class="grid-no-margin">

				<div class="ctns-2">
					<p class="grid-p">2</p>
				</div>

				<div class="ctns-8">
					<p class="grid-p">8</p>
				</div>

				<div class="ctns-8">
					<p class="grid-p">8</p>
				</div>

				<div class="ctns-6">
					<p class="grid-p">6</p>
				</div>

				<div class="ctns-9">
					<p class="grid-p">9</p>
				</div>

				<div class="ctns-3">
					<p class="grid-p">3</p>
				</div>

				<div class="ctns-3">
					<p class="grid-p">3</p>
				</div>

				<div class="ctns-3">
					<p class="grid-p">3</p>
				</div>

				<div class="ctns-6">
					<p class="grid-p">6</p>
				</div>

				<div class="ctns-5">
					<p class="grid-p">5</p>
				</div>

				<div class="ctns-5">
					<p class="grid-p">5</p>
				</div>

				<div class="ctns-5">
					<p class="grid-p">5</p>
				</div>

				<div class="ctns-5">
					<p class="grid-p">5</p>
				</div>

				<div class="ctns-4">
					<p class="grid-p">4</p>
				</div>

				<div class="ctns-11">
					<p class="grid-p">11</p>
				</div>

				<div class="ctns-13">
					<p class="grid-p">13</p>
				</div>

				<div class="ctns-14">
					<p class="grid-p">14</p>
				</div>

				<div class="ctns-4">
					<p class="grid-p">4</p>
				</div>

				<div class="ctns-4">
					<p class="grid-p">4</p>
				</div>

				<div class="ctns-1">
					<p class="grid-p">1</p>
				</div>

				<div class="ctns-1">
					<p class="grid-p">1</p>
				</div>

			</div>
			<!-- End Grid With No Margin -->

		</div>
		<!-- End Grid Wrapper -->

	</div>
	<!-- End Body Wrapper -->

	<!-- Start Footer -->
	<?php include 'footer.php'; ?>
	<!-- End Footer -->
</body>
</html>