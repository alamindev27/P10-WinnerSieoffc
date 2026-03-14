// Clipboard Copy Logic
function copyToClipboard(text, element) {
    const originalIcon =
        `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16"><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/><path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/></svg>`;
    const successIcon =
        `<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16"><path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708"/></svg>`;

    const btn = element.querySelector('.copy-btn');

    // Clipboard Copy Logic
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(showSuccess);
    } else {
        let textArea = document.createElement("textarea");
        textArea.value = text;
        document.body.appendChild(textArea);
        textArea.select();
        try {
            document.execCommand('copy');
            showSuccess();
        } catch (err) { }
        textArea.remove();
    }

    function showSuccess() {
        // Show Tooltip & Change Icon
        element.classList.add('show-tooltip');
        btn.innerHTML = successIcon;
        btn.style.color = "#28a745";

        // Reset after 1.5 seconds
        setTimeout(() => {
            element.classList.remove('show-tooltip');
            btn.innerHTML = originalIcon;
            btn.style.color = "";
        }, 1500);
    }
}

// Counter Animation Logic
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    const speed = 100; // Counter speed (beshi hole slow hobe)

    const startCounting = (targetElement) => {
        const updateCount = () => {
            const target = +targetElement.getAttribute('data-target');
            const count = +targetElement.innerText.replace(/,/g, ''); // formatting remove kora

            // protibare koto barbe seta nirnoy
            const inc = target / speed;

            if (count < target) {
                const newValue = Math.ceil(count + inc);
                // Number format (comma) shoho set kora
                targetElement.innerText = newValue.toLocaleString();
                setTimeout(updateCount, 15);
            } else {
                targetElement.innerText = target.toLocaleString();
            }
        };
        updateCount();
    };

    // Scroll Detection Logic
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounting(entry.target);
                observer.unobserve(entry.target); // ekbar count hoye gele ar hobe na
            }
        });
    }, {
        threshold: 0.5
    }); // Section 50% dekha gele start hobe

    counters.forEach(counter => observer.observe(counter));
});



document.addEventListener("DOMContentLoaded", () => {
    // HTML theke initial value gulo neya
    let h = parseInt(document.getElementById('hours').innerText);
    let m = parseInt(document.getElementById('minutes').innerText);
    let s = parseInt(document.getElementById('seconds').innerText);

    const timer = setInterval(() => {
        // Jodi shob 0 hoye jay tobe stop hobe
        if (h === 0 && m === 0 && s === 0) {
            clearInterval(timer);
            return;
        }

        if (s > 0) {
            s--; // Second kombe
        } else {
            if (m > 0) {
                s = 59; // Second 59 e back korbe
                m--;    // Minute kombe
            } else {
                if (h > 0) {
                    s = 59;
                    m = 59;
                    h--; // Hour kombe
                }
            }
        }

        // UI Update kora (Double digit format: 05, 09 ityadi)
        document.getElementById('hours').innerText = h.toString().padStart(2, '0');
        document.getElementById('minutes').innerText = m.toString().padStart(2, '0');
        document.getElementById('seconds').innerText = s.toString().padStart(2, '0');

    }, 1000); // Protike 1 second por por update hobe
});
