<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white bg-opacity-80 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
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
                    <div class="mt-3">
                        <div class="flex justify-between items-center">
                            <span>List of Residents</span>
                            <span>No. of residents: {{ $barangay ? $lists->count() : 0 }}</span>
                        </div>
                        <div class="mt-1 border-2 shadow-lg h-56">
                            <ul class="p-4">
                                @forelse ($lists as $list)
                                    <li>{{ $list->firstname . ' ' . $list->lastname }}</li>
                                @empty
                                    <li class="text-sm">Select Barangay first.</li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <div class="mt-3">
                        <x-textarea label="Message Area" wire:model.defer="message" placeholder="write message" />
                    </div>
                    <div class="mt-8 flex justify-end items-center space-x-3">
                        <x-button label="Clear" rounded class="font-bold" />
                        <x-button label="Send SMS" wire:click="sendSMS" spinner="sendSMS" right-icon="annotation"
                            positive rounded class="font-bold" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
