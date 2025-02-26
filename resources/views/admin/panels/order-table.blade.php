<div class="relative overflow-x-auto rounded-md">
    <table class="rounded-sm w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    ID Pesanan
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Paket
                </th>
                <th scope="col" class="px-6 py-3">
                    User Note
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Pesanan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Selesai
                </th>
                <th scope="col" class="px-6 py-3 flex justify-center">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $order)    
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
                    {{ $order->reservation_identifier }}
                </td>
                <td class="px-6 py-4">
                    {{ $order->user->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $order->package->name }}
                </td>
                <td class="px-6 py-4 text-center">
                    {{ $order->note??"-" }}
                </td>
                <td class="px-6 py-4 text-center">
                    {{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}
                </td>
                <td class="px-6 py-4 text-center">
                    {{ $order->finished_at===null?"-":\Carbon\Carbon::parse($order->finished_at)->format('d/m/Y') }}
                </td>
                @php
                    $bgColor = match($order->status) {
                        'Pending' => 'bg-yellow-600 hover:bg-yellow-500',
                        'Finished' => 'bg-green-600 hover:bg-green-500',
                        'Waiting' => 'bg-blue-600 hover:bg-blue-500',
                        'Driver Ongoing!' => 'bg-blue-600 hover:bg-blue-500',
                        'Grooming' => 'bg-blue-600 hover:bg-blue-500',
                        'Canceled' => 'bg-red-600 hover:bg-red-500',
                        'Refunded' => 'bg-red-600 hover:bg-red-500',
                        default => 'bg-gray-200 text-gray-800'
                    };
                @endphp
                <td class="px-2 py-4 flex justify-center">
                    <select wire:change="updateStatus({{ $order->id }}, $event.target.value)" class="font-normal w-[100px] text-white px-1 py-1 rounded-md {{ $bgColor }}">
                        @foreach ($statuses as $status)
                            <option class="font-normal" value="{{ $status }}" {{ $order->status == $status ? 'selected' : '' }}>
                                {{ ucfirst($status) }}
                            </option>
                        @endforeach
                    </select>                    
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Manage</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>