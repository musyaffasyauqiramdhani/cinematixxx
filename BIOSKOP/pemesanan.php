<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Booking Tiket Bioskop - CinemaTixx</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    /* Reset dan dasar */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Cinzel', serif;
      background: linear-gradient(to right, rgb(25, 143, 176), rgb(237, 71, 11)); 
      color: #eee;
      line-height: 1.6;
      padding: 20px;
    }
    /* Container Utama */
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background: #333;
      border-radius: 8px;
    }
    h1 {
      text-align: center;
      font-size: 2rem;
      color: #fff;
      margin-bottom: 20px;
    }
    .field {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-size: 1rem;
      color: #ccc;
    }
    /* Dropdown dan Input */
    select, input[type="text"] {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      border: 1px solid #555;
      border-radius: 4px;
      background: #444;
      color: #eee;
    }
    select:focus, input[type="text"]:focus {
      outline: none;
      border-color: #888;
    }
    /* Grid Kursi */
    #seat-map {
      text-align: center;
      margin: 15px 0;
    }
    .seat {
      display: inline-block;
      width: 40px;
      height: 40px;
      margin: 4px;
      line-height: 40px;
      border-radius: 4px;
      background: #555;
      border: 1px solid #666;
      cursor: pointer;
      transition: background 0.2s;
    }
    .seat:hover {
      background: #666;
    }
    .seat.selected {
      background: #f00;
    }
    .seat input {
      display: none;
    }
    /* Total Harga */
    #total-harga {
      font-size: 1.2rem;
      color: #ffcc00;
    }
    /* Tombol */
    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      background: rgb(25, 143, 176);
      color: #fff;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
      margin-bottom: 10px;
    }
    .btn:hover {
      background: rgb(237, 71, 11);
    }
    @media (max-width: 600px) {
      .seat {
        width: 35px;
        height: 35px;
        line-height: 35px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>CinemaTixx</h1>
    
    <!-- Judul film yang dipilih -->
    <div class="field">
      <label>Film yang Dipilih:</label>
      <span id="selected-movie"></span>
    </div>
    
    <!-- Pilih Kota -->
    <div class="field">
      <label for="city">Pilih Kota:</label>
      <select id="city">
        <option value="">Pilih Kota</option>
        <option value="1">Bogor</option>
        <option value="2">Depok</option>
      </select>
    </div>
    
    <!-- Pilih Bioskop/Studio -->
    <div class="field">
      <label for="studio">Pilih Bioskop/Studio:</label>
      <select id="studio">
        <option value="">Pilih Bioskop/Studio</option>
      </select>
    </div>
    
    <!-- Pilih Jadwal Tayang -->
    <div class="field">
      <label for="schedule">Pilih Jadwal Tayang:</label>
      <select id="schedule">
        <option value="">Pilih Jadwal</option>
      </select>
    </div>
    
    <!-- Pilih Kursi -->
    <div class="field">
      <label>Pilih Kursi:</label>
      <div id="seat-map">
        <!-- Grid kursi akan dimuat di sini -->
      </div>
    </div>
    
    <!-- Total Harga -->
    <div class="field">
      <p>Total Harga: Rp. <span id="total-harga">0</span></p>
    </div>
    
    <!-- Pilih Metode Pembayaran -->
    <div class="field">
      <label for="payment">Pilih Metode Pembayaran:</label>
      <select id="payment">
        <option value="">Pilih Metode Pembayaran</option>
        <option value="ovo">OVO</option>
        <option value="gopay">GoPay</option>
        <option value="dana">Dana</option>
        <option value="qris">QRIS</option>
      </select>
    </div>
    
    <!-- Tombol Lanjutkan Pembayaran -->
    <div class="field">
      <button class="btn" id="btn-payment">Lanjutkan Pembayaran</button>
    </div>

    <!-- Tombol Kembali -->
    <div class="field">
      <button class="btn" id="btn-back">Kembali</button>
    </div>
  </div>
  
  <script>
    $(document).ready(function(){
      // Tampilkan judul film dari query string URL
      const urlParams = new URLSearchParams(window.location.search);
      const movieTitle = urlParams.get('movie');
      $('#selected-movie').text(movieTitle ? movieTitle : "Belum memilih film");
      
      // Data dummy untuk studio berdasarkan kota
      const studiosData = {
        "1": [
          {id: '1', name: 'Cibinong City Mall XXI'},
          {id: '2', name: 'Placa Cibubur XXI'}
        ],
        "2": [
          {id: '3', name: 'MARGOCITY XXI'},
          {id: '4', name: 'Pesona Square XXI'}
        ]
      };
      
      // Data dummy untuk jadwal
      const scheduleData = {
        '1': [
          {id: '101', day: 'Senin', time: '14:00'},
          {id: '102', day: 'Senin', time: '16:00'},
          {id: '103', day: 'Selasa', time: '14:00'},
          {id: '104', day: 'Selasa', time: '16:00'},
          {id: '105', day: 'Rabu', time: '14:00'},
          {id: '106', day: 'Rabu', time: '16:00'},
          {id: '107', day: 'Kamis', time: '14:00'},
          {id: '108', day: 'Kamis', time: '16:00'},
          {id: '109', day: 'Jumat', time: '14:00'},
          {id: '110', day: 'Jumat', time: '16:00'},
          {id: '111', day: 'Sabtu', time: '14:00'},
          {id: '112', day: 'Sabtu', time: '16:00'},
          {id: '113', day: 'Minggu', time: '14:00'},
          {id: '114', day: 'Minggu', time: '16:00'}
        ],
        '2': [
          {id: '201', day: 'Senin', time: '15:00'},
          {id: '202', day: 'Senin', time: '17:00'},
          {id: '203', day: 'Selasa', time: '15:00'},
          {id: '204', day: 'Selasa', time: '17:00'},
          {id: '205', day: 'Rabu', time: '15:00'},
          {id: '206', day: 'Rabu', time: '17:00'},
          {id: '207', day: 'Kamis', time: '15:00'},
          {id: '208', day: 'Kamis', time: '17:00'},
          {id: '209', day: 'Jumat', time: '15:00'},
          {id: '210', day: 'Jumat', time: '17:00'},
          {id: '211', day: 'Sabtu', time: '15:00'},
          {id: '212', day: 'Sabtu', time: '17:00'},
          {id: '213', day: 'Minggu', time: '15:00'},
          {id: '214', day: 'Minggu', time: '17:00'}
        ],
        '3': [
          {id: '301', day: 'Senin', time: '13:00'},
          {id: '302', day: 'Senin', time: '15:00'},
          {id: '303', day: 'Selasa', time: '13:00'},
          {id: '304', day: 'Selasa', time: '15:00'},
          {id: '305', day: 'Rabu', time: '13:00'},
          {id: '306', day: 'Rabu', time: '15:00'},
          {id: '307', day: 'Kamis', time: '13:00'},
          {id: '308', day: 'Kamis', time: '15:00'},
          {id: '309', day: 'Jumat', time: '13:00'},
          {id: '310', day: 'Jumat', time: '15:00'},
          {id: '311', day: 'Sabtu', time: '13:00'},
          {id: '312', day: 'Sabtu', time: '15:00'},
          {id: '313', day: 'Minggu', time: '13:00'},
          {id: '314', day: 'Minggu', time: '15:00'}
        ],
        '4': [
          {id: '401', day: 'Senin', time: '12:00'},
          {id: '402', day: 'Senin', time: '14:00'},
          {id: '403', day: 'Selasa', time: '12:00'},
          {id: '404', day: 'Selasa', time: '14:00'},
          {id: '405', day: 'Rabu', time: '12:00'},
          {id: '406', day: 'Rabu', time: '14:00'},
          {id: '407', day: 'Kamis', time: '12:00'},
          {id: '408', day: 'Kamis', time: '14:00'},
          {id: '409', day: 'Jumat', time: '12:00'},
          {id: '410', day: 'Jumat', time: '14:00'},
          {id: '411', day: 'Sabtu', time: '12:00'},
          {id: '412', day: 'Sabtu', time: '14:00'},
          {id: '413', day: 'Minggu', time: '12:00'},
          {id: '414', day: 'Minggu', time: '14:00'}
        ]
      };
      
      // Harga tiket per kursi
      const ticketPrice = 50000;
      
      // Update dropdown studio berdasarkan kota yang dipilih
      $('#city').change(function(){
        const cityId = $(this).val();
        let studioOptions = '<option value="">-- Pilih Bioskop/Studio --</option>';
        if(cityId && studiosData[cityId]){
          studiosData[cityId].forEach(function(studio){
            studioOptions += `<option value="${studio.id}">${studio.name}</option>`;
          });
        }
        $('#studio').html(studioOptions);
        $('#schedule').html('<option value="">-- Pilih Jadwal --</option>');
      });
      
      // Update dropdown jadwal berdasarkan studio yang dipilih
      $('#studio').change(function(){
        const studioId = $(this).val();
        let scheduleOptions = '<option value="">-- Pilih Jadwal --</option>';
        if(studioId && scheduleData[studioId]){
          const now = new Date();
          const dayMapping = {
            'Minggu': 0,
            'Senin': 1,
            'Selasa': 2,
            'Rabu': 3,
            'Kamis': 4,
            'Jumat': 5,
            'Sabtu': 6
          };
          scheduleData[studioId].forEach(function(schedule){
            let disabledAttr = "";
            const scheduleDayIndex = dayMapping[schedule.day];
            if(scheduleDayIndex < now.getDay()){
              disabledAttr = "disabled";
            } else if(scheduleDayIndex === now.getDay()){
              const [scheduleHour, scheduleMinute] = schedule.time.split(':').map(Number);
              if(now.getHours() > scheduleHour || (now.getHours() === scheduleHour && now.getMinutes() >= scheduleMinute)){
                disabledAttr = "disabled";
              }
            }
            scheduleOptions += `<option value="${schedule.id}" ${disabledAttr}>${schedule.day}, ${schedule.time}</option>`;
          });
        }
        $('#schedule').html(scheduleOptions);
      });
      
      // Buat grid kursi (4 baris x 8 kolom)
      const rows = ['A', 'B', 'C', 'D'];
      const cols = [1, 2, 3, 4, 5, 6, 7, 8];
      let seatMapHTML = '';
      rows.forEach(function(row){
        cols.forEach(function(col){
          const seatId = row + col;
          seatMapHTML += `<label class="seat">
                            <input type="checkbox" value="${seatId}">
                            ${seatId}
                          </label>`;
        });
        seatMapHTML += '<br>';
      });
      $('#seat-map').html(seatMapHTML);
      
      // Update total harga ketika kursi dipilih
      $('body').on('change', 'input[type="checkbox"]', function(){
        const selectedSeats = $('input[type="checkbox"]:checked').length;
        const totalPrice = selectedSeats * ticketPrice;
        $('#total-harga').text(totalPrice);
        if($(this).is(':checked')){
          $(this).parent().addClass('selected');
        } else {
          $(this).parent().removeClass('selected');
        }
      });
      
      // Aksi tombol lanjutkan pembayaran
      $('#btn-payment').click(function(){
        alert("Melanjutkan pembayaran untuk film: " + $('#selected-movie').text());
      });
      
      // Aksi tombol kembali
      $('#btn-back').click(function(){
        window.history.back();
      });
      
    });
  </script>
</body>
</html>
