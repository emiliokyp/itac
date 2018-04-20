<section id="sub-hero" class="sub-hero">
<script>
	let subHero = document.querySelector('#sub-hero');
	if(window.location.pathname === '/pricing') {
		subHero.classList.add('sub-pricing');
	} else if (window.location.pathname === '/case-studies') {
		subHero.classList.add('sub-case-studies');
	}
</script>
</section>