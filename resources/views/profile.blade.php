<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin="crossorigin">
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
            rel="stylesheet">
    </head>
    <body
        class="flex flex-col justify-center items-center overflow-x-hidden gap-16 bg-backgroundColor">
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
                <p class="text-textParagraph font-Quicksand text-Base font-medium">Selamat datang,
                    {{ Auth::user()->name }}!</p>
                <a
                    href="/cek-reservasi"
                    class="flex text-white font-Quicksand text-Large font-medium gap-2 px-3 py-2 bg-Orange/10 rounded-[12px] items-center">Cek Reservasi
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="white"
                        class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                        d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z"/><path
                        d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z"/><path
                        d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z"/><path
                        d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z"/><path
                        d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z"/></svg>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        type="submit"
                        class="text-textParagraph font-Quicksand text-Base font-medium"
                        href="">Logout</button>
                </form>
            </div>
            @else
            <a
                href="/login"
                class="flex text-white font-Quicksand text-Large font-medium gap-2 px-3 py-2 bg-Orange/10 rounded-[12px] items-center">Login
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewbox="0 0 24 24"
                    fill="white"
                    class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                    d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z"/><path
                    d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z"/><path
                    d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z"/><path
                    d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z"/><path
                    d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z"/></svg>
            </a>
            @endauth
        </nav>

        <section
            class="flex flex-col gap-10 lg:px-[120px] px-5 justify-center items-center w-full">
            <h1
                class="text-textTitle font-Quicksand lg:text-Header1 text-Header3 font-bold">Profile</h1>
                @if(session('success'))
                <div id="info" class="flex items-center justify-center lg:px-5 px-2 py-2 gap-2 bg-Orange/70 text-white font-Quicksand lg:text-Base text-Small font-bold rounded-2xl">
                    <p>{{ session('success') }}</p>
                    <svg onclick="closeInfo()" class="hover:stroke-2 cursor-pointer w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                    </svg>                      
                </div>
                @endif
                <div
                    id="detail-account"
                    class="flex lg:flex-row flex-col gap-5 lg:items-center items-start w-full bg-Orange/20 lg:pl-10 lg:pt-0 pt-5 border border-textTitle lg:rounded-br-[40px] lg:rounded-tl-[40px] rounded-bl-[40px] rounded-tr-[40px] z-20">
                    <div class="flex flex-col w-full gap-5 lg:px-0 px-5 items-end justify-start lg:pb-0 pb-5">
                        <a class="openModal flex max-w-[130px] items-center justify-center w-full lg:px-5 px-2 py-2 bg-Orange/70 text-white font-Quicksand lg:text-Base text-Small font-bold rounded-2xl cursor-pointer">Edit Profile</a>
                        <div class="flex lg:flex-row flex-col gap-5 justify-between w-full items-start">
                            <div class="flex flex-col gap-2">
                                <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">Email :</p>
                                <div class="flex gap-2">
                                    <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">Nama :</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">{{ Auth::user()->name }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">No Telepon :</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">{{ Auth::user()->phone }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <p class="text-textTitle font-raleway lg:text-Header4 text-Large font-semibold">Alamat :</p>
                                <div class="flex gap-2 items-center">
                                    <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-bold">{{ Auth::user()->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('images/cat-look-right.png') }}" class="max-w-[200px] z-10 -mt-[40px] lg:scale-x-[-1] pr-1 rounded-bl-[40px]">
                </div>

            <div id="content-card" class="flex flex-col lg:gap-10 gap-5 w-auto ">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-6 justify-center">
                    @foreach ($reservations as $data)
                    {{-- Transaction Card --}}
                    <div
                        id="card-groomingProcess"
                        class="flex lg:flex-row flex-col gap-4 p-4 bg-Orange/20 rounded-[36px] w-full h-fit">
                        <div class="flex lg:flex-col flex-row gap-2 items-center lg:w-fit w-full">
                            <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-semibold">{{ $data->created_at->format('M') }}
                            </p>
                            <div
                                class="flex items-center justify-center bg-Orange/70 rounded-full max-w-[30px] max-h-[30px] min-w-[25px] min-h-[25px]">
                                <p class="text-textTitle font-Quicksand lg:text-Large text-Base font-medium">{{ $data->created_at->format('d') }}
                                </p>
                            </div>
                            <div class="bg-textTitle lg:w-[4px] lg:h-full h-[4px] w-full rounded-full"></div>
                        </div>
                        <div class="flex flex-col rounded-3xl border border-black w-full p-6 lg:p-8">
                            <div class="flex w-full justify-between mb-4">
                                <p class="text-black font-Quicksand lg:text-Large text-Base font-medium">{{ $data->created_at->format('H:i') }}
                                </p>
                                <p class="text-black/70 font-Quicksand lg:text-Large text-Base font-medium">{{$data->reservation_identifier}}</p>
                            </div>
                            <div class="flex flex-col gap-8 w-full mb-6">
                                <h1 class="text-black font-Quicksand lg:text-Header3 text-Large font-semibold">{{ Auth::user()->name }}</h1>
                                <div class="flex justify-between w-full items-center">
                                    <div class="flex items-center justify-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Status :</p>
                                        <div class="@if ($data->status == 'Finished') bg-statusSelesai text-black 
                                            @elseif ($data->status == 'Driver Ongoing') bg-statusOntheway text-white 
                                            @elseif ($data->status == 'Pending') bg-statusPending text-black 
                                            @elseif ($data->status == 'Grooming') bg-statusGrooming text-black 
                                            @elseif ($data->status == 'Refunded') bg-statusRefunded text-white 
                                            @elseif ($data->status == 'Waiting') bg-statusWaiting text-white 
                                            @else bg-statusCancel text-white 
                                            @endif flex mx-4 px-4 py-2 rounded-lg ml-3">
                                            <p class="font-Quicksand lg:text-Base text-small font-bold">{{$data->status}}</p>
                                        </div>
                                    </div>
                                    {{-- Kalo statusnya finished atau canceled, tombolnya ilang --}}
                                    @if ($data->status != 'Finished' && $data->status != 'Canceled') 
                                    <form action="{{ route('profile.reservations.cancel', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?');">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="text-black font-Quicksand lg:text-Base text-small font-bold underline underline-offset-3 hover:text-red-600 transition-colors duration-300">
                                            Cancel Order
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pt-2 w-full ">
                                <div class="flex flex-col gap-3 py-2 border-t border-black">
                                    <p class="text-black font-Quicksand text-Base font-medium">Detail Transaksi</p>
                                    <div class="flex w-full justify-between items-center">
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-medium">Paket {{$data->package->name}}</p>
                                        <p class="text-black font-Quicksand lg:text-Base text-small font-semibold">Rp{{ number_format($data->package->price, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Total</p>
                                    <p class="text-black font-Quicksand lg:text-Large text-Base font-bold">Rp{{ number_format($data->package->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="flex gap-4 justify-center items-center">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    viewbox="0 0 24 24"
                    fill="none"
                    stroke="#000000"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lg:w-[40px] lg:h-[40px] icon icon-tabler icons-tabler-outline icon-tabler-chevron-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6"/></svg>
                <a
                    class="flex px-4 py-2 justify-center items-center border border-black rounded-[8px] text-black font-Quicksand text-Base font-medium w-fit">1</a>
                <a
                    class="flex px-4 py-2 justify-center items-center bg-Orange/70 border border-black rounded-[8px] text-white font-Quicksand text-Base font-medium w-fit">2</a>
                <a
                    class="flex px-4 py-2 justify-center items-center border border-black rounded-[8px] text-black font-Quicksand text-Base font-medium w-fit">3</a>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="30"
                    viewbox="0 0 24 24"
                    fill="none"
                    stroke="#000000"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="lg:w-[40px] lg:h-[40px] icon icon-tabler icons-tabler-outline icon-tabler-chevron-right"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6"/></svg>
            </div>
        </section>

        <footer
            id="footer"
            class="flex flex-col bg-footerColor w-full justify-center items-center gap-10 py-5 lg:px-80 px-5 rounded-t-[40px]">
            <div
                class="flex lg:flex-row flex-col lg:gap-[80px] gap-10 lg:w-[1183px] w-full">
                <div class="flex flex-col gap-5 w-full">
                    <div class="flex flex-col gap-4">
                        <p class="text-black font-Quicksand text-Header4 font-bold">Whatsapp</p>
                        <p
                            class="flex gap-3 text-black font-Quicksand text-Large font-medium justify-center items-center w-fit">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewbox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"/><path
                                d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"/></svg>
                            +62812123456789</p>
                    </div>
                    <div class="flex flex-col gap-4">
                        <p class="text-black font-Quicksand text-Header4 font-bold">Email</p>
                        <p
                            class="flex gap-3 text-black font-Quicksand text-Large font-medium justify-center items-center w-fit">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewbox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-gmail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 20h3a1 1 0 0 0 1 -1v-14a1 1 0 0 0 -1 -1h-3v16z"/><path d="M5 20h3v-16h-3a1 1 0 0 0 -1 1v14a1 1 0 0 0 1 1z"/><path d="M16 4l-4 4l-4 -4"/><path d="M4 6.5l8 7.5l8 -7.5"/></svg>
                            pawfectfurever@gmail.com</p>
                    </div>
                </div>
                <div class="flex flex-col gap-4 justify-center items-center w-full">
                    <img
                        src="{{ asset('images/Logo.png') }}"
                        class="w-[100px] h-[100px]"
                        alt="Logo pawfect furever.">
                    <p class="text-black font-Quicksand text-Header4 font-semibold">Pawfect Furever</p>
                    <div class="flex gap-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="50"
                            height="50"
                            viewbox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-tiktok"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z"/></svg>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="50"
                            height="50"
                            viewbox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                            d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"/><path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/><path d="M16.5 7.5l0 .01"/></svg>
                    </div>
                </div>
                <ul
                    class="flex flex-col text-black font-Quicksand text-Header4 font-semibold gap-3 justify-center lg:items-center items-start w-full">pages
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
            <div class="flex h-[3px] lg:w-[1238px] rounded-full w-full bg-black opacity-50"></div>
            <p
                class="text-black opacity-70 font-Quicksand text-Large font-medium text-center">pawfect furever © 2024 All Right Reserved</p>
        </footer>

        <div id="modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-20 lg:px-0 px-5">
            <div class="flex flex-col lg:p-10 p-5 gap-5 rounded-[40px] items-center shadow-lg lg:w-3/5 w-full bg-Orange/20">
                <h3 class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold cursor-pointer">Edit Profile</h3>
                <p class="text-textParagraph font-Quicksand lg:text-Large text-Base font-medium text-center">Jaga informasi akun Anda tetap aman dan terkini untuk pengalaman yang lebih lancar dan privasi yang terjaga!</p>
                <form id="reservationForm" class="flex flex-col gap-5 h-fit w-full justify-center items-center" action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="flex lg:flex-row flex-col gap-5 w-full items-center">
                        <div class="flex flex-col gap-3 w-full">
                            <label class="text-textTitle font-Quicksand lg:text-Large text-Base font-bold">Email</label>
                            <div class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full">{{ Auth::user()->email }}</div>
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <label class="text-textTitle font-Quicksand lg:text-Large text-Base font-bold">Nama</label>
                            <input name="name" type="text" placeholder="Masukan Nama anda ... " class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" value="{{ Auth::user()->name }}"></input>
                        </div>
                    </div>
                    <div class="flex lg:flex-row flex-col gap-5 w-full items-center">
                        <div class="flex flex-col gap-3 w-full">
                            <label class="text-textTitle font-Quicksand lg:text-Large text-Base font-bold">No Telepon</label>
                            <input name="phone" type="Number" placeholder="Masukan Nomor Telepon anda ... " class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" value="{{ Auth::user()->phone }}"></input>
                        </div>
                        <div class="flex flex-col gap-3 w-full">
                            <label class="text-textTitle font-Quicksand lg:text-Large text-Base font-bold">Alamat</label>
                            <input name="address" type="text" placeholder="Masukan Alamat anda ... " class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" value="{{ Auth::user()->address }}"></input>
                        </div>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <button type="button" id="closeModal" class="flex lg:px-5 px-4 py-3 border-[2px] border-Orange/10 hover:bg-Orange/10 text-white font-Quicksand lg:text-Large text-Base font-bold rounded-2xl">
                            Close
                        </button>
                        <button type="submit" id="confirmButton" class="flex justify-center items-center w-full lg:max-w-[200px] max-w-[150px] lg:px-5 px-4 py-3 gap-2 bg-Orange/10 text-white font-Quicksand lg:text-Large text-Base font-bold rounded-2xl">
                        Simpan
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="20"  height="20"  viewBox="0 0 24 24"  fill="white"  class="lg:w-[25px] lg:h-[25px] icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const openButtons = document.querySelectorAll(".openModal");
        const modal = document.getElementById("modal");
        const closeModal = document.getElementById("closeModal");

        openButtons.forEach(button => {
            button.addEventListener("click", function () {
                modal.classList.remove("hidden");
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

    function closeInfo() {
        const info = document.querySelector("#info");
        info.classList.add("hidden");
    }
    </script>
</body>
</html>