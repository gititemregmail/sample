<li>
        <img src="https://iocaffcdn.phphub.org/uploads/images/201801/03/1/IFBS9BHEH9.jpg!/both/100x100" alt="{{ $user->name }}" class="gravatar"/>
        <a href="{{ route('users.show', $user->id) }}" class="username">{{ $user->name }}</a>
         @can('destroy', $user)
      <form action="{{ route('users.destroy', $user->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
      </form>
    @endcan
      </li>