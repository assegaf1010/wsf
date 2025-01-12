<div class="flex h-fit w-2/12 sticky top-0">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md rounded-3xl shadow">
      <!-- Profile Section -->
      <div class="flex flex-col items-center p-6 border-b">
      <a href="#" class="font-black text-3xl text-blue-600">WSF</a>
      <span class="font-bold text-xs justify-center text-center text-blue-600 ml-2">WONOSOBO SWIMMING FEDERATION</span>
      </div>

      <!-- Menu Items -->
      <nav class="mt-6 justify-center text-center text-neutral-500 font-bold ">
        <ul>
          <li class="px-6 mb-4">
            <a href="/admin/dashboard" class="block py-2.5 px-4 rounded-xl shadow  hover:bg-blue-500 hover:text-white ">
              Dashboard
            </a>
          </li>
          <li class="px-6 mb-4">
            <a href="/profileadmin" class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
              Profile
            </a>
          </li>
          <li class="px-6 mb-4">
            <a href="/klubadmin" class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
              Klub
            </a>
          </li>
          <li class="px-6 mb-4">
            <a href="/atletadmin" class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
              Atlet
            </a>
          </li>
          <li class="px-6 mb-4">
            <a href="/kegiatanadmin" class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
              Kegiatan
            </a>
          </li>
          <li class="px-6 mb-4">
            <a href="/pengumumanadmin" class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
              Pengumuman
            </a>
          </li>
          <li class="px-6 mb-4">
            <a href="#" class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white shadow border">
              Help
            </a>
          </li>
          <li class="px-6 mb-8">
          <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="block w-full py-2.5 rounded-xl shadow text-center text-white bg-red-500 rounded hover:bg-red-600">Logout</button>
          </form>
          </li>
        </ul>
      </nav>
    </aside>
  </div>