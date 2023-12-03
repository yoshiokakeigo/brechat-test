<x-brechat.layout>
    <div class="h-full bg-gray-800 text-gray-800 p-4 lg:p-8 mt-10 rounded-xl mx-20">
        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="space-y-12 px-32 py-10">
                <div class="border-b border-gray-900/10">
                    <h2 class="text-base font-semibold leading-7 text-gray-200 text-4xl">プロフィール</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-400">他の方に閲覧されます
                    </p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="name"
                                class="block text-sm font-medium leading-6 text-gray-400">ニックネーム</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="name" id="name" autocomplete="name"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-200 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="必須" value="{{ $user->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            {{-- ニックネームのタグをそのまま持ってきただけなのでlavelなどの変更必須 --}}
                            <label for="address" class="block text-sm font-medium leading-6 text-gray-400">居住地</label>
                            @if ($errors->has('address'))
                                <p class="text-red-500">{{ $errors->first('address') }}</p>
                            @endif
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="address" id="address" autocomplete="address"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-200 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                        placeholder="30文字以内に収めてください" value="{{ $user->address }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="comment" class="block text-sm font-medium leading-6 text-gray-400">自己紹介</label>
                            <div class="mt-2">
                                <textarea id="comment" name="comment" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-200 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 bg-transparent">{{ $user->comment }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end">
                    <p class="text-gray-200">{{ $user->email }}</p>
                </div>
                <div>
                    <div class="mt-6 flex items-center gap-x-6">
                        <button type="button"
                            class="text-sm font-semibold leading-6 text-gray-400 hover:text-red-500"><a
                                href="{{ route('home') }}">キャンセル</a></button>
                        <button type="submit"
                            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">更新する</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-brechat.layout>
