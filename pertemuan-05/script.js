
document.getElementById("menuToggle").addEventListener("click", function() {
  document.querySelector("nav").classList.toggle("active");
});


let namaUser = prompt("Siapa nama kamu?");
alert("Halo, " + namaUser + "! Cihuyy!");


function showError(input, message) {
  const error = document.createElement("div");
  error.className = "error-msg";
  error.textContent = message;
  input.insertAdjacentElement("afterend", error);
  input.style.border = "2px solid red";
}


document.querySelector("form").addEventListener("submit", function(e) {
  // Ambil elemen input
  const nama = document.getElementById("txtNama");
  const email = document.getElementById("txtEmail");
  const pesan = document.getElementById("txtPesan");


  document.querySelectorAll(".error-msg").forEach(el => el.remove());
  [nama, email, pesan].forEach(el => el.style.border = "");


  let isValid = true;

 
  if (nama.value.trim().length < 3) {
    showError(nama, "Nama minimal 3 huruf dan tidak boleh kosong.");
    isValid = false;
  } else if (!/^[A-Za-z\s]+$/.test(nama.value)) {
    showError(nama, "Nama hanya boleh berisi huruf dan spasi.");
    isValid = false;
  }

  if (email.value.trim() === "") {
    showError(email, "Email wajib diisi.");
    isValid = false;
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
    showError(email, "Format email tidak valid. Contoh: nama@gmail.com");
    isValid = false;
  }

 
  if (pesan.value.trim().length < 10) {
    showError(pesan, "Pesan minimal 10 karakter agar lebih jelas.");
    isValid = false;
  }

 
  if (!isValid) {
    e.preventDefault();
    return;
  }

 
  alert("Terima kasih, " + nama.value + "!\nPesan Anda telah dikirim.");
});

function showErrorWithLabel(inputElement, message) {
const label = inputElement.closest("label");
if (!label) return;
label.style.flexWrap = "wrap";
const small = document.createElement("small");
small.className = "error-msg";
small.textContent = message;
small.style.color = "black";
small.style.fontSize = "14px";
small.style.display = "block";
small.style.marginTop = "4px";
small.style.flexBasis = "100%";
small.dataset.forId = inputElement.id;}
if (inputElement.nextSibling) {
label.insertBefore(small, inputElement.nextSibling);
} else {
label.appendChild(small);
}
inputElement.style.border = "2px solid red";