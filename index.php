<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM tb_mahasiswa ORDER BY id";
$result = mysqli_query($koneksi, $query);

// Cek jika query berhasil
if (!$result) {
    die("Error dalam query: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Juwita Aulia Salsabila - Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<header>
  <nav>
    <div class="nav-container">
      <div class="nav-brand">
        <h3>Juwita Aulia</h3>
      </div>
      <ul class="nav-menu">
        <li><a href="#beranda"><i class="fas fa-home"></i> Beranda</a></li>
        <li><a href="#tentang"><i class="fas fa-user"></i> Tentang Saya</a></li>
        <li><a href="#portofolio"><i class="fas fa-tasks"></i> Data Kegiatan</a></li>
        <li><a href="#opini"><i class="fas fa-bookmark"></i> Opini</a></li>
        <li><a href="#kontak"><i class="fas fa-envelope"></i> Kontak</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle"><i class="fas fa-share-alt"></i> Sosial Media</a>
          <div class="dropdown-content">
            <a href="https://www.instagram.com/auliaaslsaaa_/" target="_blank">
              <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://www.tiktok.com/@auliaslsx?_t=ZS-8vxLcbQ8vUW&_r=1" target="_blank">
              <i class="fab fa-tiktok"></i> TikTok
            </a>
            <a href="https://www.facebook.com/" target="_blank">
              <i class="fab fa-facebook"></i> Facebook
            </a>
          </div>
        </li>
      </ul>
      <div class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </nav>
</header>

<main>
  <section class="intro" id="beranda">
    <div class="intro-container">
      <div class="intro-content">
        <div class="intro-image">
          <img src="foto1.jpg" alt="Foto Juwita Aulia Salsabila" width="250">
          <div class="image-overlay"></div>
        </div>
        <div class="intro-text">
          <h1>Halo, Saya <span class="highlight">Juwita Aulia Salsabila</span></h1>
          <p class="intro-subtitle">Mahasiswa Teknik Informatika</p>
          <p class="intro-description">
            Saya adalah mahasiswa semester 2 Program Studi Teknik Informatika di 
            Universitas Nahdlatul Ulama Sunan Giri Bojonegoro dengan passion di bidang teknologi dan data.
          </p>
          <div class="intro-buttons">
            <a href="#tentang" class="btn btn-primary">
              <i class="fas fa-user"></i> Tentang Saya
            </a>
            <a href="#kontak" class="btn btn-outline">
              <i class="fas fa-envelope"></i> Hubungi Saya
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="tentang-saya" id="tentang">
    <div class="container">
      <div class="section-header">
        <h2>Tentang Saya</h2>
        <div class="section-line"></div>
      </div>
      <div class="tentang-container">
        <div class="tentang-text">
          <div class="info-card">
            <h3><i class="fas fa-user-circle"></i> Biodata Pribadi</h3>
            <div class="info-item">
              <i class="fas fa-calendar-alt"></i>
              <span><strong>Tanggal Lahir:</strong> 28 Juli 2006</span>
            </div>
            <div class="info-item">
              <i class="fas fa-map-marker-alt"></i>
              <span><strong>Alamat:</strong> Desa Ngujo, Kecamatan Kalitidu, Kabupaten Bojonegoro</span>
            </div>
            <div class="info-item">
              <i class="fas fa-graduation-cap"></i>
              <span><strong>Pendidikan:</strong> Teknik Informatika - Universitas Nahdlatul Ulama Sunan Giri</span>
            </div>
            <div class="info-item">
              <i class="fas fa-bullseye"></i>
              <span><strong>Cita-cita:</strong> IT Project Manager</span>
            </div>
          </div>
          <div class="description-card">
            <p>
              Saya memiliki minat yang besar dalam bidang teknologi dan data. 
              Dengan bercita-cita menjadi IT Project Manager, saya yakin akan memiliki 
              prospek karier yang cerah dan peluang untuk berkembang di industri teknologi yang terus berkembang pesat.
            </p>
          </div>
        </div>
        <div class="tentang-image">
          <img src="foto salsa2 - Copy.jpg" alt="Tentang Saya" width="300">
          <div class="image-frame"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="portofolio" id="portofolio">
    <div class="container">
      <div class="section-header">
        <h2><i class="fas fa-tasks"></i> Data Kegiatan Mahasiswa</h2>
        <div class="section-line"></div>
      </div>
      
      <?php if (isset($_GET['status'])): ?>
        <div class="alert-container">
          <?php if ($_GET['status'] == 'sukses'): ?>
            <div class="alert alert-success">
              <i class="fas fa-check-circle"></i>
              <span>Data berhasil diproses!</span>
              <button class="alert-close">&times;</button>
            </div>
          <?php elseif ($_GET['status'] == 'gagal'): ?>
            <div class="alert alert-danger">
              <i class="fas fa-exclamation-circle"></i>
              <span>Error: <?php echo htmlspecialchars($_GET['pesan'] ?? 'Terjadi kesalahan!'); ?></span>
              <button class="alert-close">&times;</button>
            </div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      
      <div class="table-header">
        <div class="table-actions">
          <a href="tambah.php" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah Data Baru
          </a>
        </div>
        <div class="data-info">
          <div class="data-count">
            <i class="fas fa-database"></i>
            Total: <?php echo mysqli_num_rows($result); ?> kegiatan
          </div>
        </div>
      </div>
      
      <div class="table-container">
        <?php if (mysqli_num_rows($result) > 0): ?>
          <div class="table-responsive">
            <table class="data-table">
              <thead>
                <tr>
                  <th width="8%"><i class="fas fa-hashtag"></i> No</th>
                  <th width="12%"><i class="fas fa-id-card"></i> ID</th>
                  <th width="40%"><i class="fas fa-calendar-check"></i> Nama Kegiatan</th>
                  <th width="25%"><i class="fas fa-clock"></i> Waktu Kegiatan</th>
                  <th width="15%"><i class="fas fa-cogs"></i> Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)): 
                ?>
                <tr>
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td class="id-cell"><?php echo htmlspecialchars($row['id']); ?></td>
                  <td class="nama-cell"><?php echo htmlspecialchars($row['nama_kegiatan']); ?></td>
                  <td class="waktu-cell"><?php echo nl2br(htmlspecialchars($row['waktu_kegiatan'])); ?></td>
                  <td class="action-cell">
                    <div class="action-buttons">
                      <a href="edit.php?id=<?php echo urlencode($row['id']); ?>" 
                         class="btn btn-warning btn-sm"
                         title="Edit data">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="hapus.php?id=<?php echo urlencode($row['id']); ?>" 
                         class="btn btn-danger btn-sm" 
                         onclick="return confirm('⚠ Apakah Anda yakin ingin menghapus data:\n\n<?php echo addslashes($row['nama_kegiatan']); ?>?\n\nData yang dihapus tidak dapat dikembalikan!')"
                         title="Hapus data">
                        <i class="fas fa-trash"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <div class="no-data">
            <div class="no-data-icon">
              <i class="fas fa-inbox"></i>
            </div>
            <h3>Belum ada data kegiatan</h3>
            <p>Silakan tambah data kegiatan baru dengan mengklik tombol "Tambah Data Baru" di atas.</p>
            <a href="tambah.php" class="btn btn-primary">
              <i class="fas fa-plus"></i> Tambah Data Pertama
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="opini" id="opini">
    <div class="container">
      <div class="section-header">
        <h2><i class="fas fa-bookmark"></i> Referensi & Karya</h2>
        <div class="section-line"></div>
      </div>
      <div class="grid-opini">
        <div class="card-opini">
          <div class="card-image">
            <img src="opini 1 - Copy.jpg" alt="Wattpad">
            <div class="card-overlay">
              <i class="fas fa-book"></i>
            </div>
          </div>
          <div class="card-content">
            <h3>Wattpad</h3>
            <p>Platform untuk berbagi cerita dan karya tulis</p>
            <a href="https://www.wattpad.com/user/JuwitaAuliaSalsabila" target="_blank" class="card-link">
              <i class="fas fa-external-link-alt"></i> Kunjungi
            </a>
          </div>
        </div>
        
        <div class="card-opini">
          <div class="card-image">
            <img src="whatsap.jpeg" alt="Laporan CSS">
            <div class="card-overlay">
              <i class="fas fa-file-alt"></i>
            </div>
          </div>
          <div class="card-content">
            <h3>Laporan Proyek CSS</h3>
            <p>Dokumentasi project pengembangan CSS</p>
            <a href="https://docs.google.com/document/d/1112KkaTBNeOwLvPzbxh3j4lLgy1aYFBZ/edit" target="_blank" class="card-link">
              <i class="fas fa-external-link-alt"></i> Lihat Laporan
            </a>
          </div>
        </div>
        
        <div class="card-opini">
          <div class="card-image">
            <img src="unugiri 1.png" alt="UNUGIRI">
            <div class="card-overlay">
              <i class="fas fa-university"></i>
            </div>
          </div>
          <div class="card-content">
            <h3>Universitas Nahdlatul Ulama</h3>
            <p>Kampus tempat menimba ilmu</p>
            <a href="https://unugiri.ac.id/" target="_blank" class="card-link">
              <i class="fas fa-external-link-alt"></i> Kunjungi
            </a>
          </div>
        </div>
        
        <div class="card-opini">
          <div class="card-image">
            <img src="opini4.png" alt="W3Schools">
            <div class="card-overlay">
              <i class="fas fa-code"></i>
            </div>
          </div>
          <div class="card-content">
            <h3>W3Schools</h3>
            <p>Platform pembelajaran coding online</p>
            <a href="https://www.w3schools.com/" target="_blank" class="card-link">
              <i class="fas fa-external-link-alt"></i> Belajar
            </a>
          </div>
        </div>
        
        <div class="card-opini">
          <div class="card-image">
            <img src="foto spotify.com.jpg" alt="Spotify">
            <div class="card-overlay">
              <i class="fas fa-music"></i>
            </div>
          </div>
          <div class="card-content">
            <h3>Song of The Day</h3>
            <p>Playlist musik favorit harian</p>
            <a href="https://open.spotify.com/playlist/77K8tQvC0EX2OZQQ4tubrI" target="_blank" class="card-link">
              <i class="fas fa-external-link-alt"></i> Dengarkan
            </a>
          </div>
        </div>
        
        <div class="card-opini">
          <div class="card-image">
            <img src="opini6.jpg" alt="YouTube">
            <div class="card-overlay">
              <i class="fab fa-youtube"></i>
            </div>
          </div>
          <div class="card-content">
            <h3>Channel YouTube</h3>
            <p>Konten video dan tutorial</p>
            <a href="https://youtube.com/@juwitaauliasalsabila" target="_blank" class="card-link">
              <i class="fas fa-external-link-alt"></i> Subscribe
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="kontak" id="kontak">
    <div class="container">
      <div class="section-header">
        <h2><i class="fas fa-envelope"></i> Hubungi Saya</h2>
        <div class="section-line"></div>
      </div>
      <div class="kontak-container">
        <div class="contact-form">
          <form class="form-kontak" id="contactForm">
            <div class="form-group">
              <label for="email"><i class="fas fa-envelope"></i> Email</label>
              <input type="email" id="email" name="email" placeholder="email@example.com" required>
            </div>
            <div class="form-group">
              <label for="nama"><i class="fas fa-user"></i> Nama</label>
              <input type="text" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
            </div>
            <div class="form-group">
              <label for="subjek"><i class="fas fa-tag"></i> Subjek</label>
              <input type="text" id="subjek" name="subjek" placeholder="Subjek pesan" required>
            </div>
            <div class="form-group">
              <label for="pesan"><i class="fas fa-comment"></i> Pesan</label>
              <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-full">
              <i class="fas fa-paper-plane"></i> Kirim Pesan
            </button>
          </form>
        </div>
        <div class="contact-info">
          <div class="map-container">
            <h3><i class="fas fa-map-marker-alt"></i> Lokasi</h3>
            <div class="map-wrapper">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!4v1745911880803!6m8!1m7!1swlct4EVJcUljpPKEKinIhw!2m2!1d-7.156475799151211!2d111.8046744723414!3f204.46008764935496!4f-30.095150968121054!5f0.7820865974627469" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="footer-content">
    <div class="footer-text">
      <p>&copy; 2024 Juwita Aulia Salsabila. All rights reserved.</p>
    </div>
    <div class="footer-social">
      <a href="https://www.instagram.com/auliaaslsaaa_/" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.tiktok.com/@auliaslsx" target="_blank">
        <i class="fab fa-tiktok"></i>
      </a>
      <a href="https://youtube.com/@juwitaauliasalsabila" target="_blank">
        <i class="fab fa-youtube"></i>
      </a>
    </div>
  </div>
