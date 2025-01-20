 // Menambahkan event listener untuk klik pada pill
 document.querySelectorAll('.category-pill').forEach(function (pill) {
    pill.addEventListener('click', function () {
        // Menghapus kelas active dari semua pill
        document.querySelectorAll('.category-pill').forEach(function (p) {
            p.classList.remove('active');
        });

        // Menambahkan kelas active pada pill yang diklik
        pill.classList.add('active');
    });
});