<form action="{{route('posts.store')}}" method="POST">
        @csrf
        @method('{{@method}}')
        <input type="text" name="title" class="input">
        <input type="text" name="body" class="input">
        <input type="submit" class="btn">
    </form>