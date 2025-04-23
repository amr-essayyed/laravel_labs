<div class="navbar bg-base-100 shadow-sm">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl" href="{{route('index')}}">ITILavravel</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
      <li><a href="{{route('index')}}">Home</a></li>
      <li>
        <details>
          <summary>Posts</summary>
          <ul class="bg-base-100 rounded-t-none p-2">
            <li><a href="{{route('posts.index')}}">Posts List</a></li>
            <li><a href="{{route('posts.create')}}">New Post</a></li>
          </ul>
        </details>
      </li>
    </ul>
  </div>
</div>