<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
    <div class="flex flex-wrap justify-center">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Ajouter patient
            </p>
            <form method="POST" wire:submit.prevent='store'>
                <div class="leading-loose">
                    <form class="p-10 bg-white rounded shadow-xl">
                        <div class="">
                            <label class="block text-sm text-gray-600" for="name">Code patient</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="code" name="code" type="text" required="" placeholder="Code" aria-label="Name"
                            wire:model='code' readonly>
                        </div>
                        <div class="">
                            <label class="block text-sm text-gray-600" for="name">Nom</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" 
                            @error('name') border-2 border-red-400
                            @enderror id="name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name"
                            wire:model='name'>
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded"
                            @error('email') border-2 border-red-400
                            @enderror
                             id="email" name="email" type="text" required="" placeholder="Email" aria-label="Email"
                            wire:model='email'>
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="email">Contact</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded"
                            @error('contact') border-2 border-red-400
                            @enderror
                            id="contact" name="contact" type="text" required="" placeholder="Contact" aria-label="Email"
                            wire:model='contact'>
                        </div>
                        <div class="mt-2">
                            <label class=" block text-sm text-gray-600" for="message">Note</label>
                            <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="notes" name="notes" rows="6" required="" placeholder="Diagnostic" aria-label="Note"
                            wire:model='notes'></textarea>
                        </div>
                        <div class="mt-6">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Enregistrer patient</button>
                        </div>
                    </form>
                </div>
            </form>
        </div>
</div>