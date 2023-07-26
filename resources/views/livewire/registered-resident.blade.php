<div>
    <div class="bg-white bg-opacity-80 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6">
            <header class="text-xl  text-gray-700 font-rowdies">
                Registered Residents
            </header>
            <div class="mt-5">
                <table id="example" class="table-auto mt-5" style="width:100%">
                    <thead class="font-normal">
                        <tr>

                            <th class="border border-gray-700 text-left px-2 text-sm font-medium text-gray-600 py-2">
                                FULLNAME
                            </th>
                            <th class="border border-gray-700 text-left px-2 text-sm font-medium text-gray-600 py-2">
                                BARANGAY
                            </th>
                            <th class="border border-gray-700 text-left px-2 text-sm font-medium text-gray-600 py-2">
                                CONTACT NUMBER
                            </th>
                            <th class="border border-gray-700 text-left px-2 text-sm font-medium text-gray-600 py-2">
                                UPLOADS
                            </th>
                            <th class="border border-gray-700 text-left px-2 text-sm font-medium text-gray-600 py-2">
                                ACTION
                            </th>

                        </tr>
                    </thead>
                    <tbody class="">

                        @forelse ($residents as $item)
                            <tr>
                                <td class="border border-gray-700 text-gray-600  px-3 py-1">
                                    {{ $item->firstname . ' ' . $item->middlename[0] . '. ' . $item->lastname }}
                                </td>
                                <td class="border border-gray-700 text-gray-600  px-3 py-1">
                                    {{ $item->barangay }}
                                </td>
                                <td class="border border-gray-700 text-gray-600  px-3 py-1">
                                    {{ $item->contact_number }}
                                </td>
                                <td class="border border-gray-700 text-gray-600  px-3 py-1">
                                    <a href="{{ Storage::url($item->upload_path) }}" target="_blank"
                                        class="text-sm hover:text-green-600">View</a>
                                </td>
                                <td class="border w-px border-gray-700 text-gray-600  px-3 py-1">
                                    <div class="flex  items-center space-x-2">
                                        <x-button label="Approve"
                                            wire:click="approve(
                                        {{ $item->id }}
                                    )"
                                            spinner="approve(
                                        {{ $item->id }}
                                    )"
                                            positive sm rounded class="font-medium" right-icon="thumb-up" />
                                        <x-button label="Disapprove"
                                            wire:click="disApprove(
                                        {{ $item->id }}
                                    )"
                                            spinner="disApprove(
                                        {{ $item->id }}
                                    )"
                                            negative sm rounded class="font-medium" right-icon="thumb-down" />
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5"
                                    class=" border border-gray-700 py-2 text-center text-sm text-gray-700">No data
                                    found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-3">
                    {{ $residents->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
