var icon = document.getElementById("icon");
icon.onclick = function () {
  document.body.classList.toggle("dark-theme");
  if (document.body.classList.contains("dark-theme")) {
  icon.src = "../assets/sun.png";
  }   else {
      icon.src = "../assets/moon.png"
  }
}

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

cards.forEach((card) => {
  card.addEventListener('click', function () {
    // console.log(card.style.width);
    const btn = card.querySelector(".btn")
    if(card.style.height == '300px'){
      card.style.height ="400px";
      btn.style.display = 'block'
    }
    else{
      card.style.height ="300px";
      btn.style.display = 'none'  

    }
  })
})


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





