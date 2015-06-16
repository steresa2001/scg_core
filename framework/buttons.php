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
						<p>It really is simple to get these buttons working. Just add the class simple-btn and you are good to go. The default or primary button color is purple. 
						To change the color, just add a second class to the button element. </p>
					</div>
				</div>

				<div class="row">
					<button class="simple-btn" href="#">Primary</button>
					<button class="simple-btn green-success" href="#">Success</button>
					<button class="simple-btn yellow-warning" href="#">Warning</button>
					<button class="simple-btn red-error" href="#">Error</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn" href="#">/* Primary */</button>
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
					<button class="simple-btn-xxxl" href="#">Massive button</button>
					<button class="simple-btn-xxl" href="#">Very large button</button>
					<button class="simple-btn-xl" href="#">Large button</button>
					<button class="simple-btn" href="#">Simple button</button>
				</div>

				<div class="row">
					<button class="simple-btn-xs" href="#">Small button</button>
					<button class="simple-btn-xxs" href="#">Very small button</button>
					<button class="simple-btn-xxxs" href="#">Tiny button</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn-xxxl" href="#">/* Massive button */</button>
		  				<button class="simple-btn-xxl" href="#">/* Very large button */</button>
						<button class="simple-btn-xl" href="#">/* Large button */</button>
						<button class="simple-btn" href="#">/* Simple button */</button>
						<button class="simple-btn-xs" href="#">/* Small button */</button>
						<button class="simple-btn-xxs" href="#">/* Very small button */</button>
						<button class="simple-btn-xxxs" href="#">/* Tiny button */</button>
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
					<button class="simple-btn-xl btn-radius-all" href="#">Rounded button all sides</button>
					<button class="simple-btn-xl btn-radius-left-side" href="#">Rounded button left side</button>
					<button class="simple-btn-xl btn-radius-right-side" href="#">Rounded button right side</button>
				</div>

				<div class="row">
					<button class="simple-btn-xl btn-radius-top" href="#">Rounded button top</button>
					<button class="simple-btn-xl btn-radius-bottom" href="#">Rounded button bottom</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn-xl btn-radius-all" href="#">/* Rounded button all sides */</button>
						<button class="simple-btn-xl btn-radius-left-side" href="#">/* Rounded button left side */</button>
						<button class="simple-btn-xl btn-radius-right-side" href="#">/* Rounded button right side */</button>
						<button class="simple-btn-xl btn-radius-top" href="#">/* Rounded button top */</button>
						<button class="simple-btn-xl btn-radius-bottom" href="#">/* Rounded button bottom */</button>
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
					<button class="simple-btn" href="#">Some Long Link</button>
					<button class="simple-btn" href="#">Some Long Link</button>
					<button class="simple-btn" href="#">Some Long Link</button>
					<button class="simple-btn" href="#">Some Long Link</button>
				</div>

				<div class="button-groups-rounded row">
					<button class="simple-btn" href="#">Some Long Link</button>
					<button class="simple-btn" href="#">Some Long Link</button>
					<button class="simple-btn" href="#">Some Long Link</button>
					<button class="simple-btn" href="#">Some Long Link</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				/* Square navigation */
		  				<div class="button-groups row">
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
						</div>

						/* Rounded navigation*/
						<div class="button-groups-rounded row">
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
							<button class="simple-btn" href="#">/*Some Long Link*/</button>
						</div>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Full Width Buttons</h2>
					<div class="showcase">
						<p>Easily make your buttons stretch the full width of it's container element just by adding the class <strong>.btn-blc</strong>. 
						Use this option if you don't want to rely on padding and font size to determine the width.</p>
					</div>
				</div>

				<div class="row">
					<div class="ctn-8">
						<div class="content-box">
							<h5 class="center">Some Title</h5>
							<p class="box-content">Lorem ipsum Officia exercitation nostrud veniam consequat proident.</p>
							<button class="simple-btn-xxs btn-blc" href="#">Learn More</button>
						</div>
					</div>
					<div class="ctn-8">
						<div class="content-box">
							<h5 class="center">Some Title</h5>
							<p class="box-content">Lorem ipsum Officia exercitation nostrud veniam consequat proident.</p>
							<button class="simple-btn-xxs btn-blc" href="#">Learn More</button>
						</div>
					</div>
					<div class="ctn-8">
						<div class="content-box">
							<h5 class="center">Some Title</h5>
							<p class="box-content">Lorem ipsum Officia exercitation nostrud veniam consequat proident.</p>
							<button class="simple-btn-xxs btn-blc" href="#">Learn More</button>
						</div>
					</div>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
		  				<button class="simple-btn-xxs btn-blc" href="#">/*Learn More*/</button>
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
					<button class="simple-btn glyphicons wifi" href="#">Join Network</button>
					<button class="simple-btn glyphicons user" href="#">My Profile</button>
					<button class="simple-btn glyphicons calendar" href="#">Choose Date</button>
					<button class="simple-btn glyphicons chat" href="#">Chat Now</button>
					<button class="simple-btn glyphicons charts" href="#">See Data</button>
					<button class="simple-btn glyphicons lock" href="#">My Account</button>
				</div>

				<div class="row">
					<button class="simple-btn" href="#">My Favorite <span class="glyphicons glyphicons heart"></span></button>
					<button class="simple-btn" href="#">All Set <span class="glyphicons ok"></span></button>
					<button class="simple-btn" href="#">My Settings <span class="glyphicons cogwheel"></span></button>
					<button class="simple-btn" href="#">Need Help <span class="glyphicons circle_question_mark"></span></button>
					<button class="simple-btn" href="#">My Cart <span class="glyphicons shopping_cart"></span></button>
					<button class="simple-btn" href="#">My Waether <span class="glyphicons sun"></span></button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						/* Icon on  left */
						<button class="simple-btn glyphicons user" href="#">/*My Profile*/</button>
						<button class="simple-btn glyphicons calendar" href="#">/*Choose Date*/</button>
						<button class="simple-btn glyphicons chat" href="#">/*Chat Now*/</button>
						<button class="simple-btn glyphicons charts" href="#">/*See Data*/</button>
						<button class="simple-btn glyphicons lock" href="#">/*My Account*/</button>

						/* Icon on  right*/
						<button class="simple-btn" href="#">My Favorite <span class="glyphicons glyphicons heart"></span></button>
						<button class="simple-btn" href="#">All Set <span class="glyphicons ok"></span></button>
						<button class="simple-btn" href="#">My Settings <span class="glyphicons cogwheel"></span></button>
						<button class="simple-btn" href="#">Need Help <span class="glyphicons circle_question_mark"></span></button>
						<button class="simple-btn" href="#">My Cart <span class="glyphicons shopping_cart"></span></button>
						<button class="simple-btn " href="#">My Waether <span class="glyphicons sun"></span></button>
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
					<button class="simple-btn auto" href="#">Auto</button>
					<button class="simple-btn default" href="#">Default</button>
					<button class="simple-btn none" href="#">None</button>
					<button class="simple-btn context-menu" href="#">Context-Menu</button>
					<button class="simple-btn help" href="#">Help</button>
					<button class="simple-btn pointer" href="#">Pointer</button>
					<button class="simple-btn progress" href="#">Progress</button>
					<button class="simple-btn wait" href="#">Wait</button>
					<button class="simple-btn cell" href="#">Cell</button>
					<button class="simple-btn crosshair" href="#">Crosshair</button>
				</div>
				
				<div class="row button-hover-states">
					<button class="simple-btn text" href="#">Text</button>
					<button class="simple-btn vertical-text" href="#">Vertical Text</button>
					<button class="simple-btn alias" href="#">Alias</button>
					<button class="simple-btn copy" href="#">Copy</button>
					<button class="simple-btn move" href="#">Move</button>
					<button class="simple-btn no-drop" href="#">No Drop</button>
					<button class="simple-btn not-allowed" href="#">Not Allowed</button>
					<button class="simple-btn all-scroll" href="#">All Scroll</button>
					<button class="simple-btn col-resize" href="#">Coll Resize</button>
				</div>

				<div class="row button-hover-states">
					<button class="simple-btn row-resize" href="#">Row Resize</button>
					<button class="simple-btn n-resize" href="#">N Resize</button>
					<button class="simple-btn e-resize" href="#">E Resize</button>
					<button class="simple-btn s-resize" href="#">S Resize</button>
					<button class="simple-btn w-resize" href="#">W Resize</button>
					<button class="simple-btn ns-resize" href="#">NS Resize</button>
					<button class="simple-btn ew-resize" href="#">EW Resize</button>
					<button class="simple-btn ne-resize" href="#">NE Resize</button>
				</div>

				<div class="row button-hover-states">
					<button class="simple-btn nw-resize" href="#">NW Resize</button>
					<button class="simple-btn se-resize" href="#">SE Resize</button>
					<button class="simple-btn sw-resize" href="#">SW Resize</button>
					<button class="simple-btn nesw-resize" href="#">NESW Resize</button>
					<button class="simple-btn nwse-resize" href="#">NWSE Resize</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<button class="simple-btn auto" href="#">/*Auto*/</button>
						<button class="simple-btn default" href="#">/*Default*/</button>
						<button class="simple-btn none" href="#">/*None*/</button>
						<button class="simple-btn context-menu" href="#">/*Context-Menu*/</button>
						<button class="simple-btn help" href="#">/*Help*/</button>
						<button class="simple-btn pointer" href="#">/*Pointer*/</button>
						<button class="simple-btn progress" href="#">/*Progress*/</button>
						<button class="simple-btn wait" href="#">/*Wait*/</button>
						<button class="simple-btn cell" href="#">/*Cell*/</button>
						<button class="simple-btn crosshair" href="#">/*Crosshair*/</button>

						<button class="simple-btn text" href="#">/*Text*/</button>
						<button class="simple-btn vertical-text" href="#">/*Vertical Text*/</button>
						<button class="simple-btn alias" href="#">/*Alias*/</button>
						<button class="simple-btn copy" href="#">/*Copy*/</button>
						<button class="simple-btn move" href="#">/*Move*/</button>
						<button class="simple-btn no-drop" href="#">/*No Drop*/</button>
						<button class="simple-btn not-allowed" href="#">/*Not Allowed*/</button>
						<button class="simple-btn all-scroll" href="#">/*All Scroll*/</button>
						<button class="simple-btn col-resize" href="#">/*Coll Resize*/</button>

						<button class="simple-btn row-resize" href="#">/*Row Resize*/</button>
						<button class="simple-btn n-resize" href="#">/*N Resize*/</button>
						<button class="simple-btn e-resize" href="#">/*E Resize*/</button>
						<button class="simple-btn s-resize" href="#">/*S Resize*/</button>
						<button class="simple-btn w-resize" href="#">/*W Resize*/</button>
						<button class="simple-btn ns-resize" href="#">/*NS Resize*/</button>
						<button class="simple-btn ew-resize" href="#">/*EW Resize*/</button>
						<button class="simple-btn ne-resize" href="#">/*NE Resize*/</button>

						<button class="simple-btn nw-resize" href="#">/*NW Resize*/</button>
						<button class="simple-btn se-resize" href="#">/*SE Resize*/</button>
						<button class="simple-btn sw-resize" href="#">/*SW Resize*/</button>
						<button class="simple-btn nesw-resize" href="#">/*NESW Resize*/</button>
						<button class="simple-btn nwse-resize" href="#">/*NWSE Resize*/</button>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Disabled Button</h2>
					<div class="showcase">
						<p>Sometimes you may wan't to disable your buttons so no action can be taken by the user. No need to worry. We have you covered.</p>
					</div>
				</div>

				<div class="row">
					<button class="simple-btn"  disabled="disabled" href="#">Disabled Button</button>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<button class="simple-btn"  disabled="disabled" href="#">/*Disabled Button*/</button>
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