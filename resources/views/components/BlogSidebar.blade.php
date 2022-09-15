<div class="p-5 md:p-8 mt-0">
    <h3 class="uppercase font-extrabold text-3xl ">Recent Blogs</h3>
    <div class="mt-5">
        @foreach ($sidebarBlogs as $sidebarblog)
            <a href="/blogs/{{ $sidebarblog->id }}" class="group">
                <div class="bg-white p-3 lg:w-96 mb-3 rounded-r-lg xl:w-97 border-b-4 group-hover:border-b-4 group-hover:border-green-800 transition duration-300">
                    <p class="block truncate uppercase tracking-wide font-semibold">{{ $sidebarblog->title }}</p>
                    <span class="text-slate-500">{{ Carbon\Carbon::parse($sidebarblog->created_at)->diffForHumans() }}</span>
                </div>
            </a>
        @endforeach
    </div>
</div>