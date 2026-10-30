(() => {
    'use strict';
    const toggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('#primary-menu');
    const closeMenu = () => {
        if (!toggle || !menu) return;
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Открыть меню');
        menu.classList.remove('is-open');
    };
    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            const open = toggle.getAttribute('aria-expanded') !== 'true';
            toggle.setAttribute('aria-expanded', String(open));
            toggle.setAttribute('aria-label', open ? 'Закрыть меню' : 'Открыть меню');
            menu.classList.toggle('is-open', open);
        });
        menu.addEventListener('click', event => { if (event.target.closest('a')) closeMenu(); });
        document.addEventListener('click', event => { if (!event.target.closest('.site-nav')) closeMenu(); });
        document.addEventListener('keydown', event => { if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') { closeMenu(); toggle.focus(); } });
        menu.addEventListener('keydown', event => {
            const links = [...menu.querySelectorAll('a')];
            if (event.key === 'Tab' && !event.shiftKey && event.target === links.at(-1)) closeMenu();
        });
        window.matchMedia('(min-width: 1024px)').addEventListener('change', closeMenu);
    }
    const items = [...document.querySelectorAll('.faq details')];
    items.forEach(item => item.addEventListener('toggle', () => {
        if (item.open) items.forEach(other => { if (other !== item) other.open = false; });
    }));
    const dialog = document.querySelector('.project-dialog');
    if (dialog && typeof dialog.showModal === 'function') {
        const image = dialog.querySelector('[data-preview-image]');
        const title = dialog.querySelector('#project-dialog-title');
        document.querySelectorAll('[data-project-preview]').forEach(link => link.addEventListener('click', event => {
            event.preventDefault();
            title.textContent = link.dataset.projectTitle;
            image.src = link.href;
            image.alt = 'Макет проекта ' + link.dataset.projectTitle;
            dialog.showModal();
            document.body.classList.add('modal-open');
        }));
        dialog.querySelector('[data-close-preview]').addEventListener('click', () => dialog.close());
        dialog.addEventListener('click', event => { if (event.target === dialog) { const rect = dialog.getBoundingClientRect(); if (event.clientX < rect.left || event.clientX > rect.right || event.clientY < rect.top || event.clientY > rect.bottom) dialog.close(); } });
        dialog.addEventListener('close', () => document.body.classList.remove('modal-open'));
    }
})();
