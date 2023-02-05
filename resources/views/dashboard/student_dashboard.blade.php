<form method="POST" action="{{ route('logout') }}">
    @csrf

    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log out</a>

</form>
