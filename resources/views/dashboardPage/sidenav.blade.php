<nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <p
            class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0">
            welcome {{ Auth::user()->name }}
        </p>
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar">
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a class=" hover-text text-xs uppercase py-3 font-bold block" id="link"
                        href="/dashboard"><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>
                        Dashboard</a>
                </li>

                <li class="items-center">
                    <a class=" hover-text text-xs uppercase py-3 font-bold block"
                        href="/landing"><i class="fas fa-newspaper opacity-75 mr-2 text-sm"></i>
                        Landing Page</a>
                </li>

                <li class="items-center">
                    <a class=" hover-text text-xs uppercase py-3 font-bold block"
                        href="/articles/create"><i class="fas fa-clipboard-list opacity-75 mr-2 text-sm"></i>
                        Add Article</a>
                </li>
                <li class="items-center">
                    <a class=" hover-text text-xs uppercase py-3 font-bold block"
                        href="/articles"><i class="fas fa-tools opacity-75 mr-2 text-sm"></i>Articles</a>
                </li>
                <li class="items-center">
                    <a class=" hover-text text-xs uppercase py-3 font-bold block"
                        href="/messages"><i class="fas fa-envelope opacity-75 mr-2 text-sm"></i>messages</a>
                </li>                
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class=" hover-text text-xs uppercase py-3 font-bold block"
                            href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i class="fas fa-user-circle opacity-75 mr-2 text-sm">
                            </i>{{ __('Log Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
