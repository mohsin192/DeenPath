document.getElementById('year').textContent = new Date().getFullYear();

document.getElementById('newsletter-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = this.querySelector('button');
    const original = btn.innerHTML;
    btn.innerHTML = '<i class="fas fa-check"></i>';
    btn.style.background = '#4CAF50';
    setTimeout(() => {
        btn.innerHTML = original;
        btn.style.background = '';
        this.reset();
    }, 3000);
});