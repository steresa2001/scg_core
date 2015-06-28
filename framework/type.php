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
				<h1>Clean, consistent styles for your content</h1>
			</div>

			<section>
				<div class="row">
					<h2>Headings</h2>
					<div class="showcase">
						<p>Headings are a very important piece of your content hierarchy. They can help a user navigate through content effectively. You now have the option to use headings from H1 to H6.</p>
					</div>
				</div>

				<div class="row no-style">
					<h1>h1 - Ain't gonna be no rematch </h1>
					<h2>h2 - Yo... It's cold outside, Paulie</h2>
					<h3>h3 - Yea, to you it's Thanksgiving; to me it's Thursday</h3>
					<h4>h4 - Where did you get the name, "The Italian Stallion"?</h4>
					<h5>h5 - Yeah, and I'm running a business here, not a goddamn soup kitchen</h5>
					<h6>h6 - I think we make a real sharp couple of coconuts</h6>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<h1>/*h1 - Ain't gonna be no rematch*/</h1>
						<h2>/*h2 - Yo... It's cold outside, Paulie*/</h2>
						<h3>/*h3 - Yea, to you it's Thanksgiving; to me it's Thursday*/</h3>
						<h4>/*h4 - Where did you get the name, "The Italian Stallion"?*/</h4>
						<h5>/*h5 - Yeah, and I'm running a business here, not a goddamn soup kitchen*/</h5>
						<h6>/*h6 - I think we make a real sharp couple of coconuts*/</h6>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Subheadings</h2>
					<div class="showcase">
						<p>Subheadings are available to use for  H1, H2 and H3 elements. For example, if you want to add a subheading for your H1 element, 
						just add a small tag inside your h1 tag. To display the subheading underneath the heading, just add the class <span class="highlight">block</span> to the small tag.</p>
					</div>
				</div>

				<div class="row no-style">
					<h1>Everyone has a favorite saying: <small>Mine is Cowabunga</small></h1>
					<h2>Odd question: <small>Do you like penicillin on your pizza?</small></h2>
					<h3>People see strange things: <small>Looked like sort of a big turtle, in a trench coat</small></h3>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<h1>/*Everyone has a favorite saying: <small>Mine is Cowabunga</small>*/</h1>
						<h2>/*Odd question: <small>Do you like penicillin on your pizza?</small>*/</h2>
						<h3>/*People see strange things: <small class="block">Looked like sort of a big turtle, in a trench coat.</small>*/</h3>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Paragraphs</h2>
					<div class="showcase">
						<p>Ohh, just look at those beautiful paragraphs. Paragraphs have built in line height and padding to allow for a more enjoyable reading experience.</p>
					</div>
				</div>
				
				<h4>Left Aligned</h4>
				<div class="row no-style">
					<p class="left-aligned">What is real? How do you define 'real'? If you're talking about what you can feel, what you can smell, what you can taste and see, then 'real' is simply electrical signals interpreted by your brain.</p>
				</div>

				<h4>Right Aligned</h4>
				<div class="row no-style">
					<p class="right-aligned">Have you ever had a dream, Neo, that you were so sure was real? What if you were unable to wake from that dream? How would you know the difference between the dream world and the real world?</p>
				</div>

				<h4>Center Aligned</h4>
				<div class="row no-style">
					<p class="centered-aligned">I see it in your eyes. You have the look of a man who accepts what he sees because he is expecting to wake up. Ironically, that's not far from the truth. Do you believe in fate, Neo?</p>
				</div>

				<h4>Justified</h4>
				<div class="row no-style">
					<p class="justified">This is your last chance. After this, there is no turning back. You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe. 
					You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.</p>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<p class="left-aligned">/*Your content*/</p>
						<p class="right-aligned">/*Your content*/</p>
						<p class="centered-aligned">/*Your content*/</p>
						<p class="justified">/*Your content*/</p>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Lists</h2>
					<div class="showcase">
						<p>Lists are very helpful in organizing your content especially if you have a content heavy web site. We have just about every style of lists you will ever need.</p>
					</div>
				</div>
				
				<h4>Styled List</h4>
				<div class="row no-style">
					<ul>
						<li>You can be my wingman any time</li>
						<li>Gutsiest move I ever saw, Mav</li>
						<li>I'm gonna hit the brakes, he'll fly right by
							<ul class="styled-list-circle">
								<li>He can't be a dog. He drives a car and wears a hat</li>
								<li>Chopper! Sic'em, boy!</li>
								<li>Don't call me any of your mother's pet names
									<ul class="styled-list-square">
										<li>Silly Caucasian girl likes to play with Samurai swords</li>
										<li>That really was a Hattori Hanzo sword</li>
										<li>I didn't say "sell me", I said "give me"</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<ul>
							<li>/*You can be my wingman any time*/</li>
							<li>/*Gutsiest move I ever saw, Mav*/</li>
							<li>/*I'm gonna hit the brakes, he'll fly right by*/
								<ul class="styled-list-circle">
									<li>/*He can't be a dog. He drives a car and wears a hat*/</li>
									<li>/*Chopper! Sic'em, boy!*/</li>
									<li>/*Don't call me any of your mother's pet names*/
										<ul class="styled-list-square">
											<li>/*Silly Caucasian girl likes to play with Samurai swords*/</li>
											<li>/*That really was a Hattori Hanzo sword*/</li>
											<li>/*I didn't say "sell me", I said "give me"*/</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					]]></script>
				</div>

				<h4>Unstyled List</h4>
				<div class="row no-style">
					<ul class="unstyled-list">
						<li>You couldn't hear a dump truck driving through a nitroglycerin plant</li>
						<li>Oh dear, did I break wind?</li>
						<li>I'm sorry. This is our family's first kidnapping
							<ul class="unstyled-list">
								<li>Uh oh, fifteen minutes to Judge Wapner</li>
								<li>Gotta get my boxer shorts at K-Mart</li>
								<li>Of course you can't have pancakes without maple syrup</li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<ul class="unstyled-list">
							<li>/*You couldn't hear a dump truck driving through a nitroglycerin plant*/</li>
							<li>/*Oh dear, did I break wind?*/</li>
							<li>/*I'm sorry. This is our family's first kidnapping*/
								<ul class="unstyled-list">
									<li>/*Uh oh, fifteen minutes to Judge Wapner*/</li>
									<li>/*Gotta get my boxer shorts at K-Mart*/</li>
									<li>/*Of course you can't have pancakes without maple syrup*/</li>
								</ul>
							</li>
						</ul>
					]]></script>
				</div>

				<h4>Ordered List</h4>
				<div class="row no-style">
					<ol>
						<li>Goonies never say die!</li>
						<li>So... that's why they call you One-Eyed Willie... One-Eyed Willie</li>
						<li>Ruth! Ruth! Baby! Ruth!
							<ol class="styled-list-upper-alpha">
								<li>Run, Forrest! Run!</li>
								<li>Me and Jenny goes together like peas and carrots</li>
								<li>I was born with big gums, sir
									<ol class="styled-list-lower-alpha">
										<li>Here's to swimmin' with bow-legged women</li>
										<li>It's only an island if you look at it from the water</li>
										<li>I'm not going to waste my time arguing with a man who's lining up to be a hot lunch
											<ol class="styled-list-upper-roman">
												<li>What are you looking at, nerd?</li>
												<li>Excuse please, but why do they call you "booger"?</li>
												<li>You're *jocks*! Go live in the gym!
													<ol class="styled-list-lower-roman">
														<li>When you pray for rain, you gotta deal with the mud too</li>
														<li>I don't have a lot of time. Which means you don't have any</li>
														<li>Man gotta be the man, fish gotta be the fish</li>
													</ol>
												</li>
											</ol>
										</li>
									</ol>
								</li>
							</ol>
						</li>
					</ol>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<ol>
							<li>/*Goonies never say die!*/</li>
							<li>/*So... that's why they call you One-Eyed Willie... One-Eyed Willie*/</li>
							<li>/*Ruth! Ruth! Baby! Ruth!*/
								<ol class="styled-list-upper-alpha">
									<li>/*Run, Forrest! Run!*/</li>
									<li>/*Me and Jenny goes together like peas and carrots*/</li>
									<li>/*I was born with big gums, sir*/
										<ol class="styled-list-lower-alpha">
											<li>/*Here's to swimmin' with bow-legged women*/</li>
											<li>/*It's only an island if you look at it from the water*/</li>
											<li>/*I'm not going to waste my time arguing with a man who's lining up to be a hot lunch*/
												<ol class="styled-list-upper-roman">
													<li>/*What are you looking at, nerd?*/</li>
													<li>/*Excuse please, but why do they call you "booger"?*/</li>
													<li>/*You're *jocks*! Go live in the gym!*/
														<ol class="styled-list-lower-roman">
															<li>/*When you pray for rain, you gotta deal with the mud too*/</li>
															<li>/*I don't have a lot of time. Which means you don't have any*/</li>
															<li>/*Man gotta be the man, fish gotta be the fish*/</li>
														</ol>
													</li>
												</ol>
											</li>
										</ol>
									</li>
								</ol>
							</li>
						</ol>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Blockquotes</h2>
					<div class="showcase">
						<p>Sometimes you just really want to express your thoughts but might not know exactly how or what to say. You never can go wrong using a quote from someone else.</p>
					</div>
				</div>
				
				<div class="ctn-12">
					<blockquote>
						The scientists of today think deeply instead of clearly. One must be sane to think clearly, but one can think deeply and be quite insane.
						<cite>Nikola Tesla</cite>
					</blockquote>
				</div>

				<div class="ctn-12">
					<blockquote>
						Nature is the source of all true knowledge. She has her own logic, her own laws, she has no effect without cause nor invention without necessity.
						<cite>Leonardo da Vinci</cite>
					</blockquote>
				</div>

				<div class="row">
					<script type="syntaxhighlighter" class="brush: js ctns-24"><![CDATA[
						<blockquote>
							/*The scientists of today think deeply instead of clearly. One must be sane to think clearly, but one can think deeply and be quite insane.*/
							<cite>/*Nikola Tesla*/</cite>
						</blockquote>
					]]></script>
				</div>
			</section>

			<section>
				<div class="row">
					<h2>Tables</h2>
					<div class="showcase">
						<p>In the past, tables were used to build everything for the web. Today, the div element has happly replaced tables. However, tables are still the way to go for displaying tabular data.</p>
					</div>
				</div>

				<div class="row no-style">
					<table>
						<thead>
							<tr>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
								<th>Heading</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Some content</td>
								<td>Some content</td>
								<td>Some content</td>
								<td>Some content</td>
							</tr>
							<tr>
								<td>Some very very very long content</td>
								<td>Some very very very long content</td>
								<td>Some very very very long content</td>
								<td>Some very very very long content</td>
							</tr>
							<tr>
								<td>Some content</td>
								<td>Some content</td>
								<td>Some content</td>
								<td>Some content</td>
							</tr>
						</tbody>
					</table>
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