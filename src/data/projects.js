// Projects data.
// Note: Here we are getting data from a js file, but in a different project I'll be fetching these projects from some srt of APIs.

const projects = [
	{
		id: 1,
		title: 'SIM Pendaftaran Event',
		category: 'Web Application',
		img: require('@/assets/images/project-1.png'),
	},
	{
		id: 2,
		title: 'Website Pemesanan Tour',
		category: 'Web Application',
		img: require('@/assets/images/project-2.png'),
	},
	{
		id: 3,
		title: 'Aplikasi Prediksi',
		category: 'Data Analytics',
		img: require('@/assets/images/project-3.png'),
	},
	{
		id: 4,
		title: 'UMKM Apps',
		category: 'Web Application',
		img: require('@/assets/images/project-4.png'),
	},
	// {
	// 	id: 5,
	// 	title: 'React Social App',
	// 	category: 'Mobile Application',
	// 	img: require('@/assets/images/mobile-project-1.jpg'),
	// },
	// {
	// 	id: 6,
	// 	title: 'Apple Design System',
	// 	category: 'Web Application',
	// 	img: require('@/assets/images/web-project-1.jpg'),
	// },
];

export default projects;
