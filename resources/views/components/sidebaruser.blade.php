<div class="flex w-2/12 sticky top-0">
  <!-- Sidebar -->
  <aside class="w-64 h-fit bg-white shadow-md rounded-3xl">
    <!-- Profile Section -->
    <div class="flex flex-col items-center p-6 border-b">
      <a href="#" class="font-black text-3xl text-blue-600">WSF</a>
      @if (isset($users))
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
    @else
        <p>No users available.</p>
    @endif

    </div>

    <!-- Menu Items -->
    <nav class="mt-6 text-center text-neutral-500 font-bold">
      <ul>
        <li class="px-6 mb-4">
          <a href="/klub/dashboard"
            class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
            Dashboard
          </a>
        </li>
        <li class="px-6 mb-4">
          <a href="/profileklub"
            class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
            Profile
          </a>
        </li>
        <li class="px-6 mb-4">
          <a href="/atletklub"
            class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
            Atlet
          </a>
        </li>
        <li class="px-6 mb-4">
          <a href="/kegiatanklub"
            class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
            Kegiatan
          </a>
        </li>
        <li class="px-6 mb-4">
          <a href="/pengumumanklub"
            class="block py-2.5 px-4 rounded-xl shadow hover:bg-blue-500 hover:text-white">
            Pengumuman
          </a>
        </li>
        <li class="px-6 mb-8">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
              class="block w-full py-2.5 rounded-xl shadow text-center text-white bg-red-500 hover:bg-red-600">
              Logout
            </button>
          </form>
        </li>
      </ul>
    </nav>
  </aside>
</div>
