<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Affiliate Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Referral Link -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">Your Referral Link</h3>
                        <div class="flex items-center mt-2">
                            <input type="text" value="{{ $referralLink }}" id="referralLink" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" readonly>
                            <button onclick="copyToClipboard()" class="ml-2 px-4 py-2 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Copy
                            </button>
                        </div>
                    </div>

                    <!-- Stat Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="p-6 bg-blue-100 border-l-4 border-blue-500 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-800">Total Referrals</h3>
                            <p class="text-3xl font-bold text-gray-900">{{ $totalReferrals }}</p>
                        </div>
                        <div class="p-6 bg-green-100 border-l-4 border-green-500 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-800">Total Earnings</h3>
                            <p class="text-3xl font-bold text-gray-900">{{ $totalEarningsInNaira }}</p>
                        </div>
                    </div>

                    <!-- Chart -->
                    <div class="mt-8">
                        <canvas id="myChart"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function copyToClipboard() {
            const referralLinkInput = document.getElementById('referralLink');
            referralLinkInput.select();
            document.execCommand('copy');
            alert('Referral link copied to clipboard!');
        }

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($chartData['labels']),
                datasets: [{
                    label: 'Referrals Over Time',
                    data: @json($chartData['data']),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    @endpush
</x-app-layout>
