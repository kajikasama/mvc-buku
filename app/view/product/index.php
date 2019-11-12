<div class="bg3">
  <div class="navbar">
    <div class="nav-brand">
      <a href="<?=BASEURL; ?>/home">Hagyukuro</a>
    </div>
    <li class="nav-list"><a href="<?=BASEURL; ?>/about">about</a></li>
    <li class="nav-list underline"><a href="<?=BASEURL; ?>/product">product</a></li>
    <li class="nav-list"><a href="<?=BASEURL; ?>/location">location</a></li>
  </div>
  <div class="header-tulisan">
    <h1>Hasil Dunia Yang Tak Tertandingkan</h1>
    <h2>4 Musim Penuh Berkah</h2>
    <a href="#" class="button red-line">Baca Lebih</a>
  </div>
</div>
<div class="popular">
  <h2>Popluar Products</h2>
  <div class="thebooks">
    
  </div>
  <br>
  <div class="thebooks">
    <table width="100%">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tahun</th>
        <th>Penerbit</th>
        <th>Pengarang</th>
        <th>Halaman</th>
        <th>Harga</th>
      </tr>
      <?php foreach($data['product'] as $product) : ?>
      <tr align="center">
        <td><?=$product['KodeProduk'] ?></td>
        <td><?=$product['Judul'] ?></td>
        <td><?=$product['Tahun'] ?></td>
        <td><?=$product['Penerbit'] ?></td>
        <td><?=$product['Pengarang'] ?></td>
        <td><?=$product['Halaman'] ?></td>
        <td><?=$product['Harga'] ?></td>
      </tr>
      <?php endforeach;?>
    </table>
  </div>
</div>