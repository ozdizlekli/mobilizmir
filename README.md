# MOBİLİZMİR - Mobil Araç Bakım Hizmetleri

İzmir genelinde adrese teslim ve yerinde mobil araç bakım hizmetleri sunan **MOBİLİZMİR** kurumsal web sitesi.

## 🌟 Özellikler
- **Konsept:** Lüks & Sade "Gold & Black" tasarım (#0A0A0A arka plan, #D4AF37 altın sarısı vurgular).
- **Altyapı:** WordPress + MariaDB (Docker Compose ile tek komutla ayağa kaldırma).
- **Hizmetler:**
  - Koltuk Yıkama
  - Pasta Cila
  - Far Temizliği
  - Boyasız Göçük Düzeltme
  - Periyodik Bakım
- **Etkileşim:** Doğrudan WhatsApp (0540 187 20 03) hızlı randevu ve iletişim yönlendirmeleri, yapışkan WhatsApp butonu.
- **Tipografi & Düzen:** Playfair Display & Inter fontları, özel responsive flex header ve kart tasarımları.

## 🚀 Başlarken (Docker ile Çalıştırma)

Projeyi klonladıktan sonra dizine gidin:

```bash
docker compose up -d
```

- Web Sitesi: [http://localhost:8000](http://localhost:8000)
- WordPress Yönetim Paneli: [http://localhost:8000/wp-admin](http://localhost:8000/wp-admin)
  - **Kullanıcı:** `admin`
  - **Şifre:** `admin`

Veritabanı dökümü `database_dump.sql` dosyası olarak projeye dahil edilmiştir.
