<x-app-layout>

<a href="/export" class="button">Exporter le csv</a>
        <ul class="my-5">
            @foreach ($participations as $item)
            <li class="py-2 flex flex-wrap items-center border-t border-gray-200 hover:bg-gray-50">
                <a href="{{ route('admin.participationsEdit', $item) }}" class="text-blue-500 hover:text-blue-700">{{ $item->firstname }} {{ $item->name }} |  {{ $item->email }} </a> <span>&nbsp;{{ $item->city }}</span>
             
              <form action="{{ route('admin.participations.destroy', $item) }}" method="post" class="inline-block ml-auto"> @csrf @method('delete') 
                    <button type="submit" class="font-light tracking-widest m-1 text-red-500 hover:text-red-700 text-xs focus:outline-none" onclick="return confirm('Are you sure you want to delete this item?')">DELETE</button>
                </form>
            </li>
            @endforeach
        </ul>
        <div>{{ $participations->links() }}</div>

</x-app-layout>
