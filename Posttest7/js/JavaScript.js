var icon = document.getElementById("icon");
icon.onclick = function () {
  document.body.classList.toggle("dark-theme");
  if (document.body.classList.contains("dark-theme")) {
  icon.src = "../assets/sun.png";
  }   else {
      icon.src = "../assets/moon.png"
  }
}

function updateJam() {
  const jamElement = document.getElementById("jam");
  const sekarang = new Date();
  
  const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

  const day = days[sekarang.getDay()];
  const month = months[sekarang.getMonth()];
  const date = sekarang.getDate();
  const year = sekarang.getFullYear();

  const hour = sekarang.getHours().toString().padStart(2, '0');
  const minute = sekarang.getMinutes().toString().padStart(2, '0');
  const second = sekarang.getSeconds().toString().padStart(2, '0');
  
  const waktu = `${day}, ${month} ${date} ${year} | ${hour}:${minute}:${second}`;
  jamElement.textContent = waktu;
}

setInterval(updateJam, 1000);
updateJam();

// Ambil elemen-elemen yang diperlukan
var adoptionButton = document.querySelector(".judul-button-adoption");
var donationButton = document.querySelector(".judul-button-donation");

// Event listener untuk tombol "Adoption"
adoptionButton.addEventListener("click", function () {
  window.alert("Coming Soon!");
});

// Event listener untuk tombol "Donation"
donationButton.addEventListener("click", function () {
  window.alert("Coming Soon!");
});



const cards = document.querySelectorAll('.card');
const buttons = document.querySelectorAll('.btn')
// console.log(card)



buttons.forEach((btn) => {
  btn.addEventListener('click', function(){
    alert('Coming Soon!')
    
  })

  
})


document.getElementById("instagram-link").href = "https://www.instagram.com/euclidean_destin/";

// Fungsi untuk mengubah warna tombol
function changeButtonColor() {
  var button = document.querySelector(".instagram-button");
  button.style.backgroundColor = "purple"; // Ubah warna tombol menjadi ungu
}



