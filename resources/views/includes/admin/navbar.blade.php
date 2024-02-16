
<nav
class="sticky top-0 z-10 block w-full max-w-full px-4 py-2 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none border rounded-none shadow-md  border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
<div class="flex items-center justify-between text-blue-gray-900">
  <a href="{{ url('/admin/dashboard') }}"
    class="mr-4 block cursor-pointer font-sans text-2xl leading-relaxed text-inherit antialiased font-bold">
    Admin 
  </a>

  <div class="flex items-center gap-4">
  @if(session('adminData'))
    <div class="flex items-center gap-x-1">
      <form action="/admin/logout-admin" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          <button class="hidden select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
            <span>Log Out</span>
          </button>
      </form>
    </div>
    @endif
  </div>
</div>
</nav>
