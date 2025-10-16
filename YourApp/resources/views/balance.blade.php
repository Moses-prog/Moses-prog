<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Balance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </div>
                    @endif

                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Your current balance is: ${{ auth()->user()->balance }}</h3>

                    <div class="mt-6">
                        <h4 class="text-md font-medium text-gray-900 dark:text-gray-100">Deposit Funds</h4>
                        <form method="POST" action="{{ route('balance.deposit') }}" class="mt-4">
                            @csrf
                            <div>
                                <x-input-label for="deposit_amount" :value="__('Amount')" />
                                <x-text-input id="deposit_amount" name="amount" type="number" class="mt-1 block w-full" min="0.01" step="0.01" required />
                            </div>

                            <div class="flex items-center gap-4 mt-4">
                                <x-primary-button>{{ __('Deposit') }}</x-primary-button>
                            </div>
                        </form>
                    </div>

                    @if(auth()->user()->is_affiliate)
                        <div class="mt-6">
                            <h4 class="text-md font-medium text-gray-900 dark:text-gray-100">Withdraw Funds (for Affiliates)</h4>
                            <form method="POST" action="{{ route('balance.withdraw') }}" class="mt-4">
                                @csrf
                                <div>
                                    <x-input-label for="withdraw_amount" :value="__('Amount')" />
                                    <x-text-input id="withdraw_amount" name="amount" type="number" class="mt-1 block w-full" min="0.01" step="0.01" required />
                                </div>
    
                                <div class="flex items-center gap-4 mt-4">
                                    <x-primary-button>{{ __('Withdraw') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
