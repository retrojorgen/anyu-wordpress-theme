<?php get_header(); ?>

	<?php global $wp_query;
	query_posts(
		array_merge(
			array('category_name' => 'Frontpage', 'order' => 'ASC'),
			$wp_query->query
		)
	);

	?>
<div class="hero">
	<div class="hero-content">
		<div class="left-col">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/anyu-hero-clean.jpg">
		</div>
		<div class="right-col">	
			<h1>Senter for <span class="header-highlight">helse</span><br> og <span class="header-highlight">livsmestring</span></h1>
			<div class="action-buttons">
				<p>For time eller konsultasjon</p>
				<a href="https://www.facebook.com/anyuklinikken/" class="facebook-like">Vår facebookside</a>
				<a href="online-booking/" class="hero-online-booking">Book online</a>
				<div class="call-us">Eller ring 40670885</div>
			</div>
		</div>
	</div>
</div>
<div class="frontpage-articles">
	<div class="introduction section">
		<div class="info-section">
			<h3>Velkommen til Anyu klinikken</h3>
			<p>Anyu klinikken er en klinikk i Lørenskog som tilbyr akupunktur – IMS-, triggerpunkts- og øreakupunktur, idrettsmassasje, kinesiologi og hjelp til selvhjelp i form av livsveiledning og kurs i medisinsk qigong.</p>
		</div>
		<div class="illustration-section"><img src="<?php echo get_template_directory_uri(); ?>/library/images/anyu-accupuncture.jpg"></div>
	</div>
	<div class="photo-section">
		<img class="photo-background" src="<?php echo get_template_directory_uri(); ?>/library/images/anyu-big-back.jpg">
		<div class="info-section">
			<h3>Akupunktør Ildiko er spesialist innen smerteproblematikk og helseproblemer hos kvinner.</h3>
			<p>Vi behandler blant annet Muskel og skjelettlidelser, hodepine, stress og slitenhet og plager og smerter i forbindelse med menstruasjon</p>
		</div>
	</div>
	<div class="introduction section">
		<div class="info-section">
			<h3>Gravid, eller planlegger å bli det?</h3>
			<p>Vi behandler plager i svangerskapet som kvalme og halsbrann samt fødselsforberende behandling.</p>
			<p>Vi behandler også par som har problemer med å bli gravide.</p>
		</div>
		<div class="illustration-section"><img src="<?php echo get_template_directory_uri(); ?>/library/images/anyu-pregnant.jpg"></div>
	</div>
	<div class="photo-section left light">
		<img class="photo-background" src="<?php echo get_template_directory_uri(); ?>/library/images/anyu-other-treatments.jpg">
		<div class="info-section">
			<h3>Sliter du med en plage? Sesongbetont?</h3>
			<p>Vi behandler en rekke plager i forbindelse med overgangsalder, sesongbetonte luftveisplager, mageproblemer, søvn, og nedstemthet.</p>
			<p>Lurer du på om vi kan hjelpe deg med din plage? Ta kontakt på tlf 40670885, eller send en melding på <a href="https://www.facebook.com/anyuklinikken/">vår facebook-side.</a></p>
		</div>
	</div>
	<div class="section video">
		<div class="info-section">
			<h3>Har du spørsmål rundt vår behandling?</h3>
			<p>I denne korte videoen forklarer vår behandler Ildiko Balog om hvorfor fler og fler benytter seg av smerte og plage-behandling ved akupunktur.</p>
		</div>
		<div class="illustration-section">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/jUNaTrBznDY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		</div>
	</div>
</div>
<?php get_footer(); ?>