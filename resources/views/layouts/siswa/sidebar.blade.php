<aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                {{-- Sidebar Header --}}
                <ul class="pb-2 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search">
                            </div>
                        </form>
                    </li>

                    {{-- Overview --}}
                    <!-- <li>
                        <x-sidebar-link href="{{ route('siswa.dashboard') }}" :active="request()->is('siswa/dashboard')">
                            <x-sidebar-icon>
                                <path
                                    d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z" />
                                <path
                                    d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z" />
                            </x-sidebar-icon>
                            <span class="ml-3" sidebar-toggle-item>Overview</span>
                        </x-sidebar-link>
                    </li> -->
                    <li>
                        <x-sidebar-link href="{{ route('lihat-jadwal-siswa') }}" :active="request()->is('/dashboard/lihat-jadwal')">
                            <x-sidebar-icon>
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                                  </svg>

                            </x-sidebar-icon>
                            <span class="ml-3" sidebar-toggle-item>Jadwal</span>
                        </x-sidebar-link>
                    </li>

                    {{-- LMS --}}
                    <li>
                        <x-sidebar-dropdown label="LMS" id="lms" :active="request()->is('siswa/dashboard/lms*')">
                            <x-sidebar-icon>
                                <path fill-rule="evenodd"
                                    d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                                    clip-rule="evenodd" />
                            </x-sidebar-icon>
                        </x-sidebar-dropdown>
                        <x-sidebar-dropdown-list id="lms" :active="request()->is('siswa/dashboard/lms*')">
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('siswa.dashboard.lms') }}"
                            :active="request()->routeIs([
                                'siswa.dashboard.lms',
                                'siswa.dashboard.lms.forum',
                                'siswa.dashboard.lms.forum.tugas',
                                'siswa.dashboard.lms.forum.anggota',
                            ])">Beranda</x-sidebar-dropdown-list-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('siswa.dashboard.lms.materi') }}"
                            :active="request()->is('siswa/dashboard/lms/materi*')">Materi</x-sidebar-dropdown-list-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('siswa.dashboard.lms.tracking.tugas.ditugaskan') }}"
                            :active="request()->routeIs([
                                // 'siswa/dashboard/lms/tugas',
                                'siswa.dashboard.lms.tracking.tugas.ditugaskan',
                                'siswa.dashboard.lms.tracking.tugas.belum_diserahkan',
                                'siswa.dashboard.lms.tracking.tugas.diserahkan'
                            ])">Tugas</x-sidebar-dropdown-list-link>
                    </li>
                    </x-sidebar-dropdown-list>
                    </li>

                    {{-- Perpustakaan --}}
                    <li>
                        <x-sidebar-dropdown label="Perpustakaan" id="perpustakaan" :active="request()->is('siswa/dashboard/perpustakaan*')">
                            <x-sidebar-icon>
                                <path fill-rule="evenodd"
                                    d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                                    clip-rule="evenodd" />+
                            </x-sidebar-icon>
                        </x-sidebar-dropdown>
                        <x-sidebar-dropdown-list id="perpustakaan" :active="request()->is('siswa/dashboard/perpustakaan*')">
                    <li>

                        <x-sidebar-dropdown-list-link href="{{ route('dashboard.perpustakaan') }}"
                            :active="request()->is('siswa/dashboard/perpustakaan')">Beranda</x-sidebar-dropdown-list-link>

                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('siswa.perpustakaan.riwayat') }}"
                            :active="request()->is('siswa/dashboard/perpustakaan/riwayat')">Transaksi</x-sidebar-dropdown-list-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('siswa.perpustakaan.rules') }}"
                            :active="request()->is('siswa/dashboard/perpustakaan/rules')">Aturan</x-sidebar-dropdown-list-link>
                    </li>
                    </x-sidebar-dropdown-list>
                    </li>

                    {{-- Ekstrakurikuler --}}
                    @if (auth()->guard('web-siswa')->user()->role_siswa == 'pengurus')
                    <li>
                        <x-sidebar-dropdown label="Ekstrakurikuler" id="ekstrakurikuler" :active="request()->is('siswa/ekstrakurikuler*')">
                            <x-sidebar-icon>
                                <path fill-rule="evenodd"
                                    d="M17.316 4.052a.99.99 0 0 0-.9.14c-.262.19-.416.495-.416.82v8.566a4.573 4.573 0 0 0-2-.464c-1.99 0-4 1.342-4 3.443 0 2.1 2.01 3.443 4 3.443 1.99 0 4-1.342 4-3.443V6.801c.538.5 1 1.219 1 2.262 0 .56.448 1.013 1 1.013s1-.453 1-1.013c0-1.905-.956-3.18-1.86-3.942a6.391 6.391 0 0 0-1.636-.998 4 4 0 0 0-.166-.063l-.013-.005-.005-.002h-.002l-.002-.001ZM4 5.012c-.552 0-1 .454-1 1.013 0 .56.448 1.013 1 1.013h9c.552 0 1-.453 1-1.013 0-.559-.448-1.012-1-1.012H4Zm0 4.051c-.552 0-1 .454-1 1.013 0 .56.448 1.013 1 1.013h9c.552 0 1-.454 1-1.013 0-.56-.448-1.013-1-1.013H4Zm0 4.05c-.552 0-1 .454-1 1.014 0 .559.448 1.012 1 1.012h4c.552 0 1-.453 1-1.012 0-.56-.448-1.013-1-1.013H4Z"
                                    clip-rule="evenodd" />+
                            </x-sidebar-icon>
                        </x-sidebar-dropdown>
                        <x-sidebar-dropdown-list id="ekstrakurikuler" :active="request()->is('siswa/ekstrakurikuler*')">
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('pengurus_ekstra.dashboard') }}"
                            :active="request()->is('siswa/ekstrakurikuler/dashboard*')">Beranda</x-sidebar-dropdown-list-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('pengurus_ekstra.anggota') }}"
                            :active="request()->is('siswa/ekstrakurikuler/anggota*')">Anggota</x-sidebar-dropdown-list-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('pengurus_ekstra.penilaian') }}" :active="request()->is('siswa/ekstrakurikuler/penilaian*')">Laporan Penilaian</x-sidebar-dropdown-list-link>
                    </li>
                    <li>
                        <x-sidebar-dropdown-list-link href="{{ route('pengurus_ekstra.perlengkapan') }}"
                            :active="request()->is('siswa/ekstrakurikuler/perlengkapan*')">Perlengkapan</x-sidebar-dropdown-list-link>
                    </li>
                    </x-sidebar-dropdown-list>
                    </li>
                    @endif



                    {{-- Ujian --}}
                    <li>
                        <x-sidebar-link href="{{ route('siswa.ujian.index') }}" :active="request()->is('siswa/dashboard/ujian*')">
                            <x-sidebar-icon>
                                <path fill-rule="evenodd"
                                    d="M5.617 2.076a1 1 0 0 1 1.09.217L8 3.586l1.293-1.293a1 1 0 0 1 1.414 0L12 3.586l1.293-1.293a1 1 0 0 1 1.414 0L16 3.586l1.293-1.293A1 1 0 0 1 19 3v18a1 1 0 0 1-1.707.707L16 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L12 20.414l-1.293 1.293a1 1 0 0 1-1.414 0L8 20.414l-1.293 1.293A1 1 0 0 1 5 21V3a1 1 0 0 1 .617-.924ZM9 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Zm0 4a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                                    clip-rule="evenodd" />+
                                </path>
                            </x-sidebar-icon>
                            <span class="ml-3" sidebar-toggle-item>Ujian</span>
                        </x-sidebar-link>
                    </li>

                    {{-- Prestasi--}}
                    <li>
                        <x-sidebar-link href="{{route('siswa.prestasi')}}" :active="request()->is('siswa/dashboard/prestasi*')">
                                <i class="ml-1 fa-solid fa-trophy"></i>

                            <span class="ml-3" sidebar-toggle-item>Prestasi</span>
                        </x-sidebar-link>
                    </li>
                </ul>

                {{-- Sidebar Footer --}}
                <div class="pt-2 space-y-2">
                    <x-sidebar-link href="{{ route('siswa.notifikasi') }}" :active="request()->is('siswa/notifikasi')">
                        <x-sidebar-icon>
                            <path
                                d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
                        </x-sidebar-icon>
                        <span class="ml-3" sidebar-toggle-item>Notifikasi</span>
                        <span class="inline-flex items-center justify-center px-2 py-1 ml-3 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">
                            {{ session('notifikasi_count', 0) }}
                        </span>
                    </x-sidebar-link>
                    <x-sidebar-link href="{{ route('siswa.absensi.index') }}" :active="request()->is('siswa/absensi*')">
                        <x-sidebar-icon>
                            <path fill-rule="evenodd"
                                d="M8 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1h2a2 2 0 0 1 2 2v15a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h2Zm6 1h-4v2H9a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2h-1V4Zm-6 8a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1 3a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z"
                                clip-rule="evenodd" />
                        </x-sidebar-icon>
                        <span class="ml-3" sidebar-toggle-item>Absensi</span>
                    </x-sidebar-link>
                </div>
            </div>
        </div>
    </div>
</aside>
