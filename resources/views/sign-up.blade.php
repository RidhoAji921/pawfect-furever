<!DOCTYPE html>
<html lang="en">
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
    <title>Daftar Akun</title>
</head>
<body class="bg-gradient-to-t from-[#F8EDE3] from-0% via-[#F6B171] via-50% to-[#F7D1AE] to-80% flex flex-col justify-center items-center py-5 lg:px-32 px-5 w-full gap-10 bg-no-repeat bg-cover min-h-screen">
    <div class="flex flex-col w-fit justify-center items-center">
        <img src="{{ asset('images/login_cat.png') }}" class="z-10 mb-[-90px]" alt="Kucing berwarna jingga muda dengan lidah menjulur, duduk di atas desain login dengan warna-warna gradasi oranye cerah.">
        <div class="flex flex-col lg:gap-10 gap-5 p-10 rounded-[20px] bg-Orange/20 items-center w-full drop-shadow-[4px_8px_4px_rgba(0,0,0,0.25)]">
            <h1 class="text-textTitle font-Quicksand lg:text-Header2 text-Header3 font-bold">Daftar Akun</h1>
            <form method="POST" action="{{ route('signup') }}" class="flex flex-col gap-5 w-full">
                @csrf
                <div class="flex flex-col gap-3 w-full">
                    <label for="email" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Email :</label>
                    <input name="email" type="email" value="{{ old('email') }}" placeholder="Masukan email anda ..." class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full"></input>
                    @error('email')
                    <div class="text-[#FF181C] font-Quicksand text-base font-medium">{{ $message }}</div>
                    @enderror
                    <p class="{{--text-[#FF181C]--}}text-[#2a2a2a] font-Quicksand lg:text-base text-sm lg:text-left text-center font-medium">Gunakan email aktif untuk informasi lebih lanjut!</p>
                </div>
                <div class="flex flex-col gap-3 w-full">
                    <label for="phone" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">No Hp (opsional) :</label>
                    <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Masukan no hp anda ... " class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" ></input>
                    @error('phone')
                    <div class="text-[#FF181C] font-Quicksand text-base font-medium">{{ $message }}</div>
                    @enderror
                    <div>
                        <p class="text-[#2a2a2a] font-Quicksand lg:text-base text-sm font-medium lg:text-left text-center">Gunakan no hp untuk pemberitahuan via WhatsApp</p>
                        <p class="text-[#2a2a2a] font-Quicksand lg:text-base text-sm font-medium lg:text-left text-center">Gunakan format 08XXXXXXXXXX</p>
                        <p class="text-[#2a2a2a] font-Quicksand lg:text-base text-sm font-medium lg:text-left text-center">Kosongkan untuk pemberitahuan via email</p>
                    </div>
                </div>
                <div class="flex flex-col gap-3 w-full">
                    <label for="name" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Nama :</label>
                    <input name="name" type="text" value="{{ old('name') }}" placeholder="Masukan nama anda " class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" ></input>
                    @error('name')
                    <div class="text-[#FF181C] font-Quicksand text-base font-medium">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col gap-3 w-full">
                    <label for="password" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Password :</label>
                    <input name="password" type="password" placeholder="Masukan password anda ... " class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" ></input>
                    @error('password')
                    <div class="text-[#FF181C] font-Quicksand text-base font-medium">{{ $message }}</div>
                    @enderror
                    <label for="password_confirmation" class="text-textTitle font-Quicksand lg:text-Header4 text-Large font-bold">Konfirmasi Password :</label>
                    <input name="password_confirmation" type="password" placeholder="Masukan password anda ... " class="text-white opacity-text-60 font-Quicksand lg:text-Large text-Base font-medium bg-Orange/70 px-4 py-2 rounded-[16px] w-full" ></input>
                </div>
                <button type="submit" class="flex justify-center items-center w-full gap-2 px-10 lg:py-4 py-3 bg-Orange/10 rounded-2xl text-white font-Quicksand lg:text-Header4 text-Large font-bold">Register
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="32"  height="32"  viewBox="0 0 24 24"  fill="white"  class="icon icon-tabler icons-tabler-filled icon-tabler-paw"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" /><path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" /><path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" /><path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" /><path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" /></svg>
                </button>
            </form>
            <div class="w-full bg-textTitle h-[2px] rounded-full"> </div>
            <p class="text-white font-Quicksand lg:text-Header4 text-sm font-semibold">Sudah punya akun?<a href="/login"><span class="text-textTitle font-Quicksand lg:text-Header4 text-sm font-semibold">Login Sekarang</span></a></p>
        </div>
    </div>
    <p class="text-black/50 font-Quicksand lg:text-Large text-sm text-center font-semibold">pawfect furever © 2024 All Right Reserved</p>
    <!-- <div class="rounded-full h-[3px] bg-white absolute -z-20 w-[1200px]"> </div> -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const password = document.querySelector("input[name='password']");
            const confirmPassword = document.querySelector("input[name='password_confirmation']");
            const submitButton = document.querySelector("button[type='submit']");
    
            confirmPassword.addEventListener("input", function () {
                if (confirmPassword.value !== password.value) {
                    confirmPassword.setCustomValidity("Password tidak cocok!");
                } else {
                    confirmPassword.setCustomValidity("");
                }
                confirmPassword.reportValidity();
            });
    
            submitButton.addEventListener("click", function (e) {
                if (confirmPassword.value !== password.value) {
                    e.preventDefault();
                    alert("Password dan konfirmasi password harus sama!");
                }
            });
        });
    </script>
</body>
</html>