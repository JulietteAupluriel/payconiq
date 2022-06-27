<x-app-layout>

    <form action="{{ route('admin.participationsUpdate', $participations) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf


        <div class="my-2">
            <label class="block text-gray-700 font-semibold mb-2">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name') ?? $participations->name }}" required class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('name') <div class="">{{ $message }}</div> @enderror
        </div>

        <div class="my-2">
            <label class="block text-gray-700 font-semibold mb-2">Prénom</label>
            <input type="text" name="firstname" id="firstname" value="{{ old('firstname') ?? $participations->firstname }}" required class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('firstname') <div class="">{{ $message }}</div> @enderror
        </div>


        <div class="my-2">
            <label class="block text-gray-700 font-semibold mb-2">Gift</label>
            <input type="text" name="gift" id="gift" value="{{ old('gift') ?? $participations->gift }}" class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('gift') <div class="">{{ $message }}</div> @enderror
        </div>


        <div class="my-2">
            <label class="block text-gray-700 font-semibold mb-2">City</label>
            <input type="text" name="city" id="city" value="{{ old('city') ?? $participations->city }}" class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('city') <div class="">{{ $message }}</div> @enderror
        </div>


        <div class="my-2">
            <label class="block text-gray-700 font-semibold mb-2">Email</label>
            <input type="text" name="email" id="email" value="{{ old('email') ?? $participations->email }}" required class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('email') <div class="">{{ $message }}</div> @enderror
        </div>

        <div class="my-2">
            <label class="block text-gray-700 font-semibold mb-2">question1</label>
            <input type="text" name="question1" id="question1" value="{{ old('question1') ?? $participations->question1 }}" class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
            @error('question1') <div class="">{{ $message }}</div> @enderror
        </div>

        <div class="my-2">
            <label class="block text-gray-700 font-semibold mb-2">question2</label>
            <input type="text" name="question2" id="question2" value="{{ old('question2') ?? $participations->question2 }}" class="mb-2 border w-64 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('question2') <div class="">{{ $message }}</div> @enderror
        </div>






<button type="submit" class="focus:outline-none block bg-gray-800 hover:bg-gray-700 px-4 py-2 my-4 rounded-md text-white shadow-sm text-xs tracking-widest font-semibold">SAVE</button>

    </form>

</x-app-layout>
