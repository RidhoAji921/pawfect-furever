<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col justify-center items-center overflow-x-hidden gap-[60px] bg-backgroundColor">
<nav class="flex w-full justify-between items-center px-[60px]">
    <a href="/">
      <img src="{{ asset('images/Logo.png') }}" alt="Logo pawfect furever.">
    </a>
    <ul class="flex text-black font-Header font-medium gap-10">
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="/#home">Home</a>
      </li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="/#about">About</a>
      </li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="/#service">Services</a>
      </li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="#testimoni">Testimoni</a>
      </li>
    </ul>
    @auth
    <div class="flex items-center gap-2">
      <p class="text-textParagraph font-Quicksand text-Base font-medium">Selamat datang, {{ Auth::user()->name }}!</p>
      <a href="/cek-reservasi" class="flex text-white font-Quicksand text-Large
       font-medium gap-2 px-3 py-2 bg-Orange/10 rounded-[12px] items-center">Cek Reservasi
        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="white"  class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
      </a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="text-textParagraph font-Quicksand text-Base font-medium" href="">Logout</button>
      </form>
    </div>
    @else
    <a href="/login" class="flex text-white font-Quicksand text-Large font-medium gap-2 px-3 py-2 bg-Orange/10 rounded-[12px] items-center">Login
      <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="white"  class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
    </a>
    @endauth
  </nav>

    <div id="content" class="flex flex-col gap-10 justify-center items-center pb-10 w-full">
        <section id="Hero" class="flex lg:flex-row flex-col w-full gap-10 lg:px-[120px] px-5 justify-start items-center">
            <div class="flex flex-col gap-10 justify-center items-center w-full">
                <div class="flex flex-col gap-5 justify-center items-center w-full">
                    <p class="text-textTitle font-Quicksand text-Header2 font-bold text-center">Selamat datang di Pawfect Furever</p>
                    <a href="/reservasi-grooming" class=" flex bg-Orange/70 w-fit gap-2 px-10 py-4 items-center rounded-[16px] text-white font-Quicksand lg:text-Header4 text-Large font-bold">Reservasi
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="40"  height="40"  viewBox="0 0 24 24"  fill="white"  class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
                    </a>
                </div>
                <div class="flex bg-gray-400 w-full h-[172px] justify-center items-center rounded-[20px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="97" height="97" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-player-play"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" /></svg>
                </div>
            </div>
            <img src="{{ asset('images/Frame 154.png') }}" alt="Kucing Berwarna putih dan hitam bermata hijau kekuningan sedang melihat ke atas.">
            <div class="flex flex-col gap-4 justify-end items-center w-full">
                <img src="{{ asset('images/Frame 159.png') }}" class="w-[326px] h-[327px]" alt="Anak kucing berwana coklat sedang tertidur diatas sofa berwana coklat.">
                <p class="text-textTitle font-Quicksand text-Header3 font-bold text-center">tempat terbaik untuk perawatan hewan peliharaan Anda!</p>
            </div>
        </section>

        <section id="explanation" class="flex lg:flex-row flex-col gap-10 justify-center items-center lg:px-32 px-5 w-full">
          <img src="{{ asset('images/sc_pg2.png') }}" alt="2 kucing berwana coklat dan berwarna orange sedang diperiksa oleh seorang dokter hewan.">
          <div class="flex flex-col gap-5 items-end w-full">
            <h1 class="w-full text-textTitle font-Quicksand lg:text-Header2 text-Header3 font-bold lg:text-left text-center">Kenyamanan dan kebahagiaan hewan kesayangan Anda adalah prioritas kami dengan layanan terbaik.</h1>
            <p class="text-textParagraph font-raleway lg:text-Header4 text-Large lg:text-left text-center font-medium">Kami hadir dengan layanan profesional untuk memastikan hewan kesayangan Anda mendapatkan perawatan terbaik, penuh kasih, dan nyaman setiap saat.</p>
            <div class="lg:w-[450px] bg-textTitle lg:h-[4px] rounded-full w-full h-[4px]"> </div>
          </div>
        </section>

        <section id="about-service" class="flex flex-col justify-center items-center lg:px-32 px-5 w-full">
          <div class="w-full flex flex-col gap-5 px-10 py-5 bg-Orange/20 rounded-[40px]">
            <h1 class="text-textTitle font-Quicksand lg:text-Header2 text-Header4 text-center font-bold">Kami menyediakan berbagai layanan untuk<br>memastikan kenyamanan dan kebahagiaan<br>hewan kesayangan Anda.</h1>
            <div class="flex lg:flex-row flex-col gap-10 justify-start items-start">
              <img src="{{ asset('images/sc_pg3.png')}}" alt="Kucing berbulu lebat dengan warna coklat muda dan krem, sedang tidur dengan damai di atas permukaan yang tampak seperti kaca.">
              <div class="bg-textTitle lg:w-[20px] lg:h-[525px] rounded-full lg:rotate w-full h-[4px]"> </div>
              <div class="flex flex-col gap-5">
                <div class="flex flex-col gap-3">
                  <h1 class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold lg:text-left text-center">Pet Grooming -</h1>
                  <p class="text-textParagraph font-Quicksand lg:text-Header4 text-Base font-semibold lg:text-left text-center">Layanan grooming kami mencakup pembersihan telinga, pemotongan kuku, mandi, dan trim bulu, disesuaikan dengan kebutuhan hewan kesayangan Anda. Prosesnya berlangsung 60-120 menit, dengan kenyamanan sebagai prioritas utama.</p>
                </div>
                <div class="flex flex-col gap-3">
                  <h1 class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold lg:text-left text-center">Pet Hotel -</h1>
                  <p class="text-textParagraph font-Quicksand lg:text-Header4 text-Base font-semibold lg:text-left text-center">Nikmati liburan tanpa khawatir! Pet hotel kami menyediakan ruang tidur bersih, perawatan penuh kasih, dan lingkungan yang aman untuk hewan kesayangan Anda.</p>
                </div>
                <div class="flex flex-col gap-3">
                  <h1 class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold lg:text-left text-center">Pet Walking & Sitting -</h1>
                  <p class="text-textParagraph font-Quicksand lg:text-Header4 text-Base font-semibold lg:text-left text-center">Jadwal sibuk? Kami siap membantu! Tim profesional kami memastikan hewan peliharaan Anda mendapatkan perhatian, makanan, dan aktivitas fisik yang cukup, termasuk layanan jalan-jalan yang menyenangkan.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="benefit" class="flex flex-col gap-10 lg:px-32 px-5 w-full">
          <h1 class="text-textTitle font-Quicksand lg:ext-Header2 text-Header3 font-bold lg:text-left text-center">Keuntungan Memilih Pawfect Furever :</h1>
          <div class="flex lg:flex-row flex-col gap-10 items-center justify-center">
            <img src="{{ asset('images/sc_pg4.png') }}" alt="Empat foto kucing yang sedang dirawat, termasuk pemotongan kuku, pemegangan lembut, penyikatan bulu rontok, dan perawatan bulu putih dengan sikat hijau.">
            <ol class="flex flex-col gap-4">
              <li class="text-textParagraph font-raleway lg:text-Header4 text-Base font-medium lg:text-left text-center">1. Profesional & Berpengalaman : Tim kami terlatih menangani berbagai jenis hewan dengan penuh keahlian.</li>
              <li class="text-textParagraph font-raleway lg:text-Header4 text-Base font-medium lg:text-left text-center">2. Aman & Nyaman : Fasilitas dirancang untuk memastikan keamanan dan kenyamanan hewan kesayangan Anda.</li>
              <li class="text-textParagraph font-raleway lg:text-Header4 text-Base font-medium lg:text-left text-center">3. Perawatan Personal : Setiap hewan mendapat perhatian khusus sesuai kebutuhannya.</li>
              <li class="text-textParagraph font-raleway lg:text-Header4 text-Base font-medium lg:text-left text-center">4. Produk Terbaik : Kami hanya menggunakan produk perawatan berkualitas dan aman.</li>
            </ol>
          </div>
        </section>

      <section id="testimoni" class="flex flex-col lg:px-[120px] px-5 gap-10 w-full">
      <h1 class="text-textTitle font-Quicksand lg:text-Header1 text-Header2 font-bold lg:text-left text-center">Testimoni</h1>
      <div class="flex flex-col justify-center items-center w-full">
        <div class="flex lg:flex-row flex-col gap-10 lg:p-10 px-4 py-5 bg-Green/70 rounded-[40px] justify-center items-center w-full">
          <img src="{{ asset('images/Frame 107.png') }}" class="rounded-[20px] lg:w-auto w-full" alt="Seseorang membagikan testimoni di pawfect furever.">
          <div class="flex flex-col gap-10 lg:py-10 w-full">
            <div class="flex lg:gap-[120px] w-full justify-between">
              <div class="flex flex-col gap-3">
                <p class="text-textTitle font-raleway lg:text-Header2 text-Large font-bold">Wildan</p>
                <p class="text-textTitle/70 font-raleway lg:text-Large text-Base font-medium">27/09/2024</p>
              </div>
              <div class="flex flex-col gap-3">
                <p class="text-textTitle font-raleway lg:text-Header3 text-Header4 font-bold">5.0</p>
                <div class="flex gap-1">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                </div>
              </div>
            </div>
              <p class="text-textParagraph font-raleway lg:text-Large text-Base lg:text-left text-center font-medium">Tiga bulan lalu saya membawa Kucing saya ke Pawfect Furever untuk pertama kalinya, dan sekarang saya tidak bisa membayangkan pergi ke tempat lain! Tim mereka sangat profesional, ramah, dan penuh perhatian. Layanan grooming yang mereka tawarkan sangat detail dan hasilnya selalu memuaskan!</p>
          </div>
          <div class="flex lg:flex-col flex-row gap-5 h-fit">
            <div class="w-[30px] h-[30px] border border-white rounded-full"> </div>
            <div class="w-[30px] h-[30px] border border-white rounded-full"> </div>
            <div class="lg:w-[30px] lg:h-[80px] w-[80px] h-[30px] bg-backgroundColor border border-white rounded-full"> </div>
          </div>
        </div>

        <div class="flex flex-col justify-center items-center">
        <div class="flex lg:flex-row flex-col gap-10 lg:p-10 px-4 py-5 bg-Green/40 rounded-[40px] justify-center items-center w-full lg:-mt-[420px] -mt-[650px]">
          <img src="{{ asset('images/Frame 107.png') }}" class="rounded-[20px] lg:w-auto w-full" alt="Seseorang membagikan testimoni di pawfect furever.">
          <div class="flex flex-col gap-10 lg:py-10 w-full">
            <div class="flex lg:gap-[120px] w-full justify-between">
              <div class="flex flex-col gap-3">
                <p class="text-textTitle font-raleway lg:text-Header2 text-Large font-bold">Wildan</p>
                <p class="text-textTitle/70 font-raleway lg:text-Large text-Base font-medium">27/09/2024</p>
              </div>
              <div class="flex flex-col gap-3">
                <p class="text-textTitle font-raleway lg:text-Header3 text-Header4 font-bold">5.0</p>
                <div class="flex gap-1">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                </div>
              </div>
            </div>
              <p class="text-textParagraph font-raleway lg:text-Large text-Base lg:text-left text-center font-medium">Tiga bulan lalu saya membawa Kucing saya ke Pawfect Furever untuk pertama kalinya, dan sekarang saya tidak bisa membayangkan pergi ke tempat lain! Tim mereka sangat profesional, ramah, dan penuh perhatian. Layanan grooming yang mereka tawarkan sangat detail dan hasilnya selalu memuaskan!</p>
          </div>
          <div class="flex lg:flex-col flex-row gap-5 h-fit">
            <div class="w-[30px] h-[30px] border border-white rounded-full"> </div>
            <div class="w-[30px] h-[30px] border border-white rounded-full"> </div>
            <div class="lg:w-[30px] lg:h-[80px] w-[80px] h-[30px] bg-backgroundColor border border-white rounded-full"> </div>
          </div>
        </div>

        <div class="flex flex-col justify-center items-center">
        <div class="flex lg:flex-row flex-col gap-10 lg:p-10 px-4 py-5 bg-Green/10 rounded-[40px] justify-center items-center w-full lg:-mt-[420px] -mt-[650px]">
          <img src="{{ asset('images/Frame 107.png') }}" class="rounded-[20px] lg:w-auto w-full" alt="Seseorang membagikan testimoni di pawfect furever.">
          <div class="flex flex-col gap-10 lg:py-10 w-full">
            <div class="flex lg:gap-[120px] w-full justify-between">
              <div class="flex flex-col gap-3">
                <p class="text-textTitle font-raleway lg:text-Header2 text-Large font-bold">Wildan</p>
                <p class="text-textTitle/70 font-raleway lg:text-Large text-Base font-medium">27/09/2024</p>
              </div>
              <div class="flex flex-col gap-3">
                <p class="text-textTitle font-raleway lg:text-Header3 text-Header4 font-bold">5.0</p>
                <div class="flex gap-1">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="#570F29"  class="lg:w-[30px] lg:h-[30px] icon icon-tabler icons-tabler-filled icon-tabler-star"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" /></svg>
                </div>
              </div>
            </div>
              <p class="text-textParagraph font-raleway lg:text-Large text-Base lg:text-left text-center font-medium">Tiga bulan lalu saya membawa Kucing saya ke Pawfect Furever untuk pertama kalinya, dan sekarang saya tidak bisa membayangkan pergi ke tempat lain! Tim mereka sangat profesional, ramah, dan penuh perhatian. Layanan grooming yang mereka tawarkan sangat detail dan hasilnya selalu memuaskan!</p>
          </div>
          <div class="flex lg:flex-col flex-row gap-5 h-fit">
            <div class="w-[30px] h-[30px] border border-white rounded-full"> </div>
            <div class="w-[30px] h-[30px] border border-white rounded-full"> </div>
            <div class="lg:w-[30px] lg:h-[80px] w-[80px] h-[30px] bg-backgroundColor border border-white rounded-full"> </div>
          </div>
        </div>
    </section>

    <section id="Cta" class="flex flex-col lg:px-[120px] px-5 w-full lg:items-start items-center">
      <div class="flex bg-Orange/70 lg:px-10 px-4 py-[60px] justify-end items-end rounded-[40px] w-full">
        <div class="flex flex-col gap-5 justify-center items-center w-full">
          <p class="text-white font-Quicksand lg:text-Header2 text-Header3 font-bold text-center">Yuk, Buat Peliharaan Anda Tampil<br>Menawan!</p>
          <a  class="flex bg-white gap-2 px-4 py-4 w-fit rounded-[16px] justify-center items-center text-Orange/70 font-Quicksand lg:text-Header4 text-Large font-bold ">Reservasi Sekarang
          <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="#C5705D"  class="lg:w-[40px] lg:h-[40px] icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
          </a>
        </div>
      </div>
      <img src="{{ asset('images/gray cat.png') }}" class="lg:w-[456px] lg:h-[469px] w-[148px] h-[154px] lg:-mt-[290px] -mt-[98px]" alt="Kucing abu-abu berbulu tebal, mengajak untuk membuat peliharaan tampil menawan.">
    </section>
  </div>

  <footer id="footer" class="flex flex-col bg-footerColor w-full justify-center items-center gap-10 py-5 lg:px-80 px-5 rounded-t-[40px]">
        <div class="flex lg:flex-row flex-col lg:gap-[80px] gap-10 lg:w-[1183px] w-full">
            <div class="flex flex-col gap-5 w-full">
                <div class="flex flex-col gap-4">
                    <p class="text-black font-Quicksand text-Header4 font-bold">Whatsapp</p>
                    <p class="flex gap-3 text-black font-Quicksand text-Large font-medium justify-center items-center w-fit">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" /><path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" /></svg>    
                    +62812123456789</p>
                </div>
                <div class="flex flex-col gap-4">
                    <p class="text-black font-Quicksand text-Header4 font-bold">Email</p>
                    <p class="flex gap-3 text-black font-Quicksand text-Large font-medium justify-center items-center w-fit">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-gmail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z" /><path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z" /><path d="M16 4l-4 4l-4 -4" /><path d="M4 6.5l8 7.5l8 -7.5" /></svg>
                    pawfectfurever@gmail.com</p>
                </div>
            </div>
            <div class="flex flex-col gap-4 justify-center items-center w-full">
                <img src="{{ asset('images/Logo.png') }}" class="w-[100px] h-[100px]" alt="Logo pawfect furever.">
                <p class="text-black font-Quicksand text-Header4 font-semibold">Pawfect Furever</p>
                <div class="flex gap-5">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" /></svg>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>
                </div>
            </div>
            <ul class="flex flex-col text-black font-Quicksand text-Header4 font-semibold gap-3 justify-center lg:items-center items-start w-full">pages
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="/#home">Home</a>
                </li>
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="/#about">About</a>
                </li>
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="/#service">Service</a>
                </li>
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="/#testimoni">Testimoni</a>
                </li>
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="/cek-reservasi">Cek Reservasi</a>
                </li>
            </ul>
        </div>
        <div class="flex h-[3px] lg:w-[1238px] rounded-full w-full bg-black opacity-50"> </div>
        <p class="text-black opacity-70 font-Quicksand text-Large font-medium text-center">pawfect furever © 2024 All Right Reserved</p>
  </footer>
</body>
</html>