<div>

	<div x-data="{ modalShow: false, imageSrc: '' }">
		<div @notify.window="imageSrc = $event.detail.imageSrc; modalShow = true;"
		     x-show="modalShow"
		     x-cloak
		     class="fixed z-10 inset-0 overflow-y-auto"
		     role="dialog"
		     aria-modal="true">
			<div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0">
				<div class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block" aria-hidden="true"></div>

				<span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

				<div class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl">
					<div class="relative bg-transparent flex justify-center p-10 overflow-hidden sm:px-6 sm:pt-8 md:p-6 lg:p-20">
						<button x-on:click="modalShow = false;" type="button" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
							<span class="sr-only">Close</span>
							<i class="text-3xl text-black fa-light fa-times"></i>
						</button>

						<div x-on:click.outside="modalShow = false;" class="grid grid-cols-1 justify-center">
							<div class="max-h-screen aspect-w-2 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden sm:col-span-4 lg:col-span-5">
								<img :src="imageSrc" class="max-h-screen object-center">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="py-10">
        <div class="grid grid-cols-3 gap-5">

            @foreach($images as $image)
                <div class="px-2">
                    <div class="bg-gray-400">
                        <a x-on:click="$dispatch('notify', { imageSrc: '{{ $image }}' })" class="cursor-pointer">
                            <img alt="Placeholder" class="object-fit w-full" src="{{ $image }}">
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</div>

