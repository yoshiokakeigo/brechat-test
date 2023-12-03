<x-brechat.layout>
    <div class="h-full bg-gray-200 text-gray-800 p-4 lg:p-8 mt-10 rounded-xl" x-data="alpineInstance()">
        <a href="{{ route('room.create') }}"
            class="inline-flex items-center w-full px-8  py-5 text-sm font-medium leading-4 text-white bg-gray-900 md:w-auto md:rounded-full hover:bg-gray-800 focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-gray-800 text-3xl mb-10">部屋を作成する</a>
        <p class="text-xl text-gray-600 font-light mb-4" x-html="intro"></p>
        <div class="flex flex-wrap -mx-2 pb-8">
            <!-- begin: user card -->
            @foreach ($owners as $owner)
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 h-full font-light">
                    <a href="{{ route('room.show', ['id' => $owner->id]) }}">
                        <div
                            class="flex bg-white rounded-lg shadow-md m-2 border-l-4 border-white hover:shadow-2xl hover:border-pink-500 cursor-pointer relative">
                            <div class="p-4 pr-6 leading-normal overflow-y-auto h-48">
                                <div class="font-medium text-xl truncate">{{ $owner->title }}</div>
                                <div
                                    class="truncate uppercase text-xs text-gray-500 font-semibold pb-2 tracking-widest mt-2">
                                    <object>作成者:<a class="hover:underline"
                                            href="{{ route('user.show', ['id' => $owner->owner->id]) }}">{{ $owner->owner->name }}</a></object>
                                </div>
                                <div class="mr-4 block">{{ $owner->rule }}</div>
                                <div
                                    class="truncate uppercase text-xs text-gray-500 font-semibold pb-2 tracking-widest mt-2">
                                    {{ $owner->created_at->format('m/d-H:i') }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <!-- end: user card -->
        </div>
        {{ $owners->links('vendor.pagination.tailwind') }}
    </div>
    <style>
        .text-link {
            @apply text-blue-600 hover:text-blue-700;
        }
    </style>
    <script>
        function alpineInstance() {
            return {
                intro: '好きな部屋を選択してください',
            }
        }
    </script>
</x-brechat.layout>
