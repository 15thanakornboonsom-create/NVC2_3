<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>สวนสัตว์เขียวขจี</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>🌳 สวนสัตว์เขียวขจี</h1>
    <nav>
      <ul>
        <li><a href="#home">หน้าแรก</a></li>
        <li><a href="#animals">สัตว์ของเรา</a></li>
        <li><a href="#tickets">ซื้อตั๋ว</a></li>
        <li><a href="#contact">ติดต่อเรา</a></li>
      </ul>
    </nav>
  </header>

  <section id="home" class="hero">
    <h2>ยินดีต้อนรับสู่สวนสัตว์เขียวขจี!</h2>
    <p>พบกับสัตว์กว่า 200 ชนิดจากทั่วโลก ท่ามกลางธรรมชาติอันร่มรื่น</p>
    <a href="#tickets" class="btn">ซื้อตั๋วเลย!</a>
  </section>

  <section id="animals" class="animals">
    <h2>🐘 สัตว์ในสวน</h2>
    <div class="animal-grid">
      <div class="animal-card">
        <img src="lion.jpg" alt="สิงโต">
        <h3>สิงโต</h3>
        <p>ราชาแห่งทุ่งหญ้าแอฟริกา</p>
      </div>
      <div class="animal-card">
        <img src="panda.jpg" alt="แพนด้า">
        <h3>แพนด้า</h3>
        <p>ขี้เล่น ชอบกินไผ่</p>
      </div>
      <div class="animal-card">
        <img src="giraffe.jpg" alt="ยีราฟ">
        <h3>ยีราฟ</h3>
        <p>คอยาวน่ารัก มองเห็นได้ไกล</p>
      </div>
    </div>
  </section>

  <section id="tickets" class="tickets">
    <h2>🎟️ ซื้อบัตรเข้าชม</h2>
    <p>ผู้ใหญ่ 150 บาท | เด็ก 80 บาท</p>
    <button onclick="buyTicket()">ซื้อตั๋วออนไลน์</button>
  </section>

  <section id="contact" class="contact">
    <h2>📞 ติดต่อเรา</h2>
    <p>โทร: 02-123-4567 | อีเมล: info@greenzoopark.com</p>
  </section>

  <footer>
    <p>© 2025 สวนสัตว์เขียวขจี</p>
  </footer>

  <script>
    function buyTicket() {
      alert("ขอบคุณที่สนใจ! ระบบซื้อตั๋วออนไลน์จะเปิดเร็ว ๆ นี้ 🦓");
    }
  </script>
</body>
</html>
