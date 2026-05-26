(function () {

    /* ── Pop-card scroll animation ── */
    function initPopCards() {
        var cards = document.querySelectorAll('.pop-card');
        if (!cards.length) return;

        cards.forEach(function (card) {
            var siblings = Array.prototype.slice.call(
                card.parentElement.querySelectorAll('.pop-card')
            );
            card.setAttribute('data-pop-delay', siblings.indexOf(card) * 120);
        });

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var card = entry.target;
                    var delay = parseInt(card.getAttribute('data-pop-delay')) || 0;
                    setTimeout(function () { card.classList.add('is-popped'); }, delay);
                    observer.unobserve(card);
                }
            });
        }, { threshold: 0.15 });

        cards.forEach(function (card) { observer.observe(card); });

        document.addEventListener('animationend', function (e) {
            if (e.animationName === 'pop-card-anim') {
                e.target.classList.add('pop-card-done');
                e.target.classList.remove('is-popped');
            }
        });
    }

    /* ── Scroll reveal (text + layout) ── */
    function initReveal() {
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

        function tag(el, dir, delay) {
            if (!el || el.hasAttribute('data-reveal')) return;
            el.setAttribute('data-reveal', dir);
            if (delay) el.setAttribute('data-reveal-delay', String(delay));
        }

        document.querySelectorAll('.section-subtitle').forEach(function (el) {
            if (!el.closest('.hero-section')) tag(el, 'up', 0);
        });
        document.querySelectorAll('.section-title').forEach(function (el) {
            tag(el, 'up', 90);
        });

        document.querySelectorAll('.who-text').forEach(function (el) { tag(el, 'left', 0); });
        document.querySelectorAll('.who-images-wrapper').forEach(function (el) { tag(el, 'right', 120); });

        document.querySelectorAll('.stats-bar > div').forEach(function (el, i) {
            tag(el, 'up', i * 100);
        });

        document.querySelectorAll('section .text-center').forEach(function (block) {
            if (block.closest('.hero-section') || block.closest('.onboarding-section')) return;
            Array.prototype.slice.call(block.children).forEach(function (child, i) {
                tag(child, 'up', i * 120);
            });
        });

        document.querySelectorAll('section h2, section h3').forEach(function (el) {
            if (
                el.closest('.hero-section') ||
                el.closest('.onboarding-section') ||
                el.closest('.text-center') ||
                el.closest('.pop-card') ||
                el.classList.contains('section-title') ||
                el.classList.contains('section-subtitle')
            ) return;
            tag(el, 'up', 0);
        });

        document.querySelectorAll('section p').forEach(function (el) {
            if (
                el.closest('.pop-card') ||
                el.closest('.text-center') ||
                el.closest('.hero-section') ||
                el.closest('.onboarding-section') ||
                el.closest('footer') ||
                el.classList.contains('section-subtitle')
            ) return;
            tag(el, 'up', 150);
        });

        document.querySelectorAll('section .flex-col-1024').forEach(function (flex) {
            if (
                flex.classList.contains('pop-card') ||
                /grid/.test(flex.className) ||
                flex.closest('.onboarding-section')
            ) return;
            var kids = Array.prototype.slice.call(flex.children);
            if (kids.length === 2) {
                tag(kids[0], 'left', 0);
                tag(kids[1], 'right', 120);
            }
        });

        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (!e.isIntersecting) return;
                var el = e.target;
                var delay = parseInt(el.getAttribute('data-reveal-delay') || '0');
                setTimeout(function () { el.classList.add('revealed'); }, delay);
                obs.unobserve(el);
            });
        }, { threshold: 0.12 });

        document.querySelectorAll('[data-reveal]').forEach(function (el) { obs.observe(el); });
    }

    /* ── Page loader ── */
    function initPageLoader() {
        var loader = document.getElementById('page-loader');
        if (!loader) return;

        function hideLoader() {
            setTimeout(function () { loader.classList.add('hide'); }, 150);
        }

        if (document.readyState === 'complete') {
            hideLoader();
        } else {
            window.addEventListener('load', hideLoader);
        }
        setTimeout(hideLoader, 4000);

        // Hide loader when page is restored from bfcache (back/forward button)
        window.addEventListener('pageshow', function (e) {
            if (e.persisted) loader.classList.add('hide');
        });

        document.addEventListener('click', function (e) {
            var link = e.target.closest('a[href]');
            if (!link) return;
            var href = link.getAttribute('href');
            if (!href
                || href.charAt(0) === '#'
                || href.indexOf('javascript') === 0
                || href.indexOf('mailto') === 0
                || href.indexOf('tel') === 0
                || link.target === '_blank'
                || link.hasAttribute('download')) return;
            if (href.indexOf('http') === 0 && href.indexOf(window.location.hostname) === -1) return;
            loader.classList.remove('hide');
        });
    }

    /* ── Logo spin on every load ── */
    function initLogoSpin() {
        var icons = document.querySelectorAll('.logo-icon');
        if (!icons.length) return;
        setTimeout(function () {
            icons.forEach(function (icon) { icon.classList.add('spinning'); });
        }, 300);
    }

    /* ── Stat counters ── */
    function initStatCounters() {
        var els = document.querySelectorAll('[data-count]');
        if (!els.length) return;
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) return;
                var el = entry.target;
                var target = parseFloat(el.getAttribute('data-count'));
                var suffix = el.getAttribute('data-count-suffix') || '';
                var prefix = el.getAttribute('data-count-prefix') || '';
                var duration = 1800;
                var start = performance.now();
                function step(now) {
                    var p = Math.min((now - start) / duration, 1);
                    var ease = 1 - Math.pow(1 - p, 3);
                    el.textContent = prefix + Math.round(ease * target).toLocaleString() + suffix;
                    if (p < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
                obs.unobserve(el);
            });
        }, { threshold: 0.6 });
        els.forEach(function (el) { obs.observe(el); });
    }

    /* ── Scroll-to-top button ── */
    function initScrollToTop() {
        var btn = document.getElementById('scroll-top-btn');
        if (!btn) return;
        window.addEventListener('scroll', function () {
            btn.classList.toggle('visible', window.scrollY > 500);
        }, { passive: true });
        btn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ── Sticky header shrink ── */
    function initStickyHeader() {
        var header = document.querySelector('.header-main');
        if (!header) return;
        window.addEventListener('scroll', function () {
            header.classList.toggle('header-scrolled', window.scrollY > 80);
        }, { passive: true });
    }

    /* ── Typewriter ── */
    function initTypewriter() {
        var el = document.querySelector('.typewriter-text');
        if (!el) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        var fullText = el.textContent.trim();
        el.textContent = '';
        el.classList.add('typewriter-cursor');
        var i = 0;
        function type() {
            if (i < fullText.length) {
                el.textContent += fullText.charAt(i++);
                setTimeout(type, 42);
            } else {
                setTimeout(function () { el.classList.remove('typewriter-cursor'); }, 1800);
            }
        }
        setTimeout(type, 500);
    }

    /* ── Button ripple ── */
    function initRipple() {
        document.addEventListener('click', function (e) {
            var btn = e.target.closest('.btn, .send-btn, .btn-next, .btn-partnership');
            if (!btn) return;
            var d = Math.max(btn.clientWidth, btn.clientHeight);
            var rect = btn.getBoundingClientRect();
            var wave = document.createElement('span');
            wave.className = 'ripple-wave';
            wave.style.cssText = 'width:' + d + 'px;height:' + d + 'px;' +
                'left:' + (e.clientX - rect.left - d / 2) + 'px;' +
                'top:' + (e.clientY - rect.top - d / 2) + 'px;';
            btn.appendChild(wave);
            wave.addEventListener('animationend', function () { wave.remove(); });
        });
    }

    /* ── Parallax hero background ── */
    function initParallax() {
        var hero = document.querySelector('.hero-section');
        if (!hero) return;
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
        window.addEventListener('scroll', function () {
            var s = window.scrollY;
            if (s > hero.offsetHeight * 1.5) return;
            hero.style.setProperty('--parallax-y', (s * 0.3) + 'px');
        }, { passive: true });
    }

    /* ── Toast notifications ── */
    window.showToast = function (message, type) {
        type = type || 'success';
        var icon = type === 'success'
            ? '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>'
            : '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>';
        var toast = document.createElement('div');
        toast.className = 'ark-toast ark-toast--' + type;
        toast.innerHTML = icon + '<span>' + message + '</span>';
        document.body.appendChild(toast);
        requestAnimationFrame(function () {
            requestAnimationFrame(function () { toast.classList.add('show'); });
        });
        setTimeout(function () {
            toast.classList.remove('show');
            setTimeout(function () { toast.remove(); }, 400);
        }, 3500);
    };

    function init() {
        initPageLoader();
        initPopCards();
        initReveal();
        initLogoSpin();
        initStatCounters();
        initScrollToTop();
        initStickyHeader();
        initTypewriter();
        initRipple();
        initParallax();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
