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
    <title>Lupa Password</title>
</head>
<body class="bg-gradient-to-t from-[#F8EDE3] from-0% via-[#F6B171] via-50% to-[#F7D1AE] to-80% flex flex-col justify-center items-center py-5 lg:px-32 px-5 w-full gap-10 bg-no-repeat bg-cover min-h-screen">
    <div class="flex flex-col w-fit justify-center items-center h-full">
        <img src="{{ asset('images/login_cat.png') }}" class="z-10 mb-[-90px]">
        <div class="flex flex-col gap-10 p-10 rounded-[20px] bg-Orange/20 items-center w-full drop-shadow-[4px_8px_4px_rgba(0,0,0,0.25)]">
            <h1 class="text-textTitle font-Quicksand lg:text-Header2 text-Header3 font-bold">Lupa Password</h1>
            <p class="text-textParagraph font-Quicksand lg:text-Header4 text-[12px] font-semibold">Permintaan untuk reset password tekirim, silahkan cek email anda</p>
            <div class="w-full bg-textTitle h-[2px] rounded-full"> </div>
            <p class="text-white font-Quicksand lg:text-Header4 text-[12px] font-semibold">Belum punya akun?<a href="/signup"><span class="text-textTitle font-Quicksand lg:text-Header4 text-sm font-semibold"> Daftar Sekarang</span></a></p>
        </div>
    </div>
    <p class="text-black/50 font-Quicksand lg:text-Large text-sm text-center font-semibold">pawfect furever © 2024 All Right Reserved</p>
    <!-- <div class="rounded-full h-[3px] bg-white absolute -z-20 w-[1200px]"> </div> -->
</body>
</html>