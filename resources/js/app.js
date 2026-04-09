import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const header = document.querySelector('[data-header]');
    const menuToggle = document.querySelector('[data-menu-toggle]');
    const menuDrawer = document.querySelector('[data-menu-drawer]');
    const menuScrim = document.querySelector('[data-menu-scrim]');
    const menuClose = document.querySelector('[data-menu-close]');
    const dashboardSidebar = document.querySelector('[data-dashboard-sidebar]');
    const dashboardSidebarToggle = document.querySelector('[data-dashboard-sidebar-toggle]');
    const dashboardSidebarScrim = document.querySelector('[data-dashboard-sidebar-scrim]');
    const dashboardSidebarClose = document.querySelector('[data-dashboard-sidebar-close]');
    const dashboardLinks = Array.from(document.querySelectorAll('[data-dashboard-link]'));
    const dashboardSections = Array.from(document.querySelectorAll('[data-dashboard-section]'));
    const editorLinks = Array.from(document.querySelectorAll('[data-editor-link]'));
    const editorSections = Array.from(document.querySelectorAll('[data-editor-section]'));
    const searchInput = document.querySelector('[data-search-input]');
    const searchCards = Array.from(document.querySelectorAll('[data-search-card]'));
    const searchFeedback = document.querySelector('[data-search-feedback]');
    const revealItems = document.querySelectorAll('[data-reveal]');

    const syncHeader = () => {
        if (!header) {
            return;
        }

        header.classList.toggle('is-scrolled', window.scrollY > 18);
    };

    const closeMenu = () => {
        if (!menuToggle || !menuDrawer) {
            return;
        }

        body.classList.remove('menu-open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuDrawer.setAttribute('aria-hidden', 'true');
    };

    const openMenu = () => {
        if (!menuToggle || !menuDrawer) {
            return;
        }

        body.classList.add('menu-open');
        menuToggle.setAttribute('aria-expanded', 'true');
        menuDrawer.setAttribute('aria-hidden', 'false');
    };

    const setActiveDashboardLink = (targetId) => {
        if (dashboardLinks.length === 0) {
            return;
        }

        dashboardLinks.forEach((link) => {
            link.classList.toggle('is-active', link.dataset.dashboardTarget === targetId);
        });
    };

    const setActiveEditorLink = (targetId) => {
        if (editorLinks.length === 0) {
            return;
        }

        editorLinks.forEach((link) => {
            link.classList.toggle('is-active', link.dataset.editorTarget === targetId);
        });
    };

    const syncDashboardSidebarState = () => {
        if (!dashboardSidebar) {
            return;
        }

        const isDesktop = window.matchMedia('(min-width: 72.01rem)').matches;

        if (isDesktop) {
            body.classList.remove('dashboard-sidebar-open');
            dashboardSidebar.setAttribute('aria-hidden', 'false');

            if (dashboardSidebarToggle) {
                dashboardSidebarToggle.setAttribute('aria-expanded', 'false');
            }

            return;
        }

        dashboardSidebar.setAttribute('aria-hidden', body.classList.contains('dashboard-sidebar-open') ? 'false' : 'true');
    };

    const closeDashboardSidebar = () => {
        if (!dashboardSidebarToggle || !dashboardSidebar) {
            return;
        }

        body.classList.remove('dashboard-sidebar-open');
        dashboardSidebarToggle.setAttribute('aria-expanded', 'false');
        dashboardSidebar.setAttribute('aria-hidden', 'true');
    };

    const openDashboardSidebar = () => {
        if (!dashboardSidebarToggle || !dashboardSidebar) {
            return;
        }

        body.classList.add('dashboard-sidebar-open');
        dashboardSidebarToggle.setAttribute('aria-expanded', 'true');
        dashboardSidebar.setAttribute('aria-hidden', 'false');
    };

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            if (body.classList.contains('menu-open')) {
                closeMenu();
                return;
            }

            openMenu();
        });
    }

    if (menuScrim) {
        menuScrim.addEventListener('click', closeMenu);
    }

    if (menuClose) {
        menuClose.addEventListener('click', closeMenu);
    }

    document.querySelectorAll('.menu-drawer__nav a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    if (dashboardSidebarToggle) {
        dashboardSidebarToggle.addEventListener('click', () => {
            if (body.classList.contains('dashboard-sidebar-open')) {
                closeDashboardSidebar();
                return;
            }

            openDashboardSidebar();
        });
    }

    if (dashboardSidebarScrim) {
        dashboardSidebarScrim.addEventListener('click', closeDashboardSidebar);
    }

    if (dashboardSidebarClose) {
        dashboardSidebarClose.addEventListener('click', closeDashboardSidebar);
    }

    dashboardLinks.forEach((link) => {
        link.addEventListener('click', () => {
            const targetId = link.dataset.dashboardTarget;

            if (targetId) {
                setActiveDashboardLink(targetId);
            }

            closeDashboardSidebar();
        });
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && body.classList.contains('menu-open')) {
            closeMenu();
        }

        if (event.key === 'Escape' && body.classList.contains('dashboard-sidebar-open')) {
            closeDashboardSidebar();
        }
    });

    if (dashboardLinks.length > 0 && dashboardSections.length > 0) {
        const hashTarget = window.location.hash.replace('#', '');

        if (hashTarget) {
            setActiveDashboardLink(hashTarget);
        }

        const dashboardObserver = new IntersectionObserver(
            (entries) => {
                const visibleEntry = entries
                    .filter((entry) => entry.isIntersecting)
                    .sort((first, second) => second.intersectionRatio - first.intersectionRatio)[0];

                if (!visibleEntry) {
                    return;
                }

                setActiveDashboardLink(visibleEntry.target.id);
            },
            {
                threshold: [0.2, 0.4, 0.65],
                rootMargin: '-18% 0px -55% 0px',
            },
        );

        dashboardSections.forEach((section) => {
            if (section.id) {
                dashboardObserver.observe(section);
            }
        });
    }

    if (editorLinks.length > 0 && editorSections.length > 0) {
        const hashTarget = window.location.hash.replace('#', '');

        if (hashTarget) {
            setActiveEditorLink(hashTarget);
        }

        editorLinks.forEach((link) => {
            link.addEventListener('click', () => {
                const targetId = link.dataset.editorTarget;

                if (targetId) {
                    setActiveEditorLink(targetId);
                }
            });
        });

        const editorObserver = new IntersectionObserver(
            (entries) => {
                const visibleEntry = entries
                    .filter((entry) => entry.isIntersecting)
                    .sort((first, second) => second.intersectionRatio - first.intersectionRatio)[0];

                if (!visibleEntry) {
                    return;
                }

                setActiveEditorLink(visibleEntry.target.id);
            },
            {
                threshold: [0.2, 0.4, 0.65],
                rootMargin: '-16% 0px -58% 0px',
            },
        );

        editorSections.forEach((section) => {
            if (section.id) {
                editorObserver.observe(section);
            }
        });
    }

    if (searchInput && searchCards.length > 0) {
        const applySearch = () => {
            const query = searchInput.value.trim().toLowerCase();
            let visibleCount = 0;

            searchCards.forEach((card) => {
                const haystack = (card.dataset.searchText ?? '').toLowerCase();
                const isMatch = query.length === 0 || haystack.includes(query);

                card.classList.toggle('is-hidden', !isMatch);

                if (isMatch) {
                    visibleCount += 1;
                }
            });

            if (!searchFeedback) {
                return;
            }

            if (query.length === 0) {
                searchFeedback.hidden = true;
                searchFeedback.textContent = '';
                return;
            }

            searchFeedback.hidden = false;

            if (visibleCount > 0) {
                searchFeedback.textContent = `Showing ${visibleCount} result${visibleCount === 1 ? '' : 's'} for "${query}".`;
                return;
            }

            searchFeedback.textContent = `No matches for "${query}". Try terms like Mara, Samburu, beach or family.`;
        };

        searchInput.addEventListener('input', applySearch);
    }

    if (revealItems.length > 0) {
        const observer = new IntersectionObserver(
            (entries, revealObserver) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) {
                        return;
                    }

                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                });
            },
            {
                threshold: 0.14,
                rootMargin: '0px 0px -40px 0px',
            },
        );

        revealItems.forEach((item) => observer.observe(item));
    }

    syncHeader();
    syncDashboardSidebarState();
    window.addEventListener('scroll', syncHeader, { passive: true });
    window.addEventListener('resize', syncDashboardSidebarState, { passive: true });
});
