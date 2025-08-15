import './bootstrap';
document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);
    const section = params.get('scrollTo');
    if (section) {
        const target = document.getElementById(section);
        if (target) {
            // Smooth scroll to the element
            target.scrollIntoView({ behavior: "smooth" });

            // Clean the URL (optional)
            history.replaceState(null, "", window.location.pathname);
        }
    }
});
