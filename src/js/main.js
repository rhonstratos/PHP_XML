function callToast() {
	const option = {
		animation: true,
		autohide: true,
		delay: 3000
	};
	const toastElList = [].slice.call(
		document.querySelectorAll('.toast')
	);
	const toastList = toastElList.map((toastEl) => {
		return new bootstrap.Toast(toastEl, option)
	});

	toastList.forEach(toast => toast.show());
}

export { callToast }