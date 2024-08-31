<x-layout>
    <x-slot:header>
        Jobs Page
    </x-slot:header>

    <div class="space-y-4 flex flex-wrap justify-center">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block p-6 border border-gray-200 rounded-lg shadow-lg w-3/12 m-5 hover:shadow-2xl transition-shadow duration-200">
                  <!-- Job Image -->
                  <div class="mb-4">
                    @if($job->image)
                        <img src="{{ asset('storage/' . $job->image) }}" alt="{{ $job['job'] }}" class="w-full h-48 object-cover rounded-lg">
                    @else
                        <img src="{{ asset('images/placeholder.png') }}" alt="Placeholder" class="w-full h-48 object-cover rounded-lg">
                    @endif
                </div>
                
                <div class="font-bold text-blue-500 text-lg">{{ $job->employer->name }}</div>

                <div class="text-gray-700 mt-2">
                    <strong>{{ $job['job'] }}:</strong>
                    <p>Pays {{ $job['salary'] }} per year.</p>
                </div>
            </a>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $jobs->links() }}
    </div>
</x-layout>
