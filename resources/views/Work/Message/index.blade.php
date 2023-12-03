<x-brechat.layout>
    @vite('resources/js/roomChat.js')
    @php
        $userId = Auth::id();
    @endphp
    <div id="chatRoom">
    </div>
    <script>
        window.RoomId = {};
        RoomId.id = @json($id);
        RoomId.userId = @json($userId)
    </script>
</x-brechat.layout>
