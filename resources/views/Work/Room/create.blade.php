<x-brechat.layout>
    <div class="h-full bg-gray-800 text-gray-800 p-4 lg:p-8 mt-10 rounded-xl mx-20">
        <form action="{{ route('room.store') }}" method="post">
            @csrf
            <div class="space-y-12 px-32 py-10">
                <div class="border-b border-gray-900/10">
                    <h2 class="text-base font-semibold leading-7 text-gray-200 text-3xl">チャットルーム作成</h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-400">タイトル</label>
                            @if ($errors->has('title'))
                                <p class="text-red-500">{{ $errors->first('title') }}</p>
                            @endif
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="title" id="title" autocomplete="title"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-200 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="必須 100文字以内" value="{{ old('title') }}">
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                        </div>
                        <div class="col-span-full">
                            <label for="rule"
                                class="block text-sm font-medium leading-6 text-gray-400">ルール・紹介文</label>
                            @if ($errors->has('rule'))
                                <p class="text-red-500">{{ $errors->first('rule') }}</p>
                            @endif
                            <div class="mt-2">
                                <textarea id="rule" name="rule" rows="3" placeholder="300文字以内"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-transparent">{{ old('rule') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="mt-6 flex items-center gap-x-6">
                        <button type="button"
                            class="text-sm font-semibold leading-6 text-gray-400 hover:text-red-500"><a
                                href="{{ route('home') }}">キャンセル</a></button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">作成する</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-brechat.layout>
