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
						<p>It really is simple to get these buttons working. Just add the class <span class="highlight">simple-btn</span> and you are good to go. The default or primary button color is purple. 
						To change the color, just add a second class to the button element. </p>
					</div>
				</div>

				<div class="row">
					<button class="simple-btn primary-purple" href="#">Primary</button>
					<button class="simple-btn green-success" href="#">Success</button>
					<button class="simple-btn yellow-warning" href="#">Warning</button>
					<button class="simple-btn red-error" href="#">Error</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn primary-purple" href="#">/* Primary */</button>
		  				<button class="simple-btn green-success" href="#">/* Success */</button>
						<button class="simple-btn yellow-warning" href="#">/* Warning*/</button>
						<button class="simple-btn red-error" href="#">/* Error */</button>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Button Sizes</h2>
					<div class="showcase">
						<p>We have all the button sizes you will ever need. The width and height of each button is determined by the font size. 
						The smallest button or "Tiny Button" has a font size of 13px and the largest button or "Massive Button" has a font size of 30px. The "simple Button" has a font size of 18px.</p>
					</div>
				</div>

				<div class="row">
					<button class="simple-btn-xxxl primary-purple" href="#">Massive button</button>
					<button class="simple-btn-xxl primary-purple" href="#">Very large button</button>
					<button class="simple-btn-xl primary-purple" href="#">Large button</button>
					<button class="simple-btn primary-purple" href="#">Simple button</button>
				</div>

				<div class="row">
					<button class="simple-btn-xs primary-purple" href="#">Small button</button>
					<button class="simple-btn-xxs primary-purple" href="#">Very small button</button>
					<button class="simple-btn-xxxs primary-purple" href="#">Tiny button</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn-xxxl primary-purple" href="#">/* Massive button */</button>
		  				<button class="simple-btn-xxl primary-purple" href="#">/* Very large button */</button>
						<button class="simple-btn-xl primary-purple" href="#">/* Large button */</button>
						<button class="simple-btn primary-purple" href="#">/* Simple button */</button>
						<button class="simple-btn-xs primary-purple" href="#">/* Small button */</button>
						<button class="simple-btn-xxs primary-purple" href="#">/* Very small button */</button>
						<button class="simple-btn-xxxs primary-purple" href="#">/* Tiny button */</button>
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
					<button class="simple-btn-xl border-radius-all primary-purple" href="#">Rounded button all sides</button>
					<button class="simple-btn-xl border-radius-left-side primary-purple" href="#">Rounded button left side</button>
					<button class="simple-btn-xl border-radius-right-side primary-purple" href="#">Rounded button right side</button>
				</div>

				<div class="row">
					<button class="simple-btn-xl border-radius-top primary-purple" href="#">Rounded button top</button>
					<button class="simple-btn-xl border-radius-bottom primary-purple" href="#">Rounded button bottom</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn-xl border-radius-all primary-purple" href="#">/* Rounded button all sides */</button>
						<button class="simple-btn-xl border-radius-left-side primary-purple" href="#">/* Rounded button left side */</button>
						<button class="simple-btn-xl border-radius-right-side primary-purple" href="#">/* Rounded button right side */</button>
						<button class="simple-btn-xl border-radius-top primary-purple" href="#">/* Rounded button top */</button>
						<button class="simple-btn-xl border-radius-bottom primary-purple" href="#">/* Rounded button bottom */</button>
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
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
				</div>

				<div class="button-groups-rounded row">
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
					<button class="simple-btn primary-purple" href="#">Some Long Link</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				/* Square navigation */
		  				<div class="button-groups row">
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
						</div>

						/* Rounded navigation*/
						<div class="button-groups-rounded row">
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
							<button class="simple-btn primary-purple" href="#">/*Some Long Link*/</button>
						</div>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Full Width Buttons</h2>
					<div class="showcase">
						<p>Easily make your buttons stretch the full width of it's container element just by adding the class <span class="highlight">.btn-blc</span>. 
						Use this option if you don't want to rely on padding and font size to determine the width.</p>
					</div>
				</div>

				<div class="row">
					<div class="ctn-8">
						<div class="content-box">
							<h5 class="center">Some Title</h5>
							<p class="box-content">Lorem ipsum Officia exercitation nostrud veniam consequat proident.</p>
							<button class="simple-btn-xxs btn-blc primary-purple" href="#">Learn More</button>
						</div>
					</div>
					<div class="ctn-8">
						<div class="content-box">
							<h5 class="center">Some Title</h5>
							<p class="box-content">Lorem ipsum Officia exercitation nostrud veniam consequat proident.</p>
							<button class="simple-btn-xxs btn-blc primary-purple" href="#">Learn More</button>
						</div>
					</div>
					<div class="ctn-8">
						<div class="content-box">
							<h5 class="center">Some Title</h5>
							<p class="box-content">Lorem ipsum Officia exercitation nostrud veniam consequat proident.</p>
							<button class="simple-btn-xxs btn-blc primary-purple" href="#">Learn More</button>
						</div>
					</div>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn-xxs btn-blc primary-purple" href="#">/*Learn More*/</button>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Buttons With Icons</h2>
					<div class="showcase">
						<p>If you ever heard yourself saying "there is nothing like a nice shiny button with a nice fancy icon just begging to be clicked", no need to look any further.</p>
					</div>
				</div>

				<div class="row">
					<button class="simple-btn glyphicons wifi primary-purple" href="#">Join Network</button>
					<button class="simple-btn glyphicons user primary-purple" href="#">My Profile</button>
					<button class="simple-btn glyphicons calendar primary-purple" href="#">Choose Date</button>
					<button class="simple-btn glyphicons chat primary-purple" href="#">Chat Now</button>
					<button class="simple-btn glyphicons charts primary-purple" href="#">See Data</button>
					<button class="simple-btn glyphicons lock primary-purple" href="#">My Account</button>
				</div>

				<div class="row">
					<button class="simple-btn primary-purple" href="#">My Favorite <span class="glyphicons glyphicons heart"></span></button>
					<button class="simple-btn primary-purple" href="#">All Set <span class="glyphicons ok"></span></button>
					<button class="simple-btn primary-purple" href="#">My Settings <span class="glyphicons cogwheel"></span></button>
					<button class="simple-btn primary-purple" href="#">Need Help <span class="glyphicons circle_question_mark"></span></button>
					<button class="simple-btn primary-purple" href="#">My Cart <span class="glyphicons shopping_cart"></span></button>
					<button class="simple-btn primary-purple" href="#">My Waether <span class="glyphicons sun"></span></button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						/* Icon on  left */
						<button class="simple-btn glyphicons user primary-purple" href="#">/*My Profile*/</button>
						<button class="simple-btn glyphicons calendar primary-purple" href="#">/*Choose Date*/</button>
						<button class="simple-btn glyphicons chat primary-purple" href="#">/*Chat Now*/</button>
						<button class="simple-btn glyphicons charts primary-purple" href="#">/*See Data*/</button>
						<button class="simple-btn glyphicons lock primary-purple" href="#">/*My Account*/</button>

						/* Icon on  right*/
						<button class="simple-btn primary-purple" href="#">My Favorite <span class="glyphicons glyphicons heart"></span></button>
						<button class="simple-btn primary-purple" href="#">All Set <span class="glyphicons ok"></span></button>
						<button class="simple-btn primary-purple" href="#">My Settings <span class="glyphicons cogwheel"></span></button>
						<button class="simple-btn primary-purple" href="#">Need Help <span class="glyphicons circle_question_mark"></span></button>
						<button class="simple-btn primary-purple" href="#">My Cart <span class="glyphicons shopping_cart"></span></button>
						<button class="simple-btn primary-purple" href="#">My Waether <span class="glyphicons sun"></span></button>
					]]></script>
				</div>
			</section>
			
			<section>
				<div class="row">
					<h2>Button Hover States</h2>
					<div class="showcase">
						<p>Sometimes you need more than just the default "hand" when hovering over your buttons. No need to worry. Here are more than enough options for you to choose from.</p>
					</div>
				</div>

				<div class="row button-hover-states">
					<button class="simple-btn auto primary-purple" href="#">Auto</button>
					<button class="simple-btn default primary-purple" href="#">Default</button>
					<button class="simple-btn none primary-purple" href="#">None</button>
					<button class="simple-btn context-menu primary-purple" href="#">Context-Menu</button>
					<button class="simple-btn help primary-purple" href="#">Help</button>
					<button class="simple-btn pointer primary-purple" href="#">Pointer</button>
					<button class="simple-btn progress primary-purple" href="#">Progress</button>
					<button class="simple-btn wait primary-purple" href="#">Wait</button>
					<button class="simple-btn cell primary-purple" href="#">Cell</button>
					<button class="simple-btn crosshair primary-purple" href="#">Crosshair</button>
				</div>
				
				<div class="row button-hover-states">
					<button class="simple-btn text primary-purple" href="#">Text</button>
					<button class="simple-btn vertical-text primary-purple" href="#">Vertical Text</button>
					<button class="simple-btn alias primary-purple" href="#">Alias</button>
					<button class="simple-btn copy primary-purple" href="#">Copy</button>
					<button class="simple-btn move primary-purple" href="#">Move</button>
					<button class="simple-btn no-drop primary-purple" href="#">No Drop</button>
					<button class="simple-btn not-allowed primary-purple" href="#">Not Allowed</button>
					<button class="simple-btn all-scroll primary-purple" href="#">All Scroll</button>
					<button class="simple-btn col-resize primary-purple" href="#">Coll Resize</button>
				</div>

				<div class="row button-hover-states">
					<button class="simple-btn row-resize primary-purple" href="#">Row Resize</button>
					<button class="simple-btn n-resize primary-purple" href="#">N Resize</button>
					<button class="simple-btn e-resize primary-purple" href="#">E Resize</button>
					<button class="simple-btn s-resize primary-purple" href="#">S Resize</button>
					<button class="simple-btn w-resize primary-purple" href="#">W Resize</button>
					<button class="simple-btn ns-resize primary-purple" href="#">NS Resize</button>
					<button class="simple-btn ew-resize primary-purple" href="#">EW Resize</button>
					<button class="simple-btn ne-resize primary-purple" href="#">NE Resize</button>
				</div>

				<div class="row button-hover-states">
					<button class="simple-btn nw-resize primary-purple" href="#">NW Resize</button>
					<button class="simple-btn se-resize primary-purple" href="#">SE Resize</button>
					<button class="simple-btn sw-resize primary-purple" href="#">SW Resize</button>
					<button class="simple-btn nesw-resize primary-purple" href="#">NESW Resize</button>
					<button class="simple-btn nwse-resize primary-purple" href="#">NWSE Resize</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<button class="simple-btn auto primary-purple" href="#">/*Auto*/</button>
						<button class="simple-btn default primary-purple" href="#">/*Default*/</button>
						<button class="simple-btn none primary-purple" href="#">/*None*/</button>
						<button class="simple-btn context-menu primary-purple" href="#">/*Context-Menu*/</button>
						<button class="simple-btn help primary-purple" href="#">/*Help*/</button>
						<button class="simple-btn pointer primary-purple" href="#">/*Pointer*/</button>
						<button class="simple-btn progress primary-purple" href="#">/*Progress*/</button>
						<button class="simple-btn wait primary-purple" href="#">/*Wait*/</button>
						<button class="simple-btn cell primary-purple" href="#">/*Cell*/</button>
						<button class="simple-btn crosshair primary-purple" href="#">/*Crosshair*/</button>

						<button class="simple-btn text primary-purple" href="#">/*Text*/</button>
						<button class="simple-btn vertical-text primary-purple" href="#">/*Vertical Text*/</button>
						<button class="simple-btn alias primary-purple" href="#">/*Alias*/</button>
						<button class="simple-btn copy primary-purple" href="#">/*Copy*/</button>
						<button class="simple-btn move primary-purple" href="#">/*Move*/</button>
						<button class="simple-btn no-drop primary-purple" href="#">/*No Drop*/</button>
						<button class="simple-btn not-allowed primary-purple" href="#">/*Not Allowed*/</button>
						<button class="simple-btn all-scroll primary-purple" href="#">/*All Scroll*/</button>
						<button class="simple-btn col-resize primary-purple" href="#">/*Coll Resize*/</button>

						<button class="simple-btn row-resize primary-purple" href="#">/*Row Resize*/</button>
						<button class="simple-btn n-resize primary-purple" href="#">/*N Resize*/</button>
						<button class="simple-btn e-resize primary-purple" href="#">/*E Resize*/</button>
						<button class="simple-btn s-resize primary-purple" href="#">/*S Resize*/</button>
						<button class="simple-btn w-resize primary-purple" href="#">/*W Resize*/</button>
						<button class="simple-btn ns-resize primary-purple" href="#">/*NS Resize*/</button>
						<button class="simple-btn ew-resize primary-purple" href="#">/*EW Resize*/</button>
						<button class="simple-btn ne-resize primary-purple" href="#">/*NE Resize*/</button>

						<button class="simple-btn nw-resize primary-purple" href="#">/*NW Resize*/</button>
						<button class="simple-btn se-resize primary-purple" href="#">/*SE Resize*/</button>
						<button class="simple-btn sw-resize primary-purple" href="#">/*SW Resize*/</button>
						<button class="simple-btn nesw-resize primary-purple" href="#">/*NESW Resize*/</button>
						<button class="simple-btn nwse-resize primary-purple" href="#">/*NWSE Resize*/</button>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Disabled Buttons</h2>
					<div class="showcase">
						<p>Sometimes you may wan't to disable your buttons so no action can be taken by the user. No need to worry. We have you covered.</p>
					</div>
				</div>

				<div class="row">
					<button class="simple-btn primary-purple"  disabled="disabled" href="#">Disabled Button</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<button class="simple-btn primary-purple"  disabled="disabled" href="#">/*Disabled Button*/</button>
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