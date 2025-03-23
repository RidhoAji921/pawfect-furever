<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <title>Welcome</title>
</head>
<body class="flex flex-col justify-center items-center gap-[60px] bg-backgroundColor w-full">
  <nav class="flex w-full justify-between items-center px-[60px]">
    <a href="/">
      <img src="{{ asset('images/Logo.png') }}" alt="Logo pawfect furever">
    </a>
    <ul class="flex text-black font-Header font-medium gap-10">
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="#home">Home</a>
      </li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="#about">About</a>
      </li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="#service">Services</a>
      </li>
      <li class="text-textParagraph font-Quicksand text-Header4 font-medium">
        <a href="#testimoni">Testimoni</a>
      </li>
    </ul>
    @auth
    <div class="flex items-center gap-2">
      <p class="text-textParagraph font-Quicksand text-Base font-medium">Selamat datang, {{ Auth::user()->name }}!</p>
      <a href="/profile" class="flex text-white font-Quicksand text-Large
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

  <div id="content" class="flex flex-col md:gap-20 gap-10 justify-center items-center pb-10 w-full">
    <section id="home" class="flex flex-col justify-center items-center md:gap-10 gap-5 lg:px-[120px] px-5 w-full">
      <h1 class="text-textTitle font-Quicksand font-bold lg:text-Header1 text-Header3 text-center">Anabul Cantik dan Sehat Setiap Hari</h1>
        <div class="flex flex-col gap-10 justify-center items-center w-full">
          <p class="text-textParagraph md:text-Header3 text-Header4 font-semibold font-raleway text-center w-full">Temukan rahasia perawatan terbaik untuk anabul kesayangan Anda!</p>
            <a href="reservasi-grooming" class="flex bg-Orange/70 gap-2 px-10 py-4 rounded-2xl text-white font-Quicksand text-Header4 font-bold items-center">Reservasi
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="white"
                class="icon icon-tabler icons-tabler-filled icon-tabler-paw">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path
                  d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" />
                <path
                  d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" />
                <path
                  d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" />
                <path
                  d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" />
                <path
                  d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" />
              </svg>
            </a>
        </div>
        <div class="flex flex-col gap-10 justify-center items-center w-full">
          <img src="{{ asset('images/Frame 13.png') }}" class="md:h-full md:w-auto w-80 h-full object-cover" alt="Dua kucing setelah grooming.">
          <div class="flex flexl md:gap-10 gap-4 justify-center lg:items-center items-start w-full">
            <div class="lg:w-full lg:h-[5px] bg-textTitle rounded-full"> </div>
              <div class="flex flex-col gap-3 justify-center items-center w-full lg:border-4 lg:border-Orange/70 rounded-full px-5 py-3">
                <div class="flex gap-2 items-center">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-award"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.496 13.983l1.966 3.406a1.001 1.001 0 0 1 -.705 1.488l-.113 .011l-.112 -.001l-2.933 -.19l-1.303 2.636a1.001 1.001 0 0 1 -1.608 .26l-.082 -.094l-.072 -.11l-1.968 -3.407a8.994 8.994 0 0 0 6.93 -3.999z" /><path d="M11.43 17.982l-1.966 3.408a1.001 1.001 0 0 1 -1.622 .157l-.076 -.1l-.064 -.114l-1.304 -2.635l-2.931 .19a1.001 1.001 0 0 1 -1.022 -1.29l.04 -.107l.05 -.1l1.968 -3.409a8.994 8.994 0 0 0 6.927 4.001z" /><path d="M12 2l.24 .004a7 7 0 0 1 6.76 6.996l-.003 .193l-.007 .192l-.018 .245l-.026 .242l-.024 .178a6.985 6.985 0 0 1 -.317 1.268l-.116 .308l-.153 .348a7.001 7.001 0 0 1 -12.688 -.028l-.13 -.297l-.052 -.133l-.08 -.217l-.095 -.294a6.96 6.96 0 0 1 -.093 -.344l-.06 -.271l-.049 -.271l-.02 -.139l-.039 -.323l-.024 -.365l-.006 -.292a7 7 0 0 1 6.76 -6.996l.24 -.004z" /></svg>
                  <p class="text-textTitle font-Quicksand md:text-Header3 text-Large font-bold w-full">500+</p>
                </div>
                <p class="text-textParagraph font-Quicksand md:text-Header4 text-Base font-semibold text-center w-fit">Happy Customer</p>
              </div>
              <div class="flex flex-col gap-3 justify-center items-center w-full lg:border-4 lg:border-Orange/70 rounded-full px-5 py-3">
                <div class="flex gap-2 items-center">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-award"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.496 13.983l1.966 3.406a1.001 1.001 0 0 1 -.705 1.488l-.113 .011l-.112 -.001l-2.933 -.19l-1.303 2.636a1.001 1.001 0 0 1 -1.608 .26l-.082 -.094l-.072 -.11l-1.968 -3.407a8.994 8.994 0 0 0 6.93 -3.999z" /><path d="M11.43 17.982l-1.966 3.408a1.001 1.001 0 0 1 -1.622 .157l-.076 -.1l-.064 -.114l-1.304 -2.635l-2.931 .19a1.001 1.001 0 0 1 -1.022 -1.29l.04 -.107l.05 -.1l1.968 -3.409a8.994 8.994 0 0 0 6.927 4.001z" /><path d="M12 2l.24 .004a7 7 0 0 1 6.76 6.996l-.003 .193l-.007 .192l-.018 .245l-.026 .242l-.024 .178a6.985 6.985 0 0 1 -.317 1.268l-.116 .308l-.153 .348a7.001 7.001 0 0 1 -12.688 -.028l-.13 -.297l-.052 -.133l-.08 -.217l-.095 -.294a6.96 6.96 0 0 1 -.093 -.344l-.06 -.271l-.049 -.271l-.02 -.139l-.039 -.323l-.024 -.365l-.006 -.292a7 7 0 0 1 6.76 -6.996l.24 -.004z" /></svg>
                  <p class="text-textTitle font-Quicksand md:text-Header3 text-Large font-bold w-full">2 Tahun</p>
                </div>
                <p class="text-textParagraph font-Quicksand md:text-Header4 text-Base font-semibold">pengalaman</p>
              </div>
              <div class="lg:w-full lg:h-[4px] bg-textTitle rounded-full"> </div>
            </div>
          </div>
    </section>

    <section id="information" class="flex flex-col justify-center items-center w-full lg:px-[120px] px-5">
      <div class="flex w-full lg:flex-row flex-col lg:-mb-[110px] -mb-[183px] z-10 justify-between items-center">
        <div></div>
        <div></div>
        <img src="{{ asset('images/2cat.png') }}" class="lg:w-auto w-[179px]" alt="Dua anak kucing berwarna coklat dan berwarna putih.">
        <img src="{{ asset('images/cat track.png') }}" class="mt-[100px] lg:w-auto w-[71px]" alt="Makanan kucing berbentuk telapak kaki kucing.">
      </div>
      <div
        class="flex lg:flex-row flex-col h-fit lg:w-full w-[248px] max-w-[1266px] bg-Orange/70 lg:px-[120px] px-3 py-5 rounded-[20px] justify-center items-center lg:gap-10 gap-4">
        <div class="flex flex-col gap-4 w-full">
          <h2 class="text-white font-raleway lg:text-Header2 text-Header4 font-bold text-center">Jangan khawatir saat anda sibuk</h2>
          <p class="text-white font-raleway lg:text-Large text-Base text-center font-medium">Ketika Anda sibuk atau sedang bepergian, kami
            menawarkan tempat yang aman untuk sahabat berbulu Anda. Dengan fasilitas premium dan layanan pribadi, kami
            memastikan setiap hari mereka dipenuhi dengan perhatian, kenyamanan, dan kesenangan.</p>
        </div>
        <div class="lg:h-[131px] bg-white lg:w-[5px] w-[3px] h-[60px]"> </div>
        <h2 class="text-white font-Quicksand lg:text-Header2 text-Header4 font-bold">20k/Malam</h2>
      </div>
    </section>

    <section id="about" class="flex lg:flex-row flex-col lg:gap-10 gap-5 lg:px-[120px] px-5 w-full justify-center items-center">
      <div class="flex flex-col items-center gap-10">
        <h1 class="text-textTitle lg:text-Header1 text-Header2 font-Quicksand font-bold text-heroTitle w-full lg:text-left text-center">Tempat Perawatan Terbaik untuk
          Sahabat Berbulu Anda</h1>
        <p class="text-textParagraph font-raleway font-medium lg:text-Header4 text-Large  text-justify">Selamat datang di Pawfect Furever! Didirikan pada 2024, kami hadir dengan dedikasi untuk memberikan perawatan terbaik bagi hewan peliharaan Anda. Dengan tim profesional berpengalaman,
        kami menawarkan layanan grooming yang memastikan penampilan, kesehatan, dan kebahagiaan hewan kesayangan Anda. Mari ciptakan pengalaman grooming yang menyenangkan bersama kami!</p>
      </div>
      <img src="{{ asset('images/Frame 84.png') }}" alt="kucing British Shorthair abu-abu dengan mata kuning keemasan.">
    </section>
    
    <section id="service" class="flex flex-col gap-10 lg:px-[120px] px-5 justify-center items-center w-full">
      <h1 class="text-textTitle font-Quicksand lg:text-Header1 text-Header2 font-bold text-center">Pelayanan Kami</h1>
      <div class="flex lg:flex-row flex-col gap-10">
        <div class="flex flex-col gap-10 w-full">
          <div class="flex bg-gray-300 justify-center items-center rounded-[40px] w-full h-[331px]">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="80"  height="80"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-player-play"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" /></svg>
          </div>
          <div class="flex flex-col gap-5 justify-center items-center">
            <p class="text-textParagraph font-raleway lg:text-Large text-Base lg:text-left text-center font-medium">Pawfect Furever hadir dengan cinta dan dedikasi, menawarkan grooming berkualitas tinggi untuk memastikan hewan peliharaan merasa sempurna dan dicintai selamanya.</p>
            <a href="service" class="bg-Orange/70 px-4 py-4 rounded-[16px] justify-center items-center text-white font-Quicksand text-Base font-bold w-fit">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="flex flex-col gap-10 w-full justify-center items-center">
          <div class="flex flex-col gap-5">
            <div class="flex gap-5 justify-center items-center lg:w-fit w-full">
              <img src="{{ asset('images/Logo Pet grooming.png') }}" alt="Pet grooming.">
              <p class="text-textTitle font-Quicksand lg:text-Header4 text-Header4 font-semibold">Pet Grooming</p>
            </div>
            <p class="text-textParagraph font-raleway lg:text-Large text-Base lg:text-left text-center font-medium">Pet grooming adalah proses merawat dan membersihkan hewan peliharaan untuk menjaga kebersihan dan kesehatan mereka.</p>
          </div>
          <div class="w-full h-[5px] bg-line rounded-full"> </div>
          <div class="flex flex-col gap-5">
            <div class="flex gap-5 justify-center items-center lg:w-fit w-full">
              <img src="{{ asset('images/Logo Pet Hotel.png') }}" alt="Pet hotel.">
              <p class="text-textTitle font-Quicksand lg:text-Header4 text-Header4 font-semibold">Pet Hotel</p>
            </div>
            <p class="text-textParagraph font-raleway lg:text-Large text-Base lg:text-left text-center font-medium">Pet hotel adalah tempat penginapan sementara untuk hewan peliharaan dengan fasilitas perawatan dan kenyamanan layaknya di rumah.</p>
          </div>
          <div class="w-full h-[5px] bg-line rounded-full"> </div>
          <div class="flex flex-col gap-5">
            <div class="flex gap-5 justify-center items-center lg:w-fit w-full">
              <img src="{{ asset('images/Logo Pet Walking.png') }}" alt="Pet Walking.">
              <p class="text-textTitle font-Quicksand lg:text-Header4 text-Header4 font-semibold">Pet Walking & Sitting</p>
            </div>
            <p class="text-textParagraph font-raleway lg:text-Large text-Base lg:text-left text-center font-medium">Pet walking dan sitting memberikan kenyamanan bagi hewan peliharaan Anda, memastikan mereka tetap aktif dan terawat saat Anda sibuk.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="price" class="flex flex-col gap-10 lg:px-[120px] px-5 justify-center items-center w-full">
      <div class="flex flex-col gap-5 lg:w-fit w-full justify-center items-center">
        <h1 class="text-textTitle font-Quicksand lg:text-Header1 text-Header2 font-bold text-center">Daftar Harga Grooming</h1>
        <p class="text-textParagraph font-raleway text-Large font-medium text-center">Daftar harga kami mencakup berbagai layanan perawatan untuk hewan peliharaan Anda, memastikan Anda mendapatkan kualitas terbaik dengan harga yang sesuai.</p>
      </div>
      <div class="flex lg:flex-row flex-col gap-10 w-fit justify-center items-center">
        <div class="flex flex-col gap-10 px-5 py-4 bg-Orange/20 rounded-[28px] h-fit">
          <p class="text-textTitle font-Quicksand text-Header4 font-bold">Mandi Biasa</p>
          <p class="text-textTitle font-Quicksand text-Header2 font-bold">Rp150.000</p>
          <div class="flex flex-col gap-4">
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Mandi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Bersih Telinga</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Sikat Badan & Sisir Bulu</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Gunting Kuku</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Pewangi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Sikat Gigi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Cukur Rapi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Perawatan Bulu</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Pengobatan Kulit</p>
            </div>
          </div>
          <button class="text-white font-raleway text-Large font-bold py-4 bg-Orange/10 rounded-[16px]">Beli Sekarang</button>
        </div>

        <div class="flex flex-col justify-center items-center">
          <img src="{{ asset('images/half face cat.png') }}" class=" z-10 -mb-[30px]" alt="Kucing abu-abu dengan mata kuning mengintip di atas.">
          <div class="flex flex-col gap-10 px-5 py-4 bg-Orange/20 rounded-[28px]">
            <p class="text-textTitle font-Quicksand text-Header4 font-bold">Mandi Lengkap</p>
            <p class="text-textTitle font-Quicksand text-Header2 font-bold">Rp300.000</p>
            <div class="flex flex-col gap-4">
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Mandi</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Bersih Telinga</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Sikat Badan & Sisir Bulu</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Gunting Kuku</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Pewangi</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Sikat Gigi</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Cukur Rapi</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Perawatan Bulu</p>
              </div>
              <div class="flex gap-2">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
                <p class="text-textTitle font-raleway text-Large font-bold">Pengobatan Kulit</p>
              </div>
            </div>
            <button class="text-white font-raleway text-Large font-bold py-4 bg-Orange/10 rounded-[16px]">Beli Sekarang</button>
          </div>
        </div>

        <div class="flex flex-col gap-10 px-5 py-4 bg-Orange/20 rounded-[28px] h-fit">
          <p class="text-textTitle font-Quicksand text-Header4 font-bold">Mandi Biasa</p>
          <p class="text-textTitle font-Quicksand text-Header2 font-bold">Rp150.000</p>
          <div class="flex flex-col gap-4">
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Mandi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Bersih Telinga</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Sikat Badan & Sisir Bulu</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Gunting Kuku</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold">Pewangi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Sikat Gigi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Cukur Rapi</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Perawatan Bulu</p>
            </div>
            <div class="flex gap-2">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="#570F29"  class="opacity-40 icon icon-tabler icons-tabler-filled icon-tabler-circle-check"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M17 3.34a10 10 0 1 1 -14.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 14.995 -8.336zm-1.293 5.953a1 1 0 0 0 -1.32 -.083l-.094 .083l-3.293 3.292l-1.293 -1.292l-.094 -.083a1 1 0 0 0 -1.403 1.403l.083 .094l2 2l.094 .083a1 1 0 0 0 1.226 0l.094 -.083l4 -4l.083 -.094a1 1 0 0 0 -.083 -1.32z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold opacity-40">Pengobatan Kulit</p>
            </div>
          </div>
          <button class="text-white font-raleway text-Large font-bold py-4 bg-Orange/10 rounded-[16px]">Beli Sekarang</button>
        </div>
      </div>
    </section>

    <section id="why" class="flex lg:flex-row flex-col gap-10 lg:px-[120px] w-full">
      <img src="{{ asset('images/frame 95.png') }}" class="lg:w-auto lg:h-auto w-[290px] h-[415px]" alt="kucing abu-abu sedang melihat keunggulan layanan pawfect furever.">
      <div class="flex flex-col gap-10 justify-center items-center w-full px-5">
        <h1 class="text-textTitle font-Quicksand lg:text-Header1 text-Header2 lg:text-left text-center font-bold">Kenapa Harus Groming di Pawfect Furever</h1>
        <div class="flex flex-col lg:gap-[60px] gap-5 items-center justify-center">
          <div class="flex lg:flex-row flex-col lg:gap-10 gap-5">
            <div class="flex flex-col gap-3 lg:items-start items-center">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-tree"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 13l-2 -2" /><path d="M12 12l2 -2" /><path d="M12 21v-13" /><path d="M9.824 16a3 3 0 0 1 -2.743 -3.69a3 3 0 0 1 .304 -4.833a3 3 0 0 1 4.615 -3.707a3 3 0 0 1 4.614 3.707a3 3 0 0 1 .305 4.833a3 3 0 0 1 -2.919 3.695h-4z" /></svg>
              <p class="text-textTitle font-raleway lg:text-Large text-Header4 font-bold lg:text-left text-center">Lingkungan Ramah Hewan</p>
              <p class="text-textParagraph font-raleway text-Base font-medium lg:text-left text-center">Fasilitas kami dirancang untuk menciptakan suasana yang tenang dan pengalaman grooming menjadi menyenangkan bagi hewan peliharaan.</p>
            </div>
            <div class="flex flex-col gap-3 lg:items-start items-center">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-user-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h.5" /><path d="M18 22l3.35 -3.284a2.143 2.143 0 0 0 .005 -3.071a2.242 2.242 0 0 0 -3.129 -.006l-.224 .22l-.223 -.22a2.242 2.242 0 0 0 -3.128 -.006a2.143 2.143 0 0 0 -.006 3.071l3.355 3.296z" /></svg>
              <p class="text-textTitle font-raleway lg:text-Large text-Header4 font-bold lg:text-left text-center">Sentuhan Profesional</p>
              <p class="text-textParagraph font-raleway text-Base font-medium lg:text-left text-center">Kami menggunakan teknik grooming terbaru dan alat berkualitas tinggi untuk memastikan setiap hewan peliharaan mendapatkan perawatan.</p>
            </div>
          </div>
          <div class="flex lg:flex-row flex-col lg:gap-10 gap-5">
            <div class="flex flex-col gap-3 lg:items-start items-center">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-medal"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 4v3m-4 -3v6m8 -6v6" /><path d="M12 18.5l-3 1.5l.5 -3.5l-2 -2l3 -.5l1.5 -3l1.5 3l3 .5l-2 2l.5 3.5z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold lg:text-left text-center">Perawatan Berkualitas</p>
              <p class="text-textParagraph font-raleway text-Base font-medium lg:text-left text-center">Kami menggunakan produk berkualitas tinggi dan peralatan terkini untuk memastikan hasil grooming terbaik.</p>
            </div>
            <div class="flex flex-col gap-3 lg:items-start items-center">
              <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-heart"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M11.993 16.75l2.747 -2.815a1.9 1.9 0 0 0 0 -2.632a1.775 1.775 0 0 0 -2.56 0l-.183 .188l-.183 -.189a1.775 1.775 0 0 0 -2.56 0a1.899 1.899 0 0 0 0 2.632l2.738 2.825z" /></svg>
              <p class="text-textTitle font-raleway text-Large font-bold lg:text-left text-center">Kesehatan dan Kebersihan</p>
              <p class="text-textParagraph font-raleway text-Base font-medium lg:text-left text-center">Perawatan menyeluruh yang menjaga kebersihan dan kesehatan hewan peliharaan Anda, dari bulu hingga kulit.</p>
            </div>
          </div>
        </div>
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
          <a href="/reservasi-grooming" class="flex bg-white gap-2 px-4 py-4 w-fit rounded-[16px] justify-center items-center text-Orange/70 font-Quicksand lg:text-Header4 text-Large font-bold ">Reservasi Sekarang
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
                <img src="{{ asset('images/Logo.png') }}" class="w-[100px] h-[100px]" alt="Logo pawfect furever">
                <p class="text-black font-Quicksand text-Header4 font-semibold">Pawfect Furever</p>
                <div class="flex gap-5">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" /></svg>
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /><path d="M16.5 7.5l0 .01" /></svg>
                </div>
            </div>
            <ul class="flex flex-col text-black font-Quicksand text-Header4 font-semibold gap-3 justify-center lg:items-center items-start w-full">pages
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="#home">Home</a>
                </li>
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="#about">About</a>
                </li>
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="#service">Service</a>
                </li>
                <li class="text-black font-Quicksand text-Header4 font-medium">
                  <a href="#testimoni">Testimoni</a>
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