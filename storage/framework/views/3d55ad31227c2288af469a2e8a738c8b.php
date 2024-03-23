<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Denpasar | <?php echo e($title); ?></title>
</head>

<body>
    <div class="flex justify-center items-center min-w-screen min-h-screen">
        <div class="flex min-h-screen w-[50vw] flex-col justify-center px-6 py-12 lg:px-8">
            <div class="lg:max-w-[50%] sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-28 w-auto" src="images/denpasar-logo.png" alt="Your Company">
                <h1 class="mt-10 text-center text-4xl font-bold leading-12 tracking-tight text-gray-900">Selamat Datang Kembali!</h1>
                <p class="mt-3 text-center text-xl font-normal leading-7 tracking-tight text-gray-700">Masukkan alamat email dan password anda untuk mengakses kembali akun anda dan berjelajah kembali di Kota Denpasar.</p>
            </div>
    
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label for="email" class="block text-md font-medium leading-6 text-gray-900">Alamat Email</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" placeholder="Email Anda" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-md sm:leading-6">
                        </div>
                    </div>
    
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-md font-medium leading-6 text-gray-900">Password</label>
                        </div>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" placeholder="Password Anda" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-md sm:leading-6">
                        </div>
                    </div>
    
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-md font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Masuk</button>
                    </div>
                </form>
    
                <p class="mt-10 text-center text-md text-gray-500">
                    Belum memiliki akun?
                    <a href="/register" class="font-semibold leading-6 text-sky-600 hover:text-sky-500">Daftar disini</a>
                </p>
            </div>
        </div>
        <div class="w-[50vw]">
            <img src="images/form-image.png" alt="" class="h-screen object-cover object-center">
        </div>
    </div>
</body>

</html><?php /**PATH C:\laragon\www\info-denpasar\resources\views//login.blade.php ENDPATH**/ ?>