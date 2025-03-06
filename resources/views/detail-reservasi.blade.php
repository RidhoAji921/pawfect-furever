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
      <img src="{{ asset('images/Logo.png') }}">
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

    <section class="flex flex-col gap-10 lg:px-[120px] px-5 justify-center items-center w-full">
        <h1 class="text-textTitle font-Quicksand lg:text-Header1 text-Header3 font-bold">Profile</h1>
        <div id="detail-account" class="flex flex-col w-full justify-center items-center">
            <div class="flex justify-center items-center px-5 py-4 max-w-[680px] w-full bg-Orange/20 rounded-2xl border border-textTitle -mb-5 z-10">
                <div class="flex flex-col gap-2">
                    <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">Email :</p>
                    <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">Wildan*******@gmail.com</p>
                </div>
            </div>
            <div class="flex lg:flex-row flex-col gap-5 lg:justify-between lg:items-center px-5 pt-10 pb-5 w-full bg-Orange/20 rounded-2xl border border-textTitle">
                <div class="flex flex-col gap-2">
                    <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">Nama :</p>
                    <div class="flex gap-3 items-center">
                        <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">Muhammad Wildan</p>
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20" class="lg:w-[25px] lg:h-[25px]" viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">No Telp :</p>
                    <div class="flex gap-3 items-center">
                        <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">08123456789010</p>
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20" class="lg:w-[25px] lg:h-[25px]" viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">Alamat :</p>
                    <div class="flex gap-3 items-center">
                        <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">Jl. Raya No.123</p>
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20" class="lg:w-[25px] lg:h-[25px]" viewBox="0 0 24 24"  fill="none"  stroke="#570F29"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-edit"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" /><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" /><path d="M16 5l3 3" /></svg>
                    </div>
                </div>
            </div>
        </div>

            <div id="content-card" class="flex lg:flex-row flex-col lg:gap-10 gap-5 w-full">
                <div id="col-1" class="flex flex-col gap-5 w-full">
                    <div id="card-groomingProcess" class="flex lg:flex-row flex-col gap-4 p-4 bg-Orange/20 rounded-[36px] w-full h-fit">
                        <div class="flex lg:flex-col flex-row gap-2 items-center lg:w-fit w-full">
                            <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-semibold">sep</p>
                            <div class="flex items-center justify-center bg-Orange/70 rounded-full max-w-[30px] max-h-[30px] min-w-[25px] min-h-[25px]">
                                <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-medium">18</p>
                            </div>
                            <div class="bg-textTitle lg:w-[4px] lg:h-full h-[4px] w-full rounded-full"> </div>
                        </div>
                        <div class="flex flex-col gap-3 px-4 py-2 rounded-3xl border border-black w-full">
                            <div class="flex w-full justify-between">
                                <p class="text-black font-Quicksand lg:text-Large text-Base font-medium">18.00</p>
                                <p class="text-black/70 font-Quicksand lg:text-Large text-Base font-medium">ID #K27DDD</p>
                            </div>
                            <div class="flex flex-col gap-4 w-full">
                                <h1 class="text-black font-Quicksand lg:text-Header3 text-Large font-semibold">Muhammad Wildan</h1>
                                <div class="flex justify-between w-full items-center">
                                    <div class="flex gap-2 items-center justify-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">status :</p>
                                        <div class="bg-[#D4CE16]/60 flex px-3 py-2 rounded-lg">
                                            <p class="text-[#FFF600] font-Quicksand lg:text-Base text-small font-bold">Grooming</p>
                                        </div>
                                    </div>
                                    <a class="text-black font-Quicksand lg:text-Base text-small font-bold underline underline-offset-3">Cancel Order</a>
                                </div>
                                <a class="flex items-center justify-center w-full gap-3">
                                    <img src="{{ asset('images/cat grooming2.png') }}" class="lg:w-[50px] lg:h-[50px] w-[30px] h-[30px] rounded-lg">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium underline underline-offset-3">klik untuk melihat gambar</p>
                                </a>
                            </div>
                            <div class="flex flex-col gap-3 pt-2 w-full border-t border-black">
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">No Telepon :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">08123456789010</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Alamat :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Jl. Raya No. 123</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">ID Transaksi :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">y1uvb3127gbhhfby12g</p>
                                </div>
                                <div class="flex flex-col gap-3 py-2 border-t border-black">
                                    <p class="text-black font-Quicksand text-Base font-medium">Detail Transaksi</p>
                                    <div class="flex w-full justify-between items-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Paket Mandi Biasa :</p>
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Rp150.000</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Total</p>
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Rp150.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="card-HotelPaid" class="flex lg:flex-row flex-col gap-4 p-4 bg-Orange/20 rounded-[36px] w-full h-fit">
                        <div class="flex lg:flex-col flex-row gap-2 items-center lg:w-fit w-full">
                            <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-semibold">sep</p>
                            <div class="flex items-center justify-center bg-Orange/70 rounded-full max-w-[30px] max-h-[30px] min-w-[25px] min-h-[25px]">
                                <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-medium">18</p>
                            </div>
                            <div class="bg-textTitle lg:w-[4px] lg:h-full h-[4px] w-full rounded-full"> </div>
                        </div>
                        <div class="flex flex-col gap-3 px-4 py-2 rounded-3xl border border-black w-full">
                            <div class="flex w-full justify-between">
                                <p class="text-black font-Quicksand lg:text-Large text-Base font-medium">18.00</p>
                                <p class="text-black/70 font-Quicksand lg:text-Large text-Base font-medium">ID #K27DDD</p>
                            </div>
                            <div class="flex flex-col gap-4 w-full">
                                <h1 class="text-black font-Quicksand lg:text-Header3 text-Large font-semibold">Muhammad Wildan</h1>
                                <div class="flex justify-between w-full items-center">
                                    <div class="flex gap-2 items-center justify-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">status :</p>
                                        <div class="bg-[#76E070]/60 flex px-3 py-2 rounded-lg">
                                            <p class="text-[#3CB91D] font-Quicksand lg:text-Base text-small font-bold">Sudah Dibayar</p>
                                        </div>
                                    </div>
                                    <a class="text-black font-Quicksand lg:text-Base text-small font-bold underline underline-offset-3">Cancel Order</a>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold text-center">Check in : 04/03/2025</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold text-center">Check out : 05/03/2025</p>
                                </div>
                                <a class="flex items-center justify-center w-full gap-3">
                                    <img src="{{ asset('images/cat grooming2.png') }}" class="lg:w-[50px] lg:h-[50px] w-[30px] h-[30px] rounded-lg">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium underline underline-offset-3">klik untuk melihat gambar</p>
                                </a>
                            </div>
                            <div class="flex flex-col gap-3 pt-2 w-full border-t border-black">
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">No Telepon :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">08123456789010</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Alamat :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Jl. Raya No. 123</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">ID Transaksi :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">y1uvb3127gbhhfby12g</p>
                                </div>
                                <div class="flex flex-col gap-3 py-2 border-t border-black">
                                    <p class="text-black font-Quicksand text-Base font-medium">Detail Transaksi</p>
                                    <div class="flex w-full justify-between items-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Pet Hotel - 1 Hari :</p>
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Rp20.000</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Total</p>
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Rp20.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="card-hotelFinish" class="flex lg:flex-row flex-col gap-4 p-4 bg-Orange/20 rounded-[36px] w-full h-fit">
                        <div class="flex lg:flex-col flex-row gap-2 items-center lg:w-fit w-full">
                            <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-semibold">sep</p>
                            <div class="flex items-center justify-center bg-Orange/70 rounded-full max-w-[30px] max-h-[30px] min-w-[25px] min-h-[25px]">
                                <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-medium">18</p>
                            </div>
                            <div class="bg-textTitle lg:w-[4px] lg:h-full h-[4px] w-full rounded-full"> </div>
                        </div>
                        <div class="flex flex-col gap-3 px-4 py-2 rounded-3xl border border-black w-full">
                            <div class="flex w-full justify-between">
                                <p class="text-black font-Quicksand lg:text-Large text-Base font-medium">18.00</p>
                                <p class="text-black/70 font-Quicksand lg:text-Large text-Base font-medium">ID #K27DDD</p>
                            </div>
                            <div class="flex flex-col gap-4 w-full">
                                <h1 class="text-black font-Quicksand lg:text-Header3 text-Large font-semibold">Muhammad Wildan</h1>
                                <div class="flex justify-between w-full items-center">
                                    <div class="flex gap-2 items-center justify-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">status :</p>
                                        <div class="bg-[#285E1A]/70 flex px-3 py-2 rounded-lg">
                                            <p class="text-[#2DFF34] font-Quicksand lg:text-Base text-small font-bold">Selesai</p>
                                        </div>
                                    </div>
                                    <a class="text-black font-Quicksand lg:text-Base text-small font-bold underline underline-offset-3">Cancel Order</a>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Check in : 04/03/2025</p>
                                    <p class="text-[#249A06] font-Quicksand lg:text-Base text-small font-semibold">Check out : 05/03/2025</p>
                                </div>
                                <a class="flex items-center justify-center w-full gap-3">
                                    <img src="{{ asset('images/cat grooming2.png') }}" class="lg:w-[50px] lg:h-[50px] w-[30px] h-[30px] rounded-lg">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium underline underline-offset-3">klik untuk melihat gambar</p>
                                </a>
                            </div>
                            <div class="flex flex-col gap-3 pt-2 w-full border-t border-black">
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">No Telepon :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">08123456789010</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Alamat :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Jl. Raya No. 123</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">ID Transaksi :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">y1uvb3127gbhhfby12g</p>
                                </div>
                                <div class="flex flex-col gap-3 py-2 border-t border-black">
                                    <p class="text-black font-Quicksand text-Base font-medium">Detail Transaksi</p>
                                    <div class="flex w-full justify-between items-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Pet Hotel - 1 Hari :</p>
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Rp20.000</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Total</p>
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Rp20.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="col-2" class="flex flex-col gap-5 w-full">
                    <div id="card-groomingDriver" class="flex lg:flex-row flex-col gap-4 p-4 bg-Orange/20 rounded-[36px] w-full h-fit">
                        <div class="flex lg:flex-col  flex-row gap-2 items-center lg:w-fit w-full">
                            <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-semibold">sep</p>
                            <div class="flex items-center justify-center bg-Orange/70 rounded-full max-w-[30px] max-h-[30px] min-w-[25px] min-h-[25px]">
                                <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-medium">18</p>
                            </div>
                            <div class="bg-textTitle lg:w-[4px] lg:h-full h-[4px] w-full rounded-full"> </div>
                        </div>
                        <div class="flex flex-col gap-3 px-4 py-2 rounded-3xl border border-black w-full">
                            <div class="flex w-full justify-between">
                                <p class="text-black font-Quicksand lg:text-Large text-Base font-medium">18.00</p>
                                <p class="text-black/70 font-Quicksand lg:text-Large text-Base font-medium">ID #K27DDD</p>
                            </div>
                            <div class="flex flex-col gap-4 w-full">
                                <h1 class="text-black font-Quicksand lg:text-Header3 text-Large font-semibold">Muhammad Wildan</h1>
                                <div class="flex justify-between w-full items-center">
                                    <div class="flex gap-2 items-center justify-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">status :</p>
                                        <div class="bg-[#E0AC70]/60 flex px-3 py-2 rounded-lg">
                                            <p class="text-[#B95E1D] font-Quicksand lg:text-Base text-small font-bold">Driver onGoing</p>
                                        </div>
                                    </div>
                                    <a class="text-black font-Quicksand lg:text-Base text-small font-bold underline underline-offset-3">Cancel Order</a>
                                </div>
                                <a class="flex items-center justify-center w-full gap-3">
                                    <img src="{{ asset('images/cat grooming2.png') }}" class="lg:w-[50px] lg:h-[50px] w-[30px] h-[30px] rounded-lg">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium underline underline-offset-3">klik untuk melihat posisi</p>
                                </a>
                            </div>
                            <div class="flex flex-col gap-3 pt-2 w-full border-t border-black">
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">No Telepon :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">08123456789010</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Alamat :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Jl. Raya No. 123</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">ID Transaksi :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">y1uvb3127gbhhfby12g</p>
                                </div>
                                <div class="flex flex-col gap-3 py-2 border-t border-black">
                                    <p class="text-black font-Quicksand text-Base font-medium">Detail Transaksi</p>
                                    <div class="flex w-full justify-between items-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Paket Mandi Biasa :</p>
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Rp150.000</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Total</p>
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Rp150.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="card-groomingCancel" class="flex lg:flex-row flex-col gap-4 p-4 bg-Orange/20 rounded-[36px] w-full h-fit">
                        <div class="flex lg:flex-col flex-row gap-2 items-center lg:w-fit w-full">
                            <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-semibold">sep</p>
                            <div class="flex items-center justify-center bg-Orange/70 rounded-full max-w-[30px] max-h-[30px] min-w-[25px] min-h-[25px]">
                                <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-medium">18</p>
                            </div>
                            <div class="bg-textTitle lg:w-[4px] lg:h-full h-[4px] w-full rounded-full"> </div>
                        </div>
                        <div class="flex flex-col gap-3 px-4 py-2 rounded-3xl border border-black w-full">
                            <div class="flex w-full justify-between">
                                <p class="text-black font-Quicksand lg:text-Large text-Base font-medium">18.00</p>
                                <p class="text-black/70 font-Quicksand lg:text-Large text-Base font-medium">ID #K27DDD</p>
                            </div>
                            <div class="flex flex-col gap-4 w-full">
                                <h1 class="text-black font-Quicksand lg:text-Header3 text-Large font-semibold">Muhammad Wildan</h1>
                                <div class="flex justify-between w-full items-center">
                                    <div class="flex gap-2 items-center justify-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">status :</p>
                                        <div class="bg-[#E07070]/60 flex px-3 py-2 rounded-lg">
                                            <p class="text-[#B92F1D] font-Quicksand lg:text-Base text-small font-bold">Cancel</p>
                                        </div>
                                    </div>
                                    <a class="text-black font-Quicksand lg:text-Base text-small font-bold underline underline-offset-3">Cancel Order</a>
                                </div>
                                <!-- <a class="flex items-center justify-center w-full gap-3">
                                    <img src="{{ asset('images/cat grooming2.png') }}" class="lg:w-[50px] lg:h-[50px] w-[30px] h-[30px] rounded-lg">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium underline underline-offset-3">klik untuk melihat gambar</p>
                                </a> -->
                            </div>
                            <div class="flex flex-col gap-3 pt-2 w-full border-t border-black">
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">No Telepon :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">08123456789010</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Alamat :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Jl. Raya No. 123</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">ID Transaksi :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">y1uvb3127gbhhfby12g</p>
                                </div>
                                <div class="flex flex-col gap-3 py-2 border-t border-black">
                                    <p class="text-black font-Quicksand text-Base font-medium">Detail Transaksi</p>
                                    <div class="flex w-full justify-between items-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Paket Mandi Biasa :</p>
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Rp150.000</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Total</p>
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Rp150.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="card-groomingFinish" class="flex lg:flex-row flex-col gap-4 p-4 bg-Orange/20 rounded-[36px] w-full h-fit">
                        <div class="flex lg:flex-col flex-row gap-2 items-center lg:w-fit w-full">
                            <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-semibold">sep</p>
                            <div class="flex items-center justify-center bg-Orange/70 rounded-full max-w-[30px] max-h-[30px] min-w-[25px] min-h-[25px]">
                                <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-medium">18</p>
                            </div>
                            <div class="bg-textTitle lg:w-[4px] lg:h-full h-[4px] w-full rounded-full"> </div>
                        </div>
                        <div class="flex flex-col gap-3 px-4 py-2 rounded-3xl border border-black w-full">
                            <div class="flex w-full justify-between">
                                <p class="text-black font-Quicksand lg:text-Large text-Base font-medium">18.00</p>
                                <p class="text-black/70 font-Quicksand lg:text-Large text-Base font-medium">ID #K27DDD</p>
                            </div>
                            <div class="flex flex-col gap-4 w-full">
                                <h1 class="text-black font-Quicksand lg:text-Header3 text-Large font-semibold">Muhammad Wildan</h1>
                                <div class="flex justify-between w-full items-center">
                                    <div class="flex gap-2 items-center justify-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">status :</p>
                                        <div class="bg-[#285D1A]/70 flex px-3 py-2 rounded-lg">
                                            <p class="text-[#2DFF34] font-Quicksand lg:text-Base text-small font-bold">Selesai</p>
                                        </div>
                                    </div>
                                    <a class="text-black font-Quicksand lg:text-Base text-small font-bold underline underline-offset-3">Cancel Order</a>
                                </div>
                                <a class="flex items-center justify-center w-full gap-3">
                                    <img src="{{ asset('images/cat grooming2.png') }}" class="lg:w-[50px] lg:h-[50px] w-[30px] h-[30px] rounded-lg">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium underline underline-offset-3">klik untuk melihat gambar</p>
                                </a>
                            </div>
                            <div class="flex flex-col gap-3 pt-2 w-full border-t border-black">
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">No Telepon :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">08123456789010</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Alamat :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Jl. Raya No. 123</p>
                                </div>
                                <div class="flex w-full justify-between items-center">
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-medium">ID Transaksi :</p>
                                    <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">y1uvb3127gbhhfby12g</p>
                                </div>
                                <div class="flex flex-col gap-3 py-2 border-t border-black">
                                    <p class="text-black font-Quicksand text-Base font-medium">Detail Transaksi</p>
                                    <div class="flex w-full justify-between items-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Paket Mandi Biasa :</p>
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Rp150.000</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Total</p>
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Rp150.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="flex gap-4 justify-center items-center">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="#000000"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="lg:w-[40px] lg:h-[40px] icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>
            <a class="flex px-4 py-2 justify-center items-center border border-black rounded-[8px] text-black font-Quicksand text-Base font-medium w-fit">1</a>
            <a class="flex px-4 py-2 justify-center items-center bg-Orange/70 border border-black rounded-[8px] text-white font-Quicksand text-Base font-medium w-fit">2</a>
            <a class="flex px-4 py-2 justify-center items-center border border-black rounded-[8px] text-black font-Quicksand text-Base font-medium w-fit">3</a>
            <svg  xmlns="http://www.w3.org/2000/svg"  width="30"  height="30"  viewBox="0 0 24 24"  fill="none"  stroke="#000000"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="lg:w-[40px] lg:h-[40px] icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>
        </div>
    </section>
    
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
                <img src="{{ asset('images/Logo.png') }}" class="w-[100px] h-[100px]">
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