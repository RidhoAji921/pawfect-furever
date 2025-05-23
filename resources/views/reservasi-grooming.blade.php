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
<body class="flex flex-col justify-center items-center overflow-x-hidden gap-16 bg-backgroundColor">
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
        <a href="/#testimoni">Testimoni</a>
      </li>
    </ul>
    @auth
    <div class="flex items-center gap-2">
      <p class="text-textParagraph font-Quicksand text-Base font-medium">Selamat datang, {{ Auth::user()->name }}!</p>
      <a href="/cek-reservasi" class="flex text-white font-Quicksand text-Large font-medium gap-2 px-3 py-2 bg-Orange/10 rounded-[12px] items-center">Cek Reservasi
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

    <section id="price" class="flex flex-col gap-10 lg:px-[120px] px-5 justify-center items-center w-full">
        <h1 class="text-textTitle font-Quicksand lg:text-Header1 text-Header2 font-bold text-center">Daftar Harga Grooming</h1>
        <div class="flex gap-2 justify-center items-center bg-Orange/10/40 rounded-full w-fit border-2 border-Orange/10">
            <a id="btn-grooming" href="#grooming" class="flex px-6 py-5 items-center text-textTitle font-Quicksand lg:text-Header3 text-Base font-bold rounded-full">Pet Grooming</a>
            <a id="btn-hotel" href="#pet-hotel" class="flex px-6 py-5 items-center text-textTitle font-Quicksand lg:text-Header3 text-Base font-bold rounded-full ">Pet Hotel</a>
        </div>

      <!-- Pet Grooming-->
      <div id="grooming-content"class="flex lg:flex-row flex-col gap-10 w-fit justify-center items-center">
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
          <button id="Mandi-biasa" class="openModal text-white font-raleway text-Large font-bold py-4 bg-Orange/10 rounded-[16px]" data-id="1">Beli Sekarang</button>
        </div>

        <div class="flex flex-col justify-center items-center">
          <img src="{{ asset('images/half face cat.png') }}" class="z-10 -mb-[30px]" alt="Kucing abu-abu dengan mata kuning mengintip di atas.">
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
            <button id="Mandi-lengkap" class="openModal text-white font-raleway text-Large font-bold py-4 bg-Orange/10 rounded-[16px]" data-id="2">Beli Sekarang</button>
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
          <button class="openModal text-white font-raleway text-Large font-bold py-4 bg-Orange/10 rounded-[16px]">Beli Sekarang</button>
        </div>
      </div>

      <!-- Konten Pet Hotel -->
    <div id="hotel-content" class="flex flex-col hidden w-full justify-center items-center gap-10">
      <form method="POST" action="{{ route('reservation-hotel.store') }}" class="flex flex-col max-w-[1100px] w-full items-center gap-5">
        @csrf
        <div class="flex flex-col gap-3 w-full">
          <label for="nama_pet" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Nama Pet :</label>
          <input name="nama_pet" id="nama_pet" value="{{ old('nama_pet') }}" type="text" placeholder="Masukan nama pet anda ..." class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" required></input>
          @error('nama_pet')
          <div class="text-[#FF181C] font-Quicksand text-base font-medium">Nama peliharaan wajib diisi!</div>
          @enderror
        </div>
        <div class="flex lg:flex-row flex-col w-full lg:gap-10 gap-4 justify-center items-center">
          <div class="flex flex-col gap-3 w-full items-start">
            <label for="check_in" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Check in :</label>
            <input name="check_in" id="check_in" value="{{ old('check_in') }}" type="date" placeholder="" class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" required></input>
          </div>
          @error('check_in')
          <div class="text-[#FF181C] font-Quicksand text-base font-medium">Tanggal check-in tidak valid!</div>
          @enderror
          <div class="flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg"  width="50"  height="50"  viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="3"  stroke-linecap="round"  stroke-linejoin="round"  class="lg:rotate-0 rotate-90 icon icon-tabler icons-tabler-outline icon-tabler-arrow-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg>
          </div>
          <div class="flex flex-col gap-3  w-full">
            <label for="check_out" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Check Out :</label>
            <input name="check_out" id="check_out" value="{{ old('check_out') }}" type="date" placeholder="" class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" required></input>
            @error('check_out')
            <div class="text-[#FF181C] font-Quicksand text-base font-medium">Tanggal check-out tidak valid!</div>
            @enderror
          </div>
        </div>
        <div class="flex justify-between items-center w-full">
          <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-bold">Jumlah hari: <span id="total_days">Tanggal check-in dan check-out tidak valid</span></p>
          <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-bold">Total harga: <span id="total_price">Tanggal check-in dan check-out tidak valid</span></p>
        </div>
        <div class="w-full">
          <textarea name="note" id="note" value="{{ old('note') }}" type="date" placeholder="Note" class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full"></textarea>
        </div>
        <input type="hidden" name="days_total" id="days_total" value="{{ old("days_total") }}">
        <input type="hidden" name="price_total" id="price_total" value="{{ old("price_total") }}">
        <button id="" class="openModal flex gap-2 px-5 py-3 bg-Orange/10 text-white font-Quicksand text-Header4 font-bold rounded-2xl items-center">Konfirm
          <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="white"  class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
        </button>
      </form>
    </div>
    </section>

    <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-20 lg:px-0 px-5">
      <div class="flex flex-col p-10 gap-5 rounded-[40px] shadow-lg lg:w-3/6 w-full bg-Orange/20">
          <form id="reservationForm" class="flex flex-col gap-5 h-fit" action="{{ route('reservation.store') }}" method="POST">
              @csrf
              <input type="hidden" id="package_id" name="package_id">
              <div class="flex flex-col gap-3">
                <h2 class="text-textTitle font-Quicksand lg:text-Header3 text-Large font-bold">Reservasi :</h2>

                <div class="flex justify-between lg:px-10 px-5 py-2 w-full bg-Orange/70 rounded-lg">
                    <p id="modalPackageName" class="text-white font-Quicksand lg:text-Header3 text-Base font-bold">Nama Paket</p>
                    <p id="modalPackagePrice" class="text-white font-Quicksand lg:text-Header3 text-Base font-bold">Rp0</p>
                </div>
              </div>
              
              <div class="flex flex-col gap-3 w-full">
                  <label for="alamat" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Alamat :</label>
                  <input id="alamat" name="note" placeholder="Masukkan alamat ..." class="flex text-white resize-none max-h-[200px] overflow-hidden opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full"></input>
              </div>
              
              <div class="flex flex-col gap-3 w-full">
                  <label for="note" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Note :</label>
                  <textarea id="note" name="note" placeholder="Masukkan Note ..." class="flex text-white resize-none max-h-[200px] overflow-hidden opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full"></textarea>
              </div>
              <div class="flex justify-between w-full mt-5">
                  <button type="button" id="closeModal" class="flex lg:px-5 px-4 py-3 border border-Orange/10 hover:bg-Orange/10 text-white font-Quicksand lg:text-Large text-Base font-bold rounded-2xl">
                      Close
                  </button>
                  <button type="submit" id="confirmButton" class="flex lg:px-5 px-4 py-3 max-w-[150px] justify-center items-center text-center w-full bg-Orange/10 text-white font-Quicksand lg:text-Large text-Base font-bold rounded-2xl">
                      Konfirm
                  </button>
              </div>
          </form>
      </div>
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

  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const btnGrooming = document.getElementById("btn-grooming");
        const btnHotel = document.getElementById("btn-hotel");
        const groomingContent = document.getElementById("grooming-content");
        const hotelContent = document.getElementById("hotel-content");

        btnGrooming.classList.add("bg-[#FF8A8A]", "text-white"); 
        hotelContent.classList.add("hidden"); 

        btnGrooming.addEventListener("click", function () {
            groomingContent.classList.remove("hidden");
            hotelContent.classList.add("hidden");
            btnGrooming.classList.add("bg-[#FF8A8A]", "text-white");
            btnHotel.classList.remove("bg-[#FF8A8A]", "text-white");
            localStorage.setItem("activeTab", "grooming");
        });

        btnHotel.addEventListener("click", function () {
            groomingContent.classList.add("hidden");
            hotelContent.classList.remove("hidden");
            btnHotel.classList.add("bg-[#FF8A8A]", "text-white");
            btnGrooming.classList.remove("bg-[#FF8A8A]", "text-white");
            localStorage.setItem("activeTab", "pet-hotel");
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
      const textarea = document.getElementById("note");

      textarea.addEventListener("input", function () {
        this.style.height = "auto"; 
        this.style.height = this.scrollHeight + "px"; 
      });
    });

    document.addEventListener("DOMContentLoaded", function () {
      const openButtons = document.querySelectorAll(".openModal");
      const modal = document.getElementById("modal");
      const closeModal = document.getElementById("closeModal");

      const packages = {
        1: { name: "Mandi Biasa", price: 150000 },
        2: { name: "Mandi Lengkap", price: 200000 }
      };

      openButtons.forEach(button => {
        button.addEventListener("click", function () {
          const packageId = this.getAttribute("data-id");
          const packageData = packages[packageId];

          if (packageData) {
            document.getElementById("modalPackageName").innerText = packageData.name;
            document.getElementById("modalPackagePrice").innerText = `Rp${packageData.price.toLocaleString('id-ID')}`;
            modal.classList.remove("hidden");
          }
        });
      });

      closeModal.addEventListener("click", function () {
        modal.classList.add("hidden");
      });

      modal.addEventListener("click", function (event) {
        if (event.target === modal) {
          modal.classList.add("hidden");
        }
      });
    });

  document.addEventListener("DOMContentLoaded", function () {
    const openButtons = document.querySelectorAll(".openModal");
    const packageInput = document.getElementById("package_id");

    openButtons.forEach(button => {
      button.addEventListener("click", function () {
        const packageId = this.getAttribute("data-id");
        packageInput.value = packageId; 
      });
    });
  });

  function showTabFromHash() {
    let hash = window.location.hash.substring(1) || localStorage.getItem("activeTab") || "grooming";
    const btnGrooming = document.getElementById("btn-grooming");
    const btnHotel = document.getElementById("btn-hotel");
    const groomingContent = document.getElementById("grooming-content");
    const hotelContent = document.getElementById("hotel-content");
    switch (hash) {
      case "grooming":
        groomingContent.classList.remove("hidden");
        hotelContent.classList.add("hidden");
        btnGrooming.classList.add("bg-[#FF8A8A]", "text-white");
        btnHotel.classList.remove("bg-[#FF8A8A]", "text-white");
        break;
      case "pet-hotel":
        groomingContent.classList.add("hidden");
        hotelContent.classList.remove("hidden");
        btnHotel.classList.add("bg-[#FF8A8A]", "text-white");
        btnGrooming.classList.remove("bg-[#FF8A8A]", "text-white");
        break;
      default:
        break;
    }
  }

  window.addEventListener("hashchange", showTabFromHash);
  document.addEventListener("DOMContentLoaded", showTabFromHash);
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        function calculateTotal() {
            let checkIn = new Date($('#check_in').val());
            let checkOut = new Date($('#check_out').val());
            let today = new Date();
            let pricePerDay = 20000; // Harga per hari

            if (!isNaN(checkIn) && !isNaN(checkOut) && checkOut > checkIn && checkIn >= today) {
                let timeDiff = checkOut - checkIn;
                let totalDays = timeDiff / (1000 * 3600 * 24);
                let totalPrice = totalDays * pricePerDay;

                $('#total_days').text(totalDays+" Hari");
                $('#total_price').text("Rp " + totalPrice);
                $('#days_total').val(totalDays);
                $('#price_total').val(totalPrice);
            }
            else if(checkIn < today){
                $('#total_days').text('Tanggal check-in minimal H+1 dari pemesanan');
                $('#total_price').text('Tanggal check-in dan check-out tidak valid');
            }
            else {
                $('#total_days').text('Tanggal check-in dan check-out tidak valid');
                $('#total_price').text('Tanggal check-in dan check-out tidak valid');
            }
        }
        calculateTotal();
        $('#check_in, #check_out').on('change', calculateTotal);
    });
</script>
</body>
</html>