<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-80 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex space-x-3 items-end">
                        <div class="w-96">
                            <x-native-select label="Barangay List" wire:model="barangay">
                                <option selected hidden>Select an Option</option>
                                <option value="ANILAO EAST">ANILAO EAST</option>
                                <option value="ANILAO PROPER">ANILAO PROPER</option>
                                <option value="BAGALANGIT">BAGALANGIT</option>
                                <option value="BULACAN">BULACAN</option>
                                <option value="CALAMIAS">CALAMIAS</option>
                                <option value="ESTRELLA">ESTRELLA</option>
                                <option value="GASANG">GASANG</option>
                                <option value="LAUREL">LAUREL</option>
                                <option value="LIGAYA">LIGAYA</option>
                                <option value="MAINAGA">MAINAGA</option>
                                <option value="MAINIT">MAINIT</option>
                                <option value="MAJUBEN">MAJUBEN</option>
                                <option value="MALIMATOC I">MALIMATOC I</option>
                                <option value="MALIMATOC II">MALIMATOC II</option>
                                <option value="NAG-IBA">NAG-IBA</option>
                                <option value="PILAHAN">PILAHAN</option>
                                <option value="POBLACION">POBLACION</option>
                                <option value="PULANG LUPA">PULANG LUPA</option>
                                <option value="PULONG ANAHAO">PULONG ANAHAO</option>
                                <option value="PULONG BALIBAGUHAN">PULONG BALIBAGUHAN</option>
                                <option value="PULONG NIOGAN">PULONG NIOGAN</option>
                                <option value="SAGUING">SAGUING</option>
                                <option value="SAMPAGUITA">SAMPAGUITA</option>
                                <option value="SAN FRANCISCO">SAN FRANCISCO</option>
                                <option value="SAN JOSE">SAN JOSE</option>
                                <option value="SAN JUAN">SAN JUAN</option>
                                <option value="SAN TEODORO">SAN TEODORO</option>
                                <option value="SANTA ANA">SANTA ANA</option>
                                <option value="SANTA MESA">SANTA MESA</option>
                                <option value="SANTO NINO">SANTO NINO</option>
                                <option value="SANTO TOMAS">SANTO TOMAS</option>
                                <option value="SOLO">SOLO</option>
                                <option value="TALAGA EAST">TALAGA EAST</option>
                                <option value="TALAGA PROPER">TALAGA PROPER</option>

                            </x-native-select>
                        </div>
                        <x-button label="Send to all barangay" right-icon="annotation" positive rounded
                            wier:click="{{}}" />
                    </div>
                    <div class="mt-3">
                        <div class="flex justify-between items-center">
                            <span>List of Residents</span>
                            <span>No. of residents: {{ $barangay ? $lists->count() : 0 }}</span>
                        </div>
                        <div class="mt-1 border-2 shadow-lg h-56">
                            <ul class="p-4">
                                @forelse ($lists as $list)
                                    <li class="p-1 flex space-x-3 items-center justify-between border-b">
                                        <div class="flex space-x-3">
                                            <x-checkbox id="checkbox" wire:click="addUser({{ $list->id }})" />
                                            <span class="w-40">{{ $list->lastname . ', ' . $list->firstname }}</span>
                                        </div>
                                        <div class="flex items-center space-x-4">
                                            <button wire:click="updateData({{ $list->id }})"
                                                class="flex space-x-1 items-center text-sm text-green-500 fill-green-500 hover:text-green-700 hover:fill-green-700">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M16.7574 2.99666L14.7574 4.99666H5V18.9967H19V9.2393L21 7.2393V19.9967C21 20.5489 20.5523 20.9967 20 20.9967H4C3.44772 20.9967 3 20.5489 3 19.9967V3.99666C3 3.44438 3.44772 2.99666 4 2.99666H16.7574ZM20.4853 2.09717L21.8995 3.51138L12.7071 12.7038L11.2954 12.7062L11.2929 11.2896L20.4853 2.09717Z">
                                                    </path>
                                                </svg>
                                                <span>Edit</span>
                                            </button>
                                            <button wire:click="deleteData({{ $list->id }})"
                                                class="flex text-red-500 fill-red-500 hover:text-red-700 hover:fill-red-700 space-x-1 items-center text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M4 8H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V8ZM6 10V20H18V10H6ZM9 12H11V18H9V12ZM13 12H15V18H13V12ZM7 5V3C7 2.44772 7.44772 2 8 2H16C16.5523 2 17 2.44772 17 3V5H22V7H2V5H7ZM9 4V5H15V4H9Z">
                                                    </path>
                                                </svg>
                                                <span>Delete</span>
                                            </button>

                                        </div>
                                    </li>
                                @empty
                                    <li class="text-sm">Select Barangay first.</li>
                                @endforelse
                            </ul>
                        </div>
                        {{-- @dump($is_checked) --}}
                    </div>
                    <div class="mt-3">
                        <x-textarea label="Message Area" wire:model.defer="message" placeholder="write message" />
                    </div>
                    <div class="mt-8 flex justify-end items-center space-x-3">
                        <x-button label="Clear" rounded class="font-bold" />
                        <x-button label="{{ $is_checked == null ? 'Send to All' : 'Send SMS' }}" wire:click="sendSMS"
                            spinner="sendSMS" right-icon="annotation" positive rounded class="font-bold" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-modal wire:model.defer="edit_modal" max-width="6xl" align=center>
        <x-card title="Resident Information">
            <div class="grid grid-cols-3 gap-4">
                <x-input wire:model="firstname" label="Firstname" placeholder="" />
                <x-input wire:model="middlename" label="Middlename" placeholder="" />
                <x-input wire:model="lastname" label="Lastname" placeholder="" />
                <div class="col-span-2">
                    <x-input wire:model="address" label="Address" placeholder="" />
                </div>
                <x-input wire:model="contact_number" label="Contact Number" placeholder="" />
                <x-input wire:model="year" label="Years of Stay" placeholder="" />
                <div class="xl:col-span-3">
                    <label class="text-sm text-gray-700 font-medium" for="">Resident ID</label>

                    @if ($update_image)
                        <div class="relative w-[40rem] ">
                            <img src="{{ $update_image->temporaryUrl() }}" class="w-full rounded-lg" alt="">
                            <div class="absolute bg-gray-400 bg-opacity-50 rounded-lg top-0 left-0 right-0 bottom-0">
                                <label
                                    class="flex justify-center w-[40rem] h-full px-4  transition  border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-green-600 focus:outline-none">
                                    <span class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <span class="font-medium text-white">
                                            Drop files to Attach, or
                                            <span class="text-yellow-200 underline">browse</span>
                                        </span>
                                    </span>
                                    <input type="file" wire:model="update_image" name="file_upload"
                                        class="hidden">
                                </label>
                            </div>
                        </div>
                    @else
                        <div class="relative w-[40rem] ">
                            <img src="{{ Storage::url($image) }}" class="w-full rounded-lg" alt="">
                            <div class="absolute bg-gray-400 bg-opacity-50 rounded-lg top-0 left-0 right-0 bottom-0">
                                <label
                                    class="flex justify-center w-[40rem] h-full px-4  transition  border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-green-600 focus:outline-none">
                                    <span class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <span class="font-medium text-white">
                                            Drop files to Attach, or
                                            <span class="text-yellow-200 underline">browse</span>
                                        </span>
                                    </span>
                                    <input type="file" wire:model="update_image" name="file_upload"
                                        class="hidden">
                                </label>
                            </div>
                        </div>
                    @endif

                    @error('image')
                        <span class="error text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <x-slot name="footer">
                <div class="flex justify-end gap-x-4">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button positive label="Update Changes" wire:click="updateRecords" spinner="updateRecords"
                        right-icon="arrow-right" rounded class="font-bold " />
                </div>
            </x-slot>
        </x-card>
    </x-modal>
</div>
