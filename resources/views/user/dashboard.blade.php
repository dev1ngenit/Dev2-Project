<x-app-layout>
    <x-slot name="header">
        <h2>Welcome to User Dashboard</h2>
    </x-slot>

    <div class="p-6 bg-white rounded-lg shadow">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-4">
                Logout
            </button>
        </form>
    </div>
</x-app-layout>
