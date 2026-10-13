/**
 * Fitvia theme interactions.
 *
 * Scroll reveals, animated counters, back-to-top button.
 * All motion is disabled when the user prefers reduced motion.
 */
(function () {
	'use strict';

	var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---------- Scroll reveal ---------- */
	var revealEls = document.querySelectorAll('.fitvia-reveal');

	if (revealEls.length && !reduceMotion && 'IntersectionObserver' in window) {
		var revealObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					revealObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.12 });

		revealEls.forEach(function (el) {
			revealObserver.observe(el);
		});
	} else {
		revealEls.forEach(function (el) {
			el.classList.add('is-visible');
		});
	}

	/* ---------- Animated counters ---------- */
	var counters = document.querySelectorAll('.fitvia-count');

	function animateCount(el) {
		var target = parseInt(el.getAttribute('data-count'), 10) || 0;
		var suffix = el.getAttribute('data-suffix') || '';
		var duration = 1600;
		var start = null;

		if (reduceMotion) {
			el.textContent = target.toLocaleString('en-US') + suffix;
			return;
		}

		function step(timestamp) {
			if (!start) {
				start = timestamp;
			}
			var progress = Math.min((timestamp - start) / duration, 1);
			/* Ease out cubic. */
			var eased = 1 - Math.pow(1 - progress, 3);
			el.textContent = Math.round(target * eased).toLocaleString('en-US') + suffix;
			if (progress < 1) {
				window.requestAnimationFrame(step);
			}
		}

		window.requestAnimationFrame(step);
	}

	if (counters.length && 'IntersectionObserver' in window) {
		var countObserver = new IntersectionObserver(function (entries) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					animateCount(entry.target);
					countObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.4 });

		counters.forEach(function (el) {
			el.classList.add('is-visible');
			countObserver.observe(el);
		});
	} else {
		counters.forEach(animateCount);
	}

	/* ---------- Back to top ---------- */
	var toTop = document.createElement('button');
	toTop.className = 'fitvia-to-top';
	toTop.setAttribute('type', 'button');
	toTop.setAttribute('aria-label', 'Back to top');
	toTop.innerHTML = '&uarr;';
	document.body.appendChild(toTop);

	toTop.addEventListener('click', function () {
		window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
	});

	window.addEventListener('scroll', function () {
		if (window.scrollY > 600) {
			toTop.classList.add('is-visible');
		} else {
			toTop.classList.remove('is-visible');
		}
	}, { passive: true });
})();
