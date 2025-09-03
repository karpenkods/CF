document.addEventListener('DOMContentLoaded', () => {
	const links = document.querySelectorAll('a');
	links.forEach(link => {
		link.addEventListener('click', (event) => {
			event.preventDefault();
			document.getElementById('scrollhere').scrollIntoView({ behavior: 'smooth' });
		});
	});
});