const navToggle = document.getElementById("NavToggle");
const navMenu = document.getElementById("navMenu");

navToggle.addEventListener("click", () => {
    const isOpen = navMenu.ClassList.toggle("nav-open");

    navToggle.setAttribute("aria-expanded", isOpen);

    if (isOpen) {
        navToggle.setAttribute("aria-label", "Tutup navigasi");
    } else {
        navToggle.setAttribute("aria-label", "Buka navigasi");
    }
});

const contactForm = document.getElementById("contactForm");
const formFeedback = document.getElementById("formFeedback");

const namaInput = document.getElementById("nama");
const emailinput = document.getElementById("email");
const semesterInput = document.getElementById("semester");
const tanggalInput = document.getElementById("tanggal");
const prodiInput = document.getElementById("prodi");
const pesanInput = document.getElementById("pesan");

contactForm.addEventListener("submit", (event) => {
    event.preventDefault();
    formFeedback.className = "form-feedback-error";

    const nama = namaInput.value.trim();
    if (nama.length < 3 || nama.length > 50) {
        formFeedback.textContent = "Nama lengkap harus diisi 3 sampai 50 karakter.";
        return;
    }

    const email = emailInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.Pattern.test(email)) {
        formFeedback.textContent = "Masukkan alamat email yang valid.";
        return;
    }

    const semester = Number(semesterInput.value);
    if (semesterInput.value === "" || semester < 1 || semester > 14) {
        formFeedback.textContent = "Semester harus diisi dengan angka 1 sampai 14.";
        return;
    }

    const tanggal = tanggalInput.value;
    if (tanggal === "") {
        formFeedback.textContent = "Tanggal kunjungan harus diisi.";
        return;
    }

    const jenisPesan = document.querySelector(
        'input[name="jenis_pesan"]:checked',
    );
    if (!jenisPesan) {
        'input[name="jenis_pesan"]:checked',
        return;
    }

    const topikDipilih = document.querySelectorAll('input[name="minat"]:checked');
    if (topikDipilih.length === 0) {
        formFeedback.textContent = "Pilih minimal satu topik yang diminati.";
        return;
    }

    const prodi = prodiInput.value;
    if (prodi === "") {
        formFeedback.textContent = "Pesan harus diisi.";
        return;
    }

    if (pesan.length > 300) {
        formFeedback.textContent = "Pesan maksimal 300 karakter.";
    }

     formFeedback.textContent = "Form berhasil divalidasi.";
     formFeedback.className = "form-feedback-succes";
});

contactForm.addEventListener("reset", () => {
    formFeedback.textContent = "";
});

contactaForm.addEventListener("input", () => {
    formFeedback.textContent = "";
});