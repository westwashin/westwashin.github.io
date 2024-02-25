<script>
export default {
	setup() {
		return {
			bios: [
				{
					id: 1,
					bio:
						'I am a Computer Science Freshgraduate. I really like new things that can develop my potential. I am intrested in Data Science Analytics, Design, Software Development, and Web Development. ',
				},
				{
					id: 2,
					bio:
						'Therefore i always want to learn and be able to implement and share knowledge so that, it can be useful.',
				},

				// 				{
				// 	id: 3,
				// 	bio:
				// 		'Cada vez mais, sei que meu trabalho vai muito além do visual: se trata de transmitir essências, uma mensagem para ser contada junto com boas histórias!',
				// },
			],
		};
	},
};
</script>

<template>
	<div class="block sm:flex sm:gap-10 mt-10 sm:mt-20">
		<!-- About profile image -->
		<div class="w-full sm:w-1/4 mb-7 sm:mb-0">
			<img
				src="@/assets/images/syuja.jpeg"
				class="rounded-xl w-96"
				alt=""
			/>
		</div>

		<!-- About details -->
		<div class="w-full sm:w-3/4 text-left">
			<p
				v-for="bio in bios"
				:key="bio.id"
				class="font-general-regular mb-4 text-ternary-dark dark:text-ternary-light text-lg"
			>
				{{ bio.bio }}
			</p>
		</div>
	</div>
</template>
