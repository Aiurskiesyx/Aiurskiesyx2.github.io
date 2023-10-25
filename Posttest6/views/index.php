<?php
  require "../connect/db_connect.php";
?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cat Guardians</title>
  <!-- Link to the external CSS file -->
  <link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <a href=""><img src="../assets/cat logo.png" class="img"></a>
      <p><span id="jam"></span></p>
    </div>
    <div class="menu-items">
      <a href="#home">Home</a>
      <a href="#content">Content</a>
      <a href="#about">About</a>
      <a href="../views/Contact.php">Contact Us</a>
      <a href="../views/Login.php">Login</a>
      <img src="../assets/moon.png" alt="" id="icon">
    </div>
  </nav>

  <main>
    <div class="home" id="home">
      <div class="judul">
        <h1>Misi Kami: Memberikan Rumah Abadi Untuk <span>Setiap Kucing Terlantar</span></h1>
        <h3>Cat Rescue dan Adopsi<span> Kucing Terpercaya </span></h3>
        <div>
          <button class="judul-button-adoption">Adoption</button>
          <button class="judul-button-donation">Donation</button>
        </div>
      </div>

      <div class="image">
        <img src="../assets/home.png" class="img" />
      </div>
    </div>

    <div class="content" id="content">
      <div class="content-title">
        <h4>Start Helping</h4>
        <h1>Help Find a Home For Every Cat</h1>
      </div>

      <div class="content-card">
        <?php
          $sql = "SELECT * FROM kucing";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              
            <div class="card">
              <div class="card-img">
                <img src="../images/<?= $row['picture'] ?>" alt="" />
                </div>
              <h2 class="card-title"><?= $row['nama'] ?></h2>
              <h2 class="card-title"><?= $row['umur'] ?></h2>
              <h3 class="card-title"><?= $row['deskripsi'] ?></h3>
              <button class="btn">MORE</button>
            </div>

            <?php }
        }
        ?>



      </div>
    </div>

    <div class="about-us" id="about">
      <div class="about-img">
        <img src="../assets/mogu.jpg" alt="" />
      </div>
      <div class="about-desc">
        <h1>About Me</h1>
        <p>
          Hello, I'm Hesty, and I have a passion for making
          <br>a difference in the lives of our furry friends.
        </p>
        <p>
          I've always believed that every cat deserves a loving and safe home. <br> Unfortunately, many cats find
          themselves in dire situations, abandoned, abused, or homeless.
          <br>This is why I decided to create this "Cat Guardians" website.
        </p>
        <p>In addition to my love for all cats, <br> this website is dedicated to my cats
          - Mogu, Pupus, Choco, Oreo, and Aice, <br>who hold a special place in my heart. </p>
        <p> Find Me In : <br>
          <span id="abo" class="instagram-link">
            Instagram: <a href="#" id="instagram-link" class="black-text">euclidean_destin</a> 
          </span><br>
          Email : hestypratiwi101@gmail.com
        </p>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    <div class="footer-content">
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#content">Content</a></li>
        <li><a href="#about">About</a></li>
      </ul>
      <p>&copy; 2023 Cat Guardians. All rights reserved.</p>
    </div>
  </footer>

  <script src="../js/JavaScript.js"></script>
</body>

</html>