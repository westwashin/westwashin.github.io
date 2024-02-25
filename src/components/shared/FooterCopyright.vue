<script>
export default {
	data: () => {
		return {
			copyrightDate: new Date().getFullYear(),
			projectName: 'westwashin',
			author: 'westwashin',
		};
	},
};
</script>

<template>
	<div class="flex justify-center items-center text-center">
		<div
			class="font-general-regular text-lg text-ternary-dark dark:text-ternary-light"
		>
			&copy; {{ copyrightDate }}
			<a
				href="https://github.com/westwashin"
				target="__blank"
				class="font-general-medium hover:underline hover:text-blue-600 dark:hover:text-blue-300 duration-500"
			>
				{{ projectName }}
			</a>
		</div>
	</div>
</template>

<style lang="scss" scoped></style>
