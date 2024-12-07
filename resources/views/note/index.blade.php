<x-layout>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <div class="note-container">

        {{-- Two ways to have custome links for a tags' href attribute --}}
        {{-- <a href="/note/create" class="new-note-button"> --}}
        {{-- or like this below:
    --}}<a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    <div class="note-body">
                        {{ Str::words($note->note, 30) }}
                    </div>
                    <div class="note-buttons">
                        <a href="{{ route('note.show', $note) }}" class="note-show-button">View</a>
                        <a href="{{ route('note.edit', $note) }}" class="note-edit-button">Edit</a>
                        <button class="note-delete-button">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
