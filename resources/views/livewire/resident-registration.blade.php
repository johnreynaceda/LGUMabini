<div>
    <div class="mt-10">
        <div class="lg:w-96">
            <x-native-select label="*Barangay" wire:model.defer="barangay">
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
        <div class=" mt-5">
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-5">
                <x-input label="*First Name" wire:model.defer="firstname" required />
                <div class="col-span-1 flex flex-1 space-x-3  w-full items-end">
                    <div class="div w-full">
                        <x-input label="*Middle Initial" class="w-full flex-1" wire:model.defer="middlename" />
                    </div>
                    <x-checkbox id="right-label" label="N/A" wire:model="na" />
                </div>
                <x-input label="*Last Name" wire:model.defer="lastname" />
                <div class="xl:col-span-2">
                    <x-input label="*Address" wire:model.defer="address" />
                </div>
                <x-input label="*Contact Number" wire:model.defer="contact" />
                <x-input type="*number" label="*Years of Stay" wire:model.defer="stay" />
                <div class="xl:col-span-3">
                    <label class="text-sm text-gray-700 font-medium" for="">*Upload your ID</label>

                    @if ($image)
                        <div class="relative w-[40rem] ">
                            <img src="{{ $image->temporaryUrl() }}" class="w-full rounded-lg" alt="">
                            <div class="absolute bg-gray-400 bg-opacity-50 rounded-lg top-0 left-0 right-0 bottom-0">
                                <label
                                    class="flex justify-center w-[40rem] h-full px-4  transition  border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-green-600 focus:outline-none">
                                    <span class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <span class="font-medium text-white">
                                            Drop files to Attach, or
                                            <span class="text-yellow-200 underline">browse</span>
                                        </span>
                                    </span>
                                    <input type="file" wire:model="image" name="file_upload" class="hidden">
                                </label>
                            </div>
                        </div>
                    @else
                        <label
                            class="flex justify-center w-[40rem] h-32 px-4 mt-2 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-green-600 focus:outline-none">
                            <span class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <span class="font-medium text-gray-600">
                                    Drop files to Attach, or
                                    <span class="text-blue-600 underline">browse</span>
                                </span>
                            </span>
                            <input type="file" wire:model="image" name="file_upload" class="hidden">
                        </label>
                    @endif

                    @error('image')
                        <span class="error text-sm text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div wire:loading wire:target="image">
                    Uploading Image...
                </div>
            </div>

            <script>
                function onClick(e) {
                    e.preventDefault();
                    grecaptcha.enterprise.ready(async () => {
                        const token = await grecaptcha.enterprise.execute('6LcQ8EgnAAAAAIoCJBLXY_8pzFa0T37jM6vCBuQZ', {
                            action: 'LOGIN'
                        });
                        // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
                        // reCAPTCHA Enterprise to the end user's browser.
                        // This token must be validated by creating an assessment.
                        // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
                    });
                }
            </script>

        </div>

        <div class="mt-8 flex justify-end space-x-3 items-center">
            <x-button label="Cancel" class="font-bold px-8" rounded flat negative />
            <x-button label="Submit Information" class="font-bold px-8" wire:click="submitRecord"
                spinner="submitRecord" positive rounded right-icon="arrow-right" />
        </div>
    </div>
</div>
