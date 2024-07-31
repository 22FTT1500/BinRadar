<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body>
<nav style="background-color: rgb(22 163 74);">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center space-x-4">
        <button type="button" class="text-black focus:outline-none">
          <span class="sr-only">Back</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </button>
        <a href="#" class="px-3 py-2 text-lg font-medium text-black">Home</a>
        <a href="#" class="px-3 py-2 text-lg font-medium text-black">Analysis</a>
        <a href="#" class="px-3 py-2 text-lg font-medium text-black">Setting</a>
        <a href="#" class="px-3 py-2 text-lg font-medium text-black">Profile</a>
      </div>
      <div class="flex items-center">
        <button type="button" class="rounded-full bg-white p-1 text-black focus:outline-none">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</nav>

<div class="px-4 sm:px-6 lg:px-8">
  <h2 class="text-xl font-semibold mb-4 mt-4 ml-0 flex justify-between items-center w-full">Account</h2>
  <div style="background-color: rgb(187 247 208);" class="w-full p-4 rounded-lg mb-10 flex justify-between items-center">
    <span>Email</span>
    <span class="text-zinc-700">lala02@gmail.com</span>
  </div>

  <div style="background-color: rgb(187 247 208);" class="w-full p-4 rounded-lg mb-4 mt-6 flex justify-between items-center">
    <span>Profile Photo</span>
    <span class="text-zinc-700"><i class="fas fa-user-circle"></i></span>
  </div>

  <div style="background-color: rgb(187 247 208);" class="w-full p-4 rounded-lg mb-4 flex justify-between items-center">
    <span>Name</span>
    <span class="text-zinc-700">lala02</span>
  </div>

  <div style="background-color: rgb(187 247 208);" class="w-full p-4 rounded-lg mb-10 flex justify-between items-center">
    <span>Change Password</span>
    <span class="text-zinc-700"><i class="fas fa-chevron-right"></i></span>
  </div>

  <button class="bg-red-500 text-white w-full py-2 rounded-lg hover:bg-red-600 mb-4 mt-6">Log Out</button>
</div>

</body>
</html>
