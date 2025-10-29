(function () {
  // Array untuk menyimpan data mahasiswa
  let dataMahasiswa = [];

  const btnKirim = document.getElementById("btnKirim");
  const tabelBody = document.getElementById("tabelBody");

  if (!btnKirim || !tabelBody) {
    console.error("Elemen btnKirim atau tabelBody tidak ditemukan!");
    return;
  }

  btnKirim.addEventListener("click", function () {
    const nama = document.getElementById("nama").value.trim();
    const prodi = document.getElementById("prodi").value;
    const semester = document.getElementById("semester").value.trim();

    if (!nama || !prodi || !semester) {
      alert("Harap isi semua data: Nama, Prodi, dan Semester!");
      return;
    }

    // Format baru: pisahkan Prodi dan Semester dengan baris baru
    const info = `Prodi : ${prodi}<br>Semester : ${semester}`;
    dataMahasiswa.push({ nama, info });

    renderTable();

    // Reset input
    document.getElementById("nama").value = "";
    document.getElementById("prodi").value = "";
    document.getElementById("semester").value = "";
  });

  function renderTable() {
    tabelBody.innerHTML = "";

    dataMahasiswa.forEach((mhs, idx) => {
      const tr = document.createElement("tr");
      tr.innerHTML = `
        <td>${idx + 1}</td>
        <td>${escapeHtml(mhs.nama)}</td>
        <td>${mhs.info}</td> <!-- biarkan HTML <br> agar bisa tampil baris baru -->
      `;
      tabelBody.appendChild(tr);
    });
  }

  // Fungsi escape hanya digunakan untuk nama (bukan info agar <br> berfungsi)
  function escapeHtml(text) {
    return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
  }
})();
