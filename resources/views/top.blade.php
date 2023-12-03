<x-brechat.layout>
    <div
        class="container max-w-sm py-32 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:max-w-none md:text-center">
        <h1
            class="text-3xl font-bold leading-10 tracking-tight text-left text-gray-200 md:text-center sm:text-4xl md:text-7xl lg:text-8xl">
            ライブチャット<br class="hidden sm:block">hogehoge</h1>
        <div class="mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl">
            <x-brechat.text />
        </div>
        <div
            class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('register') }}"
                    class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-900 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                    アカウント作成
                </a>
            </span>
            <span class="relative inline-flex w-full md:w-auto">
                <a href="{{ route('login') }}"
                    class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-gray-900 bg-gray-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">ログイン</a>
            </span>
        </div>
    </div>
</x-brechat.layout>
