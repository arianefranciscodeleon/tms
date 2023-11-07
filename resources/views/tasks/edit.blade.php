<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white p-6">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PUT')
 
                        <div>
                            <x-input-label for="title" value="title" />
                            <x-text-input id="title" name="title" value="{{ old('name', $task->title) }}" type="text" class="block mt-1 w-full" />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
 
                        <div>
                            <x-input-label for="status" value="Status" />
                            <select id="is_completed" name="is_completed" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="{{ old('is_completed', $task->is_completed) }}" >{{$task->is_completed==1?'Completed':'In Progress'}}</option>
                                <option value=1>Completed</option>
                                <option value=0>In Progress</option>
                            </select>
                        </div>
 
                        <div class="mt-4">
                            <x-primary-button>
                                Save
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>