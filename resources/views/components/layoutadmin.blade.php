<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WSF</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-blue-800 w-full h-3/6 pl-6 pt-6 pb-6">

<section class="flex">
  <x-sidebaradmin></x-sidebaradmin>

    <main class="w-11/12">
      <div class="w-full ">{{$slot}}</div>
    </main>

</section>


<script>
  const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
  const mobileMenu = document.getElementById('mobile-menu');

  mobileMenuButton.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.contains('hidden');
    if (isOpen) {
      mobileMenu.classList.remove('hidden');
    } else {
      mobileMenu.classList.add('hidden');
    }
  });
</script>


</body>
</html>