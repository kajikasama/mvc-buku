    <div class="bg">
    <div class="navbar">
    <div class="nav-brand">
      <a href="<?=BASEURL; ?>/home">Hagyukuro</a>
    </div>
    <li class="nav-list"><a href="<?=BASEURL; ?>/about">about</a></li>
    <li class="nav-list"><a href="<?=BASEURL; ?>/product">product</a></li>
    <li class="nav-list"><a href="<?=BASEURL; ?>/location">location</a></li>
    </div>
    <div class="header-tulisan">
    <h1>Semua Orang Bisa Ke Gensokyo</h1>
    <h2>Hallo, nama saya <?=$data['nama']; ?></h2>
    <a href="#" class="button purple-line">Baca Lebih</a>
  </div>
</div>
<div class="search">
  <div class="container">
    <form action="">
      <input type="text" placeholder="Books title">
      <input type="text"  placeholder="Books Category">
      <input type="text"  placeholder="Books Author">
      <input type="submit" value="SEARCH">
    </form>
  </div>
</div>
<div class="popular">
  <h2>Popluar Books</h2>
  <div class="thebooks">
  </div>
</div>