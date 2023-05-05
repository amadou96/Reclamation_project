<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
    <div class="flex flex-wrap justify-center">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Effectuer réclamation
            </p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form method="POST" wire:submit.prevent='store'>
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="nom" class="block text-sm font-medium text-gray-700">Prénom</label>
                  <input type="text" name="nom" id="nom" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  wire:model='nom'>
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="prenom" class="block text-sm font-medium text-gray-700">Nom</label>
                  <input type="text" name="prenom" id="prenom" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  wire:model='prenom'>
                </div>
  
                <div class="col-span-6 sm:col-span-4">
                  <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  wire:model='email'>
                </div>
  
                <div class="col-span-6 sm:col-span-3">
                  <label for="promo" class="block text-sm font-medium text-gray-700">Promo</label>
                  <select id="promo" name="promo" autocomplete="promo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  wire:model='promo'>
                    <option>Promotion 3</option>
                    <option>Promotion 4</option>
                    <option>Promotion 5</option>
                    <option>Promotion 6</option>
                    <option>Promotion 7</option>
                    <option>Promotion 8</option>
                    <option>Promotion 9</option>
                    <option>Promotion 10</option>
            
                  </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="formation" class="block text-sm font-medium text-gray-700">Promo</label>
                    <select id="formation" name="formation" autocomplete="promo" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    wire:model='formation'>
                      <option>MAI</option>
                      <option>IDA</option>
                      <option>MIC</option>
                      <option>AGN</option>
                      <option>CYB</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="formation" class="block text-sm font-medium text-gray-700">Promo</label>
                    <select id="semestre" name="semestre" autocomplete="semestre" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    wire:model='semestre'>
                      <option>S1</option>
                      <option>S2</option>
                      <option>S3</option>
                      <option>S4</option>
                      <option>S5</option>
                      <option>S6</option>
                      <option>M1S1</option>
                      <option>M1S2</option>
                      <option>M2S3</option>
                      <option>M2S4</option>
                    </select>
                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label for="eno" class="block text-sm font-medium text-gray-700">Promo</label>
                    <select id="eno" name="eno" autocomplete="eno" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    wire:model='formation'>
                      <option>BIGNONA</option>
                      <option>DAKAR</option>
                      <option>DIOURBEL</option>
                      <option>GUEDIAWAYE</option>
                      <option>ZIGUINCHOR</option>
                      <option>KOLDA</option>
                      <option>MBOUR</option>
                      <option>THIES</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Envoyer
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>