</footer>

<script>
// Mobile Navigation Toggle
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

navToggle.addEventListener('click', () => {
  navMenu.classList.toggle('active');
  navToggle.classList.toggle('active');
});

// Close mobile menu when clicking on a link
document.querySelectorAll('.nav-menu a').forEach(link => {
  link.addEventListener('click', () => {
    navMenu.classList.remove('active');
    navToggle.classList.remove('active');
  });
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});

// Auto hide alert messages
setTimeout(function() {
  const alerts = document.querySelectorAll('.alert');
  alerts.forEach(function(alert) {
    alert.style.opacity = '0';
    alert.style.transition = 'opacity 0.5s';
    setTimeout(function() {
      alert.style.display = 'none';
    }, 500);
  });
}, 5000);

// Alert close buttons
document.querySelectorAll('.alert-close').forEach(button => {
  button.addEventListener('click', function() {
    this.parentElement.style.display = 'none';
  });
});

// Contact form handling
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Simple form validation and feedback
  const formData = new FormData(this);
  const nama = formData.get('nama');
  const email = formData.get('email');
  const subjek = formData.get('subjek');
  const pesan = formData.get('pesan');
  
  if (nama && email && subjek && pesan) {
    alert('✓ Terima kasih! Pesan Anda telah dikirim.\n\n(Ini adalah demo - pesan tidak benar-benar terkirim)');
    this.reset();
  } else {
    alert('⚠ Harap isi semua field yang diperlukan!');
  }
});

// Add loading animation to buttons
document.querySelectorAll('.btn').forEach(button => {
  button.addEventListener('click', function() {
    if (!this.href || this.href.includes('#')) return;
    
    const originalText = this.innerHTML;
    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
    
    setTimeout(() => {
      this.innerHTML = originalText;
    }, 1000);
  });
});

// Intersection Observer for animations
const observerOptions = {
  threshold: 0.1,
  rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('animate-in');
    }
  });
}, observerOptions);

// Observe elements for animation
document.querySelectorAll('.card-opini, .info-card, .description-card').forEach(el => {
  observer.observe(el);
});
</script>

</body>
</html>