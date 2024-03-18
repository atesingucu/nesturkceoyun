<div class="container-menu">
<div class="menu">
<div class="logo">
        <img src="<?php echo ($site->logo() ? $site->logo() : HTML_PATH_THEME_IMG . 'logo.webp ') ?>" alt="Logo" width="55px" /> &nbsp; <a href="<?php echo Theme::siteUrl() ?>"><?php echo $site->title(); ?></a>
    </div>

<div class="nav">
    <button class="hamburger-menu" aria-label="Menüyü Aç/Kapat">Menü</button>
    <ul>
        <?php foreach ($staticContent as $staticPage): ?>
            <li><a class="nav-link" href="<?php echo $staticPage->permalink() ?>"><?php echo $staticPage->title() ?></a></li>
        <?php endforeach ?>
    </ul>
</div>

</div>
</div>

<br />

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.hamburger-menu').addEventListener('click', function() {
        document.querySelector('.nav ul').classList.toggle('active');
        document.querySelector('.container-menu').classList.toggle('active'); // Bu satır eklendi
    });
});

document.addEventListener('DOMContentLoaded', function () {
  var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  if (screenWidth <= 768) {
    document.querySelector('.nes-sama').style.display = 'none'; // NES div'ini gizle
    
    // Tüm h2 etiketlerini bul
    var h2s = document.querySelectorAll('h2');
    var messageDisplayed = false;

    // "Oyna" yazısını içeren h2 etiketini bul
    h2s.forEach(function(h2) {
      if (h2.textContent.trim() === "Oyna" && !messageDisplayed) {
        // Yeni mesaj div'ini oluştur
        var messageDiv = document.createElement('div');
        messageDiv.id = 'mobile-message';
        messageDiv.textContent = 'Bu içerik mobil cihazlarda kullanılamıyor. Lütfen bilgisayardan giriniz.';
        messageDiv.style.display = 'block';
        
        // h2 etiketinin altına yeni mesajı ekle
        h2.parentNode.insertBefore(messageDiv, h2.nextSibling);
        messageDisplayed = true;
      }
    });
  }
});


</script>
