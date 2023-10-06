<nav class="w-full h-14 bg-white p-4 flex flex-row justify-between items-center lg:h-16 lg:px-20 drop-shadow-md">
    {{-- menu icon --}}
    <div class="w-auto h-auto lg:hidden">
        <a href="#" id="menu">
            <svg width="24" height="16" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="1" x2="24" y2="1" stroke="#2D2C2F" stroke-width="2"/>
                <line y1="8" x2="24" y2="8" stroke="#2D2C2F" stroke-width="2"/>
                <line y1="15" x2="24" y2="15" stroke="#2D2C2F" stroke-width="2"/>
            </svg>            
        </a>
    </div>

    {{-- menu on medium++ screen --}}
    <div class="w-auto h-auto hidden lg:block">
        <ul class="w-auto h-auto flex flex-row">
            @foreach($categories as $category)
            <li class="font-notoSerif text-accent mr-6 text-xs xl:text-sm font-semibold"><a href="/?category={{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>


    {{-- logo --}}
    <div class="w-auto h-auto">
        <a href="/">
            <h1 class="font-roboto text-xl lg:text-2xl font-semibold uppercase text-primary
            ">far</h1>
        </a>
    </div>

    <div class="w-auto h-auto hidden lg:block">
        <div class="w-auto h-auto flex flex-row items-center">
            <form action="/" class="hidden md:block">
                <div class="w-auto h-auto relative">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if(request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <input id="search" name="search" value="{{ request('search') }}" type="search" class="bg-grays rounded-full placeholder:text-primary text-sm text-primary appearance-none border-none outline-none focus:outline-none focus:appearance-none focus:ring-0" placeholder="Search">
                    {{-- <div id="search-icon" class="w-auto h-auto absolute top-3 right-3">
                        <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.1216 15.8203L14.1931 12.8917C15.228 11.5327 15.7826 9.86861 15.7699 8.16043C15.7763 7.13135 15.5799 6.11106 15.192 5.15787C14.8041 4.20467 14.2322 3.33727 13.5091 2.60508C12.7859 1.8729 11.9256 1.29026 10.9773 0.890557C10.029 0.490857 9.01128 0.281905 7.9822 0.275542H7.88497C6.85588 0.26914 5.8356 0.465516 4.8824 0.853423C3.92921 1.24133 3.06169 1.81315 2.32951 2.53631C1.59733 3.25947 1.01479 4.1198 0.615093 5.06811C0.215393 6.01642 0.00644132 7.03412 7.88291e-05 8.0632C-0.00428922 9.04895 0.172908 10.0271 0.522918 10.9487C0.958707 12.1173 1.66652 13.1654 2.58769 14.0063C3.50885 14.8471 4.61688 15.4567 5.82031 15.7844C6.49412 15.9614 7.18831 16.049 7.88497 16.0453C9.59322 16.0585 11.2574 15.5039 12.6162 14.4686L15.5449 17.3972C15.6483 17.5008 15.7712 17.583 15.9065 17.6391C16.0418 17.6952 16.1868 17.724 16.3332 17.724C16.4797 17.724 16.6247 17.6952 16.7599 17.6391C16.8952 17.583 17.0181 17.5008 17.1216 17.3972C17.3307 17.1881 17.4481 16.9044 17.4481 16.6087C17.4481 16.313 17.3307 16.0294 17.1216 15.8203ZM2.25008 8.16043C2.23545 6.68066 2.80921 5.25572 3.84518 4.19898C4.88116 3.14224 6.29445 2.54027 7.77422 2.52554H7.88497C8.61775 2.51866 9.3447 2.6562 10.0243 2.93028C10.704 3.20436 11.323 3.60964 11.846 4.12295C12.369 4.63626 12.7857 5.24747 13.0725 5.92186C13.3592 6.59624 13.5103 7.32053 13.5171 8.05331V8.15779C13.524 8.89058 13.3866 9.61753 13.1125 10.2972C12.8384 10.9768 12.4331 11.5958 11.9198 12.1188C11.4065 12.6418 10.7952 13.0586 10.1208 13.3453C9.44641 13.6321 8.72212 13.7831 7.98934 13.7899H7.88497C6.40519 13.8046 4.98015 13.2308 3.92341 12.1948C2.86667 11.1589 2.2648 9.74556 2.25008 8.26579C2.24918 8.23069 2.24918 8.19553 2.25008 8.16043Z" fill="#274156"/>
                        </svg>                                                      
                    </div> --}}
                </div>
            </form>
            <div class="w-auto h-auto hidden lg:block ml-4 relative">
                <a href="/cart">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 16C4.9 16 4.01 16.9 4.01 18C4.01 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16ZM0 0V2H2L5.6 9.59L4.25 12.04C4.09 12.32 4 12.65 4 13C4 14.1 4.9 15 6 15H18V13H6.42C6.28 13 6.17 12.89 6.17 12.75L6.2 12.63L7.1 11H14.55C15.3 11 15.96 10.59 16.3 9.97L19.88 3.48C19.96 3.34 20 3.17 20 3C20 2.45 19.55 2 19 2H4.21L3.27 0H0ZM16 16C14.9 16 14.01 16.9 14.01 18C14.01 19.1 14.9 20 16 20C17.1 20 18 19.1 18 18C18 16.9 17.1 16 16 16Z" fill="#274156"/>
                    </svg> 
                </a>
                @if($info->count())
                <div id="mark" class="flex h-4 w-4 font-semibold text-xs text-white rounded-full bg-red-600 absolute -top-3 -right-2 text-center justify-center items-center"><span>{{ $info->count() }}</span></div>
                @endif
            </div>
            <div class="w-auto h-auto hidden lg:block ml-4">
                <a href="/login" class="px-4 py-2 rounded-full bg-primary flex items-center">
                    <svg width="10" height="16" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.7545 11.7213C11.3058 11.2295 10.8122 10.8271 10.2288 10.5141C11.5301 9.53057 12.3378 7.96579 12.3378 6.22217C12.3827 3.27144 9.91473 0.8125 6.90832 0.8125C3.90191 0.8125 1.3891 3.27144 1.3891 6.26688C1.3891 8.0552 2.28653 9.66469 3.63268 10.6483C3.13909 10.9612 2.64551 11.3189 2.24166 11.766C-0.495518 14.7614 0.0429431 18.1145 0.0429431 18.338L0.132687 19.1875H13.8186L13.9083 18.338C13.9981 18.1145 14.4916 14.7614 11.7545 11.7213ZM6.90832 2.73495C8.88268 2.73495 10.4532 4.29973 10.4532 6.26688C10.4532 8.23403 8.83781 9.75411 6.90832 9.75411C4.93396 9.75411 3.36345 8.18933 3.36345 6.22217C3.36345 4.25502 4.93396 2.73495 6.90832 2.73495ZM12.0686 17.2651H1.97243C1.92756 15.7897 2.10704 14.7614 3.72243 13.0178C4.53012 12.1236 5.60704 11.6766 7.04294 11.6766C8.43396 11.6766 9.55576 12.1236 10.3634 13.0178C11.934 14.7614 12.1134 15.7897 12.0686 17.2651Z" fill="white"/>
                    </svg>                        
                    <span class="text-white text-sm ml-2 block">sign in</span>
                </a href="/login">
            </div>
        </div>
    </div>

    {{-- cart icon --}}
    <div class="w-auto h-auto lg:hidden relative">
        <a href="/cart">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 16C4.9 16 4.01 16.9 4.01 18C4.01 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16ZM0 0V2H2L5.6 9.59L4.25 12.04C4.09 12.32 4 12.65 4 13C4 14.1 4.9 15 6 15H18V13H6.42C6.28 13 6.17 12.89 6.17 12.75L6.2 12.63L7.1 11H14.55C15.3 11 15.96 10.59 16.3 9.97L19.88 3.48C19.96 3.34 20 3.17 20 3C20 2.45 19.55 2 19 2H4.21L3.27 0H0ZM16 16C14.9 16 14.01 16.9 14.01 18C14.01 19.1 14.9 20 16 20C17.1 20 18 19.1 18 18C18 16.9 17.1 16 16 16Z" fill="#274156"/>
            </svg>    
        </a>
        @if($info->count())
        <div id="mark" class="flex h-4 w-4 font-semibold text-xs text-white rounded-full bg-red-500 absolute -top-3 -right-2 text-center justify-center items-center"><span>{{ $info->count() }}</span></div>
        @endif
    </div>
</nav>

<div id="off-canvas" class="hidden md:hidden w-full h-auto flex-row justify-end">
    <div class="w-4/5 bg-white h-screen pl-7 z-20 fixed top-0 left-0 flex flex-col justify-start">
        <!-- close icon -->
        <a href="#" id="close">
            <div class="absolute top-6 left-6 scale-90">
                <svg width="32" height="31" xmlns="http://www.w3.org/2000/svg"><g fill="#00001A" fill-rule="evenodd"><path d="m2.919.297 28.284 28.284-2.122 2.122L.797 2.419z"/><path d="M.797 28.581 29.081.297l2.122 2.122L2.919 30.703z"/></g></svg>
            </div>
        </a>
        <!-- off-canvas menu -->
        <ul class="translate-y-32">
            <li>
                <form action="/" class="mb-4">
                    <div class="w-auto h-auto relative">
                        @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if(request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <input id="search" name="search" value="{{ request('search') }}" type="search" class="bg-inherit border-gray-500 focus:border-gray-500 placeholder:text-primary text-sm text-primary appearance-none outline-none focus:outline-none focus:appearance-none focus:ring-0" placeholder="Search">
                        {{-- <div id="search-icon" class="w-auto h-auto absolute top-3 right-3">
                            <svg width="15" height="15" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.1216 15.8203L14.1931 12.8917C15.228 11.5327 15.7826 9.86861 15.7699 8.16043C15.7763 7.13135 15.5799 6.11106 15.192 5.15787C14.8041 4.20467 14.2322 3.33727 13.5091 2.60508C12.7859 1.8729 11.9256 1.29026 10.9773 0.890557C10.029 0.490857 9.01128 0.281905 7.9822 0.275542H7.88497C6.85588 0.26914 5.8356 0.465516 4.8824 0.853423C3.92921 1.24133 3.06169 1.81315 2.32951 2.53631C1.59733 3.25947 1.01479 4.1198 0.615093 5.06811C0.215393 6.01642 0.00644132 7.03412 7.88291e-05 8.0632C-0.00428922 9.04895 0.172908 10.0271 0.522918 10.9487C0.958707 12.1173 1.66652 13.1654 2.58769 14.0063C3.50885 14.8471 4.61688 15.4567 5.82031 15.7844C6.49412 15.9614 7.18831 16.049 7.88497 16.0453C9.59322 16.0585 11.2574 15.5039 12.6162 14.4686L15.5449 17.3972C15.6483 17.5008 15.7712 17.583 15.9065 17.6391C16.0418 17.6952 16.1868 17.724 16.3332 17.724C16.4797 17.724 16.6247 17.6952 16.7599 17.6391C16.8952 17.583 17.0181 17.5008 17.1216 17.3972C17.3307 17.1881 17.4481 16.9044 17.4481 16.6087C17.4481 16.313 17.3307 16.0294 17.1216 15.8203ZM2.25008 8.16043C2.23545 6.68066 2.80921 5.25572 3.84518 4.19898C4.88116 3.14224 6.29445 2.54027 7.77422 2.52554H7.88497C8.61775 2.51866 9.3447 2.6562 10.0243 2.93028C10.704 3.20436 11.323 3.60964 11.846 4.12295C12.369 4.63626 12.7857 5.24747 13.0725 5.92186C13.3592 6.59624 13.5103 7.32053 13.5171 8.05331V8.15779C13.524 8.89058 13.3866 9.61753 13.1125 10.2972C12.8384 10.9768 12.4331 11.5958 11.9198 12.1188C11.4065 12.6418 10.7952 13.0586 10.1208 13.3453C9.44641 13.6321 8.72212 13.7831 7.98934 13.7899H7.88497C6.40519 13.8046 4.98015 13.2308 3.92341 12.1948C2.86667 11.1589 2.2648 9.74556 2.25008 8.26579C2.24918 8.23069 2.24918 8.19553 2.25008 8.16043Z" fill="#274156"/>
                            </svg>                                                      
                        </div> --}}
                    </div>
                </form>
            </li>
            <li class="text-lg text-accent font-semibold font-notoSerif hover:text-primary hover:font-bold hover:cursor-pointer duration-200">Outer</li>
            <li class="text-lg text-accent font-semibold font-notoSerif hover:text-primary hover:font-bold hover:cursor-pointer duration-200 mt-4">Top</li>
            <li class="text-lg text-accent font-semibold font-notoSerif hover:text-primary hover:font-bold hover:cursor-pointer duration-200 mt-4">Skirt</li>
            <li class="text-lg text-accent font-semibold font-notoSerif hover:text-primary hover:font-bold hover:cursor-pointer duration-200 mt-4">Pants</li>
            <li class="text-lg text-accent font-semibold font-notoSerif hover:text-primary hover:font-bold hover:cursor-pointer duration-200 mt-4">Accessories</li>
        </ul>
    </div>
</div>