document.addEventListener("DOMContentLoaded", function() {
    const bookingForm = document.getElementById("bookingForm");

    if (bookingForm) {
        bookingForm.addEventListener("submit", function(event) {
            event.preventDefault(); // Cegah form melakukan submit default

            const lapangan = document.getElementById("lapangan").value;
            const tanggal = document.getElementById("tanggal").value;
            const jam = document.getElementById("jam").value;

            if (!lapangan || !tanggal || !jam) {
                alert("Mohon lengkapi semua form!");
                return;
            }

            // Kirim data ke server menggunakan fetch
            fetch('backend/index.php', {
                method: 'POST',
                body: new FormData(bookingForm)
            })
            .then(response => response.text())
            .then(data => {
                alert('Booking berhasil! Lapangan: ' + lapangan + ', Tanggal: ' + tanggal + ', Jam: ' + jam);
                console.log(data); // Log untuk mengecek respons server
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    }
});