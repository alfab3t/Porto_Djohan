// Global Page Variables
let currentPage = 1;
const totalPages = 2;

document.addEventListener('DOMContentLoaded', () => {
    // 1. Sticky Header
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (header) {
            header.classList.toggle('scrolled', window.scrollY > 50);
        }
    });

    // 2. Active Section Scroll Spy
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-links a');

    window.addEventListener('scroll', () => {
        let currentSectionId = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 120;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
                currentSectionId = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${currentSectionId}`) {
                link.classList.add('active');
            }
        });
    });

    // 3. Dynamic Title Typist (Blinking/Cycling text)
    const words = ["a Developer.", "a Video Editor."];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const typistElement = document.querySelector('.typist');

    if (typistElement) {
        function typeEffect() {
            const currentWord = words[wordIndex];
            if (isDeleting) {
                // Deleting text
                typistElement.innerText = currentWord.substring(0, charIndex - 1);
                charIndex--;
            } else {
                // Typing text
                typistElement.innerText = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }

            let typeSpeed = isDeleting ? 70 : 150;

            if (!isDeleting && charIndex === currentWord.length) {
                // Pause at complete word
                typeSpeed = 2000;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                // Move to next word
                wordIndex = (wordIndex + 1) % words.length;
                typeSpeed = 500;
            }

            setTimeout(typeEffect, typeSpeed);
        }
        setTimeout(typeEffect, 1000);
    }

    // 4. Scroll Reveal Animations (Intersection Observer)
    const fadeSections = document.querySelectorAll('.fade-in-section');
    if (fadeSections.length > 0) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px"
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        fadeSections.forEach(section => {
            observer.observe(section);
        });
    }

    // 5. Initialize Skills Page 1
    switchPage(1);
});

// Skills Dashboard Page Navigation
function switchPage(page) {
    currentPage = page;
    
    // Update profile title text dynamically (fade out, edit, fade in)
    const profileTitle = document.getElementById('profileTitle');
    if (profileTitle) {
        profileTitle.style.opacity = '0';
        setTimeout(() => {
            if (page === 1) {
                profileTitle.innerText = 'Developer';
            } else {
                profileTitle.innerText = 'Video Editor';
            }
            profileTitle.style.opacity = '1';
        }, 200);
    }
    
    // Update top controls active buttons
    const toggle1 = document.getElementById('pageToggle1');
    const toggle2 = document.getElementById('pageToggle2');
    if (toggle1 && toggle2) {
        if (page === 1) {
            toggle1.classList.add('active');
            toggle2.classList.remove('active');
        } else {
            toggle2.classList.add('active');
            toggle1.classList.remove('active');
        }
    }

    // Update bottom pagination buttons
    const prevBtn = document.getElementById('prevPageBtn');
    const nextBtn = document.getElementById('nextPageBtn');
    const pageInd = document.getElementById('pageIndicator');
    
    if (prevBtn) prevBtn.disabled = (currentPage === 1);
    if (nextBtn) nextBtn.disabled = (currentPage === totalPages);
    if (pageInd) pageInd.innerText = `Halaman ${currentPage} dari ${totalPages}`;

    // Show/Hide page filters based on page
    const filters = document.getElementById('programmingFilters');
    if (filters) {
        if (currentPage === 1) {
            filters.style.opacity = '1';
            filters.style.pointerEvents = 'auto';
            resetCategoryFilter();
        } else {
            filters.style.opacity = '0';
            filters.style.pointerEvents = 'none';
        }
    }

    // Toggle Cards with Animations
    const cards = document.querySelectorAll('.skills-grid .skill-card');
    cards.forEach(card => {
        const cardPage = parseInt(card.getAttribute('data-page') || '1');
        if (cardPage === currentPage) {
            card.style.display = 'flex';
            const fill = card.querySelector('.progress-bar-fill');
            if (fill) {
                fill.style.width = '0%';
            }
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'scale(1)';
                if (fill) {
                    fill.style.width = fill.getAttribute('data-width');
                }
            }, 50);
        } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.95)';
            setTimeout(() => {
                card.style.display = 'none';
            }, 300);
        }
    });
}

function navigatePage(direction) {
    let targetPage = currentPage + direction;
    if (targetPage >= 1 && targetPage <= totalPages) {
        switchPage(targetPage);
    }
}

function resetCategoryFilter() {
    const buttons = document.querySelectorAll('.tab-btn');
    buttons.forEach(btn => btn.classList.remove('active'));
    if (buttons.length > 0) {
        buttons[0].classList.add('active');
    }
}

// Category Skills filter logic
function filterSkills(e, category) {
    const buttons = document.querySelectorAll('.tab-btn');
    buttons.forEach(btn => btn.classList.remove('active'));
    if (e && e.target) {
        e.target.classList.add('active');
    }

    const cards = document.querySelectorAll('.skills-grid .skill-card');
    cards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');
        const cardPage = parseInt(card.getAttribute('data-page') || '1');
        
        if (cardPage === currentPage && (category === 'all' || cardCategory === category)) {
            card.style.display = 'flex';
            const fill = card.querySelector('.progress-bar-fill');
            if (fill) {
                fill.style.width = '0%';
            }
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'scale(1)';
                if (fill) {
                    fill.style.width = fill.getAttribute('data-width');
                }
            }, 50);
        } else {
            card.style.opacity = '0';
            card.style.transform = 'scale(0.95)';
            setTimeout(() => {
                card.style.display = 'none';
            }, 300);
        }
    });
}
