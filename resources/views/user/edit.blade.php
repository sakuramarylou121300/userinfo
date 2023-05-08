            <form method="POST" action="/user/entities/{{$entity->id}}">
                @csrf
                @method('PATCH')

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="first_name"
                    >
                        First Name
                    </label>
        
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="first_name"
                        id="first_name"
                        value="{{ old('first_name') }}"
                        required
                    >
                    @error('first_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
        
                {{-- this is for the middle name --}}
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="middle_name"
                    >
                        Middle Name
                    </label>
        
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="middle_name"
                        id="middle_name"
                        value="{{ old('middle_name') }}"
                    >
                    @error('middle_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
        
                {{-- this is for the last name --}}
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="last_name"
                    >
                        Last Name
                    </label>
        
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="last_name"
                        id="last_name"
                        value="{{ old('last_name') }}"
                    >
                    @error('last_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
        
                {{-- suffix --}}
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="suffix"
                    >
                        Suffix
                    </label>
        
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="suffix"
                        id="suffix"
                        value="{{ old('suffix') }}"
                    >
                    @error('suffix')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                
                {{-- this is a submit button --}}
                <button>Update</button>

            </form>
