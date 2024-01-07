<div class="p-5">
    <h2 class="text-2xl font-bold">TODO</h2>
    <div class="mt-10 flex space-x-3">
        <form wire:submit.prevent="add">
            <input type="text" wire:model="title" class="input input-bordered">
            <button class="btn btn-primary">ADD</button>
        </form>
    </div>
    <div>
        @foreach ($todos as $todo)
        <div wire:key="{{ $todo }}" class="flex justify-between items-center border-b-2">
            <div>{{ $todo }}</div>
            <div class="flex space-x-2 py-2">
                <button class="btn btn-primary">編集</button>
                <button class="btn btn-primary">完了</button>
                <button class="btn btn-primary">削除</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
