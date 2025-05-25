<aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
    class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <a href="{{route('home')}}">
            <img src="{{ asset('tailadmin/build/src/images/logo/logo.svg') }}" alt="Logo" />
        </a>

        <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('home') }">
            <!-- Menu Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    <li>
                        <a href="{{ route('home') }}"
                            x-init="selected = '{{ request()->routeIs('home')  ? 'home' : '' }}'"
                            :class="[
                                'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium duration-300 ease-in-out',
                                selected === 'home' ? 'bg-graydark dark:bg-meta-4 text-primary font-bold' :
                                'text-bodydark1 hover:bg-graydark dark:hover:bg-meta-4'
                            ]">
                           <i class="bi bi-grid"></i>

                            Dashboard

                        </a>
                    </li>
                    <!-- Menu Item Dashboard -->

                    <!-- Menu Item Calendar -->
                    <li>
                        <a href="{{ route('calendar') }}"
                        x-init="selected = '{{ request()->routeIs('calendar') ? 'Calendar' : '' }}'"
                        :class="[
                            'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium duration-300 ease-in-out',
                            selected === 'Calendar' ? 'bg-graydark dark:bg-meta-4 text-primary font-bold' :
                            'text-bodydark1 hover:bg-graydark dark:hover:bg-meta-4'
                        ]">
                            <i class="bi bi-calendar"></i>

                            Calendar
                        </a>
                    </li>
                    <!-- Menu Item Calendar -->

                    <!-- Menu Item Profile -->
                    <li>
                        <a href="{{ route('profile') }}"
                        x-init="selected = '{{ request()->routeIs('profile') ? 'profile' : '' }}'"
                        :class="[
                            'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium duration-300 ease-in-out',
                            selected === 'profile' ? 'bg-graydark dark:bg-meta-4 text-primary font-bold' :
                            'text-bodydark1 hover:bg-graydark dark:hover:bg-meta-4'
                        ]">
                            <i class="bi bi-person"></i>

                            Profile
                        </a>
                    </li>
                    <!-- Menu Item Profile -->

                    <!-- Menu Item Forms -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="#" @click.prevent="selected = (selected === 'Forms' ? '':'Forms')"
                            :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'Forms') || (
                                    page === 'formElements' || page === 'formLayout')
                            }">
                           <i class="bi bi-text-indent-left"></i>

                            Forms

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected === 'Forms') }" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected === 'Forms') ? 'block' : 'hidden'">
                            <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                        href="{{route('form-elements')}}"
                                        :class="page === 'formElements' && '!text-white'">Form Elements</a>
                                </li>
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                         href="{{route('form-layout')}}"
                                        :class="page === 'formLayout' && '!text-white'">Form Layout</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <!-- Menu Item Forms -->

                    <!-- Menu Item Tables -->
                    <li>
                        <a href="{{ route('tables') }}"
                        x-init="selected = '{{ request()->routeIs('tables') ? 'tables' : '' }}'"
                        :class="[
                            'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium duration-300 ease-in-out',
                            selected === 'tables' ? 'bg-graydark dark:bg-meta-4 text-primary font-bold' :
                            'text-bodydark1 hover:bg-graydark dark:hover:bg-meta-4'
                        ]">
                           <i class="bi bi-table"></i>

                            Tables
                        </a>
                    </li>
                    <!-- Menu Item Tables -->

                    <!-- Menu Item Settings -->
                    <li>
                        <a href="{{ route('settings') }}"
                        x-init="selected = '{{ request()->routeIs('settings') ? 'settings' : '' }}'"
                        :class="[
                            'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium duration-300 ease-in-out',
                            selected === 'settings' ? 'bg-graydark dark:bg-meta-4 text-primary font-bold' :
                            'text-bodydark1 hover:bg-graydark dark:hover:bg-meta-4'
                        ]">
                            <i class="bi bi-gear"></i>

                            Settings
                        </a>
                    </li>
                    <!-- Menu Item Settings -->
                </ul>
            </div>

            <!-- Others Group -->
            <div>
                <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">OTHERS</h3>

                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Chart -->
                    <li>
                        <a href="{{ route('chart') }}"
                        x-init="selected = '{{ request()->routeIs('chart') ? 'chart' : '' }}'"
                        :class="[
                            'group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium duration-300 ease-in-out',
                            selected === 'chart' ? 'bg-graydark dark:bg-meta-4 text-primary font-bold' :
                            'text-bodydark1 hover:bg-graydark dark:hover:bg-meta-4'
                        ]">
                             <i class="bi bi-pie-chart"></i>

                            Chart
                        </a>
                    </li>
                    <!-- Menu Item Chart -->

                    <!-- Menu Item Ui Elements -->
                    <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="#" @click.prevent="selected = (selected === 'UiElements' ? '':'UiElements')"
                            :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'UiElements') || (
                                    page === 'alerts' || page === 'buttons')
                            }">
                            <i class="bi bi-grid-1x2-fill"></i>

                            UI Elements

                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                                :class="{ 'rotate-180': (selected === 'UiElements') }" width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected === 'UiElements') ? 'block' : 'hidden'">
                            <ul class="mb-3 mt-4 flex flex-col gap-2 pl-6">
                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                        href="{{route('alerts')}}"
                                        :class="page === 'alerts' && '!text-white'">Alerts</a>
                                </li>

                                <li>
                                    <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white"
                                       href="{{route('buttons')}}"
                                        :class="page === 'buttons' && '!text-white'">Buttons</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    <!-- Menu Item Ui Elements -->
                </ul>
            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
