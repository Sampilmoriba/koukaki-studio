// Déclenchement du fadeInUp des titres au scroll 
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            } else {
                entry.target.classList.remove('is-visible');
            }
        });
    }, { threshold: 0.5 }); 

    document.querySelectorAll('.fade-in-title').forEach(title => {
        observer.observe(title);
    });
});
