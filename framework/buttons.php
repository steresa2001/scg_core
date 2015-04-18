<!-- Start Head -->
<?php include 'head.php'; ?>
<!-- End Head -->

<body>

	<!-- Start Header -->
	<?php include 'header.php'; ?>
	<!-- End Header -->
	
	<!-- Start Grid Wrapper -->
	<div id="grid-wrapper" class="grid-size-6">
		
		<!-- Start Sidebar -->
		<?php include 'sidebar.php'; ?>
		<!-- End Sidebar -->

		<div class="ctn-18">

			<div class="row">
				<h1>Buttons just begging to be clicked</h1>
			</div>

			<section>
				<div class="row">
					<h2>Simple Buttons</h2>
					<div class="showcase">
						<p>It really is simple to get these buttons working. The width and height of each button is determined by the font size. 
						The smallest button or <strong>"Tiny Button"</strong> has a font size of 13px and the largest button or <strong>"Massive Button"</strong> has a font size of 30px. The <strong>"Default Button"</strong> has a font size of 18px.</p>
					</div>
				</div>

				<div class="row">
					<a class="simple-btn-xxxl" href="#">Massive button</a>
					<a class="simple-btn-xxl" href="#">Very large button</a>
					<a class="simple-btn-xl" href="#">Large button</a>
					<a class="default-btn" href="#">Default button</a>
				</div>

				<div class="row">
					<a class="simple-btn-xs" href="#">Small button</a>
					<a class="simple-btn-xxs" href="#">Very small button</a>
					<a class="simple-btn-xxxs" href="#">Tiny button</a>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<a class="simple-btn-xxxl" href="#">/* Massive button */</a>
		  				<a class="simple-btn-xxl" href="#">/* Very large button */</a>
						<a class="simple-btn-xl" href="#">/* Large button */</a>
						<a class="default-btn" href="#">/* Default button */</a>
						<a class="simple-btn-xs" href="#">/* Small button */</a>
						<a class="simple-btn-xxs" href="#">/* Very small button */</a>
						<a class="simple-btn-xxxs" href="#">/* Tiny button */</a>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Rounded Buttons</h2>
					<div class="showcase">
						<p>Adding a bit more pizazz to your buttons couldn't be easier. Spice it up a bit with some nice rounded corners. We promise, we provided you with all the options you will ever need!</p>
					</div>
				</div>

				<div class="row">
					<a class="simple-btn-xl btn-radius-all" href="#">Rounded button all sides</a>
					<a class="simple-btn-xl btn-radius-left-side" href="#">Rounded button left side</a>
					<a class="simple-btn-xl btn-radius-right-side" href="#">Rounded button right side</a>
				</div>

				<div class="row">
					<a class="simple-btn-xl btn-radius-top" href="#">Rounded button top</a>
					<a class="simple-btn-xl btn-radius-bottom" href="#">Rounded button bottom</a>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<a class="simple-btn-xl btn-radius-all" href="#">/* Rounded button all sides */</a>
						<a class="simple-btn-xl btn-radius-left-side" href="#">/* Rounded button left side */</a>
						<a class="simple-btn-xl btn-radius-right-side" href="#">/* Rounded button right side */</a>
						<a class="simple-btn-xl btn-radius-top" href="#">/* Rounded button top */</a>
						<a class="simple-btn-xl btn-radius-bottom" href="#">/* Rounded button bottom */</a>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Button Groups</h2>
					<div class="showcase">
						<p>Button groups will easily and quickly allow you to create navigation. You have the option to keep the corners of your navigation square or you can add rounded corners.</p>
					</div>
				</div>

				<div class="button-groups row">
					<a class="default-btn" href="#">Some Long Link Name</a>
					<a class="default-btn" href="#">Some Long Link Name</a>
					<a class="default-btn" href="#">Some Long Link Name</a>
					<a class="default-btn" href="#">Some Long Link Name</a>
				</div>

				<div class="button-groups-rounded row">
					<a class="default-btn" href="#">Some Long Link Name</a>
					<a class="default-btn" href="#">Some Long Link Name</a>
					<a class="default-btn" href="#">Some Long Link Name</a>
					<a class="default-btn" href="#">Some Long Link Name</a>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<a class="simple-btn-xl btn-radius-all" href="#">/* Rounded button all sides */</a>
						<a class="simple-btn-xl btn-radius-left-side" href="#">/* Rounded button left side */</a>
						<a class="simple-btn-xl btn-radius-right-side" href="#">/* Rounded button right side */</a>\
						<a class="simple-btn-xl btn-radius-top" href="#">/* Rounded button top */</a>
						<a class="simple-btn-xl btn-radius-bottom" href="#">/* Rounded button bottom */</a>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Buttons For Forms</h2>
					<div class="showcase">
						<p>The default browser style for a true button is not that appealing. You can easily customize this by using the same options we provided above. The only difference is in the markup. Rather than using an anchor tag, use the button tag instead.</p>
					</div>
				</div>
				
				<div class="row">
					<button class="default-btn">Some Button</button>
					<button class="simple-btn-xl btn-radius-all" href="#">Rounded button all sides</button>
					<button class="simple-btn-xl btn-radius-left-side" href="#">Rounded button left side</button>
				</div>

				<div class="row">
					<button class="simple-btn-xl btn-radius-right-side" href="#">Rounded button right side</button>
					<button class="simple-btn-xl btn-radius-top" href="#">Rounded button top</button>
					<button class="simple-btn-xl btn-radius-bottom" href="#">Rounded button bottom</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="default-btn">/* Some Button */</button>
					]]></script>
				</div>
			</section>

		</div>
	</div>
	<!-- End Grid Wrapper -->

	<!-- Start Footer -->
	<?php include 'footer.php'; ?>
	<!-- End Footer -->
</body>
</html>