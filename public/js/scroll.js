// Mendeteksi scroll dan menampilkan tombol scroll ke atas ketika posisi scroll melewati ambang batas tertentu
window.addEventListener('scroll', function() {
    var scrollToTopBtn = document.getElementById('scrollToTopBtn');
    if (window.pageYOffset > 100) { // Ambang batas scroll
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
});

// Menjalankan animasi scroll ke atas ketika tombol di klik
document.getElementById('scrollToTopBtn').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});
